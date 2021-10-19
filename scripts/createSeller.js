function createSeller(event) {
  event.preventDefault();

  const data = $('form').serialize();

  $.ajax({
    type: 'POST',
    dataType: 'json',
    url: '../controllers/sellerSignup.php',
    async: true,
    data: data,
    success: function(response) {
      if (response.success) {
        window.location.replace(`../views/homeSeller.php?name=${response.user.name}`);
      } else {
        alert('Desculpe, não foi possível realizar o cadastro. Utilize outros dados e tente novamente.');
      }
    }
  });
}
