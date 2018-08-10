
<div class="contact_form">
<?php include('form_process.php'); ?>  
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
<!--    <h3>Contact</h3>-->
<div class="row">
    <div class="col-sm-4 col-md-4  contact_left">
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>"  autofocus>
      <span class="error"><?= $name_error ?></span>
    </div>
    <div class="col-sm-4 col-md-4  contact_left">
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" >
      <span class="error"><?= $email_error ?></span>
    </div>
    <div class="col-sm-4 col-md-4  contact_left">
      <input placeholder="Your Phone Number" type="text" maxlength="10" name="phone" value="<?= $phone ?>" >
      <span class="error"><?= $phone_error ?></span>
    </div>
      </div>
    <div class="">
      <textarea placeholder="Leave your message" value="<?= $message ?>" name="message" required>
      </textarea>
    </div>
      <input type="submit" name="submitbtn" id="submitbutton" value="Send"/>
    <div class="success"><?= $success ?></div>
  </form>
</div>

