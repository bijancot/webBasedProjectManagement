   <!-- Main Wrapper -->
   <section id="content_wrapper">
    <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage order > Edit Order</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Edit Order
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">
            <!-- Column Center -->
            <div class="chute chute-center">
                <div class="mw1000 center-block">

                            <div class="panel-body">
                    <!-- Spec Form -->
                    <div class="allcp-form">
                        <div class="panel">
                            <?php $idOrder = $_GET['id']?>
                            <form class="form-horizontal" action="?mmopilot=edit_order" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $_GET['id']?>" name="id">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <h5>Pilih User</h5>
                                                <select class="select2-single form-control" name="idUser" required>
                                                    <option>-------- Pilih User --------</option>
                                                        <?php
                                                            $select = $db->prepare("SELECT a.idUser,a.name FROM mmo_users a join mmo_order b on a.idUser=b.idClient where b.idOrder=$idOrder group by a.idUser");
                                                            $select->execute();
                                                            $tampil = $select->fetchAll();
                                                            foreach($tampil as $value){
                                                        ?>
                                                    <option value="<?php echo $value['idUser']?>" selected><?php echo $value['name']." - "//.$value['job']?></option>
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

                                                $select = $db->prepare("SELECT senin FROM mmo_operator_shift where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                $a=1;
                                                foreach($tampil as $value){
                                                    if($value['senin']=="off"){
                                                            echo '<div class="mt20">
                                                        <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                            <input type="checkbox" name="senin[]" class="flipswitch-cb" id="se'. $e.'" >
                                                            <label class="flipswitch-label" for="se'. $e.'">
                                                                <div class="flipswitch-inner shift'.$a.'"></div>
                                                                <div class="flipswitch-switch"></div>
                                                            </label>
                                                        </div>
                                                    </div>';
                                                    }else{
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="senin[]" class="flipswitch-cb" id="se'. $e.'" checked>
                                                        <label class="flipswitch-label" for="se'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }
                                                $e=$e+1;
                                                $a=$a+1;
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Selasa</h6>
                                            <?php

                                                $select = $db->prepare("SELECT selasa FROM mmo_operator_shift where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                $a=1;
                                                foreach($tampil as $value){
                                                    if($value['senin']=="off"){
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="selasa[]" class="flipswitch-cb" id="sa'. $e.'" value="on">
                                                        <label class="flipswitch-label" for="sa'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }else{
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="selasa[]" class="flipswitch-cb" id="sa'. $e.'" value="on" checked>
                                                        <label class="flipswitch-label" for="sa'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }
                                                    $e=$e+1;
                                                    $a=$a+1;
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Rabu</h6>
                                            <?php
                                                $select = $db->prepare("SELECT rabu FROM mmo_operator_shift where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                $a=1;
                                                foreach($tampil as $value){
                                                    if($value['rabu']=="off"){
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="rabu[]" class="flipswitch-cb" id="r'. $e.'" value="on">
                                                        <label class="flipswitch-label" for="r'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }else{
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="rabu[]" class="flipswitch-cb" id="r'. $e.'" value="on" checked>
                                                        <label class="flipswitch-label" for="r'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }
                                                    $e=$e+1;
                                                    $a=$a+1;
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-12" style="height:15px;"></div>
                                            <div class="col-md-4">
                                            <h6>Kamis</h6>
                                            <?php
                                                $select = $db->prepare("SELECT kamis FROM mmo_operator_shift where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                $a=1;
                                                foreach($tampil as $value){
                                                    if($value['kamis']=="off"){
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        <input type="checkbox" name="kamis[]" class="flipswitch-cb" id="k'. $e.'" value="on">
                                                        <label class="flipswitch-label" for="k'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }else{
                                                        echo '<div class="mt20">
                                                        <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                            <input type="checkbox" name="kamis[]" class="flipswitch-cb" id="k'. $e.'" value="on" checked>
                                                            <label class="flipswitch-label" for="k'. $e.'">
                                                                <div class="flipswitch-inner shift'.$a.'"></div>
                                                                <div class="flipswitch-switch"></div>
                                                            </label>
                                                        </div>
                                                    </div>';
                                                    }
                                                    $e=$e+1;
                                                    $a=$a+1;
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                            <h6>Jumat</h6>
                                            <?php
                                                
                                                $select = $db->prepare("SELECT jumat FROM mmo_operator_shift where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                $a=1;
                                                foreach($tampil as $value){
                                                    if($value['jumat']=="off"){
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="jumat[]" class="flipswitch-cb" id="j'. $e.'" >
                                                        <label class="flipswitch-label" for="j'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }else{
                                                        echo '<div class="mt20">
                                                        <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                        
                                                            <input type="checkbox" name="jumat[]" class="flipswitch-cb" id="j'. $e.'" checked>
                                                            <label class="flipswitch-label" for="j'. $e.'">
                                                                <div class="flipswitch-inner shift'.$a.'"></div>
                                                                <div class="flipswitch-switch"></div>
                                                            </label>
                                                        </div>
                                                    </div>';
                                                    }
                                                    $e=$e+1;
                                                    $a=$a+1;
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-4">
                                                <h6>Sabtu</h6>
                                                <?php
                                                $select = $db->prepare("SELECT sabtu FROM mmo_operator_shift where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                $a=1;
                                                foreach($tampil as $value){
                                                    if($value['sabtu']=="off"){
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="sabtu[]" class="flipswitch-cb" id="tu'. $e.'" >
                                                        <label class="flipswitch-label" for="tu'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }else{
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="sabtu[]" class="flipswitch-cb" id="tu'. $e.'" checked>
                                                        <label class="flipswitch-label" for="tu'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }
                                                    $e=$e+1;
                                                    $a=$a+1;
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-12" style="height:15px;"></div>
                                            <div class="col-md-4">
                                            <h6>Minggu</h6>
                                            <?php
                                                $select = $db->prepare("SELECT minggu FROM mmo_operator_shift where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                $a=1;
                                                foreach($tampil as $value){
                                                    if($value['minggu']=="off"){
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="minggu[]" class="flipswitch-cb" id="m'. $e.'" >
                                                        <label class="flipswitch-label" for="m'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }else{
                                                        echo '<div class="mt20">
                                                    <div class="flipswitch switch-info-light switch-inline-table switch-md">
                                                    
                                                        <input type="checkbox" name="minggu[]" class="flipswitch-cb" id="m'. $e.'" checked>
                                                        <label class="flipswitch-label" for="m'. $e.'">
                                                            <div class="flipswitch-inner shift'.$a.'"></div>
                                                            <div class="flipswitch-switch"></div>
                                                        </label>
                                                    </div>
                                                </div>';
                                                    }
                                                    $e=$e+1;
                                                    $a=$a+1;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5"> 
                                    <h5>Mata Uang</h5>
                                <div class="row section prn">
                                    <div class="col-md-6">
                                    <?php
                                                $select = $db->prepare("SELECT * from mmo_order where idOrder=$idOrder");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                $e=2;
                                                foreach($tampil as $value){
                                    ?>
                                    <label class="option">
                                        <input type="radio" name="currency" value="USD" required <?php if($value['currency']=="USD"){echo "checked";}?>>
                                        <span class="radio"></span>US Dollar ($)
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="option">
                                        <input type="radio" name="currency" value="Rupiah" required <?php if($value['currency']=="Rupiah"){echo "checked";}?>>
                                        <span class="radio"></span>Rupiah (IDR)
                                    </label>
                                    
                                    </div><br/><br/><br/>
                                    * pilih mata uang
                                </div><br/>
                                
                                <h5>Nominal</h5>
                                    <label class="field prepend-icon">
                                        <input type="text" name="price" id="firstname" class="gui-input"
                                        placeholder="Nominal Order" title="masukkan biaya order" required value="<?php echo $value['price']?>">
                                            <span class="field-icon">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                </label><br/><br/><br/><br/>
                                <h5>Order Notes</h5>
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="orderNote" placeholder="Tambahkan catatan order disini jika ada" required><?php echo $value['orderNote']?></textarea>
                                        <span class="field-icon">
                                          <i class="fa fa-list"></i>
                                        </span>
                                    </label><br/><br/><br/>
                                        <?php };?>
                                <button type="submit" class="btn btn-block btn-success" name="submit"><strong>Update Data</strong></button>
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