function loginClient(event) {
  event.preventDefault();

  const data = $('form').serialize();

  $.ajax({
    type: 'POST',
    dataType: 'json',
    url: 'controllers/loginClient.php',
    async: true,
    data: data,
    success: function(response) {
      if (response.success) {
        window.location.replace(`views/homeClient.php?name=${response.user.name}`);
      } else {
        alert('Desculpe, não foi possível realizar o login. Utilize outros dados e tente novamente.');
      }
    }
