<?php 
namespace App\Controllers;
use App\Models\Product_model;
use App\Models\TestModel;
use CodeIgniter\Controller;

class Product_controller extends Controller
{
    // show product list
    public function index(){
    $Product_model = new Product_model();
    $TestModel = new TestModel;
    $data['details'] = $Product_model->orderBy('id', 'DESC')->findAll();
    return view('productlist', $data);
    }

    // add product form
    public function create(){
    return view('addproduct');   
    }
 
    // add data
    public function store() {
    $TestModel = new TestModel;
    $alldata = $TestModel->get();
    $id = $this->request->getVar('id');
    $exist = 0;
    $stock = 0;
    foreach($alldata->getResult() as $key=>$row)
    {
        if($row->product_number == $this->request->getVar('product_number')){
            $exist = 1;
            $id=$row->id;
            $stock=$row->stock;
        }
    }
    if($exist == 1){
        $TestModel->update_data($id, array(
            'stock'  => $this->request->getVar('stock')+$stock,
            'modify_date'  => date('Y-m-d H:i:s'),
            'modify_amount'  => $this->request->getVar('stock'),
        ));
        return $this->response->redirect(site_url('/productlist'));
    }else{
        $TestModel->insert_data(array(
            'product_name' => $this->request->getVar('product_name'),
            'product_number'  => $this->request->getVar('product_number'),
            'description'  => $this->request->getVar('description'),
            'vat'  => $this->request->getVar('vat'),
            'stock'  => $this->request->getVar('stock'),
        ));
        return $this->response->redirect(site_url('/productlist'));
    }
    }

    // show single data
    public function singleUser($id = null){
    $Product_model = new Product_model();
    $data['product_obj'] = $Product_model->where('id', $id)->first();
    return view('editproduct', $data);
    }

    // update data
    public function update(){
    $TestModel = new TestModel;
    $id = $this->request->getVar('id');
    $alldata = $TestModel->get();
    $stock = 0;
    $var1 = 0;
    foreach($alldata->getResult() as $key=>$row)
    {
        $stock=$row->stock;
    }
    if($this->request->getVar('stock') >= $stock){
        $var1 = $this->request->getVar('stock')-$stock;
    }else{$var1 = ($stock-$this->request->getVar('stock'))*-1;}
    $TestModel->update_data($id, array(
        'product_name' => $this->request->getVar('product_name'),
        'product_number'  => $this->request->getVar('product_number'),
        'description'  => $this->request->getVar('description'),
        'vat'  => $this->request->getVar('vat'),
        'stock'  => $this->request->getVar('stock'),
        'modify_date'  => date('Y-m-d H:i:s'),
        'modify_amount'  => $var1,
    ));
    return $this->response->redirect(site_url('/productlist'));
    }
 
    // delete..
    public function delete($id = null){
    $Product_model = new Product_model();
    $data['user'] = $Product_model->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/productlist'));
    }    
}