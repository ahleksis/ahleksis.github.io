 <?php
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
      ?>