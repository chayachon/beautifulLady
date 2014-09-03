<?php
function conn()
{
    $con = mysql_connect("localhost", "root", "") or die("Could not connect to mysql server.");
    mysql_select_db("beautifullady") or die(mysql_error());
    mysql_query("SET NAMES UTF8");
    $_POST['con'] = $con;
}

/*function genId($tb)
{
    conn();
    $select = "select max(id) as id from $tb";
    $data = mysql_query($select) or die(mysql_error());
    while ($row = mysql_fetch_array($data)) {
        $_POST['id'] = $row{'id'};
    }

    print_r($_POST['id']);
}*/

function ProductList()
{
    /*$a = array();
    array_push($a,array(
       'name' => 'nienna',
        'pass' => '123456',
    ));
    echo json_encode($a);*/

    conn();
    $result = "select id,name,smallDetail from product";
    $data = mysql_query($result) or die(mysql_error());
    $productList = array();
    while ($row = mysql_fetch_array($data)) {
        array_push($productList,array(
            'id' => $row{'id'},
            'name' =>  $row{'name'},
            'smallDetail' =>  $row{'smallDetail'},
        ));
    }

    echo json_encode($productList);

}

function HowTo(){
    conn();
    $result = "select detail from howto where id=1";
    $data = mysql_query($result) or die(mysql_error());
    $howto='';
    while ($row = mysql_fetch_array($data)) {

            $howto = $row{'detail'};
    }

    echo $howto;
}

if ($_POST['method'] == 'product_list') {
    ProductList();
}
if($_POST['method'] == 'howto'){
    HowTo();
}
?>