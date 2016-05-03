(function() {
  $(function() {
    var editor, textarea;
    if (document.querySelector('textarea')) {
      textarea = document.querySelector('textarea');
      editor = CodeMirror.fromTextArea(textarea, {
        lineNumbers: true
      });
    }
  });

}).call(this);

//# sourceMappingURL=app_dashboard_custom.js.map
