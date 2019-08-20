<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EstasifashionReply_AR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Font-Awesome -->
        <script src="https://kit.fontawesome.com/122eaf82dd.js"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .nav{
              max-width: 100%;
              height: 150px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left{
              position: absolute;
              left: 20px;
            }

            .top-right {
                position: absolute;
                right: 20px;
            }

            .content {
                text-align: center;
            }

            .img_item{
              display: none;
              margin: 0 auto;
            }

            .testo_img{
              position: absolute;
              top: 50%;
              left: 25%;
              transform: translateY(-50%);
            }

            i{
              position: absolute;
              top: 50%;
              transform: translateY(-50%);
              background-color: rgba(0, 0, 0, 0.3);
              color: black;
              padding: 3px;
              cursor: pointer;
            }

            .prev{
              left: 5%;
            }

            .next{
              right: 5%;
            }

            .visible{
              display: block;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .top-left img{
              height: 100px;
            }

        </style>
    </head>
    <body>
        <div class="nav flex-center position-ref">
          <div class="top-left links">
            <a href="https://www.estasifashion.it/"><img src="https://www.estasifashion.it/media/logo/websites/1/logo_1_trasparente.png" alt="logo" class="img-rounded center-block"></a>
          </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/shoes') }}">HOME</a>
                    @else
                        <a href="{{ route('login') }}">ACCEDI</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">REGISTRATI</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="content">
          <div class="container py-4">
            <div class="row d-flex flex-column justify-content-center position-ref">
              <i class="fas fa-angle-double-left fa-3x prev"></i>

              <div class="img_item p-3 visible">
                <img src="https://www.estasifashion.it/media/codazon/slideshow/cache/1900x730/b/a/banner_home_8.jpg">
                <div class="testo_img d-flex flex-column justify-content-center visible">
                  <p>Nuova collezione...</p>
                  <h2 class="p-2">NUOVI ARRIVI SS19</h2>
                  <a href="#">Scoprila ora</a>
                </div>
              </div>

              <div class="img_item p-3">
                <img src="https://www.estasifashion.it/media/codazon/slideshow/cache/1900x730/b/a/banner_home_30.jpg">
                <div class="testo_img d-flex flex-column justify-content-center visible">
                  <p>Scopri i prodotti in promozione!</p>
                  <h2 class="p-2">SALDI FINO AL 50%</h2>
                  <a href="#">Guarda ora</a>
                </div>
              </div>

              <i class="fas fa-angle-double-right fa-3x next"></i>
            </div>
          </div>
        </div>
      <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>
