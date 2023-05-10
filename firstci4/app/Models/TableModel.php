<?php namespace App\Models;

use CodeIgniter\Model;


class TableModel extends Model
{

  protected $table = 'new_table';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'email',
    'name',
    'comment'
  ];
}

?>