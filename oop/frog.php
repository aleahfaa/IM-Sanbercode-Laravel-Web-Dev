<?php
require_once 'animal.php';
class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name);
    }
    public function get_legs() {
        return 4;
    }
    public function get_cold_blooded() {
        return "no";
        // return "yes";
    }
    public function jump() {
        return "hop hop";
    }
}
?>