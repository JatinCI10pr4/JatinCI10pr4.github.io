$('nav a').on('click',function(e){
    e.preventDefault();
    var url = this.href;



$('nav a.current').removeClass('current');
$(this).addClass('current');

$('#content').remove();

$('#container').load(url + '#stuff').hide().fadeIn('slow');

});