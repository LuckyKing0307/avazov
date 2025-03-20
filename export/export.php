<?php
global $mysqli;
require_once '../vendor/autoload.php';
require_once '../db.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Заголовки столбцов
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Имя');
$sheet->setCellValue('C1', 'Телефон');
$sheet->setCellValue('D1', 'UTM');

$result = $mysqli->query("SELECT id, name, phone, utm FROM users");
$rowNum = 2;

while ($row = $result->fetch_assoc()) {
    $sheet->setCellValue("A$rowNum", $row['id']);
    $sheet->setCellValue("B$rowNum", $row['name']);
    $sheet->setCellValue("C$rowNum", $row['phone']);
    $sheet->setCellValue("D$rowNum", $row['utm']);
    $rowNum++;
}

// Устанавливаем заголовки для скачивания файла
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="users.xlsx"');
header('Cache-Control: max-age=0');

// Сохраняем и отправляем файл пользователю
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

// Закрываем подключение
$mysqli->close();
exit;
?>