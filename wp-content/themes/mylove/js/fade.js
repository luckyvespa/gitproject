$(document).ready(function(){
if(!$.browser.msie) $(".fade ul li").hover(function() {$(this).siblings().stop().fadeTo(400,0.4);}, 
function() { $(this).siblings().stop().fadeTo(400,1); });
});