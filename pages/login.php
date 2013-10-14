<?php 	require "../blocks/header.php";?>
<div id="right">Вход
	<div>
		<form  action='enter.php' method="POST">
            <div>
                <label for="login">Login</label>
                <input type="text" id="login" name="login"
                       placeholder="Login" value="" required/>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" id="passwordlogin" name="password"
                       placeholder="Password" value="" required/>
            </div>
            <div>
                <input type="submit" name="send_form"  value="Ввойти"/>
            </div>
		</form>
	</div>
</div>
<?php require "../blocks/footer.php"; ?>


