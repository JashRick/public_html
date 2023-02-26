<div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.3.1/js/dataTables.fixedHeader.min.js"></script>
<script src=https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">

<div class="title"><i class="fas fa-qrcode"></i><span class="text">&nbsp;QR Code Notification</span></div>

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
</div>
<script>
    $(document).ready(function() {
    var table = $('#notif').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>