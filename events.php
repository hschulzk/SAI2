<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/style.css?v=12345">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="includes/logoIcon.ico" />
	<?php include 'assets/homeInsertForm.php' ?>	
</head>
<body>
	<?php include 'includes/header.html';?>
	<div class="container">
    	<div class="row">
	    	There are not upcoming events scheduled. Check back for events in the future. 
    	</div>
    	<div class="row">
    		<div class="col-md-6">
    			<?php
    				include 'includes/basicSlide.html';
    			?>
    		</div>
    		<div class="col-md-6">
    			Past 2
    		</div>    		
    	</div>
	</div>	
	<?php include 'includes/eventsMoreInfoModal.html';?>
	<?php include 'includes/contactModal.html';?>
	<?php include 'includes/footer.html';?>
<script type="text/javascript">
$(document).ready(function(){
	$('.w3-button').each(function(){
		$(this).click(function(){
			var clickVal = $(this).attr('value');
			showSlide(clickVal);			
		});
	})

	function showSlide(inc) {
		var slideSet = $('.mySlides');
		// var 
		// console.log(slideSet);
		// if (n > slideSet.length) {slideIndex = 1;}
		// if (n < 1) {slideIndex = slideSet.length;}
		$.each(slideSet,function(key, value){
			console.log(inc);
			if($(this).hasClass('showing')) {
				$(this).toggle();
				var newVal = key + Number(inc);
				if (newVal < slideSet.length) {
					$(slideSet[newVal]).toggle('showing');	
				} else {
					$(slideSet[0]).toggle('showing');
				}
				
				return;
			}
		});

	}
});


</script>	
</body>

