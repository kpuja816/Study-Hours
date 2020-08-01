<?php

$MERCHANT_KEY = "4Emyr49v";
$SALT = "DAIlXtLvSl";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$surl="http://aa-kramah.com/hse/User/sucess_payment.php";
$furl="http://aa-kramah.com/hse/User/failure_payment.php";

$action = $PAYU_BASE_URL . '/_payment';

$formError = 0;

if(empty($txnid)) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
}
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hash = '';
// Hash Sequence
if( !empty($_POST["firstname"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["productinfo"]) && !empty($_POST["address1"]) && !empty($_POST["city"]) && !empty($_POST["state"]) && !empty($_POST["zipcode"]) && !empty($_POST["amount"])) {
	$name=$_POST["firstname"];
	$email=$_POST["email"];
	$amount=$_POST["amount"];
	$phone=$_POST["phone"];
	$productInfo=$_POST["productinfo"];
	$address1=$_POST["address1"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$zipcode=$_POST["zipcode"];
} else {
	$name="Poulomi Samanta";
	$email="poulomisamanta6@gmail.com";
	$amount=10;
	$phone="9051136422";
	$productInfo="Test Product";
	$address1="Budge Budge, South 24 Parganas";
	$city="Kolkata";
	$state="West Bengal";
	$zipcode="700137";
}
$hash_string = $MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
$hash = strtolower(hash('sha512', $hash_string));
?>
<html>
  <head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
	$(document).ready(function () {
		var hash = '<?php echo $hash ?>';
		$("form").submit(function(){
			if(hash == '') {
				return false;
			}
		});
		$("#edit").click(function(){
			$('#firstnameEdit').val($('#firstname').val());
			$('#emailEdit').val($('#email').val());
			$('#phoneEdit').val($('#phone').val());
			$('#address1Edit').val($('#address1').val());
			$('#cityEdit').val($('#city').val());
			$('#stateEdit').val($('#state').val());
			$('#zipcodeEdit').val($('#zipcode').val());
			$('.sumbitRow').hide();
			$('#editForm').show();
		});
		$("#save").click(function(){
			$('#firstname').val($('#firstnameEdit').val());
			$('#email').val($('#emailEdit').val());
			$('#phone').val($('#phoneEdit').val());
			$('#address1').val($('#address1Edit').val());
			$('#city').val($('#cityEdit').val());
			$('#state').val($('#stateEdit').val());
			$('#zipcode').val($('#zipcodeEdit').val());
			$('#firstnameLabel').html($('#firstnameEdit').val());
			$('#emailLabel').html($('#emailEdit').val());
			$('#phoneLabel').html($('#phoneEdit').val());
			$('#address1Label').html($('#address1Edit').val());
			$('#cityLabel').html($('#cityEdit').val());
			$('#stateLabel').html($('#stateEdit').val());
			$('#zipcodeLabel').html($('#zipcodeEdit').val());
			$('#editForm').hide();
			$('.sumbitRow').show();
		});
	});
</script>
<style>
.bs-linebreak { top:20px; }
</style>
</head>
<body>
	<div class="container">
		<div class="row">
		<section>
		<div class="wizard">
		<div class="wizard-inner">
		<!-- <div class="connecting-line"></div> -->
		<ul class="nav  breadcrumb_checkout" role="tablist">
		<li role="presentation" class="active">
		<a data-toggle="tab" aria-controls="step1" role="tab" title="Payment">
		<h3>Payment Information</h3>
		</a>
		</li>
		</ul>
		</div>
		<div class="tab-content">
		<div class="tab-pane active" role="tabpanel" id="step1">
		<form role="form" action="<?php echo $action; ?>" method="post" name="payuForm">
			<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
			<input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
			<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
			<input type="hidden" name="furl" value="<?php echo $furl; ?>" />
			<input type="hidden" name="surl" value="<?php echo $surl; ?>" />
			<input type="hidden" name="productinfo" value="<?php echo $productInfo; ?>"/>
			<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
			<input type="hidden" id="phone" name="phone" value="<?php echo $phone; ?>" />
			<input type="hidden" id="email" name="email" value="<?php echo $email; ?>" />
			<input type="hidden" id="firstname" name="firstname" value="<?php echo $name; ?>" />
			<input type="hidden" id="address1" name="address1" value="<?php echo $address1; ?>" />
			<input type="hidden" id="city" name="city" value="<?php echo $city; ?>" />
			<input type="hidden" id="state" name="state" value="<?php echo $state; ?>" />
			<input type="hidden" id="zipcode" name="zipcode" value="<?php echo $zipcode; ?>" />
			<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
				
			<!--  exiting customer end -->
			<div class="row" style="">
			<div class="checkout_details">
				<div class="col-sm-6 col-sm-offset-3">
				<dl class="dl-horizontal">
					<dt>Name:<span></span></dt>
					<dd id="firstnameLabel"><?php echo $name; ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Mobile Number:<span></span></dt>
					<dd id="phoneLabel"><?php echo $phone; ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Email:<span></span></dt>
					<dd id="emailLabel"><?php echo $email; ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Address:<span></span></dt>
					<dd id="address1Label"><?php echo $address1; ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>City:<span></span></dt>
					<dd id="cityLabel"><?php echo $city; ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>State:<span></span></dt>
					<dd id="stateLabel"><?php echo $state; ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Zipcode:<span></span></dt>
					<dd id="zipcodeLabel"><?php echo $zipcode; ?></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Payable Amount:<span></span></dt>
					<dd><?php echo $amount; ?></dd>
				</dl>
				<div class="dl-horizontal sumbitRow">
					<dt><input type="button" class="btn btn-primary btn-info" id="edit" value="Edit"/></dt>
					<dd><input type="submit" class="btn btn-primary btn-success" value="Pay"/></dd>
				</div>
				</div>
			</div>
			</div>
		</form>
		
			<!-- exiting customer end-->
			<!-- new customer start -->
			<div class="row col-md-8 col-md-offset-2" id="editForm" style="display:none;">
				<div class="col-md-6">
					<label for="inputName">Full Name</label>
					<input type="text" id="firstnameEdit" class="form-control" id="inputName" placeholder="Full Name">
				</div>
				<div class="col-md-6">
					<label for="inputEmail">Email </label>
					<input type="email" id="emailEdit" class="form-control" id="inputEmail" placeholder="Email Address">
				</div>
				<div class="col-md-6">
					<label for="inputMobile">Mobile Number</label>
					<input type="text" id="phoneEdit" class="form-control" id="inputMobile" placeholder="Mobile Number">
				</div>
				<div class="col-md-6">
					<label for="inputAddress">Address</label>
					<input type="text" id="address1Edit" class="form-control" id="inputAddress" placeholder="Address">
				</div>
				<div class="col-md-6">
					<label for="inputCity">City</label>
					<input type="text" id="cityEdit" class="form-control" id="inputCity" placeholder="City">
				</div>
				<div class="col-md-6">
					<label for="inputState">State</label>
					<input type="text" id="stateEdit" class="form-control" id="inputState" placeholder="State">
				</div>
				<div class="col-md-6">
					<label for="inputZip">Zipcode</label>
					<input type="text" id="zipcodeEdit" class="form-control" id="inputZip" placeholder="Zipcode">
				</div>
				<div class="col-md-12 bs-linebreak">
					<ul class="list-inline text-center">
						<li><button type="button" id="save" class="btn btn-primary btn-info">Save</button></li>
					</ul>
				</div>
			</div><!-- step 1 end div tag -->
		</div>
		</div>
		</section>
		</div>
	</div>
</body>
</html>
