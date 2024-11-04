<?php
        if ($_REQUEST['id'] == '') {
  echo " ";
}
  elseif($_REQUEST['id'] != 0) {
  echo '<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert">×</button>
       
      <div class="alert-message">
        <span>Action Performed Successfully!</span>
      </div>
      </div>';
} elseif ($_REQUEST['id'] == 0) {
  echo '<div class="alert alert-danger alert-dismissible" role="alert">
       <button type="button" class="close" data-dismiss="alert">×</button>
       
      <div class="alert-message">
        <span>Action Could Not be Performed!</span>
      </div>
      </div>';
} 
?>