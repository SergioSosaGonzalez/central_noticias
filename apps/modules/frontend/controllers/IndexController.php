<?php
namespace Modules\Frontend\Controllers;


use Modules\Models\CdCategory;
use Modules\Models\CdGallery;
use Modules\Models\CdNews;
use Modules\Models\CdSubcategory;
use Phalcon\Http\Response;
use Modules\Models\Cdapired;
use Modules\Models\Formulario;
use Modules\Models\Red\CdPost;
use Phalcon\Forms\Form;
use Phalcon\Http\Request;
use Phalcon\Mvc\Model\Query;

class IndexController extends ControllerBase {
    public function indexAction(){
        $noticias = CdNews::find();
        $noticias = $noticias->toArray();
        $this->view->setVar("noticias",$noticias);
        $clases=array("first","second","third","fourth");
        $this->view->setVar("clases",$clases);
        $destacados_internacionales =CdNews::find([
            "subid=46 Order By visits desc"
        ]);
        $destacados_internacionales=$destacados_internacionales->toArray();
        $destacadosArrayInternacionales=array();
        for($i=0;$i<4;$i++){
              if($destacados_internacionales[$i]['visits']>20){
                  $destacadosArrayInternacionales[]=$destacados_internacionales[$i];
              }
        }
        $this->view->setVar("internacionalesDestacadas",$destacadosArrayInternacionales);

        $destacadasNacionales = CdNews::find([
            "subid=47 Order By visits desc"
        ]);
        $destacadasNacionales = $destacadasNacionales->toArray();
        $destNationalArray=array();
        for($j=0;$j<4;$j++){
            if($destacadasNacionales[$j]['visits']>20){
                $destNationalArray[]=$destacadasNacionales[$j];
              }
        }
        $this->view->setVar("destNationalArray",$destNationalArray);
        $feedbackNewa=array();
        $fechaActual=date("Y-m-d");
        $noticiasFeed= CdNews::find();
        foreach ($noticiasFeed as $key):
        $fechaNoticiaa=date("Y-m-d",strtotime($key->getDateCreation()))."<br>";
        if($this->compararFechas($fechaActual,$fechaNoticiaa)){
            $feedbackNewa[]=$key->toArray();
        }
        endforeach;
        $this->view->setVar("feed",$feedbackNewa);
        $subcategoria= CdSubcategory::find('catid=3');
        $arrayEntretaiment=array();
        foreach ($subcategoria as $key):
            $newsEntretaiment=CdNews::findFirst('subid='.$key->getSubid());
             if($newsEntretaiment){
                   if(empty($arrayEntretaiment)){
                       $arrayEntretaiment[]=$newsEntretaiment->toArray();
                   }else{
                       if($arrayEntretaiment[0]['visits']<$newsEntretaiment->getVisits()){
                             unset($arrayEntretaiment[0]);
                             $arrayEntretaiment[0]=$newsEntretaiment->toArray();
                       }
                   }
             }
            endforeach;
            $this->view->setVar("newsEntretaiment",$arrayEntretaiment);
            $subcategoria2= CdSubcategory::find('catid=5');
            $arrayPolitic=array();
            $contador=0;
            foreach($subcategoria2 as $cnv):
                $contador++;
                $newsPolitics = CdNews::find([
                    'subid=:subid: Order By visits desc',
                    'bind'=>[
                        'subid'=>$cnv->getSubid()
                    ]
                ]);
                if($newsPolitics){
                    foreach ($newsPolitics as $key):
                         $arrayPolitic[]=$key->toArray();
                    endforeach;
                  }
             endforeach;

        for ($i = 1; $i < count($arrayPolitic); $i++) {
            for ($j = 0; $j <count($arrayPolitic) - $i; $j++) {
                if ($arrayPolitic[$j]['visits'] < $arrayPolitic[$j+1]['visits']){
                    $k = $arrayPolitic[$j + 1];
                    $arrayPolitic[$j + 1] = $arrayPolitic[$j];
                    $arrayPolitic[$j]= $k;
                }
            }
        }

        $this->view->setVar("arraPolitic",$arrayPolitic);
    }


    public function ajaxAction(){}

    public function ajaxupdateAction(){}

    public function ajaxactualizadoAction(){}

