<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {

        $this->load->view('home');

    }
public  function welcome()
{
  $this->load->view("header");
    $this->load->view("welcome/home");
   $this->load->view("footer");

}

public function  about()
{
    $this->load->view("header");
    $this->load->view("about/about");
    $this->load->view("footer");
}

    public function  editor()
    {
        $this->load->view("header");
        $this->load->view("the-editor/home");
        $this->load->view("footer");
        //echo "hello";
    }

    public function  tags()
    {
        $this->load->view("header");
        $this->load->view("using-tags/home");
        $this->load->view("footer");
        //echo "hello";
    }

    public function  private1()
    {
        $this->load->view("header");
        $this->load->view("private-sites/home");
        $this->load->view("footer");
        //echo "hello";
    }

    public function  manage()
    {
        $this->load->view("header");
        $this->load->view("managing-users/home");
        $this->load->view("footer");
        //echo "hello";
    }


    public function  admarkdown()
    {
        $this->load->view("header");
        $this->load->view("advanced-markdown/home");
        $this->load->view("footer");

    }



    public function  policy()
    {
        $this->load->view("header");
        $this->load->view("privacy-policy/home");
        $this->load->view("footer");

    }

    public function  disclaimer()
    {
        $this->load->view("header");
        $this->load->view("disclaimer/home");
        $this->load->view("footer");

    }
}