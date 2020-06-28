<?php
    $data = array();
    function get_action(&$data){
        $function = "view";
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }
    get_action($data);
    //view data
    function view(&$data){
        $data['view'] = m_view();
        $data['page'] = "student/view";
    }
    //add student
    function add(&$data){
        $data['view'] = m_add();
        $data['page'] = "student/add";
    }
    // function store(&$data){
    //     $result = m_store();
    //     if($result){
    //         header("Location:index.php?action=view");
    //     }else {
    //         header("Location:index.php?action=add");
    //     }
    // }

?>
