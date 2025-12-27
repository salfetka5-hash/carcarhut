@extends('layouts.app')
@section('title', $bb->title)
@section('content')

<section class="carhut-section py-5">
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('catalog') }}" class="btn btn-outline-light mb-3">
                ← Назад к каталогу
            </a>
        </div>

        <div class="row g-4">
            <!-- Основная информация -->
            <div class="col-lg-8">
                <div class="car-detail-card">
                    <div class="car-detail-image-wrapper">
                        @php
                            // Используем локальные изображения
                            if ($bb->image && !\Illuminate\Support\Str::startsWith($bb->image, 'http')) {
                                $imageUrl = asset($bb->image);
                            } else {
                                // Fallback на локальное изображение
                                $imageUrl = asset('images/cars/car1.jpg');
                            }
                        @endphp
                        <img src="{{ $imageUrl }}" 
                             class="car-detail-image w-100" 
                             alt="{{ $bb->title }}"
                             style="height: 500px; object-fit: cover; border-radius: 12px;"
                             onerror="this.src='{{ asset('images/cars/car1.jpg') }}'">
                        <span class="car-card-badge">В наличии</span>
                    </div>
                    
                    <div class="car-detail-content">
                        <h1 class="car-detail-title">{{ $bb->title }}</h1>
                        
                        <div class="car-detail-price-section">
                            <div class="car-detail-price">{{ number_format($bb->price, 0, ',', ' ') }} ₽</div>
                            <div class="car-detail-price-label">Цена</div>
                        </div>

                        <div class="car-detail-description">
                            <h3 class="car-detail-section-title">Описание</h3>
                            <p class="car-detail-text">{{ $bb->content }}</p>
                        </div>

                        <div class="car-detail-specs">
                            <div class="spec-item">
                                <span class="spec-icon">📅</span>
                                <div>
                                    <div class="spec-label">Опубликовано</div>
                                    <div class="spec-value">{{ $bb->created_at->format('d.m.Y') }}</div>
                                </div>
                            </div>
                            <div class="spec-item">
                                <span class="spec-icon">🆔</span>
                                <div>
                                    <div class="spec-label">ID объявления</div>
                                    <div class="spec-value">#{{ $bb->id }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Боковая панель -->
            <div class="col-lg-4">
                <div class="car-detail-sidebar">
                    @if($bb->user)
                        <div class="sidebar-section">
                            <h4 class="sidebar-title">Информация о продавце</h4>
                            <div class="seller-info">
                                <div class="seller-avatar">
                                    {{ substr($bb->user->name ?? 'U', 0, 1) }}
                                </div>
                                <div class="seller-details">
                                    <div class="seller-name">{{ $bb->user->name ?? 'Не указано' }}</div>
                                    <div class="seller-email">{{ $bb->user->email ?? 'Не указано' }}</div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="sidebar-section">
                        <button class="btn carhut-btn-primary w-100 mb-3">
                            📞 Связаться с продавцом
                        </button>
                        <button class="btn btn-outline-light w-100">
                            ⭐ Добавить в избранное
                        </button>
                    </div>

                    @auth
                        <div class="sidebar-section">
                            <h5 class="sidebar-subtitle">Быстрые действия</h5>
                            <div class="quick-actions">
                                <button type="button" class="quick-action-item" onclick="addToCompare({{ $bb->id }})">
                                    <span class="quick-action-icon">📊</span>
                                    <span>Сравнить</span>
                                </button>
                                <button type="button" class="quick-action-item" onclick="shareListing({{ $bb->id }})">
                                    <span class="quick-action-icon">📤</span>
                                    <span>Поделиться</span>
                                </button>
                                <button type="button" class="quick-action-item" onclick="window.print()">
                                    <span class="quick-action-icon">🖨️</span>
                                    <span>Печать</span>
                                </button>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>

@auth
<script>
    function addToCompare(bbId) {
        let compareList = JSON.parse(localStorage.getItem('compareList') || '[]');
        if (!compareList.includes(bbId)) {
            compareList.push(bbId);
            localStorage.setItem('compareList', JSON.stringify(compareList));
            alert('Объявление добавлено в сравнение!');
        } else {
            alert('Объявление уже в списке сравнения');
        }
    }

    function shareListing(bbId) {
        const url = window.location.href;
        if (navigator.share) {
            navigator.share({
                title: '{{ $bb->title }}',
                text: 'Посмотрите это объявление на CarHut',
                url: url
            }).catch(err => console.log('Ошибка при попытке поделиться:', err));
        } else {
            // Fallback - копирование в буфер обмена
            navigator.clipboard.writeText(url).then(() => {
                alert('Ссылка скопирована в буфер обмена!');
            }).catch(() => {
                // Старый способ
                const textArea = document.createElement('textarea');
                textArea.value = url;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                alert('Ссылка скопирована в буфер обмена!');
            });
        }
    }
</script>
@endauth

@endsection
