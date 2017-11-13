$(document).ready(function () {

   if($('#descriptionCreateNew').length>=1){
       CKEDITOR.replace('descriptionCreateNew');
   }
    if($('#descriptionEditNew').length>=1){
        CKEDITOR.replace('descriptionEditNew');
    }
    if($('#contentEditNew').length>=1){
        CKEDITOR.replace('contentEditNew');
    }
   if($('#contentCreateNew').length>=1){
       CKEDITOR.replace('contentCreateNew');
   }

   $('#categoria_news').on('click',function () {
         var id = document.getElementById('categoria_news').value;
         $.ajax({
             url:"/consultar-category",
             method:"post",
             data:{id:id},
             dataType:"json",
             success:function (resp) {
                 $('#subcategory_news').html(resp.html);
             }
         })
   });

   if($('#createNew').length>=1){
       $('#createNew').formValidation({
           framework:"bootstrap",
           included:[":hidden"],
           icon:{
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           locale:"es_Es",
           fields:{
                title:{
                    validators:{
                        notEmpty:{
                            message:"rellenar campo"
                        }
                    }
                },
               subtitle:{
                    validators:{
                        notEmpty:{
                            message:"rellenar campo"
                        }
                    }
               },
               "image-2":{
                    validators:{
                        notEmpty:{
                            message:"rellenar campo"
                        }
                    }
               },
               description:{
                    notEmpty:{
                        message:"Rellenar campo"
                    }
               },
               content:{
                    validators:{
                        notEmpty:{
                            message:"rellenar campo"
                        }
                    }
               },
               type:{
                    validators:{
                        notEmpty:{
                            message:"Rellenar campo"
                        }
                    }
               },
               author:{
                   validators:{
                       notEmpty:{
                           message:"Rellenar campo"
                       }
                   }
               },
               periodico:{
                   validators:{
                       notEmpty:{
                           message:"Rellenar campo"
                       }
                   }
               }
           }
       }).on('success.form.fv',function (e) {
           e.preventDefault();
           var description = CKEDITOR.instances['descriptionCreateNew'].getData();
           var content = CKEDITOR.instances['contentCreateNew'].getData();
           $('textarea[name=description]').val(description);
           $('textarea[name=content]').val(content);
           $.ajax({
               url:"/dashboard/crear-noticia/nuevanoticia",
               method:"post",
               data:$(this).serialize(),
               dataType:"json",
               success:function (resp) {
                    swal("Datos guardados correctamente");
               }
           })
       })
       permalink($('.cplCreateNew'),"permalinkCreateNew",$('#createNew'));
   }

   if($('#editNew').length>=1){
       $('#editNew').formValidation({
           framework:"bootstrap",
           included:[":hidden"],
           icon:{
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           locale:"es_Es",
           fields:{
               title:{
                   validators:{
                       notEmpty:{
                           message:"rellenar campo"
                       }
                   }
               },
               subtitle:{
                   validators:{
                       notEmpty:{
                           message:"rellenar campo"
                       }
                   }
               },
               "image-2":{
                   validators:{
                       notEmpty:{
                           message:"rellenar campo"
                       }
                   }
               },
               description:{
                   notEmpty:{
                       message:"Rellenar campo"
                   }
               },
               content:{
                   validators:{
                       notEmpty:{
                           message:"rellenar campo"
                       }
                   }
               },
               type:{
                   validators:{
                       notEmpty:{
                           message:"Rellenar campo"
                       }
                   }
               },
               author:{
                   validators:{
                       notEmpty:{
                           message:"Rellenar campo"
                       }
                   }
               },
               periodico:{
                   validators:{
                       notEmpty:{
                           message:"Rellenar campo"
                       }
                   }
               }
           }
       }).on('success.form.fv',function (e) {
           e.preventDefault();
           var description = CKEDITOR.instances['descriptionEditNew'].getData();
           var content = CKEDITOR.instances['contentEditNew'].getData();
           $('textarea[name=description]').val(description);
           $('textarea[name=content]').val(content);
           $.ajax({
               url:"/dashboard/updatenew",
               method:"post",
               data:$(this).serialize(),
               dataType:"json",
               success:function (resp) {
                   swal("Datos actualizados correctamente");
               }
           })

       });
       permalink($('.cplEditNew'),"permalinkEditNew",$('#editNew'));
   }



});

function editNew($id) {
    window.location.replace("/dashboard/editar-noticia/"+$id);
}