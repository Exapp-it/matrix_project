@extends('layouts.app')

@section('content')
<section class="login">
    <div class="section-title">Вход</div>
    <form class="login-form">
        <div class="form-group">
            <label for="username">Имя пользователя</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="cta-button">Войти</button>
    </form>
</section>
@endsection