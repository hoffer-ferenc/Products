<?php 
namespace App\Models;
use CodeIgniter\Model;

class TestModel extends Model
{
    protected $table = 'details';
    public $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect(); // default database group
    }

    public function get(){
        $builder = $this->db->table('details');
        $query = $builder->get();
        return $query;
    }

    public function insert_data($data = array())
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }

    public function update_data($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            "id" => $id,
        ));
        return $this->db->affectedRows();
    }

    public function delete_data($id)
    {
        return $this->db->table($this->table)->delete(array(
            "id" => $id,
        ));
    }

    public function get_all_data()
    {
        $query = $this->db->query('select * from ' . $this->table);
        return $query->getResult();
    }
}