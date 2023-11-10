<?php  




$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'send':
		sendmsg();
		break;
	case 'insertmsg':
		insertmsg();
		break;
	case 'retrievemsg':
		retrievemsg();
		break;
}

function sendmsg() {
  	  $to_email = 'usern202528@gmail.com';
      $subject = 'Anonymous Mail';
      $message = $_POST['message'];
      $headers = array('From: anonymously @ company . com',
    "Reply-To: replyto@example.com",
    "X-Mailer: PHP/" . PHP_VERSION);
    $headers = implode("\r\n", $headers);
      mail('usern202528@gmail.com',$subject,$message,$headers);

      echo '<script>alert("Message Sent!");document.location="../send_message.php"</script>';    
      // header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function insertmsg() {
include_once '../controller/connection.php';
// Check connection


	$sql = "INSERT INTO messages (codename, message)
	VALUES ('".$_POST["codename"]."','".$_POST["msg"]."')";
		if ($conn->query($sql) === TRUE) {
		  echo '<script>alert("Message Sent!");document.location="../send_message.php"</script>'; 
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

	$conn->close();
}

function retrievemsg() {

include_once '../controller/connection.php';
   

	$sql = "SELECT * FROM messages;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['message'];
		}
	}

	 

}

?>