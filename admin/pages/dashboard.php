<?php require '../api/utils/connection.php'?>
<div class="home-content">
<div class="overview">
   
    <div class="dtitle">
        <i class="fas fa-tachometer-alt" style="font-size: 25px; color: #0d62ff; "></i>
        
        <span class="text">Dashboard</span>
        
    </div>

    <div>
          <?php include("../api/dashboard.php")?> 
    </div>

    <!-- <?php include("../admin/pages/log-journal.php")?>  -->

    <?php include("../admin/pages/qrcode-notification.php")?> 
</div>

