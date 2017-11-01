<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('index');

	}

	public function newpage()
    {

       $this->load->view('newPage');
        //echo 'hello';
    }


public function cat()
{

    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    if ($this->form_validation->run())
    {
        $data = array(
//           'postTitle' => $this->input->post('postTitle'),
            'name' => $this->input->post('name'),
            'date'=>date( 'Y-m-d H:i:s',  strtotime($this->input->post('date')))
        );

        $this->load->model('insertmodel');
        $data1=$this->insertmodel->cat($data);


$this->load->view('home',$data1);


    }


}
    
    




//    public function  insert()
//    {
//
//        $this->load->library('form_validation');
//        $this->form_validation->set_rules('postTitle', 'postTitle', 'required');
//        $this->form_validation->set_rules('postDetail', 'postDetail', 'required');
//        $this->form_validation->set_rules('postTitle', 'postTitle', 'required');
//        $this->form_validation->set_rules('postDetail', 'postDetail', 'required');
//
//        {
//           // $post = $this->input->post();
//
//// print_r($post);
//            $data = array(
//           'postTitle' => $this->input->post('postTitle'),
//            'postDetails' => $this->input->post('postDetail'),
//                'catagoryId'=>$this->input->post('catagoryId')
//       );
//
//           // print_r($data);
//             //   $this->load->model("insertmodel");
//               // $this->insertmodel->index($data);
////$data['message'] = 'Data Inserted Successfully';
//
//
//        }
//
//        else
//        {
//            $this->load->view('newpage');
//        }

//        $data = array(
//            'postTitle' => $this->input->post('postTitle'),
//            'postDetail' => $this->input->post('postDetail')
//
//        );


}
