<?php
require_once "vendor/autoload.php";
use App\classes\Home;
$home=new Home();

if (isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $home->index();
    }
    if($_GET['page']=='detail')
    {
        $home->productDetail($_GET['id']);
    }
    if($_GET['page']=='category')
    {
        $home->categoryProduct($_GET['id']);
    }
}
