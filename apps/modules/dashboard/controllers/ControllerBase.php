<?php
namespace Modules\Dashboard\Controllers;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller{
   public function initialize(){
        $this->view->setLayout("index");
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
        exit();
    }


}
