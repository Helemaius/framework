<?php
namespace App\Controller;

class HomeController {
    public function index(){
        var_dump($_GET);
        var_dump($_POST);
        $name= $_GET['name'] ?? 'Nimetu';
        
        
    
        view('index', compact('name'));
        
    }
    
    public function about(){
        //echo $hello ?? 'good boy';  // küsimärgid kontrollivad, kas muutuja on olemas ja kas tal on väärtus sätitud ja kui on ,siis kasuta seda. Kui ei ole, siis võtab selle ggood boy
        // see on justkui if funktsioon

        
        view('about');
    }

    public function upload(){
        var_dump($_FILES);
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/' . $_FILES['image']['name']);
    }
}