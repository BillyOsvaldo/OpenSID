<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<script language="javascript" type="text/javascript">

	function ubah_bayi(asal)
	{
		$('#bayi').val(asal);
		if (asal == 1)
		{
			$('.bayi_desa').show();
			$('.bayi_luar_desa').hide();
		}
		else
		{
			$('.bayi_desa').hide();
			$('.bayi_luar_desa').show();
			$('#id_bayi').val('*'); // Hapus $id_bayi
			// Hapus data kelahiran
			$('.data_lahir').val('');
			submit_form_ambil_data();
		}
		$('input[name=anchor').val('bayi');
	}



	function nomor_surat(nomor){
		$('#nomor').val(nomor);
	}

	function submit_form_ambil_data()
	{
		$('input').removeClass('required');
		$('select').removeClass('required');
		$('#'+'validasi').attr('action','');
		$('#'+'validasi').attr('target','');
		$('#'+'validasi').submit();
	}

	function buat_penduduk_baru()
	{
		$('input[name=penduduk_baru]').val('1');
		$('input').removeClass('required');
		$('select').removeClass('required');
		$('.data_lahir').addClass('required');
		$('.data_lahir').addClass('required');
		$('#'+'validasi').attr('action','');
		$('#'+'validasi').attr('target','');
		$('#'+'validasi').submit();
	}

	$('document').ready(function()
	{

		/* pergi ke bagian halaman sesudah mengisi warga desa */
		location.hash = "#" + $('input[name=anchor]').val();

		/* set nama_sex dari pilihan */
		$('input[name=nama_sex]').val($('#sex').find(':selected').text())

	});
