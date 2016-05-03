(function() {
  $(function() {
    var editor, textarea;
    if (document.querySelector('textarea')) {
      textarea = document.querySelector('textarea');
      editor = CodeMirror.fromTextArea(textarea, {
        lineNumbers: true
      });
    }
    $('.delete-page-button').click(function(e) {
      var pageSlug;
      pageSlug = $(this).data('slug');
      return $('.confirm-delete-form').attr('action', "/dashboard/pages/" + pageSlug);
    });
  });

}).call(this);

//# sourceMappingURL=app_dashboard_custom.js.map
