<!--
Para funcionar o background geral com o background do app.blade, tem que colocar o comando abaixo nas abas que quer modificar o backgroud, 
e alterar o background no css também, só com os dois pra funcionar
-->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        background-image: url(https://wallpaperscraft.com/image/light_faded_background_85547_2560x1600.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel do Usuário</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Acesso liberado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
