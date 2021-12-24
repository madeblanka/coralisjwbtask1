<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model","user");
	}

	public function index()
	{
		$this->load->view('login');
        // jika form login disubmit
        if ($this->input->post()) {
            if ($this->user->doLogin()) {
                redirect('user/dashboard');
                
            } else {
                echo "<script>
                alert('Username not Found!');
                window.location.href='login';
                </script>";
            }
        }
    }
    
    public function register()
    {
        $this->load->view('register');
        // jika form login disubmit
        if ($this->input->post()) {
            if ($this->user->save()) {
                redirect('');
                
            } else {
                echo "<script>
                alert('Failed to Register!');
                window.location.href='register';
                </script>";
            }
        }
    }

    public function dashboard()
    {
        $this->load->view('dashboard');
    }

    public function resetpass()
    {
        $this->load->view('resetpass');   	
    }

    public function getdata()
    {
        $data['user'] = $this->user->getByEmail($this->input->post('email'),$this->input->post('nama'));
        if($data['user'] != null)
        {
            $this->load->view('setpass',$data);   	
        }else
        {
            echo "<script>
            alert('Data Not Found!');
            window.location.href='resetpass';
            </script>";
        }

    }

    public function updatepass()
    {
        $a = $this->user->updatepass($this->input->post('email'));
        if($a)
        {
            echo "<script>
            alert('Saved!');
            window.location.href='index';
            </script>";
        }else{
            echo "<script>
            alert('Failed to update! Please Contact Admin');
            window.location.href='setpass';
            </script>";
        }
    }

    public function logout()
	{
		$this->user->logout();
		redirect('');
	}
}