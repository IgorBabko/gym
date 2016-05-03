(function() {
  $(function() {
    var editor, textarea;
    textarea = document.querySelector('textarea');
    editor = CodeMirror.fromTextArea(textarea, {
      lineNumbers: true
    });
    console.log('dashboard');
  });

}).call(this);

//# sourceMappingURL=app_dashboard_custom.js.map
