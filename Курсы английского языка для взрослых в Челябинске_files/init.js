function execEULA(){
	$.fancybox.open({
		href : '/assets/files/eula.pdf',
		type : 'iframe',
		padding : 5,
		'width': '70%',		
		'margin-top': '50px',		
		'margin-bottom': '50px'
	});
}
function initEULA(){
	$('.click4eula').bind('click tap',function(){
		execEULA();
	});
}
$(document).ready(function(){
	initEULA();
})