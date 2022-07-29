// Listens to button lick with JQuery in the DOM, then if clicked, loads in a different page.
$( ".clickmeButton" ).click(function() {
    $(location).prop("href", "songs.php");
  });