<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	function  __construct(){
        parent::__construct();
    }

    function contact(){
        $this->load->library('phpmailer_lib');
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Which SMTP server to use.
        $mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
        $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
        $mail->Username = 'contact@studying.com';
        $mail->Password = '8i0uPkm+Od';
        $mail->setFrom('contact@studying.com', 'Contact us Studying.com');
        $mail->addReplyTo($email, ucwords($name));
        $mail->addAddress('consulting@andymai.org'); 
        $mail->Subject = "$subject";
        $mail->Body = "$message
            Do not replay here.
            This message is sent by $email. Using the Contact us.
            Please replay to: $email
        ";

        if($mail->send()){
            $this->pages_model->send_message($message, $email, $name);
            $this->session->set_flashdata('success', 'Message Sent!');
            redirect('');
        } else {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
       }
    }

}
