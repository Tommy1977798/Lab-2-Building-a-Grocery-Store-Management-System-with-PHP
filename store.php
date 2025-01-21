<?php
session_start();

class GroceryStore {
    private $data_file = "item.json";
    public $items = [];

    public function __construct() {
        if (file_exists($this->data_file)) {
            $this->items = json_decode(file_get_contents($this->data_file), true);
        }
    }

    public function saveData() {
        file_put_contents($this->data_file, json_encode($this->items, JSON_PRETTY_PRINT));
    }

    public function addItem($name, $type, $price, $expiry) {
        $newItem = [
            "id" => uniqid(), // 生成唯一 ID
            "name" => $name,
            "type" => $type,
            "price" => number_format($price, 2),
            "expiry" => $expiry
        ];
        $this->items[] = $newItem;
        $this->saveData();
    }

    public function isExpired($expiry_date) {
        return strtotime($expiry_date) < time();
    }
}

$store = new GroceryStore();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['addItem'])) {
    $store->addItem($_POST['name'], $_POST['type'], $_POST['price'], $_POST['expiry']);
    header("Location: mainpage.php");
    exit;
}
?>
