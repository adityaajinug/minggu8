<?php
include '../../conf.php';
include '../../conn.php';
use Dompdf\Dompdf;

ob_start();
$hasil = $koneksi->prepare("SELECT * FROM sekolah WHERE id ='".get('id')."'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <center><h1>Data Sekolah</h1></center>
    <table cellpadding="15" >
        <tr>
            <th>Nama    :</th>
            <td><?php echo $data->nama;?></td>
        </tr>
        <tr>
            <th>Alamat  :</th>
            <td><?php echo $data->alamat;?></td>
        </tr>
        <tr>
            <th>Logo    :</th>
            <td><img style="max-width:50px;" src="../../assets/foto/<?php echo $data->logo;?>"> </td>
        </tr>

    </table>
</body>
</html>

<?php
$html = ob_get_clean();
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->setPaper("A4", "landscape");
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream("laporan_" .$data->nama.".pdf",array('Attachment' => 1));
?>