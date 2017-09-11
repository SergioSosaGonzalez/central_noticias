$(document).ready(function () {
    
    $(document).on("submit","#inicioSesion", function (e) {
       var email = document.getElementsByName('email')[0].value;
       var password = document.getElementsByName('password')[0].value;

           e.preventDefault();
           $.ajax({
               url:"/login/ajax",
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

    });
})