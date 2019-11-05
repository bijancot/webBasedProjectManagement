

    <!-- Sidebar  -->
    <aside id="sidebar_left" class="nano affix">

        <!-- Sidebar Left Wrapper  -->
        <div class="sidebar-left-content nano-content">

            <!-- Sidebar Header -->
            <header class="sidebar-header">

                <!-- Sidebar - Logo -->
                <div class="sidebar-widget logo-widget">
                    <div class="media">
                        <a class="logo-image" href="index.html">
                            <img src="view/assets/img/logo.png" alt="" class="img-responsive">
                        </a>

                        <div class="logo-slogan">
                            <div>MMO<span class="text-info">Pilot</span></div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- /Sidebar Header -->

            <!-- Sidebar Menu  -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt30">Navigation</li>
                <li class="active">
                    <a href="?mmopilot">
                       <!--  <span class="caret"></span> -->
                        <span class="sidebar-title">Dashboard</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                </li>
                <!--------------MENU--------------->
                <?php
		
                $query = $db->prepare("SELECT a.idRole,b.idMenu,c.menuParent,c.menuName,c.menuLink from mmo_role a join tr_role_menu b on a.idRole=b.idRole join mmo_menu c on b.idMenu=c.idMenu where a.idRole='$login_role'");
                $query->execute();
                $tampil = $query->fetchAll();
		
                foreach($tampil as $value){
                    if($value['menuParent']==NULL){
                        echo "<li>
                            <a class=\"menu-open\" href=\"#\">
                                <span class=\"caret\"></span>
                                <span class=\"sidebar-title\">".$value['menuName']."</span>
                                <span class=\"sb-menu-icon fa fa-home\"></span>
                            </a>
                            <ul class=\"nav sub-nav\">";
                            foreach($tampil as $hoho){
                                if($value['idMenu']==$hoho['menuParent']){
                                    echo "<li class=\"active\">
                                    <a href=\"".$hoho['menuLink']."\">
                                        ".$hoho['menuName']."
                                    </a>
                                </li>";
                                }else{
                                    continue;
                                }
                            }
                            echo"</ul></li>";
                    }elseif($value['menuParent']!=NULL){
                        continue;
                    }
                   
                };
                ?>
            <!-- /Sidebar Menu  -->

        </div>
        <!-- /Sidebar Left Wrapper  -->

    </aside>
    <!-- /Sidebar -->
