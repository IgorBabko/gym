$ ->

    # dashboard
    if document.querySelector('textarea')
        textarea = document.querySelector('textarea')

        editor = CodeMirror.fromTextArea(textarea, {
            lineNumbers: true
        })


    $('.delete-page-button').click (e) ->
        pageSlug = $(this).data('slug')
        $('.confirm-delete-form').attr 'action', "/dashboard/pages/#{pageSlug}"

    return
