<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Patient's Barcode</title>
		<link rel="icon" href="../images/patient.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
  <div class="h1title"><h1>Generated QR Code</h1></div>  
<div class="container2">
   
    <div class="wrapper2">
      <div class="title2"><span>Click the QR Code below to Download!</span></div>
      <form action="#">
      
        <div class="row">
         
        <div class="user-input-box2">
                <label>Your Unique QR Code: </label>
                <a id="link" download>
          <!-- <svg id="barcode"></svg> -->
          <div id="qrcode"></div>
        </a>
              </div>
        </div>
        <div class="go-to-MH">Proceed to <a href="../pages/medical_history.php" style="color: #004ba7;">Patient's Medical History Form</a></div>
		  </form>
      </form>
    </div>
  </div>
 </div>
</body>
</html>

<?php
if (isset($_GET["patient_id"])) {

	$patient_id = $_GET["patient_id"];

	// echo '<script type="text/javascript">';
  // echo 'JsBarcode("#barcode", "'.$patient_id.'");';
	// echo '</script>';

  echo '<script type="text/javascript">';
  echo 'var qrcode = new QRCode("qrcode", {
    text: "'.$patient_id.'",
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
  });';
	echo '</script>';

  
}
?>

<script type="text/javascript">    
  function download() {
    // var can = document.getElementById("barcode");

    // console.log(can)

    //get svg element.
    var svg = document.getElementById("barcode");

    //get svg source.
    var serializer = new XMLSerializer();
    var source = serializer.serializeToString(svg);

    //add name spaces.
    if(!source.match(/^<svg[^>]+xmlns="http\:\/\/www\.w3\.org\/2000\/svg"/)){
        source = source.replace(/^<svg/, '<svg xmlns="http://www.w3.org/2000/svg"');
    }
    if(!source.match(/^<svg[^>]+"http\:\/\/www\.w3\.org\/1999\/xlink"/)){
        source = source.replace(/^<svg/, '<svg xmlns:xlink="http://www.w3.org/1999/xlink"');
    }

    //add xml declaration
    source = '<?xml version="1.0" standalone="no"?>\r\n' + source;

    //convert svg source to URI data scheme.
    var url = "data:image/svg+xml;charset=utf-8,"+encodeURIComponent(source);

    //set url value to a element's href attribute.
    document.getElementById("link").href = url;
    //you can download svg file by right click menu.
  }

  setTimeout(() => {
    download();
  }, 1000)
  
</script>