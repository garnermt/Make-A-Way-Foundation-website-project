<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Admin Login | Make A Way Foundation</title>

    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700&family=Public+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: "Public Sans", Arial, sans-serif;
            background-color: #123b3b;
            color: #23241f;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .login-box {
            background-color: white;
            border-radius: 20px;
            padding: 40px 35px;
            width: 100%;
            max-width: 380px;
            text-align: center;
        }

        .login-box img {
            height: 80px;
            margin-bottom: 10px;
        }

        h1 {
            font-family: "Fraunces", Georgia, serif;
            color: #1f5c5c;
            margin: 0 0 25px 0;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            border: 2px solid #e3ddcd;
            border-radius: 10px;
            font-size: 16px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            background-color: #d9613f;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #c4502f;
        }

        .error {
            color: #c4502f;
            font-size: 14px;
            margin: -8px 0 15px 0;
            text-align: left;
        }

        .back {
            display: block;
            margin-top: 20px;
            color: #1f5c5c;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <img src="{{ asset('images/scroll/MWF-27.jpg') }}" alt="Make A Way Foundation logo">
        <h1>Admin Login</h1>

        <form method="POST" action="/admin/login">
            @csrf

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required autofocus>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit">Log In</button>
        </form>

        <a href="/" class="back">← Back to website</a>
    </div>

</body>
</html>
