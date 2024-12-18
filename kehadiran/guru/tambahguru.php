<?php
include('config.php');
$error = '';
	if (isset($_POST['submit'])) {
		if (empty($_POST['id']) || empty($_POST['password'])) {
			$error = "id or password is invalid";
		} else {
			$id = $_POST['id'];
			$password = $_POST['password'];
			$query = mysqli_query($connect, "SELECT * FROM guru WHERE password = '$password' AND id = '$id'");
			$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				header('location: dataguru.php');
			} else {
				$error = "id or password is invalid";
			};
		};
	};
?>
<head>
	<style>
		        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(90deg, #8c52ff, #5ce1e6);
        }
        #header {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            margin-top: 20px;
        }
        table {
            margin: 0 auto;
            width: 100%;
        }
        td {
            padding: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .error {
            margin-top: 15px;
            color: red;
            font-size: 14px;
        }
	</style>
</head>
        
<body>
	<div id="header">
		<center>
			<h2>UNTUK ADMIN SAHAJA</h2>
			<form action="tambahguru.php" method="post">
				<hr>
				<table>
					<tr>
						<td>Id</td>
						<td>:</td>
						<td><input type="text" name="id" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
							<td colspan="3" id="submit-td">
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
				</table>
				<?php if ($error): ?>
					<div class="error"><?php echo $error; ?></div>
				<?php endif; ?>
			</form>
		</center>
	</div>
</body>