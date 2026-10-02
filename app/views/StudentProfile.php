<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>


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
           BACKGROUND CIRCLES
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
           NAVIGATION
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

            max-width: 950px;

            margin: 55px auto;
        }


        /* =========================
           PROFILE HEADER
        ========================= */

        .profile-header {

            position: relative;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,0.96),
                    rgba(241,236,255,0.96)
                );

            padding: 45px;

            border-radius: 28px;

            text-align: center;

            border: 1px solid rgba(139, 92, 246, 0.13);

            box-shadow:
                0 20px 45px rgba(109, 40, 217, 0.10);

            margin-bottom: 25px;

            overflow: hidden;
        }


        .profile-header::before {

            content: "";

            position: absolute;

            width: 250px;
            height: 250px;

            background: #ede9fe;

            border-radius: 50%;

            top: -140px;
            right: -80px;

            opacity: 0.7;
        }


        .profile-header::after {

            content: "";

            position: absolute;

            width: 170px;
            height: 170px;

            background: #f5f3ff;

            border-radius: 50%;

            bottom: -100px;
            left: -60px;

            opacity: 0.8;
        }


        /* =========================
           FEMALE STUDENT AVATAR
        ========================= */

        .profile-avatar {

            position: relative;

            width: 125px;
            height: 125px;

            margin: 0 auto 20px;

            border-radius: 50%;

            display: flex;

            justify-content: center;
            align-items: center;

            background:
                linear-gradient(
                    135deg,
                    #ddd6fe,
                    #f5f3ff
                );

            border: 6px solid white;

            box-shadow:
                0 10px 30px rgba(109, 40, 217, 0.18);

            font-size: 65px;

            z-index: 2;

            animation: avatarFloat 4s ease-in-out infinite;
        }


        @keyframes avatarFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }


        .profile-header h1 {

            position: relative;

            z-index: 2;

            color: #4c1d95;

            font-size: 30px;

            margin-bottom: 8px;
        }


        .profile-header p {

            position: relative;

            z-index: 2;

            color: #7c7189;

            font-size: 15px;
        }


        .student-badge {

            display: inline-block;

            margin-top: 15px;

            padding: 7px 15px;

            border-radius: 20px;

            background: #ede9fe;

            color: #6d28d9;

            font-size: 12px;

            font-weight: bold;

            position: relative;

            z-index: 2;
        }


        /* =========================
           INFORMATION CARD
        ========================= */

        .information-card {

            background: rgba(255, 255, 255, 0.94);

            border-radius: 22px;

            padding: 35px;

            border: 1px solid rgba(139, 92, 246, 0.12);

            box-shadow:
                0 12px 35px rgba(109, 40, 217, 0.08);
        }


        .information-card h2 {

            color: #4c1d95;

            font-size: 21px;

            margin-bottom: 25px;

            padding-bottom: 15px;

            border-bottom: 1px solid #eee9f7;
        }


        /* =========================
           INFORMATION GRID
        ========================= */

        .info-grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 18px;
        }


        .info-item {

            position: relative;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #faf8ff
                );

            padding: 20px;

            border-radius: 15px;

            border: 1px solid #eee9f7;

            transition: all 0.3s ease;
        }


        .info-item:hover {

            transform: translateY(-5px);

            border-color: #c4b5fd;

            box-shadow:
                0 10px 25px rgba(139, 92, 246, 0.10);

            background: #faf8ff;
        }


        .info-item::before {

            content: "";

            position: absolute;

            left: 0;

            top: 18px;

            width: 4px;

            height: 35px;

            border-radius: 0 5px 5px 0;

            background:
                linear-gradient(
                    #a78bfa,
                    #7c3aed
                );
        }


        .info-label {

            display: block;

            font-size: 11px;

            color: #8a8294;

            margin-bottom: 8px;

            text-transform: uppercase;

            letter-spacing: 0.7px;

            padding-left: 8px;
        }


        .info-value {

            display: block;

            font-size: 15px;

            font-weight: 600;

            color: #4c1d95;

            word-break: break-word;

            padding-left: 8px;
        }


        /* =========================
           BACK BUTTON
        ========================= */

        .back-container {

            margin-top: 30px;

            text-align: center;
        }


        .back-btn {

            display: inline-block;

            text-decoration: none;

            background:
                linear-gradient(
                    135deg,
                    #8b5cf6,
                    #6d28d9
                );

            color: white;

            padding: 12px 24px;

            border-radius: 11px;

            font-size: 14px;

            font-weight: bold;

            box-shadow:
                0 6px 18px rgba(109, 40, 217, 0.22);

            transition: 0.3s ease;
        }


        .back-btn:hover {

            transform: translateY(-3px);

            box-shadow:
                0 10px 25px rgba(109, 40, 217, 0.30);
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


            .profile-header {

                padding: 35px 20px;
            }


            .profile-header h1 {

                font-size: 25px;
            }


            .information-card {

                padding: 25px 20px;
            }


            .info-grid {

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


        <!-- PROFILE HEADER -->

        <section class="profile-header">


            <div class="profile-avatar">
                👩🏻‍🎓
            </div>


            <h1>
                <?= htmlspecialchars($name) ?>
            </h1>


            <p>
                <?= htmlspecialchars($course) ?>
            </p>


            <span class="student-badge">
                ✨ Student Profile
            </span>

        </section>



        <!-- =========================
             STUDENT INFORMATION
        ========================== -->

        <section class="information-card">


            <h2>
                Student Information
            </h2>


            <div class="info-grid">


                <!-- STUDENT ID -->

                <div class="info-item">

                    <span class="info-label">
                        Student ID
                    </span>

                    <span class="info-value">
                        <?= htmlspecialchars($student_id) ?>
                    </span>

                </div>



                <!-- FULL NAME -->

                <div class="info-item">

                    <span class="info-label">
                        Full Name
                    </span>

                    <span class="info-value">
                        <?= htmlspecialchars($name) ?>
                    </span>

                </div>



                <!-- COURSE -->

                <div class="info-item">

                    <span class="info-label">
                        Course
                    </span>

                    <span class="info-value">
                        <?= htmlspecialchars($course) ?>
                    </span>

                </div>



                <!-- YEAR -->

                <div class="info-item">

                    <span class="info-label">
                        Year Level
                    </span>

                    <span class="info-value">
                        <?= htmlspecialchars($year) ?>
                    </span>

                </div>



                <!-- SECTION -->

                <div class="info-item">

                    <span class="info-label">
                        Section
                    </span>

                    <span class="info-value">
                        <?= htmlspecialchars($section) ?>
                    </span>

                </div>



                <!-- EMAIL -->

                <div class="info-item">

                    <span class="info-label">
                        Email Address
                    </span>

                    <span class="info-value">
                        <?= htmlspecialchars($email) ?>
                    </span>

                </div>


            </div>



            <!-- BACK BUTTON -->

            <div class="back-container">

                <a
                    href="<?= site_url('student') ?>"
                    class="back-btn"
                >
                    Back to Dashboard
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