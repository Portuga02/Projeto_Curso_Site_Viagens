<html lang="pt-br">

<head>
  <title>Contactos</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="_css/cssindex.css">
  <script type="text/javascript" src="../_JavaScript/config.js"> </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</head>

<body style="background-image: url(../_imagens/agência-de-viagens.jpg)">


  <div id="CadastrosLogins">
    
   
    
  </div>
  <section id="contact">
    <div class="form-group">
      <div class="well well-sm">
        <h3>
          <strong>Contactos</strong>
        </h3>
      </div>
      <div>
        <div class="el panel-default">
          <div class="col-md-4">
            <i class="fa fa-bar-chart-o fa-fw"> Sua Localização Actual</i>
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d63210.92304168264!2d-34.9339196!3d-8.0316148!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1526219486706"
              width="1095" height="250" frameborder="0" style="border:1px" allowfullscreen></iframe>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-5">
          <h4>
            <strong>Fale conosco</strong>
          </h4>
          <form name="form" method="POST" action="coneccaoMensagem.php">
            <div class="form-group">
              <input type="text" class="form-control" name="nome" value="" placeholder="Nome">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="telemovel" value="" placeholder="Telemovel">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="texto" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
               
            </button>
            <button formaction="../index.php" class="btn btn-default" type="submit" name="button" > 
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Pagina Inicial  </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>