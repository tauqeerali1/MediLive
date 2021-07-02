<?php
    use PHPMailer\PHPMailer\PHPMailer;
            
    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";
    

    $mail = new PHPMailer(true);

    $alert = '';

    if (isset($_POST['submits'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $department = $_POST['department'];
        $doctor = $_POST['doctor'];
        $body = $_POST['message'];     

        
    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tauqeer.ali.9934@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'yxhraoojdelmpynd'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("tauqeer.ali.9934@gmail.com");
        $mail->Subject = $name;
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone_Number: $phone <br>Date: $date <br>Department: $department <br>Doctor: $doctor <br>Message : $body</h3>";

        $mail->send();
            $alert = '<div class="alert-success">
                 <span>Appointment Sent! We will contact you soon.</span>
                </div>';
                } catch (Exception $e){
                $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
            }
        }
        
?>