<!DOCTYPE html>
<html lang="pt-br">
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

  <body>

  <div class="container">
  <div class="brand-logo"><img src="img/tucano-icone.png" width="95px"></div>
  <div class="brand-title">TUCANO</div>
  <div class="inputs">
    <form method="POST" id="login">
    <input type="text" name="username" placeholder="Usuário ou E-mail" />
    <input type="password" name="password" placeholder="Senha" />
    <button type="submit">LOGIN</button>
    <div id="linkResultado"></div>
    </form>
  </div>
</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        jQuery('#login').submit(function () {
            event.preventDefault();
            var dados = jQuery(this).serialize();
            jQuery.ajax({
                type: "POST",
                url: "funcoes/login.php",
                data: dados,
                success: function (data)
                {
                    $("#linkResultado").html(data);
                }
            });
            return false;
        });
    </script>
  </body>
</html>
