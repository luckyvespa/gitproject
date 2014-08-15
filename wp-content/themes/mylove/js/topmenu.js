$(document).ready(function() {
		$('.topmenu .main_menu .top_menu a').click(function(){
			$('.topmenu .main_menu .top_menu a').removeClass('active');
			$(this).addClass('active');
		});
});