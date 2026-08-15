<?php require ('public/src/php/selectAllFromDB.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="public/src/css/history.css">
    <link rel="stylesheet" href="public/src/css/top_bottom-bars.css">
    <link rel="icon" href="public/img/historyIcon.png" type="image/icon type">
    <meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width,
    initial-scale=1.0, text/html">




    <title>History</title>
    <script type="text/javascript" src="public/src/js/historyPageCheckEmpty.js"></script>
</head>

<body onload="isTableEmpty()">   
    <a href="index.html" style="font-size: xx-large;">върни се</a><br>
    
    <div id="historyBox" style="display: none;">
        <section>
            <table id="tbl">
                <caption class="xd">История</caption>
                    <tr>
                        <th>№</th>
                        <th>Дата</th>
                        <th>Действие</th>
                        <th>Сума</th>
                        <th>Причина</th>
                    </tr>
                             
                <div id="inp"><?php require ('public/src/php/printTableRow.php');?></div>
            </table>
        </section>
        
    </div>
   
</body>

</html>