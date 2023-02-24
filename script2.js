$('.js-heart').on('click', function(e){
  e.preventDefault();
  $(this).find('.js-heart-icon').toggleClass('fa-heart-o fa-heart');
});

$('.js-delete-filter').on('click', function() {
  $(this).parent().hide();
});