</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Permohonan KTP</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Form KTP Baru</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url("surat")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
					 	</a>
						<a href="#" class="btn btn-social btn-flat btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Lihat Info Isian Surat"  data-toggle="modal" data-target="#infoBox" data-title="Lihat Info Isian Surat">
						 	<i class="fa fa-info-circle"></i> Info Isian Surat
						</a>
					</div>
					<div class="box-body">
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">

							<div class="col-md-12">
								<input name="anchor" type="hidden" value="<?= $anchor; ?>"/>
								<?php if ($individu): ?>
									<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
								<?php	endif; ?>
								<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>

								<div class="form-group subtitle_head">
									<label class="col-sm-3 control-label" for="status">DATA PEMOHON </label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (!empty($bayi)): ?>active<?php endif ?>">
											<input id="bayi_1" type="radio" name="bayi" class="form-check-input" type="radio" value="1" <?php if (!empty($bayi)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_bayi(this.value);"> Dari Database Penduduk
										</label>
										<label id="label_bayi_2" class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (empty($bayi)): ?>active<?php endif; ?>">
											<input id="bayi_2" type="radio" name="bayi" class="form-check-input" type="radio" value="2" <?php if (empty($bayi)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_bayi(this.value);"> Belum Terdata
										</label>
									</div>
								</div>
								<div class="form-group bayi_desa" <?php if (empty($bayi)): ?>style="display: none;"<?php endif; ?>>
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PEMOHON DARI DATABASE</strong></label>
								</div>
								<div class="form-group bayi_desa" <?php if (empty($bayi)): ?>style="display: none;"<?php endif; ?>>
									<label for="ibu_desa" class="col-sm-3 control-label" ><strong>NIK / Nama</strong></label>
									<div class="col-sm-6 col-lg-4">
										<select class="form-control  input-sm select2" id="id_bayi" name="id_bayi" style ="width:100%;"  onchange="submit_form_ambil_data(this.id);">
											<option value=""><?php if($bayi): ?>NIK : <?= $bayi['nik']?> - <?= $bayi['nama']?><?php else: ?>-- Cari NIK / Nama Penduduk --<?php endif; ?></option>
											<?php foreach ($anak as $data): ?>
												<option value="<?= $data['id']?>" >NIK : <?= $data['nik']." - ".$data['nama']?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
								<?php if ($bayi): ?>
									<?php $individu = $bayi;?>
									<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
								<?php	endif; ?>
								<?php if (empty($bayi)): ?>
									<div class="form-group bayi_luar_desa">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PEMOHON BELUM TERDATA</strong></label>
									</div>
									<div class="form-group bayi_luar_desa">
										<label for="nama_bayi"  class="col-sm-3 control-label">Nama Pemohon</label>
										<div class="col-sm-8">
											<input type="text" name="nama_bayi" class="form-control input-sm required" placeholder="Nama Yang Lahir" value="<?= $_SESSION['post']['nama_bayi']?>"></input>
										</div>
									</div>
									<div class="form-group bayi_luar_desa">
										<label for="nik_bayi"  class="col-sm-3 control-label">NIK Pemohon</label>
										<div class="col-sm-8">
											<input type="text" name="nik_bayi" class="form-control input-sm required" placeholder="NIK Yang Lahir" value="<?= $_SESSION['post']['nik_bayi']?>"></input>
											<p class="help-block small">*isi tanda - jika belum memiliki NIK</p>
										</div>
									</div>
									<div class="form-group bayi_luar_desa">
										<input type="hidden" name="nama_sex">
										<label for="nama_sex"  class="col-sm-3 control-label">Jenis Kelamin</label>
										<div class="col-sm-4">
										<select name="sex" class="form-control input-sm required data_lahir" id="sex" onchange="$('input[name=nama_sex]').val($(this).find(':selected').text());">
											<option value="">Pilih Jenis Kelamin</option>
											<?php foreach ($sex as $data): ?>
												<option value="<?= $data['id']?>" <?php if ($data['id']==$_SESSION['post']['sex']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
											<?php endforeach;?>
										</select>
										</div>
									</div>
								<?php	endif; ?>
								<div class="form-group">
									<label for="ttl"  class="col-sm-3 control-label">Hari / Tanggal </label>
									<div class="col-sm-3 col-lg-4">
										<input id="hari" readonly="readonly" class="form-control input-sm data_lahir hari" type="text" placeholder="Hari Lahir" name="hari" value="<?= $_SESSION['post']['hari']?>">
									</div>
									<div class="col-sm-3 col-lg-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal" class="form-control input-sm data_lahir data_hari required datepicker" placeholder="Tgl. Lahir" name="tanggallahir" type="text" value="<?= $_SESSION['post']['tanggallahir']?>"/>
										</div>
									</div>

								</div>
								<div class="form-group">
									<label for="tempatlahir"  class="col-sm-3 control-label">Tempat Kelahiran</label>
									<div class="col-sm-8">
										<input name="tempatlahir" type="text" class="form-control input-sm required data_lahir" id="tempatlahir" placeholder="Tempat kelahiran" value="<?= $_SESSION['post']['tempatlahir']?>"/>
										<p class="help-block small">*(Nama Kota/Kabupaten)</p>
									</div>
								</div>
								<?php if ($ibu and !$bayi): ?>
									<div class="form-group">
										<label class="col-sm-3 control-label">&nbsp;</label>
										<input name="penduduk_baru" type="hidden" value="">
										<div class="col-sm-2">
										<button type="button" onclick="buat_penduduk_baru();" class="btn btn-social btn-flat btn-danger btn-sm"><span class="fa fa-download">&nbsp;</span>Buat Penduduk Baru</button>
										</div>
									</div>
								<?php endif; ?>

								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>PENANDA TANGAN</strong></label>
								</div>

								<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
							</div>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
				<div class='modal fade' id='infoBox' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header btn-default'>
								<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
								<h4 class='modal-title' id='myModalLabel'><i class='fa fa-info-circle'></i>&nbsp;&nbsp;Info Isian Surat</h4>
							</div>
							<div class='modal-body small'>
								<h5><strong>Form ini menghasilkan:</strong></h5>
								<ol>
									<li>Form isian data Penduduk untuk Formulir KTP</li>
									<li>Permohonan Penyelesaian KTP</li>
									<li>Lampiran F-2.01 SURAT KETERANGAN KELAHIRAN bagi warga yang akan dibuatkan KTP</li>
								</ol>
								<p>Pastikan semua biodata orang tua warga yang lahir, pelapor dan saksi-saksi sudah lengkap sebelum mencetak surat dan lampiran. </p>
								<p>Untuk melengkapi data itu, ubah data warga yang bersangkutan di form isian penduduk di modul Penduduk.</p>
								<p>PERHATIAN: setelah Export Doc, pengisian/perubahan data kelahiran akan direkam ke database penduduk.</p>
							</div>
							<div class='modal-footer btn-default'>
								<button type="button" class="btn btn-social btn-flat btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
