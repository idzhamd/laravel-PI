$(document).ready(function(){
	$('#logout').click(function(){
		event.preventDefault();
		$('#logoutForm').submit();
	});

	$('.sidebarDropdown .dropdown a').click(function(){
		$(this).siblings('ul').toggle('dropdownMenu');
		return false;
	});

	$('.dropdownMenu a').click(function(){
		window.location.href  = this.href;
		return true;
	});

	$('#delete').click(function(){
		event.preventDefault();
		$('#deleteForm').submit();
	});

});