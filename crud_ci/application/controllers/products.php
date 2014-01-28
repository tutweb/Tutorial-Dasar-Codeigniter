<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->model("products_model"); //constructor yang dipanggil ketika memanggil products.php untuk melakukan pemanggilan pada model : products_model.php yang ada di folder models
	}

	public function index()
	{
		//Function yang digunakan untuk menampilkan view products_view.php
		$data['listProducts'] = $this->products_model->getAllProducts(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('products_view', $data); //menampilkan view 'products_view' dan juga passing data dengan nama $data(Bentuknya array) yang berisi 'listProducts'
	}

	public function addProduct()
	{
		//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
		$this->load->view('add_product_view');
	}

	public function addProductDb()
	{
		//Function yang dipanggil ketika ingin memasukan produk ke dalam database
		$data = array(
					'productName' => $this->input->post('productName'),
					'stock' => $this->input->post('stock')
				);
		$this->products_model->addProduct($data); //passing variable $data ke products_model

		redirect('products'); //redirect page ke halaman utama controller products
	}

	public function updateProduct()
	{
		//Function yang dipanggil ketika ingin melakukan update produk kemudian menampilkan update_product_view
	}

	public function updateProductDb()
	{
		//Function yang dipanggil ketika ingin melakukan update terhadap produk yang ada di dalam database
	}

	public function deleteProductDb()
	{
		//Function yang dipanggil ketika ingin melakukan delete produk dari database
	}
}

/* Location: ./application/controllers/products.php */