<?php
namespace Modules\Dashboard\Controllers;
use Modules\Dashboard\Plugins\Security;
use Modules\Models\CdCategory;
use Modules\Models\CdGallery;
use Modules\Models\CdNews;
use Modules\Models\CdPeriodico;
use Modules\Models\CdSubcategory;
use Modules\Models\CdUser;
use Phalcon\Http\Request;

class NewsController extends ControllerBase
{
    public function indexAction()
    {
        $consulta = CdNews::find();
        $this->view->setVar("consulta",$consulta);
    }

    public  function createnewAction(){
         $category= CdCategory::find();
         $this->view->setVar("categoria",$category);
    }

    public function nuevanoticiaAction(){
        $request= new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
        $news= new CdNews();
        $auth=$this->session->get("auth");
        $news->save([
           "title"=>$request->getPost('title'),
            "permalink"=>$request->getPost('permalink'),
            "subtitle"=>$request->getPost('subtitle'),
            "description"=>$request->getPost('description'),
            "content"=>$request->getPost('content'),
            "images"=>$request->getPost('image-2'),
            "type"=>$request->getPost('type'),
            "author"=>$request->getPost('author'),
            "date_creation"=>date("Y:m:d H:i:s"),
            "subid"=>$request->getPost('subid')
        ]);
        $consultaNew = CdNews::find();
        $newid=0;
        foreach ($consultaNew as $key):
        $newid=$key->getNewid();
        endforeach;
       $periodico = new CdPeriodico();
       $periodico->save([
           "name"=>$request->getPost("periodico"),
           "uid"=>$auth['uid'],
           "newid"=>$newid

       ]);

       $array_imagenes= $request->getPost('image-3');
       foreach ($array_imagenes as $key=>$i):
             $gallery= new CdGallery();
             $gallery->setImg($i);
             $gallery->setDateCreation(date("Y:m:d H:i:s"));
             $gallery->setNewid($newid);
             $gallery->save();
       endforeach;

        $this->response(array("message"=>"correcto"),200);
    }

    public function editnewAction(){
         $id=$this->dispatcher->getParam('id');
        $this->view->setVar("id",$id);

        $category= CdCategory::find();
        $this->view->setVar("categoria",$category);

        $new= CdNews::findFirst("newid=".$id);
        $subcategory= CdSubcategory::find('catid='.$new->getType());
        $this->view->setVar("new",$new);
        $this->view->setVar("subcategory",$subcategory);

        $gallery= CdGallery::find("newid=".$id);
        $this->view->setVar("gallery",$gallery);
    }

    public function updatenewAction(){
        $request= new Request();
        if(!($request->isAjax() and $request->isPost()))$this->response(array("message"=>"error"),404);
        $news= CdNews::findFirst("newid=".$request->getPost('id'));
        $news->setTitle($request->getPost('title'));
        $news->setPermalink($request->getPost('permalink'));
        $news->setSubtitle($request->getPost('subtitle'));
        $news->setImages($request->getPost('image-2'));
        $news->setDescription($request->getPost('description'));
        $news->setContent($request->getPost('content'));
        $news->setType($request->getPost('type'));
        $news->setSubid($request->getPost('subid'));
        $news->save();
        $this->response(array("message"=>"correcto"),200);
    }
}

