<?php
if (!empty($ementa)) {
    foreach ($ementa as $key => $value):
            if($value!=''){                
                echo $value;
            }
            else {
                echo '';    
            }   
    endforeach;
} else {
    echo '';    
}
?>