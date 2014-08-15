// JavaScript Document
$(document).ready(function() {
    $('.tab_content:not(:first)').hide();
	$('.tabvn li a').click(function(){
		$('.tabvn li a').removeClass('active');
		$(this).addClass('active');
		$('.tab_content').hide();
		var activeTab = $(this).attr('href');
		$(activeTab).fadeIn();
		return false;	
	});
});