<?php
date_default_timezone_set('America/Mexico_City');
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//error_reporting(E_ALL);
ini_set('display_errors',true);
//error_reporting(0);

$di = new \Phalcon\DI\FactoryDefault();
$di->set('url', function(){
    $url = new \Phalcon\Mvc\Url();
    $url->setBaseUri("http://".$_SERVER["SERVER_NAME"]."/");
    return $url;
});

$di->set('router', function(){

    $router = new \Phalcon\Mvc\Router();
    $router->setDefaultModule("frontend");

    $router->add("/", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'index',
    ));


    $router->add("/apiconsulta", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'apiconsulta',
    ));


    $router->add("/output", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'output',
    ));

/*Secciones*/
    $router->add('/([0-9-a-zA-Z\-]+)', array(
        'module'=>'frontend',
        'controller'=>'index',
        'action'=>'1'
    ))->setName("controllers")->convert('action', function($action) {
            return \Phalcon\Text::lower(\Phalcon\Text::camelize($action));
    });

 /* dashboard */
    $router->add("/dashboard", array(
        'module'=>'dashboard',
        'controller' => 'index',
        'action' => 'index',
    ));



    $router->add("/login", array(
        'module'=>'dashboard',
        'controller' => 'login',
        'action' => 'index',
    ));
    $router->add("/logout",array(
        'module'=>'dashboard',
        'controller' => 'login',
        'action' => 'logout',
    ));
    $router->add('/([0-9-a-zA-Z\-]+)/([0-9-a-zA-Z\-]+)', array(
        'module'=>'dashboard',
        'controller'=>'1',
        'action'=>'2'
    ))->setName("controllers")->convert('action', function($action) {
        return \Phalcon\Text::lower(\Phalcon\Text::camelize($action));
    });
    $router->add("/apibuscarnombre/{name}", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'apibuscarnombre',
    ));
    $router->add("/apibuscarid/{id:[0-9]+}", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'apibuscarid',
    ));


    $router->add("/data/{id:[0-9]+}", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'data',
    ));
    $router->add("/apidelete/{id:[0-9]+}", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'apidelete',
    ));

    $router->add("/apicategorias", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'apicategory',
    ));
    $router->add("/ver-noticias/([0-9-a-zA-Z\-]+)", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'verpaginas',
        'permalinks'=>1
    ));
    $router->add("/ver-noticias/([0-9-a-zA-Z\-]+)/([0-9-a-zA-Z\-]+)", array(
        'module'=>'frontend',
        'controller' => 'index',
        'action' => 'seenew',
        'subcategory'=>1,
        'newname'=>2
    ));

    $router->add("/login/ajax",array(
        'module'=>'dashboard',
        'controller' => 'login',
        'action' => 'ajax',
    ));

    $router->add("/dashboard/lista",array(
        'module'=>'dashboard',
        'controller' => 'user',
        'action' => 'lista',
    ));
    $router->add("/dashboard/lista-noticias",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'index',
    ));

    $router->add("/dashboard/positionslider",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'positionslider'
    ));




    $router->add("/dashboard/validateurl",array(
        'module'=>'dashboard',
        'controller' => 'index',
        'action' => 'validateurl',
    ));
    $router->add("/dashboard/usuarios",array(
        'module'=>'dashboard',
        'controller' => 'user',
        'action' => 'index',
    ));


    $router->add("/dashboard/newenterprise",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'newenterprise',
    ));


    $router->add("/dashboard/categorias-noticias", array(
        'module'=>'dashboard',
        'controller' => 'category',
        'action' => 'index',
    ));
    $router->add('/dashboard/([0-9-a-zA-Z\-]+)/([0-9-a-zA-Z\-]+)', array(
        'module'=>'dashboard',
        'controller'=>'1',
        'action'=>'2'
    ))->setName("controllers")->convert('action', function($action) {
        return \Phalcon\Text::lower(\Phalcon\Text::camelize($action));
    });
    $router->add("/dashboard/editar-noticia/([0-9]+)",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'editnew',
        'id'=>1
    ));

    $router->add("/dashboard/categorias-noticias/newcategory",array(
        'module'=>'dashboard',
        'controller' => 'category',
        'action' => 'newcategory',
    ));
    $router->add("/dashboard/categorias-noticias/newsubcategory",array(
        'module'=>'dashboard',
        'controller' => 'category',
        'action' => 'newsubcategory',
    ));

    $router->add("/dashboard/categorias-noticias/consultardatos",array(
        'module'=>'dashboard',
        'controller' => 'category',
        'action' => 'consultardatos',
    ));

    $router->add("/dashboard/categorias-noticias/editsubcategory",array(
        'module'=>'dashboard',
        'controller' => 'category',
        'action' => 'editcategory',
    ));
    $router->add("/dashboard/crear-noticia",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'createnew',
    ));

    $router->add("/dashboard/delete-noticia",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'deletenew',
    ));

    $router->add("/uploadimage",array(
        'module'=>'dashboard',
        'controller' => 'index',
        'action' => 'uploadimage',
    ));

    $router->add("/deleteimage",array(
        'module'=>'dashboard',
        'controller' => 'index',
        'action' => 'deleteimage',
    ));

    $router->add("/consultar-category",array(
        'module'=>'dashboard',
        'controller' => 'index',
        'action' => 'consultarcategory',
    ));


    $router->add("/dashboard/updatenew",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'updatenew',
    ));

    $router->add("/dashboard/crear-noticia/nuevanoticia",array(
        'module'=>'dashboard',
        'controller' => 'news',
        'action' => 'nuevanoticia',
    ));



    $router->add("/dashboard/categorias-noticias/editsubcategory/deletecategories",array(
        'module'=>'dashboard',
        'controller' => 'category',
        'action' => 'deletecategories',
    ));



    $router->add("/dashboard/categorias-noticias/subcategorias/([0-9]+)",array(
        'module'=>'dashboard',
        'controller' => 'category',
        'action' => 'subcategory',
        'id'=>1
    ));


    return $router;
});

/**
 * Start the session the first time some component request the session service
 */
$di->set('dispatcher', function() use ($di){
    $dispatcher = new \Phalcon\Mvc\Dispatcher();
    $eventsManager = $di->getShared('eventsManager');
    $security = new Security($di);
    $security->setWorkFactor(50);
    $eventsManager->attach('dispatch', $security);
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

$di->set('session', function () {
    $session = new Phalcon\Session\Adapter\Files();
    $session->start();

    return $session;
});
$di->set('collectionManager', function(){
    return new Phalcon\Mvc\Collection\Manager();
}, true);

$application = new \Phalcon\Mvc\Application();
$di->set('cookies', function () {
    $cookies = new Phalcon\Http\Response\Cookies();
    $cookies->useEncryption(false);
    return $cookies;
});


//Pass the DI to the application
$application->setDI($di);

//Register the installed modules
$application->registerModules(array(
            'frontend' => array(
                'className' => 'Modules\Frontend\Module',
                'path' =>'../apps/modules/frontend/Module.php'
            ),
            'dashboard' => array(
                'className' => 'Modules\Dashboard\Module',
                'path' =>'../apps/modules/dashboard/Module.php'
            )
        ));
echo $application->handle()->getContent();
