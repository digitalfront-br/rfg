@extends('layouts.appDash')

@section('content')
<form action="" method="post">

    <div class="uk-margin">
        <h1><input type="text" class="uk-input uk-form-large" placeholder="Titulo"></h1>
    </div>
    <div class="uk-margin">
        <div uk-form-custom>
            <input type="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Capa</button>
        </div>
        <div uk-form-custom>
            <input type="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Miniatura</button>
        </div>
    </div>
    <div class="uk-margin">
        <p><textarea class="uk-textarea" placeholder="Descrição" cols="30" rows="10"></textarea></p>
    </div>
    <div class="uk-margin uk-text-right">
        <button class="uk-button uk-button-primary">Salvar</button>
    </div>
</form>
@endsection
