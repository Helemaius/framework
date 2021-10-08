<?php

namespace App\Controller;


use App\Models\Article;
use PDO;
use PDOException;

class HomeController
{
    public function index()
    {
//database seadistamine
        try {
            $conn = new PDO("sqlite:" . __DIR__ . '/../../database.sqlite');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare("SELECT id, title, content FROM articles");
            $statement->execute();

            // set the resulting array to associative
            $statement->setFetchMode(PDO::FETCH_CLASS, Article::class);

            $results = $statement->fetchAll();
            var_dump($results[0]->capitalizedTitle());
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    public function about()
    {
        //echo $hello ?? 'good boy';  // küsimärgid kontrollivad, kas muutuja on olemas ja kas tal on väärtus sätitud ja kui on ,siis kasuta seda. Kui ei ole, siis võtab selle ggood boy
        // see on justkui if funktsioon


        view('about');
    }

    public function upload()
    {

        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/' . $_FILES['image']['name']);
        header('location: /');
    }
}