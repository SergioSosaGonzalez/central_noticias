<?php
namespace Modules\Dashboard\Controllers;
use Modules\Dashboard\Plugins\Security;
use Modules\Models\CdCategory;
use Modules\Models\CdSubcategory;
use Modules\Models\CdUser;
use Phalcon\Http\Request;

class CategoryController extends ControllerBase
{
    public function indexAction()
    {
        $consulta=CdCategory::find();
        $this->view->setVar("consulta",$consulta);

    }

    public function newcategoryAction(){
       $request = new Request();
       if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
       $category= new CdCategory();
       $category->save([
          "name"=>$request->getPost('nameCategory'),
          "permalink"=>$request->getPost('permalinkCategory'),
          "date_creation"=>date("Y:m:d H:i:s")
       ]);
       $id="";
       $consulta = CdCategory::find();
       foreach ($consulta as $key):
           $id=$key->getCatid();
           endforeach;
       if($category->save()){
           $this->response(array("message"=>"correcto",
                                 "id"=>$id,
                                 "name"=>$request->getPost('nameCategory'),
                                 "permalink"=>$request->getPost('permalinkCategory')),200);
       }else{
           $this->response(array("message"=>"error al guardar en la base de datos"),404);
       }

    }

    public function subcategoryAction(){
        $id=$this->dispatcher->getParam('id');
        $consulta = CdSubcategory::find("catid=".$id);
        $this->view->setVar("consulta",$consulta);
        $this->view->setVar("id",$id);
    }

    public function newsubcategoryAction(){
        $request= new Request();
        if(!($request->isAjax() and $request->isPost()))$this->response(array("message"=>"error"),404);
        $subcategory = new CdSubcategory();
        $subcategory->save([
           "name"=>$request->getPost('nameSubCategory'),
           "permalink"=>$request->getPost('permalinkSubCategory'),
           "date_creation"=>date('Y:m:d H:i:s'),
           "catid"=>$request->getPost('id')
        ]);
        $id="";
        $consulta = CdSubcategory::find();
        foreach ($consulta as $key):
            $id=$key->getSubid();
            endforeach;
        $this->response(array("message"=>"correcto",
                              "name"=>$request->getPost('nameSubCategory'),
                               "permalink"=>$request->getPost('permalinkSubCategory'),
                               "id"=>$id),200);

    }

    public function consultardatosAction(){
        $request= new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"error"),404);
        if($request->getPost('idCategory')){
            $category = CdCategory::findFirst("catid=".$request->getPost('idCategory'));
            $this->response(array("message"=>"correcto",
                                 "id"=>$request->getPost('idCategory'),
                                 "name"=>$category->getName(),
                                 "permalink"=>$category->getPermalink()),200);
        }elseif($request->getPost('idSubcategory')){
            $subcategory = CdSubcategory::findFirst("subid=".$request->getPost('idSubcategory'));
            $this->response(array("message"=>"correcto",
                "id"=>$request->getPost('idSubcategory'),
                "name"=>$subcategory->getName(),
                "permalink"=>$subcategory->getPermalink()),200);

        }
    }

    public function deletecategoriesAction(){
        $reques=new Request();
        if(!($reques->isPost() and $reques->isAjax()))$this->response(array("message"=>"error"),404);
        $subcategory = CdSubcategory::findFirst('subid='.$reques->getPost('id_subcategory'));
        $subcategory->delete();
        $this->response(array("message"=>"correcto","id"=>$reques->getPost('id_subcategory')),200);
    }

    public function editcategoryAction(){

        $request= new Request();
        if(!($request->isAjax() and $request->isPost()))$this->response(array("message"=>"error"),404);
        if($request->getPost('id_category')){
            $category = CdCategory::findFirst('catid='.$request->getPost('id_category'));
            $category->setName($request->getPost('nameEditCategory'));
            $category->setPermalink($request->getPost('permalinkEditCategory'));
            $category->save();
            $this->response(array("message"=>"correcto",
                                  "id"=>$request->getPost('id_category'),
                                  "name"=>$request->getPost('nameEditCategory'),
                                  "permalink"=>$request->getPost('permalinkEditCategory')),200);
        }elseif ($request->getPost('id_subcategory')){
            $category = CdSubcategory::findFirst('subid='.$request->getPost('id_subcategory'));
            $category->setName($request->getPost('nameEditSubCategory'));
            $category->setPermalink($request->getPost('permalinkEditSubCategory'));
            $category->save();
            $this->response(array("message"=>"correcto",
                "id"=>$request->getPost('id_subcategory'),
                "name"=>$request->getPost('nameEditSubCategory'),
                "permalink"=>$request->getPost('permalinkEditSubCategory')),200);
        }


    }
}

