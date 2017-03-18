$(document).ready(function() {
	$('.popup-gallerys').on('click', function(e) {
		$('dialog').attr('id','myDialog');
		document.getElementById("myDialog").showModal();
		document.getElementById("image").src = $(this).find('.id-gallery').attr('src');
	});
	$('.close').on('click', function(e){
		$('dialog').removeAttr('id');
		$('dialog').attr('close');
		$('dialog').removeAttr('open');
		location.reload();
	})
});