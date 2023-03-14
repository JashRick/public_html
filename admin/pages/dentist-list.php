<div class="home-content">
<div class="overview">

<div class="title">
        <i id="title-icon" class="fas fa-user-cog"></i>
        <span class="text">Dentist List</span>
        <button class="add-admin" type="button" onclick="location.href='../pages/admin_reg.php'"><i class="fas fa-plus"></i> <span> Add New Admin</span></button>
    </div>

<div class="main-box">
  
  <div class="recent-sales box">
    
    <div>
    <table id="table" class="table table-striped table-bordered table-hover table-nowrap" style="width:100%; " >
            <thead class="">
                <tr>
                    <th>QR Code</th>
                    <th>id</th>
                    <th>Admin Username</th>
                    <th>Admin Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include("../api/utils/connection.php");
                    include("../api/dentist-list.php");?>
            </tbody>
        </table>

    </div>
</div>
</div>
    </div>
   </div>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>