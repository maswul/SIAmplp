<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPPD Online - Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, "San Francisco", Helvetica, Arial, sans-serif;
            font-weight: 300;
            margin: 0;
        }

        html,
        body {
            height: 100vh;
            width: 100vw;
            margin: 0 0;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            background-image: url("img/bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h4 {
            font-size: 24px;
            font-weight: 600;
            color: #000;
            opacity: 0.85;
        }

        label {
            font-size: 12.5px;
            color: #000;
            opacity: 0.8;
            font-weight: 400;
        }

        form {
            padding: 40px 30px;
            background: #fefefe;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding-bottom: 20px;
            width: 300px;
        }

        form h4 {
            margin-bottom: 20px;
            color: rgba(0, 0, 0, 0.5);
        }

        form h4 span {
            color: black;
            font-weight: 700;
        }

        form p {
            line-height: 155%;
            margin-bottom: 5px;
            font-size: 14px;
            color: #000;
            opacity: 0.65;
            font-weight: 400;
            max-width: 200px;
            margin-bottom: 40px;
        }

        a.discrete {
            color: rgba(0, 0, 0, 0.4);
            font-size: 14px;
            border-bottom: solid 1px rgba(0, 0, 0, 0);
            padding-bottom: 4px;
            margin-left: auto;
            font-weight: 300;
            transition: all 0.3s ease;
            margin-top: 40px;
        }

        a.discrete:hover {
            border-bottom: solid 1px rgba(0, 0, 0, 0.2);
        }

        button {
            -webkit-appearance: none;
            width: auto;
            min-width: 100px;
            border-radius: 24px;
            text-align: center;
            padding: 15px 40px;
            margin-top: 5px;
            background-color: #b08bf8;
            color: #fff;
            font-size: 14px;
            margin-left: auto;
            font-weight: 500;
            box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, 0.13);
            border: none;
            transition: all 0.3s ease;
            outline: 0;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 2px 6px -1px rgba(182, 157, 230, 0.65);
        }

        button:hover:active {
            transform: scale(0.99);
        }

        input {
            font-size: 16px;
            padding: 20px 0px;
            height: 56px;
            border: none;
            border-bottom: solid 1px rgba(0, 0, 0, 0.1);
            background: #fff;
            width: 280px;
            box-sizing: border-box;
            transition: all 0.3s linear;
            color: #000;
            font-weight: 400;
            -webkit-appearance: none;
        }

        input:focus {
            border-bottom: solid 1px #b69de6;
            outline: 0;
            box-shadow: 0 2px 6px -8px rgba(182, 157, 230, 0.45);
        }

        input.error {
            border-bottom: solid 1px #ff3333;
            outline: 0;
            box-shadow: 0 2px 6px -8px rgba(182, 157, 230, 0.45);
        }

        .floating-label {
            position: relative;
            margin-bottom: 10px;
            width: 100%;
        }

        .floating-label label {
            position: absolute;
            top: calc(50% - 7px);
            left: 0;
            opacity: 0;
            transition: all 0.3s ease;
            padding-left: 44px;
        }

        .floating-label input {
            width: calc(100% - 44px);
            margin-left: auto;
            display: flex;
        }

        .floating-label .icon {
            position: absolute;
            top: 0;
            left: 0;
            height: 56px;
            width: 44px;
            display: flex;
        }

        .floating-label .icon svg {
            height: 30px;
            width: 30px;
            margin: auto;
            opacity: 0.15;
            transition: all 0.3s ease;
        }

        .floating-label .icon svg path {
            transition: all 0.3s ease;
        }

        .floating-label input:not(:-moz-placeholder-shown) {
            padding: 28px 0px 12px 0px;
        }

        .floating-label input:not(:-ms-input-placeholder) {
            padding: 28px 0px 12px 0px;
        }

        .floating-label input:not(:placeholder-shown) {
            padding: 28px 0px 12px 0px;
        }

        .floating-label input:not(:-moz-placeholder-shown)+label {
            transform: translateY(-10px);
            opacity: 0.7;
        }

        .floating-label input:not(:-ms-input-placeholder)+label {
            transform: translateY(-10px);
            opacity: 0.7;
        }

        .floating-label input:not(:placeholder-shown)+label {
            transform: translateY(-10px);
            opacity: 0.7;
        }

        .floating-label input:valid:not(:-moz-placeholder-shown)+label+.icon svg {
            opacity: 1;
        }

        .floating-label input:valid:not(:-ms-input-placeholder)+label+.icon svg {
            opacity: 1;
        }

        .floating-label input:valid:not(:placeholder-shown)+label+.icon svg {
            opacity: 1;
        }

        .floating-label input:valid:not(:-moz-placeholder-shown)+label+.icon svg path {
            fill: #b69de6;
        }

        .floating-label input:valid:not(:-ms-input-placeholder)+label+.icon svg path {
            fill: #b69de6;
        }

        .floating-label input:valid:not(:placeholder-shown)+label+.icon svg path {
            fill: #b69de6;
        }

        .floating-label input:not(:valid):not(:focus)+label+.icon {
            -webkit-animation-name: shake-shake;
            animation-name: shake-shake;
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
        }

        @-webkit-keyframes shake-shake {
            0% {
                transform: translateX(-3px);
            }

            20% {
                transform: translateX(3px);
            }

            40% {
                transform: translateX(-3px);
            }

            60% {
                transform: translateX(3px);
            }

            80% {
                transform: translateX(-3px);
            }

            100% {
                transform: translateX(0px);
            }
        }

        @keyframes shake-shake {
            0% {
                transform: translateX(-3px);
            }

            20% {
                transform: translateX(3px);
            }

            40% {
                transform: translateX(-3px);
            }

            60% {
                transform: translateX(3px);
            }

            80% {
                transform: translateX(-3px);
            }

            100% {
                transform: translateX(0px);
            }
        }

        .session {
            display: flex;
            flex-direction: row;
            width: auto;
            height: auto;
            margin: auto auto;
            background: #ffffff;
            border-radius: 6px;
            box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, 0.12);
        }

        .left {
            width: 220px;
            height: auto;
            min-height: 100%;
            position: relative;
            background-image: url("img/left.jpg");

            background-size: cover;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .left svg {
            height: 40px;
            width: auto;
            margin: 20px;
        }

    </style>
</head>

<body>
    <div class="session">
        <div class="left">
            <?xml version="1.0" encoding="UTF-8"?>

    </div>
    <form action="{{ route('login') }}" method="post" class="log-in" autocomplete="off">
      <h4>SPPD <span>online</span></h4>
      <p>Selamat datang! Silahkan masuk ke akun anda untuk membuat SPT dan SPPD:</p>
      <p style="color:red; font-weight:bold; display:none;">Maaf, Username / Password anda salah!</p>
      <div class="floating-label">
        <input placeholder="Nomor Induk Pegawai" type="text"  name="nip" id="nip" autocomplete="off">
        <label for="nip">Nomor Induk Pegawai:</label>
        <div class="icon">
            <svg class="svg-icon" viewBox="0 0 20 20">
                <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg>
        </div>
      </div>
      <div class="floating-label">
        <input placeholder="Password" type="password" name="password"  id="password" autocomplete="off">
        <label for="password">Password:</label>
        <div class="icon">

          <?xml version="1.0" encoding="UTF-8"?>
          <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve"              xmlns="http://www.w3.org/2000/svg">
<style type="text/css">
  .st0{fill:none;}
  .st1{fill:#010101;}
</style>
    <rect class="st0" width="24" height="24"/>
    <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z"/>
    <path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z"/>
    <path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z"/>
</svg>
        </div>

      </div>
      <button type="submit" onClick="return false;">Log in</button>
      <a href="{{ route('register') }}" class="discrete">Register</a>
    </form>
  </div>
</body>
    </html>
