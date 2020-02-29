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
                    <li class="breadcrumb-current-item">Job Progress > Add Progress Report</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Progress Report
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
                            <form action="?mmopilot=input_progressreport" method="POST" id="form-ui">
                                      <div class="row">
                                    <div class="col-md-6">
                                    <h6>Job Description</h6>
                                        <select class="select2-single form-control" name="idJob">
                                            <option>-------- Pilih Job --------</option>
                                                <?php
                                                    $select = $db->prepare("SELECT * FROM mmo_job");
                                                    $select->execute();
                                                    $tampil = $select->fetchAll();
                                                    foreach($tampil as $value){
                                                ?>
                                            <option value="<?php echo $value['idJob']?>"><?php echo $value['jobDescription']?></option>
                                            <?php }?>
                                        </select>
                                        <br/><br/>

                                        <h6>Operator</h6>
                                        <select class="select2-single form-control" name="idOperator">
                                            <option>-------- Pilih Operator --------</option>
                                                <?php
                                                    $select = $db->prepare("SELECT * FROM mmo_users WHERE roleId='40'");
                                                    $select->execute();
                                                    $tampil = $select->fetchAll();
                                                    foreach($tampil as $value){
                                                ?>
                                            <option value="<?php echo $value['idUser']?>"><?php echo $value['name']?></option>
                                            <?php }?>
                                        </select>
                                        <br/><br/>
                                        <div class="col-md-8">
                                           <h6>Progress Date</h6>
                                            <label class="field prepend-picker-icon">
                                                <input type="date" id="datetimepicker2" name="progressDate"
                                                       class="gui-input"
                                                       placeholder="Datetimepicker Addon">
                                            </label><br/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                         <div class="col-md-5">
                                        <h6>Item Achived</h6>
                                            <label class="field prepend-icon">
                                                <input type="text" name="itemAchived" id="firstname" class="gui-input"
                                                placeholder="Qty item" title="masukkan Jumlah item yang didapat">
                                                    <span class="field-icon">
                                                        <i class="fa fa-slack"></i>
                                                    </span>
                                            </label><br/><br/>          
                                        </div>
                                        <div class="col-md-5">
                                            <h6>Item Target</h6>
                                            <label class="field prepend-icon">
                                                <input type="text" name="itemTarget" id="firstname" class="gui-input"
                                                placeholder="Username" title="Target Item" value="40" readonly>
                                            </label><br/><br/>  
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <h6>Progress Notes</h6>
                                            <label class="field prepend-icon">
                                                <textarea class="gui-textarea" id="comment" name="progressNote" placeholder="Tambahkan catatan progress disini jika ada"></textarea>
                                                <span class="field-icon">
                                                <i class="fa fa-list"></i>
                                                </span>
                                            </label>
                                    </div>
                                </div>
                            <!-- /section -->
                             <br><br>
                           <input type="submit" name="submit" class="btn btn-block btn-success" value="Simpan Data"> 
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
