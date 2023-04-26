<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MABISA | Patient's QR Code</title>
		<link rel="icon" href="../images/patient.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<?php include('../layout/header.php'); ?>

<div class="bg1">
  
<div class="container2" style="top: 150px; position: relative;">
   
    <div class="wrapper2">
      <div class="title2"><span>Generated QR Code</span></div>
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
        <div class="go-to-MH">Go  <a href="https://mabisamercadodentalclinic.000webhostapp.com/admin/admin.php?page=patient-list" style="color: #004ba7;"> Back</a></div>
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
    
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>';    
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
    var svg = document.getElementById("barcode");

    // Check if the SVG element exists
    if (!svg) {
      console.error("SVG element not found");
      return;
    }

    var serializer = new XMLSerializer();
    var source = serializer.serializeToString(svg);

    // Add namespaces
    if(!source.match(/^<svg[^>]+xmlns="http\:\/\/www\.w3\.org\/2000\/svg"/)){
        source = source.replace(/^<svg/, '<svg xmlns="http://www.w3.org/2000/svg"');
    }
    if(!source.match(/^<svg[^>]+"http\:\/\/www\.w3\.org\/1999\/xlink"/)){
        source = source.replace(/^<svg/, '<svg xmlns:xlink="http://www.w3.org/1999/xlink"');
    }

    // Add XML declaration
    source = '<?xml version="1.0" standalone="no"?>\r\n' + source;

    // Create a new link element
    var link = document.createElement("a");
    link.setAttribute("download", "barcode.svg");
    link.setAttribute("href", "data:image/svg+xml;charset=utf-8,"+encodeURIComponent(source));

    // Append the link element to the document body
    document.body.appendChild(link);

    // Trigger a click on the link element to download the file
    link.click();

    // Remove the link element from the document body
    document.body.removeChild(link);
  }

  setTimeout(() => {
    download();
  }, 1000);
</script>
