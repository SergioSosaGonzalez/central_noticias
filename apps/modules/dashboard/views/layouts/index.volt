<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
      {% block head %}
         {{assets.outputCss('CssIndex') }}
      {% endblock %}
  </head>
  <body class="dashboard warning-theme danger-complement primary-logo-demo using-loader">
  <!-- start of navbar -->
  <nav class="navbar navbar-fixed-top">
      <!-- start of navbar-sidebar -->
      <div class="navbar-sidebar">
          <a class="navbar-brand" href="index.html">
              <img src="/dash/img/primary-logo.png" alt="n-cms" class="primary-logo" />
              <img src="/dash/img/danger-logo.png" alt="n-cms" class="danger-logo" />
              <img src="/dash/img/success-logo.png" alt="n-cms" class="success-logo" />
              <img src="/dash/img/warning-logo.png" alt="n-cms" class="warning-logo" />
              <img src="/dash/img/info-logo.png" alt="n-cms" class="info-logo" />
              <img src="/dash/img/purple-logo.png" alt="n-cms" class="purple-logo" />
              <h1 class="hidden-sm-down">Arkalite</h1>
          </a>
          <a class="sidebar-toggle" href="#" data-toggle="sidebar">&#9776;</a>
      </div>
      <!-- end of navbar-sidebar -->
      <!-- start of main menu -->

      <!-- end of main menu -->
      <!-- end of primary menu -->
      <div class="float-xs-right secondary-menu">
          <ul class="nav navbar-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link use-icon" id="message" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="tag">6</span><i class="material-icons">mail_outline</i></a>
                  <div class="dropdown-menu dropdown-menu-right notification-list nice-scroll" aria-labelledby="message">
                      <div class="outer-triangle-right"></div>
                      <div class="header">
                          <h4 class="text-xs-center">Messages</h4>
                      </div>
                      <ul class="list-unstyled nice-scroll">
                          <li>
                              <div class="media">
                                  <a href="#">
                                      <div class="media-left">
                                          <img class="media-object rounded-circle" src="/dash/img/nadya-avatar.jpg" alt="user2">
                                      </div>
                                      <div class="media-body">
                                          <div class="date"><small class="d-inline text-muted">30 Nov</small>
                                          </div>
                                          <h5>Nadya Amanda</h5>
                                          <span class="title">Invitation Meeting With Product Manager</span>
                                          <span class="content">Hi Amara, I would like to invite you to a meeting with product manager at our HQ</span>
                                      </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <a href="#">
                                      <div class="media-left">
                                          <img class="media-object rounded-circle" src="/dash/img/paolo-avatar.jpg" alt="user2">
                                      </div>
                                      <div class="media-body">
                                          <div class="date"><small class="d-inline text-muted">28 Nov</small>
                                          </div>
                                          <h5>Paolo Aurelio</h5>
                                          <span class="title">Technical Document</span>
                                          <span class="content">Could you please send me a technical document from our last meeting</span>
                                      </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <a href="#">
                                      <div class="media-left">
                                          <img class="media-object rounded-circle" src="/dash/img/jonski-avatar.jpg" alt="user2">
                                      </div>
                                      <div class="media-body">
                                          <div class="date"><small class="d-inline text-muted">25 Nov</small>
                                          </div>
                                          <h5>Jonski Sorgki</h5>
                                          <span class="title">Announcement</span>
                                          <span class="content">Dear all, I would like to thank all of you for making my dream come true</span>
                                      </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <a href="#">
                                      <div class="media-left">
                                          <img class="media-object rounded-circle" src="/dash/img/ragnar-avatar.jpg" alt="user2">
                                      </div>
                                      <div class="media-body">
                                          <div class="date"><small class="d-inline text-muted">9 Nov</small>
                                          </div>
                                          <h5>Ragnar Klavan</h5>
                                          <span class="title">Financial Report Q1</span>
                                          <span class="content">Dear Amara, I will be out of town for a while, you can contact me via email </span>
                                      </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <a href="#">
                                      <div class="media-left">
                                          <img class="media-object rounded-circle" src="/dash/img/ragnar-avatar.jpg" alt="user2">
                                      </div>
                                      <div class="media-body">
                                          <div class="date"><small class="d-inline text-muted">9 Nov</small>
                                          </div>
                                          <h5>Ragnar Klavan</h5>
                                          <span class="title">Financial Report Q2</span>
                                          <span class="content">Dear Amara, I will be out of town for a while, you can contact me via email </span>
                                      </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <a href="#">
                                      <div class="media-left">
                                          <img class="media-object rounded-circle" src="/dash/img/ragnar-avatar.jpg" alt="user2">
                                      </div>
                                      <div class="media-body">
                                          <div class="date"><small class="d-inline text-muted">9 Nov</small>
                                          </div>
                                          <h5>Ragnar Klavan</h5>
                                          <span class="title">Financial Report Q3</span>
                                          <span class="content">Dear Amara, I will be out of town for a while, you can contact me via email </span>
                                      </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <a href="#">
                                      <div class="media-left">
                                          <img class="media-object rounded-circle" src="/dash/img/ragnar-avatar.jpg" alt="user2">
                                      </div>
                                      <div class="media-body">
                                          <div class="date"><small class="d-inline text-muted">9 Nov</small>
                                          </div>
                                          <h5>Ragnar Klavan</h5>
                                          <span class="title">Financial Report Q4</span>
                                          <span class="content">Dear Amara, I will be out of town for a while, you can contact me via email </span>
                                      </div>
                                  </a>
                              </div>
                          </li>
                      </ul>
                      <div class="py-1 footer">
                          <a href="#">See All Messages</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link use-icon" id="notification" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="tag">8</span><i class="material-icons">notifications</i></a>

                  <div class="dropdown-menu dropdown-menu-right notification-list v-scroll" aria-labelledby="notification">
                      <div class="outer-triangle-right"></div>
                      <div class="header">
                          <h4 class="text-xs-center">Notifications</h4>
                      </div>
                      <ul class="list-unstyled v-scroll">
                          <li>
                              <div class="media">
                                  <div class="media-left">
                                      <img class="media-object rounded-circle" src="img/paolo-avatar.jpg" alt="user2">
                                  </div>
                                  <div class="media-body">
                                      <a href="#">
                                          <h5 class="d-inline">Paolo Aurelio</h5><span> replied to your comment on his post</span>
                                          <div class="time"><i class="material-icons text-muted">access_time</i> <small class="d-inline text-muted">2 hours ago</small>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="close">
                                  <a href="#"><i class="material-icons">close</i></a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <div class="media-left">
                                      <img class="media-object rounded-circle" src="/dash/img/nadya-avatar.jpg" alt="user2">
                                  </div>
                                  <div class="media-body">
                                      <a href="#">
                                          <h5 class="d-inline">Nadya Amanda</h5><span> posted on your wall</span>
                                          <div class="time"><i class="material-icons text-muted">access_time</i> <small class="d-inline text-muted">7 days ago</small>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="close">
                                  <a href="#"><i class="material-icons">close</i></a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <div class="media-left">
                                      <img class="media-object rounded-circle" src="/dash/img/jonski-avatar.jpg" alt="user2">
                                  </div>
                                  <div class="media-body">
                                      <a href="#">
                                          <h5 class="d-inline">Jonski Sorgki</h5> liked your photo
                                          <div class="time"><i class="material-icons text-muted">access_time</i> <small class="d-inline text-muted">2 weeks ago</small>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="close">
                                  <a href="#"><i class="material-icons">close</i></a>
                              </div>
                          </li>
                          <li>
                              <div class="media">
                                  <div class="media-left">
                                      <img class="media-object rounded-circle" src="/dash/img/ragnar-avatar.jpg" alt="user2">
                                  </div>
                                  <div class="media-body">
                                      <a href="#">
                                          <h5 class="d-inline">Ragnar Klavan</h5> add a new task
                                          <div class="time"><i class="material-icons text-muted">access_time</i> <small class="d-inline text-muted">9 November at 07:00</small>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="close">
                                  <a href="#"><i class="material-icons">close</i></a>
                              </div>
                          </li>

                      </ul>
                      <div class="py-1 footer">
                          <a href="#">See All Notifications</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link use-icon" href="#"><i class="material-icons">chat_bubble</i></a>
              </li>
          </ul>
          <div class="dropdown show d-inline user-menu">
              <a class="btn dropdown-toggle" href="index.html" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false">
                  <div class="media d-inline">
                      <div class="media-left">
                          <img class="media-object rounded-circle" src="/dash/img/amara-avatar.jpg" alt="Generic placeholder image" width="30" height="30">
                      </div>
                      <div class="media-right hidden-sm-down text-xs-left">
                          <h5 class="media-heading mb-0">Amara</h5>
                          <small>Administrator</small>
                      </div>
                  </div>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#"><i class="material-icons align-middle mr-1">settings</i>Account</a>
                  <a class="dropdown-item" href="#"><i class="material-icons align-middle mr-1">person</i>Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><i class="material-icons align-middle mr-1">power_settings_new</i>Logout</a>
              </div>
          </div>
          <a class="main-menu-toggle" href="#" data-toggle="main-menu"><i class="material-icons">view_list</i></a>
      </div>
      <!-- end of secondary menu -->
      <form class="float-md-right navbar-search">

      </form>
  </nav>
  <!-- end of navbar -->

  <!-- start of sidebar -->
  <div class="sidebar">
      <ul class="nav nav-sidebar">
          <li class="has-submenu expanded">
              <a href="/dashboard">
                  <i class="material-icons">dashboard</i><span>Dashboard</span>
              </a>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="fa fa-align-justify"></i><span>Categorias de noticias</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="/dashboard/categorias-noticias">Ver categorias</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="fa fa-newspaper-o"></i><span>Noticias</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="/dashboard/crear-noticia">Alta de noticias</a>
                  </li>
                  <li><a href="/dashboard/lista-noticias">Todas las noticias</a>
                  </li>
              </ul>
          </li>

          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="material-icons">person_add</i><span>Authentication</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="/dashboard/usuarios">Agregar usuario</a>
                  </li>
                  <li><a href="/dashboard/lista">Lista de usuarios</a>
                  </li>
              </ul>
          </li>

          <li>
              <a href="javascript:;">
                  <a href="/logout"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span>Log Out</span></a>
              </a>
          </li>

      </ul>
  </div>
  <!-- end of sidebar -->
  <div id="dashboard-alt2" class="main container-fluid dashboard-alt2">
  {{ content() }}
  </div>
  <div class="site-configuration">
      <div class="site-config-control">
          <i class="material-icons">settings</i>
      </div>
      <h5>Skins</h5>
      <ul class="list-inline color-themes">
          <li class="list-inline-item" data-color="danger" data-complementary="primary" data-logo="primary">
              <div class="danger-color"></div>
              <div class="primary-color"></div>
          </li>
          <li class="list-inline-item" data-color="warning" data-complementary="primary" data-logo="primary">
              <div class="warning-color"></div>
              <div class="primary-color"></div>
          </li>
          <li class="list-inline-item" data-color="primary" data-complementary="warning" data-logo="warning">
              <div class="primary-color"></div>
              <div class="warning-color"></div>
          </li>
      </ul>
      <ul class="list-inline color-themes">
          <li class="list-inline-item" data-color="warning" data-complementary="danger" data-logo="primary">
              <div class="warning-color"></div>
              <div class="danger-color"></div>
          </li>
          <li class="list-inline-item" data-color="success" data-complementary="danger" data-logo="primary">
              <div class="success-color"></div>
              <div class="danger-color"></div>
          </li>
          <li class="list-inline-item" data-color="success" data-complementary="primary" data-logo="primary">
              <div class="success-color"></div>
              <div class="primary-color"></div>
          </li>
      </ul>
      <ul class="list-inline color-themes">
          <li class="list-inline-item" data-color="success" data-complementary="warning" data-logo="primary">
              <div class="success-color"></div>
              <div class="warning-color"></div>
          </li>
          <li class="list-inline-item" data-color="info" data-complementary="warning" data-logo="primary">
              <div class="info-color"></div>
              <div class="warning-color"></div>
          </li>

          <li class="list-inline-item" data-color="info" data-complementary="danger" data-logo="primary">
              <div class="info-color"></div>
              <div class="danger-color"></div>
          </li>
      </ul>
      <ul class="list-inline color-themes">
          <li class="list-inline-item" data-color="info" data-complementary="primary" data-logo="primary">
              <div class="info-color"></div>
              <div class="primary-color"></div>
          </li>
          <li class="list-inline-item" data-color="primary" data-complementary="danger" data-logo="danger">
              <div class="primary-color"></div>
              <div class="danger-color"></div>
          </li>

          <li class="list-inline-item" data-color="danger" data-complementary="warning" data-logo="primary">
              <div class="danger-color"></div>
              <div class="warning-color"></div>
          </li>
      </ul>
  </div>

    <script src="/dash/js/jquery.min.js"></script>
    <script src="<?=$this->url->get('dash/js/AjaxIndex.js') ?>"></script>

    <script src="/dash/js/tether.min.js"></script>
    <script src="/dash/js/bootstrap.min.js"></script>
    <script src="/dash/js/category/category.js"></script>
    <script src="/dash/js/ckeditor/ckeditor.js"></script>
    <script src="/dash/js/ckeditor/adapters/jquery.js"></script>
    <script src="/dash/js/news/news.js"></script>
    <script src="/dash/js/chart.min.js"></script>
    <script src="/dash/js/jquery.nicescroll.js"></script>
    <script src="/dash/js/jquery.scrollUp.min.js"></script>
    <script src="/dash/js/js.cookie.js"></script>
    <script src="/dash/js/pace.min.js"></script>
    <script src="/dash/js/ncms.min.js"></script>
    <script src="/dash/js/uploadimage.js"></script>

    <script src="/dash/js/site-config.js"></script>
    <script src="/dash/bower_components/dropzone/dist/min/dropzone.min.js"></script>
    <script src="<?=$this->url->get('dash/js/jquery.dataTables.min.js')?>"</script>



    <script type="text/javascript" src="<?=$this->url->get('dash/js/loader.js')?>"></script>
    <script src="<?=$this->url->get('dash/js/formValidation.min.js')?>"></script>
    <script src="<?=$this->url->get('dash/js/bootstrapV.min.js')?>"></script>
    <script src="<?=$this->url->get('dash/js/sweetalert2.all.js')?>"></script>

    <script>
        $(document).ready(function () {
            $('#formPass').formValidation({
                framework: 'bootstrap',
                icon:{
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },fields:{
                    nuevaContra:{
                        row:'col-md-12',
                        validators:{
                            notEmpty:{
                                message:"Rellenar el campo de la contraseña"
                            }
                        }
                    },
                    confirmPassword:{
                        row:"col-md-12",
                        validators:{
                            identical:{
                                field:'nuevaContra',
                                message:"las contraseñas no coinciden"
                            }
                        }
                    }
                }
            });

            $('#form').formValidation({
              framework: 'bootstrap',
              icon:{
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields:{
                  PrimerNombre:{
                      row:'col-md-6',
                      validators:{
                          notEmpty:{
                              message: "Se requiere nombre"
                          }
                      }
                  },
                  apellidos:{
                      row:'col-md-12',
                      validators:{
                          notEmpty:{
                               message:"Se requiere apellido"
                          }
                      }
                  },
                  telefono:{
                      row:'col-md-7',
                      validators:{
                          digits:{
                             message:"Solo se pueden poner numeros"
                          },
                          notEmpty:{
                              message:"Se requiere telefono"
                          }
                      }
                  },
                  username:{
                      row:"col-md-6",
                      validators:{
                          notEmpty:{
                             message:"Se requiere nombre de usuario"
                          },
                          remote:{
                              url:"/dashboard/user/username",
                              type:"post",
                              delay:1000
                          }
                      }
                  },
                  contrasenia:{
                      row:'col-md-6',
                      validators:{
                          notEmpty:{
                              message:"se requiere password"
                          },

                      }
                  },
                  correo:{
                      row:'col-md-6',
                      validators:{
                          notEmpty:{
                              message:"Ingrese correo"
                          },
                          remote:{
                              url:"/dashboard/user/email",
                              type:"post",
                              delay:1000
                          }

                      }
                  },
                  foto:{
                      row:'col-md-6',
                      validators:{
                          notEmpty:{
                              message:"Se requiere url de foto"
                          }
                      }
                  },
                  fechaCreacion:{
                      row:'col-md-6',
                      validators:{
                          notEmpty:{
                              message:"Se requiere fecha"
                          }
                      }
                  },
                  cargo:{
                      row:'col-md-6',
                      validators:{
                          notEmpty:{
                              message:"Pon el cargo"
                          }
                       }
                  }
              }
            }).on('success.form.fv', function(e) {
                e.preventDefault();
                $.ajax({
                    url:"/dashboard/user/ajax",
                    method:"post",
                    data:$(this).serialize(),
                    dataType:"json",
                    success: function (resp) {
                        alert("Datos guardados correctamente");
                        $("input[name=PrimerNombre]").val(" ");
                        $("input[name=SegundoNombre]").val(" ");
                        $("input[name=apellidos]").val(" ");
                        $("input[name=sexo]").val(" ");
                        $("input[name=telefono]").val(" ");
                        $("input[name=username]").val(" ");
                        $("input[name=contrasenia]").val("");
                        $("input[name=correo]").val(" ");
                        $("input[name=foto]").val(" ");
                        $("input[name=fechaCreacion]").val(" ");



                    },error: function (jqXHR,estado,error) {

                    },complete:function (jqXHR,estado) {
                    }
                });
             });
        })
    </script>
    <!-- endinject -->
  </body>
</html>
