<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MobileModel;
class Mobile extends BaseController{
    public function index(){
        $mobileModel = new MobileModel();
        //print_r($mobileModel);
        // select * from table name

        $data['mobiles'] = $mobileModel->findAll();
        
        return view('mobile/index',$data);
    }
    public function add(){
        return view('mobile/add');
    }
    public function insert(){
        $mobileModel = new MobileModel();
        //$_POST['status'] = isset($_POST['status']);
        $mobileModel->insert($_POST);
        return redirect()->to('/mobile');
    }
    public function delete($id){
        $mobileModel = new MobileModel();
        $mobileModel->delete($id);
        return redirect()->to('/mobile');
    }
    public function edit($id){
        $mobileModel = new MobileModel();
        // select * from table name where id = $id
        $data['mobile'] = $mobileModel->find($id);
        return view('mobile/edit',$data);
    }
    public function update(){
        $mobileModel = new MobileModel();
        $mobileModel->update($_POST['id'],$_POST);
        return redirect()->to('/mobile');
    }
}