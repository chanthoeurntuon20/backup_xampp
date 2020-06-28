<h1>Attendance view</h1>
<?php 
$length = count($name);
print_r($length);
for($i = 0; $i < $length; $i++):?>
    <li>
        <?= $name[$i]?>,
        <?= $position[$i]?>,
        <?= $age[$i]?>,
        <?= $location[$i]?>
    </li>
    <br>
<?php endfor?>

    
    


    