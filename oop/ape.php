<?php
require_once 'animal.php';
class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name);
    }
    public function get_legs() {
        return 2;
    }
    public function get_cold_blooded() {
        return "no";
    }
    public function yell() {
        return "Auooo";
    }
}
?>