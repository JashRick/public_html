<?php 
include("../api/utils/connection.php");
include("../api/dentist-view.php");
?>
<div class="home-content">
    <div class="overview">
        <div class="main-box" style="margin: 150px 0px 10px 250px; width: 500px; height: fit-content;">
            <div class="recent-sales box" style="padding: 10px 10px;">
                <form action="../api/dentist-update.php" method="GET">
                    <div class="title" style=" text-align: center; margin: 0px 0px 10px 0px; background-color: #004ba7; border-radius: 5px; padding: 3px; color: #fff">
                        <i id="title-icon" class="fas fa-user-cog"></i>
                        <span class="text">Dentist Form</span>
                    </div>
                    <input type="hidden" name="id" required value="<?php echo $GLOBALS['dentist']['id']; ?>">
                    <div class="mb-3">
                        <i class="fas fa-user-tie"></i>
                        <label class="form-label">Full Name</label>
                        <input class="form-control" placeholder="Full Name" name="fullname" required value="<?php echo $GLOBALS['dentist']['admin_fullname']; ?>">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-user-circle"></i>
                        <label class="form-label">Username</label>
                        <input class="form-control" placeholder="Username" name="username" required value="<?php echo $GLOBALS['dentist']['admin_username']; ?>">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-envelope"></i>
                        <label class="form-label">Email</label>
                        <input class="form-control" placeholder="Email" name="email" required value="<?php echo $GLOBALS['dentist']['admin_email']; ?>">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-lock"></i>
                        <label class="form-label">Password</label>
                        <input class="form-control" placeholder="Password" name="password" required value="<?php echo $GLOBALS['dentist']['admin_password']; ?>">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-lock"></i>
                        <label class="form-label">Re-type Password</label>
                        <input class="form-control" placeholder="Re-type Password" name="repassword" required value="<?php echo $GLOBALS['dentist']['admin_repassword']; ?>">
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.href='https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=dentist-list'">Cancel</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
