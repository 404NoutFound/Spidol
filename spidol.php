<?php
defined('BASEPATH') or die ('No dirrect script access allowed');

class Spidol extends CI_Controller{
	function __construct(){
		parent:: __construct();
	}
	
	public function index(){
		$this->load->view('view_spidol');
	}
}
?>