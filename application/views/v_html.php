<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href=<?php echo base_url();?>static/bootstrap.min.css"'rel="stylesheet">
	<title>CodeIgniter Test</title>

	<style>

		table,
		th,
		td{
			border: 1px solid black;
		}
		table{
			width: 100%;
		}
	</style>
</head>
 
<body> class="container">

	<div id="table">
		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($response as $data) { ?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['name'];?></td>
						<td><?php echo $data['email'];?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>