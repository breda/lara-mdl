$(function() {
  // Search field
  $('main').on('click', function() { $('#search-field').removeClass('is_active'); });
  $('#search-field-trigger').on('click', function(e) {
    $('#search-field').toggleClass('is_active').find('input').focus();
  });

  // Fix the hamburger icon
  var naviconInterval = setInterval(function() {
    $target = $('.mdl-layout__drawer-button i');

    $target.removeClass('material-icons').addClass('fa fa-navicon').text('');
    if($target.hasClass('fa')) // Done, now clear.
      clearInterval(naviconInterval); 
  }, 100);
});