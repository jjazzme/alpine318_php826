<?php
require 'vendor/autoload.php';
use PhpOffice\PhpWord\TemplateProcessor;
$template = new TemplateProcessor('./doc.docx');
$imagePath = './sign.png';
$template->setImageValue('podpisantPodpis', [
    'path' => $imagePath,
    'width' => '225px',
    'height' => '225px',
    'ratio' => true
]);
$docPath = './doc01.docx';
$template->saveAs($docPath);
print_r($imagePath . ' | ' . $docPath);
