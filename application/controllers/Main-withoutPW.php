<?php

/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 19/09/15
 * Time: 22:13
 */
class Main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('security');

    }

    public function index() {
        $this->middle = 'main_index';

        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        //run validation on form input
        //var_dump($this->form_validation->run());
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            $this->layout();
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = '******';

            //configure email settings
            $config['protocol'] = 'mail';
            $config['smtp_host'] = 'ssl0.ovh.net';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = '*******';
            $config['smtp_pass'] = '*******';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);

            //echo $this->email->print_debugger();

            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="col-md-12 alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="col-md-12 alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('');
            }
        }
    }

    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public  function  link() {
        $this->middle = 'main_link';
        $this->layout();
    }
}