$(document).ready(function(){

$('.zapis_kurs').click(function(){
	yaCounter1365843.reachGoal('');
       ga('send', 'pageview','');
});

$('.zapisat').click(function(){
	yaCounter1365843.reachGoal('knopkazapisi');
ga('send', 'pageview','/knopkazapisi');
});
$('.submit-btn').click(function(){
yaCounter1365843.reachGoal('uspeshnayazapis');
ga('send', 'pageview','/uspeshnayazapis');
})


$('.btn_slide').click(function(){
yaCounter1365843.reachGoal('skidka');
ga('send', 'pageview','/skidka');
	
})


$('.zapisat.zapis').click(function(){
ga('send', 'pageview','/otpravitzapiskurs');
})

$('.zakazzvon').click(function(){
yaCounter1365843.reachGoal('otpravit');
})



$('.zapis_kurs').click(function(){
yaCounter1365843.reachGoal('otpravitzapiskurs');
})

});