
<div class="overview">
<div class="home-content">
    <div class="title">
        <i id="title-icon" class='fas fa-notes-medical' style="color: #9ba5b0;"></i>
        <span class="text">Clinical Examination List</span>
       
    </div>


<div class="main-box">
  
  <div class="recent-sales box">
    <div>
    <table id="table" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Initial</th>
                    <th>QR Code</th>
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