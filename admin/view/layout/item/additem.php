
   <!-- Main Wrapper -->
    <section id="content_wrapper">
                  <!-- Topbar -->
                  <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage Item > Add New Item</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Add New Item
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
                            
                            <form class="form-horizontal" action="?mmopilot=input_item" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
                                                <h5>Nama Item</h5>
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="itemName" id="firstname" class="gui-input"
                                                            placeholder="Nama Item" title="masukkan nama item di sini">
                                                        <span class="field-icon">
                                                            <i class="fa fa-slack"></i>
                                                        </span>
                                                    </label><br/><br/>
                                                    
                                                    <h5>Deskripsi Item</h5>
                                                    <label class="field prepend-icon">
                                                    <textarea class="gui-textarea" id="comment" name="roleDesc" placeholder="masukkan deskripsi item di sini"></textarea>
                                                    <span class="field-icon" title="masukkan deskripsi item di sini">
                                                        <i class="fa fa-list"></i>
                                                    </span>
                                                    </label><br/><br/>

                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5">
                                                <div class="section">
                                                <h5>Link Item</h5>
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="itemLink" class="gui-input"
                                                            placeholder="Nama Item" title="masukkan link docs/knowledge base item tersebut ()">
                                                        <span class="field-icon">
                                                            <i class="fa fa-link"></i>
                                                        </span>
                                                    </label><br/><br/>
                                                    <h5>Item Icon</h5>
                                                    <label class="field prepend-icon">
                                                        <input type="file" name="itemIcon" class="gui-input"
                                                            placeholder="Nama Item" title="Upload Icon untuk Item">
                                                        <span class="field-icon">
                                                            <i class="fa fa-upload"></i>
                                                        </span>
                                                    </label><br/><br/><br/><br/><br/>
                                                    <button type="submit" class="btn btn-block btn-success"><strong>Simpan Data</strong></button>
                                                </div>
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