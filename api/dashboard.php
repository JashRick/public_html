<?php include("../api/utils/connection.php"); ?>




      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total of Admin</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
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
                echo "Total count: " . $count;
                } else {
                echo "No results found";
                }
                
                // close database connection
                $conn->close();
                ?>
                
          </div>
          <i class='fas fa-user-cog' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total of Patient</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
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
                echo "Total count: " . $count;
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
          <div class="right-side">
            <div class="box-topic3">Total of Medical History</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
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
                echo "Total count: " . $count;
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
          <div class="right-side">
            <div class="box-topic">Clinical Examinations</div>
            
            <?php
                // establish database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
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
                echo "Total count: " . $count;
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