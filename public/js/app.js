(function() {
  $(function() {
    var controller, flashMessage, isScreenLarge, ref, updateValidErrors;
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
    $('.Nav__item').click(function(e) {
      var $modal;
      if ($(this).data('type') != null) {
        $modal = $(this).data('type') === 'login' ? $('.Modal--login') : $('.Modal--register');
        setTimeout((function() {
          return $modal.find('.Form input').first().select();
        }), 100);
        return $modal.addClass('Modal--visible');
      }
    });
    $('.Modal__overlay').click(function() {
      return $('.Modal').removeClass('Modal--visible');
    });
    flashMessage = $('#ohsnap').data('notify');
    if (flashMessage != null) {
      ohSnap(flashMessage, {
        color: 'green'
      });
    }
    $('.Modal .Form').submit(function(e) {
      var $this, request, url;
      e.preventDefault();
      $this = $(this);
      if ($this.closest('.Modal').hasClass('Modal--register')) {
        url = '/register';
      } else {
        url = '/login';
      }
      request = $.ajax({
        url: url,
        method: "POST",
        data: $this.serialize()
      });
      request.done(function(response) {
        $('.Nav__item--modal').remove();
        $('.Nav__list').append('<li class="Nav__item"><a href="/profile" class="Nav__link"><span>My profile</span></a></li>');
        $('.Nav__list').append('<li class="Nav__item"><a href="/logout" class="Nav__link"><span>Logout</span></a></li>');
        ohSnap(response.message, {
          color: 'green'
        });
        return $('.Modal__overlay').trigger('click');
      });
      return request.fail(function(response) {
        var ref1;
        ohSnap((ref1 = response.responseJSON.message) != null ? ref1 : 'Please, fix valid errors', {
          color: 'red'
        });
        return updateValidErrors($this, response.responseJSON);
      });
    });
    updateValidErrors = function($form, validErrors) {
      return $form.find('input').each(function(index, input) {
        var $errorBlock, $errorMsg, $input, fieldName;
        $input = $(input);
        fieldName = $input.attr('name');
        $errorBlock = $input.next('.Error');
        $errorMsg = validErrors[fieldName] ? validErrors[fieldName][0] : '';
        return $errorBlock.text($errorMsg);
      });
    };
    $('.bxslider').bxSlider({
      auto: true,
      pause: 5000,
      mode: 'fade',
      autocontrols: true,
      controls: false,
      speed: 1500
    });
    controller = new ScrollMagic.Controller();
    new ScrollMagic.Scene({
      triggerElement: '.Form--question',
      triggerHook: '0.1',
      duration: '100%'
    }).setPin('.Form--question').addTo(controller);
    $('.sectio--parallax').parallax({
      imageSrc: '/img/parallax.jpg'
    });
  });

}).call(this);

//# sourceMappingURL=app.js.map
