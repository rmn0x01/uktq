<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/c_ukt/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Inputter</th>
										<th>Universitas</th>
										<th>Program Studi</th>
										<th>Link</th>
										<th>Logo</th>
										<th>Golongan 1</th>
                                        <th>Golongan 2</th>
                                        <th>Golongan 3</th>
                                        <th>Golongan 4</th>
                                        <th>Golongan 5</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($ukt2s as $ukt2): ?>
									<tr>
										<td>
											<?php echo $ukt2->ukt2_admininput ?>
										</td>
										<td width="150">
											<?php echo $ukt2->ukt2_univ ?>
										</td>
										<td>
											<?php echo $ukt2->ukt2_prodi ?>
										</td>
										<td>
											<?php echo $ukt2->ukt2_linkprodi ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/logo/'.$ukt2->ukt2_logoprodi) ?>" width="64" />
										</td>
										<td>
											<?php echo "Rp ", $ukt2->ukt2_gol1 ?>
										</td>
                                        <td>
											<?php echo "Rp ", $ukt2->ukt2_gol2 ?>
										</td>
                                        <td>
											<?php echo "Rp ", $ukt2->ukt2_gol3 ?>
										</td>
                                        <td>
											<?php echo "Rp ", $ukt2->ukt2_gol4 ?>
										</td>
                                        <td>
											<?php echo "Rp ", $ukt2->ukt2_gol5 ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/c_ukt/edit/'.$ukt2->ukt2_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											 <a onClick="javascript: return confirm('Please confirm deletion');" href=<?php echo site_url('admin/c_ukt/delete/'.$ukt2->ukt2_id)?> class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
