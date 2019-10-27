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
            Add New Job
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

                            <form class="form-horizontal" action="?mmopilot=input_job" method="POST">
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
                                            <div class="col-md-4">
                                                <h6>Item Target (Qty)</h6>
                                                <label class="field prepend-icon">
                                                    <input type="text" name="itemTarget" id="firstname" class="gui-input"
                                                                placeholder="Qty Item" title="username untuk role ini">
                                                <span class="field-icon">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                                </label><br/><br/>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Target Waktu</h6>
                                                <label class="field prepend-icon">
                                                    <input type="text" name="time1" id="firstname" class="gui-input"
                                                                placeholder="Target waktu penyelesaian" title="username untuk role ini">
                                                <span class="field-icon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                </label><br/>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Satuan waktu</h6>
                                                    <label class="field prepend-icon">
                                                    <label class="field select">
                                                    <select id="job" name="job">
                                                        <option value="hari" selected>Hari</option>
                                                        <option value="minggu">Minggu</option>
                                                        <option value="bulan">Bulan</option>
                                                    </select>
                                                    <i class="arrow"></i>
                                                </label>
                                                    </label><br/><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <h6>Pilih Item</h6>
                                                <select class="select2-single form-control" name="item">
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
                                                <select class="select2-single form-control" name="order">
                                                <option>-------- Pilih ID Order --------</option>
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
                                            <h6>Pilih Operator</h6>
                                                <select class="select2-single form-control" name="operator">
                                                 <option>-------- Pilih Operator --------</option>
                                                <?php
                                                    $select = $db->prepare("SELECT * FROM `mmo_users`
                                                                        WHERE name LIKE '%operator%';");
                                                    $select->execute();
                                                    $tampil = $select->fetchAll();
                                                    foreach($tampil as $value){
                                                ?>
                                                <option value="<?php echo $value['idUser']?>"><?php echo $value['name']?></option>
                                                <?php }?>
                                                </select>
                                                <div class="row">
                                                        <div class="col-md-5">
                                                        <span class="rating block">
                                        <h6>Job Priority</h6>
                                              <input class="rating-input" id="r5" type="radio" name="priority" value="5">
                                              <label class="rating-star" for="r5">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r4" type="radio" name="priority" value="4">
                                              <label class="rating-star" for="r4">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r3" type="radio" name="priority" value="3" checked>
                                              <label class="rating-star" for="r3">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r2" type="radio" name="priority" value="2">
                                              <label class="rating-star" for="r2">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r1" type="radio" name="priority" value="1">
                                              <label class="rating-star" for="r1">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                        </div>
                                                </div><br/>
                                                <button type="submit" class="btn btn-block btn-success"><strong>Simpan Data</strong></button>
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