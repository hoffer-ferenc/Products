<?php 
namespace App\Models;
use CodeIgniter\Model;

class Product_model extends Model
{
    protected $table = 'details';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['product_name', 'product_number', 'description', 'vat', 'date_record', 'stock','modify_date','modify_amount'];

}
