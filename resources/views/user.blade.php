<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/background.css') }}" />
  <title>USER!</title>
  <style>
    body {
      font-family: 'ＭＳ Ｐゴシック', 'MS PGothic', 'ヒラギノ丸ゴ ProN', 'Hiragino Maru Gothic ProN', 'Hiragino Kaku Gothic ProN', 'ヒラギノ角ゴ ProN W3', sans-serif;
      ;
    }
  </style>
</head>

<body class="back-grn">
  <div class="back-img01 mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="col-4 d-flex justify-content-center">
        <a class="navbar-brand" href="{{url('mimic')}}">30DAYSトライアル</a>
      </div>
      <div class="offset-5 col-3">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="top" class="navbar-nav mr-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">
                        新規登録</a>
                </li>
                <li class="nav-item">
                <a class="nav-link">
                        ログインページ</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
  </div>



    <form action="{{route('login')}}" method="POST" class="d-flex justify-content-center">
      @csrf
      <div class="card-for-login mt-5 mb-5" style="width: 24rem;">
        <div class="form-group mb-1">
          <label for="exampleFormControlInput1">メールアドレス</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
        </div>
        <div class="form-group mb-4">
          <label for="exampleFormControlInput1">パスワード</label>
          <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" />
        </div>
        <div>
          <button type="submit" class="btn btn-primary offset-6 col-6">ログイン</button>
        </div>
      </div>
    </form>


    <!-- <h1>Hello, world!</h1> -->
    {{-- {{ $users_data }} --}}
  </div>
  <div class="container">
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