<?php 
  include_once("../utilities.php"); 
  start(); 
?>
<div id="page_content" class="shadow">
  <div id="text" >
    <h3 class="yellow bold">Give</h3>
    <p>

      As a new church, we believe whole-heartedly in giving sacrificially to reach our city with God's love. You can give to the church online by walking through the following steps. All donations are tax deductible.
      <br><br>
        Please click on the button below to give via PayPal. When the new window opens, simply enter the amount of your donation, and click "Update Total".
        <br><br>
        <div class="bold">I want to us my PayPal Account:</div>
        Simply log into your account
        <br><br>
        <div class="bold">I don't have a PayPal Account:</div>
        Click to "continue" on the left-hand side of the page where it says "Don't have a PayPal Account?". 
        This will allow you to give without needing to sign into PayPal.
        <br><br>
        Thank you so much for giving towards the mission of City Church!
        <br><br>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="8DTHJVMHQHL7L">
          <input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        </form>
    </p>
  </div>
</div>
<?php stop(); ?>
