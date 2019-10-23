   <!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">


            <!-- Column Center -->
            <div class="chute chute-center">

                <div class="mw1000 center-block">

                    <!-- Spec Form -->
                    <div>
                        <div class="panel">
                            
                            <div class="panel-body">

                            <form class="form-horizontal" action="?mmopilot=input_job" method="POST">
                                
                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">ID Job</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="idJob">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="item">
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
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Order</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="order">
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
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Operator</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="operator">
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
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Job Description</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="jobDescription">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Time</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="time">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Item Target</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemTarget">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Priority</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="priority">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-rounded btn-primary btn-block"  name="submit" value="Simpan">
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