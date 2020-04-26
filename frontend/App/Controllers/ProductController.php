<?php
class ProductController extends Controller {

    private $model;

    public function __construct()
    {
        $this->model = $this->model('Product');
    }

    public function index(){
        $this->view('Master', [
            'Content'=>'Product'
        ]);
    }

}