
<div class="home-content">
<div class="overview">
    <div class="title">
        <i id="title-icon" class='fas fa-user' style="color: rgb(255, 0, 183);"></i>
        <span class="text">Patient List</span>
        <button class="add-patient" type="button" onclick="location.href='../pages/patient_reg.php'"><i class="fas fa-plus"></i> <span> Add New Patient</span></button>
    </div>

   

<div class="main-box">
  
  <div class="recent-sales box">
    <div>
    <table id="table" class="table table-striped table-bordered table-hover table-nowrap" style="width:99%">
            <thead>
                <tr>
                    <th>Patient's Photo</th>
                    <th>Patient ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Initial</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include("../api/utils/connection.php");
                    include("../api/patient-list.php");?>
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