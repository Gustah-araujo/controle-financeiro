<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle Financeiro</title>

    <link rel="stylesheet" href="{{ asset('css/pass_email.css') }}">
</head>
<body>

    <section>

        <div class="container">
            <img src="{{ asset('images/logo3.png') }}" alt="">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <h2>Digite o email de sua conta para enviarmos um link para que possa resetar sua senha:</h2>

                <input type="text" name="email" id="email" placeholder="Email" autocomplete="email">

                <div class="break"></div>

                <div class="btn">
                    <button type="submit">ENVIAR LINK</button>
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
