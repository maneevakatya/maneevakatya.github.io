$(document).ready(function() {  
  $('ul.ntabs').each(function() {
    $(this).find('li').each(function(i) {
      $(this).click(function() {
        $(this).addClass('active').siblings().removeClass('active');
        var p = $(this).parents('div.ntabs_container');
        p.find('div.ntab_container').hide();
        p.find('div.ntab_container:eq(' + i + ')').show();
      });
    });
  });
})