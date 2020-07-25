<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceito de Herança em PHP POO</title>
</head>
<body>
    <h1>Herança de Classes</h1>

    <pre>
        <?php
            require_once "class/Visitante.php";
            require_once "class/Aluno.php";
            //require_once "class/Professor.php";
            require_once "class/Bolsista.php";

           $v1 = new Visitante();
           $v1->setNome("Juvenal");
           $v1->setIdade(42);
           $v1->setSexo("M");

           print_r($v1);
           echo "<br>";

           $a1 = new Aluno();
           $a1->setNome("Bruno");
           $a1->setIdade(14);
           $a1->setSexo("M");
           $a1->setMatricula(010203);
           $a1->setCurso("C Sharp");
           $a1->pagarMensalidade();
       
           print_r($a1);

           $b1 = new Bolsista();
           $b1->setNome("Amanda");
           $b1->setIdade(20);
           $b1->setSexo("F");
           $b1->setCurso("Engenharia da Computação");
           $b1->setBolsa(12.5);
           $b1->setMatricula(448822);
           $b1->renovarBolsa();
           $b1->pagarMensalidade();

           print_r ($b1);
        ?>
    </pre>
</body>
</html>