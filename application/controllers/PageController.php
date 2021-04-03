<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function __construct(){
		
        parent::__construct();
    
	}
	
	public function index(){

		$data = array();
		$data['view'] = 'home';

		$this->load->view('layout', $data);
	}

	public function makeTradePlan(){
		$data = array();
		$data['view'] = 'make-trade';
		$data['title'] = 'Make a Trade Plan';
		$data['qatype'] = 'plan';
		$data['questions'] = planQuestions();

		$this->load->view('layout', $data);
	}

	public function makeTradeRecap(){
		$data = array();
		$data['view'] = 'make-trade';
		$data['title'] = 'Make a Trade Recap';
		$data['qatype'] = 'recap';
		$data['questions'] = recapQuestions();
		
		$this->load->view('layout', $data);
	}
}
