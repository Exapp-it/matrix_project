@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Добро пожаловать в закрытый клуб предпринимателей</h1>
        <p class="hero-description">Место, где предприниматели обмениваются идеями и опытом</p>
        <a href="/register" class="cta-button">Присоединиться</a>
    </div>
</section>
<section class="events">
    <div class="section-title">События</div>
    <ul class="event-list">
        <li class="event-item">
            <h2 class="event-title">Бизнес-форум</h2>
            <p class="event-description">Присоединяйтесь к нашему бизнес-форуму, где лучшие специалисты делятся своими знаниями.</p>
            <a href="/events/forum" class="cta-link">Узнать больше</a>
        </li>
        <li class="event-item">
            <h2 class="event-title">Мастер-класс по маркетингу</h2>
            <p class="event-description">Узнайте секреты эффективного маркетинга на нашем мастер-классе.</p>
            <a href="/events/marketing" class="cta-link">Узнать больше</a>
        </li>
    </ul>
</section>

<section class="contact">
    <div class="section-title">Контакты</div>
    <p class="contact-info">Адрес: Город, Улица, Дом</p>
    <p class="contact-info">Email: info@club.com</p>
    <p class="contact-info">Телефон: +7 (123) 456-7890</p>
</section>
@endsection