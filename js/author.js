
 function overlay_over() {
 	$(this).find('.title').stop(true).animate({'width':'90%'});
 }
 function overlay_out() {
 	$(this).find('.title').stop(true).animate({'width':'105%'});
 }

 $('#whole .month').mouseover(overlay_over);
 $('#whole .month').mouseout(overlay_out);

 $(function() {
    $( "#datepicker" ).datepicker();
  });


 // calandar
