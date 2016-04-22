$ ->

    $('.Nav__item--hamburger').click ->
        $('.Nav__list').toggle()
        $('.Search__input').focus().select()

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

    return
