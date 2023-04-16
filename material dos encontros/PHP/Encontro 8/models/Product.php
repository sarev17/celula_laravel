<?php
    include '../database/connect.php';
    class Product{
        public $name;
        public $stock;
        public $price;
        public $category;
        public $id;
        private $conn;

        public function __construct()
        {
            $conn = new DB();
            $this->conn = $conn->connect();            
        }

        public function create(){
            $query = "INSERT INTO products (name, price, stock, category)
            VALUES ('$this->name','$this->price', '$this->stock', '$this->category');";
            return $this->response($query,'Produto cadatsrado.','Erro ao cadastrar produto',201,400);
            
        }

        public function delete($id){
            $query = "DELETE FROM products WHERE id = {$id}";
            return $this->response($query,'Produto removido','Erro ao remover produto',200,400);
        }

        function update(){
            $set = array();
            if(!empty($this->name)){
                $set[] = "name = '{$this->name}'";
            }
            if(!empty($this->price)){
                $set[] = "price = '{$this->price}'";
            }
            if(!empty($this->stock)){
                $set[] = "stock = '{$this->stock}'";
            }
            if(!empty($this->category)){
                $set[] = "category = '{$this->category}'";
            }
            $data = implode(',',$set);
            // return $data;
            $query = "UPDATE products
            SET {$data}
            WHERE id = $this->id";
            return $this->response($query,'Produto atualizado','Erro ao atualizar produto',201,400);
        }

        function list(){
            if($this->id!==null){
                $set = "WHERE   id = '$this->id'";
            }else{
                $set = '';
            }
            $query = "SELECT * FROM products {$set}";
            $result = mysqli_query($this->conn,$query);
            if($result->num_rows>0){
                $reg = array();
                while($row = $result->fetch_assoc()){
                    $reg[] = $row;
                }
                http_response_code(200);
                return $reg;
            }
        }

        private function response($query,$msg_ok,$msg_error,$status_ok,$status_error){
            if(mysqli_query($this->conn,$query)){
                http_response_code($status_ok);
                mysqli_close($this->conn);
                return json_encode(['status'=>true,'message'=>$msg_ok]);
            }
            http_response_code($status_error);
            $erro = mysqli_error($this->conn);
            mysqli_close($this->conn);
            return json_encode(['status'=>false,'message'=>$msg_error." ".$erro]);
        }
    }
