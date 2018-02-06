<?php
namespace Modules\Dashboard\Controllers;
use Dropbox\Exception;
use Modules\Models\CdUser;
use Phalcon\Http\Request;



class LoginController extends \Phalcon\Mvc\Controller
{
    public function initialize(){

        $this->view->setLayout('login');
        $this->_registerToken();

    }
    public function indexAction(){

        $session = $this->getSession();
        $this->view->setVar("key",$session["token"]);
    }

    public function ajaxAction()
    {
       $request = new Request();
       if(!($request->isPost() and $request->isAjax()))$this->response(array("menssage"=>"Error"),404);

       $email = $request->getPost('email');
       $password = $request->getPost('password');
       $consulta = CdUser::findFirst("email='$email'");
       if($consulta and $this->security->checkHash($password,$consulta->getPassword()))
       {
           $this->_registerSession($consulta);
           $this->session->remove("session");
           $this->response(array("message"=>"SUCCESS","code"=>200),200);
       }else{
           $this->response(array("Message"=>"usurio o contraseña incorrecta",
               "code"=> 200,
               "usuario"=>$request->getPost("email"),
               "password"=>$request->getPost("password")),200);
       }
    }
    public function sessionAction(){
        $session = $this->getSession();
        $key = $this->request->getPost("key");
        if($this->validate() && $session && hash_equals($key,$session["token"])){
            $request = $this->request;
            $user = new CdUser();
            $email      = $request->getPost("email");
            $password   = $request->getPost("password");
            $session = $user->findFirst("email='$email'");
            if(!$session){
                $this->response(array("message"=>"ERROR","code"=>400,"notification"=>"email incorrect"),200);
            }
            else if($session->getStatus()=="ACTIVE"){
                if($this->security->checkHash($password,$session->getPassword())){
                    $this->_registerSession($session);
                    $this->session->remove("session");
                    $this->response(array("message"=>"SUCCESS","code"=>200,"url"=>$this->url->getBaseUri()."inscription"),200);
                }
                else{
                    $this->response(array("message"=>"ERROR","code"=>300,"notification"=>"Password incorrect"),200);
                }
            }
        }
        else{
            $this->response(array("message"=>"ERROR","code"=>404,"notification"=>"Values Not found !!!"),404);
        }
    }
    public function _registerSession($user){
        $this->session->set("auth",array(
                "uid" => $user->getUid(),
                "username"=>$user->getUsername(),
                "rol"=>$user->getRol(),
                "name"=>$user->getName(),
                "photo"=>$user->getPhoto(),
                "email"=>$user->getEmail()
            )
        );
    }
    public function logoutAction(){
        $this->session->remove("auth");
        $this->session->remove("session");
        $this->response->redirect("login");
        $this->flash->success('Goodbye!');
    }
    public function response($dataArray,$status)
    {
        $this->view->disable();
        if($status==200){
            $this->response->setStatusCode($status, "OK");
        }else{
            $this->response->setStatusCode($status, "ERROR");
        }
        $this->response->setJsonContent($dataArray);
        $this->response->send();
    }
    public function validate(){
        if($this->request->isPost() && $this->request->isAjax()){
            return true;
        }else{
            return false;
        }
    }
    protected function getSession(){
        return $this->session->get("session");
    }
    private function generateToken(){
        return bin2hex(openssl_random_pseudo_bytes(32));
    }
    public function _registerToken(){
        $session = $this->getSession();
        if(empty($session)) {
            $this->session->set("session",array(
                    "token" => $this->generateToken(),
                )
            );
        }
    }
}
