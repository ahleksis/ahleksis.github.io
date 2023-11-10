<?php  
	include_once '../controller/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Anonymous Message</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- navigation bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Alexis Aclan</a>
    </div>
  </div>
</nav>
	
	<center><img class="prof" src="../images/ano.png" alt="image" ><br><br></center>
	<center><table border="1">
  <thead>
    <tr>
      <th><strong><center>Code Name<center></strong></th>
      <th><strong><center>Anonymous Messages<center></strong></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM messages";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
		<td>{$row['codename']}</td>
        <td>{$row['message']}</td></tr>\n";
		}
	}
    ?>
  </tbody>
</table></center>
      
</body>
</html>