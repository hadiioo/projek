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
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
    </style>
</head>
<body>
    <h1>PILIH KELAS DATA GURU</h1>
    <div class="button-container">
        <a href="al_raziguru.php"><button>AL-RAZI</button></a>
        <a href="al_jazariguru.php"><button>AL-JAZARI</button></a>
        <a href="al_farabiguru.php"><button>AL-FARABI</button></a>
        <a href="al_khawarizmiguru.php"><button>AL-KHAWARIZMI</button></a>
        <a href="al_idrisiguru.php"><button>AL-IDRISI</button></a>
    </div>
</body>
</html>
