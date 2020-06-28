<?php 
    namespace App\Libraries;
    class Admin{
        public function title($params){
            if($params['title']){
                return veiw('admin/cmps/title'.$params);
            }
        }
    }
?>