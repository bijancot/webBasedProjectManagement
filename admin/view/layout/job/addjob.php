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
                    <li class="breadcrumb-current-item">Manage Job > Add Assign Job</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Add Assign Job
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
                            <form action="?mmopilot=input_job" method="POST" id="form-ui">
                                      <div class="row">
                                    <div class="col-md-7">
                                    <h6>Job Description</h6>
                                        <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="jobDescription" placeholder="Deskripsi JOB"></textarea>
                                            <span class="field-icon">
                                                <i class="fa fa-list"></i>
                                            </span>
                                        </label><br/><br/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Item Target (Qty)</h6>
                                                <label class="field prepend-icon">
                                                    <input type="text" name="itemTarget" id="firstname" class="gui-input"
                                                                placeholder="Qty Item" title="username untuk role ini" required>
                                                <span class="field-icon">
                                                    <i class="fa fa-bullseye"></i>
                                                </span> 
                                                </label><br/><br/>
                                            </div>
                                            <div class="col-md-6">
                                            <h6>Target Waktu</h6>
                                            <label for="datetimepicker2" class="field prepend-picker-icon">
                                                <input type="text" id="datetimepicker2" name="time"
                                                       class="gui-input"
                                                       placeholder="Datetimepicker Addon">
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
                                              <input class="rating-input" id="r5" type="radio" name="priority" value="5" required>
                                              <label class="rating-star" for="r5">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r4" type="radio" name="priority" value="4" required>
                                              <label class="rating-star" for="r4">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r3" type="radio" name="priority" value="3" checked required>
                                              <label class="rating-star" for="r3">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r2" type="radio" name="priority" value="2" required>
                                              <label class="rating-star" for="r2">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r1" type="radio" name="priority" value="1" required>
                                              <label class="rating-star" for="r1">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                            </span>
                                            </div>
                                                </div>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="row">
                                                        <div class="col-md-5">
                                      <!--                   <span class="rating block">
                                        <h6>Job Priority</h6>
                                              <input class="rating-input" id="r5" type="radio" name="priority" value="5" required>
                                              <label class="rating-star" for="r5">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r4" type="radio" name="priority" value="4" required>
                                              <label class="rating-star" for="r4">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r3" type="radio" name="priority" value="3" checked required>
                                              <label class="rating-star" for="r3">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r2" type="radio" name="priority" value="2" required>
                                              <label class="rating-star" for="r2">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r1" type="radio" name="priority" value="1" required>
                                              <label class="rating-star" for="r1">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                            </span> -->
                                                        </div>
                                                        <div class="col-md-6">
                                                        </div>
                                                </div>
                                        <div class="form-group">
                                                <h6>Order</h6>
                                                    <label class="field prepend-icon">
                                                    <label class="field select">
                                                    <select id="order" name="order" required>
                                                    <option value="">Pilih Order</option>
                                                        <?php
                                                        $select = $db->prepare("SELECT * FROM mmo_order");
                                                        $select->execute();
                                                        $tampil = $select->fetchAll();
                                                        foreach($tampil as $value){
                                                    ?>
                                                    <option value="<?php echo $value['idOrder']?>"><?php echo $value['idOrder']?></option>
                                                    <?php }?>
                                                    </select>
                                        </div>
                                        <div class="form-group">
                                        <h6>Item</h6>
                                        <?php
                                        $select = $db->prepare("SELECT * FROM mmo_item");
                                        $select->execute();
                                        $tampil = $select->fetchAll();
                                        foreach($tampil as $hoho){
                                                        
                                        echo  "<div style=\"margin-left:20px !important; \"><label class=\"option block\">
                                            <input type=\"checkbox\" name=\"idItem[]\" value=".$hoho['idItem'].">
                                            <span class=\"checkbox\"></span>".$hoho['itemName']."</label><br/></div>";
                                        }
                                        ?>

                                        </div>
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
