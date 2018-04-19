<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller
{
		
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('Form');
		$this->load->model('Forms');
	}
	
	public function index()
	{
		if($_SESSION['user_privilege'] == 'admin')
		{ 
			$forms = $this->Forms->get_forms_list();
			$data = array('forms' => $forms);
			//$data['nav_bar'] = $this->load->view('nav_bar');
			$this->load->view('admin_home', $data); 
		}
		
		elseif($_SESSION['user_privilege'] == 'user')
		{ 
			$forms = $this->Forms->get_forms_list();
			$data = array('forms' => $forms);
			//$data['nav_bar'] = $this->load->view('nav_bar');
			$this->load->view('user_home', $data);
		}
	}
			
	public function reponses()
	{
		$form = $this->input->post('Form');
		$answers = $this->Forms->get_answers($form);
		
		var_dump($answers);
		
		$data = array();
		$data['form'] = $form;
		$data['answers'] = $answers;
		
		//$this->load->view('answer', $data);
	}
	
	public function ajouter()
	{		
		$form_name = $this->input->post('new_form');		
		$this->Forms->add_form($form_name);		
		redirect('form');
	}
	
	public function supprimer()
	{		
		$form_name = $this->input->post('delete_form');		
		$this->Forms->delete_form($form_name);		
		redirect('form');
	}
	
	public function modifier($form_name = NULL) // Paramètre optionnel
	{		
		if($form_name == NULL) { $form_name = $this->input->post('modify_form'); }
		$form = $this->Forms->get_form($form_name);				
		$data = array('form_name' => $form_name, 'form' => $form);
		//$data['nav_bar'] = $this->load->view('nav_bar');		
		$this->load->view('edit_form', $data);
	}
	
	public function ajouter_question()
	{	
		$data_question = $this->input->post();
		$form_name = $data_question['form_name'];
		$this->Forms->add_question($data_question);		
		$this->modifier($form_name);
		redirect('Form/modifier/'.$form_name);
	}
	
	public function supprimer_question()
	{	
		$id_delete = $this->input->post('id_delete');
		$form_name = $this->input->post('form_name');		
		$this->Forms->delete_question($form_name, $id_delete);	
		redirect('Form/modifier/'.$form_name);		
	}
	
	public function deplacer_question()
	{	
		$move_data = $this->input->post();
		$form_name = $this->input->post('form_name');
		$this->Forms->move_question($move_data);
		redirect('Form/modifier/'.$form_name);
	}
	
	public function repondre()
	{	
		$form_name = $this->input->post('form');	
		$form = $this->Forms->get_form($form_name);		
		$data = array('form_name' => $form_name, 'form' => $form);
		//$data['nav_bar'] = $this->load->view('nav_bar');	
		$this->load->view('answer_form', $data);		
	}
	
	public function repondre_question()
	{	
		$answer_data = $this->input->post();
		$this->Forms->answer_question($answer_data);
	}	
}



