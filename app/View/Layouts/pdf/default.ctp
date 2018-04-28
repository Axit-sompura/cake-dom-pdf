<?php
require_once(APP . 'Vendor' . DS . 'dompdf' .DS. 'autoload.inc.php');
//spl_autoload_register('DOMPDF_autoload');
$dompdf = new Dompdf\DOMPDF();
$dompdf->set_option('isRemoteEnabled', true);
$dompdf->set_paper = 'A4';
$dompdf->load_html(utf8_decode($content_for_layout), Configure::read('App.encoding'));
 $dompdf->render();

 echo $dompdf->stream($pdf_name, array("Attachment" => 0));

?>