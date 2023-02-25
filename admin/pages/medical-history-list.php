
<div class="overview">
    <div class="title">
        <i id="title-icon" class='fas fa-file-medical' style="color: #09bb0f;"></i>
        <span class="text">Medical History List</span>
        <button class="add-mh" type="button" onclick="location.href='../pages/medical_history.php'"><i class="fas fa-plus"></i> <span> Add new Medical Info</span></button>
    </div>

    <div>
    <table id="dentist-list" class="display" style="width:100%">
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
                    include("../api/medical-history-list.php");?>
            </tbody>
        </table>

    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dentist-list').DataTable();
    });
</script>