<?php require '../api/utils/connection.php'?>
<div class="overview">
   
    <div class="title">
        <i id="title-icon" class="uil uil-tachometer-fast-alt" ></i>
        <span class="text">Dashboard</span>
        
    </div>

    <div>
          <?php include("../api/dashboard.php")?> 
    </div>
    <div class="title">
    <i class="fas fa-user-clock"></i>
        <span class="text">Log Journal</span>
        
    </div>
    <?php include("../admin/pages/log-journal.php")?> 
</div>

