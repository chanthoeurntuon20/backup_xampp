<?php 
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\AccountModel;
    class Account extends BaseController{
        public function index(){
            return view('account/login');
        }
        public function signup(){
           
            return view('account/signup');
        }
        public function save(){
            $accountModel = new AccountModel();
            //print_r($accountModel);
            $_POST['password'] = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $accountModel->insert($_POST);
            return redirect()->to('/account');
        }
        public function login(){
            if($this->exists($_POST['username'],$_POST['password']) != NULL){
                // $session = session();
                // $session->set('username',$_POST['username']);
                return redirect()->to('/account');
            }else{
                $data['message'] = "Invalid";
                return view('account/login',$data);
            }
            // $accountModel = new AccountModel();
            // return redirect()->to('/account');
        }
        private function exists($username,$password){
            $accountModel = new AccountModel();
            $account = $accountModel->where('username',$username)->first();
            if($account != NULL){
                if(password_verify($password,$account['password'])){
                    return $account;
                }
            }
            return NULL;
        }
    }
?>