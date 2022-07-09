<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<br>

	<div class="row ml-3">

		<div class="col-md-5">

			<form class="user" method="POST" action="<?= base_url('User/tambahsiswa'); ?>">
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="nama" name="nama"
						placeholder="<?= $user['name']; ?>" value="<?= $user['name']; ?>" readonly>
					<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="nisn" name="nisn" placeholder="NISN"
						value="<?= set_value('nisn'); ?>">
					<?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<span class="pl-3">Tempat, Tanggal Lahir</span>
				<div class="form-group row">
					<div class="col-sm-6">
						<input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir"
							placeholder="Tempat Lahir">
						<?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="col-sm-6">
						<input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir"
							placeholder="Tanggal Lahir">
						<?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="jk" name="jk"
						placeholder="Jenis Kelamin" value="<?= set_value('jk'); ?>">
					<?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="anak_ke" name="anak_ke"
						placeholder="Anak ke" value="<?= set_value('anak_ke'); ?>">
					<?= form_error('anak_ke', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="jumlah_saudara" name="jumlah_saudara"
						placeholder="Jumlah Saudara" value="<?= set_value('jumlah_saudara'); ?>">
					<?= form_error('jumlah_saudara', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="agama" name="agama"
						placeholder="Agama" value="<?= set_value('agama'); ?>">
					<?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="alamat" name="alamat"
						placeholder="Alamat" value="<?= set_value('alamat'); ?>">
					<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="hobi" name="hobi" placeholder="Hobi"
						value="<?= set_value('hobi'); ?>">
					<?= form_error('hobi', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="cita_cita" name="cita_cita"
						placeholder="Cita Cita" value="<?= set_value('cita_cita'); ?>">
					<?= form_error('cita_cita', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="form-group">
					<div class="form-group">
						<select class="form-select form-select-lg rounded-pill fs-6" id="jarak_rumah"
							name="jarak_rumah" aria-label="Default select example">
                            <option value="">Jarak Rumah</option>
							<option value="1 KM">1 KM</option>
							<option value="2 KM">2 KM</option>
                            <option value="3 KM">3 KM</option>
                            <option value="4 KM">4 KM</option>
                            <option value="5 KM">5 KM</option>
                            <option value="6 KM">6 KM</option>
							<option value="7 KM">7 KM</option>
                            <option value="8 KM">8 KM</option>
                            <option value="9 KM">9 KM</option>
                            <option value="10 KM">10 KM</option>
						</select>
					</div>
					<?= form_error('jarak_rumah', '<small class="text-danger pl-3">', '</small>'); ?>

				</div>

				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="transportasi" name="transportasi"
						placeholder="Transportasi ke Sekolah" value="<?= set_value('transportasi'); ?>">
					<?= form_error('transportasi', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<button type="submit" class="btn btn-primary btn-user btn-block">
					Submit
				</button>

			</form>
			<br>
		</div>

	</div>

</div>
<!-- /.container-fluid -->
