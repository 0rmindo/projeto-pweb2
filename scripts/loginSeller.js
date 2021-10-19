function loginSeller(event) {
  event.preventDefault();

  const dados = $('form').serialize();

  $.ajax({
    type: 'POST',
    dataType: 'json',
    url: '../controllers/loginSeller.php',
    async: true,
    data: dados,
    success: function(response) {
      if (response.success) {
        window.location.replace(`../views/homeSeller.php?name=${response.user.name}`);
      } else {
        alert('E-mail e/ou senha estão incorretos.');
      }
    }
  });
}
