$(document).ready(function () {

       $(document).on("click","#bActualizarDatos",function () {
           var id=document.getElementsByName('id')[0].value;
           var secondName = document.getElementsByName('segundoNombre')[0].value;

           $.ajax({
              url:"/dashboard/user/ajaxactualizar",
              method:"post",
              data:{id:id,segundoNombre:secondName},
              dataType:"json",
              success:function (resp) {
                  console.log(resp);

              },error: function () {

               },complete: function () {

               }
           });

       });
       $(document).on("click","#btnActualizar ",function () {
           var id = $(this).data("ids");
           $.ajax({
              url:"/dashboard/user/ajaxconsulta",
              method:"post",
              data:{pId:id},
              dataType:"json",
              success:function (resp){
                  console.log(resp);
                  $("input[name=id]").val(resp.id);
                  $("input[name=primerNombre]").val(resp.primer_nombre);
                  $("input[name=segundoNombre]").val(resp.segundo_nombre);
                  $("input[name=apellidos]").val(resp.last_name);
                  $("input[name=sex]").val(resp.sex);
                  $("input[name=telefono]").val(resp.phone);
                  $("input[name=username]").val(resp.username);
                  $("input[name=email]").val(resp.username);
                  $("input[name=rol]").val(resp.rol);
                  $("select[name=estatus]").val(resp.estatus);
                  $("select[name=ejecutivo]").val(resp.type_executive);
                  $("input[name=foto]").val(resp.photo);
              },error:function (jqXHR,estado,error) {
                   
              },complete:function (jqXHR,estado) {
               }
           });
       });
    $(document).on("submit","#form",function (e) {

        e.preventDefault();
        $.ajax({
          url:"/dashboard/user/ajax",
          method:"post",
          data:$(this).serialize(),
          dataType:"json",
          success: function (resp) {
              console.log(resp);
              alert("Datos guardados correctamente");
          },error: function (jqXHR,estado,error) {
              console.log(jqXHR);
              console.log(estado);
              console.log(error);
          },complete:function (jqXHR,estado) {
          }
        });
    });



})

