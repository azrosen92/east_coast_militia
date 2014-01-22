$(function() {
  //$(".news-link").draggable();
  
  $(".news-link").click(function() {
    var content = $($(this).parents()[1]).children()[2].innerHTML;
    var dialog = "<div id='dialog'>" + content + "</div>";
    $(this).append(dialog);
    //console.log($('#dialog'));
    $('#dialog').dialog({
      autoOpen: true,
      show: {
        effect: "explode",
        duration: 1000
      },
      hide: {
        effect: "fade",
        duration: 1000
      },
      position: {
        my: "center",
        at: "center",
        of: $(this).parents()[3]
      }, 
    });
  });

});
