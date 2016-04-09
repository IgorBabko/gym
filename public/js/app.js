(function() {
  $(function() {
    var isScreenLarge, ref;
    $('.Nav__item--hamburger').click(function() {
      $('.Nav__list').toggle();
      return $('.Search__input').focus().select();
    });
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
  });

}).call(this);

//# sourceMappingURL=app.js.map
