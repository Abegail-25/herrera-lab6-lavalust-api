
<!DOCTYPE html>
<html>
<head>
    <title>Login - Product Management System</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            color: #29412f;

            background:
                radial-gradient(
                    circle at 15% 20%,
                    rgba(74, 105, 75, 0.55),
                    transparent 32%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(82, 112, 82, 0.45),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #496b4d 0%,
                    #aab89b 42%,
                    #eeeade 72%,
                    #dce1d0 100%
                );

            overflow: hidden;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;

            width: 550px;
            height: 550px;

            border-radius: 50%;

            background: rgba(245, 243, 229, 0.18);

            top: -250px;
            left: -180px;

            filter: blur(5px);
        }

        body::after {
            content: "";
            position: absolute;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            background: rgba(45, 79, 51, 0.20);

            bottom: -250px;
            right: -150px;

            filter: blur(5px);
        }

        .login-container {
            width: 100%;
            max-width: 470px;

            padding: 20px;

            position: relative;
            z-index: 2;
        }

        .login-card {
            background: rgba(245, 244, 232, 0.72);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            padding: 45px 50px;

            border-radius: 24px;

            border: 1px solid rgba(255, 255, 255, 0.65);

            box-shadow:
                0 25px 60px rgba(39, 65, 45, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.7);
        }

        .logo {
            width: 70px;
            height: 70px;

            background: linear-gradient(
                145deg,
                #365f3e,
                #5f8062
            );

            color: #f2f1e5;

            border-radius: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 18px;

            font-size: 32px;
            font-weight: bold;

            box-shadow:
                0 10px 25px rgba(47, 78, 52, 0.28);
        }

        h1 {
            text-align: center;

            font-size: 28px;

            color: #29412f;

            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;

            color: #657366;

            margin-bottom: 30px;

            font-size: 14px;

            line-height: 1.5;
        }

        .divider {
            width: 100%;
            height: 1px;

            background: rgba(80, 104, 84, 0.18);

            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;

            margin-bottom: 8px;

            color: #405445;

            font-size: 14px;

            font-weight: bold;
        }

        input {
            width: 100%;

            padding: 14px 15px;

            background: rgba(255, 255, 255, 0.65);

            color: #29412f;

            border: 1px solid rgba(83, 108, 87, 0.35);

            border-radius: 10px;

            font-size: 15px;

            outline: none;

            transition: 0.25s;
        }

        input::placeholder {
            color: #8a948a;
        }

        input:focus {
            background: rgba(255, 255, 255, 0.85);

            border-color: #52745a;

            box-shadow:
                0 0 0 3px rgba(82, 116, 90, 0.15);
        }

        button {
            width: 100%;

            padding: 14px;

            margin-top: 8px;

            background: linear-gradient(
                135deg,
                #294d32,
                #52775a
            );

            color: #ffffff;

            border: none;

            border-radius: 10px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(43, 76, 49, 0.25);

            transition: 0.25s;
        }

        button:hover {
            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #23442b,
                #46684e
            );

            box-shadow:
                0 12px 25px rgba(43, 76, 49, 0.32);
        }

        button:active {
            transform: translateY(0);
        }

        .footer-text {
            text-align: center;

            margin-top: 28px;

            color: #718072;

            font-size: 11px;

            letter-spacing: 3px;
        }

        @media (max-width: 600px) {

            .login-container {
                padding: 15px;
            }

            .login-card {
                padding: 35px 25px;
            }

            h1 {
                font-size: 25px;
            }

        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="login-card">

            <div class="logo">
                P
            </div>

            <h1>
                Welcome Back
            </h1>

            <p class="subtitle">
                Login to your Product Management System
            </p>

            <div class="divider"></div>

            <form
                action="<?= base_url('login/authenticate') ?>"
                method="POST"
            >

                <div class="form-group">

                    <label>
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        placeholder="Enter your username"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>

                <button type="submit">
                    Login
                </button>

            </form>

            <p class="footer-text">
                MANAGE &nbsp;•&nbsp; TRACK &nbsp;•&nbsp; GROW
            </p>

        </div>

    </div>

</body>
</html>
