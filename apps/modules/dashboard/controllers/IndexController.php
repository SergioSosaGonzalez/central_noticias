<?php
namespace Modules\Dashboard\Controllers;
use Modules\Models\CdCategory;
use Modules\Models\CdGallery;
use Modules\Models\CdSubcategory;
use Modules\Models\CdUser;
use Modules\Models\Red\CdPost;
use Phalcon\Http\Request;

include dirname(dirname(dirname(dirname(__FILE__))))."/library/wideimage/WideImage.php";
require dirname(dirname(dirname(dirname(__FILE__))))."/library/PHPMailer/PHPMailerAutoload.php";


class IndexController extends ControllerBase{
    public function indexAction(){
    }
    public function validateurlAction(){
        $request = $this->request;
        if($request->isPost() && $request->isAjax() ){
            $post = new CdCategory();
            $name_post = $request->getPost("title");
            $new_url = $this->url_clean($name_post);
            $check_url = $post->find("permalink = '$new_url'");
            $count = 1;
            while(count($check_url)){
                $generate_url = $new_url."-".$count;
                $check_url = $post->find("permalink = '$generate_url'");
                if(count($check_url)==0){
                    $new_url = $generate_url;
                }
                $count++;
            }
            $this->response(array("message"=>"SUCCESS","new_url"=>$new_url,"code"=>"200","data"=>"url generated"),200);
        }else{
            $this->response(array("message"=>"error"),200);
        }
    }

    public function uploadimageAction(){
        $request= new Request();
        if($request->isPost() and $request->isAjax()){
            if($request->hasFiles()==true){
                foreach ($request->getUploadedFiles() as $file){
                    $image_replace = preg_replace('/[^A-Za-z0-9áéíóúÁÉÍÓÚñÑ\_\.!¡¿?]/', '', $file->getName());
                    $new_image =$image_replace;
                    if ($file->moveTo(dirname(dirname(dirname(dirname(__DIR__)))) . "/public/dash/src/" . $new_image)) {
                           if($request->getPost("file-post")){
                               $gallery = new CdGallery();
                               $gallery->save([
                                      "img"=>$new_image,
                                      "date_creation"=>date("Y:m:d H:i:s"),
                                      "newid"=>$request->getPost("file-post")
                               ]);
                           }
                        $this->response(array("name" => $new_image, "message" => "SUCCESS", "code" => "200"), 200);
                    } else {
                        $this->response(array("name" => $new_image, "message" => "error try again", "code" => "404"), 200);
                    }
                }
            }
        }else{
            exit();
        }
    }

    public function deleteimageAction(){

        $request = $this->request;
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
        $image = $request->getPost("image");
        if($image){
            $consulta = CdGallery::findFirst($image);
            $name_image = $consulta->getImg();
            if($consulta->delete()){
                if(file_exists('./dash/src/'.$name_image)){
                    unlink("./dash/src/".$name_image);
                    $this->response(array("message"=>"SUCCESS","code"=>"200"),200);
                }else{
                    $this->response(array("message"=>"error: No se ha encontrado una imagen","code"=>"200"),200);
                }
            }
        }else{
            $this->response(array("message"=>"file null","code"=>"200"),200);
        }

    }

    public function consultarcategoryAction(){
          $request= new Request();
          if(!($request->isAjax() and $request->isPost()))$this->response(array("message"=>"error"),404);
          $subcategory = CdSubcategory::find('catid='.$request->getPost('id'));
          $html=array();
          foreach ($subcategory as $key):
              $html[]="<option value=".$key->getSubid().">".$key->getName()."</option>";
              endforeach;
          $this->response(array("message"=>"correcto","html"=>$html),200);

    }
}
