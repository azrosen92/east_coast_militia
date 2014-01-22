<html>
  <head>
    <title>Payment page</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />    
    <link rel="stylesheet" type="text/css" href="nav_bar_styles.css" />
    <style type="text/css">
      html {
        font-family: arial,verdana;
        color: #FFFFFF;
        font-size: x-large;
      }

      div {
        text-align: center;
        margin-top: 25px;
        margin-left: auto;
        margin-right: auto;
      }

      a {
        color: white;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }

      form .text input {
        padding-left: 5px;
        padding-top: 3px;
        padding-bottom: 3px;
      } 

      form select {
        margin-top: 20px;
      } 

      #error-msg {
        color: red;
        font-size: medium;
      }

    </style>
  </head>
  <body>
    <?php
        if(!empty($_POST['x_amount']) 
          && !empty($_POST['payer_first_name'])
          && !empty($_POST['payer_last_name'])
          && !empty($_POST['player_last_name'])
          && !empty($_POST['payer_last_name'])) {
  
        $secret = "mbgoF1ajLbmy5K1qoVwG";
        $login = "WSP-EAST-qxTt4wAPSg";
        $amount = $_POST['x_amount'];
        $currency_code = "USD";
        $fp_sequence = hexdec(uniqid());
        list($usec, $sec) = explode(" ", microtime());
        $fp_timestamp = (float)$sec;
        $fp_hash = hash_hmac("md5", "{$login}^{$fp_sequence}^{$fp_timestamp}^{$amount}^{$currency_code}", $secret);

        $player_name = $_POST['player_first_name'].' '.$_POST['player_last_name'];
        $payer_first_name = $_POST['payer_first_name'];
        $payer_last_name = $_POST['payer_last_name'];

        $email_to = "militiahockey@yahoo.com";
        $email_subject = "New player payment";
        $email_message = "You have received a payment from ".$payer_first_name." ".$payer_last_name." for $".$amount." on behalf of ".$player_name.".";
        mail($email_to, $email_subject, $email_message)
    ?>
      <div>You will be charged $<?php echo $amount ?> for <?php echo $player_name; ?></div>
    <div>
      <form action="https://checkout.globalgatewaye4.firstdata.com/payment" method="post"> 
        <input name="x_login" value="<?php echo $login; ?>" type="hidden"> 
        <input name="x_amount" value="<?php echo $amount; ?>" type="hidden"> 
        <input name="x_fp_sequence" value="<?php echo $fp_sequence; ?>" type="hidden"> 
        <input name="x_fp_timestamp" value="<?php echo $fp_timestamp; ?>" type="hidden"> 
        <input name="x_fp_hash" value="<?php echo $fp_hash; ?>" type="hidden"> 
        <input name="x_show_form" value="PAYMENT_FORM" type="hidden">
        <input name="x_email_customer" value="TRUE" type="hidden">
        <input name="x_first_name" value="<?php echo $payer_first_name; ?>" type="hidden">
        <input name="x_last_name" value="<?php echo $payer_last_name; ?>" type="hidden">
        <input name="x_merchang_email" value="militiahockey@yahoo.com" type="hidden"> 
        <input name="x_currency_code" value="<?php echo $currency_code ?>" type="hidden">
        <input value="Checkout" type="submit"> 
      </form> 
    <div>
    <?php   
          } else {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
              $error_msg = "please fill out all fields";
            }
    ?>

      <div>How much are you paying?</div>
        <div class="selector">
          <form action="payment.php" method="post">
            <div class="text">
              Cardholder Name: <input type="text" name="payer_first_name" placeholder="first">
                                <input type="text" name="payer_last_name" placeholder="last">
            </div>
            <div class="text">
              Player Name: <input type="text" name="player_first_name" placeholder="first">
                            <input type="text" name="player_last_name" placeholder="last">
            </div>
            <select class="sel" name="x_amount">
              <option value="150">$150</option>
              <option value="175">$175</option>
              <option value="200">$200</option>
              <option value="220">$225</option>
              <option value="250">$300</option>
            </select> 
          <input value="Submit" type="submit"> 
          </form>
          <div id="error-msg"><?php echo $error_msg; ?></div>
          </div>

    <?php
      }
?>

    <div><a href="/index.php">Back to the militia</a></div>
  </body>
</html>
