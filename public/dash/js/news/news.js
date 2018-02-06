$(document).ready(function () {
    var contadorDrap=0;
   var start=0;
    $("#table-1").tableDnD({
        onDragClass: "drag-drop",
        onDragStart: function(table, row) {
          start=row.id;
        },
        onDrop: function(table, row) {
            orders = $.tableDnD.serialize();
            var array=[];
            var arrayId=[];
            var rows=table.tBodies[0].rows;
            for (var i=0; i<rows.length; i++) {
                result = i+1;
                split = rows[i].id;
                var idGall=rows[i].className;
                console.log("start="+start);
                console.log("split="+split);
                array.push(split);
                arrayId.push(idGall);
            }
            console.log($.tableDnD.serialize());

            console.log(array);
            $.ajax({
                url:"/dashboard/positionslider?id="+$("#id").val(),
                method:"post",
                data:{"table-1[]":array,"idGall":arrayId},
                dataType:"json",
                success:function (resp) {
                    console.log(resp);
                }
            });
        }
    });
    if($("#data-table-jo").length>=1){
        $("#data-table-jo").DataTable();
    }
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
                    $('input[name=title]').val('');
                    $('input[name=permalinkCreateNew]').val('');
                    $('input[name=subtitle]').val('');
                    $("input[name=image-2]").val('');
                    $("textarea[name=description]").val('');
                    $("textarea[name=content]").val('');
                    CKEDITOR.instances['descriptionCreateNew'].setData('');
                    CKEDITOR.instances['contentCreateNew'].setData('')
                    $('input[name=author]').val('');
                   news_mainImage.removeAllFiles();

               }
           });
       });
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
   if($('#newEnterprise').length>=1)
   {
       $('#newEnterprise').formValidation({
           framework:"bootstrap",
           included:[":hidden"],
           icon:{
               valid: 'glyphicon glyphicon-ok',
               invalid: 'glyphicon glyphicon-remove',
               validating: 'glyphicon glyphicon-refresh'
           },
           locale:"es_Es",
           fields:{
               name_enterprise:{
                   validators:{
                       notEmpty:{
                           message:"Rellenar campo"
                       }
                   }
               },
               repit_name:{
                   validators:{
                       identical:{
                           field:"name_enterprise",
                           message:"Los campos no coinciden"
                       }
                   }
               }
           }

       }).on("success.form.fv",function (e) {
           e.preventDefault();
           $.ajax({
               url:"/dashboard/newenterprise",
               method:"post",
               data:$(this).serialize(),
               dataType:"json",
               success:function (resp) {
                   swal("Datos guardados correctamente");
                   $('#entid').html(resp.html);
               }
           });
       });
   }


});

function editNew($id) {
    window.location.replace("/dashboard/editar-noticia/"+$id);
}

function deleteNew($id){
    swal({
        title: '¿Estas seguro de eliminar esta noticia?',
        text: "No se podra revertir esto",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si,¡eliminelo!'
    }).then(function () {
        $.ajax({
            url:"/dashboard/delete-noticia",
            method:"post",
            data:{id:$id},
            dataType:"json",
            success:function (resp) {
                swal('Eliminado','La noticia ha sido eliminda.','success');
                $('#'+resp.id).remove()
            }
        });
    });

}