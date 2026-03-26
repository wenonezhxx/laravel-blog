@extends('layouts.main')

@section('title', 'Галерея')

@section('content')
<h1>Галерея</h1>

<div class="gallery">
    @foreach ($images as $img)
    <div class="item">
        <img src="{{ asset('images/' . $img->filename) }}"
             alt="{{ $img->title }}"
             data-title="{{ $img->title }}"
             data-description="{{ $img->description }}"
             class="open-modal">
        <div class="caption">{{ $img->title }}</div>
    </div>
    @endforeach
</div>

<div id="modal" class="modal" aria-hidden="true">
    <div class="modal-content">
        <span class="close" role="button" aria-label="Закрыть">&times;</span>
        <img id="modal-image" src="" alt="">
        <div class="modal-text">
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal');
    const modalImg = document.getElementById('modal-image');
    const modalTitle = document.getElementById('modal-title');
    const modalDesc = document.getElementById('modal-description');
    const close = document.querySelector('.close');

    document.querySelectorAll('.open-modal').forEach(img => {
        img.addEventListener('click', () => {
            modal.style.display = 'flex';
            modalImg.src = img.src;
            modalTitle.textContent = img.dataset.title;
            modalDesc.textContent = img.dataset.description;
            modal.setAttribute('aria-hidden', 'false');
        });
    });

    close.addEventListener('click', () => {
        modal.style.display = 'none';
        modal.setAttribute('aria-hidden', 'true');
    });

    modal.addEventListener('click', e => {
        if (e.target === modal) {
            modal.style.display = 'none';
            modal.setAttribute('aria-hidden', 'true');
        }
    });
});
</script>
@endsection
