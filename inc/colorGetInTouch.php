<?php 
    if ($page == 'Company-Profile') {
        echo "default-nav-btn"; 
    }elseif ($page == 'Career') {
        echo "default-nav-btn"; 
    }elseif ($page == '') {
        echo "default-nav-btn"; 
    }elseif ($page == 'Sustainability') {
        echo "default-nav-btn"; 
    }elseif ($page == 'Energy') {
        echo "default-nav-btn"; 
    }
    elseif ($page == 'Group-Of-Verticals') {
        echo "default-nav-btn"; 
    }elseif ($page == 'SingleBusiness') {
         echo "default-nav-btn"; 
        
    }else{ 
        echo "primary-outline-btn"; 
    } 
        ?>