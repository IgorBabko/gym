$ ->

    # dashboard
    textarea = document.querySelector('textarea')

    editor = CodeMirror.fromTextArea(textarea, {
        lineNumbers: true
    });


    console.log 'dashboard'

    return
