<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data SMK LEMBAH KERAMAT</title>
    <style>
        /* General Styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #fad0c4, #fad0c4, #fbc2eb, #a18cd1);
            color: #333;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
            font-size: 2em;
            text-transform: uppercase;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 90%;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            text-align: center;
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #ff7043;
            color: #fff;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions a, .actions2 a, .actions3 a {
            text-decoration: none;
            font-weight: bold;
        }

        .actions a {
            color: #ff3333;
        }

        .actions2 a {
            color: #28a745;
        }

        .actions3 a {
            color: #007bff;
        }

        .actions a:hover {
            color: #cc0000;
        }

        .actions2 a:hover {
            color: #218838;
        }

        .actions3 a:hover {
            color: #0056b3;
        }

        .button-container {
            text-align: center;
            margin: 20px 0;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .tambah {
            background-color: #28a745;
        }

        .tambah:hover {
            background-color: #218838;
        }

        .logkeluar {
            background-color: #dc3545;
        }

        .logkeluar:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Data Guru</h1>
    <center>
        <table>
            <tr>
                <th>IC</th>
                <th>NAMA</th>
                <th>No Tel</th>
                <th>Kelas</th>
                <th>Padam</th>
                <th>Edit Maklumat guru</th>
            </tr>
            <?php
                include('config.php');
                $papar = mysqli_query($connect, "SELECT * FROM data_guru");
                
                if ($papar === false) {
                    echo "<tr><td colspan='7'>Error: " . mysqli_error($connect) . "</td></tr>";
                } else {
                    while ($row = mysqli_fetch_array($papar)) {
                        echo "
                        <tr>
                            <td>{$row['no_kp']}</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['no_tel']}</td>
                            <td>{$row['kelas']}</td>
                            <td class='actions'><a href=\"padamguru.php?no_kp={$row['no_kp']}\" onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</a></td>
                            <td class='actions3'><a href='edit_guru.php?no_kp={$row['no_kp']}'>Edit</a></td>
                        </tr>
                        ";
                    }
                }
            ?>
        </table>
        <div class="button-container">
            <a href="tambahdata.php"><button class="tambah">&#43; Tambah Guru</button></a>
            <a href="insert.php"><button class="logkeluar">Log Keluar</button></a>
            <a href="pilihan_data.php"><button class="pilihan">Data Pelajar</button></a>
        </div>
    </center>
</body>
</html>
