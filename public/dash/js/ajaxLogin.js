$(document).ready(function () {
    
    $(document).on("submit","#inicioSesion", function (e) {
        e.preventDefault();
       $.ajax({
            url:"/login/ajax",
            method: "post",
            data: $(this).serialize(),
            datatype:"json",
            success: function (resp) {
               alert("datos mandados correctamente");
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