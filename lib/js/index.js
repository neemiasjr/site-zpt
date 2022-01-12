$(document).ready(function () {
  let frm = $('#formBuscarProduto')
  frm.submit(function (e) {
    $.ajax({
      type: 'POST',
      url: 'controller/produto.php',
      data: frm.serialize(),
      success: function (data) {
        console.log('Submission was successful.')
        console.log(data)
      },
      error: function (data) {
        console.log('An error occurred.')
        console.log(data)
      },
    });
  });
});
