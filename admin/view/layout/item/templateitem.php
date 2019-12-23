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
                    <li class="breadcrumb-current-item">Manage Item User</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Template Job/Item
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->

                    <div class="row mn ">
                        <!-- AllCP Grid -->
                       
                    <div class="col-md-12 allcp-form">
                        <div class="panel panel-visible">
                          <div class="alert alert-success" role="alert">
                          Cari Item Job pada <i>search bar</i> untuk mencari item job terkait. Pilih tombol check untuk menggunakan template.
                        </div>
                          <!--   <div class="panel-heading">
                                <div class="row nm">
                                    <a href="?mmopilot=addjob">
                                    <button type="button" class="btn btn-rounded btn-primary btn-block right" style="width: 200px;">+ Tambah Job Baru</button>
                                    </a>
                            </div>
                            </div> -->
                            <div class="panel-body pn>
                                <div class="table-responsive">
                                    <?php
                                    $select = $db->prepare("SELECT * FROM mmo_job where jobParent is null");
                                    $select->execute();
                                    $tampil = $select->fetchAll();
                                    ?>
                                    <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th class="va-m">ID</th>
                                            <th class="va-m">Deskripsi Job/Item</th>
                                            <th class="va-m">Priority</th>
                                            <th class="va-m">Tanggal Dibuat</th>
                                            <th class="va-m">Item</th>
                                            <th class="va-m">Use Template</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($tampil as $value){ ?>
                                        <tr>
                                            <td width="10%"><?php echo $value['idJob']; ?></td>
                                            <td><?php echo $value['jobDescription']; ?></td>
                                            <td width="20%"><?php //echo $value['priority']; ?>
                                            <span class="rating block">
                                              <input class="rating-input" id="r5" type="radio" name="priority" value="5" <?php if($value['priority']==5){echo "checked";}?> disabled>
                                              <label class="rating-star" for="r5">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r4" type="radio" name="priority" value="4" <?php if($value['priority']==4){echo "checked";}?> disabled>
                                              <label class="rating-star" for="r4">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r3" type="radio" name="priority" value="3" <?php if($value['priority']==3){echo "checked";}?> disabled>
                                              <label class="rating-star" for="r3">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r2" type="radio" name="priority" value="2" <?php if($value['priority']==2){echo "checked";}?> disabled>
                                              <label class="rating-star" for="r2">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                              <input class="rating-input" id="r1" type="radio" name="priority" value="1" <?php if($value['priority']==1){echo "checked";}?> disabled>
                                              <label class="rating-star" for="r1">
                                                  <i class="fa fa-star"></i>
                                              </label>
                                            </span>
                                            
                                            </td>
                                            <td width="15%"><?php echo $value['createdDate'];?></td>
                                            <?php
                                            $idItem  = $value['idItem'];
                                            $select1 = $db->prepare("SELECT * FROM mmo_item where idItem='$idItem'");
                                            $select1->execute();
                                            $tampil1 = $select1->fetchAll();
                                            foreach($tampil1 as $value1){
                                            ?>
                                            <td width="25%"><?php echo $value1['itemName'];?></td>
                                          <?php }?>
                                            <td width="10%">
                                                <table>
                                                    <tr>
                                                      <td><a href="?mmopilot=detail_job&id=<?php echo $value['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-info btn-block" title="Detail"><span class="fa fa-eye"></span></button></button></a></td>
                                                       <td><a href="?mmopilot=addtemplate&id=<?php echo $value['idJob'];  ?>" title="Use Template"><button type="button" class="btn btn-rounded btn-success btn-block"><span class="fa fa-check"></span></button></a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
            </form>
        </div>
    </div>
</div>
       

                                </div>
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
