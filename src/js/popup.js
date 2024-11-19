$(document).ready(function(){
    let closePopup = $('#close_popup');
    let modalPopup = $('#modal_popup');
  
    closePopup.on('click', function() {
      modalPopup.css("display", "none");
    });

    // Cacher la popup si le clic est en dehors de modalPopup
    $(document).on('click', function(event) {
        if (!$(event.target).closest('#content_popup').length && !$(event.target).is('#close_popup')) {
            modalPopup.css("display", "none");
        }
    })
});