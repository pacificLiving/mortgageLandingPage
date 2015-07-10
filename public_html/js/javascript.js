$(function() {

// Formats the user's numerical input with commas separating the thousands while they're typing it in.
$('.numberToComma').on('keyup', function() {
  var unformattedText = this.value; // Selects the input that triggered the event listener.
  noCommaText = unformattedText.replace(/,/g, ''); // Strips out all existing commas.
  formattedText = noCommaText.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // Adds commas when numerical characters are followed by exactly three consecutive numerical characters.
  this.value = formattedText; // Replaces the input field's value with the newly-formatted string.
});

});
