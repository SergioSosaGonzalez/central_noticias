$(document).ready(function () {

    if($('#newCategory').length>=1){
     $('#newCategory').formValidation({
           framework:"bootstrap",
         icon: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
         locale: 'es_ES',
         fields:{
               nameCategory:{
                   validators:{
                       notEmpty:{
                           message:"rellenar campo"
                       }
                   }
               },
             permalinkCategory:{
                   validators:{
                       notEmpty:{
                           message:"Rellenar campo"
                       }
                   }
             }
         }
     }).on('success.form.fv',function (e) {
         e.preventDefault();
         $.ajax({
            url:"/dashboard/categorias-noticias/newcategory",
            method:"post",
            data:$(this).serialize(),
            dataType:"json",
            success:function (resp) {
                swal({
                    title: 'Datos guardados correctamente',
                    html: $('<div>')
                        .addClass('some-class')
                        .text('Datos guardatos correctamente.'),
                    animation: false,
                    customClass: 'animated tada'
                });
                $('#data-table-job').append('<tr id='+resp.id+'>'+
                '<td>'+resp.name+'</td>'+
                '<td>'+resp.permalink+'</td>'+
                '<td><button type="button" class="btn btn-sm btn-default" onclick="subcategory('+resp.id+')"><i class="fa fa-eye" aria-hidden="true"></i></button></td>'+
                '<td><button type="button" class="btn btn-sm btn-warning"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></button></td>'+
                '</tr>');
                console.log(resp);
            }
         });

     });
     permalink($('.cpCategory'),"permlinkCategory",$('#newCategory'));
    }
    if($('#newSubCategory').length>=1){
        $("#newSubCategory").formValidation({
            framework:"bootstrap",
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            locale: 'es_ES',
            fields:{
                nameSubCategory:{
                    validators:{
                        notEmpty:{
                            message:"rellenar campo"
                        }
                    }
                },
                permalinkSubCategory:{
                    validators:{
                        notEmpty:{
                            message:"Rellenar campo"
                        }
                    }
                }
            }
        }).on("success.form.fv",function (e) {
            e.preventDefault();
            $.ajax({
               url:"/dashboard/categorias-noticias/newsubcategory",
               method:"post",
               data:$(this).serialize(),
               dataType:"json",
               success:function (resp) {
                   swal({
                       position: 'top-center',
                       type: 'success',
                       title: 'Datos guardados correctamente',
                       showConfirmButton: false,
                       timer: 1500
                   });
                   $('#data-table-job1').append('<tr id='+resp.id+'>'+
                   '<td>'+resp.name+'</td>'+
                   '<td>'+resp.permalink+'</td>'+
                   '<td>' +
                       '<button type="button" id="bActualizarContra" class="btn btn-sm btn-warning">' +
                       '<i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>' +
                       '</button>'+
                       '<button type="button" class="btn btn-sm btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>'+
                    '</td>'+
                    '</tr>'
                   )
               } 
            });
        });
        permalink($('.cpSubCategory'),"permalinkSubCategory",$('#newSubCategory'));
    }

    $('.bActualizarCategoria').on('click',function () {
            var id=$(this).data('id');

            $('input[name=id_category]').val(id);
            $.ajax({
                url:"/dashboard/categorias-noticias/consultardatos",
                method:"post",
                data:{idCategory:id},
                dataType:"json",
                success:function (resp) {
                    $('input[name=nameEditCategory]').val(resp.name);
                    $('input[name=permalinkEditCategory]').val(resp.permalink);
                }
            })
        });
    $('.bActualizarSubCategoria').on('click',function () {
       var id = $(this).data("id");
        $('input[name=id_subcategory]').val(id);
        $.ajax({
            url:"/dashboard/categorias-noticias/consultardatos",
            method:"post",
            data:{idSubcategory:id},
            dataType:"json",
            success:function (resp) {
                $('input[name=nameEditSubCategory]').val(resp.name);
                $('input[name=permalinkEditSubCategory]').val(resp.permalink);
            }
        });
    });


    if($('#editCategory').length>=1){
        $('#editCategory').formValidation({
            framework:"bootstrap",
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            locale: 'es_ES',
            fields:{
                nameEditCategory:{
                    validators:{
                        notEmpty:{
                            message:"rellenar campo"
                        }
                    }
                },
                permalinkEditCategory:{
                    validators:{
                        notEmpty:{
                            message:"Rellenar campo"
                        }
                    }
                }
            }
        }).on('success.form.fv',function (e) {
            e.preventDefault();
            $.ajax({
                url:"/dashboard/categorias-noticias/editsubcategory",
                method:"post",
                data:$(this).serialize(),
                dataType:"json",
                success:function (resp) {
                    swal({
                        position: 'top-center',
                        type: 'success',
                        title: 'Datos guardados correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#'+resp.id+" .categoryName").text(resp.name);
                    $('#'+resp.id+" .categoryPermalink").text(resp.permalink);

                }
            })
        });
        permalink($('.cpEditCategory'),'permlinkEditCategory',$('#editCategory'));
    }
    if($('#editSubCategory').length>=1){
        $('#editSubCategory').formValidation({
            framework:"bootstrap",
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            locale: 'es_ES',
            fields:{
                nameEditSubCategory:{
                    validators:{
                        notEmpty:{
                            message:"rellenar campo"
                        }
                    }
                },
                permalinkEditSubCategory:{
                    validators:{
                        notEmpty:{
                            message:"Rellenar campo"
                        }
                    }
                }
            }
        }).on('success.form.fv',function (e) {
            e.preventDefault();
            $.ajax({
                url:"/dashboard/categorias-noticias/editsubcategory",
                method:"post",
                data:$(this).serialize(),
                dataType:"json",
                success:function (resp) {
                    swal({
                        position: 'top-center',
                        type: 'success',
                        title: 'Datos guardados correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#'+resp.id+" .subcategoryName").text(resp.name);
                    $('#'+resp.id+" .subcategoryPermalink").text(resp.permalink);

                }
            });


        });
        permalink($('.cpEditSubCategory'),'permlinkEditSubCategory',$('#editSubCategory'));
    }
});

function subcategory($id) {
    window.location.replace("/dashboard/categorias-noticias/subcategorias/"+$id);
}
function deleteSubcategory($id){
    swal({
        title: '¿Esta seguro que desea eliminar esta subcategoria?',
        text: "No  podra revertir esto",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No,cancela',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false
    }).then(function () {
        $.ajax({
            url:"/dashboard/categorias-noticias/editsubcategory/deletecategories",
            method:"post",
            data:{id_subcategory:$id},
            dataType:"json",
            success:function (resp) {
                swal(
                    '¡Eliminado!',
                    'La subcategoria ha sido  eliminada correctamente',
                    'success'
                );
                $('#'+resp.id).remove();
            }
        });


    }, function (dismiss) {
        if (dismiss === 'cancel') {
            swal(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            );
        }
    });
}


