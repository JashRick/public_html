
<div class="overview">
    <div class="title">
        <i id="title-icon" class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Medical History List</span>
        <button class="add-admin" type="button" onclick="location.href='../pages/medical_history.php'"><i class="fas fa-plus"></i> <span> Add new Medical Info</span></button>
    </div>

    <div>
    <table id="dentist-list" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Medical History List</th>
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