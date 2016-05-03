$ ->

    # dashboard
    if document.querySelector('textarea')
        textarea = document.querySelector('textarea')

        editor = CodeMirror.fromTextArea(textarea, {
            lineNumbers: true
        })

    return
