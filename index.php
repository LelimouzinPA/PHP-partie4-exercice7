<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
function people() {
    $age = 5;
    $gender ='Homme';
    if (($age >= 18)&($gender === 'Femme')) {
             echo("Vous êtes une femme et vous êtes majeur");
        } elseif (($age >= 18)&($gender === 'Homme')){
             echo("Vous êtes un homme et vous êtes majeur");
         }elseif (($age <= 17)&($gender === 'Femme')){
            echo("Vous êtes un Femme et vous êtes mineur");
        }elseif (($age <= 17)&($gender === 'Homme')){
            echo("Vous êtes un homme et vous êtes mineur");
        }
}
?>
    <p><?= people() ?></p>
</body>
</html>