
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insertmodel extends CI_Model{



public function index($data)
{
$this->db->insert('post',$data);


}

    public function cat($data)
    {
        $this->db->insert('catagory',$data);


    }


}