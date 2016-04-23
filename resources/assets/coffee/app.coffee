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

    $('.Search__input').focus()

    isScreenLarge = window.innerWidth > 768 ? true : false
    $(window).resize ->

        if window.innerWidth > 768 and !isScreenLarge
            $('.Nav__list').css('display', 'flex')
            isScreenLarge = true

        if window.innerWidth <= 768 and isScreenLarge
            $('.Nav__list').css('display', 'none')
            isScreenLarge = false

    # open login form when pression Log In menu item
    $('.Nav__item--login').click (e) ->
        $('.Modal--login').addClass 'Modal--visible'

    # open register form when pression Sign Up menu item
    $('.Nav__item--register').click (e) ->
        $('.Modal--register').addClass 'Modal--visible'

    $('.Modal__overlay').click ->
        $('.Modal').removeClass 'Modal--visible'

    # get login and register forms

    $loginForm = $('Modal__form--login')
    $registerForm = $('Modal__form--register')

    # login ajax request
    loginRequest = $.ajax({
        url: "/login"
        method: "POST"
        data: $loginForm.serialize()
    })

    loginRequest.done (msg) ->
        console.log 'login ok'

    loginRequest.fail (jqXHR, textStatus) ->
        console.log "Request failed (login): " + textStatus


    # register ajax request
    registerRequest = $.ajax({
        url: "/register"
        method: "POST"
        data: $registerForm.serialize()
    })

    registerRequest.done (msg) ->
        console.log 'register ok'

    registerRequest.fail (jqXHR, textStatus) ->
        console.log "Request failed (register): " + textStatus

    return

