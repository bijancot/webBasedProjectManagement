
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
                                <?php
                                $id = $_GET['id'];
                                $select = $db->prepare("SELECT * FROM mmo_order where idOrder='$id'");
                                $select->execute();
                                $tampil = $select->fetchAll();
                                foreach($tampil as $value){
                                $ids = $value['idOrder'];
                                ?>
                            <form class="form-horizontal" action="?mmopilot=edit_order&id=<?php echo $value['idOrder'];?>" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">ID Order</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="idOrder" value="<?php echo $value['idOrder'];?>" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Nama User</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="idUser" required>
                                                <?php
                                                    $select = $db->prepare("SELECT mmo_users.name,mmo_users.idUser from mmo_users JOIN mmo_order ON mmo_users.idUser=mmo_order.idClient WHERE mmo_order.idOrder='$ids'");
                                                    $select->execute();
                                                    $tampil2 = $select->fetchAll();
                                                    foreach($tampil2 as $valuee){
                                                ?>
                                                <option value="<?php echo $valuee['idUser']?>"><?php echo $valuee['name']?></option>
                                                <option>-------- Pilih User --------</option>
                                            <?php }}?>
                                                <?php
                                                    $select = $db->prepare("SELECT * FROM mmo_users WHERE idUser!='USR001'AND idUser!='USR002'");
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
                                $select = $db->prepare("SELECT * FROM mmo_order where idOrder='$id'");
                                $select->execute();
                                $tampil = $select->fetchAll();
                                foreach($tampil as $value){
                                ?>
                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Mata Uang</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="currency" value="<?php echo $value['currency'];?>" required>
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Nominal</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="price" value="<?php echo $value['price'];?>" required>
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Catatan Order</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="orderNote" value="<?php echo $value['orderNote'];?>" required>
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="username" value="<?php echo $value['username'];?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="password" id="inputStandard" class="form-control" name="password" value="<?php echo $value['password'];?>" required>
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Konfirmasi Password</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="password" id="inputStandard" class="form-control" name="konpassword" value="<?php echo $value['password'];?>" required>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
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