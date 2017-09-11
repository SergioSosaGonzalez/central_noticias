<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

      <link rel="stylesheet" type="text/css" href="<?=$this->url->get("dash/css/bootstrap.min.css")?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/font-awesome.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/chartist.min.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/ncms.min.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/pace.min.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/site.min.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/icomoon.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/jquery.scrollUp.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/myStyleUser.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/jquery.dataTables.min.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=$this->url->get('dash/css/formValidation.min.css')?>"




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
      <ul class="nav navbar-nav float-xs-left main-menu">
          <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">About</a>
          </li>
      </ul>
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
          <div class="float-xs-right input-with-icon mb-1">
              <i class="material-icons">search</i>
              <input type="search" class="form-control" placeholder="Search" />
          </div>
      </form>
  </nav>
  <!-- end of navbar -->

  <!-- start of sidebar -->
  <div class="sidebar">
      <ul class="nav nav-sidebar">
          <li class="has-submenu expanded">
              <a href="javascript:;">
                  <i class="material-icons">dashboard</i><span>Dashboard</span>
              </a>
              <ul class="nav sub-menu">
                  <li class="active"><a href="index.html">Dashboard 1</a>
                  </li>
                  <li><a href="index1.html">Dashboard 2</a>
                  </li>
                  <li><a href="index2.html">Dashboard 3</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="material-icons">insert_chart</i><span>Charts</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="chartist-js.html">Chartist JS</a>
                  </li>
                  <li><a href="chart-js.html">Chart JS</a>
                  </li>
                  <li><a href="flot-js.html">Flot JS</a>
                  </li>
                  <li><a href="morris-js.html">Morris JS</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <span class="tag">2</span>
              <a href="javascript:;">
                  <i class="material-icons">mail_outline</i><span>Mailbox</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="compose.html">Compose</a>
                  </li>
                  <li><a href="mailbox.html">Inbox</a>
                  </li>
                  <li><a href="mailbox-reply.html">Reply</a>
                  </li>
                  <li><a href="mailbox-detail.html">Detail</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="icon-table2"></i><span>Tables</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="simple-tables.html">Simple Table</a>
                  </li>
                  <li><a href="data-tables.html">Data Table</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="fi-foot"></i><span>UI Element</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="ui-general.html">General</a>
                  </li>
                  <li><a href="ui-buttons.html">Buttons</a>
                  </li>
                  <li><a href="ui-typography.html">Typography</a>
                  </li>
                  <li><a href="icons.html">Icon</a>
                  </li>
                  <li><a href="cards.html">Cards</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="material-icons">border_color</i><span>Forms</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="general-form.html">General Forms</a>
                  </li>
                  <li><a href="advanced-form.html">Advanced Forms</a>
                  </li>
                  <li><a href="text-editor.html">Editors</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="material-icons">person_add</i><span>Authentication</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="dashboard/usuarios">Agregar usuario</a>
                  </li>
                  <li><a href="dashboard/lista">Lista de usuarios</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="material-icons">error</i><span>Error Pages</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="404page.html">404 Error</a>
                  </li>
                  <li><a href="500page.html">500 Error</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="material-icons">content_copy</i><span>Pages</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="timeline.html">Timeline</a>
                  </li>
                  <li><a href="profile.html">Profile</a>
                  </li>
                  <li><a href="comment.html">Comment</a>
                  </li>
                  <li><a href="blank.html">Blank Page</a>
                  </li>
              </ul>
          </li>
          <li class="has-submenu">
              <a href="javascript:;">
                  <i class="material-icons">check_box_outline_blank</i><span>Email Template</span>
              </a>
              <ul class="nav sub-menu">
                  <li><a href="email.html">Blog Post</a>
                  </li>
                  <li><a href="email-clean.html">Product Template</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="documentation/index.html">
                  <i class="material-icons">library_books</i><span>Documentation</span>
              </a>
          </li>

          <li>
              <a href="javascript:;">
                  <i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span>Log Out</span>
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

    <script src="/dash/js/chart.min.js"></script>
    <script src="/dash/js/jquery.nicescroll.js"></script>
    <script src="/dash/js/jquery.scrollUp.min.js"></script>
    <script src="/dash/js/js.cookie.js"></script>
    <script src="/dash/js/pace.min.js"></script>
    <script src="/dash/js/ncms.min.js"></script>
    <script src="/dash/js/site-config.js"></script>
    <script src="<?=$this->url->get('dash/js/jquery.dataTables.min.js')?>"</script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"/></script>
    <script src="<?=$this->url->get('dash/js/formValidation.min.js')?>"></script>
    <script src="<?=$this->url->get('dash/js/bootstrapV.min.js')?>"></script>

    <script>
        $(document).ready(function () {
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
                          }
                      }
                  },
                  contrasenia:{
                      row:'col-md-6',
                      validators:{
                          notEmpty:{
                              message:"se requiere password"
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
            });
        })
    </script>
    <!-- endinject -->
  </body>
</html>
