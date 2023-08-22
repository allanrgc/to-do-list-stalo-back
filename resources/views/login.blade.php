<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
</head>
<body style="display: flex; padding: 20px; align-items:center; flex-direction:column">
    <h1>Bem vindo</h1>
    <div style="justify-content: center; align-items: center; border-color: '#d5d5d5'; border-radius: 10px; margin: 15px; margin-bottom: 30px; height: 200px; width: 300px;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div style="flex-direction: 'row'; align-items: center; margin-bottom: 15px;">
                <input style="text-align:left; padding:0 30px border-width: 1px; border-color: #d5d5d5; width: 327px; height: 56px; border-radius: 45px;" type="email" id="email" placeholder="Email" />
            </div>
            <div style="flex-direction: 'row'; align-items: center; margin-bottom: 15px;">
                <input style="text-align:left; padding:0px 30px border-width: 1px; border-color: '#d5d5d5'; width: 327px; height: 56px; border-radius: 45px;" type="password" id="password" placeholder="Password" />
            </div>
            <div style="display:flex; width:327px; height:56px; margin-top: 20px; background-color: #00000000; justify-content: right;">
                <a href="" style="text-align:right; margin-bottom:30px; text-decoration:none; color:black">Esqueceu a senha?</a>
            </div>
            <div style="display:flex; width:327px; height:56px; margin-top: 20px; background-color: #1fcc79; border-radius: 45px; justify-content: center; margin-bottom: 50px;">
                <button type="submit" style="border: none; background: none; color: white; font-size: 21px">Login</button>
            </div>
            <div style="color: #400303; height: 200px; width: 300px; margin-top: 5px; text-align:center">
                <p>Não tem conta? <a style="fontSize: 15px; color:#1fcc79">Criar conta</a></p>
            </div>
        </form>
    </div>
</body>
</html>
