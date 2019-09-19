# пример файла phpexcel 

<?
require_once 'Classes/PHPExcel.php';
$date = $conn->query("SELECT * FROM `test` WHERE `id`= 1");
$objPHPExcel = new PHPExcel();
$objPHPExcel = PHPExcel_IOFactory::load('load.xlsx');
foreach ($date as $key => $value) {
    $objPHPExcel->getActiveSheet()->setCellValue('B1', $value['fam']);
    $objPHPExcel->getActiveSheet()->setCellValue('B2', $value['name']);
    $objPHPExcel->getActiveSheet()->setCellValue('B3', $value['oth']);
    $objPHPExcel->getActiveSheet()->setCellValue('B4', $value['pol']);
    $objPHPExcel->getActiveSheet()->setCellValue('B5', $value['dr']);
    $objPHPExcel->getActiveSheet()->setCellValue('B6', $value['ves']);
    $objPHPExcel->getActiveSheet()->setCellValue('B7', $value['rost']);
}
$objPHPExcel->setActiveSheetIndex(0);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$fileName = "save";
 header('Content-Type: application/vnd.ms-excel');
 header('Content-Disposition: attachment;filename="' . $fileName . '_' . date('d-m-y') . '.xls"');
 header('Cache-Control: max-age=0');
 $objWriter->save('php://output');
