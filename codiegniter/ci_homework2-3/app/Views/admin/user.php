
<?= $this->extend('layouts/layout');?>
    <?= $this->section('content')?>
    <h1 class = "text-warning ">User list view</h1>
        <?php 
        $length = count($name);
        for($i = 0; $i < $length; $i++):?>
            <ul class = "text-danger">
                <li>
                    <?= $name[$i]?>,
                    <?= $position[$i]?>,
                    <?= $age[$i]?>,
                    <?= $location[$i]?>
                </li>
            </ul>
        <?php endfor?>
    <?= $this->endSection() ?>
    
    
    


    