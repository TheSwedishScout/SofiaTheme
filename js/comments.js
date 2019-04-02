jQuery('document').ready(function ($) {
  // Get the comment form
  var commentform = $('#commentform');
  // Add a Comment Status message
  commentform.prepend('<div id="comment-status" ></div>');
  // Defining the Status message element 
  var statusdiv = $('#comment-status');
  commentform.submit(function () {
    // Serialize and store form data
    var formdata = commentform.serialize();
    //Add a status message
    statusdiv.html('<p class="ajax-placeholder">Jobbar på det...</p>');
    //Extract action URL from commentform
    var formurl = commentform.attr('action');
    //console.log(formurl);
    //Post Form with data
    $.ajax({
      type: 'post',
      url: formurl,
      data: formdata,
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        statusdiv.html('<p class="ajax-error" >Du kan ha lämnat ett fält blankt, eller så var du lite för snabb.</p>');
      },
      success: function (data, textStatus) {
        // console.log(textStatus)
        if (textStatus == "success")
          statusdiv.html('<p class="ajax-success" >Tack för din kommentar.</p>');
        else
          statusdiv.html('<p class="ajax-error" >Vänligen vänta lite innan din nästa kommentar</p>');
        commentform.find('textarea[name=comment]').val('');
      }
    });
    return false;
  });
});