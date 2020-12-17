<?php include('form_process.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1"  name="name" value="<= $name ?>" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<= $email ?>" tabindex="2" >
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your discordname#tag" type="text" name="discord" value="<= $discord ?>" tabindex="3" >
      <span class="error"><?= $discord_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" tabindex="4" >
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" tabindex="5" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>