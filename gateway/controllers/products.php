<?php

class Products extends Controller {

	function __construct() {

		parent::__construct();
		CPLoader();
		if (!$this->user->LoggedIn() OR $this->user->Get('client_type_id') != 1 OR $this->user->Get('client_type_id') != 3)) {
			redirect('dashboard');
		}
	}

	function index() {

		$this->navigation->PageTitle('Products');

		$this->load->model('cp/dataset','dataset');

		$columns = array(
			array(
				'name' => 'ID #',
				'sort_column' => 'id',
				'type' => 'id',
				'width' => '5%',
				'filter' => 'id'),
			array(
				'name' => 'Description',
				'sort_column' => 'description',
				'type' => 'text',
				'width' => '12%',
				'filter' => 'description'
				),
			array(
				'name' => 'Stock',
				'sort_column' => 'stock',
				'type' => 'text',
				'width' => '12%',
				'filter' => 'stock'
				),
			array(
				'name' => 'Cost Price',
				'sort_column' => 'cost_price',
				'type' => 'text',
				'width' => '12%',
				'filter' => 'cost_price'
				),
			array(
				'name' => 'Sell Price',
				'sort_column' => 'sell_price',
				'type' => 'text',
				'width' => '12%',
				'filter' => 'sell_price'
				),
			array(
				'name' => 'Manufacturer',
				'sort_column' => 'manufacturer_name',
				'type' => 'text',
				'width' => '12%',
				'filter' => 'manufacturer_name'
				)
		);

		$this->dataset->Initialize('product_model','GetProducts',$columns);

		// sidebar
		$this->navigation->SidebarButton('New Product','products/add');

		$this->load->view(branded_view('cp/products.php'));
	}

	public function add() {
		$this->navigation->PageTitle('New Product');

		$manufacturers = $this->db->get('manufacturers')->result();

		$data = array(
			'form_title' => 'Add New Product',
			'form_action' => 'products/post/new',
			'action' => 'new',
			'manufacturers' => $manufacturers
		);

		$this->load->view(branded_view('cp/product_form.php'), $data);
	}

	function edit ($id) {
		$this->navigation->PageTitle('Edit Product');

		$data = array(
			'form_title' => 'Edit Product',
			'form_action' => 'products/post/edit/'.$id,
			'action' => 'edit'
		);

		$this->load->model('product_model');

		$product = $this->product_model->Getproduct($this->user->Get('client_id'), $id);

		$manufacturers = $this->db->get('manufacturers')->result();

		if($product) {
			$data['form'] = $product;
			$data['manufacturers'] = $manufacturers;
		}

		$this->load->view(branded_view('cp/product_form.php'), $data);
		
	}

	function post ($action, $id = false) {

		// $this->load->library('field_validation');

		if ($this->user->Get('client_type') == '1') {
			$this->notices->SetError('You do not have permission to create a Service Provider account.');
			$error = true;
		}
		elseif ($this->user->Get('client_type') == '3') {
			$this->notices->SetError('You do not have client account creation privileges.');
			$error = true;
		}

		if ($this->input->post('description') == '') {
			$this->notices->SetError('Product Description is a required field.');
			$error = true;
		}
		if ($this->input->post('stock') == '') {
			$this->notices->SetError('Product Stock is a required field.');
			$error = true;
		}
		if ($this->input->post('cost_price') == '') {
			$this->notices->SetError('Cost Price is a required field.');
			$error = true;
		}
		if ($this->input->post('sell_price') == '') {
			$this->notices->SetError('Sell Price is a required field.');
			$error = true;
		}
		if ($this->input->post('manufacturer_id') == '') {
			$this->notices->SetError('Manufacturer is a required field.');
			$error = true;
		}
		
		$this->load->model('product_model');

		if ($action == 'new') {
			$products = $this->product_model->Getproducts($this->user->Get('client_id'),array('description' => $this->input->post('description',true)));

			if (is_array($products)) {
				$this->notices->SetError('Product is not unique.');
				$error = true;
			}
		}

		if (isset($error)) {
			if ($action == 'new') {
				redirect('products/add');
				return false;
			}
			else {
				redirect('products/edit/' . $id);
				return false;
			}
		}

		$params = array(
			'description' => $this->input->post('description'),
			'stock' => $this->input->post('stock'),
			'cost_price' => $this->input->post('cost_price'),
			'sell_price' => $this->input->post('sell_price'),
			'manufacturer_id' => $this->input->post('manufacturer_id')
		);

		if ($action == 'new') {
			$client = $this->product_model->NewProduct($this->user->Get('client_id'), $params);
			$this->notices->SetNotice('Product Added');

		} else {
			$this->product_model->UpdateProduct($this->user->Get('client_id'), $id, $params);
			$this->notices->SetNotice('Product Updated');

		}

		redirect('products');

		return true;
	}
}