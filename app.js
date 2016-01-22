$('.contentContainer').css('min-height', $(window).height());
$('textarea').css('min-height', $(window).height()-145);
$("textarea").keyup(function() {   	
  $.post("updatediary.php", {diary:$("textarea").val()} );
});