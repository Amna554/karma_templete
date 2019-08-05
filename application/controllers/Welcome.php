<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
      
	  public function index()
	{
		
	}
	public function home()
	{
		$this->load->view('nav');
		$this->load->view('home');
		$this->load->view('feature_area');
	    $this->load->view('category_area');
		$this->load->view('product_area');
		$this->load->view('exclusive_area');
		$this->load->view('brand');
		$this->load->view('related');
		$this->load->view('footer');
	}
		public function Category()
	{
        $this->load->view('nav');
		$this->load->view('check');
		$this->load->view('related');
		$this->load->view('footer');
    }
	public function Product_detail()
	{
		$this->load->view('nav');
		$this->load->view('single_product_detail');
	    $this->load->view('related');
		$this->load->view('footer');
	}
	public function Checkout()
	{
		$this->load->view('nav');
		$this->load->view('checkout');
		$this->load->view('footer');
	}
	public function Shopping_cart()
	{
		$this->load->view('nav');
		$this->load->view('shopping_cart');
		$this->load->view('footer');
	}
		public function Confirmation()
	{
		$this->load->view('nav');
		$this->load->view('confirmation');
		$this->load->view('footer');
	}
		public function Blog()
	{
		$this->load->view('nav');
		$this->load->view('blog');
		$this->load->view('footer');
	}
		public function Blog_details()
	{
		$this->load->view('nav');
		$this->load->view('blog_detail');
		$this->load->view('footer');		
	}
		public function Login()
	{
		$this->load->view('nav');
		$this->load->view('login_page');
		$this->load->view('footer');
	}
		public function Order_tracking()
	{
		$this->load->view('nav');
		$this->load->view('tracking');
		$this->load->view('footer');
	}	
	public function Elements()
	{
		$this->load->view('nav');
		$this->load->view('elements');
		$this->load->view('footer');
    }
	public function Contact()
	{
		$this->load->view('nav');
		$this->load->view('contact');
		$this->load->view('footer');
		$this->load->view('success');	
	}
}
?>