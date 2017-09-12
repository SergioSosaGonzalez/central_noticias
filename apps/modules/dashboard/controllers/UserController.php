<?php
namespace Modules\Dashboard\Controllers;
use Modules\Models\CdUser;
use Phalcon\Http\Request;

class UserController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function ajaxAction()
    {
        $request= new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"gato"),404);

        $contra = $request->getPost('contrasenia');
        $contraEncriptada = password_hash($contra,PASSWORD_BCRYPT);
        $cdUser = new CdUser();
        $cdUser->save([
            "name"=>$request->getPost('PrimerNombre'),
            "second_name"=>$request->getPost('SegundoNombre'),
            "last_name"=>$request->getPost('apellidos'),
            "sex"=>$request->getPost('sexo'),
            "phone"=>$request->getPost('telefono'),
            "username"=>$request->getPost('username'),
            "password"=>$contraEncriptada,
            "email"=>$request->getPost('correo'),
            "rol"=>$request->getPost('rol'),
            "photo"=>$request->getPost('foto'),
            "date_creation"=>$request->getPost('fechaCreacion'),
            "status"=>$request->getPost('estatus'),
            "date_last_sesion"=>"",
            "cargo"=>$request->getPost('cargo'),
            "type_executive"=>$request->getPost('ejecutivo')
        ]);

        $this->response(array("message"=>"correcto",
                              "code"=>200,
                              "PrimerNombre"=>$request->getPost('PrimerNombre'),
                              "segundo_nombre"=>$request->getPost('SegundoNombre'),
                              "rol"=>$request->getPost('rol'),
                              "sexo"=>$request->getPost('sexo'),
                              "contra"=>$contraEncriptada),
                              200);
    }

    public function listaAction(){

        $consulta=CdUser::find();
        $this->view->setVar("consulta",$consulta);

    }

    public function ajaxconsultaAction(){
        $reques= new Request();
        if(!($reques->isPost() and $reques->isAjax()))$this->response(array("message"=>"Error"),404);
        $consulta= CdUser::findFirst($reques->getPost('pId'));

        $this->response(array("message"=>"correcto",
                              "id"=>$consulta->getUid(),
                              "primer_nombre"=>$consulta->getName(),
                              "segundo_nombre"=>$consulta->getSecondName(),
                              "last_name"=>$consulta->getLastName(),
                              "sex"=>$consulta->getSex(),
                              "phone"=>$consulta->getPhone(),
                              "username"=>$consulta->getUsername(),
                              "email"=>$consulta->getEmail(),
                              "rol"=>$consulta->getRol(),
                              "photo"=>$consulta->getPhoto(),
                              "date_creation"=>$consulta->getDateCreation(),
                              "cargo"=>$consulta->getCargo(),
                              "type_executive"=>$consulta->getTypeExecutive(),
                              "estatus"=>$consulta->getStatus()),
                              200);
    }
    public function emailAction(){
        $request = new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
        $email = $request->getPost("correo");
        if(!$email)$this->response(array("message"=>"Value not found"),200);

        $cd_user = CdUser::findFirst("email='$email'");
        if(!$cd_user) $this->response(array("valid"=>true),200);
        $this->response(array("valid"=>false),200);
    }

    public function usernameAction(){
        $request = new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
        $username = $request->getPost('username');
        if(!$username)$this->response(array("message"=>"Valor no encontrado"),200);

        $consulta = CdUser::findFirst("username='$username'");
        if(!$consulta)$this->response(array("valid"=>true),200);
        $this->response(array("valid"=>false),200);
    }

    public function ajaxactualizarAction()
    {
        $request=new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);

        $consulta = CdUser::findFirst($request->getPost('id'));
        $consulta->setName($request->getPost('primerNombre'));
        $consulta->setSecondName($request->getPost('segundoNombre'));
        $consulta->setLastName($request->getPost('apellidos'));
        $consulta->setSex($request->getPost('sex'));
        $consulta->setPhone($request->getPost('telefono'));
        $consulta->setUsername($request->getPost('username'));
        $consulta->setEmail($request->getPost('email'));
        $consulta->setRol($request->getPost('rol'));
        $consulta->setPhoto($request->getPost('foto'));
        $consulta->setStatus($request->getPost('estatus'));
        $consulta->setTypeExecutive($request->getPost('ejecutivo'));

        $consulta->save();


        $this->response(array("message"=>"correcto",
                              "id"=>$request->getPost('id'),
                              "nombre"=>$consulta->getName(),
                              "segundoNombre"=>$consulta->getSecondName())
                              ,200);

    }
    public function ajaxdeleteAction(){

        $request= new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);

        $formulario = CdUser::findFirst($request->getPost('id'));
        if(!($formulario && $formulario->delete())) $this->response(array("message"=>"No se ha podido borrar","code"=>300),200);

        $this->response(array("message"=>"complete"),200);

    }
}

