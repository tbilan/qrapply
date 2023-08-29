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

    <title>Apply to Provantage</title>
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<?php
$posted_paylods = array();

if(isset($_POST['SubmitButton'])){
	$message = $_POST['message'];
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$license = $_POST['license'];
	$shift = $_POST['shift'];
	$pay = $_POST['pay'];
	
    $error = true;
    $alert_msg ="alert_msg";

	$url = 'https://prod-82.eastus.logic.azure.com:443/workflows/b7fff3e5cd8b4e118453cb8fa9bc24aa/triggers/manual/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=UMgn4kB1iUSNbd55qgDFFp0F7fq2_MGDBxok9jIfLoM';
	$ch = curl_init($url);
	$data = array(
		'name' => $name,
		'phone' => $phone,
		'address' => $address,
		'license' => $license,
		'shift' => $shift,
		'pay' => $pay
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
Join our team!  Please enter your information below so we can add you to our applicant list.
<form action="https://qrapply.teamprovantage.com/spanish.php">
	<center><input type="submit" value="Espanol"></center>
</form>

<main class="container">
  <div class="bg-light p-5 rounded mt-3">
	<form class="user" method="POST" action="<?=$_SERVER['REQUEST_URI']?>">
		<div class="form-group mb-3">
			<textArea type="name" class="form-control form-control-user" id="name" rows=1 name="name" maxlength=200 
				placeholder="What is your full name?" required style="width: 100%; max-width: 100%;"></textArea>
			<textArea type="phone" class="form-control form-control-user" id="phone" rows=1 name="phone" maxlength=200 
				placeholder="What is your phone number? xxx-xxx-xxxx" required style="width: 100%; max-width: 100%;"></textArea>
			<textArea type="address" class="form-control form-control-user" id="address" rows=1 name="address" maxlength=200 
				placeholder="What is your home address?" required style="width: 100%; max-width: 100%;"></textArea>
			<textArea type="license" class="form-control form-control-user" id="license" rows=1 name="license" maxlength=200 
				placeholder="What is your driver's license number?" required style="width: 100%; max-width: 100%;"></textArea>
			<textArea type="shift" class="form-control form-control-user" id="shift" rows=1 name="shift" maxlength=200 
				placeholder="What is your preferred shift?" required style="width: 100%; max-width: 100%;"></textArea>
			<textArea type="pay" class="form-control form-control-user" id="pay" rows=1 name="pay" maxlength=200 
				placeholder="What is your requested pay?" required style="width: 100%; max-width: 100%;"></textArea>				
		</div> 
		<button type="submit" id="SubmitButton" name ="SubmitButton" class="btn btn-primary btn-user btn-block">
			Submit Request
		</button>
	</form>
</div>
</main>
</body>
</html>