    public function ajaxdeleteAction(){}
    public function outputAction(){
        $cd = $this->request->getJsonRawBody();

        $cdapired=new Cdapired();
        $cdapired->save([
            "title"=>"hola todos",
            "image"=>"jjjjahahaha.jpg"
        ]);

        $response = new Response();
        if($cdapired){
            $response->setStatusCode(201, 'Created');
            $response->setJsonContent(
                [
                    'status' => 'OK',
                    'data'   => $cdapired,
                ]
            );
        }else {
            // Change the HTTP status
            $response->setStatusCode(409, 'Conflict');

            // Send errors to the client
            $errors = [];

            foreach ($cdapired->getMessages() as $message) {
                $errors[] = $message->getMessage();
            }

            $response->setJsonContent(
                [
                    'status'   => 'ERROR',
                    'messages' => $errors,
                ]
            );
        }
        return $response;
    }

    public function dataAction($id){

        $cd = $this->request->getJsonRawBody();
        $cdapired=Cdapired::findFirst("pid='$id'");
        if(!$cdapired){
            $this->response(array("message"=>"No se ha encontrado ese id solicitado"),200);
            exit();

        }
        $cdapired->setTitle("que tal");
        $cdapired->setImage("holi.png");
        $cdapired->save();

        $response = new Response();
        if($cdapired){
            $response->setStatusCode(201, 'Created');
            $response->setJsonContent(
                [
                    'status' => 'OK',
                    'data'   => $cdapired,
                ]
            );
        }else {
            // Change the HTTP status
            $response->setStatusCode(409, 'Conflict');

            // Send errors to the client
            $errors = [];

            foreach ($cdapired->getMessages() as $message) {
                $errors[] = $message->getMessage();
            }

            $response->setJsonContent(
                [
                    'status'   => 'ERROR',
                    'messages' => $errors,
                ]
            );
        }
        return $response;

    }

    public function apideleteAction($id){

        $cd = $this->request->getJsonRawBody();
        $cdapired=Cdapired::findFirst("pid='$id'");
        if(!$cdapired){
            $this->response(array("message"=>"No se ha encontrado ese id solicitado"),200);
            exit();
        }

        if(!($cdapired && $cdapired->delete())) $this->response(array("message"=>"No se ha podido borrar","code"=>300),200);

        $response = new Response();
        if($cdapired){
            $response->setStatusCode(201, 'Created');
            $response->setJsonContent(
                [
                    'status' => 'OK',
                    'data'   => $cdapired,
                ]
            );
        }else {
            // Change the HTTP status
            $response->setStatusCode(409, 'Conflict');

            // Send errors to the client
            $errors = [];

            foreach ($cdapired->getMessages() as $message) {
                $errors[] = $message->getMessage();
            }

            $response->setJsonContent(
                [
                    'status'   => 'ERROR',
                    'messages' => $errors,
                ]
            );
        }
        return $response;

    }

    public function apiconsultaAction(){
        $post = CdNews::find();

        $this->response(array($post->toArray()),200);
    }

    public function apicategoryAction(){
        $category=CdCategory::find();
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type,x-prototype-version,x-requested-with');

        $this->response($category->toArray(),200);
    }

    public function apibuscarnombreAction($name){

        $consulta =CdPost::findFirst("permalink='$name'");
        if(!$consulta) $this->response(array("message"=>"No se ha encontrado el objeto"),200);
        $this->response(array("datos"=>$consulta->toArray()),200);
    }

    public function apibuscaridAction($id){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type,x-prototype-version,x-requested-with');
        $consulta =CdSubcategory::find("catid='$id'");
        foreach ($consulta as $key):
            $consulta_noticias=CdNews::find("subid=".$key->getSubid());
            $array_news[]=$consulta_noticias->toArray();
        endforeach;
        $array_limpio=array();

        for($i=0;$i<count($array_news);$i++){
             if(count($array_news[$i])>0){
                 for($j=0;$j<count($array_news[$i]);$j++){
                     $array_limpio[]=$array_news[$i][$j];
                 }
             }
        }
        $this->response($array_limpio,200);
    }

    public function verpaginasAction(){
          $permalinks=$this->dispatcher->getParam('permalinks');
          $subcategory = CdSubcategory::findFirst("permalink='$permalinks'");
          $news= CdNews::find("subid=".$subcategory->getSubid());
          $this->view->setVar("news",$news);
          $this->view->setVar("nombre",$subcategory->getName());
          $this->view->setVar("permalink",$permalinks);
    }

    public function seenewAction(){
            $newName= $this->dispatcher->getParam('newname');
            $new = CdNews::findFirst("permalink='$newName'");
            $this->view->setVar("new",$new);
            $galeria = CdGallery::find("newid=".$new->getNewid());
            $this->view->setVar("galeria",$galeria);
    }

}