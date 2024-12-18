<body>
	<div class="form-container">
		<center><h2>TAMBAH REKOD PELAJAR</h2>
		<form action="tambahuser2.php" method="post">
			<table>
				<tr>
					<td>IC</td>
					<td>:</td>
					<td><input type="text" name="ic" required></td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td><input type="text" name="password" required></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" class="submit-btn" name="hantar" value="hantar">
					</td>
				</tr>
			</table>
		</form>
		<?php if (isset($message)): ?>
			<p class="message <?= $success ? 'success' : 'error' ?>"><?= $message ?></p>
		<?php endif; ?>
	</div>
        </center>
<?php
	include('config.php');
	if (isset($_POST['hantar'])) {
		// Capture form data
		$ic = $_POST['ic'];
		$password = $_POST['password'];
		
		// Insert data into the user table
		$query = "INSERT INTO user (ic, password) 
				  VALUES ('$ic', '$password')";
		
		if (mysqli_query($connect, $query)) {
            // Redirect to data.php on success
            header('Location: dataguru.php');
            exit;
        } else {
            $message = "Ralat: " . mysqli_error($connect);
            $success = false;
        }
	}
?>

</body>
</html>
