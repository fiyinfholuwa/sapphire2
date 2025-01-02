<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf4ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 90%;
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        p {
            font-size: 1rem;
            color: #333;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .info-box {
            font-size: 0.9rem;
            font-weight: bold;
            color: #1a73e8;
            margin-bottom: 1.5rem;
            padding: 0.8rem;
            border: 1px solid #d1e8ff;
            background-color: #f1faff;
            border-radius: 5px;
        }

        button {
            padding: 0.75rem 1.5rem;
            font-size: 0.9rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            transform: scale(1.05);
        }

        .resend-btn {
            background-color: #1a73e8;
        }

        .resend-btn:hover {
            background-color: #155cbc;
        }

        .logout-btn {
            background-color: #004ba0;
        }

        .logout-btn:hover {
            background-color: #00357a;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <p>
        Thank you for signing up! Before you get started, please confirm your email address by clicking the link we just sent to your email. If you didn’t receive the email, please check your spam folder or we’ll be happy to send you a new one.
    </p>

    <div class="info-box">
        A new confirmation link has been sent to the email address you provided during registration.
    </div>

    <div class="button-container">
        <form method="POST" action="{{ route('verification.send') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="resend-btn">
                Resend Confirmation Email
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    </div>
</div>
</body>
</html>
