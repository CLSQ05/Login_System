<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location:index.php');
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
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
            margin-top: 12px;
            border: none;
            border-radius: 10px;
            background: #00a86b;
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
            background: rgba(140, 255, 169, 0.3);
            border-left: 4px solid #3cff78;
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
        <h2>✨ WELCOME, <?php echo $username; ?>! ✨</h2>
        <hr>
        <p><b>You are now logged in 💖</b></p>
        <form action="logout.php" method="POST">
            <button type="submit"><b>Logout</b></button>
        </form>
    </div>

    <?php
    if (isset($_SESSION['message'])) {
        echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
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

<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location:index.php');
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
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
            margin-top: 12px;
            border: none;
            border-radius: 10px;
            background: #00a86b;
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
            background: rgba(140, 255, 169, 0.3);
            border-left: 4px solid #3cff78;
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
        <h2>✨ WELCOME, <?php echo $username; ?>! ✨</h2>
        <hr>
        <p><b>You are now logged in 💖</b></p>
        <form action="logout.php" method="POST">
            <button type="submit"><b>Logout</b></button>
        </form>
    </div>

    <?php
    if (isset($_SESSION['message'])) {
        echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
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

<?php
session_start();
$file = 'users.txt';
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$valid = false;

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($savedUser, $savedPass) = explode('|', $line);
        if ($savedUser == $username && $savedPass == $password) {
            $valid = true;
            break;
        }
    }
}

if ($valid) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['message'] = "Welcome, $username! You are now logged in!";
    header('Location: homepage.php');
} else {
    $_SESSION['message'] = 'Invalid username or password!';
    $_SESSION['invalid_login'] = true;
    header('Location: index.php');
}
exit();
?>

<?php
session_start();
session_destroy();
session_start();
$_SESSION['message'] = "You have been logged out!";
header('Location:index.php');
exit();
?>

<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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
            background: #f51e6dff;
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
            background: rgba(140, 255, 169, 0.3);
            border-left: 4px solid #3cff78;
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
        <h2>🌸== REGISTER ==🌸</h2>
        <hr>
        <form action="save_register.php" method="POST">
            <div class="inputBox"><input type="text" name="username" placeholder="Create Username" required></div>
            <div class="inputBox"><input type="password" name="password" placeholder="Create Password" required></div>
            <button type="submit"><b>Register</b></button>
        </form>
        <br>
        <a href="index.php" style="color:white; text-decoration:underline;"><b>Back to Login</b></a>
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

<?php
session_start();
$file = 'users.txt';
$username = trim($_POST['username']);
$password = trim($_POST['password']); // Plain text

if (file_exists($file)) {
    $users = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($users as $u) {
        list($savedUser) = explode('|', $u);
        if ($savedUser == $username) {
            $_SESSION['message'] = "Username already exists!";
            header('Location: register.php');
            exit();
        }
    }
}

file_put_contents($file, $username . "|" . $password . PHP_EOL, FILE_APPEND);
$_SESSION['message'] = "Registration Successful!";
header('Location: register.php');
exit();
?>
