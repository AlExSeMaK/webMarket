<main>
    <div class="block">
        <form id="form" method="post" action="/regUser">
            <fieldset>
                <legend>Регистрация</legend>
                <label for="name">Имя</label><input id="name" name="login" type="text" class="menu" placeholder="login" required><span></span><br>
                <label for="mail">Эл. почта</label><input id="mail" name="mail" type="email" class="menu" placeholder="example@gmail.com" required><span></span><br>
                <label for="password">Пароль</label><input id="password" name="password"  type="password" class="menu" pattern="[A-Za-z0-9]{6,30}" required placeholder="Введите пароль"><span></span><br>
                <label for="pwd">Повторите</label><input id="pwd" name="password" type="password" class="menu" placeholder="Повторите пароль" required pattern="[A-Za-z0-9]{6,30}"><span></span><br>
                <h3><? echo $result; ?></h3>
            </fieldset>
        </form>

        <div class="button">
            <label class="qwe" for="button"><input id="button" form="form" type="submit">Зарегистрироваться</label>
        </div>

    </div>
</main>
