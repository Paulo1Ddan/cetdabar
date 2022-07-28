<?php 
    namespace Class;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    class Mailer{
        const USERNAME = "teste.paulo.daniel@outlook.com";
        const PASSWORD = "TesteMail442";
        const NAMEFROM = "Suporte CETDABAR";

        private $mail;

        public function __construct($toAddress, $toName, $subject, $message, $data = array())
        {
            $html = $message;

            $this->mail = new PHPMailer(true);
            try{

                $this->mail->isSMTP();
                $this->mail->CharSet = "UTF-8";
                $this->mail->Host = "smtp.office365.com";
                $this->mail->SMTPAuth = true;
                $this->mail->SMTPSecure = "tls";
                $this->mail->Username = Mailer::USERNAME;
                $this->mail->Password = Mailer::PASSWORD;
                $this->mail->Port = 587;

                $this->mail->setFrom(Mailer::USERNAME, Mailer::NAMEFROM);
                $this->mail->addAddress($toAddress, $toName);

                $this->mail->Subject = $subject;
                $this->mail->Body = $html;
                $this->mail->AltBody = $html;

            }catch(\Exception $e){

            }
        }

        public function send()
        {
            $this->mail->send();
        }

    }

?>