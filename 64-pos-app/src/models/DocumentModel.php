<?php
namespace MyApp\Models;

use MyApp\Core\Database;
use PDO;

class DocumentModel extends Database
{
  public function __construct()
  {
    parent::__construct();
    $this->setTableName('nomordocument_dtl');
    $this->setColumn([
      'documentdetil_id',
      'document_code',
      'field_name',
      'length',
      'value',
      'increment_step',
      'ordered',
    ]);
  }

  public function getByCode($code)
  {
    $qry = "select * from nomordocument_dtl where document_code = ? order by ordered asc";
    return $this->qry($qry, [$code])->fetchAll(PDO::FETCH_ASSOC);
  }

  public function updateValue($value, $id)
  {
    return $this->updateData(['value' => $value], ['documentdetil_id' => $id]);
  }
}