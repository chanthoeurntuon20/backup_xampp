<?php 
    function m_veiew(){
        // $result = "chanthoeurn";
        // return $result;
        include('connect.php');
        $result = [];
        $query  = mysqli_query($connect,"SELECT * FROM student");
        if($query && mysqli_num_rows($query)> 0){
            foreach ($query as $record) {
                $result = $record;
            }
        }
        return $result;
    }
?>