<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_controller extends Controller {
	public function __construct()
    {
        parent::__construct();
        $this->call->model('user_model');
    }
    // REGISTER
    public function register() {
        if($this->form_validation->submitted()) {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            if($this->user_model->register($username, $password)){
                set_flash_alert('success', 'Registration Successful');
                redirect('/login');
            }
            else{
                set_flash_alert('danger', 'Registration Failed');
            }
        }
        $this->call->view('register');
    } 
    // LOGIN
    public function login() {
        if($this->form_validation->submitted()) {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            if($this->user_model->login($username, $password)){
                redirect('/send-mail');
            }
            else{
                set_flash_alert('danger', 'Login Failed');

            }
        }
        $this->call->view('login');
    }

    // SEND EMAIL
    public function upload() {
        if($this->form_validation->submitted()){
            $this->call->library('upload', $_FILES["attachment"]);
            $this->upload
                ->set_dir('public')
                ->allowed_extensions(array('jpg', 'png'))
                ->allowed_mimes(array('image/jpeg', 'image/png'))
                ->is_image();
            if($this->upload->do_upload()) {
                $data['filename'] = $this->upload->get_filename();

                $senderName = $this->io->post('sender-name');
                $senderEmail = $this->io->post('sender-email');
                $recipientEmail = $this->io->post('recipient-email');
                $subject = $this->io->post('subject');
                $emailContent = $this->io->post('email-content');
                $attachment = "public/" . $this->upload->get_filename();

                if($this->sendEmail($senderName, $senderEmail, $recipientEmail, $subject, $emailContent, $attachment)) {
                    set_flash_alert('success', 'Email Sent');
                    $this->call->view('mail', $data);
                } else {
                    set_flash_alert('danger', 'Email Failed');
                }
            } else {
                $data['errors'] = $this->upload->get_errors();
                $this->call->view('mail', $data);
                set_flash_alert('danger', 'An error occured');

            }
        }
        
		$this->call->view('mail');
    }

    public function sendEmail($senderName, $senderEmail, $recipientEmail, $subject, $emailContent, $attachment) {
        $this->call->library('email');

        $this->email->sender($senderEmail, $senderName);
        $this->email->recipient($recipientEmail);

        $this->email->subject($subject);
        $this->email->email_content($emailContent);
        $this->email->attachment($attachment);

        $this->email->send();
    }
}
?>
