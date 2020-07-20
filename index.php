<?php
include ("model.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            display: flex;
        }
        .table_date>tbody td:first-of-type,.table_date>tbody td:last-of-type{
            background: greenyellow;
        }
        .table_date>tbody td:nth-of-type(2){
            width: 10px;
            background: #0c85d0;
        }
    </style>
</head>
<body>
<div>
    <table>
        <thead>
        <th>Emplogee</th>
        <th>Urgent</th>
        </thead>
        <tbody>
        <?php foreach (employee() as $emp){ ?>
            <?php $startDay = preg_split("~\-~",$emp["start_date"]);?>
            <tr>
                <td><?php echo $emp["name"]." ".$emp["surname"]; ?></td>
                <td><?php echo $emp["urgent"]; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <table class="table_date">
        <thead>
        <th> Date Start </th>
        <th colspan="60">Date</th>
        <th> Date End </th>
        <tr>
            <?php for ($i = 0; $i < 3600*24*60; $i+= 3600*24){?>
                <td><?php echo date('j',time()+$i) ?></td>
            <?php } ?>
        </tr>
        </thead>
        <!--        <tbody>-->
        <!--        <th></th>-->
        <!--        -->
        <!--        <th></th>-->
        <!--        </tbody>-->
        <tbody>

        <?php foreach (employee() as $emp){ ?>
            <tr>
                <td><?php echo $emp["start_date"]; ?></td>
                <td></td>
                <td><?php echo $emp["end_date"]?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>