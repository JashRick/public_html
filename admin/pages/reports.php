
<div class="overview">
    <div class="title">
        <i id="title-icon" class="uil uil-tachometer-fast-alt"></i>
        <span class="text">Reports List</span>
       
    </div>

    <div>
    <table id="dentist-list" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Reports List</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include("../api/utils/connection.php");
                    include("../api/report-list.php");?>
            </tbody>
        </table>

    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dentist-list').DataTable();
    });
</script>