$(document).ready(function () {

       $(document).on("click","#btnEliminar",function () {
           var idEliminar=$(this).data("eliminar");

           var isDelte=confirm("¿Desea eliminar este dato?");
           if(isDelte)
           {
               $.ajax({
                 url:"/dashboard/user/ajaxdelete",
                 method:"post",
                 data: {id:idEliminar},
                 dataType:"json",
                 success:function (resp) {
                     console.log(resp);
                     alert("Dato eliminado correctamente");
                     $("."+idEliminar).remove();
                 },error:function () {
                 },complete:function(){
                 }
               });
           }else{
               alert("Se ha cancelado la accion");
           }
       });

       $(document).on("click","#bActualizarContra",function () {
            var id= $(this).data("contra");
            $("input[name=idPassword]").val(id);
       });

       $(document).on("submit",'#formPass',function (e) {
            e.preventDefault();
            $.ajax({
                 url:"/dashboard/user/password",
                 method:"post",
                 data:$(this).serialize(),
                 dataType:"json",
                 success:function (resp) {
                     console.log(resp);
                     alert("Password cambiado correctamente");
                 },error: function () {

                 },complete:function(){

                 }
             });

       });

       $(document).on("click","#bActualizarDatos",function () {
           var id=document.getElementsByName('id')[0].value;
           var primerNombre = document.getElementsByName('primerNombre')[0].value;
           var secondName = document.getElementsByName('segundoNombre')[0].value;
           var apellidos = document.getElementsByName('apellidos')[0].value;
           var sex =document.getElementsByName('sex')[0].value;
           var telefono = document.getElementsByName('telefono')[0].value;
           var username = document.getElementsByName('username')[0].value;
           var email = document.getElementsByName('email')[0].value;
           var rol = document.getElementsByName('rol')[0].value;
           var foto = document.getElementsByName('foto')[0].value;
           var estatus = document.getElementsByName('estatus')[0].value;
           var ejecutivo = document.getElementsByName('ejecutivo')[0].value;


           $.ajax({
              url:"/dashboard/user/ajaxactualizar",
              method:"post",
              data:{id:id,primerNombre:primerNombre,segundoNombre:secondName,
                    apellidos:apellidos,sex:sex,telefono:telefono,username:username,email:email,rol:rol,
                    foto:foto,estatus:estatus,ejecutivo:ejecutivo},
              dataType:"json",
              success:function (resp) {
                  console.log(resp);
                  alert("Datos actualizados correctamente");
                  $("."+resp.id+" .primerNombre").text(resp.nombre);
                  $("."+resp.id+" .segundoNombre").text(resp.segundoNombre);
                  $("."+resp.id+" .apellidos").text(resp.apellidos);
                  $("."+resp.id+" .phone").text(resp.telefono);
                  $("."+resp.id+" .username").text(resp.username);
                  $("."+resp.id+" .correo").text(resp.correo);
                  $("."+resp.id+" .date_creation").text(resp.fecha);
                  $("."+resp.id+" .estado").text(resp.estado);

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
                  $("input[name=email]").val(resp.email);
                  $("select[name=rol]").val(resp.rol);
                  $("select[name=estatus]").val(resp.estatus);
                  $("select[name=ejecutivo]").val(resp.type_executive);
                  $("input[name=foto]").val(resp.photo);
              },error:function (jqXHR,estado,error) {
                   
              },complete:function (jqXHR,estado) {
               }
           });
       });
});

function permalink(selector,type,form){
    selector.on('keyup',function(){
        var title = $(this).val();
        $.ajax({
            url : "/dashboard/validateurl",
            type : "POST",
            data : {title:title,type:type},
            dataType : "json",
            success : function(response){
                if(response.message=="SUCCESS" && response.code==200){
                    $("#"+type).val(response.new_url);
                    form.formValidation('revalidateField', type);
                }else{
                    alert("Ha ocurrido un error intente nuevamente.");
                }
            },
            complete: function(){
            }
        });
    });
}

