<?php
namespace Modules\Dashboard\Controllers;
use Modules\Models\CdCategory;
use Modules\Models\CdUser;
use Modules\Models\Red\CdPost;

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
}
