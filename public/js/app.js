(function() {
  $(function() {
    var $loginModal, $overlay, isScreenLarge, ref;
    $('.Nav__item--hamburger').click(function() {
      $('.Nav__list').toggle();
      return $('.search__input').focus().select();
    });
    $(window).keyup(function(e) {
      if (window.innerWidth <= 768 && e.keyCode === 27) {
        return $('.Nav__list').toggle();
      }
    });
    $('.Search__input').focus(function() {
      return $(this).addClass('Search__input--expanded');
    });
    $('.Search__input').blur(function() {
      return $(this).removeClass('Search__input--expanded');
    });
    $('.Search__input').focus();
    isScreenLarge = (ref = window.innerWidth > 768) != null ? ref : {
      "true": false
    };
    $(window).resize(function() {
      if (window.innerWidth > 768 && !isScreenLarge) {
        $('.Nav__list').css('display', 'flex');
        isScreenLarge = true;
      }
      if (window.innerWidth <= 768 && isScreenLarge) {
        $('.Nav__list').css('display', 'none');
        return isScreenLarge = false;
      }
    });
    $overlay = $('.Auth__overlay');
    $loginModal = $('.Auth');
    $('.Nav__item--login').click(function(e) {
      return $loginModal.addClass('Auth--visible');
    });
    $overlay.click(function() {
      return $loginModal.removeClass('Auth--visible');
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
