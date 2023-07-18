<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE)
        {
			$data['pageTitle'] = 'WeBilld - Masuk';
			$this->load->view('Auth/login', $data);
        }
        else
        {
            $this->_login();
        }
	}

	function _login()
	{
		$email = $this->input->post('email');
        $password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) 
		{
			if(password_verify($password, $user['password']))
			{
				$data = array(
					'email' => $user['email'],
					'role_id' => $user['role_id'],
				);
				$this->session->set_userdata($data);
				if($user['role_id'] == 1)
				{
					$this->session->set_flashdata('message', 
					'        
					<div class="popUp" id="popup">
						<div class="d-flex flex-column">
							<div class="d-flex flex-row popUp-header">
								<div class="d-flex flex-row popUp-header-content"style="width: 100%;margin-bottom:-10px;">
									<div class="left-side d-flex flex-row p-2">
										<div class="iconNotif" style="background: green;"></div>
										<p class="fw-bold ms-2 small">WeBilld</p>
									</div>
									<div class="right-side ms-auto p-2">
										<p class="small">Baru Saja</p>
									</div>
								</div>
							</div>
							<div class="d-flex p-2">
								<p class="small">Berhasil Masuk. Selamat Datang</p>
							</div>
						</div>
					</div>
				');
					redirect('');
				}
				else
				{
					$this->session->set_flashdata('message', 
					'
						<div class="popUp" id="popup">
							<div class="d-flex flex-column">
								<div class="d-flex flex-row popUp-header">
									<div class="d-flex flex-row popUp-header-content"style="width: 100%;margin-bottom:-10px;">
										<div class="left-side d-flex flex-row p-2">
											<div class="iconNotif" style="background: green;"></div>
											<p class="fw-bold ms-2 small">WeBilld</p>
										</div>
										<div class="right-side ms-auto p-2">
											<p class="small">Baru Saja</p>
										</div>
									</div>
								</div>
								<div class="d-flex p-2">
									<p class="small">Berhasil Masuk. Selamat Datang</p>
								</div>
							</div>
						</div>
					');
					redirect('Admin/Dashboard');
				}
			}
			else
			{                    
				$this->session->set_flashdata('message', 
				'
					<div class="popUp" id="popup">
						<div class="popUp-content">
							<div class="d-flex flex-row popUp-header">
								<div class="d-flex flex-row popUp-header-content" style="width: 100%; margin-bottom: -10px;">
								<div class="left-side d-flex flex-row p-2">
									<div class="iconNotif" style="background: Red;"></div>
									<p class="fw-bold ms-2 small">WeBilld</p>
								</div>
								<div class="right-side ms-auto p-2">
									<p class="small">Baru Saja</p>
								</div>
								</div>
							</div>
							<div class="d-flex p-2">
								<p class="small">Password kamu salah. Coba lagi</p>
							</div>
						</div>
					</div>
				');
				redirect('Login');
			}
		}
		else
		{
			$this->session->set_flashdata('message', 
			'
				<div class="popUp" id="popup">
					<div class="d-flex flex-column">
						<div class="d-flex flex-row popUp-header">
							<div class="d-flex flex-row popUp-header-content"style="width: 100%;margin-bottom:-10px;">
								<div class="left-side d-flex flex-row p-2">
									<div class="iconNotif" style="background: red;"></div>
									<p class="fw-bold ms-2 small">WeBilld</p>
								</div>
								<div class="right-side ms-auto p-2">
									<p class="small">Baru Saja</p>
								</div>
							</div>
						</div>
						<div class="d-flex p-2">
							<p class="small">Email kamu belum terdaftar. Lakukan register jika diperlukan</p>
						</div>
					</div>
				</div>
			');
            redirect('Login');
		}
	}
}