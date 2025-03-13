<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Notification</title>
    <style>
        body {
            background-color: #eef3ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #321dff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }
        .logo {
            display: block;
            margin: 20px auto;
            max-width: 150px;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        
        .content h2 {
            color: #321dff;
        }
        .button {
            display: inline-block;
            background-color: #321dff;
            color: #ffffff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }
        a{
            color:white;
        }
        .footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            {{ $request_subject }}
        </div>
        <img src="{{ asset('logo.png') }}" alt="Logo" class="logo">
        <div class="content">
            <h2>{{ $request_subject }}</h2>
            {!! $request_body !!}
        </div>
        <div class="footer">
            &copy; 2025 CoinCrypto. All rights reserved.
        </div>
    </div>
</body>
</html>
