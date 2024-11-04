  <div class="col-lg-4" style="padding-top: 10px">
            <ul class="pagination pagination-separate pagination-outline-primary">

        <li><a href="?<?php echo $action_name;?>&pageno=1">      First       </a>   |   </li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        | <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?$action_name&pageno=".($pageno - 1); } ?>">    Prev    </a>   |   
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
         | <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?$action_name&pageno=".($pageno + 1); } ?>">    Next    </a>   |   
        </li>
        <li>| <a href="?<?php echo $action_name;?>&pageno=<?php echo $total_pages; ?>">    Last    </a></li>
            </ul>  
      </div>