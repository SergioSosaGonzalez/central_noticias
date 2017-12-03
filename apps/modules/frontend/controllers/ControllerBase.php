<?php
namespace Modules\Frontend\Controllers;
use Modules\Models\CdCategory;
use Phalcon\Mvc\Controller;
class ControllerBase extends Controller
{
    public function initialize()
    {
        $consulta = CdCategory::find();
        $this->view->setVar("consulta",$consulta);
    }
    public function suma($a,$b)
    {
    	return $a+$b;
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

    public function compararFechas($primeraFecha,$segundaFecha){
        $valoresPrimera = explode ("-", $primeraFecha);
        $valoresSegunda = explode ("-", $segundaFecha);
        $diaPrimera    = intval($valoresPrimera[2]);
        $mesPrimera  = intval($valoresPrimera[1]);
        $anyoPrimera   = intval($valoresPrimera[0]);
        $diaSegunda   = intval($valoresSegunda[2]);
        $mesSegunda = intval($valoresSegunda[1]);
        $anyoSegunda  = intval($valoresSegunda[0]);
        $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);
        $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);

        if($diasPrimeraJuliano==$diasSegundaJuliano){
            return true;
        }else {
            return false;
        }
    }
}
