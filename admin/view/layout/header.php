<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>MMOPilot</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="AdminK - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="view/assets/img/favicon.png">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="view/assets/skin/css/angular-material.min.css">
    
    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="view/assets/fonts/icomoon/icomoon.css"> 
    <link rel="stylesheet" type="text/css" href="view/assets/fonts/font-awesome/font-awesome.css">    
    
    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="view/assets/fonts/animatedsvgicons/css/codropsicons.css">

  <!-- select2 CSS -->
   <!-- <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/select2/css/core.css"> -->

    <!-- Octicons CSS -->
    
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- Stateface CSS -->
    

    <!-- FullCalendar -->
    

    <!-- Magnific popup -->
    <!-- <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/magnific/magnific-popup.css"> -->

    <!-- c3charts -->
    <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/c3charts/c3.min.css">

    <!-- Highlight.js CSS -->
    
    

    <!-- Ladda CSS -->
    

    <!-- Zocial CSS -->
    

    <!-- Slick CSS -->
    

    <!-- Dropzone CSS -->
    

    <!-- Nestable CSS -->
    

    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/datatables/extensions/Editor/css/dataTables.editor.css">
    <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">
    
    

    <!-- Fancytree CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/fancytree/skin-win8/ui.fancytree.min.css"> -->

    <!-- X-edit CSS -->
    

    <!-- FooTable CSS -->
    

    <!-- Summernote -->
    

    <!-- Stateface CSS -->
    

    <!-- Daterange CSS -->
    

    <!-- Tagmanager CSS -->
    

    <!-- Datetimepicker CSS -->
    

    <!-- Colorpicker CSS -->
    

    <!-- select2 CSS -->
    <link rel="stylesheet" type="text/css" href="view/assets/js/plugins/select2/css/core.css">
    <script src="view/assets/highcharts-gantt.js"></script>
                <script src="view/assets/exporting.js"></script>

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="view/assets/allcp/forms/css/forms.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" type="text/css" href="view/assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="view/assets/skin/default_skin/less/theme.css">
    
    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page with-customizer charts-d3">

<!-- Body Wrap  -->
<div id="main">

    <!-- Header  -->
    <header class="navbar navbar-fixed-top ">
        <ul class="nav navbar-nav navbar-left">
            <li class="hidden-xs">
                <div class="navbar-btn btn-group">
                    <button class="btn-hover-effects navbar-fullscreen toggle-active btn si-icons si-icons-default">
                        <span class="si-icon si-icon-maximize-rotate default" data-icon-name="maximizeRotate"></span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
                
            <li class="dropdown dropdown-fuse navbar-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="btn-hover-effects" src="view/assets/img/avatars/profile_avatar.jpg" alt="avatar">
                    <span class="hidden-xs">
                        <span class="name"><?php echo $login_session; ?></span>
                    </span>
                    <span class="fa fa-caret-down hidden-xs"></span>
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w230" role="menu">
                    <li class="dropdown-header clearfix">
                        <div class="pull-left">
                            <strong style="color:black;"><?php echo "ONLINE"; ?></strong>
                        </div>

                        <div class="pull-right">
                                    <strong style="color:black;"><?php echo $login_session; ?></strong>
                        </div>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="?mmopilot=logout" class="btn btn-warning">
                            logout 
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- /Header -->