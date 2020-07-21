<!DOCTYPE html>
<html lang="pt-br">
<!-- Pagina Referente ao cadastramento de usuários no sistema-->
<head>
  <title>Cadastros</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="../_css/config.css">
  <script type="text/javascript" src="../_JavaScript/config.js"> </script> 
  <!-- bootstrapp utilizado ness sistma : versão 3.3.7 -->  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
  crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
  crossorigin="anonymous"></script>
  <!--<script language="javascript" type="text/javascript">
 // validação do dados com JS
 function validar() {
  var nome = form1.nome.value;
  var email = form1.email.value;
  var senha = form1.senha.value;
  var passaporte = form1.passaporte.value;
  var 

  if (nome == "") {
    alert('Preencha o campo com seu nome');
    form1.nome.focus();
    return false;
  }

  if (email == "") {
    alert('Preencha o campo com seu email');
    form1.email.focus();
    return false;
  }

  if (senha == "") {
    alert('Preencha o campo com sua senha');
    form1.senha.focus();
    return false;
  }

  if (rep_senha == "") {
    alert('Repita sua senha');
    form1.rep_senha.focus();
    return false;
  }

  if (nome.length < 5) {
    alert('Digite seu nome completo');
    form1.nome.focus();
    return false;
  }

  if (senha != rep_senha) {
    alert('Senhas diferentes');
    form1.senha.focus();
    return false;
  }
}
</script>
final da valizadação -->
</head>

<body id="Cadastrar">
  <div id="CadastrosLogins">

  </div>
  <h1>Cadastre-se em nosso sistema</h1>
  <form action="enviar.php " method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input type="text" class="form-control"  name="nome" placeholder="Nome">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome"  placeholder="Sobrenome e ultimo">
      </div>
    </div>
     <!-- <div class="form-group col-md-6">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" id="inputAddress"  name="endereco" placeholder="1234 Rua Tal">
      --></div>
      <div class="form-group col-md-6">
        <label>Passaporte</label>
        <input type="text" class="form-control"  name="passaporte" placeholder="Numero do Passaporte" />
      </div>
      <div class="form-row">

        <div class="form-group col-md-4">
          <label >Estado</label>
          <select  class="form-control" name="estado">
            <option> 
              <selected>


                <option> Acre AC </option>
                <option> Alagoas AL </option>
                <option> Amapá AP </option>
                <option> Amazonas AM </option>
                <option> Bahia BA </option>
                <option> Ceará CE </option>
                <option> Distrito Federal DF </option>
                <option> Espírito Santo ES </option>
                <option> Goiás GO </option>
                <option> Maranhão MA </option>
                <option> Mato Grosso MT </option>
                <option> Mato Grosso do Sul MS </option>
                <option> Minas Gerais MG </option>
                <option> Pará PA </option>
                <option> Paraíba PB </option>
                <option> Paraná PR </option>
                <option> Pernambuco PE </option>
                <option> Piauí PI </option>
                <option> Rio de Janeiro RJ </option>
                <option> Rio Grande do Norte RN </option>
                <option> Rio Grande do Sul RS </option>
                <option> Rondônia RO </option>
                <option> Roraima RR </option>
                <option> Santa Catarina SC </option>
                <option> São Paulo SP </option>
                <option> Sergipe SE </option>
                <option> Tocantins TO </option>




              </select>
            </option>

          </div>
          <div class="form-group col-md-2">
            <label>Cep:
              <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"  class="form-control" />
            </label>
            <br />
          </div>
        </div>
        <div class="form-group col-md-2">
          <label>Rua:
            <input name="rua" type="text" id="rua" size="60" class="form-control" />
          </label>
          <br />
        </div>
        <div class="form-group col-md-2">

          <label>Bairro:
            <input name="bairro" type="text" id="bairro" size="40" class="form-control" />
          </label>
          <br />
        </div>
        <div class="form-group col-md-2">
          <label>Cidade:
            <input name="cidade" type="text" id="cidade" size="40" class="form-control" />
          </label>
          <br />
        </div>
        <div class="form-group col-md-2">
          <label>UF:
            <input name="uf" type="text" id="uf" size="2" class="form-control" />
          </label>
          <br />
        </div>
        
        <div class="form-group col-md-2">
          <div class="form-check">
            <input class="form-check-input" type="text" id="gridCheck" name="Dcidadania">
            <label class="form-check-label" for="gridCheck" >
              Possui Dupla Nacionalidade
            </label>
            <button class="btn btn-default " onclick="return validar()" > Enviar e cadastrar</button>
          </div>
        </div>

        <button formaction="../index.php" class="btn btn-default" type="submit" name="button" > 
          <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Pagina Inicial  </button>


        </form>


      </body>

      </html>