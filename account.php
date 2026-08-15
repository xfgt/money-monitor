<?php
$pageTitle = "Money Monitoring - Account";
require_once 'header.php';


// // Force PHP to display all errors on screen
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// phpinfo();

require_once __DIR__ . '/public/src/php/testDbConnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, text/html" />
    <link rel="stylesheet" href="public/src/css/page.css">
    <link rel="icon" href="public/img/fc.gif" type="image/gif">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    
    
    <script type="text/javascript" src="public/src/js/buttonsHideShow.js"></script> <!-- script for dynamic hide/show buttons -->
 </head>

<body>
      
    <div id="mainContent">
        <div id="historyPage"><a href="history.php">История</a></div> <!-- Todo NEW: #historyPage settings css -->


        <!-- Main balance value --> 
        <h2 id="h2_balance" style="font-weight: 400;">Наличност: <tt id="tt_balance" style="font-weight: 800;">
                <?php 
                    include ('public/src/php/getBalance.php');
                ?>
            </tt> лв.
        </h2><br>



        
        <div id="incomeBox">
            <form id="form_income" name="formIncome" method="GET" action="public/src/php/insertToDB.php">
                
                <div id="buttonIncome">
                    <a onclick="
                        hideShowIncome()
                    ">
                        <input type="button" id="inBtn" value="+ Въвеждане" style="background-color: greenyellow;"></input>
                    </a>
                </div> <!-- Green Button for Deposit hide/show -->
                
                
                
                <div id="fundsField" style="display: none;">
                    <input type="text" name="Action" value="1" style="display: none;">
                    <label>Въвеждана сума </label> <input type="number" step="0.01" name=AmountAdded  placeholder="864.19"  required/>
                    <br><br>
                    <label>Аргументи </label> <input type="text" name=ArgumentsIncome  placeholder="заплата" required />
                    <br><br>
                    <label for="time-date"> Дата - час </label> <input type="datetime-local" id="time-income" name=time-income/>
                    <br><br>
                    
                    <div id="SubmitDivIn" style="display:none;">
                        <button type="submit" id="addBalance">Вкарай!</button>
                    </div><!-- Deposit Submit button -->
                </div> <!-- Deposit submit -->               
            </form> 
        </div> <!-- income box -->

        <div id="outcomeBox">
            <form id="form_outcome" name="formOutcome" method="GET" action="public/src/php/insertToDB.php">
                
                <div id="buttonOutcome">
                    
                    <a onclick="
                        hideShowOutcome()
                    ">
                        <input type="button" id="outBtn" value="- Извеждане" style="background-color: red;"></input>
                    </a>
                </div> <!-- Red Button for Withdraw hide/show -->
                
                
                
                <div id="expencesField" style="display:none;">
                    <input type="text" name="Action" value="0" style="display: none;">
                    <label>Извеждана сума </label> <input type="number" step="0.01" name=AmountDrawn  placeholder="64.33"  required/>
                    <br><br>
                    <label>Аргументи </label> <input type="text" name=ArgumentsOutcome  placeholder="сметката за телефона" required />
                    <br><br>
                    
                    <div id="SubmitDivOut" style="display:none;">
                        <button type="submit" id="getBalance">Изведи</button>
                    </div> <!-- Deposit Withdraw button -->
                </div> <!-- Withdraw submit -->
                
                
            </form> 
        </div> <!-- outcome box -->

    </div> <!-- main content -->

    




</body>



<?php
require_once 'footer.php';
?>
</html>