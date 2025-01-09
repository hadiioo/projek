<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PILIHAN KELAS GURU</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("bangunan lembah keramat_enhanced.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .sidebar {
            width: 250px;
            background-color: #8c52ff;
            color: white;
            position: fixed;
            top: 0;
            left: -250px;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            transition: left 0.3s ease;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            padding: 10px;
            margin: 5px 0;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #5ce1e6;
        }

        .main-content {
            position: absolute;
            top: 10px;  /* Adjust as needed */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: auto;  /* Adjust the width as needed */
            padding: 20px;
            margin-left: 0;
            transition: margin-left 0.3s ease;
            background-color: rgba(255, 255, 255, 0.8);  /* Background color with transparency */
            border-radius: 8px;  /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);  /* Subtle shadow for depth */
        }



        h1 {
            text-align: center;
            color: black ;
            margin: 0;
            padding: 20px 0;
            text-transform: uppercase;
            letter-spacing: 2px; 
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        a button {
            background-color: #8c52ff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a button:hover {
            background-color: #5ce1e6;
        }

        .toggle-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #8c52ff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .toggle-button:hover {
            background-color: #5ce1e6;
        }

        .sidebar.active {
            left: 0;
        }

        .main-content.active {
            margin-left: 250px;
        }

        .logo {
            position: absolute;
            top: 10px;  /* Adjust as needed */
            right: 10px;  /* Adjust as needed */
            width: 150px;  /* Adjust the size as needed */
            height: auto;  /* Maintain aspect ratio */
        }

        .welcome {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            }
        .welcome h1, .welcome h2 {
            margin: 0;
            color: #333;
            }
</style>
</head>
<body>
    <button class="toggle-button" onclick="toggleSidebar()">☰ Menu</button>

    <div class="sidebar" id="sidebar">
        <br><br><br>
        DATA DAN MAKLUMAT
        <a href="al_raziguru.php">AL-RAZI</a>
        <a href="al_jazariguru.php">AL-JAZARI</a>
        <a href="al_farabiguru.php">AL-FARABI</a>
        <a href="al_khawarizmiguru.php">AL-KHAWARIZMI</a>
        <a href="al_idrisiguru.php">AL-IDRISI</a>
        <a href="tambahadmin.php">DATA ADMIN</a>
        <a href="mukadepan.php">LOG OUT</a>
        <a href="result.php">RESULT</a>
    </div>

    <a href="mukadepan.php"><img class="logo" src="logo.png" alt=""></a>

    <div class="main-content" id="mainContent">
        <h1>SMK LEMBAH KERAMAT</h1>
        <h2>BERUSAHA BERDISIPLIN BERJAYA</h2>
    </div>
    <div class="welcome">
        <h1>SELAMAT DATANG</h1>
        <h2>ADMIN</h2>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');

            sidebar.classList.toggle('active');
            mainContent.classList.toggle('active');
        }
    </script>
</body>
</html>
