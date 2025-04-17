php
($_POST['username'])  text-decoration-color:#B4ABC5; font-style:italic;">($_POST['password'])) {
  $to = 'your-email@example.com';
  $subject = 'Neuer Benutzer registriert';
  $message = 'Benutzername: ' . $_POST['username'] . PHP_EOL;
  $message .= 'Passwort: ' . $_POST['password'] . PHP_EOL;
  mail($to,$subject,$message);
}
?>
