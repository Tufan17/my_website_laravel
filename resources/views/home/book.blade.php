<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@extends('layouts.app')

@section('content')
    <body class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static  menu-expanded pace-done">
    <div class="row justify-content-center"
         style="width: 15% ; height: 100%; background-color: ghostwhite ; margin: 0 ;float: left">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item active"><a class="nav-link active" href="/home">
                    Yönetici Paneli</a></li>
            <li class="nav-item active"><a class="nav-link active" href="/book">
                    Kitaplar</a></li><li class="nav-item active"><a class="nav-link active" href="/new_user">
                    Kullanıcı Ekle</a></li>
            <li class="nav-item active"><a class="nav-link active" href="new_book">
                    Kitap Ekle</a></li>
            <li class="nav-item active"><a class="nav-link active" href="edit_book">
                    Kitap Düzenle</a></li>
            <li class="nav-item active"><a class="nav-link active" href="delete_book">
                    Kitap Sil</a></li>
        </ul>
    </div>

    <div class="col align-self-center" style="width: 85% ; height: 100% ; alignment: center;float: left">
        <h1 class="ml-5"> Kitaplar </h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kitap</th>
                <th scope="col">Yazar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->writer}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    </body>

@endsection
