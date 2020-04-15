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
	padding: 2px 1px 2px 1px;
	/*margin: 0px;*/
}
table.disdukcapil td.padat
{
	padding: 0px;
	margin: 0px;
	font-size: 10pt;
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
table.disdukcapil td.bawah {border-bottom: solid 2px #000000;}
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
	padding: 2px 2px;
	border-bottom: double 1px #000000;
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 10pt;
}
table#kop td {padding: 0px; margin: 10px;}
table#kop tr {padding: 0px; margin: 10px;}
table#kode
{
	padding: 2px 10px;
	border: solid 1px black;
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 10pt;
}
	table.ttd
	{
		font-size: 10pt;
		margin-top: 10px;
		width: 100%;
		border-collapse: collapse;
		padding: 0px;
	}
	table.ttd td { text-align: center; }
</style>

<page orientation="portrait" format="210x330" style="font-size: 10pt">
	<table id="kode" align="right">
		<tr><td><strong>Kode . F-2.01</strong></td></tr>
	</table>
	<table id="kop" class="disdukcapil" style="border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr><td colspan=48>&nbsp;</td></tr>
		<tr>
			<td class="kotak padat">
					&nbsp;
				</td>
			<td colspan=1>&nbsp;</td>
			<td colspan="13">BARU</td>
			<td colspan="10">&nbsp;</td>
			<td colspan="12">PEMERINTAH KABUPATEN </td>
			<td colspan="11"><?= strtoupper($desa['nama_kabupaten']);?></td>
		</tr>
		<tr>
			<td class="kotak padat">
					&nbsp;
				</td>
			<td colspan=1>&nbsp;</td>
			<td colspan="13">PERPANJANGAN</td>
			<td colspan="10">&nbsp;</td>
			<td colspan="9">KECAMATAN </td>
			<td>: </td>
			<td colspan="11"><?= strtoupper($desa['nama_kecamatan']);?></td>
		</tr>
		<tr>
			<td class="kotak padat">
					&nbsp;
				</td>
			<td colspan=1>&nbsp;</td>
			<td colspan="13">PENGGANTIAN</td>
			<td colspan="10">&nbsp;</td>
			<td colspan="9">DESA/KELURAHAN </td>
			<td>: </td>
			<td colspan="11"><?= strtoupper($desa['nama_desa']);?></td>
		</tr>
		<tr>
			<td colspan="25">&nbsp;</td>
			<td colspan="9">KODE WILAYAH</td>
			<td>: </td>
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($desa['kode_propinsi'][$i])): ?>
						<?= $desa['kode_propinsi'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($desa['kode_kabupaten'][$i])): ?>
						<?= $desa['kode_kabupaten'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($desa['kode_kecamatan'][$i])): ?>
						<?= $desa['kode_kecamatan'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($desa['kode_desa'][$i])): ?>
						<?= $desa['kode_desa'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>


		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>
	<p style="text-align: center; margin-top: 15px; padding: 0px; border: 0px;">
		<strong style="font-size: 14pt;">FORMULIR ISIAN DATA PENDUDUK</strong><br>
		(Diisi dengan huruf cetak)
	</p>
	<table class="disdukcapil" style="margin-top: 5px; border: 0px;">
		<col span="42" style="width: 2.3833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<42; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan=42><strong>I. DATA KEPALA KELUARGA </strong></td>
		</tr>
		<tr>
			<td colspan="11">Nomor Kartu Keluarga</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['no_kk'][$i])): ?>
						<?= $pemohon['no_kk'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">Nama Kepala Keluarga</td>
			<td>:</td>
			<?php for ($i=0; $i<30; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['kepala_kk'][$i])): ?>
						<?= $pemohon['kepala_kk'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">Alamat</td>
			<td>:</td>
			<?php for ($i=0; $i<13; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['alamat'][$i])): ?>
						<?= strtoupper($pemohon['alamat'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="11">&nbsp;</td>

			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['rt'][$i])): ?>
						<?= $pemohon['rt'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['rw'][$i])): ?>
						<?= $pemohon['rw'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>


	</table>
	<table class="disdukcapil" style="margin-top: 5px; border: 0px;">
		<col span="42" style="width: 2.3833%;">
		<tr>
			<td colspan=42><strong>II. DATA PEMOHON </strong></td>
		</tr>

				<tr>
			<td colspan="11">1. &nbsp;&nbsp;NIK </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['nik'][$i])): ?>
						<?= $pemohon['nik'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">2. &nbsp;&nbsp;Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<30; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['nama'][$i])): ?>
						<?= $pemohon['nama'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="1">&nbsp;</td>
		</tr>

		<tr>
			<td colspan="11">3. &nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $pemohon['sex_id'];?>
				</td>
			<td colspan=7>1. LAKI-LAKI </td>
			<td colspan=7>2. PEREMPUAN </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">4. &nbsp;&nbsp;Status Hubungan Dalam</td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $pemohon['kk_level'];?>
				</td>
			<td colspan=3>1.KK </td>
			<td colspan=4>2.SUAMI</td>
			<td colspan=5>3.ISTERI</td>
			<td colspan=7>4.ANAK</td>
			<td colspan=6>5.MENANTU</td>
			<td colspan=5>6.CUCU</td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keluarga</td>
			<td>&nbsp;</td>
			<td colspan=1>&nbsp;</td>
			<td colspan=7>7.ORANG TUA </td>
			<td colspan=5>8.MERTUA</td>
			<td colspan=6>9.FAMILI LAIN</td>
			<td colspan=6>10.PEMBANTU</td>
			<td colspan=5>11.LAINNYA</td>

		</tr>
		<tr>
			<td colspan="11">5. &nbsp;&nbsp;Tanggal Lahir </td>
			<td>:</td>

				<?php
					$tgl = date('dd',strtotime($pemohon['tanggallahir']));
					$bln = date('mm',strtotime($pemohon['tanggallahir']));
					$thn = date('Y',strtotime($pemohon['tanggallahir']));
					?>
			<td colspan="3" class="kanan">Tgl : </td>
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
			<td colspan="11">6. &nbsp;&nbsp;Tempat Lahir </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['tempatlahir'][$i])): ?>
						<?= strtoupper($pemohon['tempatlahir'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>

		<tr>
			<td colspan=11>7. &nbsp;&nbsp;Status Kawin </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['status_kawin'][$i])): ?>
						<?= strtoupper($pemohon['status_kawin'][$i]);?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan=21>&nbsp;</td>
		</tr>

		<tr>
			<td colspan="11">8. &nbsp;&nbsp;Agama </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['agama_id'][$i])): ?>
						<?= $pemohon['agama_id'][$i];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=3>1. Islam </td>
			<td colspan=4>2. Kristen </td>
			<td colspan=4>3. Katholik </td>
			<td colspan=4>4. Hindu </td>
			<td colspan=4>5. Budha </td>
			<td colspan=5 style="font-size: 9pt;">6. Konghuchu </td>
			<td colspan=4 style="font-size: 8.5pt;">7. Lainnya </td>

		</tr>

		<tr>
			<td colspan="11">9. &nbsp;&nbsp;Golongan Darah </td>
			<td>:</td>
				<td style="font-size: 8.5pt;" class="kotak padat tengah">
					<?= $pemohon['golongan_darah_id'];?>
				</td>
			<td style="font-size: 8.5pt;" colspan=2>1.A </td>
			<td style="font-size: 8.5pt;" colspan=2>2.B </td>
			<td style="font-size: 8.5pt;" colspan=2>3.AB </td>
			<td style="font-size: 8.5pt;" colspan=2>4.O </td>
			<td style="font-size: 8.5pt;" colspan=2>5.A+ </td>
			<td style="font-size: 8.5pt;" colspan=2>6.A- </td>
			<td style="font-size: 8.5pt;" colspan=2>7.B+ </td>
			<td style="font-size: 8.5pt;" colspan=2>8.B- </td>
			<td style="font-size: 8.5pt;" colspan=2>9.AB+ </td>
			<td style="font-size: 8.5pt;" colspan=2>10.AB- </td>
			<td style="font-size: 8.5pt;" colspan=2>11.O+ </td>
			<td style="font-size: 8.5pt;" colspan=2>12.O- </td>
			<td style="font-size: 8.5pt;" colspan=4>13.Tdk Tahu </td>

		</tr>

		<tr>
			<td colspan="11">10. &nbsp;Kewarganegaraan </td>
			<td>:</td>
			<td class="kotak padat tengah"><?= $pemohon['wn_id'] ? $pemohon['wn_id'] : '1';?></td>
			<td colspan=4>1. WNI </td>
			<td colspan=6>2. WNA </td>
			<td colspan=6>&nbsp;</td>
		</tr>

				<tr>
			<td colspan="11">11. &nbsp;Pekerjaan</td>
			<td>:</td>
			<td colspan="21" class="kotak"><?= strtoupper($pemohon['pekerjaan'])?></td>
			<td colspan="2">&nbsp;</td></tr>
		<tr>
			<td colspan="11">12. &nbsp;&nbsp;Nama Orang Tua </td>
			<td>:</td>
			<td colspan=3>Ayah </td>
			<?php for ($i=0; $i<27; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['nama_ayah'][$i])): ?>
						<?= strtoupper($pemohon['nama_ayah'][$i]);?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;&nbsp;</td>
			<td>:</td>
			<td colspan=3>Ibu </td>
			<?php for ($i=0; $i<27; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($pemohon['nama_ibu'][$i])): ?>
						<?= strtoupper($pemohon['nama_ibu'][$i]);?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan=42 class="bawah"></td>
		</tr>


		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr style="line-height: 1px; height: 1px; margin-bottom: -10px;">
			<?php for ($i=0; $i<42; $i++): ?>
				<td style="line-height: 1px; height: 1px; padding: -10px;"></td>
			<?php endfor; ?>
		</tr>
	</table>
	<table id="ttd" class="disdukcapil" style="margin-top: 10px; margin-bottom: 0px; padding: 0px; border: 0px; border-collapse: collapse;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="33">&nbsp;</td>
			<td colspan="15" style="text-align: center">
				<?= $desa['nama_desa'];?>, <?= tgl_indo(date('Y m d',time()));?>
			</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Mengetahui RT,</td>
			<td colspan="15" style="text-align: center;">Mengetahui RW</td>
			<td colspan="15" style="text-align: center;">Pemohon,</td>
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
			<td colspan="15" style="text-align: center;">(..........................)</td>
			<td colspan="15" style="text-align: center;">(..........................)</td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= padded_string_center(strtoupper($pemohon['nama']),30)?>&nbsp;)</strong></td>
		</tr>

		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">Mengetahui:</td>
			<td colspan="15" style="text-align: center;">Mengetahui:</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><?= unpenetration($input['jabatan'])?> <?= unpenetration($desa['nama_desa'])?></td>
			<td colspan="15" style="text-align: center;">Camat <?= $desa['nama_kecamatan']; ?></td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
		</tr>

		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;"><strong>(&nbsp;<?= unpenetration($input['pamong'])?>&nbsp;)</strong></td>
			<td colspan="15" style="text-align: center;">(..........................)</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
			<td colspan="15" style="text-align: center;">&nbsp;</td>
		</tr>


	</table>

	</page>
