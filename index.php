<html lang="pt-br">

<head>
    <title>Aero Portugal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--  Importação das bibliotecas online-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="_css/cssindex.css">
</head>
<!--Sistema Web Aero Portugal, feito em framework Bootstrapp versão 3.7 
e utiliznao metodologias rapidas -->

<body>

    <nav class="navbar navbar-inverse" style="background: ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Aero Portugal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="_paginas/contatos.php">Contatos</a>
                </li>
                <li>
                    <a href="_paginas/hoteis.php">Hoteis</a>
                </li>

                <li>
                    <a href="_paginas/reservas.php">Reservas</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="_paginas/cadastros.php">
                        <span class="glyphicon glyphicon-user"></span> Cadastre em nosso Sistema</a>
                </li>
                <li>
                    <a href="_paginas/_login.php">
                        <span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="panel panel-default col-md-12" style="background-color: darkcyan">
        <h4>Selecione às datas para seu destino</h4>
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputEmail4">Ida</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="Email">

            </div>
            <div class="form-group col-md-10">
                <label for="inputPassword4">Volta</label>
                <input type="date" class="form-control" id="" placeholder="Password">

            </div>
            <br><br><br><br><br>

            <div class="form-group col-md-10">
                <label for="inputPassword4">Só ida</label>
                <input type="checkbox">
                <input type="date" class="form-control" id="" placeholder="Password">
                <br>

                <button class="btn btn-primary">Consultar</button>
            </div>
            <br><br><br><br><br>

        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="_imagens/_lisboa/liboahd.jpg" alt="First slide" class="banner-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Belos lugares para se visitar
                            <br>Novas aventuras</h1>
                        <br>
                        <p>Visite Portugal</p>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="_imagens/_lisboa/lisboahd2.jpg" alt="Second slide" class="banner-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Folga com os gajos à qual tem respecto</h1>
                        <p>Tenha otimas férias com todos os vossos amigos e com teus familiares </p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Reserve sua passagem e aproveite</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="_imagens/_lisboa/lisboa3.jpeg" alt="First slide" class="banner-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p>Visamos sempre o melhor para si e para os que querem o vosso bem!</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Galeria de foctos</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">A frente</span>
        </a>
    </div>

    <div class="container-fluid main-text">
        <h2> Conheça mais dos nossos destinos</h2>
        <p>um mundo para explorar</p>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="_imagens/" alt="First slide" class="banner-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Belos lugares para se visitar
                            <br>Novas aventuras</h1>
                        <br>
                        <p>Visite Portugal</p>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="_imagens/_canadá/arquiteto-no-canadá-5-750x354.jpg" alt="Second slide" class="banner-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Folga com os gajos a qual tem respecto</h1>
                        <p>Tenha otimas ferias com todos os vossos amigos e com teus familiares </p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Reserve sua passagem e aproveite</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="_imagens/_eua/bandeira-dos-estados-unidos-da-america_1401-253.jpg" alt="First slide" class="banner-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p>Visamos sempre o melhor para si e para os que querem o vosso bem!</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">Galeria de foctos</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">A frente</span>
        </a>
    </div>



</body>

</html>