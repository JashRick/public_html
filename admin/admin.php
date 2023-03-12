<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("./pages/layout/head.php"); ?>
<body>
<?php include("./pages/layout/nav.php"); ?>
  <section class="home-section">
    
  <?php include("./pages/layout/header.php"); ?>
<?php 
  if (isset($_GET["page"])) {
      $page = $_GET["page"];
      if ($page == "dashboard") {
        include("./pages/dashboard.php");
    } else if ($page == "dentist-form") {
        include("./pages/dentist-form.php");
    } 
    else if ($page == "dentist-list") {
        include("./pages/dentist-list.php");
    } else if (str_contains($page, "dentist-form")) {
        include("./pages/dentist-form.php");
    }
    else if ($page == "patient-list") {
        include("./pages/patient-list.php");
    } else if ($page == "patient-form") {
        include("./pages/patient-form.php");
    }
    else if ($page == "medical-history-list") {
      include("./pages/medical-history-list.php");
    } else if ($page == "patient-form") {
        include("./pages/patient-form.php");
    }
      else if ($page == "reports-list") {
        include("./pages/reports-list.php");
    } else if ($page == "patient-form") {
        include("./pages/patient-form.php");
    }
  }
?>
        
     
  </section>
     
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>

</body>
</html>
