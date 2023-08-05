
<html>
<head>
<head>
</head>
<style>
	hr{
		border-bottom : 6px solid #000; padding: 2px
	}
	.rangkasurat{
		width : 980px;margin:0 auto;background-color : #fff;height: auto;padding: 80px;
	}
    h1 {
        color: green;
    }
    h2 {
        color: green;
    }
</style>
<body>
<div class = "rangkasurat">
<table width="100%">
<tr>
<td width="50" align="center"><img src="<?php echo base_url('assets/admin-page'); ?>/images/logo saintek.png" width="100%"></td>
<td width="60" align="center"><h3><b>YAYASAN PONDOK PESANTREN SALAFIYAH SYAFIIYAH SUKOREJO</b></h3>
							  <h1><b>UNIVERSITAS IBRAHIMY</b></h1>
							  <h2><b>FAKULTAS SAINS DAN TEKNOLOGI</b></h2>
							  <h4><B>JL. KHR. Syamsul Arifin No. 1-2 PO. Box 2 Phone (0338) 451307</B></h4>
							  <h4>Fax. (0338) 453068 Situbondo 68374 website: www.saintek.ibrahimy.ac.id e-mail: sainstekunib@gmail.com</h4>
							  <h3>SUMBEREJO BANYUPUTIH SITUBONDO JAWA TIMUR</h3>
							 
</table>
<hr>
<div class="block-header" align="center">
            <h3>DATA LULUSAN TAHUN ANGKATAN <?php echo htmlspecialchars($this->uri->segment(3), ENT_QUOTES, 'UTF-8'); ?></h>
            <!-- <small><?php echo $_app_name . ' - ' . $_app_slogan; ?></small> -->
        </div>
</body>
</html>
		
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 40px auto;
 border-collapse: collapse;
 }

 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 
<table border="2" cellspacing="0" style="width: 90%" align="center">

 <tr>
 <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Status</th>
 </tr>
 <?php 

$no = 1;
                    foreach ($table as $val) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($val->username, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($val->email, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($val->prodi, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($val->status, ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
 <?php 
 }
 ?>
    </table>
	 <div style="width: 20%; text-align: left; float: right;">Banyuwangi, ....., ...., 20..</div><br>
        <div style="width: 20%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br>
        <div style="width: 20%; text-align: left; float: right;">______________________</div>

    <script>
		
 window.print();
 </script>
</body>
</html>