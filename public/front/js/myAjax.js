$(document).ready(function(){

    $(document).on("click","#bIniciarSesion",function () {
         location.href="/login";
    });
    $(document).on("click","#bGuardarFormulario",function () {
        var nombre = document.getElementsByName("nombre")[0].value;
        var apePaterno = document.getElementsByName("ape_paterno")[0].value;
        var apeMaterno = document.getElementsByName("ape_materno")[0].value;
        var email=document.getElementsByName("correo")[0].value;
        var mensaje = document.getElementsByName("mensaje")[0].value;
          $.ajax({
              url:"/index/ajax",
              data:{'name':nombre,'apePaterno':apePaterno,'apeMaterno':apeMaterno,'email':email,'mensaje':mensaje},
              dataType:"json",
              method:"post",
              success:function(resp) {
                  alert("Datos guardados correctamente");
                  console.log(resp);
                  $("#myTable").append('<tr>'+
                      '<td>'+resp.id+'</td>'+
                      '<td>'+resp.nombre+'</td>'+
                      '<td>'+resp.ape_paterno+'</td>'+
                      '<td>'+resp.ape_materno+'</td>'+
                      '<td>'+resp.correo+'</td>'+
                      '<td>'+resp.mensaje+'</td>'+
                      '<td>'+'<button type="button" id="botones" class="btn btn-primary" data-toggle="modal" data-target="#myModalUpdate" "> <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> </button>'+'</td>'+
                      '<td>'+'<button type="button" id="bEliminar" value="Eliminar"  class="btn btn-danger" name=""><i class="fa fa-times" aria-hidden="true"></i></button>'+'</td>'+
                      '</tr>');

              },  error: function(jqXHR,estado,error){
                  console.log(estado);
                  console.log(error);
              },complete: function(jqXHR,estado){
                  console.log(estado);
              }
          });
    });
    
    $(document).on("click","#botones",function () {
        var id =$(this).data("ids");

            $.ajax({
                url:"/index/ajaxupdate",
                method:"post",
                data: {'id':id},
                dataType:"json",
                success:function (resp) {
                    console.log(resp);
                    $("input[name=identificacion]").val(resp.id);
                    $("input[name='nombre1']").val(resp.nombre);
                    $("input[name='ape_paterno1']").val(resp.ape_paterno);
                    $("input[name='ape_materno1']").val(resp.ape_materno);
                    $("input[name='correo1']").val(resp.correo);
                    $("textarea[name='mensaje1']").val(resp.mensaje);

                }
            });
    });

    $(document).on("click","#btnActualizar",function () {
        var identificacion = document.getElementsByName("identificacion")[0].value;
        var name=document.getElementsByName("nombre1")[0].value;
        var ape_paterno=document.getElementsByName("ape_paterno1")[0].value;
        var ape_materno=document.getElementsByName("ape_materno1")[0].value;
        var correo = document.getElementsByName("correo1")[0].value;
        var mensaje = document.getElementsByName("mensaje1")[0].value;

        $.ajax({
            url:"/index/ajaxactualizado",
            type: "POST",
            data: {id_update:identificacion,nombreUpdate:name,ape_paterno1:ape_paterno, ape_materno1:ape_materno,correo1:correo,mensaje1:mensaje},
            dataType:'JSON',
            success: function(resp){
                alert("Datos cambiados correctamente");

                $("."+resp.id+" .nombres").text(resp.nombre);
                $("."+resp.id+" .apePaternos").text(resp.ape_paterno);
                $("."+resp.id+" .apeMaternos").text(resp.ape_materno);
                $("."+resp.id+" .emails").text(resp.correo);
                $("."+resp.id+" .msjs").text(resp.mensaje);
                console.log(resp.id);
            },
            error: function(jqXHR,estado,error){
                console.log(estado);
                console.log(error);
            },complete: function(jqXHR,estado){
                console.log(estado);
            }
        })
    });
    
    $(document).on("click","#bEliminar",function () {

        var idDelete = $(this).data("eliminar");

        var isDelete = confirm("¿Desea eliminar este dato?");
        if(isDelete)
        {
            $.ajax({
                url: "/index/ajaxdelete",
                type: "POST",
                data: {id_delete:idDelete},
                //dataType: 'JSON',
                success: function(resp){
                    alert("Dato eliminado correctamente");
                    $("."+idDelete).remove();

                    console.log(resp);
                },
                error: function(jqXHR,estado,error){
                    console.log(estado);
                    console.log(error);
                },complete: function(jqXHR,estado){
                    console.log(estado);
                }

            })
        }else{
            alert("No se elimino");
        }
    });
    /*
  $(document).on("click","#bEliminar",function(){
    var idEliminar = $(this).data("eliminar");

    var isDelete=confirm("¿Desea eliminar este dato?");
    if(isDelete){

      $.ajax({
         url: "eliminar.php",
         type: "POST",
         data: {id_delete:idEliminar},
         //dataType: 'JSON',
         success: function(resp){
         alert("Dato eliminado correctamente");
         $("."+idEliminar).remove();

         console.log(resp);
      },
      error: function(jqXHR,estado,error){
        console.log(estado);
        console.log(error);
      },complete: function(jqXHR,estado){
        console.log(estado);
      }

    })
    }else{
      alert("No funciona");
   }

    });
     

    $(document).on("click","#btnActualizar",function(){
      var identificacion = document.getElementsByName("identificacion")[0].value;
      var name=document.getElementsByName("nombre1")[0].value;
      var ape_paterno=document.getElementsByName("ape_paterno1")[0].value;
      var ape_materno=document.getElementsByName("ape_materno1")[0].value;
      var correo = document.getElementsByName("correo1")[0].value;
      var mensaje = document.getElementsByName("mensaje1")[0].value;

      
      $.ajax({
        url:"actualizar.php",
        type: "POST",
        data: {id_update:identificacion,nombreUpdate:name,ape_paterno1:ape_paterno, ape_materno1:ape_materno,correo1:correo,mensaje1:mensaje},
        dataType:'JSON',
        success: function(resp){
          alert("Datos cambiados correctamente");
          var val = resp.data;
          $("."+val.id+" .nombres").text(val.nombre);
          $("."+val.id+" .apePaterno").text(val.ape_paterno);
          $("."+val.id+" .apeMaterno").text(val.ape_materno);
          $("."+val.id+" .email").text(val.correo);
          $("."+val.id+" .msj").text(val.mensaje);
          console.log(val.id);
        },
        error: function(jqXHR,estado,error){
          console.log(estado);
          console.log(error);
        },complete: function(jqXHR,estado){
          console.log(estado);
        }
      })
      
    });


    
    $(document).on("click","#botones",function(){
      var id = $(this).data("ids");

         $.ajax({
         url:"recepcion_id.php",
         type:"POST",
         data: {id_update:id},
         dataType:'JSON',
         success: function(resp){
          console.log(resp);
          var consulta =resp.data;
          $("input[name=identificacion]").val(consulta.id);
          $("input[name='nombre1']").val(consulta.nombre);
          $("input[name='ape_paterno1']").val(consulta.ape_paterno);
          $("input[name='ape_materno1']").val(consulta.ape_materno);
          $("input[name='correo1']").val(consulta.correo);
          $("textarea[name='mensaje1']").val(consulta.mensaje);
         },
         error:function(jqXHR,estado,error){

          console.log(estado);
          console.log(error);
         },complete: function(jqXHR,estado){
          console.log(estado);
        },
        timeout: 1000 
       })
       
    });
     
   
    

    var pet = $('#formulario').attr('action');
    var met = $('#formulario').attr('method');
    
    $('#formulario').on('submit',function(e){
      
     e.preventDefault();
     $.ajax({
         url: pet,
         type: met,
         data: $(this).serialize(),
         dataType:'JSON',
         success: function(resp){
              alert("Datos enviados correctamente");
              var val = resp.data;
             console.log(val);
             //$("input[name='nombre']").val("");
             $("#myTable").append('<tr>'+
              '<td>'+val.id+'</td>'+
              '<td>'+val.nombre+'</td>'+
              '<td>'+val.ape_paterno+'</td>'+
              '<td>'+val.ape_materno+'</td>'+
              '<td>'+val.correo+'</td>'+
              '<td>'+val.mensaje+'</td>'+
              '<td>'+'<button type="button" id="botones" class="btn btn-primary" data-toggle="modal" data-target="#myModalUpdate" data-ids="'+val.id+'"> <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> </button>'+'</td>'+
              '<td>'+'<button type="button" id="bEliminar" value="Eliminar" data-eliminar="'+val.id+'" class="btn btn-danger" name=""><i class="fa fa-times" aria-hidden="true"></i></button>'+'</td>'+
              '</tr>');
         },
         error: function(jqXHR,estado,error){
          console.log(estado);
          console.log(error);
        },
        complete: function(jqXHR,estado){
          console.log(estado);
        },
        timeout: 1000
     })
  });
  */
})