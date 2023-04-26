<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php
    // Include the head section
    require_once './pages/layout/head.php';
    ?>
</head>
<body style="background: #f5f5f5;">
    <?php
    // Include the header and navigation sections
    require_once './pages/layout/header1.php';
    require_once './pages/layout/nav.php';
    ?>
    <section class="home-section">
        <?php 
        // Determine which page to include based on the 'page' parameter in the URL
        $page = isset($_GET['page']) ? basename($_GET['page']) : 'dashboard';
        switch ($page) {
            case 'dashboard':
                include_once './pages/dashboard.php';
                break;
            case 'dentist-form':
            case 'dentist-form2':
            case 'dentist-form3':
                include_once './pages/dentist-form.php';
                break;
            case 'dentist-list':
                include_once './pages/dentist-list.php';
                break;
            case 'patient-list':
                include_once './pages/patient-list.php';
                break;
            case 'patient-form':
                include_once './pages/patient-form.php';
                break;
            case 'medical-history-list':
                include_once './pages/medical-history-list.php';
                break;
            case 'medical-form':
                include_once './pages/medical-form.php';
                break;
            case 'clinical-exam-list':
                include_once './pages/clinical-exam-list.php';
                break;
            case 'clinical-form':
                include_once './pages/clinical-form.php';
                break;
            case 'reports-list':
                include_once './pages/reports-list.php';
                break;
            default:
                include_once './pages/dashboard.php';
                break;
        }
        ?>
    </section>
 
</body>
</html>
