<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url("node_modules/bootstrap/dist/css/bootstrap.min.css ") ?>">
    <link rel="stylesheet" href="<?= base_url("node_modules/font-awesome/css/font-awesome.min.css ") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css ")?>">

   
    <title>Document</title>
</head>

<body>
    <header>

        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Title</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

    </header>

    <div class="jumbotron">

        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon
                                buttons on the left and right might not load/display properly due to web browser security
                                rules.
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

        <div class="container">

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h4>yolo</h4>
                <i class="fa fa-bug" aria-hidden="true"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid nostrum magni est, accusantium reprehenderit
                    non tempora deserunt ea mollitia quasi, voluptatum odio quam! Minima dolor, fugiat quidem, voluptate
                    dolorem iure.</p>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h4>yolo</h4>
                <i class="fa fa-bug" aria-hidden="true"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid nostrum magni est, accusantium reprehenderit
                    non tempora deserunt ea mollitia quasi, voluptatum odio quam! Minima dolor, fugiat quidem, voluptate
                    dolorem iure.</p>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h4>yolo</h4>
                <i class="fa fa-bug" aria-hidden="true"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid nostrum magni est, accusantium reprehenderit
                    non tempora deserunt ea mollitia quasi, voluptatum odio quam! Minima dolor, fugiat quidem, voluptate
                    dolorem iure.</p>
            </div>

            <!--END CONTAINER-->
        </div>
        <!--END JUMBOTRON-->
    </div>

    <div class="jumbotron">
        <div class="container">
            <footer id="footerarnault">
                <ul class="nav navbar-nav navbar-left nav_footer">
                    <li class="facebook"><a href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                <span></span></a></li>
                    <li class="twitter"><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
                <span></span></a></li>
                    <li class="youtube"><a href="#" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i>
                <span></span></a></li>
                    <li class="actu_footer"><a href="#" title="Actu"><i class="fa fa-rss" aria-hidden="true"></i>
                <span></span></a></li>
                </ul>



                <div id="copyright">
                    <p>Copyright Molengeek 2017</p>
                </div>
                <div id="subscrite" class="pull-right">
                    <p>Subscribe to the Newsletter: </p>
                    <button type="button" class="btn btncontact" id="buttonfoot" data-toggle="modal" data-target="#myModal">Je m'inscris</button>
                </div>


                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Suivez toute l'actualité de Françoise Schepmans</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="" placeholder="Votre email*">
                                        <input type="text" class="form-control" id="" placeholder="Prénom">
                                        <input type="text" class="form-control" id="" placeholder="nom">
                                    </div>
                                    <div class="col-md-12">
                                        <h6><small>*  Champ requis</small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btncar">S'inscrire</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



                <br>
            </footer>
        </div>
    </div>


    <script src="<?= base_url ("/node_modules/jquery/dist/jquery.js ") ?>"></script>
    <script src="<?= base_url ("/node_modules/bootstrap/dist/js/bootstrap.min.js ") ?>"></script>
</body>

</html>