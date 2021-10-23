<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle Financeiro</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <section>

        <div class="container">
            <img src="{{ asset('images/logo3.png') }}" alt="">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="text" name="email" id="email" placeholder="Email" autocomplete="email">
                <hr>
                <input id="senha" type="password" name="password" placeholder="Senha" autocomplete="current-password">
                <br>
                <label for="remember">Manter conectado</label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <div class="break"></div>

                <div class="btn">
                    <button type="submit">ACESSAR</button>
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
