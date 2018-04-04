<?php

include 'Database.class.php';

class Review{

    private $pdo;

    public function __construct(){

        $db= new Database();
        $this->pdo=$db->connect();

    }

    public function getAll(){

        $sql = 'SELECT * FROM turinys';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
        return $reviews;

    }

    public function getFeatured(){

        $sql = 'SELECT * FROM turinys WHERE featured = 1 ORDER BY date LIMIT 2';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
        return $reviews;

    }

    public function getNonFeatured(){

        $sql = 'SELECT * FROM turinys WHERE featured = 0 ORDER BY date';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
        return $reviews;

    }

    public function addReview($f_name,$l_name,$email,$review){

        $sql = 'INSERT INTO turinys SET f_name=:f_name,l_name=:l_name,email=:email,review=:review';
        $query = $this->pdo->prepare($sql);
        $query->execute([
            'f_name'=>$f_name,
            'l_name'=>$l_name,
            'email'=>$email,
            'review'=>$review
        ]
        );
        // var_dump($query->errorInfo());

    }

}



// $reviews = new Review();
// var_dump($reviews);
// echo"<br>";
// var_dump($reviews->getNonFeatured());
// echo "<br><br>";
// var_dump($reviews->getFeatured());

// $sql = 'SELECT * FROM movies WHERE id = '.$id;
// $query = $pdo->prepare($sql);
// $query->execute();
// $one_movie = $query->fetch(PDO::FETCH_ASSOC);

 ?>
