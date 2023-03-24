<?php $result = require('calc.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="/index.php" method="POST">
        <p>Общая сумма 
            <input type="number" name="osum" value = <?= $osum ?> >
        </p>
        <p>Первоначальный взнос 
            <input type="number" name="psum" value = <?= $psum ?> >
        </p>
        <p> Год
            <select name = "year">
                <option <?= isset($_POST['year']) && $_POST['year'] == '0' ? 'selected' : '' ?>> 0 </option>
                <option <?= isset($_POST['year']) && $_POST['year'] == '1' ? 'selected' : '' ?>> 1 </option>
                <option <?= isset($_POST['year']) && $_POST['year'] == '2' ? 'selected' : '' ?>> 2 </option>
                <option <?= isset($_POST['year']) && $_POST['year'] == '3' ? 'selected' : '' ?>> 3 </option>
                <option <?= isset($_POST['year']) && $_POST['year'] == '4' ? 'selected' : '' ?>> 4 </option>
                <option <?= isset($_POST['year']) && $_POST['year'] == '5' ? 'selected' : '' ?>> 5 </option>
                <option <?= isset($_POST['year']) && $_POST['year'] == '6' ? 'selected' : '' ?>> 6 </option>
                <option <?= isset($_POST['year']) && $_POST['year'] == '7' ? 'selected' : '' ?>> 7 </option>
            </select>
            месяц
            <select name = "month">
                <option <?= isset($_POST['month']) && $_POST['month'] == '0' ? 'selected' : '' ?>> 0 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '1' ? 'selected' : '' ?>> 1 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '2' ? 'selected' : '' ?>> 2 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '3' ? 'selected' : '' ?>> 3 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '4' ? 'selected' : '' ?>> 4 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '5' ? 'selected' : '' ?>> 5 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '6' ? 'selected' : '' ?>> 6 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '7' ? 'selected' : '' ?>> 7 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '8' ? 'selected' : '' ?>> 8 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '9' ? 'selected' : '' ?>> 9 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '10' ? 'selected' : '' ?>> 10 </option>
                <option <?= isset($_POST['month']) && $_POST['month'] == '11' ? 'selected' : '' ?>> 11 </option>
            </select>
        </p>
        <p>
            <input type="checkbox" name="ans">
            Согласен с условиями
        </p>
        <input type="submit" value="Получить">
    </form>
    <?php echo $result; ?> 
</body>

</html>