<?php 
           use PHPMailer\PHPMailer\PHPMailer;
           use PHPMailer\PHPMailer\Exception;

           require '../PHPMailer/Exception.php';
           require '../PHPMailer/PHPMailer.php';
           require '../PHPMailer/SMTP.php';

            class MailUser{
                private $toemail;
                private $title;
                private $message;
                private $myemail;
                private $mail;


                function __construct($_to,$_title,$_message,$_myemail)
                {
                    $this->toemail=$_to;
                    $this->title=$_title;
                    $this->message=$_message;
                    $this->myemail=$_myemail;
                    $this->mail= new PHPMailer(true);
                }

                public function sendEmail()
                {
                 try {
                    $this->mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => true,
                            'allow_self_signed'=> true
                        )
                    );
                    //Server settings
                    $this->mail->SMTPDebug =0;                      //Enable verbose debug output
                    $this->mail->isSMTP();                                            //Send using SMTP
                    $this->mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $this->mail->Username   = 'emailmarqueting@gmail.com';                     //SMTP username
                    $this->mail->Password   = 'Admin.,30';                               //SMTP password
                    $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                    $this->mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                   /*  $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $this->mail->Port       = 465;                                    //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_SMTPS`
                                  */
                    //Recipients
                    $this->mail->setFrom('emailmarqueting@gmail.com', 'Php Task');
                    $this->mail->addAddress($this->toemail);     //Add a recipient
                    
                    
                    //Content
                    $this->mail->isHTML(true);                                  //Set email format to HTML
                    $this->mail->Subject = $this->title;
                    $this->mail->Body    = $this->message;
                   
                    $this->mail->send();
                    //echo"mensaje enviado";
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: { $this->mail->ErrorInfo}";
                }
                  
                }
             
            }

?>