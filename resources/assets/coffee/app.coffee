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

    $('.Nav__item').click (e) ->
        $modal = if $(this).data('type') == 'login' then $('.Modal--login') else $('.Modal--register')
        setTimeout ( ->
            $modal.find('.Modal__form input').first().select()
        ), 100
        $modal.addClass 'Modal--visible'

    $('.Modal__overlay').click ->
        $('.Modal').removeClass 'Modal--visible'

    $('.Modal__form').submit (e) ->
        e.preventDefault()

        $this = $(this)

        if $(this).closest('.Modal').hasClass('Modal--register')
            url = '/register'
        else
            url = '/login'

        request = $.ajax
            url: url
            method: "POST"
            data: $(this).serialize()

        request.done (msg) ->
            $('.Modal__overlay').trigger('click')

        request.fail (response) ->
            updateValidErrors $this, response.responseJSON

    updateValidErrors = ($form, validErrors) ->
        $form.find('input').each (index, input) ->
            $input = $(input)
            fieldName = $input.attr('name')
            $errorBlock = $input.next('.Error')
            $errorMsg = if validErrors[fieldName] then validErrors[fieldName][0] else ''
            $errorBlock.text($errorMsg)

    return

