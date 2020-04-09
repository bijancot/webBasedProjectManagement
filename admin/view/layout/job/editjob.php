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
                    <li class="breadcrumb-current-item">Manage Job > Edit Job</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Edit Job
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
                                    <form method="post" action="?mmopilot=editedRole" id="form-ui">
                                        <!-- Basic -->
                                        <?php
                                            $id = $_GET['id'];
                                            $select = $db->prepare("SELECT mmo_job.idJob,mmo_job.jobDescription,mmo_jobpriority.priorityKeterangan,mmo_job.time,mmo_job.itemTarget,mmo_jobpriority.idPriority,mmo_order.idOrder,mmo_order.orderNote FROM mmo_jobpriority JOIN mmo_job ON mmo_job.idPriority=mmo_jobpriority.idPriority JOIN mmo_order ON mmo_order.idOrder=mmo_job.idOrder WHERE idJob='$id'");
                                            $select->execute();
                                            $tampil = $select->fetchAll();
                                            foreach($tampil as $value){                                           
                                        ?>
                                    <div class="row">
                                    <div class="col-md-7">
                                    <h6>Job Description</h6>
                                        <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="jobDescription" placeholder="Deskripsi JOB"><?php echo $value['jobDescription'];?></textarea>
                                            <span class="field-icon">
                                                <i class="fa fa-list"></i>
                                            </span>
                                        </label><br/><br/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Item Target (Qty)</h6>
                                                <label class="field prepend-icon">
                                                    <input type="text" name="itemTarget" id="firstname" class="gui-input" title="username untuk role ini" value="<?php echo $value['itemTarget'];?>" required>
                                                <span class="field-icon">
                                                    <i class="fa fa-bullseye"></i>
                                                </span> 
                                                </label><br/><br/>
                                            </div>
                                            <div class="col-md-6">
                                            <h6>Target Waktu</h6>
                                            <label for="datetimepicker2" class="field prepend-picker-icon">
                                                <input type="date" id="datetimepicker2" name="time"
                                                       class="gui-input" value="<?php echo $value['time'];?>" placeholder="Datetimepicker Addon">
                                            </label><br/>
                                            </div>
                                            <!-- <div class="col-md-4">
                                            <h6>Satuan waktu</h6>
                                                    <label class="field prepend-icon">
                                                    <label class="field select">
                                                    <select id="job" name="job" required>
                                                        <option value="hari" selected>Hari</option>
                                                        <option value="minggu">Minggu</option>
                                                        <option value="bulan">Bulan</option>
                                                    </select>
                                                    <i class="arrow"></i>
                                                </label>
                                                    </label><br/><br/>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                        <span class="rating block">
                                        <h6>Job Priority</h6>
                                             <label class="field prepend-icon">
                                                    <label class="field select">
                                                    <select id="order" name="order" required>
                                                    <option value="<?php echo $value['idPriority'];?>"><?php echo $value['priorityKeterangan'];?></option>
                                                    <option value="">Pilih Job Priority</option>
                                                        <?php
                                                        $select = $db->prepare("SELECT * FROM mmo_jobpriority");
                                                        $select->execute();
                                                        $tampil = $select->fetchAll();
                                                        foreach($tampil as $value){
                                                    ?>
                                                    <option value="<?php echo $value['idPriority']?>"><?php echo $value['priorityKeterangan']?></option>
                                                    <?php }?>
                                                    </select>
                                            </span>
                                            </div>
                                                </div>
                                    </div>
                                    <div class="col-md-5">
                                                <div>
                                                <h6>Order</h6>
                                                    <label class="field prepend-icon">
                                                    <label class="field select">
                                                    <select id="order" name="order" required>
                                                    <!--  -->
                                                    <option value="">Pilih Order</option>
                                                        <?php
                                                        $select1 = $db->prepare("SELECT * FROM mmo_order");
                                                        $select1->execute();
                                                        $tampil1 = $select1->fetchAll();
                                                        foreach($tampil1 as $value1){
                                                    ?>
                                                    <option value="<?php echo $value1['idOrder']?>"><?php echo $value1['orderNote']?></option>
                                                    <?php }?>
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                        <h6>Item</h6>
                                        <?php
                                                    $select = $db->prepare("SELECT * FROM mmo_item");
                                                    
                                                    $select->execute();
                                                    $tampil = $select->fetchAll();

                                                    foreach($tampil as $value){
                                                        if($value['idItem']!=NULL){
                                                            $select2 = $db->prepare("SELECT a.idItem from tr_job_item a join mmo_item b on a.idItem=b.idItem where a.idJob='$id'");
                                                            $select2->execute();
                                                            $tampil2 = $select2->fetchAll();
                                                           
                                                                    echo  "<div><label class=\"option block\">
                                                                    <input type=\"checkbox\" name=\"menuList[]\" value=\"".$value['idItem']."\""; 
                                                                    foreach($tampil2 as $value2){
                                                                        if($value2['idItem']==$value['idItem']){
                                                                            echo " checked";
                                                                        }
                                                                    }
                                                                    echo"><span class=\"checkbox\"></span>".$value['itemName']."</label><br/></div>";
                                                        }elseif($value['idItem']!=NULL){
                                                            continue;
                                                        }
                                                       
                                                    };
                                                ?>

                                        </div>
                                    </div>
                                </div>
                                              
                                                <br/><br/>
                                                <button type="submit" class="btn btn-block btn-success" name="submit"><strong>Simpan Data</strong></button>
                                                </div>
                                                <?php };?>
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
