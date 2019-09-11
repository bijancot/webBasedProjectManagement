<?php include "query.php";?>
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
                    <li class="breadcrumb-current-item">Manage Role User</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Manage Role
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->

                    <div class="row mn">
                        <!-- AllCP Grid -->
                       
                    <div class="col-md-12">
                        <div class="panel panel-visible">
                            <div class="panel-heading">
                                <div class="row nm">
                                    <div class="col-md-4"> 
                                    <div class="panel-title hidden-xs">
                                    Search Bar Filtering
                                </div>
                                </div>
                                    <div class="col-md-4"></div>
                                <div class="col-md-4">  
                                    <div class="panel-title hidden-xs">
                                    <a href="#">
                                    <button type="button" class="btn btn-rounded btn-primary btn-block right">+ Tambah Role Baru</button>
                                    </a>
                                </div>
                                </div>
                                </div>  
                            </div>
                            <div class="panel-body pn">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th class="va-m">Nama Role</th>
                                            <th class="va-m">Deskripsi Role</th>
                                            <th class="va-m">Menu Yang diizinkan</th>
                                            <th class="hidden-xs va-m">tanggal dibuat</th>
                                            <th class="hidden-xs va-m">pembuat role</th>
                                            <th class="va-m">opsi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                           foreach ($hasil as $key) {
                                            echo "<tr>
                                            <td>$key->roleName</td>
                                            <td>$key->roleDesc</td>
                                            <td>$key->MenuList</td>
                                            <td>$key->createdDate</td>
                                            <td>$key->createBy</td>
                                            <td> <a href=\"#\">
                                            <button type=\"button\" class=\"btn btn-rounded btn-alert btn-block\">Edit Data</button>
                                            </a>
                                            <br/>
                                            <a href=\"#\">
                                            <button type=\"button\" class=\"btn btn-rounded btn-danger btn-block\">Hapus Data</button>
                                            </a>
                                            </td>
                                        </tr>";
                                        }
                                       ?>
                                        </tbody>
                                    </table>
                                </div>
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
