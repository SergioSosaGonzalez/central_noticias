<?php
namespace Modules\Frontend\Controllers;

use Modules\Models\Formulario;
use Phalcon\Forms\Form;
use Phalcon\Http\Request;

class IndexController extends ControllerBase {
    public function indexAction(){


    	$this->view->setVar("suma",$this->suma(1,2));

    }




    public function ajaxAction(){




    }

    public function ajaxupdateAction(){


    }

    public function ajaxactualizadoAction(){


    }

    public function ajaxdeleteAction(){

    }

}