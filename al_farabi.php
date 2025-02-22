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

        .search-bar {
            text-align: center;
            margin: 20px 0;
        }

        .search-bar input[type="text"] {
            padding: 8px;
            width: 50%;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .search-bar input[type="submit"] {
            padding: 8px 15px;
            border: none;
            background-color: #8c52ff;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
            margin-left: 10px;
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

        .actions a, .actions2 a {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }

        .actions2 a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .actions a:hover, .actions2 a:hover {
            color: #45a049;
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
            background-color: #4CAF50;
        }

        .tambah:hover {
            background-color: #45a049;
        }

        .logkeluar {
            background-color: #f44336;
        }

        .logkeluar:hover {
            background-color: #e03127;
        }

        .sebelum {
            background-color: orange;
        }

        .sebelum:hover {
            background-color: orange;
        }

        .counter {
            text-align: center;
            margin: 20px 0;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data Pelajar Al-Farabi</h1>
    <div class="search-bar">
        <form method="post" action="">
            <input type="text" name="search_term" placeholder="Search by IC or Name">
            <input type="submit" name="search" value="Search">
        </form>
    </div>
    <center>
        <div class="counter">
            <?php
                include('config.php');
                $query = "SELECT * FROM al_farabi";

                if (isset($_POST['search'])) {
                    $search_term = mysqli_real_escape_string($connect, $_POST['search_term']);
                    $query .= " WHERE no_kp LIKE '%$search_term%' OR nama LIKE '%$search_term%'";
                }

                $result = mysqli_query($connect, $query);
                if ($result) {
                    $total_students = mysqli_num_rows($result);
                    echo "Jumlah Pelajar: " . $total_students;
                } else {
                    echo "Error: " . mysqli_error($connect);
                }
            ?>
        </div>
        <table>
            <thead>
                <tr>
                    <th>IC</th>
                    <th>NAMA</th>
                    <th>No Tel</th>
                    <th>Kelas</th>
                    <th>Padam</th>
                    <th>Tambah User</th>
                    <th>Edit User</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result) {
                        if ($total_students > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "
                                <tr>
                                    <td>{$row['no_kp']}</td>
                                    <td>{$row['nama']}</td>
                                    <td>{$row['no_tel']}</td>
                                    <td>{$row['kelas']}</td>
                                    <td class='actions'><a href=\"padamalfarabi.php?no_kp={$row['no_kp']}\" onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</a></td>
                                    <td class='actions2'><a href=\"tambahuser.php?no_kp={$row['no_kp']}\" onclick=\"return confirm('Rekod ini akan ditambah')\">Tambah</a></td>
                                    <td><a href='editalfarabi.php?no_kp={$row['no_kp']}'>Edit</a></td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No records found.</td></tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
        <div class="button-container">
            <a href="al_farabiguru.php"><button class="sebelum">< Page Sebelum</button></a>
            <a href="tambahdataalfarabi.php"><button class="tambah">&#43; Tambah Pelajar</button></a>
            <a href="mukadepan.php"><button class="logkeluar">Log Keluar</button></a>
        </div>
    </center>

    <script>
        function updateMasaHadirHeader() {
            const header = document.getElementById('masa-hadir-header');
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit' });
            header.textContent = `MASA HADIR (${timeString})`;
        }

        // Update the header when the page loads
        updateMasaHadirHeader();
    </script>
</body>
</html>
