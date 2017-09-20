$(document).ready(function(){
$('.page2').css('display','none');
$('.page3').css('display','none');
$('.pagenation > li:nth-child(1)').css('color','black');

$('.pagenation > li:nth-child(1)').click(function(){
$('.page1').css('display','block');
$('.page2').css('display','none');
$('.page3').css('display','none');
$(this).css('color','black');
$('.pagenation > li:nth-child(2)').css('color','#c41f74');
$('.pagenation > li:nth-child(3)').css('color','#c41f74');
})
$('.pagenation > li:nth-child(2)').click(function(){
$('.page1').css('display','none');
$('.page2').css('display','block');
$('.page3').css('display','none');
$(this).css('color','black');
$('.pagenation > li:nth-child(1)').css('color','#c41f74');
$('.pagenation > li:nth-child(3)').css('color','#c41f74');
})
$('.pagenation > li:nth-child(3)').click(function(){
$('.page1').css('display','none');
$('.page2').css('display','none');
$('.page3').css('display','block');
$(this).css('color','black');
$('.pagenation > li:nth-child(1)').css('color','#c41f74');
$('.pagenation > li:nth-child(2)').css('color','#c41f74');

})


$('.fancy').fancybox();


})

