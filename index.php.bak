<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

    <title>Service Request</title>
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<?php
$posted_paylods = array();

$LocationID = $_GET['id'];
$CustomerID = $_GET['cid'];

if(isset($_POST['SubmitButton'])){
	$message = $_POST['message'];
	
    $error = true;
    $alert_msg ="alert_msg";

	$LocationID = $_GET['id'];

	$url = 'https://prod-54.eastus.logic.azure.com:443/workflows/1def9b783d4f43649ea9a918c73693ad/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=kqUHEVXpUPU_s4PMpF6n5JShAuKnY-CikRV-ZBwOvaA';
	$ch = curl_init($url);
	$data = array(
		'serviceRequestBody' => $message,
		'subject' => $subject
	);
	$payload = json_encode(array("user" => $data));
	$payload = json_encode($data);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	echo $result;
	
	echo "<meta http-equiv='refresh' content='0; url=thankyou.html'>";
	
}
?>

<body>
<img src="provantageo365mini.jpg" width=100%>
<main class="container">
  <div class="bg-light p-5 rounded mt-3">
	<form class="user" method="POST" action="<?=$_SERVER['REQUEST_URI']?>">
		<div class="form-group mb-3">
			<?php echo "$customer"; echo "$building"; echo "$location"; ?>
			<textArea type="message" class="form-control form-control-user" id="message" rows=5 name="message" maxlength=200 
				placeholder="How can we be of service?" required style="width: 100%; max-width: 100%;"></textArea>
		</div>
		<button type="submit" id="SubmitButton" name ="SubmitButton" class="btn btn-primary btn-user btn-block">
			Submit Request
		</button>
	</form>
</div>
</main>
</body>
</html>
