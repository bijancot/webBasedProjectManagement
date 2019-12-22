    <!-- Main Wrapper -->
    <section id="content_wrapper">

                <!-- Topbar Menu Wrapper -->
        <div id="topbar-dropmenu-wrapper">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-danger">
                        <span class="fa fa-music"></span>
                        <span class="service-title">Audio</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-success">
                        <span class="fa fa-picture-o"></span>
                        <span class="service-title">Images</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-primary">
                        <span class="fa fa-video-camera"></span>
                        <span class="service-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-alert">
                        <span class="fa fa-envelope"></span>
                        <span class="service-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-system">
                        <span class="fa fa-cog"></span>
                        <span class="service-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-dark">
                        <span class="fa fa-user"></span>
                        <span class="service-title">Users</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Topbar Menu Wrapper -->

                <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage User > Add New Admin</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Add New Admin
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->
                    <div class="row">
                        <!-- AllCP Grid -->
                        <div class="allcp-form">
                            <div class="panel">
                            <div class="panel-heading">

                            </div>  
                                <div class="panel-body pn">
                            <form action="?mmopilot=input_addadmin" method="POST">
                                        <!-- Basic -->
                                       <div class="row">
                                             <div class="section">
                                <h6>Nama Admin</h6>
                                <label for="email" class="field prepend-icon">
                                    <input type="text" name="name" id="name" class="gui-input"
                                           placeholder="Name">
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </label>
                            </div>
                            <!-- /section -->


                            <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <h6>Home Address</h6>
                                    <label for="email" class="field prepend-icon">
                                    <input type="text" name="homeAddress" id="homeAddress" class="gui-input"
                                           placeholder="Home address">
                                    <span class="field-icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                </label>
                                </div>
                                <!-- /section -->

                                <div class="col-md-6 ph10">
                                    <h6>Email</h6>
                                    <label for="email" class="field prepend-icon">
                                    <input type="email" name="email" id="email" class="gui-input"
                                           placeholder="Email address">
                                    <span class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </label>
                                </div>
                                <!-- /section -->
                            </div>
                            <!-- /section -->

                            <!-- /section -->
                            <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <h6>Password</h6>
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
                                    <h6>Password Confirm</h6>
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
                            
                            <!-- /section -->

                            <div class="section row mh10m">
                                <div class="col-md-6 ph10">
                                    <h6>Whatsapp</h6>
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
                                    <h6>Facebook</h6>
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
                                    <h6>Skype</h6>
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
                                    <h6>Discord</h6>
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
                            <br><br>
                           <input type="submit" class="btn btn-block btn-success" value="Simpan Data">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /AllCP Grid -->

                    </div>
            </div>
            <!-- /Column Center -->

        </section>
        <!-- /Content -->

        

    </section>
    <!-- /Main Wrapper -->
