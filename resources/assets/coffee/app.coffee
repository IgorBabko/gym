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
        setTimeout ( ->
            $loginForm.find('input').first().select()
        ), 100
        $('.Modal--login').addClass 'Modal--visible'

    # open register form when pression Sign Up menu item
    $('.Nav__item--register').click (e) ->
        setTimeout ( ->
            $registerForm.find('input').first().select()
        ), 100
        $('.Modal--register').addClass 'Modal--visible'

    $('.Modal__overlay').click ->
        $('.Modal').removeClass 'Modal--visible'

    # get login and register forms

    $loginForm = $('.Modal__form--login')
    $registerForm = $('.Modal__form--register')

    # login ajax request
    loginRequest = $.ajax({
        url: "/login"
        method: "POST"
        data: $loginForm.serialize()
    })

    loginRequest.done (msg) ->
        console.log 'login ok'

    loginRequest.fail (jqXHR, textStatus) ->
        updateValidErrors $loginForm, textStatus
        console.log jqXHR.responseJSON


    # register ajax request
    $('.Modal__form--register').submit (e) ->
        e.preventDefault()
     #   console.log $registerForm.serialize()

        registerRequest = $.ajax
            url: "/register"
            method: "POST"
            data: $registerForm.serialize()

        registerRequest.done (msg) ->
            console.log 'register ok'

        registerRequest.fail (response) ->
            updateValidErrors $registerForm, response.responseJSON

    updateValidErrors = ($form, validErrors) ->
        $form.find('input').each (index, input) ->
            $input = $(input)
            fieldName = $input.attr('name')
            $errorBlock = $input.next()
            if validErrors[fieldName]? and not $errorBlock.hasClass('Error')
                $(input).after '<span class="Error">' + validErrors[fieldName][0] + '</span>'
                return

            if not validErrors[fieldName]? and $errorBlock.hasClass('Error')
                $errorBlock.remove()

    return

