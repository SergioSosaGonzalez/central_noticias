<?php
namespace Modules\Dashboard\Controllers;
use Modules\Models\CdUser;
use Phalcon\Http\Request;

class UserController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function ajaxAction()
    {
        $request= new Request();
        if(!($request->isPost() and $request->isAjax()))$this->response(array("message"=>"gato"),404);

        $contra = $request->getPost('contrasenia');
        $contraEncriptada = password_hash($contra,PASSWORD_BCRYPT);

        $cdUser = new CdUser();
        $cdUser->save([
            "name"=>$request->getPost('PrimerNombre'),
            "second_name"=>$request->getPost('SegundoNombre'),
            "last_name"=>$request->getPost('apellidos'),
            "sex"=>$request->getPost('sexo'),
            "phone"=>$request->getPost('telefono'),
            "username"=>$request->getPost('username'),
            "password"=>$contraEncriptada,
            "email"=>$request->getPost('correo'),
            "rol"=>$request->getPost('rol'),
            "photo"=>$request->getPost('foto'),
            "date_creation"=>$request->getPost('fechaCreacion'),
            "status"=>$request->getPost('estatus'),
            "date_last_sesion"=>"",
            "cargo"=>$request->getPost('cargo'),
            "type_executive"=>$request->getPost('ejecutivo')
        ]);

        $this->response(array("message"=>"correcto",
                              "code"=>200,
                              "PrimerNombre"=>$request->getPost('PrimerNombre'),
                              "segundo_nombre"=>$request->getPost('SegundoNombre'),
                              "rol"=>$request->getPost('rol'),
                              "sexo"=>$request->getPost('sexo'),
                              "contra"=>$contraEncriptada),
                              200);
    }
}

