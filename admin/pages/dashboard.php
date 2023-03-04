<?php require '../api/utils/connection.php'?>
<div class="home-content">
<div class="overview">
   
    <div class="dtitle">
        <i id="title-icon" class="uil uil-tachometer-fast-alt" ></i>
        <span class="text">Dashboard</span>
        
    </div>

    <div>
          <?php include("../api/dashboard.php")?> 
    </div>

    <!-- <?php include("../admin/pages/log-journal.php")?>  -->

    <?php include("../admin/pages/qrcode-notification.php")?> 
</div>

