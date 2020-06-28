
<?php 
$length = count($name);
for($i = 0; $i < $length; $i++):?>
    <li>
        <?= $name[$i]?>,
        <?= $position[$i]?>,
        <?= $age[$i]?>,
        <?= $location[$i]?>
    </li>
    <br>
<?php endfor?>

    
    


    