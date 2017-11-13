<?php
namespace Modules\Dashboard\Controllers;
use Phalcon\Assets\Filters\Cssmin;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller{
   public function initialize(){
       $this->assets->collection('JsIndex')
                    ->setTargetPath("dash/js/general.min.js")
                    ->setTargetUri("dash/js/general.min.js")
                    ->addJs("dash/js/jquery.min.js")
                    ->addJs("dash/js/AjaxIndex.js")
                    ->addJs("dash/js/tether.min.js")
                    ->addJs("dash/js/bootstrap.min.js")
                    ->addJs("dash/js/chart.min.js")
                    ->addJs("dash/js/jquery.nicescroll.js")
                    ->addJs("dash/js/jquery.scrollUp.min.js")
                    ->addJs("dash/js/jquery.nicescroll.js")
                    ->addJs("dash/js/js.cookie.js")
                    ->addJs("dash/js/ncms.min.js")
                    ->addJs("dash/js/site-config.js")
                    ->addJs("dash/js/jquery.dataTables.min.js")
                    ->join(true)
                    ->addFilter(new \Phalcon\Assets\Filters\Jsmin());

       $this->assets->collection('CssIndex')
                    ->setTargetPath("dash/css/general.min.css")
                    ->setTargetUri("dash/css/general.min.css")
                    ->addCss("dash/css/bootstrap.min.css")
                    ->addCss("dash/css/animate.css")
                    ->addCss("dash/css/font-awesome.css")
                    ->addCss("dash/css/chartist.min.css")
                    ->addCss("dash/css/ncms.min.css")
                    ->addCss("dash/css/pace.min.css")
                    ->addCss("dash/css/site.min.css")
                    ->addCss("dash/css/icomoon.css")
                    ->addCss("dash/css/jquery.scrollUp.css")
                    ->addCss("dash/css/myStyleUser.css")
                    ->addCss("dash/css/jquery.dataTables.min.css")
                    ->addCss("dash/css/formValidation.min.css")
                    ->addCss("dash/css/sweetalert2.min.css")
                    ->addCss("dash/bower_components/dropzone/dist/dropzone.css")
                    ->join(true)
                    ->addFilter(new Cssmin());
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
    protected function url_clean($string) {
        $string = mb_strtolower(str_replace(' ', '-',str_replace('-','',$string)), 'UTF-8');
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '-',
            '/:/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
            '/!/'           =>   '', // UTF-8 hyphen to "normal" hyphen
            '/¡/'           =>   '', // UTF-8 hyphen to "normal" hyphen
            '/@/'           =>   '', // UTF-8 hyphen to "normal" hyphen
            '/,/'           =>   '', // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚¿?]/u'    => '', // Literally a single quote
            '/[“”«»„""]/u'    => '', // Double quote
            '/ /'           =>   '', // nonbreaking space (equiv. to 0x160)
        );
        $string = preg_replace('/[^A-Za-z0-9áéíóúÁÉÍÓÚñÑ\-!¡¿?@]/', '', $string); // Removes special chars.
        return preg_replace(array_keys($utf8),array_values($utf8),$string); // Removes special chars.
        //'/[^A-Za-z0-9áéíóúÁÉÍÓÚñÑ\-!¡¿?@]/', '',
    }


}
