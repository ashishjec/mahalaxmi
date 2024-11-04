<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" style="background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 55%, rgba(0,212,255,1) 100%);">
     <div class="brand-logo">
      <a href="index.php?action=Welcome">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text" style="color:#fff">Webotapp Master</h5>
     </a>
   </div>
   <div style="color:#fff" class="user-details">
    <div style="color:#fff" class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div style="color:#fff" class="avatar"><img class="mr-3 side-user-img" src="assets/images/account.png" alt="user avatar"></div>
       <div style="color:#fff" class="media-body">
       <h6 style="color:#fff"   ><?php echo $master_user_name ;?></h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a style="color:#fff" href="index.php?action=Profile"><i class="icon-user"></i>  My Profile</a></li>
            <li><a style="color:#fff" href="index.php?action=Password"><i class="icon-settings"></i> Setting</a></li>
      <li><a style="color:#fff" href="authentication.php?action=Logout"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header" style="color:#fff">MAIN NAVIGATION</li>

      <li>
        <a style="color:#fff"  href="index.php?action=Welcome" class="waves-effect">
          <i style="color:#fff" class="zmdi zmdi-dot-circle-alt"></i> <span style="color:#fff" >Dashboard</span></i>
        </a>
      </li>

      <?php  

      if ($master_user_role != '') {
        $select_sub_category= "SELECT * FROM `sidebar_category` where status = 'Active' and sidebar_category_type IN 
        ('$master_user_role' , 'Global'   )";
      } else {
        $select_sub_category= "SELECT * FROM `sidebar_category` where status = 'Active' and sidebar_category_type='Global' ";

      }

      
     $sql998=$dbconn->prepare($select_sub_category);
     $sql998->execute();
     $wlvd998=$sql998->fetchAll(PDO::FETCH_OBJ);
     if($sql998->rowCount() > 0){
      foreach($wlvd998 as $rows998){
     $sidebar_category_name = $rows998->sidebar_category_name;
     $sidebar_category_icon = $rows998->sidebar_category_icon;
     ?>
      
      <li>
        <a style="color:#fff" href="javaScript:void();" class="waves-effect">
          <i style="color:#fff" class="zmdi zmdi-dot-circle-alt"></i> <span style="color:#fff"><?php echo $sidebar_category_name ;?></span><i style="color:#fff" class="fa fa-angle-left pull-right"></i>
        </a>
              <ul style="color:#fff" class="sidebar-submenu">
                 <?php  
                        $select_menu= "SELECT * FROM `sidebar_menu` where status = 'Active' and sidebar_menu_master = '$sidebar_category_name' and  sidebar_menu_type IN ('$master_user_role', 'Global')";
                       $sql997=$dbconn->prepare($select_menu);
                       $sql997->execute();
                       $wlvd997=$sql997->fetchAll(PDO::FETCH_OBJ);
                       if($sql997->rowCount() > 0){
                        foreach($wlvd997 as $rows997){
                       $sidebar_menu_name = $rows997->sidebar_menu_name;
                       
                       ?>
                <li><a style="color:#fff" href="index.php?action=<?php echo $sidebar_menu_name ;?>"><i class="zmdi zmdi-dot-circle-alt"></i> <?php echo $sidebar_menu_name ;?></a></li>
                <?php }} ?>
              </ul>
      </li>

    <?php }} ?>


    </ul>
   
   </div>