<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Esercizio 1 -->
    <h1>Alunni</h1>
    <?php
        require_once "./esercizio-1/Alunno.php";
        $alunni = [
            new Alunno("Niccolo", "Mancini", "18"),
            new Alunno("Tommaso", "Parigi", "18"),
            new Alunno("Mattia", "Cugusi", "18")
        ];
        foreach($alunni as $alunno) {
            echo $alunno->stampaAlunno();
        }
    ?>
    <hr>
    <!-- Esercizio 2 -->
    <h1>Veicoli</h1>
    <?php
        require "./esercizio-2/Automobile.php";
        $automobili = [
            new Automobile("GT", "Ford", "2020"),
            new Automobile("Micra", "Nissan", "2011"),
            new Automobile("Panda", "Fiat", "2022")
        ];
        foreach($automobili as $automobile) {
            echo $automobile->stampaAutomobile();
        }
    ?>
    <hr>
    <!-- Esercizio 3 -->
    <h1>Animali</h1>
    <?php
        require "./esercizio-3/Cane.php";
        $fuffy = new Cane();
        echo $fuffy->verso();
    ?>
    <hr>
    <!-- Esercizio 4 -->
    <h1>Persone e studenti</h1>
    <?php
        require "./esercizio-4/Studente.php";
        $studente = new Studente("Tommaso", "Parigi", "6669421");
        echo $studente->presentati()."<br>";
        $persona = new Persona("Niccolò", "Mancini");
        echo $persona->presentati();
    ?>
</body>
</html>