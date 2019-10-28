   <!-- Main Wrapper -->
    <section id="content_wrapper">
    <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage order > Add New Order</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Add New Order
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

                            <form class="form-horizontal" action="?mmopilot=input_order" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <h5>Pilih User</h5>
                                                <select class="select2-single form-control" name="idUser">
                                                    <option>-------- Pilih User --------</option>
                                                        <?php
                                                            $select = $db->prepare("SELECT * FROM mmo_users");
                                                            $select->execute();
                                                            $tampil = $select->fetchAll();
                                                            foreach($tampil as $value){
                                                        ?>
                                                    <option value="<?php echo $value['idItem']?>"><?php echo $value['itemName']?></option>
                                                    <?php }?>
                                                </select>
                                        </div>

                                    <!-- <h6>Username</h6>
                                    <label class="field prepend-icon">
                                        <input type="text" name="username" id="firstname" class="gui-input"
                                        placeholder="Username" title="masukkan username di sini">
                                            <span class="field-icon">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                    </label><br/><br/> -->
                                    
                                    <h5>Order Notes</h5>
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="orderNote" placeholder="Tambahkan catatan order disini jika ada"></textarea>
                                        <span class="field-icon">
                                          <i class="fa fa-list"></i>
                                        </span>
                                    </label><br/><br/><br/>
<!--                
                                    <h6>Password</h6>
                                    <label class="field prepend-icon">
                                        <input type="text" name="password" id="firstname" class="gui-input"
                                        placeholder="Password" title="masukkan password order">
                                            <span class="field-icon">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                    </label><br/><br/>

                                    <label class="field prepend-icon">
                                        <input type="text" name="konpassword" id="firstname" class="gui-input"
                                        placeholder="Konfirmasi Password" title="Konfirmasi Password order">
                                            <span class="field-icon">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                    </label><br/><br/> -->
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5"> 
                                    <h5>Mata Uang</h5>
                                <div class="row section prn">
                                    <div class="col-md-6">
                                    <label class="option">
                                        <input type="radio" name="currency" value="USD">
                                        <span class="radio"></span>US Dollar ($)
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="option">
                                        <input type="radio" name="currency" value="Rupiah">
                                        <span class="radio"></span>Rupiah (IDR)
                                    </label>
                                    
                                    </div><br/><br/><br/>
                                    * pilih mata uang
                                </div>
                                
                                <h5>Nominal</h5>
                                    <label class="field prepend-icon">
                                        <input type="text" name="price" id="firstname" class="gui-input"
                                        placeholder="Nominal Order" title="masukkan biaya order">
                                            <span class="field-icon">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                </label><br/><br/><br/><br/><br/>

                                <button type="submit" class="btn btn-block btn-success" name="submit"><strong>Simpan Data</strong></button>
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