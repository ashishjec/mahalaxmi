<?php
ob_start();
include('corporate-admin/settings/database.php');
DB::connect();

 
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
, $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
    $browser = 'Mobile';
}
else {
    $browser = 'Desktop';
}

//echo $browser;
 

$page = $_GET['page'];


if ($page == 'Info') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/page.php');
	include('inc/footer.php');
}elseif ($page == 'Company-Profile') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/aboutPage.php');
	include('inc/footer.php');
}elseif ($page == 'Chairman') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/chairmanPage.php');
	include('inc/footer.php');
}elseif ($page == 'ChairmanCorner') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/chairmanCorner.php');
	include('inc/footer.php');
}elseif ($page == 'Thanks') {
	include('inc/header.php');
	include('inc/menu.php');
	
	include('inc/thanks.php');
	include('inc/footer.php');
}elseif ($page == 'Contact') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/contactPage.php');
	include('inc/footer.php');
}elseif ($page == 'Team') {
	include('inc/header.php');
	include('inc/menu.php');
	
	include('inc/teamPage.php');
	include('inc/footer.php');
}elseif ($page == 'Media') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/mediaPage.php');
	include('inc/homeBlogs.php');
	include('inc/footer.php');
}elseif ($page == 'Blog') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/blogPage.php');
	include('inc/footer.php');
}elseif ($page == 'BlogDetail') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/blogDetail.php');
	include('inc/footer.php');
}elseif ($page == 'Career') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/career.php');
	include('inc/footer.php');
}elseif ($page == 'csrBlogs') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/csrBlog.php');
	include('inc/footer.php');
}elseif ($page == 'homeNewsUpdates') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/homeNewsUpdates.php');
	include('inc/footer.php');
}elseif ($page == 'homeActivities') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/homeActivities.php');
	include('inc/footer.php');
}elseif ($page == 'homeLatestNews') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/homeLatestNews.php');
	include('inc/footer.php');
}elseif ($page == 'mediaCoverageBlogs') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/mediaCoverageBlogs.php');
	include('inc/footer.php');
}elseif ($page == 'mediaLatestNews') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/mediaLatestNews.php');
	include('inc/footer.php');
}elseif ($page == 'Group-Of-Verticals') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/businessMain.php');
	include('inc/footer.php');
}elseif ($page == 'verticalsBlogs') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/verticalsBlogs.php');
	include('inc/footer.php');
}elseif ($page == 'Energy') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/energy.php');
	include('inc/footer.php');
}elseif ($page == 'SingleBusiness') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/singleBusiness.php');
	include('inc/footer.php');
}elseif ($page == 'Sustainability') {
	include('inc/header.php');
	include('inc/menu.php');
	
	include('inc/csr.php');
	include('inc/footer.php');
}elseif ($page == 'CSR') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/csrPage.php');
	include('inc/footer.php');
}elseif ($page == 'CSRDetail') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/csrDetail.php');
	include('inc/footer.php');
}elseif ($page == 'Legacy') {
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/legacyPage.php');
	include('inc/footer.php');
}elseif ($page == 'Vision and Mission') {
	include('inc/header.php');
	
	include('inc/menu.php');
	
	include('inc/visionMission.php');
	include('inc/footer.php');
}else{
	include('inc/header.php');
	include('inc/menu.php');
	include('inc/slider.php');
	
	include('inc/homeAbout.php');
	include('inc/homeBusinesses.php');
	include('inc/homeManagingDirector.php');
	include('inc/homeRecentActivities.php');
	include('inc/homeCSR.php');
	include('inc/homeBlogs.php');
	include('inc/groupWebsites.php');
	include('inc/footer.php');
}
?>
 
  
  
  
