<?php


namespace App\classes;
use App\classes\Product;
use App\classes\Category;

class Home
{
    public $product,$products=[],$singleProduct ,$category ,$categories=[];
    public function index()
    {
            $this->category=new Category();
            $this->categories =$this->category->getAllCategory();


           $this->product=new Product();
           $this->products=$this->product->gettAllProduct();

       view('home',['products'=>$this->products,'categories'=>$this->categories]);
    }
    public function productDetail($id)
    {

        $this->product=new Product();
        $this->singleProduct=$this->product-> productDetailId($id);

        return view( 'detail',['product'=>$this->singleProduct,'categories'=>$this->categories]);
    }
    public function categoryProduct($id)
    {
        $this->category=new Category();
        $this->categories =$this->category->getAllCategory();

        $this->product=new Product();
        $this->products=$this->product->categoryByid($id);
        return view('category',['products'=>$this->products,'categories'=>$this->categories]);
    }
}