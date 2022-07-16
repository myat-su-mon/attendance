<?php
    require 'vendor/autoload.php';

    class SendEmail {
        public static function SendMail($to, $subject, $content){
            $key = 'api-key';
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("trevoir.williams@gmail.com", "Trevoir Williams");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            // $email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try {
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e) {
                echo 'Email exception caught : ' .$e->getMessage(). "\n";
                return false;
            }
        }
    }
?>