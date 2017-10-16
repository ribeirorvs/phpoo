<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero {
    public function enterrarOsso(){
        echo "<p>Enterrando osso</p>";
    }
    
    public function abanarRabo(){
        echo "<p>Abanando rabo</p>";
    }
}
