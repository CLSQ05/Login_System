<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #552789ff, #8458ddff, #cb82ffff);
            background-size: 400% 400%;
            animation: gradientMove 20s ease infinite;
            overflow: hidden;
        }

        .wrapper {
            width: 100%;
            max-width: 600px;
            padding: 25px 20px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.35);
            text-align: center;
            animation: fadeIn 0.8s ease;
            box-sizing: border-box;
        }

        h2 {
            color: white;
            font-weight: 600;
            margin-top: 5px;
            margin-bottom: 25px;
            font-size: 1.6rem;
        }

        hr {
            margin-bottom: 30px;
        }

        .inputBox {
            width: 100%;
            margin: 10px 0;
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
        }

        .inputBox input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 15px;
            transition: 0.3s;
            box-sizing: border-box;
        }

        .inputBox input::placeholder {
            color: white;
            opacity: 0.8;
        }

        .inputBox input:focus {
            box-shadow: 0 0 10px #c9a7ff;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 10px;
            background: #f84113e3;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            box-sizing: border-box;
        }

        button:hover {
            box-shadow: 0 0 15px #b37bff;
            transform: scale(1.03);
        }

        /* Popup notifications */
        .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 16px 25px;
            border-radius: 12px;
            color: white;
            font-weight: 500;
            z-index: 999;
            animation: popupFade 4s forwards;
        }

        .alert-success {
            background: rgba(104, 234, 225, 0.3);
            border-left: 4px solid #00e8d8ff;
        }

        .alert-error {
            background: rgba(255, 110, 110, 0.35);
            border-left: 4px solid #ff4d4d;
        }

        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
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

        @keyframes popupFade {
            0% {
                opacity: 0;
                transform: translate(-50%, -20px);
            }

            10% {
                opacity: 1;
                transform: translate(-50%, 0);
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                transform: translate(-50%, -20px);
            }
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>🍁== LOGIN ==🍁</h2>
        <hr>
        <form action="login.php" method="POST">
            <div class="inputBox"><input type="text" name="username" placeholder="Username" required></div>
            <div class="inputBox"><input type="password" name="password" placeholder="Password" required></div>
            <button type="submit"><b>Login</b></button>
        </form>
        <br>
        <a href="register.php" style="color:white; text-decoration:underline;"><b>Register Here</b></a>
    </div>

    <?php
    if (isset($_SESSION['message'])) {
        $type = isset($_SESSION['invalid_login']) ? 'alert-error' : 'alert-success';
        echo "<div class='alert $type'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
        unset($_SESSION['invalid_login']);
    }
    ?>

    <div id="particles-js"></div>
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    <script>
        particlesJS({
            particles: {
                number: { value: 70 },
                color: { value: "#d2b3ff" },
                size: { value: 3 },
                line_linked: { enable: true, distance: 120, color: "#b37bff", opacity: 0.3, width: 1 }
            },
            interactivity: {
                detect_on: "canvas",
                events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: true, mode: "push" } },
                modes: { repulse: { distance: 100 } }
            },
            retina_detect: true
        });
    </script>
</body>

</html>