@extends('layouts.main')

@section('header-title')
Страница контакты
@endsection

@section('content')
<h1>Contact page</h1>
<form action="{{ route('contact') }}" method="POST">
    @csrf

    <label for="name">Имя</label>
    <input type="text" placeholder="Введите имя" name="name" id="name">

    <label for="email">Email</label>
    <input type="email" placeholder="Введите email" name="email" id="email">

    <label for="subject">Тема</label>
    <input type="text" placeholder="Введите тему" name="subject" id="subject">

    <label for="message">Сообщение</label>
    <textarea name="message" id="message" placeholder="Введите сообщение"></textarea>

    <button type="submit">Отправить</button>
</form>
@endsection