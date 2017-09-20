
$(document).on('click', '#form-dscallme input[type="submit"]', function(){
   	 ga('send', 'pageveiw', '/otpravit');  
  console.log('ok-feedback');
});
$(document).on('click', '.table_raspisanie p.zapisat', function(){
ga('send', 'pageveiw', '/knopkazapisi');
yaCounter1365843.reachGoal('knopkazapisi'); 
console.log('ok-feedback');
});
$(document).on('click', '.top-ba-ten button[data-dspopup-id="dssignup"]', function(){
   ga('send', 'pageveiw', '/klikzapiskurs');  
  console.log('ok-feedback');
});
$(document).on('click', '#u22310-171', function(){
 ga('send', 'pageveiw', '/uspeshnayazapis');  
  console.log('ok-feedback');
});

