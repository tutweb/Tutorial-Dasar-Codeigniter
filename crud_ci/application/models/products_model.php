<?php
//File products_model.php

class Products_model extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}

	function getAllProducts()
	{
		//select semua data yang ada pada table msProduct
		$this->db->select("*");
		$this->db->from("msProduct");

		return $this->db->get();
	}

	function getProduct($id)
	{
		//select produk berdasarkan id yang dimiliki	
	}

	function addProduct($data)
	{
		//untuk insert data ke database
		$this->db->insert('msProduct', $data);
	}

	function updateProduct($id)
	{
		//update produk berdasarkan id
		$this->db->update('msProduct', array('id' => $_POST['id']));
	}

	function deleteProduct($id)
	{
		//delete produk berdasarkan id
	}
}
