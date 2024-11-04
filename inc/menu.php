 


 <?php   include('colorSettings.php') ;?>
 

    <div class="page-wrapper" data-scroll-index="0"  <?php   include('colorSettingsMenuPadding.php') ;?>>

    

        <!--// Header Start //-->
        <header class="header fixed-top" id="header">
            <div id="nav-menu-wrap">
                <div class="container">
                    <nav class="navbar navbar-expand-lg p-0">
                        <?php
                        
                        if($browser == 'Desktop'){
                            ?>
                            <a class="navbar-brand" href="index.php">
                            <img src="assets/img/mahalaxmi-logo-min.png" alt="Logo White" class="img-fluid logo-transparent" style="height:95px;width:125px;padding:3px ">
                            <img src="assets/img/mahalaxmi-logo-min.png" alt="Logo White" class="img-fluid logo-normal"  style="height:95px;width:125px;padding:3px">
                        </a>
                            <?php
                        }else{
                            ?>
                            <a class="navbar-brand" href="index.php">
                            <img src="assets/img/mahalaxmi-logo-min.png" alt="Logo White" class="img-fluid logo-transparent"  style="height:65px;width:85px;padding:3px ">
                            <img src="assets/img/mahalaxmi-logo-min.png" alt="Logo White" class="img-fluid logo-normal" style="height:65px;width:85px;padding:3px">
                        </a>
                            <?php
                        }?>
                        
                        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="togler-icon-inner">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                        </button>
                         
                        <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                            <ul class="navbar-nav">
                                 

                                

                                <li class="nav-item dropdown <?php   include('colorStyle.php') ;?>">
                                    <a class="nav-link" href="index.php?page=Company-Profile" id="blogDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <span style="padding-right: 10px; font-family: Poppins; font-size:14px; <?php  include('colorSettings.php?css=0') ;?>">About</span>     <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                                        <a class="dropdown-item" href="index.php?page=Company-Profile">Company Profile</a>
                                        <a class="dropdown-item" href="index.php?page=Team">Team</a>
                                        <a class="dropdown-item" href="index.php?page=ChairmanCorner">Chairman's Message</a>
                                        <!--
                                        <a class="dropdown-item" href="index.php?page=Vision%20and%20Mission">Vision & Mission</a>
                                        
                                        
                                        <a class="dropdown-item" href="index.php?page=Legacy">Legacy</a>
                                    -->
                                    </div>
                                </li>


                                <li class="nav-item  <?php   include('colorStyle.php') ;?>">
                                    <a class="nav-link menu-link" href="index.php?page=Group-Of-Verticals"><span style="padding-right: 10px; font-family: Poppins; font-size:14px; <?php   include('colorSettingsMenuColor.php') ;?>">Group Of Verticals</span>     </a>
                                </li>

                                <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="projectsDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span style="padding-right: 10px; font-family: Poppins; font-size:14px">Sustainability</span>     <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="projectsDropdownMenu">
                                        <a class="dropdown-item" href="index.php?page=CSR">CSR Activities</a>
                                     
                                        <a class="dropdown-item" href="index.php?page=CSRDetail">CSR Detail</a>
                                         
                                    </div>
                                </li>

                            -->
                            <li class="nav-item <?php   include('colorStyle.php') ;?>">
                                    <a class="nav-link menu-link" href="index.php?page=Sustainability"><span style="padding-right: 10px; font-family: Poppins; font-size:14px; <?php   include('colorSettingsMenuColor.php') ;?>">Sustainability</span>     </a>
                                </li> 

                                <li class="nav-item <?php   include('colorStyle.php') ;?>">
                                    <a class="nav-link menu-link" href="index.php?page=Media"><span style="padding-right: 10px; font-family: Poppins; font-size:14px; <?php   include('colorSettingsMenuColor.php') ;?>">Media & Blog</span>     </a>
                                </li> 

                                <li class="nav-item <?php   include('colorStyle.php') ;?>">
                                    <a class="nav-link menu-link" href="index.php?page=Career"><span style="padding-right: 10px; font-family: Poppins; font-size:14px; <?php   include('colorSettingsMenuColor.php') ;?>">Career</span>     </a>
                                </li>
                                
                                <?php 
                                 if($browser == 'Mobile'){
                                     ?>
                                     <li class="nav-item <?php   include('colorStyle.php') ;?>">
                                    <a class="nav-link menu-link" href="index.php?page=Contact"><span style="padding-right: 10px; font-family: Poppins; font-size:14px; <?php   include('colorSettingsMenuColor.php') ;?>">Get in Touch</span>     </a>
                                </li>
                                     <?php
                                 }
                                
                                ?>
 <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="projectsDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span style="padding-right: 10px; font-family: Poppins; font-size:14px">Other</span>     <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="projectsDropdownMenu">
                                        <a class="dropdown-item" href="index.php?page=Media">Media</a>
                                     
                                        <a class="dropdown-item" href="index.php?page=Blog">Blog</a>

                                        <a class="dropdown-item" href="index.php?page=BlogDetail">Blog Detail</a>

                                         <a class="dropdown-item" href="index.php?page=Info&name=Refund ">Informative Pages</a>
                                         
                                    </div>
                                </li>
                                
                              
                                <li class="nav-item search-btn-resp">
                                    <a href="#" class="search-btn-toggle nav-link" data-toggle="modal" data-target="#searchForm">
                                        <i class=" fa fa-search"></i>
                                    </a>
                                </li>
                            -->
                                <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                    <a href="index.php?page=Contact" class="<?php   include('colorGetInTouch.php') ;?>" ><span style="">Get in Touch</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--// Header End  //-->