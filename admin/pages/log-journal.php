
<div class="overview">
    <div class="title">
        <i id="title-icon" class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Log Journal</span>
        <button class="journal" type="button" onclick="location.href='../pages/dentist-list.php'"><i class="fas fa-plus"></i> <span> Back</span></button>
      

    <div>
    <table id="dentist-list" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Dentist Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include("../api/utils/connection.php");
                    include("../api/utils/log-journal.php");?>
            </tbody>
        </table>

    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dentist-list').DataTable();
    });
</script>