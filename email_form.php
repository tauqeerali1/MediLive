<?php
    use PHPMailer\PHPMailer\PHPMailer;
            
    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";

    $mail = new PHPMailer(true);

    $alert = '';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];

                        
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tauqeer.ali.9934@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = ''; // Gmail address Password or Gmail APP Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("tauqeer.ali.9934@gmail.com"); // gmail address from where you have to send the data
        $mail->Subject = $name;
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Subject: $subject <br>Message : $body</h3>";

        $mail->send();
            $alert = '<div class="alert-success">
                 <span>Message Sent! Thanks you for Contacting Us.</span>
                </div>';
                } catch (Exception $e){
                $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
            }
        }
        
?>
