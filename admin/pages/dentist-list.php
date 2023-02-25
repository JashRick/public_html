
<div class="overview">
    <div class="title">
        <i id="title-icon" class="fas fa-user-cog"></i>
        <span class="text">Dentist List</span>
        <button class="add-admin" type="button" onclick="location.href='../pages/admin_reg.php'"><i class="fas fa-plus"></i> <span> Add New Admin</span></button>
        <button class="journal" type="button" onclick="location.href='../pages/patient-list.php'"><i class="fad fa-book-user"></i> <span> Journal Login</span></button>
    </div>

    <div>
    <table id="dentist-list" class="display" style="width:100%" >
            <thead>
                <tr>
                    <th>Admin Username</th>
                    <th>Admin Name</th>
                    <th>Type</th>
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

<script>
    $(document).ready(function () {
        $('#dentist-list').DataTable();
    });
</script>