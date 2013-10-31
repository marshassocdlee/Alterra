<?php
include 'includes/header.php';
?>

<div class="row">
<div class="six columns" style="margin-top:20px; border:none; border-radius:10px; background:url('images/white.png'); padding:20px 40px 40px 40px; box-shadow:5px 5px 10px #999999; margin-bottom:100px">
<p>
<span style="font-size:36px; font-weight:bold; color:#550000">Contact Us</span>
<br />
<br />
Thank you for your message.
<br />
<br />
Feel free to contact us by phone:
<br />
<span style="font-size:18px; color:#550000; font-weight:bold">855-525-6887</span>
</p>
</form>
</div>
</div>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$mailto = 'rolles@alterratools.com';
$subject = 'Online message received from the Alterra website';

$message = "
Name: ".$name."
Email: ".$email."
Phone: ".$phone."

Message:
".$comment;

mail($mailto,$subject,$message);
?>

<?php
include 'includes/footer.php';
?>
  
