<?

function print_arr($array){
    echo "<pre>".print_r($array, true)."</pre>";
}

function get_cat(){
    global $connection;
    $query = "SELECT * FROM categores";
    $res = mysqli_query($connection, $query);
    $arr_cat = array();
    while($row = mysqli_fetch_assoc($res)){
        $arr_cat[$row['id']] = $row;
    }
    return $arr_cat;
}

function map_tree($dataset){

    $tree = array();
    foreach ($dataset as $id=>&$node){
        if (!$node['parent']){
            $tree[$id] = &$node;
        }
        else{
            $dataset[$node['parent']]['childs'][$id] = &$node;
        }
    }

return $tree;
}

function categories_to_string($data){
    foreach($data as $item){
        $string .= categories_to_template($item);
    }
    return $string;
}

function categories_to_template($category){
    ob_start();
    include '../template/category_template.php';
    return ob_get_clean();
}

?>