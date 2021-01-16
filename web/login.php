<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 14/01/2021
 * Time: 07:50
 */
?>
<section class="login">
    <div class="login__form">
        <h1 class="title title__h2"><span>Вход</span></h1>
        <form method="post">
            <input type="email" name="email" placeholder="your email" required>
            <input type="pass" name="pass" placeholder="your password" required>
            <button type="submit" name="login">Вход</button>
        </form>
        <div class="login__form-year">
            @2020 - <?=date("Y", time());?>
        </div>
    </div>
</section>
