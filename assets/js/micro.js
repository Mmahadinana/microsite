
$(function() {

$(document).on('click', '.clickable', function(e){
     e.preventDefault();
     if ($(this).hasClass("collapsed")) {
     	$(this).find("span .arrows").attr('src',"assets/images/arrow_closed.svg");
     }else {
     	$(this).find("span .arrows").attr('src',"assets/images/arrow_opened.svg");
     }
   		
 });

});
