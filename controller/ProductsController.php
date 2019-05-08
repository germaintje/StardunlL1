<?php
require_once 'model/ProductsLogic.php';
require_once 'utility/utility.php';

class ProductsController
{
    public function __construct()
    {
        $this->ProductsLogic = new ProductsLogic();
        $this->utility = new utility();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function handleRequest()
    {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'create':
                    if ($_POST['product_id'] == null) {
                        include 'view/create.php';
                    } else {
                        $this->collectCreateContact($_POST['product_id'], $_POST['product_type_code'], $_POST['supplier_id'], $_POST['product_name'], $_POST['product_price'], $_POST['other_product_details']);
                    }
                    break;
                case 'reads':
                    $this->collectReadProducts();
                    break;
                case 'read':
                    $this->collectReadContact($_REQUEST['id']);
                    break;
                case 'update':
                    if ($_POST['name'] == null) {
                        include 'view/update.php';
                    } else {
                        $this->collectUpdateContact($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address']);
                    }
                    break;
                case 'delete':
                    $this->collectDeleteContact($_REQUEST['id']);
                    break;
                case 'leveleenreads':
                    $this->collectLevelEenProducts();
                    break;
                default:
                    $this->collectReadProducts();
                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }

    }

    public function collectCreateContact($name, $phone, $email, $address)
    {
        $products = $this->ProductsLogic->createContact($name, $phone, $email, $address);
        include 'view/create.php';
    }

    public function collectUpdateProduct()
    {
        include 'view/update.php';
    }

    public function collectReadProduct($id)
    {

        $products = $this->ProductsLogic->readproduct($id);
        include 'view/ViewProducts.php';


    }

    public function collectReadProducts()
    {
        $result = $this->ProductsLogic->readProducts();
        $products = $this->utility->createTable($result); 
        include 'view/ViewProducts.php';
    
    }

    public function collectDeleteProduct($id)
    {
        //echo "Gebruiker is verwijderd";
        $products = $this->ProductsLogic->deleteProduct($id);
        include 'view/delete.php';

    }


    public function collectLevelEenProducts()
    {
        $result = $this->ProductsLogic->levelTwee();
        $products = $this->utility->createTable($result); 
        include 'view/level1.php';

    }
}
