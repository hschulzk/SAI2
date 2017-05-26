function sendFormData (formID) {
	var theId = '#' + formID;
	// console.log(formID);
	// console.log(theId);
	// var firstName = $(theId).find('#firstName').val();
	// var lastName = $(theId).find('#lastName').val();
	// var email = $(theId).find('#email').val();
	// var phone = $(theId).find('#phone').val();
	// var message = $(theId).find('#message').val();
	var url = 'http://sainational.org/assets/formInsert.php';
	var formValue = $(theId).serialize();
	var urlString = 'http://sainational.org/assets/formInsert.php';
	console.log(formValue);
    $.ajax({
       type: "POST",
       url: urlString,
       data: formValue,
       success: function(data)
       {
           console.log(data);
       }
    });
}
$( document ).ready(function() {

$('#hamburger').click(function() {
	$('#mobileMenu').slideToggle();
});
	$(".formSuccess").delay(5000).hide('slow');
});

