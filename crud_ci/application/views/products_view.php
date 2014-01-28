<!-- File products_view.php -->
<html>
	<head>
		<title>CRUD dengan CodeIgniter</title>
	</head>
	<body>
		<?php 
			$jumlahProduk = $listProducts->num_rows(); //$listProduct berasal dari data yang dilempar dari controller, yaitu $data['listProducts']. num_rows() digunakan untuk menghitung jumlah baris yang dimiliki ketika kita melakukan select dari database

			if($jumlahProduk == 0){
		?>
			<!-- Kalau datanya masih kosong, kita harus melakukan add product -->
			<a href="<?= base_url() ?>index.php/products/addProduct">Tambah Produk</a>
		<?php
			}
			else {
		?>
			<!-- Kalau ada datanya, maka kita akan tampilkan dalam table -->
			<h1>Products List</h1>
			<table border="1">
				<thead>
					<tr>
						<th>No. </th>
						<th>Product ID</th>
						<th>Product Name</th>
						<th>Stock(s)</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						//Kita akan melakukan looping sesuai dengan data yang dimiliki
						$i = 1; //nantinya akan digunakan untuk pengisian Nomor
						foreach ($listProducts->result() as $row) {
					?>
					<tr>
						<td><?= $i++ ?></td>
						<td><?= $row->productId ?></td> <!-- karena berbentuk objek, maka kita menggunakan panah (->) untuk menunjuk field yang ada di database -->
						<td><?= $row->productName ?></td>
						<td><?= $row->stock ?></td>
						<td>
							<!-- Akan melakukan update atau delete sesuai dengan id yang diberikan ke controller -->
							<a href="<?= base_url() ?>products/updateProduct/<?= $row->productId ?>">Update</a> 
							| 
							<a href="<?= base_url() ?>products/deleteProductDb/<?= $row->productId ?>">Delete</a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		<?php
			}
		?>
	</body>
</html>