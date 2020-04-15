<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<style type="text/css">
table.disdukcapil
{
	width: 100%;
	border: solid 1px #000000;
	/*border-collapse: collapse;*/
}
table.disdukcapil td
{
	padding: 1px 1px 1px 3px;
	margin: 0px;
}
table.disdukcapil td.padat
{
	padding: 0px;
	margin: 0px;
}
table.disdukcapil td.anggota
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: dashed 1px #000000;
	border-bottom: dashed 1px #000000;
}
table.disdukcapil td.judul
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: double 1px #000000;
	border-bottom: double 1px #000000;
}
table.disdukcapil td.bawah {border-bottom: solid 1px #000000;}
table.disdukcapil td.atas {border-top: solid 1px #000000;}
table.disdukcapil td.tengah_blank
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
}
table.disdukcapil td.pinggir_kiri {border-left: solid 1px #000000;}
table.disdukcapil td.pinggir_kanan {border-right: solid 1px #000000;}
table.disdukcapil td.kotak {border: solid 1px #000000;}
table.disdukcapil td.abu {background-color: lightgrey;}
table.disdukcapil td.kode {background-color: lightgrey;}
table.disdukcapil td.kode div
{
	margin: 0px 15px 0px 15px;
	border: solid 1px black;
	background-color: white;
	text-align: center;
}
table.disdukcapil td.pakai-padding
{
	padding-left: 20px;
	padding-right: 2px;
}
table.disdukcapil td.kiri { text-align: left; }
table.disdukcapil td.kanan { text-align: right; }
table.disdukcapil td.tengah { text-align: center; }

table#kop
{
	margin-top: -5px;
	margin-bottom: 0px;
	padding: 0px;
	border: 0px;
	border-collapse: collapse;
}
table#kop td {padding: 0px; margin: 0px;}
table#kop tr {padding: 0px; margin: 0px;}
table#kode
{
	padding: 2px 10px;
	border: solid 1px black;
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 11pt;
}
</style>

<page orientation="portrait" format="210x330" style="font-size: 7pt">
	<table id="kode" align="right">
		<tr><td><strong>Kode . F-2.01</strong></td></tr>
	</table>
	<table id="kop" class="disdukcapil">
		<col span="48" style="width: 2.0833%;">
		<tr><td colspan=48>&nbsp;</td></tr>
		<tr>
			<td colspan="10">Pemerintah Desa/Kelurahan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_desa'];?></td>
			<td colspan="13">&nbsp;</td>
			<td colspan="3">Ket : </td>
			<td colspan="4">Lembar 1</td>
			<td>: </td>
			<td colspan="9">Untuk yang bersangkutan</td>
		</tr>
		<tr>
			<td colspan="10">Kecamatan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_kecamatan'];?></td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">Lembar 2</td>
			<td>: </td>
			<td colspan="9">Desa/Kelurahan</td>
		</tr>
		<tr>
			<td colspan="10">Kabupaten/Kota</td>
			<td>:</td>
			<td colspan="7"><?= $config['nama_kabupaten'];?></td>
			<td colspan="16">&nbsp;</td>
			<td colspan="4">Lembar 3</td>
			<td>: </td>
			<td colspan="9">Kecamatan</td>
		</tr>
		
		
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>
	<p style="text-align: center; margin: 0px; padding: 0px;">
		<strong style="font-size: 9pt;">FORMULIR SURAT KETERANGAN KELAHIRAN</strong>
	</p>
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="10">Nama Kepala Keluarga</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kepala_kk'][$i])): ?>
						<?= $input['kepala_kk'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="1">&nbsp;</td>
		</tr>
		
	</table>
	<table class="disdukcapil" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48><strong>BAYI / ANAK </strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_bayi'][$i])): ?>
						<?= $input['nama_bayi'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="1">&nbsp;</td>
		</tr>

		<tr>
			<td colspan="10">2. &nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $input['sex'];?>
				</td>
			<td colspan=5>1. LAKI-LAKI </td>
			<td colspan=7>2. PEREMPUAN </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;&nbsp;Tempat Kelahiran </td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['tempatlahir']?></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Hari dan Tanggal Lahir </td>
			<td>:</td>
			<td colspan="3">Hari : </td>
			<td colspan=4 class="kotak"><?= $input['hari'];?></td>
				<?php
					$tgl = date('dd',strtotime($input['tanggallahir']));
					$bln = date('mm',strtotime($input['tanggallahir']));
					$thn = date('Y',strtotime($input['tanggallahir']));
					?>
			<td colspan="4" class="kanan">Tgl : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="12">&nbsp;</td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Waktu </td>
			<td>:</td>
			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['waktu_lahir'][$i])): ?>
						<?= $input['waktu_lahir'][$i];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10>6. &nbsp;&nbsp;Jenis Kelahiran </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['jenis_kelahiran'][$i])): ?>
						<?= $input['jenis_kelahiran'][$i];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Tunggal</td>
			<td colspan=6>2. Kembar 2 </td>
			<td colspan=6>3. Kembar 3 </td>
			<td colspan=5>4. Kembar 4 </td>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">7. Berat dan Panjang Badan</td>
			<td>:</td>
			<td colspan="3" class="kotak"><?= $input['berat_lahir']?></td>
			<td> gram </td>
			<td colspan="4">&nbsp;</td>
			<td colspan="10">Panjang Bayi</td>
			<td>:</td>
			<td colspan="2" class="kotak"><?= $input['panjang_lahir']?></td>
			<td> cm</td>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">8. &nbsp;&nbsp;Anak Ke </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kelahiran_anak_ke'][$i])): ?>
						<?= $input['kelahiran_anak_ke'][$i];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Satu </td>
			<td colspan=6>2. Dua </td>
			<td colspan=6>3. Tiga </td>
			<td colspan=5>4. Empat </td>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">9. &nbsp;&nbsp;NIK </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_bayi'][$i])): ?>
						<?= $input['nik_bayi'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>


		<tr><td colspan=48 class="bawah"></td></tr>
		<tr>
			<td colspan=48><strong>IBU</strong></td>
		</tr>

		<tr>
			<td colspan="10">1. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ibu'][$i])): ?>
						<?= $input['nama_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ibu'][$i])): ?>
						<?= $input['nik_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;&nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_lahir_ibu']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ibu']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ibu']));
			?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_ibu'][$j])): ?>
						<?= $input['umur_ibu'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['pekerjaanid_ibu'][$j])): ?>
						<?= $input['pekerjaanid_ibu'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $input['pekerjaanibu']?></td>
			<td colspan="2">&nbsp;</td></tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_ibu']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_ibu'][$i])): ?>
						<?= $input['rt_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_ibu'][$i])): ?>
						<?= $input['rw_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desaibu'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecibu'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabibu'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsiibu'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>AYAH</strong></td>
		</tr>

		<tr>
			<td colspan="10">1. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ayah'][$i])): ?>
						<?= $input['nama_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ayah'][$i])): ?>
						<?= $input['nik_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_ayah']));
					$bln = date('mm',strtotime($input['tanggal_lahir_ayah']));
					$thn = date('Y',strtotime($input['tanggal_lahir_ayah']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_ayah'][$j])): ?>
						<?= $input['umur_ayah'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['pekerjaanid_ayah'][$j])): ?>
						<?= $input['pekerjaanid_ayah'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $input['pekerjaanayah']?></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_ayah']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_ayah'][$i])): ?>
						<?= $input['rt_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_ayah'][$i])): ?>
						<?= $input['rw_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desaayah'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecayah'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabayah'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsiayah'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>PELAPOR</strong></td>
		</tr>

		<tr>
			<td colspan="10">1. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_pelapor'][$i])): ?>
						<?= $input['nama_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_pelapor'][$i])): ?>
						<?= $input['nik_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_pelapor']));
					$bln = date('mm',strtotime($input['tanggal_lahir_pelapor']));
					$thn = date('Y',strtotime($input['tanggal_lahir_pelapor']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
							&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_pelapor'][$j])): ?>
						<?= $input['umur_pelapor'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['pekerjaanid_pelapor'][$j])): ?>
						<?= $input['pekerjaanid_pelapor'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $input['pekerjaanpelapor']?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_pelapor']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_pelapor'][$i])): ?>
						<?= $input['rt_pelapor'][$i];?>
						<?php else: ?> &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_pelapor'][$i])): ?>
						<?= $input['rw_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desapelapor'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecpelapor'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabpelapor'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsipelapor'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>SAKSI 1 </strong></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_saksi1'][$i])): ?>
						<?= $input['nama_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
				<tr>
			<td colspan="10">2. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi1'][$i])): ?>
						<?= $input['nik_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi1']));
					$bln = date('mm',strtotime($input['tanggal_lahir_saksi1']));
					$thn = date('Y',strtotime($input['tanggal_lahir_saksi1']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_saksi1'][$j])): ?>
						<?= $input['umur_saksi1'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['pekerjaanid_saksi1'][$j])): ?>
						<?= $input['pekerjaanid_saksi1'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $input['pekerjaansaksi1']?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_saksi1']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_saksi1'][$i])): ?>
						<?= $input['rt_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_saksi1'][$i])): ?>
						<?= $input['rw_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desasaksi1'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecsaksi1'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabsaksi1'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsisaksi1'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=48 class="bawah"></td>
		</tr>
		<tr>
			<td colspan=48><strong>SAKSI 2 </strong></td>
		</tr>

		<tr>
			<td colspan="10">1. &nbsp;&nbsp;Nama </td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_saksi2'][$i])): ?>
						<?= $input['nama_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi2'][$i])): ?>
						<?= $input['nik_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi2']));
					$bln = date('mm',strtotime($input['tanggal_lahir_saksi2']));
					$thn = date('Y',strtotime($input['tanggal_lahir_saksi2']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_saksi2'][$j])): ?>
						<?= $input['umur_saksi2'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['pekerjaanid_saksi2'][$j])): ?>
						<?= $input['pekerjaanid_saksi2'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21" class="kotak"><?= $input['pekerjaansaksi2']?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_saksi2']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_saksi2'][$i])): ?>
						<?= $input['rt_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_saksi2'][$i])): ?>
						<?= $input['rw_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desasaksi2'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecsaksi2'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabsaksi2'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsisaksi2'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr style="line-height: 1px; height: 1px; margin-bottom: -10px;">
			<?php for ($i=0; $i<48; $i++): ?>
				<td style="line-height: 1px; height: 1px; padding: -10px;"></td>
			<?php endfor; ?>
		</tr>
	</table>
	<table id="ttd" class="disdukcapil" style="margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; border-collapse: collapse;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="33">&nbsp;</td>
			<td colspan="15" style="text-align: center">
				<?= $config['nama_desa'];?>, <?= tgl_indo(date('Y m d',time()));?>
			</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Saksi 1,</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Saksi 2,</td>
		</tr>

		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= padded_string_center(strtoupper($input['nama_saksi1']),30)?>&nbsp;)</strong></td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= padded_string_center(strtoupper($input['nama_saksi2']),30)?>&nbsp;)</strong></td>
		</tr>

		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Mengetahui:</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><?= $this->penandatangan_lampiran($data);?></td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Pelapor,</td>
		</tr>
		
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= padded_string_center(strtoupper($input['pamong']),30)?>&nbsp;)</strong></td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= padded_string_center(strtoupper($input['nama_pelapor']),30)?>&nbsp;)</strong></td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
		</tr>
		
		
	</table>
	
	<p style="text-align: left; margin: 0px; padding: 0px;">
		<strong style="font-size: 9pt;">Terlampir persyaratan sebagai berikut :</strong>
	</p>
	<p style="text-align: left; margin: 0px; padding: 0px; font-size: 8pt;" >1.	Pelapor mengisi dan menandatangani formulir surat keterangan yang disediakan </p>
	<p style="text-align: left; margin: 0px; padding: 0px; font-size: 8pt;" >2.	Surat keterangan kelahiran dari Dokter/Bidan/Penolong Kelahiran </p>
	<p style="text-align: left; margin: 0px; padding: 0px; font-size: 8pt;" >3.	Fotocopy KTP dan kartu keluarga orang tua </p>
	<p style="text-align: left; margin: 0px; padding: 0px; font-size: 8pt;" >4.	Fotocopy Buku Nikah / akta perkawinan orang tua yang telah dilegalisir </p>
	<p style="text-align: left; margin: 0px; padding: 0px; font-size: 8pt;" >5.	Fotocopy KTP 2 orang saksi yang masih berlaku </p>
	<p style="text-align: left; margin: 0px; padding: 0px; font-size: 8pt;" >6.	2 (dua) orang saksi menanda tangani Register Kelahiran di Disdukcapil </p>

</page>