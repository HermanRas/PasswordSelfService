<html>
    <head>
        <title>Unlock Your Account</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
<body class="body-style-9">
    <h1>Unlock Your Account</h1>
    <h2>Please complete the form:</h2>
    <form name="Unlock" action="unlock_questions.php" method="post" class="form-style-9">
        <ul>
            <li>
                <div class="field-style field-full align-none">Company Number:</div>
                <input name="CN" type="text" required class="field-style field-full align-none" title="10000001" placeholder="10000001" />
            </li>
            <li>
                <div class="field-style field-full align-none">Domain User Name: <i>petragroup\user</i></div>
                <input name="User" type="text" required class="field-style field-full align-none" title="petragroup\user" placeholder="petragroup\user"/>
            </li>
            <li>
		<input type="submit" value="SUBMIT"  class="field-style field-split align-left" />
		<input type="button" value="CANCEL"  class="field-style field-split align-right" onclick="location.href = 'index.php';" />
            </li>
        </ul>
    </form>
</body>

</html>
