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
    <link rel="shortcut icon" href="admin/view/assets/img/favicon.png">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="admin/view/assets/skin/css/angular-material.min.css">
    
    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="admin/view/assets/fonts/icomoon/icomoon.css">    
    
    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="admin/view/assets/fonts/animatedsvgicons/css/codropsicons.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="admin/view/assets/allcp/forms/css/forms.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="admin/view/assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="admin/view/assets/skin/default_skin/less/theme.css">
    
    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="utility-page sb-l-c sb-r-c">


<!-- Body Wrap -->
<div id="main" class="animated fadeIn">

    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Content -->
        <section id="content" class="">

            <!-- Registration -->
            <div class="allcp-form theme-primary mw600" id="register">
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <img src="admin/view/assets/img/logo.png" alt=""/>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading pn">
                                    <span class="panel-title">
                                     Registration Form 
                                    </span>
                    </div>
                    <!-- /Panel Heading -->

                    <form method="post" action="?mmolog=add_register">
                        <div>
                           

                           <div class="section">
                                <label for="email" class="field prepend-icon">
                                    <input type="text" name="name" id="name" class="gui-input"
                                           placeholder="Name">
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section">
                                <label for="email" class="field prepend-icon">
                                    <input type="email" name="email" id="email" class="gui-input"
                                           placeholder="Email address">
                                    <span class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->
                            <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="password" name="password" id="password1"
                                               class="gui-input"
                                               placeholder="Your Password">
                                        <span class="field-icon">
                                            <i class="fa fa-key"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->

                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="password" name="passwordver" id="password2" class="gui-input"
                                               placeholder="Verify your password">
                                        <span class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </label><br/>
                                    <h6 id="validate-status"></h6>
                                </div>
                                <!-- /section -->
                            </div>
                            
                            <div class="section">
                                <label for="email" class="field prepend-icon">
                                    <input type="text" name="homeAddress" id="homeAddress" class="gui-input"
                                           placeholder="Home address">
                                    <span class="field-icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->

                            <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="number" name="whatsapp" id="whatsapp"
                                               class="gui-input"
                                               placeholder="Whatsapp">
                                        <span class="field-icon">
                                            <i class="fa fa-phone-square"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->

                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="facebook" id="facebook" class="gui-input"
                                               placeholder="Facebook">
                                        <span class="field-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->
                            </div>
                            <!-- /section -->
                         
                             <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                        <input type="text" name="skype" id="skype"
                                               class="gui-input"
                                               placeholder="Skype">
                                        <span class="field-icon">
                                            <i class="fa fa-skype"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->

                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                        <input type="text" name="discord" id="discord" class="gui-input"
                                               placeholder="Discord">
                                        <span class="field-icon">
                                            <i class="fa fa-github-alt"></i>
                                        </span>
                                    </label>
                                </div>
                                <!-- /section -->
                            </div>
                            <!-- /section -->
                         
                            <div class="section">
                                <div class="bs-component pull-left pt5">
                                    <div class="radio-custom radio-primary mb5 lh25">
                                       <a href="?mmolog">Have an account?</a>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-bordered btn-primary pull-right" value="CREATE account">
                            </div>
                            <!-- /section -->

                        </div>
                        <!-- /Form -->
                        <div class="panel-footer">

                        </div>
                        <!-- /Panel Footer -->
                    </form>
                </div>
            </div>
            <!-- /Spec Form -->

        </section>
        <!-- /Content -->

    </section>
    <!-- /Main Wrapper -->

</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="admin/view/assets/js/jquery/jquery-1.12.3.min.js"></script>
<script src="admin/view/assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- AnimatedSVGIcons -->
<script src="admin/view/assets/fonts/animatedsvgicons/js/snap.svg-min.js"></script>
<script src="admin/view/assets/fonts/animatedsvgicons/js/svgicons-config.js"></script>
<script src="admin/view/assets/fonts/animatedsvgicons/js/svgicons.js"></script>
<script src="admin/view/assets/fonts/animatedsvgicons/js/svgicons-init.js"></script>

<!-- Scroll -->
<script src="admin/view/assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Mixitup -->


<!-- Summernote -->



<!-- HighCharts Plugin -->
<script src="admin/view/assets/js/plugins/highcharts/highcharts.js"></script>

<!-- Highlight JS -->

<!-- Date/Month - Pickers -->





<!-- Magnific Popup Plugin -->


<!-- FullCalendar Plugin -->



<!-- Plugins -->














<!-- Google Map API -->





<!-- Jvectormap JS -->




<!-- Datatables JS -->





<!-- FooTable JS -->



<!-- Validate JS -->



<!-- BS Dual Listbox JS -->


<!-- Bootstrap Maxlength JS -->


<!-- Select2 JS -->


<!-- Typeahead JS -->


<!-- TagManager JS -->


<!-- DateRange JS -->


<!-- BS Colorpicker JS -->


<!-- MaskedInput JS -->


<!-- Slick Slider JS -->


<!-- MarkDown JS -->




<!-- X-edit CSS -->






<!-- Dropzone JS -->


<!-- Cropper JS -->


<!-- Zoom JS -->


<!-- Nestable JS -->


<!-- PNotify JS -->


<!-- Fancytree JSs -->







<!-- Ladda JS -->


<!-- NProgress JS -->


<!-- Countdown JS -->



<!-- CanvasBG JS -->
<script src="admin/view/assets/js/plugins/canvasbg/canvasbg.js"></script>

<!-- Theme Scripts -->
<script src="admin/view/assets/js/utility/utility.js"></script>
<!-- <script src="admin/view/assets/js/demo/demo.js"></script> -->
<script src="admin/view/assets/js/main.js"></script>
<script src="admin/view/assets/js/demo/widgets_sidebar.js"></script>
<!-- <script src="admin/view/assets/js/pages/dashboard_init.js"></script> -->
<script>
$(document).ready(function() {
  $("#password2").keyup(validate);
});
function validate() {
  var password1 = $("#password1").val();
  var password2 = $("#password2").val();

    if(password1 == password2) {
       $("#validate-status").text("password match");
       document.getElementById("password2").style.border="1px solid lightgreen"; 
       document.getElementById("validate-status").style.color="green"; 
       document.getElementById("validate-status").style.fontWeight="bold";
    }
    else {
        $("#validate-status").text("password didn't match");  
        document.getElementById("password2").style.border="1px solid red";  
        document.getElementById("validate-status").style.color="red";
       document.getElementById("validate-status").style.fontWeight="bold";
    }    
}
</script>
<!-- /Scripts -->

</body>

</html>


