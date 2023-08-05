<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="<?php echo $_meta_deskripsi; ?>">
    <meta name="keywords" content="<?php echo $_meta_keyword; ?>">
    <meta name="author" content="Andhika Putra Pratama">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('assets/admin-page'); ?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        @page {
            size: auto;
            margin: 0mm;
        }

        html {
            background-color: #FFFFFF;
            margin: 0px;
        }

        body {
            margin: 10mm 15mm 10mm 15mm;
        }
        hr{
		border-bottom : 6px solid #000; padding: 2px
	}
	.rangkasurat{
		width : 980px;margin:0 auto;background-color : #fff;height: auto;padding: 80px;
	}
    h1 {
        color: green;
        
    }
    </style>
</head>
<div class = "rangkasurat">
<table width="100%">
<td width="50" align="center"><img src="<?php echo base_url('assets/admin-page'); ?>/images/logo saintek.png" width="100%"></td>
<td width="40" align="center"><h2><b>YAYASAN PONDOK PESANTREN SALAFIYAH SYAFI’IYAH SUKOREJO</b></h2>
							  <h1><b>UNIVERSITAS IBRAHIMY</b></h1>
							  <h1><b>FAKULTAS SAINS DAN TEKNOLOGI</b></h1>
							  <h4><B>JL. KHR. Syamsul Arifin No. 1-2 PO. Box 2 Phone (0338) 451307</B></h4>
							  <h4>Fax. (0338) 453068 Situbondo 68374 website: www.saintek.ibrahimy.ac.id e-mail: sainstekunib@gmail.com</h4>
							  <h3>SUMBEREJO BANYUPUTIH SITUBONDO JAWA TIMUR</h3>
</head>						 			 
</table>
<hr>
        <div class="block-header" align="center">
            <h4>PROFIL DATA LULUSAN TAHUN ANGKATAN <?php echo htmlspecialchars($tahun_lulus, ENT_QUOTES, 'UTF-8'); ?></h4>
            <!-- <small><?php echo $_app_name . ' - ' . $_app_slogan; ?></small> -->
        </div>
       
        <table border="2" cellspacing="0" style="width: 90%" align="center">
            <tbody>
                    <tr>
                        <th colspan="4">PROFIL LULUSAN</th>
                    </tr>
   
              
                    <tr>
                        <th colspan="4">Data Pribadi</th>
                    </tr>
                    <tr>
                        <td rowspan="5" width="20%">
                            <?php if (!empty($foto)) { ?>
                                <a href="javascript:void(0);" class="thumbnail">
                                    <?php echo img('assets/foto-profil/' . $foto, 'class="img-responsive"') ?>
                                </a>
                            <?php } ?>
                        </td>
                        <td width="15%">Nama</td>
                        <td width="5%">: </td>
                        <td><?php echo htmlentities(ucfirst($username), ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Surel</td>
                        <td>: </td>
                        <td><?php echo htmlentities($email, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>: </td>
                        <td><?php echo htmlentities($prodi, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: </td>
                        <td><?php echo htmlentities($jenis_kelamin, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td>: </td>
                        <td><?php echo htmlentities($tempat_lahir . ', ' . indonesian_date($tanggal_lahir), ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">No. NIK</td>
                        <td>: </td>
                        <td><?php echo htmlentities($nik, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Alamat Domisili</td>
                        <td>: </td>
                        <td><?php echo htmlentities($alamat, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">No Telp.</td>
                        <td>: </td>
                        <td><?php echo htmlentities($no_telp, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <th colspan="4">Data Orang Tua</th>
                    </tr>
                    <tr>
                        <td colspan="2">Nama Ayah</td>
                        <td>: </td>
                        <td><?php echo htmlentities($nama_ayah, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Pekerjaan Ayah</td>
                        <td>: </td>
                        <td><?php echo htmlentities($pekerjaan_ayah, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Nama ibu</td>
                        <td>: </td>
                        <td><?php echo htmlentities($nama_ibu, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Pekerjaan ibu</td>
                        <td>: </td>
                        <td><?php echo htmlentities($pekerjaan_ibu, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr class="bg-teal">
                        <th colspan="4">Data Kelulusan</th>
                    </tr>
                    <tr>
                        <td colspan="2">Tahun Masuk</td>
                        <td>: </td>
                        <td><?php echo htmlentities($tahun_masuk, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Tahun Lulus</td>
                        <td>: </td>
                        <td><?php echo htmlentities($tahun_lulus, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">No. Ijazah</td>
                        <td>: </td>
                        <td><?php echo htmlentities($no_ijazah, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">No. SKHUN</td>
                        <td>: </td>
                        <td><?php echo htmlentities($no_skhun, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr class="bg-amber">
                        <th colspan="4">Status</th>
                    </tr>
                    <tr>
                        <td colspan="2">Status</td>
                        <td>: </td>
                        <td><?php echo htmlentities($status, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Deskripsi Status</td>
                        <td>: </td>
                        <td><?php echo htmlentities($deskripsi, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap Core Js -->
    <script >
        window.print();
    </script>
</body>

</html>