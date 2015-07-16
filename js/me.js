$(document).ready(function()
{
  $('.work').show;
  $('.aboutMe').hide();
  $('.contact').hide();
  
  $('#work').click(function()
  {
    $('.work').show(1500);
    $('.aboutMe').hide();
    $('.contact').hide();

  });

  $('#me').click(function () 
  {
    $('.aboutMe').show(1500);
    $('.work').hide();
    $('.contact').hide();
  });

  $('#contact').click(function () 
  {
    $('.contact').show(1500);
    $('.work').hide();
    $('.aboutMe').hide();
  });

  $('#html').click(function ()
  {
    $('#project').css
    ({ 
        'display' : 'block',
        'width' : '100%'
    });
  });

});

//$(window).width();