<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle Financeiro</title>

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    
    <section>

        <div class="container">
            <img src="{{ asset('images/logo3.png') }}" alt="">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input type="text" id="nome" name="nome" placeholder="Nome">
                <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                <hr>
                <input type="text" id="email" name="email" placeholder="Email">
                <hr>
                <input id="password" type="password" name="senha" placeholder="Senha">
                <hr>
                <input id="password-confirm" type="password" name="senha_confirmation" placeholder="Confirmação de senha">

                <div class="btn">
                    <button type="submit">REGISTRAR</button>
                </div>

                @if ($errors->any())

                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach

                @endif
            </form>
        </div>

    </section>

</body>
</html>