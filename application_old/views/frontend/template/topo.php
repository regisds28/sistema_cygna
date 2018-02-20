<body class="fixed-left">
        <div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <div class="text-center logo">
                        <a href="#" class="logo"><img src="<?php echo base_url('assets/frontend/images/logo_topo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="pull-left menu-toggle">
                    <i class="fa fa-bars"></i>
                </div>
                <ul class="nav navbar-nav top-right-nav hidden-xs">
                    <li>
                        <span id="para2"></span>
                        <span id="para3"></span>
                        <span id="para1"></span>
                    </li>
                    <li class="dropdown profile-link hidden-xs">
                        <div class="clearfix">
                            <div class="usuario">
                                <span>
                                   Olá, <?php echo $this->session->userdata('userlogado')->nome_profissional; ?>
                                </span> 
                                <span>
                                    <a href="<?php echo base_url('usuarios/logout') ?>"> | Sair</a>
                                </span> 
                            </div>
                        </div>                        
                    </li>
                </ul>
            </div>    