<?php 	require "../blocks/header.php";?>
<div id="right">
Регистрация
           <form action='users.php' method="POST">
                <div>
                    <div>
                        <label for="login">Ваш логин<sup>*</sup></label>
                        <input type="text" id="login" name="login"
                        placeholder="Логин" value="" required/>
                    </div>
                    <div>
                        <label for="password">Ваш пароль<sup>*</sup></label>
                        <input type="text" id="password" name="password"
                               placeholder="Пароль" value="" required/>
                    </div>
					<div>
                        <label for="first_name">Ваше имя</label>
                        <input type="text" id="first_name" name="first_name"
                        placeholder="Имя" value="" >
                    </div>
                    <div>
                        <label for="last-name">Ваша фамилия</label>
                        <input type="text" id="last-name" name="last_name"
                               placeholder="Фамилия" value="" >
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"
                               placeholder="example@example.com" value="" >
                    </div>
                    <div>
                        <label for="phone">Телефон</label>
                        <input type="phone" id="phone" name="phone"
                               placeholder="0684141572" value="" />
                    </div>
                    <div>
                        <input type="submit" id="#" name="send_form"  value="Зарегистрироваться"/>
                    </div>
                </div>
                </form>
</div>

<?php require "../blocks/footer.php"; 
?>
