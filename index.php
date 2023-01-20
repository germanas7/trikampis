<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trikampis</title>
</head>
<body>
<?php
    $a = "";
    $b="";
    $c= "";
    $triangle = '';
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) ){
    $a  = $_POST['a'];
        $b  = $_POST['b'];
        $c  = $_POST['c'];
    }

if ($a == "" || $b == "" || $c == "") {
    $triangle = ' ';
}elseif(($c + $b) > $a || ($c + $a) > $b || ($a + $b) > $c ) {

    if(($c + $b) < $a || ($c + $a) < $b || ($a + $b) < $c){
        $triangle = '<div><p>Iš šitų kraštinių nesigauna trikampis</p></div>';


    }else{

        if ($c == $b  && $c == $a && $a == $b){
            $triangle = '<div><h3>Iš šitų kraštinių gaunasi lygiakraštis trikampis</h3><img class="mt-5" src="https://upload.wikimedia.org/wikipedia/commons/8/88/Triangolo-Equilatero.png" ></div>';
        }elseif((($a !=  $b && $a != $c) && $b == $c) || (($b !=  $a && $b != $c) && $a == $c) || (($c !=  $b && $c != $a) && $b == $a)){
            $triangle = '<div><h3>Iš šitų kraštinių gaunasi lygiašonis trikampis</h3><img class="mt-5" src="https://upload.wikimedia.org/wikipedia/commons/1/19/Triangle.Isosceles.png" ></div>';
        }elseif($c != $b  && $c != $a && $a != $b){
            $triangle = '<div><h3>Iš šitų kraštinių gaunasi ivairiakraštis trikampis</h3><img class="mt-5" src="https://upload.wikimedia.org/wikipedia/commons/9/93/Triangle.Scalene.svg" ></div>';
        }
    }
}
?>

<?php include "virsus.php" ?>
<body>
<div class="container  letters mt-5">
    <div class="row">
    <form class="col-md-6" method="post">
    <div class="card">
        <div class="card-header ">
            <h3>Skaičiuoti ar susiformuoja trikampis</h3>

        </div>
        <div class="card-body">
            <input class="form-control mt-3 col-md-4" type="text" name="a" placeholder="a">
            <input class="form-control mt-3 col-md-4" type="text" name="b" placeholder="b">
            <input class="form-control mt-3 col-md-4" type="text" name="c" placeholder="c">
            <button class="btn btn-primary mt-5">Skaičiuoti</button>
        </div>

    </div>
    </form>

    <div class="mt-5 text-info text-center col-md-6"> <?= $triangle ?></div>
    </div>

</div>



<?php include "apacia.php"?>    
</body>
</html>