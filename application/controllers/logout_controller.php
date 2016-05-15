<?php

class Logout_controller extends Gameinfo_Controller
{
    const PAGE_NAME = 'Logout'; // TODO I need to make a lang for this

    private $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data = array(
            'page_name'   => self::PAGE_NAME
        );

        if (isUserLogged())
        {
            clear_session_data();
            
            $this->data['message'] = 'You have logged out of your account. <br> Redirecting to home page in 5 seconds.';
        }
        else
        {
            $this->data['message'] = 'You are not logged in !';
        }

        $this->loadTemplate('logout', $this->data);
    }
}