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

                            <form class="form-horizontal" action="?mmopilot=input_order" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">ID Order</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="idOrder">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Nama User</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <select class="form-control" name="idUser">
                                                <option>-------- Pilih User --------</option>
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

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Mata Uang</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="currency">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Nominal</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="price">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Catatan Order</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="orderNote">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="username">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="password" id="inputStandard" class="form-control" name="password">
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">Konfirmasi Password</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="password" id="inputStandard" class="form-control" name="konpassword">
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