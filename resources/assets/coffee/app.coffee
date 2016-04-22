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
    $overlay = $('.Auth__overlay')
    $loginModal = $('.Auth')

    $('.Nav__item--login').click (e) ->
        $loginModal.addClass 'Auth--visible'

    $overlay.click ->
        $loginModal.removeClass 'Auth--visible'

    return

