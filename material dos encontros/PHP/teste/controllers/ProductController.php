<?php
    include '../models/Product.php';
    class ProductController{
        private $product;

        public function __construct($data)
        {
            $product = new Product();
            $product->name = $data['name'];      
            $product->price = $data['price'];      
            $product->category = $data['category'];      
            $product->stock = $data['stock'];
            $product->likes = $data['likes'];
            $product->purchases = $data['purchases'];
            $product->time_delivery = $data['time_delivery'];
            $product->id = $data['id'];
            $product->image = $data['image'];
            $this->product = $product;      
        }

        function create(){
           return $this->product->create();
        }
        function delete(){
            if($this->product->id == null){
                http_response_code(400);
                return json_encode(['status'=>false,'message'=>"Produto não encontrado"]);
            }
            return $this->product->delete($this->product->id);
        }
        function update(){
            if($this->product->id == null){
                http_response_code(400);
                return json_encode(['status'=>false,'message'=>"ID do produto não informado."]);
            }
            return $this->product->update();
        }
        function list(){
            return json_encode($this->product->list());
        }

    }
?>