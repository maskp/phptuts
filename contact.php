<?php
define("TITLE",'contact');
include('/includes/header.php');
?>

<div id="contact">


  <hr>
  <h1>GET in touch with us</h1>
  <form method="POST" action="" id="contact-form">
    <label for="name">uor name</label>
    <input type="text" id="name" name="name"><br>

    <label for="email">yor email</label>
    <input type="text" id="email" name="email"><br>

    <label for="message">and your message</label>
    <textarea id="message" name="message"></textarea><br>

    <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
    <label for="subscribe">Subscribe to newsletter</label><br>

    <input type="submit" class="button next" name="contact_submit" value="send message">
</form>
</div>
