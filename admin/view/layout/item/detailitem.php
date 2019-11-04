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

                            <form class="form-horizontal" action=?mmopilot=edit_item&id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/form-data">
                                

                                <?php
                                $id = $_GET['id'];
                                $select = $db->prepare("SELECT * FROM mmo_item where idItem='$id'");
                                $select->execute();
                                $tampil = $select->fetchAll();
                                foreach($tampil as $value){
                                ?>
                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-3 control-label">ID Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="idItem" value="<?php echo $value['idItem']?>" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Nama Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemName" value="<?php echo $value['itemName']?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Deskripsi Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemDescription" value="<?php echo $value['itemDescription']?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Icon Item</label>
                                     <div class="col-lg-8">
                                         <div>
                                             <input type="file" name="itemIcon" required>
                                          </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Link Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemLink" value="<?php echo $value['itemLink']?>" required>
                                        </div>
                                    </div>
                                </div>
                                  <?php }?>
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