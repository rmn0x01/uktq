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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/ukt2/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php site_url('admin/ukt2/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="ukt2_id" value="<?php echo $ukt2->ukt2_id?>" />

							<div class="form-group">
								<label for="name">Universitas*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="ukt2_univ" placeholder="Universitas" value="<?php echo $ukt2->ukt2_univ ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Program Studi*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="ukt2_prodi" placeholder="Program Studi" value="<?php echo $ukt2->ukt2_prodi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Link</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="ukt2_linkprodi" placeholder="Link" value="<?php echo $ukt2->ukt2_linkprodi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Logo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="ukt2_logoprodi" />
								<input type="hidden" name="old_ukt2_logoprodi" value="<?php echo $ukt2->ukt2_logoprodi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Golongan 1</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="ukt2_gol1" min="0" placeholder="UKT Golongan 1" value="<?php echo $ukt2->ukt2_gol1 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Golongan 2</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="ukt2_gol2" min="0" placeholder="UKT Golongan 1" value="<?php echo $ukt2->ukt2_gol2 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Golongan 3</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="ukt2_gol3" min="0" placeholder="UKT Golongan 1" value="<?php echo $ukt2->ukt2_gol3 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Golongan 4</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="ukt2_gol4" min="0" placeholder="UKT Golongan 1" value="<?php echo $ukt2->ukt2_gol4 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Golongan 5</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="ukt2_gol5" min="0" placeholder="UKT Golongan 1" value="<?php echo $ukt2->ukt2_gol5 ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
