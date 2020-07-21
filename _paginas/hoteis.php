<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reserva de Hoteis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
                    <h2>Reserve sua estadia nos Hoteis</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                    <div class="tour-booking-form">
                        <form>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <h4 class="tour-form-title">Detalhes dos locais</h4>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="select">Destination</label>
                                        <div class="select">
                                            <select id="select" name="select" class="form-control">
                                                <option value="">América do Norte</option>
                                                <option value="">América do Sul</option>
                                                <option value="">America Central</option>
                                                <option value="">Europa</option>
                                                <option value="">Asia</option>
                                                <option value="">Oriente Médio</option>
                                                <option value="">Ocêania</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="datepicker">Check in</label>
                                        <div class="input-group">
                                            <input id="datepicker" name="datepicker" type="date" placeholder="Date" class="form-control" required>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="select">Quantidade de pessoas:</label>
                                        <div class="select">
                                            <select id="select" name="select" class="form-control">
                                                <option value="">Numero de pessoas</option>
                                                <option value="">01</option>
                                                <option value="">02</option>
                                                <option value="">03</option>
                                                <option value="">04</option>
                                                <option value="">05</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label required" for="select">Orçamentos</label>
                                        <div class="select">
                                            <select id="select" name="select" class="form-control">
                                                <option value="">Padrão</option>
                                                <option value="">Padrão</option>
                                                <option value="">Padrão</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                    <h4 class="tour-form-title">
                                        Seu detalhe do plano de viagem</h4>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Nome</label>
                                        <input id="name" type="text" placeholder="First Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email"> Email</label>
                                        <input id="email" type="text" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="phone"> Telemovel</label>
                                        <input id="phone" type="text" placeholder="(222) 222-2222" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="country">País</label>
                                        <input id="country" type="text" placeholder="India" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="city">Cidade</label>
                                        <input id="city" type="text" placeholder=" Recife" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">
                                            Descreva seus requisitos de viagem</label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="Descreva seus requisitos de viagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button type="submit" name="singlebutton" class="btn btn-primary">Requerer</button> <br/>
                                   </div>
                            </div>
                        <div>
                           
                        
                        </div><br/><br/><br/>
                        </form>
                    <form>
                    <button formaction="../index.php" class="btn btn-primary" type="submit" name="" > 
                                <i class="fa fa-paper-plane-o" aria-hidden="false"></i> Pagina Inicial  </button>
                    </form>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center mt20">
                    Criado por Sávio Gomes da silva
                   
                </div>
            </div>
        </div>
    </div>
</body>

</html>