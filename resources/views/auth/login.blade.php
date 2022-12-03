<style>
    body{
        background: #F5FBFF;
    }
    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .flex-div {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .name-content {
        margin-right: 7rem;
    }

    .name-content .logo {
        font-size: 3.5rem;
        color: #1877f2;
    }

    .name-content p {
        font-size: 1.3rem;
        font-weight: 500;
        margin-bottom: 5rem;
    }

    form {
        display: flex;
        flex-direction: column;
        background: #fff;
        padding: 2rem;
        width: 350px;
        height: 210px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    }

    form input {
        outline: none;
        padding: 14px 16px;
        margin-bottom: 0.8rem;
        font-size: 1.3rem;
        border: 1px solid #dddfe2;
        border-radius: 6px;
    }

    form input:focus {
        border: 1.8px solid #1877f2;
    }

    form .login {
        background-color: #294E9E;
        color: #ffffff;
        font-size: 1.2em;
        transition: 0.3s;
        padding: 6px 12px;
        font-weight: 400;
        line-height: 48px;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;

    }

    form .login:hover {
        background: orange;
        cursor: pointer;

    }

    form a {
        text-decoration: none;
        text-align: center;
        font-size: 1rem;
        padding-top: 0.8rem;
        color: #1877f2;
    }

    form hr {
        background: #f7f7f7;
        margin: 1rem;
    }

    form .create-account {
        outline: none;
        border: none;
        background: #06b909;
        padding: 0.8rem 1rem;
        border-radius: 0.4rem;
        font-size: 1.1rem;
        color: #fff;
        width: 75%;
        margin: 0 auto;
    }

    form .create-account:hover {
        background: #03ad06;
        cursor: pointer;
    }
    .img{
        width: 30vw;
    }

    /* //.........Media Query.........// */

    @media (max-width: 500px) {
        html {
            font-size: 60%;
        }

        .name-content {
            margin: 0;
            text-align: center;
        }

        form {
            width: 300px;
            height: fit-content;
        }

        form input {
            margin-bottom: 1rem;
            font-size: 1.5rem;
            border-radius: 8px;
        }

        form .login {
            font-size: 2rem;
        }

        form a {
            font-size: 1.5rem;
        }

        form .create-account {
            font-size: 1.5rem;
        }

        .flex-div {
            display: flex;
            flex-direction: column;
        }
        .img{
            width: 100%;
        }
    }

    @media (min-width: 501px) and (max-width: 768px) {
        html {
            font-size: 60%;
        }

        .name-content {
            margin: 0;
            text-align: center;
        }

        form {
            width: 300px;
            height: fit-content;
        }

        form input {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        form .login {
            font-size: 2rem;
        }

        form a {
            font-size: 1.5rem;
        }

        form .create-account {
            font-size: 1.5rem;
        }

        .flex-div {
            display: flex;
            flex-direction: column;
        }
        .img{
            width: 100%;
        }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
        html {
            font-size: 60%;

        }

        .name-content {
            margin: 0;
            text-align: center;
        }

        form {
            width: 396px;
            height: fit-content;
        }

        form input {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        form .login {
            font-size: 2rem;
        }

        form a {
            font-size: 1.5rem;
        }

        form .create-account {
            font-size: 1.5rem;
        }

        .flex-div {
            display: flex;
            flex-direction: column;
        }
        .img{
            width: 100%;
        }


        @media (orientation: landscape) and (max-height: 500px) {
            .header {
                height: 90vmax;
            }

        }
    }
</style>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ingreso al sistema</title>
    <link rel="stylesheet" href="./login_form_2.css" />
</head>
<body>
<div class="content">
    <div class="flex-div">
        <div class="name-content">
            <img class="img" src={{asset('img/logo-cbd.png')}} />
            <br/>
            <br/>
        </div>
        <form method="POST" action="{{route('login')}}">
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <h2 style="color: deeppink">{{$error}}</h2>
                @endforeach
            @endif
            <input type="text" placeholder="Email" name="email" required />
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="login">Log In</button>




        </form>

    </div>
</div>
</body>
</html>












