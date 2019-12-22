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
                    <li class="breadcrumb-current-item">Manage Staff</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Manage Staff
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->

                    <div class="row mn">
                        <!-- AllCP Grid -->
                       
                    <div class="col-md-12">
                        <div class="panel panel-visible">
                            <div class="panel-heading">
                                <div class="row nm">
                                    <a href="?mmopilot=additem">
                                    <button type="button" class="btn btn-rounded btn-primary btn-block right" style="width: 200px;">+ Tambah Staff Baru</button>
                                    </a>
                            </div>
                            <div class="panel-body pn">
                                <div class="table-responsive">
                                    <?php
                                    $select = $db->prepare("SELECT * FROM mmo_users a left join mmo_role b on a.roleId=b.idRole where b.job!='client' or b.job is null;");
                                    $select->execute();
                                    $tampil = $select->fetchAll();
                                    ?>
                                    <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th class="va-m">Nama User</th>
                                            <th class="va-m">Email</th>
                                            <th class="va-m">Alamat</th>
                                            <th class="va-m">Whatsapp</th>
                                            <th class="va-m">Role</th>
                                            <th class="va-m">Opsi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($tampil as $value){ ?>
                                        <tr>
                                            <td><?php echo $value['name'];?></td>
                                            <td><?php echo $value['email'];?></td>
                                            <td><?php echo $value['homeAddress'];?></td>
                                            <td><?php echo $value['whatsapp'];?></td>
                                            <td><?php if($value['roleName']==NULL){
                                                    echo "<a href=\"some\"><button type=\"button\" class=\"btn btn-rounded btn-primary btn-block\">Beri staff ini role</button><a/>";
                                                }else{
                                                    echo $value['roleName'];
                                                }?></td>
                                            <td width="15%">
                                                <table>
                                                    <tr>
                                                    <td><button type="button" class="btn btn-rounded btn-info btn-block" title="Detail" data-toggle="modal" data-target="#myModal<?php echo $value['idUser'];?>"><span class="fa fa-eye"></span></button></td>
                                                        <td> <a href="?mmopilot=editusers&id=<?php echo $value['idUser'];  ?>"><button type="button" class="btn btn-rounded btn-alert btn-block" title="Edit"><span class="fa fa-pencil-square-o"></span></button></a></td>
                                                        <td><a href="?mmopilot=delete_users&id=<?php echo $value['idUser'];  ?>"><button type="button" class="btn btn-rounded btn-danger btn-block" title="Hapus"><span class="fa fa-trash-o"></span></button></a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                   $select = $db->prepare("SELECT * FROM mmo_users a left join mmo_role b on a.roleId=b.idRole where b.job!='client' or b.job is null;");
                                   $select->execute();
                                   $tampil = $select->fetchAll();
                                    ?>
                                    <?php foreach($tampil as $value){ ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal<?php echo $value['idUser'];?>" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">

                                        <div class="allcp-form">
                                        <div class="greeting-field">
                                            Manage Staff
                                        </div>
                                        <div class="panel">  
                                            
                                        <div class="panel-body">

                                      

                                        </div> 
                                        </div> 
                                        </div> 
                                        </div>

                                
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                    <?php }?>
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
