<?php

require_once "DataHandler.php";

class ProductsLogic
{
    public function __construct()
    {
        $this->DataHandler = new DataHandler("localhost", "mysql", "stardunk", "root", "root");
    }

    public function __destruct()
    {
    }

    public function createContact($product_id, $product_type_code, $supplier_id, $product_name, $product_price, $other_product_details)
    {
        try {
            $sql = "INSERT INTO contacts(`product_id`,`product_type_code`,`supplier_id`,`product_name`,`product_price`,`other_product_details`)VALUES('$product_id', '$product_type_code', '$supplier_id', '$product_name', '$product_price', '$other_product_details');";
            echo "test1";
            $result = $this->DataHandler->createData($sql);
            echo "test2";
            return $result;
        }catch (Exception $e){
            throw $e;
        }
    }

    public function readProducts(){
        try {
            $sql = "SELECT * FROM products;";
            $result = $this->DataHandler->readsData($sql);

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function levelEenProducts(){
        try {
            $sql = "SELECT * FROM products;";
            $result = $this->DataHandler->readsData($sql);

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function readContact($id)
    {

        try {

            $sql = "SELECT * FROM products WHERE id =" . $id;

            $result = $this->DataHandler->readsData($sql);

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function updateContact($name, $phone, $email, $address)
    {
    }

    public function deleteContact($id)
    {
        try {
            $sql = "DELETE FROM products WHERE id =" . $id ;
            $result = $this->DataHandler->deleteData($sql);
            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

}