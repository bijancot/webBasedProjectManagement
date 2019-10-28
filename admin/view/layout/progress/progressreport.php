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
                    <li class="breadcrumb-current-item">Manage Job Progress > Add New Job Progress</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Add New Job Progress
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
                                    <form method="post" action="?mmopilot=input_role" id="form-ui">
                                        <!-- Basic -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                        <div class="form-group">
                                                    <h5>Pilih Job</h5>
                                                        <select class="select2-single form-control" name="idJob">
                                                            <option>-------- Pilih Job --------</option>
                                                                <?php
                                                                    $select = $db->prepare("SELECT * FROM mmo_job");
                                                                    $select->execute();
                                                                    $tampil = $select->fetchAll();
                                                                    foreach($tampil as $value){
                                                                ?>
                                                            <option value="<?php echo $value['idJob']?>"><?php echo $value['idJob']?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                        <h5>Item Achived</h5>
                                                            <label class="field prepend-icon">
                                                                <input type="text" name="itemAchived" id="firstname" class="gui-input"
                                                                placeholder="Qty item" title="masukkan Jumlah item yang didapat">
                                                                    <span class="field-icon">
                                                                        <i class="fa fa-slack"></i>
                                                                    </span>
                                                            </label><br/><br/>          
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h5>Item Target</h5>
                                                            <label class="field prepend-icon">
                                                                <input type="text" name="itemTarget" id="firstname" class="gui-input"
                                                                placeholder="Username" title="Target Item" value="40" readonly>
                                                            </label><br/><br/>  
                                                        </div>
                                                    </div>    
                                                    <h5>Progress Notes</h5>
                                                            <label class="field prepend-icon">
                                                                <textarea class="gui-textarea" id="comment" name="progressNote" placeholder="Tambahkan catatan progress disini jika ada"></textarea>
                                                                <span class="field-icon">
                                                                <i class="fa fa-list"></i>
                                                                </span>
                                                            </label><br/><br/><br/>
                                                        <button type="submit" class="btn btn-block btn-success"><strong>Simpan Data</strong></button>      
                                                </div>
                                            </div>         
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
