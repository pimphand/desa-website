<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('html/assets')}}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('html/assets')}}/images/favicon.png" type="image/x-icon">
    <title>Poco - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/themify.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/animate.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/prism.css">
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/pe7-icon.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/style.css">
    <link id="color" rel="stylesheet" href="{{asset('html/assets')}}/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('html/assets')}}/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="typewriter">
        <h1>New Era Admin Loading..</h1>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right">
          <div class="main-header-left text-center">
            <div class="logo-wrapper"><a href="index.html"><img src="{{asset('html/assets')}}/images/logo/logo.png" alt=""></a></div>
          </div>
          <div class="mobile-sidebar">
            <div class="media-body text-right switch-sm">
              <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
            </div>
          </div>
          <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"></i></div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li>
                <form class="form-inline search-form" action="#" method="get">
                  <div class="form-group">
                    <div class="Typeahead Typeahead--twitterUsers">
                      <div class="u-posRelative">
                        <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q" placeholder="Search Your Product...">
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                      </div>
                      <div class="Typeahead-menu"></div>
                    </div>
                  </div>
                </form>
              </li>
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown"><img class="img-fluid img-shadow-warning" src="{{asset('html/assets')}}/images/dashboard/bookmark.png" alt="">
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <ul class="droplet-dropdown bookmark-dropdown">
                          <li class="gradient-primary text-center">
                            <h5 class="f-w-700">Bookmark</h5><span>Bookmark Icon With Grid</span>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                              <div class="col-4 text-center"><i data-feather="activity"></i></div>
                              <div class="col-4 text-center"><i data-feather="users"></i></div>
                              <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                              <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                              <div class="col-4 text-center"><i data-feather="settings"></i></div>
                            </div>
                          </li>
                          <li class="text-center">
                            <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                          </li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li>
                            <button class="d-block flip-back" id="flip-back">Back</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="onhover-dropdown"><img class="img-fluid img-shadow-secondary" src="{{asset('html/assets')}}/images/dashboard/like.png" alt="">
                <ul class="onhover-show-div droplet-dropdown">
                  <li class="gradient-primary text-center">
                    <h5 class="f-w-700">Grid Dashboard</h5><span>Easy Grid inside dropdown</span>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-sm-4 col-6 droplet-main"><i data-feather="file-text"></i><span class="d-block">Content</span></div>
                      <div class="col-sm-4 col-6 droplet-main"><i data-feather="activity"></i><span class="d-block">Activity</span></div>
                      <div class="col-sm-4 col-6 droplet-main"><i data-feather="users"></i><span class="d-block">Contacts</span></div>
                      <div class="col-sm-4 col-6 droplet-main"><i data-feather="clipboard"></i><span class="d-block">Reports</span></div>
                      <div class="col-sm-4 col-6 droplet-main"><i data-feather="anchor"></i><span class="d-block">Automation</span></div>
                      <div class="col-sm-4 col-6 droplet-main"><i data-feather="settings"></i><span class="d-block">Settings</span></div>
                    </div>
                  </li>
                  <li class="text-center">
                    <button class="btn btn-primary btn-air-primary">Follows Up</button>
                  </li>
                </ul>
              </li>
              <li class="onhover-dropdown"><img class="img-fluid img-shadow-warning" src="{{asset('html/assets')}}/images/dashboard/notification.png" alt="">
                <ul class="onhover-show-div notification-dropdown">
                  <li class="gradient-primary">
                    <h5 class="f-w-700">Notifications</h5><span>You have 6 unread messages</span>
                  </li>
                  <li>
                    <div class="media">
                      <div class="notification-icons bg-success mr-3"><i class="mt-0" data-feather="thumbs-up"></i></div>
                      <div class="media-body">
                        <h6>Someone Likes Your Posts</h6>
                        <p class="mb-0"> 2 Hours Ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="pt-0">
                    <div class="media">
                      <div class="notification-icons bg-info mr-3"><i class="mt-0" data-feather="message-circle"></i></div>
                      <div class="media-body">
                        <h6>3 New Comments</h6>
                        <p class="mb-0"> 1 Hours Ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="bg-light txt-dark"><a href="#">All </a> notification</li>
                </ul>
              </li>
              <li><a class="right_side_toggle" href="#"><img class="img-fluid img-shadow-success" src="{{asset('html/assets')}}/images/dashboard/chat.png" alt=""></a></li>
              <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/user.png" alt=""></span>
                <ul class="onhover-show-div profile-dropdown">
                  <li class="gradient-primary">
                    <h5 class="f-w-600 mb-0">Elana Saint</h5><span>Web Designer</span>
                  </li>
                  <li><i data-feather="user"> </i>Profile</li>
                  <li><i data-feather="message-square"> </i>Inbox</li>
                  <li><i data-feather="file-text"> </i>Taskboard</li>
                  <li><i data-feather="settings"> </i>Settings            </li>
                </ul>
              </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Nama</div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <x-sidebar></x-sidebar>
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
          <div>
            <div class="container p-0">
              <div class="modal-header p-l-20 p-r-20">
                <div class="col-sm-8 p-0">
                  <h6 class="modal-title font-weight-bold">Contacts Status</h6>
                </div>
                <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
              </div>
            </div>
            <div class="friend-list-search mt-0">
              <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
            </div>
            <div class="p-l-30 p-r-30">
              <div class="chat-box">
                <div class="people-list friend-list">
                  <ul class="list">
                    <li class="clearfix"><img class="rounded-small user-image" src="./{{asset('html/assets')}}/images/user/1.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="about">
                        <div class="name">Vincent Porter</div>
                        <div class="status"> Online</div>
                      </div>
                    </li>
                    <li class="clearfix"><img class="rounded-small user-image" src="./{{asset('html/assets')}}/images/user/2.jpg" alt="">
                      <div class="status-circle away"></div>
                      <div class="about">
                        <div class="name">Ain Chavez</div>
                        <div class="status"> 28 minutes ago</div>
                      </div>
                    </li>
                    <li class="clearfix"><img class="rounded-small user-image" src="./{{asset('html/assets')}}/images/user/8.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="about">
                        <div class="name">Kori Thomas</div>
                        <div class="status"> Online</div>
                      </div>
                    </li>
                    <li class="clearfix"><img class="rounded-small user-image" src="./{{asset('html/assets')}}/images/user/4.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="about">
                        <div class="name">Erica Hughes</div>
                        <div class="status"> Online</div>
                      </div>
                    </li>
                    <li class="clearfix"><img class="rounded-small user-image" src="./{{asset('html/assets')}}/images/user/5.jpg" alt="">
                      <div class="status-circle offline"></div>
                      <div class="about">
                        <div class="name">Ginger Johnston</div>
                        <div class="status"> 2 minutes ago</div>
                      </div>
                    </li>
                    <li class="clearfix"><img class="rounded-small user-image" src="./{{asset('html/assets')}}/images/user/6.jpg" alt="">
                      <div class="status-circle away"></div>
                      <div class="about">
                        <div class="name">Prasanth Anand</div>
                        <div class="status"> 2 hour ago</div>
                      </div>
                    </li>
                    <li class="clearfix"><img class="rounded-small user-image" src="./{{asset('html/assets')}}/images/user/7.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="about">
                        <div class="name">Hileri Jecno</div>
                        <div class="status"> Online</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Right sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Default<span>Dashboard </span></h2>
                  <h6 class="mb-0">admin panel</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default  </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 xl-100">
                <div class="row">
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-primary o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Sale<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-secondary o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-2"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Visits<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-warning o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-3"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Stock<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-info o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-4"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Value<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 xl-100 box-col-12">
                <div class="card year-overview">
                  <div class="card-header no-border d-flex">
                    <h5>Year Overview</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="header-right pull-right text-right">
                      <h5 class="mb-2">70 / 100</h5>
                      <h6 class="f-w-700 mb-0 default-text">Total 71,52,225 $</h6>
                    </div>
                  </div>
                  <div class="card-body row">
                    <div class="col-6 p-0 ct-10 default-chartist-container"></div>
                    <div class="col-6 p-0 ct-11 default-chartist-container"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Sales By Countries</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="radial-default">
                      <div id="circlechart"></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 box-col-12">
                <div class="card gradient-secondary o-hidden monthly-overview">
                  <div class="card-header no-border bg-transparent">
                    <h5>Monthly Overview</h5>
                    <h6 class="mb-0">January</h6><span class="pull-right right-badge"><span class="badge badge-pill">70 / 100</span></span>
                  </div>
                  <div class="card-body p-0">
                    <div class="text-bg"><span>0.7</span></div>
                    <div class="area-range-apex">
                      <div id="area-range"></div>
                    </div><span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 box-col-6">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Best Sellers Product</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-warning"></i></li>
                        <li><i class="view-html fa fa-code font-warning"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-warning"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-warning"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-warning"></i></li>
                        <li><i class="icofont icofont-error close-card font-warning"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pb-0 pt-0">
                    <div class="music-layer">
                      <button class="btn btn-pill">View More</button>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 box-col-6">
                <div class="card gradient-primary o-hidden monthly-overview yearly">
                  <div class="card-header no-border bg-transparent">
                    <h5>Yearly Overview</h5>
                    <h6 class="mb-0">Monday</h6><span class="pull-right right-badge"><span class="badge badge-pill">50 / 100</span></span>
                  </div>
                  <div class="card-body p-0">
                    <div class="text-bg"><span>0.5</span></div>
                    <div class="area-range-apex">
                      <div id="area-range-1"></div>
                    </div><span class="overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"> </span></span></span>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card weather-bg">
                  <div class="card-header no-border bg-transparent">
                    <h5>Weather Overview</h5>
                  </div>
                  <div class="card-body weather-bottom-bg p-0">
                    <div class="cloud"><img src="{{asset('html/assets')}}/images/cloud.png" alt=""></div>
                    <div class="cloud-rain"></div>
                    <div class="media weather-details"><span class="weather-title"><i class="fa fa-circle-o d-block text-right"></i><span>16</span></span>
                      <div class="media-body">
                        <h5>London</h5><span class="d-block">01, Dec 2021</span>
                        <h6 class="mb-0">Wind : 50km/h  </h6>
                      </div>
                    </div><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/weather-image.png" alt="">
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Today's Activity</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="activity-table table-responsive">
                      <table class="table table-bordernone">
                        <tbody>
                          <tr>
                            <td>
                              <div class="activity-image"><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/clipboard.png" alt=""></div>
                            </td>
                            <td>
                              <div class="activity-details">
                                <h4 class="default-text">15 <span class="f-14">November</span></h4>
                                <h6>New Task Added</h6>
                              </div>
                            </td>
                            <td>
                              <div class="activity-time"><span class="font-primary f-w-700">1 Day Ago</span><span class="d-block light-text">Your Work Deadline 18<sup>th</sup></span></div>
                            </td>
                            <td>
                              <button class="btn btn-shadow-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="activity-image activity-secondary"><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/greeting.png" alt=""></div>
                            </td>
                            <td>
                              <div class="activity-details">
                                <h4 class="default-text">01 <span class="f-14">January</span></h4>
                                <h6>New Task Added</h6>
                              </div>
                            </td>
                            <td>
                              <div class="activity-time"><span class="font-secondary f-w-700">10 Minute Ago</span><span class="d-block light-text">Update Your Work Today</span></div>
                            </td>
                            <td>
                              <button class="btn btn-shadow-secondary">View</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-xl-8 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Recent Buyers</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="activity-table table-responsive recent-table">
                      <table class="table table-bordernone">
                        <tbody>
                          <tr>
                            <td>
                              <div class="recent-images"><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/recent-user-1.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="default-text mb-0 f-w-700 f-18">Nick Stone</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">New York</span></td>
                            <td class="f-w-700">458-4594-5451</td>
                            <td>
                              <h6 class="mb-0">15 Jan</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="recent-images-primary"><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/recent-user-2.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="font-primary mb-0 f-w-700 f-18">Milano Esco</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">Brazil</span></td>
                            <td class="f-w-700">812-4896-9812</td>
                            <td>
                              <h6 class="mb-0">06 Feb</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="recent-images-secondary"><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/recent-user-3.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="font-secondary mb-0 f-w-700 f-18">Charlie Pol</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">London</span></td>
                            <td class="f-w-700">215-0324-6541</td>
                            <td>
                              <h6 class="mb-0">22 Feb</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="recent-images-warning"><img class="img-fluid" src="{{asset('html/assets')}}/images/dashboard/recent-user-4.png" alt=""></div>
                            </td>
                            <td>
                              <h5 class="font-warning mb-0 f-w-700 f-18">Jordi Esol</h5>
                            </td>
                            <td><span class="badge badge-pill recent-badge f-12">U.S.A</span></td>
                            <td class="f-w-700">748-0012-3487</td>
                            <td>
                              <h6 class="mb-0">18 Mar</h6>
                            </td>
                            <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 box-col-12">
                <div class="card gradient-primary o-hidden">
                  <div class="card-body">
                    <div class="setting-dot">
                      <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
                    </div>
                    <div class="default-datepicker">
                      <div class="datepicker-here" data-language="en"></div>
                    </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">   </span></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
          <div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-body">
                  <div class="modal-header"></div>
                  <div class="contain p-30">
                    <div class="text-center">
                      <h3>Welcome to creative admin</h3>
                      <p>start your project with developer friendly admin </p>
                      <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Get Started</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright © 2021 Poco. All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand-crafted & made with<i class="fa fa-heart"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('html/assets')}}/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('html/assets')}}/js/bootstrap/popper.min.js"></script>
    <script src="{{asset('html/assets')}}/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="{{asset('html/assets')}}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('html/assets')}}/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('html/assets')}}/js/sidebar-menu.js"></script>
    <script src="{{asset('html/assets')}}/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('html/assets')}}/js/typeahead/handlebars.js"></script>
    <script src="{{asset('html/assets')}}/js/typeahead/typeahead.bundle.js"></script>
    <script src="{{asset('html/assets')}}/js/typeahead/typeahead.custom.js"></script>
    <script src="{{asset('html/assets')}}/js/typeahead-search/handlebars.js"></script>
    <script src="{{asset('html/assets')}}/js/typeahead-search/typeahead-custom.js"></script>
    <script src="{{asset('html/assets')}}/js/chart/chartist/chartist.js"></script>
    <script src="{{asset('html/assets')}}/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="{{asset('html/assets')}}/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{asset('html/assets')}}/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{asset('html/assets')}}/js/prism/prism.min.js"></script>
    <script src="{{asset('html/assets')}}/js/clipboard/clipboard.min.js"></script>
    <script src="{{asset('html/assets')}}/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{asset('html/assets')}}/js/counter/jquery.counterup.min.js"></script>
    <script src="{{asset('html/assets')}}/js/counter/counter-custom.js"></script>
    <script src="{{asset('html/assets')}}/js/custom-card/custom-card.js"></script>
    <script src="{{asset('html/assets')}}/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{asset('html/assets')}}/js/dashboard/default.js"></script>
    <script src="{{asset('html/assets')}}/js/notify/index.js"></script>
    <script src="{{asset('html/assets')}}/js/datepicker/date-picker/datepicker.js"></script>
    <script src="{{asset('html/assets')}}/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="{{asset('html/assets')}}/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="{{asset('html/assets')}}/js/chat-menu.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('html/assets')}}/js/script.js"></script>
    <script src="{{asset('html/assets')}}/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->

    <script>
        $(window).on('load', function() {
            $('#sidebar-toggle').trigger('click');
        });
    </script>
  </body>
</html>
