$(document).ready(function () {

$('#formComprar').on('click', function(e){

  $.ajax({
    type: "POST",
    url: actionUrl,
    data: form.serialize(), // serializes the form's elements.
    success: function(data)
    {
      alert(data); // show response from the php script.
    }
  });
});

}