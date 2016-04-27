$ ->

    $('.Nav__item--hamburger').click ->
        $('.Nav__list').toggle()
        $('.search__input').focus().select()

    $(window).keyup (e) ->
        if window.innerWidth <= 768 and e.keyCode == 27
            $('.Nav__list').toggle()

    $('.Search__input').focus ->
        $(this).addClass 'Search__input--expanded'

    $('.Search__input').blur ->
        $(this).removeClass 'Search__input--expanded'

    isScreenLarge = window.innerWidth > 768 ? true : false
    $(window).resize ->

        if window.innerWidth > 768 and !isScreenLarge
            $('.Nav__list').css('display', 'flex')
            isScreenLarge = true

        if window.innerWidth <= 768 and isScreenLarge
            $('.Nav__list').css('display', 'none')
            isScreenLarge = false

    $('.Nav__item').click (e) ->
        if $(this).data('type')?
            $modal = if $(this).data('type') == 'login' then $('.Modal--login') else $('.Modal--register')
            setTimeout ( ->
                $modal.find('.Form input').first().select()
            ), 100
            $modal.addClass 'Modal--visible'

    $('.Modal__overlay').click ->
        $('.Modal').removeClass 'Modal--visible'

    # show flash message in alert
    flashMessage = $('#ohsnap').data('notify')
    if flashMessage? then ohSnap(flashMessage, {color: 'green'})

    updateValidErrors = ($form, validErrors) ->
        $form.find('input').each (index, input) ->
            $input = $(input)
            fieldName = $input.attr('name')
            $errorBlock = $input.next('.Error')
            $errorMsg = if validErrors[fieldName] then validErrors[fieldName][0] else ''
            $errorBlock.text($errorMsg)

    $('.bxslider').bxSlider
        auto: true
        pause: 5000
        mode: 'fade'
        autocontrols: true
        controls: false
        speed: 1500
#        onSliderLoad: () ->
            #console.log 'first'
#            console.log $('.Slider__info:first-child')
#        onSlideBefore: ($el) ->
#            $el.find('.Slider__info').removeClass('opaque')
#        onSlideAfter: ($el) ->
#            $el.find('.Slider__info').addClass('opaque')

    controller = new ScrollMagic.Controller()
    new ScrollMagic.Scene
            triggerElement: '.Form--question'
            triggerHook: '0.1'
            duration: '100%'
        .setPin '.Form--question'
        .addTo controller

    $('.sectio--parallax').parallax imageSrc: '/img/parallax.jpg'

    # ajax requests for metrics
    $('.Form').submit (e) ->
        e.preventDefault()

        $this = $(this)

        request = $.ajax
            url: $this.attr 'action'
            method: 'POST'
            data: $this.serialize()

        request.done (response) ->
            if $this.closest('.Modal').length != 0
                $('.Nav__item--modal').remove()
                $('.Nav__list').append '<li class="Nav__item"><a href="/profile" class="Nav__link"><span>My profile</span></a></li>'
                $('.Nav__list').append '<li class="Nav__item"><a href="/logout" class="Nav__link"><span>Logout</span></a></li>'
                ohSnap response.message, color: 'green'
                $('.Modal__overlay').trigger 'click'
            else
                updateValidErrors $this, {} 
                ohSnap response.notifyMessage, color: 'green'
                $this.next().html response.message

        request.fail (response) ->
            ohSnap response.responseJSON.message ? 'Please, fix valid errors', color: 'red'
            updateValidErrors $this, response.responseJSON

    return
