<?php
include 'includes/header.php';
?>

<div class="row">
<div class="six columns" style="margin-top:20px; border:none; border-radius:10px; background:url('images/white.png'); padding:20px 40px 40px 40px; box-shadow:5px 5px 10px #999999; margin-bottom:100px">
<form action="contactus_confirm.php" method="post">
<p>
<span style="font-size:36px; font-weight:bold; color:#550000">Contact Us</span>
<br />
<br />
Name
<br />
<input type="text" name="name" />
<br />
Email
<br />
<input type="email" name="email" />
<br />
Phone
<br />
<input type="text" name="phone" />
<br />
Comment
<br />
<textarea name="comment" rows="5"></textarea>
<br />
<input type="submit" class="button radius medium" />
<br />
<br />
<strong>Or contact us by phone:
<br />
<span style="font-size:18px; color:#550000">855-525-6887</span></strong>
</p>
</form>
</div>
</div>

<?php
include 'includes/footer.php';
?>
  
