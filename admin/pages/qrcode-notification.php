

<div class="home-content">

<div class="main-box">
  
  <div class="recent-sales box">
<div class="title"><i class="fas fa-qrcode"></i><span class="text">&nbsp;Scanned QR Code</span></div>


<table id="notif" class="table table-bordered " style="width:100%">
    <thead>
        <tr>
            <th>QR Code</th>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            
        </tr>
    </thead>
    <tbody>
        <?php include("../api/notification-list.php")?> 
    </tbody>
</table>
</div>
    </div>
   </div>
<script>
    $(document).ready(function() {
    var table = $('#notif').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>