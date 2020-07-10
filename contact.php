<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "jessicachengdesign@outlook.com";
  $headers = "Portfolio Message From: ".$mailFrom;
  $txt = "You have a message from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: contact.php?mailsend");
}
