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
    <li class="breadcrumb-current-item">Job Progress</li>
</ol>
</div>
</header>
<!-- /Topbar -->

<div class="greeting-field">
Job Progress
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
            <div class="panel-heading">
                <div class="row nm">
                    <a href="?mmopilot=progressreport">
                    <button type="button" class="btn btn-rounded btn-primary btn-block right" style="width: 200px;">+ Progress Report</button>
                    </a>
            </div>
            </div>
            <div class="panel-body pn>
                <div class="table-responsive">
                    <?php
                    $select = $db->prepare("SELECT mmo_job_progress.idProgress,mmo_job.jobDescription,mmo_users.name,mmo_job_progress.itemArchived,mmo_job_progress.progressDate,mmo_job_progress.progressDesc 
                    FROM mmo_job JOIN mmo_job_progress ON mmo_job.idJob=mmo_job_progress.idJob JOIN mmo_users 
                    ON mmo_users.idUser=mmo_job_progress.idOperator");
                    $select->execute();
                    $tampil = $select->fetchAll();
                    ?>
                    <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th class="va-m">Deskripsi Job</th>
                            <th class="va-m">Operator</th>
                            <th class="va-m">Item Archived</th>
                            <th class="va-m">Progress Date</th>
                            <th class="va-m">Deskripsi Progress</th>
                            <th class="va-m">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($tampil as $value){ ?>
                        <tr>
                            <td width="10%"><?php echo $value['jobDescription']; ?></td>
                            <td width="20%"><?php echo $value['name']; ?></td>
                            <td width="10%"><?php echo $value['itemArchived']; ?></td>
                            <td width="10%"><?php echo $value['progressDate']; ?></td>
                            <td width="20%"><?php echo $value['progressDesc']; ?></td>
                            <td width="12%">
                                <table>
                                    <tr>
                                        <td><button type="button" class="btn btn-rounded btn-info btn-block" title="Detail" data-toggle="modal" data-target="#myModalo"><span class="fa fa-eye"></span></button></td>
                                        <td> <a href="?mmopilot=editjob&id=<?php echo $value['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-alert btn-block" title="Edit"><span class="fa fa-pencil-square-o"></span></button></a></td>
                                        <td> <a href="?mmopilot=delete_progressreport&id=<?php echo $value['idProgress'];  ?>"><button type="button" class="btn btn-rounded btn-danger btn-block" title="Hapus"><span class="fa fa-trash-o"></span></button></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                           <?php } ?>
                        </tbody>
                    </table>
                     <?php
                     
                    $select = $db->prepare("SELECT * FROM mmo_job");
                    $select->execute();
                    $tampil = $select->fetchAll();
                    ?>
                    <?php foreach($tampil as $value){ ?>
                     <!-- Modal -->
                  <!-- Modal HTML -->
                  <div class="modal fade" id="myModal<?php echo $value['idJob'];?>" role="dialog">
                      <div class="modal-dialog modal-lg contact-modal">
                          <div class="modal-content">
                              <form action="/examples/actions/confirmation.php" method="post">
                                  <div class="modal-header">              
                                      <h4 class="modal-title">Sub Job</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                      <!-- Content -->
                          <section id="content" class="table-layout animated fadeIn">

                            <!-- Column Center -->
                          <!--   <div class="chute chute-center"> -->

                                <!-- AllCP Info -->

                                   <!--  <div class="row mn "> -->
                                        <!-- AllCP Grid -->
       
                          <div class="col-md-12 allcp-form">
                              <!-- <div class="panel panel-visible">
                                  <div class="panel-body pn"> -->
                                      <div class="table-responsive">
                                        <?php
                                          $ids = $value['idJob'];
                                          $select1 = $db->prepare("SELECT * FROM mmo_job where jobParent='$ids'");
                                          $select1->execute();
                                          $tampil1 = $select1->fetchAll();
                                          ?>
                                         <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th class="va-m">ID Job</th>
                            <th class="va-m">Deskripsi Job</th>
                            <th class="va-m">Priority</th>
                            <th class="va-m">Tanggal Dibuat</th>
                            <th class="va-m">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($tampil1 as $value1){ ?> 
                        <tr>
                            <td width="10%"><?php echo $value1['idJob']; ?></td>
                            <td><?php echo $value1['jobDescription']; ?></td>
                            <td width="20%"><?php //echo $value['priority']; ?>
                            <span class="rating block">
                              <input class="rating-input" id="r5" type="radio" name="priority" value="5" <?php if($value1['priority']==5){echo "checked";}?> disabled>
                              <label class="rating-star" for="r5">
                                  <i class="fa fa-star"></i>
                              </label>
                              <input class="rating-input" id="r4" type="radio" name="priority" value="4" <?php if($value1['priority']==4){echo "checked";}?> disabled>
                              <label class="rating-star" for="r4">
                                  <i class="fa fa-star"></i>
                              </label>
                              <input class="rating-input" id="r3" type="radio" name="priority" value="3" <?php if($value1['priority']==3){echo "checked";}?> disabled>
                              <label class="rating-star" for="r3">
                                  <i class="fa fa-star"></i>
                              </label>
                              <input class="rating-input" id="r2" type="radio" name="priority" value="2" <?php if($value1['priority']==2){echo "checked";}?> disabled>
                              <label class="rating-star" for="r2">
                                  <i class="fa fa-star"></i>
                              </label>
                              <input class="rating-input" id="r1" type="radio" name="priority" value="1" <?php if($value1['priority']==1){echo "checked";}?> disabled>
                              <label class="rating-star" for="r1">
                                  <i class="fa fa-star"></i>
                              </label>
                            </span>
                            
                            </td>
                            <td width="15%"><?php echo $value1['createdDate'];?></td>
                            <td width="22%">
                                <table>
                                    <tr>
                                        <td><button type="button" class="btn btn-rounded btn-info btn-block" title="Detail" data-toggle="modal" data-target="#myModal<?php echo $value['idJob'];?>"><span class="fa fa-eye"></span></button></td>
                                        <td> <a href="?mmopilot=editsubjob&id=<?php echo $value1['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-alert btn-block" title="Edit"><span class="fa fa-pencil-square-o"></span></button></a></td>
                                        <td> <a href="?mmopilot=delete_subjob&id=<?php echo $value1['idJob'];  ?>"><button type="button" class="btn btn-rounded btn-danger btn-block" title="Hapus"><span class="fa fa-trash-o"></span></button></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                           <?php } ?>
                                                            
                     <!-- Modal -->

                    
                        </tbody>
                    </table>

                                      </div>
                                <!--   </div>
                              </div> -->
                          </div>

                              <!-- /AllCP Grid -->

                  <!--     </div>


                  </div> -->
                  <!-- /Column Center -->
                  
              </section>
              <!-- /Content -->


                      </div>
                      <div class="modal-footer">
                             <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close">
                          </div>
                    </form>
                </div>
            </div>
        </div>

                    <?php }?>
                                                      <!-- Modal HTML -->
                  <div class="modal fade" id="myModalo" role="dialog">
                      <div class="modal-dialog modal-lg contact-modal">
                          <div class="modal-content">
                              <form action="/examples/actions/confirmation.php" method="post">
                                  <div class="modal-header">              
                                      <h4 class="modal-title">Detail Job</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                      <!-- Content -->
                          <section id="content" class="table-layout animated fadeIn">

                            <!-- Column Center -->
                          <!--   <div class="chute chute-center"> -->

                                <!-- AllCP Info -->

                                   <!--  <div class="row mn "> -->
                                        <!-- AllCP Grid -->
       
                          <div class="col-md-12 allcp-form">
                             
                          </div>
                                <!--   </div>
                              </div> -->
                          </div>
                  
              </section>
              <!-- /Content -->


                      </div>
                      <div class="modal-footer">
                             <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close">
                          </div>
                    </form>
                </div>
            </div>
        </div>
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