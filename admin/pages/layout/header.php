
<!--<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
<div class="action">
  <div class="profile" onclick="menuToggle();"><img src="../images/user.png" alt="user image"></div>
    <div class="menu">
        <h3>Welcome<br><span>Admin</span></h3>
        <ul>
            <li><a href="../api/utils/logout.php">
                <i class="uil uil-signout"></i> Logout</a></li>
        </ul>

    </div>
</div>
</div> -->

<nav>
      <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
        
      </div>

      <div class="top">
      <div class="action">
      <div class="profile-details" onclick="menuToggle();">
        <img src="../images/user.png" alt="Profile Picture">
        <span class="admin_name"> Admin </span>
        <i class='bx bx-chevron-down' ></i>
      </div>
      <div class="menu">
       
        <ul>
            <li><a href="../api/utils/logout.php">
                <i class="uil uil-signout"></i> Logout</a></li>
        </ul>

    </div>
      </div>
      </div>
    </nav>




<script>
    function menuToggle(){
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active');
    }
</script>