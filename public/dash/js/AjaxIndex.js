$(document).ready(function () {

    $(document).on("submit","#form",function (e) {

        e.preventDefault();
        $.ajax({
          url:"/dashboard/user/ajax",
          method:"post",
          data:$(this).serialize(),
          dataType:"json",
          success: function (resp) {
              console.log(resp);
              alert(resp.PrimerNombre);
          },error: function (jqXHR,estado,error) {
              console.log(jqXHR);
              console.log(estado);
              console.log(error);
          },complete:function (jqXHR,estado) {
          }
        });
    });


})