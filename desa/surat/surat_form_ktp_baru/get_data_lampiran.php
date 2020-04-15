<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	$this->load->model('keluarga_model');
	$this->load->model('pamong_model');

	if ($_SESSION['id_bayi'])
	{
		$bayi = $this->get_data_surat($_SESSION['id_bayi']);
		$input['nik_bayi'] 		= $bayi['nik'];
		$input['nama_bayi'] 	= $bayi['nama'];
		$input['sex']					= $bayi['sex_id'];
		$input['kk_level']	  = $bayi['kk_level'];
		$input['hari']	  		= hari(strtotime($bayi['tanggallahir']));
		$input['tanggal']	  	= $bayi['tanggallahir'];
		$input['nama_ibu']    = $bayi['nama_ibu'];
		$input['nama_ayah']     = $bayi['nama_ayah'];
		$input['status_kawin']  = $bayi['status_kawin'];
		$input['agama_id']      = $bayi['agama_id'];
		$input['wn_bayi']	      = $bayi['warganegara_id'];
		$input['gol_darah']	    = $bayi['golongan_darah_id'];
		$input['pekerjaan']	    = $bayi['pekerjaan'];
		$input['alamat_bayi']   = $bayi['alamat'];
    $input['rt_bayi']    		= $bayi['rt'];
    $input['rw_bayi']    		= $bayi['rw'];
    $input['desa']       		= $config['nama_desa'];
    $input['kec']       		= $config['nama_kecamatan'];
    $input['kab']       		= $config['nama_kabupaten'];
    $input['provinsi']   		= $config['nama_propinsi'];

	}
	// Jika ibu dari database, gunakan data ibu untuk info kepala keluarga.
	// Kalau tidak, gunakan data yang lahir. Salah satu harus dari database.
	if ($ibu)
	{
		$input['kepala_kk'] 	= $ibu['kepala_kk'];
		$input['no_kk'] 			= $ibu['no_kk'];
	}
	elseif ($bayi)
	{
		$input['kepala_kk'] 	= $bayi['kepala_kk'];
		$input['no_kk'] 			= $bayi['no_kk'];
	}

?>
