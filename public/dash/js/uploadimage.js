$(document).ready(function () {
    Dropzone.autoDiscover=false;
    if($('#newsImage').length>=1){
        var news_mainImage = new Dropzone('#newsImage',{
            url:"/uploadimage",
            uploadImages:false,
            maxFileSize:5,
            maxFile:1,
            parallelUploads:1,
            addRemoveLinks:true,
            dictResponseError:"No se puede subir esta imagen",
            autoProcessQueue:true,
            thumbnailWidth:138,
            thumbnailHeight:120,
            acceptedFiles:"image/*",
            previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name style:"font-weight: bold;"></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',
            resize: function (file) {
                var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
                    srcRatio = file.width / file.height;
                if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
                    info.trgHeight = this.options.thumbnailHeight;
                    info.trgWidth = info.trgHeight * srcRatio;
                    if (info.trgWidth > this.options.thumbnailWidth) {
                        info.trgWidth = this.options.thumbnailWidth;
                        info.trgHeight = info.trgWidth / srcRatio;
                    }
                } else {
                    info.trgHeight = file.height;
                    info.trgWidth = file.width;
                }
                return info;
            },
            sending:function (file,xhr,formData) {
                formData.append('file-post',2);
                formData.append("agreement",$("#name-agreement").val());
            },
            success:function (file,response) {
                var name_image=response;
                $(".dz-preview").addClass("dz-success");
                $("div.progress").remove();
                file.previewElement.accessKey = name_image.name;
                $("#image-2").val(name_image.name);
            },
            removedfile:function (file) {
                file.previewElement.remove();
                name = file.previewElement.accessKey;
                $.ajax({
                    url: "/deleteimage",
                    type: "post",
                    data: { "image":name},
                    dataType:"json",
                    success : function(response){
                        if(response.message=="SUCCESS" && response.code==200){
                            $(file.previewElement).remove();
                            $("#image-2").val('');
                        }else{
                            $(file.previewElement).remove();
                        }
                    },
                    error : function(){
                        alert("Ha ocurrido un error");
                    }
                });
            }
        })
    }

    if($('#newsGallery').length>=1){
        var contador=0;
        var news_gallry = new Dropzone('#newsGallery',{
            url:"/uploadimage",
            uploadImages:false,
            maxFileSize:5,
            maxFile:5,
            parallelUploads:1,
            addRemoveLinks:true,
            dictResponseError:"No se puede subir esta imagen",
            autoProcessQueue:true,
            thumbnailWidth:138,
            thumbnailHeight:120,
            acceptedFiles:"image/*",
            previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name style:"font-weight: bold;"></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',
            resize: function (file) {
                var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
                    srcRatio = file.width / file.height;
                if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
                    info.trgHeight = this.options.thumbnailHeight;
                    info.trgWidth = info.trgHeight * srcRatio;
                    if (info.trgWidth > this.options.thumbnailWidth) {
                        info.trgWidth = this.options.thumbnailWidth;
                        info.trgHeight = info.trgWidth / srcRatio;
                    }
                } else {
                    info.trgHeight = file.height;
                    info.trgWidth = file.width;
                }
                return info;
            },
            sending:function (file,xhr,formData) {
                formData.append('file-post',2);
                formData.append("agreement",$("#name-agreement").val());
            },
            success:function (file,response) {
                contador++;
                var name_image=response;
                $(".dz-preview").addClass("dz-success");
                file.previewElement.id=contador;
                $("div.progress").remove();
                file.previewElement.accessKey = name_image.name;
                $("#content-image").append('<input type="hidden" id="'+contador+'" value="'+name_image.name+'" name="image-3[]">');

            },
            removedfile:function (file) {
                var imagen;
                var imageid=file.previewElement.id;
                var name = file.previewElement.accessKey;
                $(file.previewElement).remove();
                var imagenes = document.getElementsByName('image-3[]');
                for(var i=0;i<imagenes.length;i++){
                    imagenvalor = imagenes[i].value;
                    console.log(imagenvalor);
                    if(name==imagenvalor){
                        imagen=imagenvalor;
                        break;
                    }
                }

                $.ajax({
                    url: "/deleteimage",
                    type: "post",
                    data: { "image":imagen},
                    dataType:"json",
                    success : function(response){
                        if(response.message=="SUCCESS" && response.code==200){
                            $(file.previewElement).remove();
                            $("#"+imageid).remove();
                        }else{
                            $(file.previewElement).remove();
                        }
                    },
                    error : function(){
                        alert("Ha ocurrido un error");
                    }
                });

            }
        })
    }

    if($('#editnewImage').length>=1){
        var news_editImage = new Dropzone('#editnewImage',{
            url:"/uploadimage",
            uploadImages:false,
            maxFileSize:5,
            maxFile:1,
            parallelUploads:1,
            addRemoveLinks:true,
            dictResponseError:"No se puede subir esta imagen",
            autoProcessQueue:true,
            thumbnailWidth:138,
            thumbnailHeight:120,
            acceptedFiles:"image/*",
            previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name style:"font-weight: bold;"></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',
            resize: function (file) {
                var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
                    srcRatio = file.width / file.height;
                if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
                    info.trgHeight = this.options.thumbnailHeight;
                    info.trgWidth = info.trgHeight * srcRatio;
                    if (info.trgWidth > this.options.thumbnailWidth) {
                        info.trgWidth = this.options.thumbnailWidth;
                        info.trgHeight = info.trgWidth / srcRatio;
                    }
                } else {
                    info.trgHeight = file.height;
                    info.trgWidth = file.width;
                }
                return info;
            },
            sending:function (file,xhr,formData) {
                formData.append('file-post','imgagenPrincipal');
                formData.append("agreement",$("#name-agreement").val());
            },
            success:function (file,response) {
                var name_image=response;
                $(".dz-preview").addClass("dz-success");
                $("div.progress").remove();
                file.previewElement.accessKey = name_image.name;
                $("#image-2").val(name_image.name);
            },
            removedfile:function (file) {
                file.previewElement.remove();
                name = file.previewElement.accessKey;
                $.ajax({
                    url: "/deleteimage",
                    type: "post",
                    data: { "imagePrincipal":name},
                    dataType:"json",
                    success : function(response){
                        if(response.message=="SUCCESS" && response.code==200){
                            $(file.previewElement).remove();
                            $("#image-2").val('');
                        }else{
                            $(file.previewElement).remove();
                        }
                    },
                    error : function(){
                        alert("Ha ocurrido un error");
                    }
                });
            }
        });
        var mockFile = { name: "Click para remover la imagen", size: 12345};
        news_editImage.emit("addedfile",mockFile);
        image_load1 = "/dash/src/"+$("#image-2").val();
        news_editImage.emit("thumbnail", mockFile,image_load1);
        news_editImage.element.lastChild.accessKey=$("#image-2").val();

    }

    if($('#editGallery').length>=1){
        var contador=0;
        var nameImage="";
        var news_editGallery = new Dropzone('#editGallery',{
            url:"/uploadimage",
            uploadImages:false,
            maxFileSize:5,
            maxFile:5,
            parallelUploads:5,
            addRemoveLinks:true,
            dictResponseError:"No se puede subir esta imagen",
            autoProcessQueue:true,
            thumbnailWidth:138,
            thumbnailHeight:120,
            acceptedFiles:"image/*",
            previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name style:"font-weight: bold;"></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',
            resize: function (file) {
                var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
                    srcRatio = file.width / file.height;
                if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
                    info.trgHeight = this.options.thumbnailHeight;
                    info.trgWidth = info.trgHeight * srcRatio;
                    if (info.trgWidth > this.options.thumbnailWidth) {
                        info.trgWidth = this.options.thumbnailWidth;
                        info.trgHeight = info.trgWidth / srcRatio;
                    }
                } else {
                    info.trgHeight = file.height;
                    info.trgWidth = file.width;
                }
                return info;
            },
            sending:function (file,xhr,formData) {
                formData.append('file-post',$("#id").val());
                formData.append("agreement",$("#name-agreement").val());
            },
            success:function (file,response) {
                var name_image=response;
                $(".dz-preview").addClass("dz-success");
                $("div.progress").remove();
                file.previewElement.id=name_image.idGal;
                $("#content-image-g").append('<input type="hidden" value="'+name_image.name+'" name="image-3[]" data-id="'+name_image.idGal+'">');
            },
            removedfile:function (file) {
                var imageid=file.previewElement.id;
                $.ajax({
                    url: "/deleteimage",
                    type: "post",
                    data: { image:imageid},
                    dataType:"json",
                    success : function(response){
                        if(response.message=="SUCCESS" && response.code==200){
                            $("#"+imageid).remove();
                        }else{

                        }
                    },
                    error : function(){
                        alert("Ha ocurrido un error");
                    }
                });

                $(file.previewElement).remove();
            }
        });
       $('input[name="image-3[]"]').each(function() {
            var value = $(this).attr("data-id"); // get values
            var mockFile = { name: "Click para remover la imagen", size: 12345};
            news_editGallery.emit("addedfile",mockFile);
            news_editGallery.element.lastChild.id=value;
            image_load = "/dash/src/"+$(this).val();
            news_editGallery.emit("thumbnail", mockFile,image_load);
        });
    }
});