if ($name && $password)
{
    /*echo "Funciona";*/
}
else
{
    /*echo "No funciona";*
}

$list=array('nombre'=>$name,'password'=>$password);

$json=json_decode($list);

echo $json;