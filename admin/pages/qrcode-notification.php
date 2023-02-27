


<div class="title"><i class="fas fa-qrcode"></i><span class="text">&nbsp;Scanned QR Code</span></div>

<table id="notif" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>QR Code</th>
        </tr>
    </thead>
    <tbody>
        <?php include("../api/notification-list.php")?> 
    </tbody>
</table>

<script>
    $(document).ready(function() {
    var table = $('#notif').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>