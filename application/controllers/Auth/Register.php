<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth');
     }

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		if ($this->form_validation->run() === false)
        {
            $data['title'] = 'WeBilld - Daftar Akun';
            $this->load->view('Auth/register', $data);
        }
        else
        {
            $data = 
            [
                'username' => htmlspecialchars ($this->input->post('username', true)),
                'email' => htmlspecialchars ($this->input->post('email', true)),
                'password' => password_hash ($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'=> '1',
            ]; 
            $this->Auth->RegisterData($data);
            $this->session->set_flashdata('message', 
			'
				<div class="popUp" id="popup">
					<div class="d-flex flex-column">
						<div class="d-flex flex-row popUp-header">
							<div class="d-flex flex-row popUp-header-content"style="width: 100%;margin-bottom:-10px;">
								<div class="left-side d-flex flex-row p-2">
									<div class="iconNotif" style="background: Green;"></div>
									<p class="fw-bold ms-2 small">WeBilld</p>
								</div>
								<div class="right-side ms-auto p-2">
									<p class="small">Baru Saja</p>
								</div>
							</div>
						</div>
						<div class="d-flex p-2">
							<p class="small">Berhasil membuat akun. Silahkan login</p>
						</div>
					</div>
				</div>
			');
            redirect('Auth/login');
        }
	}
}
