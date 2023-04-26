
<div class="overview">
<div class="home-content">
    <div class="title">
        <i class="fas fa-file-signature" style="color: #ffc107;"></i>
        <span class="text">Reports List</span>
    <!--     <button class="add-report" type="button" onclick="location.href='../pages/reports.php'"><i class="fas fa-plus"></i> <span> Add New Report</span></button> -->
    </div>


<div class="main-box">
  
  <div class="recent-sales box">
    
    <table id="table" class="table table-striped table-bordered table-hover table-nowrap" style="width:100%">
        <div class="dataTable">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Initial</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include("../api/utils/connection.php");
                    include("../api/reports-list.php");?>
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