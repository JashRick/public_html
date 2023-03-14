<?php include("../api/utils/connection.php");
include("../api/dentist-view.php");
?>
<div class="home-content">
    <div class="overview">
        <div class="title">
            <i id="title-icon" class="fas fa-user-cog"></i>
                <span class="text">Dentist Form</span>
          
            <div class="main-box">
                <div class="recent-sales box">
                        <form action="../api/dentist-update.php?" method="GET">
                            <input style="display:none;" name="id" required value="<?php echo $GLOBALS['dentist']['id']; ?>">
                            <div class="mb-3">
                                <i class="fas fa-user-tie"></i>
                                <label class="form-label">Full Name"</label>
                                <input class="form-control" placeholder="Full Name" name="fullname" required value="<?php echo $GLOBALS['dentist']['admin_fullname']; ?>">
                            </div>

                            <div class="mb-3">
                                <i class="fas fa-user"></i>
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
                            <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $_SERVER['dentist']['admin_fullname']; ?>
