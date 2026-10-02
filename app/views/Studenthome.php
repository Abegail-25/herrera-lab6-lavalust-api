<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Home</title>

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================
           BODY
        ========================= */

        body {

            font-family: Arial, Helvetica, sans-serif;

            background:
                radial-gradient(
                    circle at 10% 20%,
                    rgba(196, 181, 253, 0.35),
                    transparent 25%
                ),

                radial-gradient(
                    circle at 90% 80%,
                    rgba(221, 214, 254, 0.45),
                    transparent 25%
                ),

                linear-gradient(
                    135deg,
                    #faf8ff,
                    #eee7ff,
                    #ffffff
                );

            min-height: 100vh;

            color: #2d2640;

            overflow-x: hidden;
        }


        /* =========================
           BACKGROUND DECORATION
        ========================= */

        .circle {

            position: fixed;

            border-radius: 50%;

            pointer-events: none;

            z-index: -1;

            opacity: 0.45;

            animation: float 6s ease-in-out infinite;
        }


        .circle-one {

            width: 180px;
            height: 180px;

            background: #ddd6fe;

            top: 120px;
            left: -70px;
        }


        .circle-two {

            width: 230px;
            height: 230px;

            background: #ede9fe;

            bottom: -80px;
            right: -70px;

            animation-delay: 2s;
        }


        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }


        /* =========================
           NAVIGATION BAR
        ========================= */

        nav {

            width: 100%;

            padding: 18px 8%;

            background: rgba(255, 255, 255, 0.82);

            display: flex;

            justify-content: space-between;

            align-items: center;

            border-bottom: 1px solid rgba(139, 92, 246, 0.15);

            box-shadow:
                0 4px 20px rgba(139, 92, 246, 0.08);

            backdrop-filter: blur(12px);
        }


        .logo {

            font-size: 22px;

            font-weight: bold;

            color: #6d28d9;
        }


        .nav-links {

            display: flex;

            gap: 10px;
        }


        .nav-links a {

            text-decoration: none;

            color: #5b536b;

            padding: 10px 16px;

            border-radius: 10px;

            font-size: 14px;

            font-weight: 600;

            transition: 0.3s ease;
        }


        .nav-links a:hover {

            background: #ede9fe;

            color: #6d28d9;

            transform: translateY(-2px);
        }


        /* =========================
           MAIN CONTAINER
        ========================= */

        .container {

            width: 84%;

            max-width: 1050px;

            margin: 55px auto;
        }


        /* =========================
           WELCOME CARD
        ========================= */

        .welcome {

            position: relative;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,0.96),
                    rgba(241,236,255,0.96)
                );

            padding: 45px;

            border-radius: 28px;

            border: 1px solid rgba(139, 92, 246, 0.13);

            box-shadow:
                0 20px 45px rgba(109, 40, 217, 0.10);

            margin-bottom: 30px;

            overflow: hidden;
        }


        .welcome::before {

            content: "";

            position: absolute;

            width: 250px;
            height: 250px;

            background: #ede9fe;

            border-radius: 50%;

            top: -150px;
            right: -80px;

            opacity: 0.7;
        }


        .welcome::after {

            content: "";

            position: absolute;

            width: 150px;
            height: 150px;

            background: #f5f3ff;

            border-radius: 50%;

            bottom: -90px;
            left: -50px;

            opacity: 0.8;
        }


        .welcome-content {

            position: relative;

            z-index: 2;
        }


        .welcome-tag {

            display: inline-block;

            padding: 7px 14px;

            background: #ede9fe;

            color: #6d28d9;

            border-radius: 20px;

            font-size: 12px;

            font-weight: bold;

            margin-bottom: 15px;
        }


        .welcome h1 {

            color: #4c1d95;

            font-size: 36px;

            margin-bottom: 12px;

            line-height: 1.2;
        }


        .welcome h1 span {

            color: #8b5cf6;
        }


        .welcome p {

            color: #6b6475;

            font-size: 15px;

            line-height: 1.7;

            max-width: 650px;
        }


        /* =========================
           DASHBOARD TITLE
        ========================= */

        .section-title {

            color: #4c1d95;

            font-size: 21px;

            margin-bottom: 20px;
        }


        /* =========================
           CARDS
        ========================= */

        .cards {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 22px;
        }


        .card {

            position: relative;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #faf8ff
                );

            padding: 30px;

            border-radius: 20px;

            border: 1px solid #eee9f7;

            box-shadow:
                0 10px 30px rgba(109, 40, 217, 0.08);

            transition: all 0.3s ease;

            overflow: hidden;
        }


        .card::after {

            content: "";

            position: absolute;

            width: 100px;
            height: 100px;

            background: #f5f3ff;

            border-radius: 50%;

            right: -40px;
            bottom: -45px;
        }


        .card:hover {

            transform: translateY(-6px);

            border-color: #c4b5fd;

            box-shadow:
                0 15px 35px rgba(109, 40, 217, 0.14);
        }


        /* =========================
           CARD ICON
        ========================= */

        .card-icon {

            width: 60px;
            height: 60px;

            display: flex;

            justify-content: center;

            align-items: center;

            background:
                linear-gradient(
                    135deg,
                    #ede9fe,
                    #ddd6fe
                );

            border-radius: 17px;

            font-size: 27px;

            margin-bottom: 20px;

            box-shadow:
                0 6px 15px rgba(139, 92, 246, 0.10);
        }


        .card h2 {

            color: #4c1d95;

            font-size: 20px;

            margin-bottom: 10px;
        }


        .card p {

            color: #777080;

            line-height: 1.6;

            font-size: 14px;

            margin-bottom: 20px;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn {

            position: relative;

            z-index: 2;

            display: inline-block;

            text-decoration: none;

            background:
                linear-gradient(
                    135deg,
                    #8b5cf6,
                    #6d28d9
                );

            color: white;

            padding: 11px 20px;

            border-radius: 10px;

            font-size: 14px;

            font-weight: bold;

            box-shadow:
                0 5px 15px rgba(109, 40, 217, 0.20);

            transition: 0.3s ease;
        }


        .btn:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(109, 40, 217, 0.30);
        }


        /* =========================
           FOOTER
        ========================= */

        footer {

            text-align: center;

            margin-top: 50px;

            padding: 25px;

            color: #81788f;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 700px) {

            nav {

                padding: 15px 5%;

                flex-direction: column;

                gap: 15px;
            }


            .nav-links {

                width: 100%;

                justify-content: center;

                flex-wrap: wrap;
            }


            .container {

                width: 90%;

                margin: 35px auto;
            }


            .welcome {

                padding: 35px 25px;
            }


            .welcome h1 {

                font-size: 28px;
            }


            .cards {

                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         BACKGROUND DECORATION
    ========================== -->

    <div class="circle circle-one"></div>

    <div class="circle circle-two"></div>



    <!-- =========================
         NAVIGATION
    ========================== -->

    <nav>

        <div class="logo">
            🎓 Student Portal
        </div>


        <div class="nav-links">

            <a href="<?= site_url('student') ?>">
                Home
            </a>

            <a href="<?= site_url('student/profile') ?>">
                Student Profile
            </a>

        </div>

    </nav>



    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="container">


        <!-- WELCOME -->

        <section class="welcome">

            <div class="welcome-content">

                <span class="welcome-tag">
                    ✨ Student Dashboard
                </span>


                <h1>
                    Welcome to your
                    <span>Student Portal!</span> 👋
                </h1>


                <p>
                    Manage and view your student information
                    through a simple and organized student
                    information system.
                </p>

            </div>

        </section>



        <!-- DASHBOARD -->

        <h2 class="section-title">
            Quick Access
        </h2>


        <section class="cards">


            <!-- PROFILE CARD -->

            <div class="card">

                <div class="card-icon">
                    👩🏻‍🎓
                </div>


                <h2>
                    Student Profile
                </h2>


                <p>
                    View your personal and academic information
                    including your student ID, course, year,
                    section, and email address.
                </p>


                <a
                    href="<?= site_url('student/profile') ?>"
                    class="btn"
                >
                    View Profile
                </a>

            </div>



            <!-- STUDENT INFORMATION CARD -->

            <div class="card">

                <div class="card-icon">
                    🎓
                </div>


                <h2>
                    Student Information
                </h2>


                <p>
                    Access your important student details
                    through the student information system.
                </p>


                <a
                    href="<?= site_url('student/profile') ?>"
                    class="btn"
                >
                    View Information
                </a>

            </div>


        </section>


    </main>



    <!-- FOOTER -->

    <footer>

        © 2026 Student Information System

    </footer>


</body>

</html>