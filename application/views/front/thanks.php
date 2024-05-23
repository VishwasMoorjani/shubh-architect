<?php
$myurl='contact';
if(isset($_REQUEST['submit']))
{
$mail_message ="<b><h2>Shubh Architec Website Enquiry</h2></b>";
$mail_message .="<br/><b>First Name</b> - ".$_REQUEST['first-name'];
$mail_message .="<br/><b>Last Name</b> - ".$_REQUEST['last-name'];
$mail_message .="<br/><b>Email</b> - ".$_REQUEST['email'];
$mail_message .="<br/><b>Mobile</b> - ".$_REQUEST['mobile'];
$mail_message .="<br/><b>Message</b> - ".$_REQUEST['message'];
require_once('class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "mail.gdigitalindia.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "clients@gdigitalindia.com";
$mail->Password = "Clients@123??";
$mail->SetFrom("clients@gdigitalindia.com");
$mail->Subject = "Shubh Architec Website Enquiry";
$mail->Body = $mail_message;
// print_r($mail);die;
$mail->AddAddress("shubharchitect07@gmail.com"); 
$mail->AddAddress("gdigitalindialeads@gmail.com");
$mail->AddAddress("lead@gdigitalindia.com");


// print_r($mail);die;

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
}
}
?>

<?php include('header.php'); ?>
        

     <!-- heading -->
<!-- <section id="heading">
    <div class="heading-bg">
        <div class="container">
            <h2 class="wow fadeInUp">Thank You</h2>
            <p class="wow fadeInUp"><a href="index.php">Home</a> / Thank You</p>
        </div>
    </div>
</section> -->


        <!--About Four Start-->
        <section class="thanks">
            <div class="container">
                <img src="<?=base_url("assets/front/images/thanks.jpg");?>" width="100%" alt="">
            </div>
        </section>
        <!--About Four End-->







        <?php include('footer.php'); ?>
        