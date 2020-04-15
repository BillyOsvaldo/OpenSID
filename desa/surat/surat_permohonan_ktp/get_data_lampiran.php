<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	$this->load->model('keluarga_model');
	$this->load->model('pamong_model');
$pemohon = $this->get_data_surat($individu['id']);

if ($input['id'])
{
$input['nik'] 		= $pemohon['nik'];
$input['nama'] 		= $pemohon['nama'];
$input['sex_id']			= $pemohon['sex_id'];
$input['kk_level']	  = $pemohon['kk_level'];
$input['hari']	  		= hari(strtotime($pemohon['tanggallahir']));
$input['tanggal']	  	= $pemohon['tanggallahir'];
$input['nama_ibu']    = $pemohon['nama_ibu'];
$input['nama_ayah']   = $pemohon['nama_ayah'];
$input['status']  		= $pemohon['status_kawin'];
$input['agama_id']    = $pemohon['agama_id'];
$input['wn_id']	      = $pemohon['warganegara_id'];
$input['gol_darah_id'] = $pemohon['golongan_darah_id'];
$input['pekerjaan']	  = $pemohon['pekerjaan'];
$input['alamat']   		= $pemohon['alamat'];
$input['rt']    			= $pemohon['rt'];
$input['rw']    			= $pemohon['rw'];
$input['desa']       		= $config['nama_desa'];
$input['kec']       		= $config['nama_kecamatan'];
$input['kab']       		= $config['nama_kabupaten'];
$input['provinsi']   		= $config['nama_propinsi'];
$input['kepala_kk'] 	= $pemohon['kepala_kk'];
$input['no_kk'] 			= $pemohon['no_kk'];
}

$desa = $this->keluarga_model->get_desa();
?>
