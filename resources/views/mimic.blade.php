<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/background.css') }}" />
    <title>MIMIC</title>
    <style>

        #top {
            width: 500px;
        }

        body {
            font-family:'ＭＳ Ｐゴシック','MS PGothic','ヒラギノ丸ゴ ProN','Hiragino Maru Gothic ProN','Hiragino Kaku Gothic ProN','ヒラギノ角ゴ ProN W3',sans-serif;;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-4 d-flex justify-content-center">
        <a class="navbar-brand" href="{{url('sample')}}">30DAYSトライアル</a>
        </div>


        <div class="offset-2 col-6">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="top" class="navbar-nav mr-0 d-flex justify-content-between">

                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            デイトラとは <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#index">
                            コース一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">
                            お問合せ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('user')}}">
                            ログイン</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <img src="{{asset('/img/main-vsual.png')}}" style="width:100%;" alt="main-vsual.png">
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row">
                <h3 class="mt-5 bold" id="about">デイトラとは</h3>
            </div>
        </div>

        <div class="container">
            <div class="mt-4 row">
                <div class="col-6">
                    <img src="{{asset('/img/about.png')}}" style="width:100%;" alt="about.png">
                </div>
                <div class="col-6">
                    <div>
                        デイトラとは、無料で・迷わず・楽しく学べるプログラミング学習アプリです。毎日設定された課題をこなしていくだけで、未経験から30日でプログラミングスキルが身につきます。
                        <br>
                        1日1題30日でプロのWebエンジニアを目指しましょう！
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row">
                <h3 class="mt-5 bold" id="index">コース一覧</h3>
            </div>
        </div>
        <div class="card-deck">
            <div class="card mt-3">
                <img src="{{asset('/img/web_first.png')}}" class="card-img-top" alt="first">
                <div>
                    <h5 class="card-title">HTML / CSS / Bootstrap</h5>
                </div>

            </div>
            <div class="card mt-3">
                <img src="{{asset('/img/web_second.png')}}" class="card-img-top" alt="second">
                <div>
                    <h5 class="card-title">HTML / CSS / Javascript / jQuery</h5>

                </div>

            </div>
            <div class="card mt-3">
                <img src="{{asset('/img/web_third.png')}}" class="card-img-top" alt="third">
                <div>
                    <h5 class="card-title">PHP / WordPress</h5>

                </div>

            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row">
                <h3 class="mt-5 bold" id="form">お問合せ</h3>
            </div>
        </div>
        <form>
            <div class="form-group">
                <div class="d-flex justify-content-center">
                    <label for="formGroupExampleInput">さあ今日から30日間を始めよう！</label>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="text" style="width:40%; border-radius: 40px;" class="form-control" id="formGroupExampleInput"
                        placeholder="メールアドレス">
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-center">
            <button type="button" style="height: 70px; width: 400px;" class="btn btn-danger-a">無料で始める</button>
        </div>
    </div>

    <div class="container mt-5">
        <hr>
        <div class="d-flex justify-content-end mb-3">
            Copyright(C) 2020 東京フリーランス ALL Rights Reserved.
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>