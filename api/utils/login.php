<?php
require_once("connection.php");

$auname = $_POST['admin_username'];
$apass = $_POST['admin_password'];
$max_attempts = 3;
$wait_time = 180; // 3 minutes in seconds

if ($stmt = $con->prepare("SELECT * FROM tbl_adminreg WHERE admin_username = ?")) {
    $stmt->bind_param("s", $auname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['admin_password'] === $apass) {
            session_start();
            $_SESSION['admin_username'] = $auname;
            header("Location: ../../admin/admin.php?page=dashboard");
            exit();
        } else {
            session_start();
            if (!isset($_SESSION['attempts'])) {
                $_SESSION['attempts'] = 1;
            } else {
                $_SESSION['attempts']++;
            }
            $attempts_remaining = $max_attempts - $_SESSION['attempts'];
            if ($attempts_remaining > 0) {
                echo '<script type="text/javascript">'; 
                echo 'alert("Username or Password is Incorrect. '.$attempts_remaining.' attempts remaining"); '; 
                echo 'window.location = "../../pages/admin_login.php";';
                echo '</script>';
                exit();
            } else {
                if (isset($_SESSION['last_attempt_time']) && time() - $_SESSION['last_attempt_time'] < $wait_time) {
                    $wait_remaining = $wait_time - (time() - $_SESSION['last_attempt_time']);
                    echo '<script type="text/javascript">'; 
                    echo 'alert("You have exceeded the maximum number of login attempts. Please try again in '.$wait_remaining.' seconds."); '; 
                    echo 'window.location = "../../pages/admin_login.php";';
                    echo '</script>';
                    exit();
                } else {
                    $_SESSION['last_attempt_time'] = time();
                    session_destroy();
                    echo '<script type="text/javascript">'; 
                    echo 'alert("You have exceeded the maximum number of login attempts. Please try again later."); '; 
                    echo 'window.location = "../../pages/admin_login.php";';
                    echo '</script>';
                    exit();
                }
            }
        }
    } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("Invalid Username and Password"); '; 
        echo 'window.location = "../../pages/admin_login.php";';
        echo '</script>';
        exit();
    }
    $stmt->close();
} else {
    echo "failed";
    die("error 1".mysqli_stmt_error($stmt));
}

mysqli_close($con);

?>
