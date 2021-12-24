<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $email;
    public $nama;
    public $password;
    public $profile;

    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if ($user) {
            // periksa password-nya
            $isPasswordTrue = $post["password"] == $user->password;
            // jika password benar dan dia admin
            if ($isPasswordTrue) {
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->session->set_userdata(['email' => $user->email]);
                $this->session->set_userdata(['password' => $user->password]);
                $this->session->set_userdata(['nama' => $user->nama]);
                $this->session->set_userdata(['profile' => $user->profile]);
                return true;
            }
        }

        // login gagal
        return false;
    }
    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByEmail($email,$nama)
    {
        return $this->db->get_where($this->_table, ["email" => $email],["nama" => $nama])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->profile = $this->do_upload();
        return $this->db->insert($this->_table, $this);
    }

    public function updatepass()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->profile = $post["profile"];
        return $this->db->update($this->_table, $this, array('email' => $post['email']));
    }

    public function delete($email)
    {
        return $this->db->delete($this->_table, array("email" => $email));
    }

    private function do_upload()
    {
        $config['upload_path']          = './profile/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']                = 2048;
        $config['file_name']            = date('d-m-Y_H-i-s');
        $config['overwrite']            = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('profile')) {
            return $this->upload->data("file_name");
        }
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
        exit;
    }

    public function logout()
    {
        $this->session->unset_userdata('variable');
        $this->session->sess_destroy();
    }
}