<?php
$where = array(
    array('status',1,'AND'),
    array('ordering',1)
);
//$error = new Exception('a');
foreach ($where as $value){
    $newWhere[] = "`$value[0]` = '$value[1]'";
    if (isset($value[2])) $newWhere[] = $value[2];
    else echo '';
    /*echo '<pre>';
    print_r($value[2]);
    echo '</pre>';*/
}
echo '<pre>';
print_r($newWhere);
echo '</pre>';