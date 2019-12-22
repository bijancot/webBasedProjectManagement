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
                    <li class="breadcrumb-current-item">Manage Staff</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Give Role to Staff
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->

                    <div class="row mn">
                        <!-- AllCP Grid -->
                        <?php 
                                $id = $_GET['id'];
                                ?>
                    <div class="col-md-12">
                        <div class="panel panel-visible">
                            <div class="panel-heading">
                            <div class="panel-body pn">
                                <form class="form-horizontal" action="?mmopilot=inputstaffrole&id=<?php echo $id;?>" method="POST">
                                <?php 
                                $id = $_GET['id'];
                                $select = $db->prepare("SELECT * FROM mmo_users where idUser=$id");
                                $select->execute();
                                $tampil = $select->fetchAll();
                                foreach($tampil as $value){
                                ?>
                                <h6>Id Staff : <?php echo $value['idUser']?></h6>
                                <h5>Nama Staff : <?php echo $value['name']?></h5>
                                <h6><?php echo $value['email']?></h6><br/>

                                <h6>Pilih role yang akan diberikan :</h6>
                                <select class="select2-single form-control" name="role" style="width:30%;" required>
                                                    <option>-------- Pilih Role --------</option>
                                                        <?php
                                                            $select = $db->prepare("SELECT * FROM mmo_role where roleName!='Super Admin' and roleName!='Client'");
                                                            $select->execute();
                                                            $tampil = $select->fetchAll();
                                                            foreach($tampil as $value){
                                                        ?>
                                                    <option value="<?php echo $value['idRole']?>"><?php echo $value['roleName']?></option>
                                                    <?php }?>
                                                </select>
                                <?php } ?><br/><br/>
                                <input type="submit" name="submit" class="btn btn-block btn-success" style="width:45%;" value="Simpan Data">
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
