<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle Financeiro</title>

    <link rel="stylesheet" href="{{ asset('css/pass_reset.css') }}">
</head>
<body>

    <section>

        <div class="container">
            <img src="{{ asset('images/logo3.png') }}" alt="">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <h2>Use os campos abaixo para alterar sua senha</h2>

                <input type="text" name="email" id="email" placeholder="Email" autocomplete="email">
                <hr>
                <input id="senha" type="password" name="password" placeholder="Senha">
                <hr>
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmação de senha">

                <div class="break"></div>

                <div class="btn">
                    <button type="submit">ALTERAR SENHA</button>
                </div>

                @if ($errors->any())

                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach

                @endif
            </form>
            <a href="{{ route('register') }}">Ainda não tem conta?</a>

            <a href="{{ route('password.update') }}">Esqueceu a senha?</a>
        </div>

    </section>

</body>
</html>
