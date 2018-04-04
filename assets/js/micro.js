
$(function() {

$(document).on('click', '.panel-heading', function(e){
     e.preventDefault();//($('.collapsed')[0])
     //alert($(this).find('a').hasClass("collapsed"));
     if ($(this).find('a').hasClass("collapsed")) {
     	$(".arrows").attr('src',"assets/images/arrow_closed.svg");
     }else {
     	//alert ('out');
     	$(".arrows").attr('src',"assets/images/arrow_opened.svg");
     }
   		
 });
/*
$(document).on('click', '.opened', function(e){
	e.preventDefault();
 	$(".arrows").attr('src',"assets/images/arrow_opened.svg");
})*/
});
