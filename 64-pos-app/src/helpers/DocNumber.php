<?php
namespace MyApp\Helpers;

use MyApp\Models\DocumentModel;

class DocNumber
{
  public $documentModel;
  public function __construct()
  {
    $this->documentModel = new DocumentModel();
  }

  public function getData($code)
  {
    $document = $this->documentModel->getByCode($code);
    return $this->getNumber($document);
  }


  private function getNumber($documents)
  {
    $strCode = "";
    $code = "";
    $perubahan = 0;
    foreach ($documents as $value) {
      if ($value['field_name'] == "DiffNumber") {
        if ($perubahan == 1) {
          $nil = 0;
        } else {
          $nil = intval($value['value']);
        }
        $angka = intval($nil) + $value['increment_step'];
        if ($value['increment_step'] != "") {
          for ($i = 1; $i <= ($value['length'] - strlen($angka)); $i++) {
            $code = $code . "0";
          }
          //$angka = $angka + $value->getIncrementStep();
          $valNum = $code . $angka;
          $docid = $value['documentdetil_id'];
          $this->documentModel->updateValue($valNum, $docid);
          $strCode = $strCode . $code . $angka;
        } else {
          $strCode = $strCode . $value->getValue();
        }
      } else if ($value['field_name'] == "Year") {
        if (trim($value['increment_step']) > 0) {
          if ($value['length'] == 2) {
            $tahun = date("y");
            $tahun = strval($tahun);
          } else {
            $tahun = date("Y");
            $tahun = strval($tahun);
          }
          if ($value['value'] < intval($tahun)) {
            $str = $value['value'] + $value['increment_step'];
            $docid = $value['documentdetil_id'];
            $this->documentModel->updateValue($str, $docid);
            $strCode = $strCode . $str;
            $perubahan = 1;
          } else {
            $strCode = $strCode . $value['value'];
          }
        } else {

          $strCode = $strCode . $value['value'];
        }
      } else if ($value['field_name'] == "Month") {

        if ($value['increment_step'] > 0) {
          if ($value['length'] == 2) {
            $bulan = strval(date("m"));
          } else {
            $bulan = strval(date("M"));
          }
          if ($value['value'] < intval($bulan)) {
            $perubahan = 1;
          }
          $strCode = $strCode . $bulan;
          $docid = $value['documentdetil_id'];
          $this->documentModel->updateValue($bulan, $docid);
        } else {
          $strCode = $strCode . $value['value'];
        }
      } else if ($value['field_name'] == "Day") {
        if ($value['increment_step'] > 0) {
          $hari = strval(date("d"));
          if ($value['value'] < intval($hari)) {
            $perubahan = 1;
          }
          $strCode = $strCode . $hari;
          $docid = $value['documentdetil_id'];
          $this->documentModel->updateValue($hari, $docid);
        } else {
          $strCode = $strCode . $value['value'];
        }
      } else {
        $strCode = $strCode . $value['value'];
      }
    }
    return $strCode;
  }
}