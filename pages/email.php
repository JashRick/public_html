<!DOCTYPE>
<html lang="en">
  <?php include '../layout/head.php'; ?>
  <body class="bg1">
    <?php include '../layout/header.php'; ?>

    <div>
      <div class="container">
        <div class="wrapper" id="wrapper" style="margin-top: 130px;">
          <div class="title"><span>Password Reset</span></div>
          <form action="email-script.php" method="post" style="text-align: unset;">
            <div class="main-user-info" style="margin-left: 15px;">
              <div class="user-input-box" style="width: 100%;">
                <label for="fromEmail">From <span style="color: #FF0000">*</span></label>
                <input type="email" name="fromEmail" id="fromEmail" class="form-control" placeholder="Enter Email" required autofocus>
              </div><br>

              <div class="user-input-box" style="width: 100%;">
                <label for="toEmail">To <span style="color: #FF0000">*</span></label>
                <input type="email" name="toEmail" id="toEmail" class="form-control" value="mabisamercado@gmail.com" readonly required autofocus>
              </div><br>

              <div class="user-input-box" style="width: 100%;">
                <label for="subject">Subject <span style="color: #FF0000">*</span></label>
                <input type="text" id="subject" name="subject" class="form-control" value="Pass Recovery" readonly required autofocus>
              </div><br>

              <div class="user-input-box" style="width: 100%;">
                <label for="message">Message <span style="color: #FF0000">*</span></label>
                <textarea id="message" name="message" class="form-control" placeholder="Message" required  style="    height: 50px; width: 95%; border-radius: 7px; border: 2px solid #004ba7; padding: 5px 10px;"></textarea>
              </div><br>

              <div class="row button">
                <button type="submit" name="sendMailBtn" class="form-submit-btn"  style="width: 250%; font-size: 20px; padding: 10px; border: 3px solid #004ba7; border-radius: 10px; color: #fdfdfd; background: #004ba7;  display: flex;  justify-content: center; align-content: center; position: relative; flex-wrap: wrap;">Send Email</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>