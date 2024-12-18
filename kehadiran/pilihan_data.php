<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PILIHAN KELAS</title>
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
    <h1>PILIH KELAS DATA</h1>
    <div class="button-container">
        <a href="AL-RAZI.php"><button>AL-RAZI</button></a>
        <a href="AL-JAZARI.php"><button>AL-JAZARI</button></a>
        <a href="AL-FARABI.php"><button>AL-FARABI</button></a>
        <a href="AL-KHAWARIZMI.php"><button>AL-KHAWARIZMI</button></a>
        <a href="AL-IDRISI.php"><button>AL-IDRISI</button></a>
        <a href="AL-HARIRI.php"><button>AL-HARIRI</button></a>
        <a href="AL-GHAZALI.php"><button>AL-GHAZALI</button></a>
        <a href="AL-TARMIZI.php"><button>AL-TARMIZI</button></a>
    </div>
</body>
</html>
