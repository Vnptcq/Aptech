<?php 
class ItemController  extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("ItemModel", $conn);
    }

    public function index() {
        $this->view("layouts/client_layout", ["content"=>"form"]);
        
    }

    public function execute($id = null) {
        //insert or update
        echo"falsw";
            die();
        if(isset($_POST["submit"])) {
            $item_code = $_POST["item_code"];
            $item_name = $_POST["item_name"];
            $quantity = $_POST["quantity"];
            $expired_date = $_POST["expired_date"];
            $note = $_POST["note"];
            $id =  $_POST["id"];
            if(empty($id)) {
                
                $this->__model->createItem($item_code, $item_name, $quantity, $expired_date, $note);
            } else {
                
                $this->__model->updateItemById($id, $item_code, $item_name, $quantity, $expired_date, $note);
            }
            
        } else {
            echo"falsw";
            die();
            $item = $this->__model->getItemById($id);
            $this->view("Data/form", ["store"=> $item]);
            
        }

        
    }

    public function listItem() {
        $listItem =  $this->__model->listItem();
        $this->view("layouts/client_layout", ["content"=>"store/listItem", "listItem"=>$listItem]);
    }

    public function delete($id) {
        $this->__model->deleteItemById($id);
    }
}




?>