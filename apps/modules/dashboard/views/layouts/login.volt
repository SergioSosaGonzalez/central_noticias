<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <!-- META SECTION -->
    <title>Iniciar sesión</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--Meta Google-->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="nofollow">
    <meta name="googlebot" content="nofollow">
    <meta name="google" content="notranslate" />
    <meta name="author" content="Chontal Developers" />
    <meta name="copyright" content="2015 c-develpers.com Todos los derechos reservados." />
    <meta name="application-name" content="C-Developers" />
    <link rel="author" href="https://plus.google.com/u/0/101316577346995540804/posts"/>

    <!-- CSS INCLUDE -->

    <link rel="stylesheet" type="text/css" href="<?=$this->url->get("dash/css/bootstrap.min.css")?>">
    <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/font-awesome.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/myStyle.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/formValidation.min.css')?>"




    <!-- EOF CSS INCLUDE -->
</head>
<body>
{{ content() }}


<!--Contenido del script-->

<script src="<?=$this->url->get('dash/js/jquery.min.js')?>"></script>
<script src="<?=$this->url->get('dash/js/bootstrap.min.js')?>"></script>
<script src="<?=$this->url->get('dash/js/editable.js')?>"></script>
<script src="<?=$this->url->get('dash/js/ajaxLogin.js')?>"></script>
<script src="<?=$this->url->get('dash/js/preloader.js')?>"></script>
<script src="<?=$this->url->get('dash/js/formValidation.min.js')?>"></script>
<script src="<?=$this->url->get('dash/js/bootstrapV.min.js')?>"></script>

<script>
    $(document).ready(function() {

        $('#inicioSesion').formValidation({
            framework:'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },fields: {
                email:{
                    validators: {
                        notEmpty: {
                            message:'Se requiere email'
                        }
                    }
                },
                password: {
                    validators:{
                        notEmpty:{
                            message:'Se requiere el password',

                        }
                    }
                }
            }
        }).on('success.form.fv', function(e) {
            e.preventDefault();
            $.ajax({
                url:"login/ajax",
                method: "post",
                data: $(this).serialize(),
                datatype:"json",
                success: function (resp) {
                    console.log(resp);
                    if(resp.message=="SUCCESS"){
                        window.location.replace("/dashboard");
                    }else{
                        alert("Contraseña o usuario incorrecto");
                    }
                },  error: function(jqXHR,estado,error){
                    console.log(estado);
                    console.log(error);
                },complete: function(jqXHR,estado){
                    console.log(estado);
                }
            });
        })
    })
</script>
<style>small.help-block {
        color: red;
    }</style>
</body>
</html>
