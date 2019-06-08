<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));
        $this->load->model(['Ion_auth_model','Task_model']);
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

	}

	/**
	 * Redirect if needed, otherwise display the user list
	 */
	public function index()
	{

		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('company', 'refresh');
		}

		
		else if ($this->ion_auth->is_admin())
		 // remove this elseif if you want to enable this for non-admins
		{

			// redirect them to the home page because they must be an administrator to view this
			//return show_error('You must be an administrator to view this page.');
			//redirect('company/dashboard', 'refresh');
            $data['logged_in_user'] = $this->ion_auth->user()->row(); 
			$data['main_content'] = 'company/dashboard';
			$this->load->view('company/template', $data);
		}

		else if ($this->ion_auth->in_group('company'))
		 // remove this elseif if you want to enable this for non-admins
		{

			// redirect them to the home page because they must be an administrator to view this
			//return show_error('You must be an administrator to view this page.');
			//redirect('company/dashboard', 'refresh');
            $data['logged_in_user'] = $this->ion_auth->user()->row(); 
			$data['main_content'] = 'company/dashboard';
			$this->load->view('company/template', $data);
		}
		else if (!$this->Ion_auth_model->check_user_id()>0) // remove this elseif if you want to enable this for non-admins
		{
           //echo $this->ion_auth->in_group('company'); exit();
			/*$data['groups'] = $this->ion_auth->groups()->result();
			echo "<pre>", print_r($data['groups']); exit;*/
            //echo 'string'; exit();
			
			// redirect them to the home page because they must be an administrator to view this
			//return show_error('You must be an administrator to view this page.');
			$this->load->view('404');
		}
		else
		{
			/*$check_team_user_id=$this->Ion_auth_model->check_user_id();
		   echo $check_team_user_id; exit();
*/
			//echo $this->session->userdata('user_id'); exit();
			// set the flash data error message if there is one
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            
			//list the users
			$data['users'] = $this->ion_auth->users()->result();
			//if a user id is not passed id of the currently lodded in user will be used.
			foreach ($data['users'] as $k => $user)
			{
		     $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
            $data['logged_in_user'] = $this->ion_auth->user()->row(); 
			$data['main_content'] = 'company/dashboard';
			$this->load->view('company/template', $data);
        
			//$this->_render_page('auth/index', $data);
		}
	}

	/**
	 * Log the user in
	 */
	public function login()
	{
		//echo "<pre>", print_r($this->input->post()); exit;
		$this->data['title'] = $this->lang->line('login_heading');
		$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
				'class'	=>'form-control',
				'placeholder' =>'Email',
			);
		$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'class'	=>'form-control',
				'placeholder' =>'Password',
			);

		if(!$this->input->post())
		{
			$this->_render_page('company/auth/login', $this->data);
		}
		else
		{
			// validate form input
			$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
			$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

			if ($this->form_validation->run() === TRUE)
			{
				// check to see if the user is logging in
				// check for "remember me"
				$remember = (bool)$this->input->post('remember');

				if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
				{
					//if the login is successful
					//redirect them back to the home page
					//echo "<pre>", print_r($this->session->all_userdata()); exit;
					 //$admin_id = $this->ion_auth->user()->row()->id;
					// $this->session->set_userdata(['admin_id'=>$admin_id]);
					
					redirect('company/dashboard', 'refresh');
				}
				else
				{
					//echo "unsuccess"; exit;
					// if the login was un-successful
					// redirect them back to the login page
					$this->session->set_flashdata(['message'=>$this->ion_auth->errors(),'class'=>'alert alert-danger']);
					redirect('company', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
				}
			}
			else
			{
				//echo "entered"; exit;
				// the user is not logging in so display the login page
				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
				$this->session->set_flashdata(['class'=>'alert alert-danger'] );

				$this->_render_page('company/auth/login', $this->data);
			}
		}		
	}

	/**
	 * Log the user out
	 */
	public function logout()
	{
		//echo "<pre>", print_r($this->session->all_userdata()), exit;
		$this->data['title'] = "Logout";

		// log the user out
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata( ['message'=>$this->ion_auth->messages(), 'class'=>'alert alert-success'] );
		//echo "<pre>", print_r($this->session->flashdata()), exit;
		redirect('company', 'refresh');
	}

	/**
	 * Change password
	 */
	public function change_password()
	{
		//echo "<pre>", print_r($this->input->post()); exit;
		$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');

		$data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
			$data['old_password'] = array(
				'name' => 'old',
				'id' => 'old',
				'type' => 'password',
			    'class'=> 'form-control toosumm-padding-left',
				'placeholder'=>' Old Password',
			);
			$data['new_password'] = array(
				'name' => 'new',
				'id' => 'new',
				'type' => 'password',
				'class'=> 'form-control toosumm-padding-left',
				'placeholder'=>' New Password',
				'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
			);
			$data['new_password_confirm'] = array(
				'name' => 'new_confirm',
				'id' => 'new_confirm',
				'type' => 'password',
				'class'=> 'form-control toosumm-padding-left',
				'placeholder'=>' Confirm Password',
				'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
			);
			
		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

		if (!$this->ion_auth->logged_in())
		{
			redirect('company', 'refresh');
		}

		$user = $this->ion_auth->user()->row();
		$data['logged_in_user'] = $this->ion_auth->user()->row();
		//echo "<pre>", print_r($user); exit;
		$data['user_id'] = array(
				'name' => 'user_id',
				'id' => 'user_id',
				'type' => 'hidden',
				'value' => $user->id,
			);

		if ($this->form_validation->run() === FALSE)
		{
			//echo "entered"; exit;
			// display the form
			// set the flash data error message if there is one
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->session->set_flashdata(['class'=>'alert alert-danger']);
			//echo "<pre>", print_r($data); exit;

			$data['logged_in_user'] = $this->ion_auth->user()->row();
			$data['main_content'] = 'company/auth/change_password';
			$this->load->view('company/template', $data);
			//echo "<pre>", print_r($data), exit;

			// render
			//$this->_render_page('auth/change_password', $data);
		}
		else
		{
			//echo "entered 1";exit;
			$identity = $this->session->userdata('identity');

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{
				//if the password was successfully changed
				$this->session->set_flashdata(['message', $this->ion_auth->messages(), 'class'=>'alert alert-success']);
				$this->logout();
			}
			else
			{
				//echo "entered2"; exit;
				$this->session->set_flashdata(['message'=>$this->ion_auth->errors(),'class'=>'alert alert-danger']);
				//echo "<pre>", print_r($this->session->flashdata()), exit;

                $data['logged_in_user'] = $this->ion_auth->user()->row();
				$data['main_content'] = 'company/auth/change_password';
				$this->load->view('company/template', $data);

				//redirect('auth/change_password', 'refresh');
			}
		}
	}

	/**
	 * Forgot password
	 */
	public function forgot_password()
	{
		//echo "<pre>", print_r($this->input->post()); exit;
		// setting validation rules by checking whether identity is username or email
		if ($this->config->item('identity', 'ion_auth') != 'email')
		{
			//echo "entered1"; exit;
			$this->form_validation->set_rules('identity', $this->lang->line('forgot_password_identity_label'), 'required');
		}
		else
		{
			//echo "entered2"; exit;
			$this->form_validation->set_rules('identity', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');
		}


		if ($this->form_validation->run() === FALSE)
		{
			$this->data['type'] = $this->config->item('identity', 'ion_auth');
			// setup the input
			$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
			);

			if ($this->config->item('identity', 'ion_auth') != 'email')
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_identity_label');
			}
			else
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
			}

			// set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->session->set_flashdata(['class'=>'alert alert-danger']);
			//$this->_render_page('auth/forgot_password', $this->data);
			$this->_render_page('company/auth/forgot_password', $this->data);
		}
		else
		{
			//echo "entered"; exit;
			$identity_column = $this->config->item('identity', 'ion_auth');
			$identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

			if (empty($identity))
			{

				if ($this->config->item('identity', 'ion_auth') != 'email')
				{
					$this->ion_auth->set_error('forgot_password_identity_not_found');
				}
				else
				{
					$this->ion_auth->set_error('forgot_password_email_not_found');
				}

				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("admin/forgot-password", 'refresh');
			}

			// run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

			if ($forgotten)
			{
				// if there were no errors
				$this->session->set_flashdata(['message'=> $this->ion_auth->messages(),'class'=>'alert alert-success']);
				redirect("company", 'refresh'); //we should display a confirmation page here instead of the login page
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("company/forgot-password", 'refresh');
			}
		}
	}

	/**
	 * Reset password - final step for forgotten password
	 *
	 * @param string|null $code The reset code
	 */
	public function reset_password($code = NULL)
	{
		//echo "entered"; exit;
		if (!$code)
		{
			show_404();
		}

		$user = $this->ion_auth->forgotten_password_check($code);
		//echo "<pre>", print_r($user); exit;

		if ($user)
		{
			//echo "valid user"; exit;
			// if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

			if ($this->form_validation->run() === FALSE)
			{
				//echo "entered 1"; exit;
				// display the form

				// set the flash data error message if there is one
				$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
                $this->session->set_flashdata(['class'=>'alert alert-danger']);
				$data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$data['new_password'] = array(
					'name' => 'new',
					'id' => 'new',
					'type' => 'password',
					'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
					'class'	=> 'form-control'
				);
				$data['new_password_confirm'] = array(
					'name' => 'new_confirm',
					'id' => 'new_confirm',
					'type' => 'password',
					'pattern' => '^.{' . $data['min_password_length'] . '}.*$',
					'class'	=> 'form-control'
				);
				$data['user_id'] = array(
					'name' => 'user_id',
					'id' => 'user_id',
					'type' => 'hidden',
					'value' => $user->id,
				);
				$data['csrf'] = $this->_get_csrf_nonce();
				$data['code'] = $code;
                //echo "<pre>", print_r($data), exit;
				// render
				//$this->_render_page('auth/reset_password', $data);
				$this->_render_page('company/auth/reset_password', $data);
			}
			else
			{
				//echo "entered 2"; exit;
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id'))
				{

					// something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($code);

					show_error($this->lang->line('error_csrf'));

				}
				else
				{
					// finally change the password
					$identity = $user->{$this->config->item('identity', 'ion_auth')};

					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change)
					{
						// if the password was successfully changed
						$this->session->set_flashdata(['message'=>$this->ion_auth->messages(), 'class'=>'alert alert-success']);
						//echo "<pre>", print_r($this->session->flashdata()), exit;
						redirect("company/auth/login", 'refresh');
					}
					else
					{
						$this->session->set_flashdata(['message', $this->ion_auth->errors(),'class'=>'alert alert-danger']);
						redirect('company/auth/reset_password/' . $code, 'refresh');
					}
				}
			}
		}
		else
		{
			//echo "invalid user"; exit;
			// if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("company/auth/forgot_password", 'refresh');
		}
	}

	/**
	 * Activate the user
	 *
	 * @param int         $id   The user ID
	 * @param string|bool $code The activation code
	 */
	public function activate($id, $code = FALSE)
	{
		//echo "entered acti"; exit;
		if ($code !== FALSE)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->in_group('company')||$this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}

		if ($activation)
		{
			// redirect them to the auth page
			$this->session->set_flashdata(['message' =>$this->ion_auth->messages(),'class'=>'alert alert-success']);
			redirect('company/team', 'refresh');
			//redirect("admin/auth/forgot_password", 'refresh');
		}
		
	}

	/**
	 * Deactivate the user
	 *
	 * @param int|string|null $id The user ID
	 */
	public function deactivate($id = NULL)
	{
		//echo "entered deact"; exit;
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}

		$id = (int)$id;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('confirm', $this->lang->line('deactivate_validation_confirm_label'), 'required');
		$this->form_validation->set_rules('id', $this->lang->line('deactivate_validation_user_id_label'), 'required|alpha_numeric');

		if ($this->form_validation->run() === FALSE)
		{
			// insert csrf check
			$data['csrf'] = $this->_get_csrf_nonce();
			$data['user'] = $this->ion_auth->user($id)->row();

			$data['main_content'] = 'company/auth/deactivate_user';
			  $data['logged_in_user'] = $this->ion_auth->user()->row(); 
			$this->load->view('company/template', $data);

			//$this->_render_page('auth/deactivate_user', $data);

		}
		else
		{
			// do we really want to deactivate?
			if ($this->input->post('confirm') == 'yes')
			{
				//echo "entered"; exit;
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
				{
					//echo "entered1";  echo "<br/>";
					return show_error($this->lang->line('error_csrf'));
				}

				// do we have the right userlevel?
				if ($this->ion_auth->logged_in() /*&& $this->ion_auth->is_admin()*/)
				{
					//echo "entered2"; exit;
					$this->ion_auth->deactivate($id);
				}
				$this->session->set_flashdata(['message' =>$this->ion_auth->messages(),'class'=>'alert alert-danger']);
			}

			// redirect them back to the auth page
			//exit();
			
			redirect('company/team', 'refresh');
		}
	}

	/**
	 * Create a new user
	 */
	public function register()
	{
		$data['title'] = $this->lang->line('create_user_heading');

		if ($this->ion_auth->logged_in() || $this->ion_auth->is_admin())
		{
			redirect('admin/auth', 'refresh');
		}

		$tables = $this->config->item('tables', 'ion_auth');
		$identity_column = $this->config->item('identity', 'ion_auth');
		$data['identity_column'] = $identity_column;

		// validate form input
		
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'trim|required');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'trim|required');
		if ($identity_column !== 'email')
		{
			$this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email');
		}
		else
		{
			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
		}
		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
		$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

		if ($this->form_validation->run() === TRUE)
		{
			$email = strtolower($this->input->post('email'));
			$identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
			$password = $this->input->post('password');
           
            
			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone'),
			);
			
		}
		if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data))
		{
			// check to see if we are creating the user
			// redirect them back to the admin page
			$this->session->set_flashdata(['message'=>$this->ion_auth->messages(), 'class'=>'alert alert-success']);
			//exit();
			redirect("admin", 'refresh');
		}
		else
		{
			// display the create user form
			// set the flash data error message if there is one
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			$this->session->set_flashdata(['class'=>'alert alert-danger']);

			$data['first_name'] = array(
				'name' => 'first_name',
				'id' => 'first_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('first_name'),
				'class' => 'form-control',
				'placeholder' => 'First name',
			);
			$data['last_name'] = array(
				'name' => 'last_name',
				'id' => 'last_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('last_name'),
				'class' => 'form-control',
				'placeholder' => 'Last name',
			);
			$data['identity'] = array(
				'name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
				'class' => 'form-control',

			);
			$data['email'] = array(
				'name' => 'email',
				'id' => 'email',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
				'class' => 'form-control',
				'placeholder' => 'Email',
			);
			$data['company'] = array(
				'name' => 'company',
				'id' => 'company',
				'type' => 'text',
				'value' => $this->form_validation->set_value('company'),
				'class' => 'form-control',
				'placeholder' => 'Company',
			);
			$data['phone'] = array(
				'name' => 'phone',
				'id' => 'phone',
				'type' => 'text',
				'value' => $this->form_validation->set_value('phone'),
				'class' => 'form-control',
				'placeholder' => 'Phone',
			);
			$data['password'] = array(
				'name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password'),
				'class' => 'form-control',
				'placeholder' => 'Password',
			);
			$data['password_confirm'] = array(
				'name' => 'password_confirm',
				'id' => 'password_confirm',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
				'class' => 'form-control',
				'placeholder' => 'Confirm Password',
			);
            
			$this->_render_page('admin/auth/register', $data);
         
		}
	}


      public function create_team()
      {
		/*$data['title'] = $this->lang->line('create_user_heading');*/
		$data['role_list']  = $this->Ion_auth_model->find_role();
        $data['project_list']= $this->Task_model->find_project();
       //echo '<pre>'; print_r($data['project_list']); exit();
		if (!$this->ion_auth->logged_in())
		{
			redirect('company/auth', 'refresh');
		}

		$tables = $this->config->item('tables', 'ion_auth');
		$identity_column = $this->config->item('identity', 'ion_auth');
		$data['identity_column'] = $identity_column;

		// validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'trim|required');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'trim|required');
		if ($identity_column !== 'email')
		{
			$this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email');
		}
		else
		{
			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
		}
		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');
		/*$this->form_validation->set_rules('team_role_id', $this->lang->line('create_user_validation_team_role_id_label'), 'trim');*/


		if ($this->form_validation->run() === TRUE)
		{
			$email = strtolower($this->input->post('email'));
			$identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
			$password = $this->input->post('password');
			

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'phone' => $this->input->post('phone'),
				'user_id'=>$this->input->post('user_id'),
				'team_role_id' =>$this->input->post('team_role_id'),				
				'project_id' =>$this->input->post('project_id'),				
			);
			$group = array('3'); // Sets user to admin.
		}
		
		if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data, $group))
		{

			$this->session->set_flashdata(['message'=>$this->ion_auth->messages(), 'class'=>'alert alert-success']);
			redirect("company/team", 'refresh');
		}
		else
		{
			// display the create user form
			// set the flash data error message if there is one
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			$this->session->set_flashdata(['class'=>'alert alert-danger']);

			$data['first_name'] = array(
				'name' => 'first_name',
				'id' => 'first_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('first_name'),
				'class' => 'form-control toosumm-padding-left',
				'placeholder' =>'First Name',
			);
			$data['last_name'] = array(
				'name' => 'last_name',
				'id' => 'last_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('last_name'),
				'class' => 'form-control toosumm-padding-left',
				'placeholder' =>'Last Name',
			);
			$data['identity'] = array(
				'name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
				'class' => 'form-control toosumm-padding-left',
			);
			$data['email'] = array(
				'name' => 'email',
				'id' => 'email',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
				'class' => 'form-control toosumm-padding-left',
				'placeholder' =>'Email',
			);
			
			
			$data['phone'] = array(
				'name' => 'phone',
				'id' => 'phone',
				'type' => 'text',
				'value' => $this->form_validation->set_value('phone'),
				'class' => 'form-control toosumm-padding-left',
				'placeholder' =>' Phone Number',
				'onkeypress'=>'return isNumberKey(event)',
			);
			$data['password'] = array(
				'name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password'),
				'class' => 'form-control toosumm-padding-left',
				'placeholder' =>'Password',
			);
			$data['password_confirm'] = array(
				'name' => 'password_confirm',
				'id' => 'password_confirm',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
				'class' => 'form-control toosumm-padding-left',
				'placeholder' =>'Cnf Password',
			);
			//$this->_render_page('auth/create_user', $data); 
          $data['logged_in_user'] = $this->ion_auth->user()->row();
			$data['main_content'] = 'company/auth/create_team';
			$this->load->view('company/template', $data);
		}
	}
   

   public function edit_team($id)
	{
		//$data['title'] = $this->lang->line('edit_user_heading');
         //echo $id; exit();

		if (!$this->ion_auth->logged_in()  && !($this->ion_auth->user()->row()->id == $id))
		{
			redirect('company/auth', 'refresh');
		}

		if (!$this->form_validation->run('team_member')){
		     $data['logged_in_user'] = $this->ion_auth->user()->row();
		     $data['main_content'] = 'company/auth/edit_team';
		     $data['team'] = $this->Ion_auth_model->find_team(base64_decode($id));
		     $data['role_list']  = $this->Ion_auth_model->find_role();
             $data['project_list']= $this->Task_model->find_project();
		     //echo "<pre>", print_r( $data['team']), exit;
		     $this->load->view('company/template', $data); 
        }
        else{
      	    $data = $this->input->post();
       $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Profile Updated Successfully', 'class'=>'alert alert-success'] );
   
             return redirect('company/team');
          }
}
	/**
	 * Edit a user
	 *
	 * @param int|string $id
	 */
	public function edit_user($id)
	{
		//$data['title'] = $this->lang->line('edit_user_heading');

		if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id)))
		{
			redirect('admin/auth', 'refresh');
		}

		$user = $this->ion_auth->user($id)->row();
		$groups = $this->ion_auth->groups()->result_array();
		$currentGroups = $this->ion_auth->get_users_groups($id)->result();

		// validate form input
		//$this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'trim|required');
		//$this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'trim|required');
		$this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'trim|required');
		$this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'trim|required');

		if (isset($_POST) && !empty($_POST))
		{
			// do we have a valid request?
			if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
			{
				show_error($this->lang->line('error_csrf'));
			}

			// update the password if it was posted
			if ($this->input->post('password'))
			{
				$this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
				$this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
			}

			if ($this->form_validation->run() === TRUE)
			{
				$data = array(
					//'first_name' => $this->input->post('first_name'),
					//'last_name' => $this->input->post('last_name'),
					'company' => $this->input->post('company'),
					'phone' => $this->input->post('phone'),
				);

				// update the password if it was posted
				if ($this->input->post('password'))
				{
					$data['password'] = $this->input->post('password');
				}

				// Only allow updating groups if user is admin
				if ($this->ion_auth->is_admin())
				{
					// Update the groups user belongs to
					$groupData = $this->input->post('groups');

					if (isset($groupData) && !empty($groupData))
					{

						$this->ion_auth->remove_from_group('', $id);

						foreach ($groupData as $grp)
						{
							$this->ion_auth->add_to_group($grp, $id);
						}

					}
				}

				// check to see if we are updating the user
				if ($this->ion_auth->update($user->id, $data))
				{
					// redirect them back to the admin page if admin, or to the base url if non admin
					$this->session->set_flashdata(['message'=>$this->ion_auth->messages(), 'class'=>'alert alert-success']);
					if ($this->ion_auth->is_admin())
					{
						redirect('admin/users', 'refresh');
					}
					else
					{
						redirect('admin/auth', 'refresh');
					}

				}
				else
				{
					// redirect them back to the admin page if admin, or to the base url if non admin
					$this->session->set_flashdata('message', $this->ion_auth->errors());
					if ($this->ion_auth->is_admin())
					{
						redirect('admin/auth', 'refresh');
					}
					else
					{
						redirect('admin/auth', 'refresh');
					}

				}

			}
		}

		// display the edit user form
		$data['csrf'] = $this->_get_csrf_nonce();

		// set the flash data error message if there is one
		$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
       $this->session->set_flashdata(['class'=>'alert alert-danger']);
		// pass the user to the view
		$data['user'] = $user;
		$data['groups'] = $groups;
		$data['currentGroups'] = $currentGroups;

		/*$data['first_name'] = array(
			'name'  => 'first_name',
			'id'    => 'first_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('first_name', $user->first_name),
			'class' => 'form-control',
		);
		$data['last_name'] = array(
			'name'  => 'last_name',
			'id'    => 'last_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('last_name', $user->last_name),
			'class' => 'form-control',
		);*/
		$data['company'] = array(
			'name'  => 'company',
			'id'    => 'company',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('company', $user->company),
			'class' => 'form-control',
		);
		$data['phone'] = array(
			'name'  => 'phone',
			'id'    => 'phone',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('phone', $user->phone),
			'class' => 'form-control',
		);
		$data['password'] = array(
			'name' => 'password',
			'id'   => 'password',
			'type' => 'password',
			'class' => 'form-control',
		);
		$data['password_confirm'] = array(
			'name' => 'password_confirm',
			'id'   => 'password_confirm',
			'type' => 'password',
			'class' => 'form-control',
		);

		//$this->_render_page('auth/edit_user', $data);
        $data['logged_in_user'] = $this->ion_auth->user()->row();
		$data['main_content'] = 'admin/auth/edit_user';
		$this->load->view('admin/template', $data);
	}

	/**
	 * Create a new group
	 */
	public function create_group()
	{
		$data['title'] = $this->lang->line('create_group_title');

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('admin/users', 'refresh');
		}

		// validate form input
		$this->form_validation->set_rules('group_name', $this->lang->line('create_group_validation_name_label'), 'trim|required|alpha_dash');

		if ($this->form_validation->run() === TRUE)
		{
			$new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
			if ($new_group_id)
			{
				// check to see if we are creating the group
				// redirect them back to the admin page
				$this->session->set_flashdata(['message'=>$this->ion_auth->messages(), 'class'=>'alert alert-success']);
				redirect("admin/users", 'refresh');
			}
		}
		else
		{
			// display the create group form
			// set the flash data error message if there is one
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
           $this->session->set_flashdata(['class'=>'alert alert-danger']);
			$data['group_name'] = array(
				'name'  => 'group_name',
				'id'    => 'group_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('group_name'),
				'class'	=> 'form-control',
			);
			$data['description'] = array(
				'name'  => 'description',
				'id'    => 'description',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('description'),
				'class'	=> 'form-control',
			);
            $data['logged_in_user'] = $this->ion_auth->user()->row();
			//$this->_render_page('auth/create_group', $data);
			$data['main_content'] = 'admin/auth/create_group';
			$this->load->view('admin/template', $data);
		}
	}

	/**
	 * Edit a group
	 *
	 * @param int|string $id
	 */
	public function edit_group($id)
	{
		// bail if no group id given
		if (!$id || empty($id))
		{
			redirect('admin/auth', 'refresh');
		}

		$data['title'] = $this->lang->line('edit_group_title');

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('admin/auth', 'refresh');
		}

		$group = $this->ion_auth->group($id)->row();

		// validate form input
		$this->form_validation->set_rules('group_name', $this->lang->line('edit_group_validation_name_label'), 'required|alpha_dash');

		if (isset($_POST) && !empty($_POST))
		{
			if ($this->form_validation->run() === TRUE)
			{
				$group_update = $this->ion_auth->update_group($id, $_POST['group_name'], $_POST['group_description']);

				if ($group_update)
				{
					$this->session->set_flashdata(['message' =>$this->lang->line('edit_group_saved'), 'class'=>'alert alert-success']);
				}
				else
				{
					$this->session->set_flashdata(['message' => $this->ion_auth->errors(), 'class'=>'alert alert-danger']);
				}
				redirect("admin/users", 'refresh');
			}
		}

		// set the flash data error message if there is one
		$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
		$this->session->set_flashdata(['class'=>'alert alert-danger']);

		// pass the user to the view
		$data['group'] = $group;

		$readonly = $this->config->item('admin_group', 'ion_auth') === $group->name ? 'readonly' : '';

		$data['group_name'] = array(
			'name'    => 'group_name',
			'id'      => 'group_name',
			'type'    => 'text',
			'value'   => $this->form_validation->set_value('group_name', $group->name),
			$readonly => $readonly,
			'class'	=> 'form-control',
		);
		$data['group_description'] = array(
			'name'  => 'group_description',
			'id'    => 'group_description',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('group_description', $group->description),
			'class'	=> 'form-control',
		);
          $data['logged_in_user'] = $this->ion_auth->user()->row();
		//$this->_render_page('auth/edit_group', $data);
		$data['main_content'] = 'admin/auth/edit_group';
		$this->load->view('admin/template', $data);
	}

	/**
	 * @return array A CSRF key-value pair
	 */
	public function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	/**
	 * @return bool Whether the posted CSRF token matches
	 */
	public function _valid_csrf_nonce()
	{
		$csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
		if ($csrfkey && $csrfkey === $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	/**
	 * @param string     $view
	 * @param array|null $data
	 * @param bool       $returnhtml
	 *
	 * @return mixed
	 */
	public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}
	  public function user_list()
	  { 


	   if (!$this->ion_auth->logged_in())
		{
			redirect('company/auth', 'refresh');
		}
		    $data['team'] = $this->Ion_auth_model->team_list();
             //echo "<pre>", print_r( $data['team']), exit;
            $data['logged_in_user'] = $this->ion_auth->user()->row();
			$data['main_content'] = 'company/auth/user';
			$this->load->view('company/template', $data);
         
	  }
           public function profile()
           {
            $data['logged_in_user'] = $this->ion_auth->user()->row();
            //echo "<pre>", print_r( $data['logged_in_user']), exit;
			$data['main_content'] = 'company/auth/profile';
			$this->load->view('company/template', $data);

           }

       public function UpdateUser($id){ 
       //	echo $id; exit();
      if (!$this->form_validation->run('user')){
		     $data['logged_in_user'] = $this->ion_auth->user()->row();
		     $data['main_content'] = 'company/auth/UpdateUser';
		     $this->load->view('company/template', $data); 
        }
        else{
      	    $data = $this->input->post();
      	if  ($_FILES['image']['name'] != '') {
	        $config['upload_path'] = 'Uploads/users/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|pdf';
			$config['overwrite']        = FALSE;
			$config['encrypt_name']     = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
		if ($this->upload->do_upload('image')) {
            @unlink("./Uploads/users/".$this->input->post('image')); 
         }   
            $image = $this->upload->data();
            $data['image'] = $image['file_name'];
		 }

		  // echo '<pre>'; print_r($data); exit();
/*		 $data['dob']= date('Y-m-d H:i:s', strtotime( $this->input->post('dob')));
*/          $this->Ion_auth_model->UpdateUser(base64_decode($id),$data);
           $this->session->set_flashdata( ['main_message'=>'Congratulation!!', 'message'=>'Profile Updated Successfully', 'class'=>'alert alert-success'] );
      
             return redirect($_SERVER['HTTP_REFERER']);  
          }
     }
           

     	public function profile_img_validation($field_value)
	{ 
		
		if($_FILES['image']['name'] != '')
		{
			$profileImage_name = $_FILES['image']['name'];
			$profileImage_size = $_FILES["image"]["size"];
			$profileImage_type = strtolower(pathinfo($profileImage_name,PATHINFO_EXTENSION));

		//FILE EXTENSION MATCH
			if($profileImage_type != "jpg" && $profileImage_type != "png" && $profileImage_type != "jpeg"
&& $profileImage_type != "gif" )
			{
				$this->form_validation->set_message('profile_img_validation', "Invalid Image Format");
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			return true;
		}
	}      
		         
}
