   <!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">


            <!-- Column Center -->
            <div class="chute chute-center">

                <div class="mw1000 center-block">

                    <!-- Spec Form -->
                    <div class="allcp-form">
                        <div class="panel">
                        <div class="panel-heading">
                                <div class="row nm">
                                    <div class="col-md-4"> 
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">  
                                    <div class="panel-title hidden-xs">
                                    ID Role : 
                                    <?php
                                        $select = $db->prepare("SELECT count(idRole) FROM mmo_role");
                                                    $select->execute();
                                                    $tampil = $select->fetchAll();
                                          foreach($tampil as $value){
                                            $ha = $value[0]+1;
                                            if($ha>=0 && $ha<=9){
                                                echo "ITEM000".$ha;
                                            }else if($ha>=9 && $ha<=99){
                                                echo "ITEM00".$ha;
                                            }else if($ha>=99 && $ha<=999){
                                                echo "ITEM0".$ha;
                                            }else if($ha>=999 && $ha<=9999){
                                                echo "ITEM".$ha;
                                            }
                                        }
                                    ?>
                                    </div>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="panel-body">
                            

                            <form class="form-horizontal" action="?mmopilot=input_item" method="POST" enctype="multipart/form-data">
                                
                                    <?php
                                        $select = $db->prepare("SELECT count(idRole) FROM mmo_role");
                                                  $select->execute();
                                                  $tampil = $select->fetchAll();
                                          foreach($tampil as $value){
                                            $ha = $value[0]+1;
                                            if($ha>=0 && $ha<=9){
                                                echo "<input type =\"hidden\" value=\"ITEM000".$ha."\" name=\"idItem\">";
                                            }else if($ha>=9 && $ha<=99){
                                                echo "<input type =\"hidden\" value=\"ITEM00".$ha."\" name=\"idItem\">";
                                            }else if($ha>=99 && $ha<=999){
                                                echo "<input type =\"hidden\" value=\"ITEM0".$ha."\" name=\"idItem\">";
                                            }else if($ha>=999 && $ha<=9999){
                                                echo "<input type =\"hidden\" value=\"ITEM".$ha."\" name=\"idItem\">";
                                            }
                                        }
                                    ?>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Nama Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemName">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Deskripsi Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemDescription">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Icon Item</label>
                                     <div class="col-lg-8">
                                         <div>
                                             <input type="file" name="itemIcon">
                                          </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label" for="textArea3">Link Item</label>
                                    <div class="col-lg-8">
                                        <div>
                                            <input type="text" id="inputStandard" class="form-control" name="itemLink">
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