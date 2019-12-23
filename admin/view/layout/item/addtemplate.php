   <!-- Main Wrapper -->
    <section id="content_wrapper">
    <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage Job > Add New Job</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Add New Template
        </div>
        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">


            <!-- Column Center -->
            <div class="chute chute-center">

                <div class="mw1000 center-block">

                    <!-- Spec Form -->
                    <div class="allcp-form">
                        <div class="panel">
                            
                            <div class="panel-body">

                            <form class="form-horizontal" action="?mmopilot=input_template" method="POST">
                                <?php
                                    $id = $_GET['id'];
                                    $select = $db->prepare("SELECT * FROM mmo_job where idJob='$id'");
                                    $select->execute();
                                    $tampil = $select->fetchAll();
                                    foreach($tampil as $value){
                                    $ida    = $value['idOrder'];
                                ?>
                              <!-- <div class="row">
                                            <div class="col-md-7">
                                                <h6>Nama Job Baru</h6>
                                                <label class="field prepend-icon">
                                                    <input type="text" name="jobDescription" id="firstname" class="gui-input"
                                                                placeholder="Nama Job Item" title="nama job baru" required>
                                                <span class="field-icon">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </span> 
                                                </label><br/><br/>
                                            </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-7">
                                    <h6>New Job Description</h6>
                                        <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="jobDescription" placeholder="Deskripsi JOB">
                                        </textarea>
                                            <span class="field-icon">
                                                <i class="fa fa-list"></i>
                                            </span>
                                        </label><br/><br/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Item Target (Qty)</h6>
                                                <label class="field prepend-icon">
                                                    <input type="text" name="itemTarget" id="firstname" class="gui-input" placeholder="Qty Item" title="username untuk role ini" value="<?php echo $value['itemTarget']?>" required>
                                                <span class="field-icon">
                                                    <i class="fa fa-bullseye"></i>
                                                </span> 
                                                </label><br/><br/>
                                            </div>
                                            <div class="col-md-6">
                                            <h6>Target Waktu</h6>
                                                <label class="field prepend-icon">
                                                    <input type="date" name="time" class="gui-input" value="<?php echo $value['time']?>">
                                                <span class="field-icon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
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
                                            <h6>Pilih Item</h6>
                                                <select class="select2-single form-control" name="item" required>
                                                    <?php
                                                    $ids     = $value['idItem'];
                                                    $select1 = $db->prepare("SELECT * FROM mmo_item where idItem='$ids'");
                                                    $select1->execute();
                                                    $tampil1 = $select1->fetchAll();
                                                    foreach($tampil1 as $value1){
                                                    ?>
                                                    <option value="<?php echo $value1['iditem']?>"><?php echo $value1['itemName']?></option>
                                                  <?php }?>
                                                    <option>-------- Pilih Item --------</option>
                                                        <?php
                                                            $select = $db->prepare("SELECT * FROM mmo_item");
                                                            $select->execute();
                                                            $tampil = $select->fetchAll();
                                                            foreach($tampil as $value){
                                                        ?>
                                                    <option value="<?php echo $value['idItem']?>"><?php echo $value['itemName']?></option>
                                                    <?php }?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <h6>Pilih Order</h6>
                                             <select class="select2-single form-control" name="item" required>
                                                  <?php
                                                    $ids     = $value['idItem'];
                                                    $select1 = $db->prepare("SELECT * FROM mmo_item where idItem='$ids'");
                                                    $select1->execute();
                                                    $tampil1 = $select1->fetchAll();
                                                    foreach($tampil1 as $value1){
                                                    ?>
                                                    <option value="<?php echo $value1['iditem']?>"><?php echo $value1['itemName']?></option>
                                                  <?php }?>
                                                    <option>-------- Pilih ID Order --------</option>
                                                    <?php
                                                        $select = $db->prepare("SELECT * FROM mmo_order");
                                                        $select->execute();
                                                        $tampil = $select->fetchAll();
                                                        foreach($tampil as $value){
                                                    ?>
                                                    <option value="<?php echo $value['idOrder']?>"><?php echo $value['orderNote']?></option>
                                                    <?php }?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <h6>Pilih Operator</h6>
                                             <select class="select2-single form-control" name="operator" required>
                                                 <option>-------- Pilih Operator --------</option>
                                                <?php
                                                    $select = $db->prepare("SELECT * FROM mmo_users");
                                                    $select->execute();
                                                    $tampil = $select->fetchAll();
                                                    foreach($tampil as $value){
                                                ?>
                                                <option value="<?php echo $value['idUser']?>"><?php echo $value['name']?></option>
                                                <?php }?>
                                                </select>
                                                    <br/><br/><br/><br/>
                                                     <?php }?>
                                                    <input type="submit" name="submit" class="btn btn-block btn-success" value="Simpan Data">
                                                <!-- <button type="submit" class="btn btn-block btn-success" name="submit"><strong>Simpan Data</strong></button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /Column Center -->

        </section>
        <!-- /Content -->

    </section>


</div>
<!-- /Body Wrap  -->