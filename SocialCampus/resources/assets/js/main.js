$(function(){
  $("a[data-action=submit], button[data-action=submit]").click(function(e){
    e.preventDefault();
    var submitForm = "form#"+$(this).attr('data-target');
    $(submitForm).submit();
  });
});
