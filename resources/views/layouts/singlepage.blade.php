
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <title>Ofertas Rei das Vendas.</title>

        <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ url('css/coming-sssoon.css') }}" rel="stylesheet" />

        <!--     Fonts     -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

    </head>

    <body>
        <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a target="_blank" href="https://wa.me/5588999272210?text=Quero saber mais sobre ofertas.">
                                <i class="fa-brands fa-whatsapp"></i>
                                Whatsapp
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ config('app.facebook') }}">
                                <i class="fa fa-facebook-square"></i>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ config('app.instagram') }}">
                                <i class="fa fa-instagram"></i>
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a  target="_blank" href="{{ config('app.sitealt') }}">
                                <i class="fa fa-gift"></i>
                                Ofertas
                            </a>
                        </li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        <div class="main" style="background-image: url('{{ url('images/default.jpg') }}')">

            <!--    Change the image source '/images/default.jpg' with your favourite image.     -->

            <div class="cover black" data-color="black"></div>

            <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

            <div class="container">
                <h1 class="logo cursive">Paulo Vitor</h1>
                <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->

                <div class="content">
                    @if ('welcome' == $component ?? 'welcome')
                    <h4 class="motto">As melhores ofertas com preço imbativel todos os dias.</h4>
                    @endif
                    @if ('linkfail' == $component ?? 'welcome')
                    <h4 class="motto">{{ $message }}</h4>
                    @endif
                    @if ('exception' == $component ?? 'welcome')
                    <h4 class="motto">{{ $message }}</h4>
                    @endif
                    <div class="subscribe">
                        <h5 class="info-text">
                            Faça parte de nosso grupo no whatsapp e inscreva-se em nossa newsletters
                        </h5>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Email</label>
                                        <input type="email" class="form-control transparent" placeholder="Seu melhor email...">
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-fill">Registrar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="{{ url('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>

</html>
