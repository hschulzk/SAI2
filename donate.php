<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<?php include 'styles.php' ?>
	<title>
		Second Amendment Institute - Home
	</title>
	<?php include 'assets/homeInsertForm.php'; ?>	
	<?php include 'includes/header.php'; ?>
	<?php echo generateHeader('scrollNav');?>
	<div class="container-fluid" id="mainPage">
		<div class="row contentSection">
			<div class="row">	
				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					<h2 class="em3">Support SAI and Students Across the Country</h2>
				</div>			
				<div class="col-sm-2 photoBox"><img src="img/studentsWithSigns.jpg" width="100%"></div>
				<div class="col-sm-10">
					<p>
						The Second Amendment Institute, through its national student program of Students for Self-Defense, trains and equips college students with the tools they need to address and change campus policies that restrict their right to self-defense. 
					</p>
					<p>
						With your generous gift, SAI will be able to equip students with the proper tools such as recruiting material and literature. SAI will also be able to fund self-defense classes and seminars for students. 
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10">
					<p>
						No matter the amount of your generous gift, it will help in the most significant way. For your gift, SAI will be more than happy to thank you with personal letters from students leaders, pocket constitutions, and our success stories which you will be a part of.
					</p>
					<p>
						The Second Amendment Institute is a registered non-profit organization operating under the IRS code 501(c)3. All donations are tax-deductible		
					</p>
				</div>
				<div class="col-sm-2 photoBox"><img src="img/studentsWithSigns.jpg" width="100%"></div>

				<div class="col-sm-12">	
					<form class="payPalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="2KACFMTA2UGBU">
						<button class="donateButton buttonSizing saiGreenBG" type="input" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							Donate
						</button>
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width=".1" height=".1"  style="display: none;">
					</form>				
				</div>
			</div>
		</div>
	</div>
	<?php
		include 'includes/contactModal.html';
		echo generateFooter();
		include 'js/script.php';
	?>