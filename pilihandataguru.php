<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PILIHAN KELAS GURU</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
            color: #333;
            display: flex;
            height: 100vh;
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
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin-left: 0;
            transition: margin-left 0.3s ease;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 2em;
            text-transform: uppercase;
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
    </style>
</head>
<body>
    <button class="toggle-button" onclick="toggleSidebar()">☰ Menu</button>

    <div class="sidebar" id="sidebar">
        <h1></h1>
        <a href="al_raziguru.php">AL-RAZI</a>
        <a href="al_jazariguru.php">AL-JAZARI</a>
        <a href="al_farabiguru.php">AL-FARABI</a>
        <a href="al_khawarizmiguru.php">AL-KHAWARIZMI</a>
        <a href="al_idrisiguru.php">AL-IDRISI</a>
        <a href="tambahadmin.php">DATA ADMIN</a>
    </div>



    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');

            sidebar.classList.toggle('active');
            mainContent.classList.toggle('active');
        }
    </script>
</body>
</html>
