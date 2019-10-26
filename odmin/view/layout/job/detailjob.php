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

                            <form class="form-horizontal" action="#" method="POST">
                                
                                <?php
                                $id = $_GET['id'];
                                $select = $db->prepare("SELECT * FROM mmo_job where idJob='$id'");
                                $select->execute();
                                $tampil = $select->fetchAll();
                                foreach($tampil as $value){
                                $id_item  = $value['idItem'];
                                $id_order = $value['idOrder'];
                                $id_op    = $value['idOperator'];
                                ?>

                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">ID Job</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="idJob" value="<?php echo $value['idJob']; ?>" disabled> 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="item">
                                                <?php
                                                    $select = $db->prepare("SELECT mmo_item.itemName,mmo_item.idItem from mmo_item JOIN mmo_job ON mmo_item.idItem=mmo_job.idItem WHERE mmo_job.idItem='$id_item'");
                                                    $select->execute();
                                                    $tampil2 = $select->fetchAll();
                                                    foreach($tampil2 as $valuee){
                                                ?>
                                               <option value="<?php echo $valuee['idItem']?>"><?php echo $valuee['itemName']?></option>
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
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Order</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="order">
                                                <?php
                                                    $select = $db->prepare("SELECT mmo_order.idOrder from mmo_order JOIN mmo_job ON mmo_order.idOrder=mmo_job.idOrder WHERE mmo_job.idOrder='$id_order'");
                                                    $select->execute();
                                                    $tampil2 = $select->fetchAll();
                                                    foreach($tampil2 as $valuee){
                                                ?>
                                               <option value="<?php echo $valuee['idOrder']?>"><?php echo $valuee['idOrder']?></option>
                                                <?php }?>
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
                                                <?php
                                                    $select = $db->prepare("SELECT mmo_users.idUser,mmo_users.name from mmo_users JOIN mmo_job ON mmo_users.idUser=mmo_job.idOperator WHERE mmo_job.idOperator='$id_op'");
                                                    $select->execute();
                                                    $tampil2 = $select->fetchAll();
                                                    foreach($tampil2 as $valuee){
                                                ?>
                                               <option value="<?php echo $valuee['idUser']?>"><?php echo $valuee['name']?></option>
                                                <?php }?>
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

                                <?php
                                $id = $_GET['id'];
                                $select = $db->prepare("SELECT * FROM mmo_job where idJob='$id'");
                                $select->execute();
                                $tampil = $select->fetchAll();
                                foreach($tampil as $value){
                                ?>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Job Description</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="jobDescription" value="<?php echo $value['jobDescription']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Time</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="time" value="<?php echo $value['time']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Item Target</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemTarget" value="<?php echo $value['itemTarget']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Priority</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="priority" value="<?php echo $value['priority']?>">
                                        </div>
                                    </div>
                                </div>
                                <?php }}?>
                               
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