<?php

namespace Composer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use stdClass;





class Email {
    private $mail = \stdClass::class;

    public function __construct(){

        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 0;                      
        $this->mail->isSMTP();                                            
        $this->mail->Host       = 'smtp.live.com';                    
        $this->mail->SMTPAuth = false;
        $this->mail->SMTPSecure = false;                                 
        $this->mail->Username   = 'gabriel_frahm@hotmail.com';                   
        $this->mail->Password   = 'pokemon12345';                              
        $this->mail->SMTPSecure = 'tls';       
        $this->mail->Port       = 587;  
        $this->mail->CharSet    = 'utf-8';
        $this->mail->SMTPAuth = true;
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('gabriel_frahm@hotmail.com', 'teste');
    
    

    }

    public function sendMail($subject,$body,$replyEmail,$replyName,$addressEmail, $addressName){
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail,$replyName);
        $this->mail->addAddress($addressEmail,$addressName);

        try{
            $this->mail->send();
        }catch(Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo}{$e}";
        }

    }
    
}