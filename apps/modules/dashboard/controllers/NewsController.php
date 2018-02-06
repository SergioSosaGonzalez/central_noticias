<?php
namespace Modules\Dashboard\Controllers;
use Modules\Dashboard\Plugins\Security;
use Modules\Models\CdCategory;
use Modules\Models\CdEnterprise;
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
         $enterprise= CdEnterprise::find();
         $this->view->setVar("empresa",$enterprise);
    }

    public function newenterpriseAction(){
        $request= new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
        $enterprise = new CdEnterprise();
        $enterprise->save([
            "name"=>$request->getPost('name_enterprise'),
            "date_creation"=> date("Y:m:d h:i:s")
        ]);

        $consulta = CdEnterprise::find();
        $html = array();
        foreach ($consulta as $key):
             $html[]="<option value=".$key->getEntid().">".$key->getName()."</option>";
        endforeach;
        $this->response(array("message"=>"correcto","html"=>$html),200);

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
            "subid"=>$request->getPost('subid'),
            "visits"=>0
        ]);
        $consultaNew = CdNews::find();
        $newid=0;
        foreach ($consultaNew as $key):
        $newid=$key->getNewid();
        endforeach;
       $periodico = new CdPeriodico();
       $periodico->save([
           "uid"=>$auth['uid'],
           "newid"=>$newid,
           "entid"=>$request->getPost('entid')
       ]);

       if($request->getPost('image-3')!=null){
       $array_imagenes= $request->getPost('image-3');
       foreach ($array_imagenes as $key=>$i):
             $gallery= new CdGallery();
             $gallery->setImg($i);
             $gallery->setDateCreation(date("Y:m:d H:i:s"));
             $gallery->setNewid($newid);
             $gallery->save();
       endforeach;
           $this->response(array("message"=>"correcto con galeria"),200);
       }
        $this->response(array("message"=>"correcto"),200);
    }

    public function positionsliderAction(){
        $id=$_GET['id'];
        $request=new Request();
        if(!($request->isAjax() and $request->isPost()))$this->response(array("message"=>"error"),404);

        $tablesPositions=$request->getPost('table-1');
        $gallid=$request->getPost('idGall');

        $contador=0;
        $consulta =CdGallery::find(          "newid=".$id);
        foreach ($consulta as $key=>$cnv):
            $contador++;
            $galeria = CdGallery::findFirst("gallid=".$gallid[$key]);
            $galeria->setPosition($contador);
            $galeria->save();
        endforeach;

        $this->response(array("message"=>"correcto","positions"=>$tablesPositions,"gallid"=>$gallid),200);
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

        $gallery= CdGallery::find("newid=".$id."Order By position"  );
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

    public function deletenewAction()
    {
        $request= new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
        $gallery=CdGallery::find("newid=".$request->getPost('id'));
        foreach ($gallery as $cnv):
            $cnv->delete();
            endforeach;
         $periodico = CdPeriodico::findFirst("newid=".$request->getPost('id'));
         $periodico->delete();
        $new = CdNews::findFirst("newid=".$request->getPost('id'));
        $new->delete();
        $this->response(array("message"=>"correcto","id"=>$request->getPost('id')),200);
    }
}

