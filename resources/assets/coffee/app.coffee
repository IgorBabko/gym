$ ->

    $('.Nav__item--hamburger').click ->
        $('.Nav__list').toggle()
        $('.Search__input').focus().select()

    $(window).keyup (e) ->
        if window.innerWidth <= 768 and e.keyCode == 27
            $('.Nav__list').toggle()

    isScreenLarge = window.innerWidth > 768 ? true : false
    $(window).resize ->

        if window.innerWidth > 768 and !isScreenLarge
            $('.Nav__list').css('display', 'flex')
            isScreenLarge = true

        if window.innerWidth <= 768 and isScreenLarge
            $('.Nav__list').css('display', 'none')
            isScreenLarge = false

    return