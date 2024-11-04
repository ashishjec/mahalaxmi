// <?php

// $total_message = 0;
// $query2221  = "SELECT COUNT(`id`) as messagess_no FROM website_queries where  web_que_id = '$website_real_id' and web_que_status = 'Unread'";
// $sql2221=$dbconn->prepare($query2221);
// $sql2221->execute();
// $wlvd2221=$sql2221->fetchAll(PDO::FETCH_OBJ);
// if($sql2221->rowCount() > 0){
//   foreach($wlvd2221 as $row2221)
//   {
//     $total_message = $row2221->messagess_no;
//   }
// }

// ?>



<!-- Start wrapper-->
 <div id="wrapper">
 
<header class="topbar-nav">
 <nav id="header-setting" class="navbar navbar-expand fixed-top" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a style="color:#fff" class="nav-link toggle-menu" href="javascript:void();">
       <i style="color:#fff" class="icon-menu menu-icon"></i>
     </a>
    </li>
     
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
           
          <span class="badge badge-primary"> </span>
          </li>
          
//           <?php
     
//  $select_bookings= "SELECT * FROM `website_queries` WHERE web_que_id = '$website_real_id' and web_que_status = 'Unread' order by id desc limit 5";
//  $sql885=$dbconn->prepare($select_bookings);
//  $sql885->execute();
//  $wlvd885=$sql885->fetchAll(PDO::FETCH_OBJ);
//  foreach($wlvd885 as $rows885);     

// //while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
// //{ 
// if($sql885->rowCount() > 0){
  
//     foreach($wlvd885 as $rows885){
// $field1 = $rows885->id;
// $field2 = $rows885->web_que_name;
// $field3 = $rows885->web_que_email;
// $field4 = $rows885->web_que_mobile;
// $field5 = $rows885->web_que_desc;
// $field6 = $rows885->web_que_time;





 
// ?>    
          
       
          <li class="list-group-item text-center"><a href="index.php?action=All-Enquiries">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/account.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
         
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> <a href="index.php?action=All-Enquiries">Messages</a></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> <a href="#">Account</a></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> <a href="index.php?action=Profile">Profile</a></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="authentication.php?action=Logout">Logout</a> </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->