<html>
    <head>
        <title>Unlocked</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
<body class="body-style-9">
    <h1>Unlock Your Account</h1>
    <h2>You Unlock was processed:</h2>
    <form class="form-style-9">
        <ul>
            <li>
                <div class="field-style field-full align-none">
                <?php
                       if (isset($_POST['DBANS'])) {
                               //check Query Sting for Value
                               if ($_POST['DBANS']==""){
                                       //no value exit
                                       $MSG = "User Name Not Found";
                               }else{
                                       if ($_POST['DBANS'] == (md5($_POST['ANS']))){
                                               $adname = substr($_POST['User'],11);
                                               //echo $adname;
                                               $op = shell_exec('net user /DOMAIN /active:YES '.$adname.' 2>&1');
                                               //echo $op;
                                               $MSG= ($_POST['User'])."'s Account has been unlocked";
                                               }else{
                                               //echo ($_POST['DBANS']." ". (md5($_POST['ANS'])));
                                               $MSG= "Your answer did not match the anser on the server";
                                               }
                               }
                       }
                echo $MSG;	
                ?>
                </div>
            </li>
            <li>
            <input type="button" value="HOME"  class="field-style field-full align-none" onclick="location.href = 'index.php';" />
            </li>
        </ul>
    </form>
    <?php
    //echo $op; //FOR DEV ONLY !!
    ?>
</body>
</html>
