<?php
	class home extends CI_controller{
		public function index(){
			$this->load->helper('url');
			$this->load->view('tugas');
		}
		public function WhatsOn(){
			$this->load->helper('url');
			$this->load->view('WhatsOn');
		}
		public function Event(){
			$this->load->helper('url');
			$this->load->view('Event');
		}
		public function AboutUs(){
			$this->load->helper('url');
			$this->load->view('AboutUs');
		}
		//delegator
		public function manajer(){
			$this->load->helper('url');
			$this->load->view('manajer');
		}
		public function WhatsOnManage(){
			$this->load->helper('url');
			$this->load->view('WhatsOnManage');
		}
		public function EventManage(){
			$this->load->helper('url');
			$this->load->view('EventManage');
		}
		public function AboutUsManage(){
			$this->load->helper('url');
			$this->load->view('AboutUsManage');
		}
		public function pilih(){
			$this->load->helper('url');
			$this->load->view('pilih');
		}
		public function dashboard(){
			$this->load->helper('url');
			$this->load->view('dashboard');
		}
		public function dashboarde(){
			$this->load->helper('url');
			$this->load->view('dashboarde');
		}
		public function contain(){
			$this->load->helper('url');
			$this->load->view('contain');
		}

	}
?> 