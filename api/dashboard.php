<?php include("../api/utils/connection.php"); ?>




      <div class="overview-boxes">
        <div class="box">
          <div class="right-side"  style="width:100%; text-align:center; color:#0d62ff;">
            <div class="box-topic">Admin</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "id20189319_mabisa";
                $password = "{6!-Pu{+V9Uk4Hh(";
                $dbname = "id20189319_db_mabisa";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                // execute query
                $sql = "SELECT COUNT(*) as count FROM tbl_adminreg";
                $result = $conn->query($sql);
                
                // handle result
                if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row["count"];
                echo "<span class='count'>Total count: " . $count . "</span>";
                } else {
                echo "No results found";
                }
                
                // close database connection
                $conn->close();
                ?>
                
          </div>
          <i class='fas fa-user-cog icon-right'></i>
        </div>
        <div class="box">
          <div class="right-side"  style="width:100%; text-align:center; color:rgb(255, 0, 183);">
            <div class="box-topic" >Patient&nbsp;</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "id20189319_mabisa";
                $password = "{6!-Pu{+V9Uk4Hh(";
                $dbname = "id20189319_db_mabisa";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                // execute query
                $sql = "SELECT COUNT(*) as count FROM tbl_patientreg";
                $result = $conn->query($sql);
                
                // handle result
                if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row["count"];
                echo "<span class='count'>Total count: " . $count . "</span>";
                } else {
                echo "No results found";
                }
                
                // close database connection
                $conn->close();
                ?>
            
          </div>
          <i class='fas fa-user'></i>
        </div>
        <div class="box">
          <div class="right-side"  style="width:100%; text-align:center; color:#09bb0f;">
            <div class="box-topic">Medical History</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "id20189319_mabisa";
                $password = "{6!-Pu{+V9Uk4Hh(";
                $dbname = "id20189319_db_mabisa";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                // execute query
                $sql = "SELECT COUNT(*) as count FROM tbl_patientmedhis";
                $result = $conn->query($sql);
                
                // handle result
                if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row["count"];
                echo "<span class='count'>Total count: " . $count . "</span>";
                } else {
                echo "No results found";
                }
                
                // close database connection
                $conn->close();
                ?>
            
          </div>
          <i class='fas fa-file-medical'></i>
        </div>
        <div class="box">
          <div class="right-side"  style="width:100%; text-align:center; color:#9ba5b0;">
            <div class="box-topic">Clinical Examinations</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "id20189319_mabisa";
                $password = "{6!-Pu{+V9Uk4Hh(";
                $dbname = "id20189319_db_mabisa";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                // execute query
                $sql = "SELECT COUNT(*) as count FROM tbl_clinicalexam";
                $result = $conn->query($sql);
                
                // handle result
                if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $count = $row["count"];
                echo "<span class='count'>Total count: " . $count . "</span>";
                } else {
                echo "No results found";
                }
                
                // close database connection
                $conn->close();
                ?>
           
          </div>
          <i class='fas fa-notes-medical'></i>
        </div>
      </div>
              </div>