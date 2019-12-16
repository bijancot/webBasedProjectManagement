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
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <h5>Pilih User</h5>
                                                <select class="select2-single form-control" name="idUser" required>
                                                    <option>-------- Pilih User --------</option>
                                                        <?php
                                                            $select = $db->prepare("SELECT a.idUser,a.name,c.job FROM mmo_users a join mmo_role c on a.roleId=c.idRole where job='client'");
                                                            $select->execute();
                                                            $tampil = $select->fetchAll();
                                                            foreach($tampil as $value){
                                                        ?>
                                                    <option value="<?php echo $value['idUser']?>"><?php echo $value['name']." - ".$value['job']?></option>
                                                    <?php }?>
                                                </select>
                                        </div>
                                        <h6> Klik disini jika ingin memasukkan user baru</h6>

                                    <!-- <h6>Username</h6>
                                    <label class="field prepend-icon">
                                        <input type="text" name="username" id="firstname" class="gui-input"
                                        placeholder="Username" title="masukkan username di sini">
                                            <span class="field-icon">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                    </label><br/><br/> -->
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

                                        <div class="row">
                                        <h5>Pilih Shift Pengerjaan</h5>
                                        <div class=row>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-success pilihsemua" required><strong>Pilih Semua Atau hapus Semua</strong></button>
                                            </div>
                                        </div>
                                       
                                            <div class="col-md-4">
                                            <h6>Senin</h6>
                                                <?php
                                                
                                                for($e=2;$e<5;$e++){
                                                    echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="senin[]" class="flipswitch-cb" id="se'. $e.'" >
                                                        <label class="flipswitch-label" for="se'. $e.'">
                                                            <div class="flipswitch-inner shift1"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Selasa</h6>
                                            <?php
                                                
                                                for($e=2;$e<5;$e++){
                                                    echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="selasa[]" class="flipswitch-cb" id="sa'. $e.'" value="on">
                                                        <label class="flipswitch-label" for="sa'. $e.'">
                                                            <div class="flipswitch-inner shift1"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Rabu</h6>
                                            <?php
                                                
                                                for($e=2;$e<5;$e++){
                                                    echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="rabu[]" class="flipswitch-cb" id="r'. $e.'" value="on">
                                                        <label class="flipswitch-label" for="r'. $e.'">
                                                            <div class="flipswitch-inner shift1"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-12" style="height:15px;"></div>
                                            <div class="col-md-4">
                                            <h6>Kamis</h6>
                                            <?php
                                                
                                                for($e=2;$e<5;$e++){
                                                    echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="kamis[]" class="flipswitch-cb" id="k'. $e.'" value="on">
                                                        <label class="flipswitch-label" for="k'. $e.'">
                                                            <div class="flipswitch-inner shift1"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Jumat</h6>
                                            <?php
                                                
                                                for($e=2;$e<5;$e++){
                                                    echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="jumat[]" class="flipswitch-cb" id="j'. $e.'" >
                                                        <label class="flipswitch-label" for="j'. $e.'">
                                                            <div class="flipswitch-inner shift1"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Sabtu</h6>
                                                <?php
                                                
                                                for($e=2;$e<5;$e++){
                                                    echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="sabtu[]" class="flipswitch-cb" id="tu'. $e.'" >
                                                        <label class="flipswitch-label" for="tu'. $e.'">
                                                            <div class="flipswitch-inner shift1"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-12" style="height:15px;"></div>
                                            <div class="col-md-4">
                                            <?php
                                                
                                                for($e=2;$e<5;$e++){
                                                    echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="minggu[]" class="flipswitch-cb" id="m'. $e.'" >
                                                        <label class="flipswitch-label" for="m'. $e.'">
                                                            <div class="flipswitch-inner shift1"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5"> 
                                    <h5>Mata Uang</h5>
                                <div class="row section prn">
                                    <div class="col-md-6">
                                    <label class="option">
                                        <input type="radio" name="currency" value="USD" required checked>
                                        <span class="radio"></span>US Dollar ($)
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="option">
                                        <input type="radio" name="currency" value="Rupiah" required>
                                        <span class="radio"></span>Rupiah (IDR)
                                    </label>
                                    
                                    </div><br/><br/><br/>
                                    * pilih mata uang
                                </div><br/>
                                
                                <h5>Nominal</h5>
                                    <label class="field prepend-icon">
                                        <input type="text" name="price" id="firstname" class="gui-input"
                                        placeholder="Nominal Order" title="masukkan biaya order" required>
                                            <span class="field-icon">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                </label><br/><br/><br/><br/>
                                <h5>Order Notes</h5>
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="orderNote" placeholder="Tambahkan catatan order disini jika ada" required></textarea>
                                        <span class="field-icon">
                                          <i class="fa fa-list"></i>
                                        </span>
                                    </label><br/><br/><br/>
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