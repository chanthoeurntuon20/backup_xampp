<?php 
    $data = array();
    function flexsible(&$data){
        $function = "view";//we want which page run first (view stay is folder student/)
        $function($data);
    }
    flexsible($data);
    //
    function view(&$data){
        $result['student '] = m_view($data);// call function m_view from model
        $data['page'] = 'student/view.php';
    }
?>