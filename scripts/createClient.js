function createClient(event) {
  event.preventDefault();

  const data = $('form').serialize();

  $.ajax({
    type: 'POST',
    dataType: 'json',
    url: 'controllers/clientSignup.php',
    async: true,
    data: data,
    success: function(response) {
      if (response.success) {
        window.location.replace(`views/homeClient.php?name=${response.user.name}`);
      } else {
        alert('Desculpe, não foi possível realizar o cadastro. Utilize outros dados e tente novamente.');
      }
    }
  });
}