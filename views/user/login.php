<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?=$error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="signup-form"><!--sign up form-->
                    <h2>Вход на сайт</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" value="<?=$email; ?>"/>
                        <input type="password" name="password" placeholder="Пароль"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Вход" />
                    </form>
                </div><!--/sign up form-->
                <p>
                    <a href="/user/register">
                        Регистрация
                    </a>
                </p>

                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>