<!DOCTYPE html>
<html lang="en">
  <?php include '../layout/head.php'; ?>
  <body class="bg1">
    <?php include '../admin/pages/layout/header1.php'; ?>

    <div>
      <div class="container">
        <div class="wrapper" id="wrapper" style="margin-top: 130px;">
          <div class="title"><span>Patient Registration</span></div>
          <form action="email-script.php" method="post">
            <div class="main-user-info">
              <div class="user-input-box">
                <label for="fromEmail">From <span style="color: #FF0000">*</span></label>
                <input type="email" name="fromEmail" id="fromEmail" class="form-control" required autofocus>
              </div><br>

              <div class="user-input-box">
                <label for="toEmail">To <span style="color: #FF0000">*</span></label>
                <input type="email" name="toEmail" id="toEmail" class="form-control" value="mabisamercado@gmail.com" readonly required autofocus>
              </div><br>

              <div class="user-input-box">
                <label for="subject">Subject <span style="color: #FF0000">*</span></label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
              </div><br>

              <div class="user-input-box">
                <label for="message">Message <span style="color: #FF0000">*</span></label>
                <textarea id="message" name="message" class="form-control" placeholder="Message" required></textarea>
              </div><br>
                 <div class="row button">
              <button type="submit" name="sendMailBtn" class="login">Send Email</button>
              >/div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
