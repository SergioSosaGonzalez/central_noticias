<?php
namespace Modules\Frontend\Controllers;

use Phalcon\Http\Response;
use Modules\Models\Cdapired;
use Modules\Models\Formulario;
use Modules\Models\Red\CdPost;
use Phalcon\Forms\Form;
use Phalcon\Http\Request;

class IndexController extends ControllerBase {
    public function indexAction(){


    }




    public function ajaxAction(){

    }

    public function ajaxupdateAction(){
    }

    public function ajaxactualizadoAction(){
    }

    public function ajaxdeleteAction(){
    }
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
        $post = CdPost::find();

        $this->response(array("datos"=>$post->toArray()),200);
    }

    public function apibuscarnombreAction($name){

        $consulta =CdPost::findFirst("permalink='$name'");
        if(!$consulta) $this->response(array("message"=>"No se ha encontrado el objeto"),200);
        $this->response(array("datos"=>$consulta->toArray()),200);
    }

    public function apibuscaridAction($id){

        $consulta =CdPost::findFirst("pid='$id'");
        if(!$consulta) $this->response(array("message"=>"No se ha encontrado el objeto"),200);
        $this->response(array("datos"=>$consulta->toArray()),200);
    }

}