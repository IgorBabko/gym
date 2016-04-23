(function() {
  $(function() {
    var $loginForm, $registerForm, isScreenLarge, loginRequest, ref, registerRequest;
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
    $('.Nav__item--login').click(function(e) {
      return $('.Modal--login').addClass('Modal--visible');
    });
    $('.Nav__item--register').click(function(e) {
      return $('.Modal--register').addClass('Modal--visible');
    });
    $('.Modal__overlay').click(function() {
      return $('.Modal').removeClass('Modal--visible');
    });
    $loginForm = $('Modal__form--login');
    $registerForm = $('Modal__form--register');
    loginRequest = $.ajax({
      url: "/login",
      method: "POST",
      data: $loginForm.serialize()
    });
    loginRequest.done(function(msg) {
      return console.log('login ok');
    });
    loginRequest.fail(function(jqXHR, textStatus) {
      return console.log("Request failed (login): " + textStatus);
    });
    registerRequest = $.ajax({
      url: "/register",
      method: "POST",
      data: $registerForm.serialize()
    });
    registerRequest.done(function(msg) {
      return console.log('register ok');
    });
    registerRequest.fail(function(jqXHR, textStatus) {
      return console.log("Request failed (register): " + textStatus);
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
