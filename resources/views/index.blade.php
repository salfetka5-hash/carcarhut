@extends('layouts.app')
@section('title', 'Главная')
@section('content')

<section class="carhut-hero">
    <div class="carhut-hero-bg"></div>
    <div class="container carhut-hero-inner">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6">
                <div class="mb-3">
                    <span class="carhut-hero-badge">
                        <span class="badge bg-success rounded-pill me-1"></span>
                        Найдите идеальный автомобиль за пару кликов
                    </span>
                </div>
                <h1 class="carhut-hero-title mb-3">
                    Найдите свой идеальный автомобиль онлайн
                </h1>
                <p class="carhut-hero-subtitle mb-4">
                    Современный маркетплейс для продажи и покупки авто. Сравнивайте предложения,
                    фильтруйте по параметрам и оформляйте сделку так, как удобно вам.
                </p>

                <div class="carhut-hero-search">
                    <form method="GET" action="{{ route('index') }}" class="row g-2 align-items-center">
                        <div class="col-12 col-md-4">
                            <input type="text" 
                                   name="search" 
                                   class="form-control" 
                                   placeholder="Поиск по названию..." 
                                   value="{{ request('search') }}">
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="number" 
                                   name="price_max" 
                                   class="form-control" 
                                   placeholder="Макс. цена (₽)" 
                                   value="{{ request('price_max') }}">
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="custom-dropdown">
                                <select name="sort" id="sort_home">
                                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>По дате: новое</option>
                                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>По цене: дешевле</option>
                                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>По цене: дороже</option>
                                </select>
                                <div class="custom-dropdown-select">
                                    @if(request('sort') == 'price_asc')
                                        По цене: дешевле
                                    @elseif(request('sort') == 'price_desc')
                                        По цене: дороже
                                    @else
                                        По дате: новое
                                    @endif
                                </div>
                                <div class="custom-dropdown-menu"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2 d-grid">
                            <button type="submit" class="btn carhut-btn-primary fw-semibold">
                                Поиск
                            </button>
                        </div>
                    </form>
                    <div class="d-flex flex-wrap align-items-center mt-2 small text-soft gap-3">
                        <span>836K+ активных объявлений</span>
                        <span class="d-none d-sm-inline">|</span>
                        <span>Безопасные сделки и проверенные продавцы</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="car-card h-100">
                    <div class="position-relative">
                        <img src="{{ asset('images/cars/car1.jpg') }}"
                             class="w-100" alt="Hero car image"
                             onerror="this.src='{{ asset('images/cars/car1.jpg') }}'">
                        <span class="car-card-badge">Новинка недели</span>
                    </div>
                    <div class="p-3 p-md-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <h5 class="mb-1">Mercedes-Benz C‑Class 2022</h5>
                                <div class="car-card-meta">
                                    Бензин · АКПП · 2.0 · 4WD
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="car-card-price mb-1">3 250 000 ₽</div>
                                <div class="car-card-meta">Москва · 12 000 км</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex flex-wrap gap-2">
                                <span class="car-card-tag">Гарантия дилера</span>
                                <span class="car-card-tag">1 владелец</span>
                            </div>
                            <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-3">
                                Смотреть похожие
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carhut-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-3 mb-md-4">
            <div>
                <h2 class="carhut-section-title h4 mb-1">Самые популярные автомобили</h2>
                <p class="text-soft small mb-0">На основе ваших объявлений в системе</p>
            </div>
            <a href="{{ route('catalog') }}" class="text-soft small text-decoration-none">Смотреть все</a>
        </div>

        @if ($bbs->count())
            <div class="row g-3 g-md-4">
                @foreach ($bbs as $bb)
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="car-card h-100 d-flex flex-column">
                            <div class="position-relative">
                                @php
                                    // Используем локальные изображения
                                    if ($bb->image && !\Illuminate\Support\Str::startsWith($bb->image, 'http')) {
                                        $imageUrl = asset($bb->image);
                                    } else {
                                        // Fallback на локальное изображение
                                        $imageUrl = asset('images/cars/car1.jpg');
                                    }
                                @endphp
                                <a href="{{ route('detail', ['bb' => $bb->id]) }}">
                                    <img src="{{ $imageUrl }}"
                                         class="w-100" 
                                         alt="{{ $bb->title }}" 
                                         style="height: 200px; object-fit: cover;"
                                         onerror="this.src='{{ asset('images/cars/car1.jpg') }}'">
                                </a>
                                <span class="car-card-badge">В наличии</span>
                            </div>
                            <div class="p-3 p-md-3 flex-grow-1 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h5 class="mb-1">{{ $bb->title }}</h5>
                                        <div class="car-card-meta">
                                            {{ Str::limit($bb->content, 50) }}
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="car-card-price">{{ number_format($bb->price, 0, ',', ' ') }} ₽</div>
                                        <div class="car-card-meta">Торг возможен</div>
                                    </div>
                                </div>
                                <div class="mt-auto pt-2 car-card-footer d-flex justify-content-between align-items-center">
                                    <div class="car-card-meta">
                                        Обновлено {{ $bb->created_at->diffForHumans() }}
                                    </div>
                                    <a href="{{ route('detail', ['bb' => $bb->id]) }}"
                                       class="btn btn-sm carhut-btn-primary rounded-pill px-3">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('catalog') }}" class="btn carhut-btn-primary btn-lg rounded-pill px-5 mb-3">
                    Смотреть все автомобили
                </a>
                @guest
                    <div class="mt-4">
                        <p class="text-soft mb-3">Хотите узнать больше? Зарегистрируйтесь и получите доступ к расширенным функциям!</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg rounded-pill px-5">
                            Зарегистрироваться
                        </a>
                    </div>
                @endguest
            </div>
        @else
            <div class="text-center text-soft py-5">
                <p class="mb-3">Пока нет объявлений. Авторизуйтесь и добавьте первое предложение.</p>
                @guest
                    <a href="{{ route('register') }}" class="btn carhut-btn-primary btn-lg rounded-pill px-5">
                        Зарегистрироваться
                    </a>
                @endguest
            </div>
        @endif
    </div>
</section>

<section class="carhut-section carhut-section-light">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-md-5">
                <h2 class="carhut-section-title h4 mb-3">Почему выбирают CarHut</h2>
                <p class="text-muted mb-4">
                    Продуманный процесс покупки и продажи авто, прозрачные цены и поддержка на каждом шаге.
                </p>
                <div class="row gy-3">
                    <div class="col-6">
                        <div>
                            <div class="carhut-feature-icon mb-2">
                                <span class="fw-bold">✓</span>
                            </div>
                            <div class="fw-semibold mb-1 small text-uppercase text-muted">Безопасные сделки</div>
                            <p class="small text-muted mb-0">
                                Проверенные продавцы и защищённые методы оплаты.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <div class="carhut-feature-icon mb-2">
                                <span class="fw-bold">%</span>
                            </div>
                            <div class="fw-semibold mb-1 small text-uppercase text-muted">Честные цены</div>
                            <p class="small text-muted mb-0">
                                Аналитика рынка помогает выставить актуальную стоимость.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <div class="carhut-feature-icon mb-2">
                                <span class="fw-bold">📍</span>
                            </div>
                            <div class="fw-semibold mb-1 small text-uppercase text-muted">Онлайн и офлайн</div>
                            <p class="small text-muted mb-0">
                                Выбирайте авто онлайн и приезжайте в салон на готовую сделку.
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <div class="carhut-feature-icon mb-2">
                                <span class="fw-bold">📱</span>
                            </div>
                            <div class="fw-semibold mb-1 small text-uppercase text-muted">Мобильный доступ</div>
                            <p class="small text-muted mb-0">
                                Удобный интерфейс на любом устройстве.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row gy-3">
                    <div class="col-6 col-md-4 text-center">
                        <div class="carhut-stat text-primary">836K+</div>
                        <div class="carhut-stat-label">объявлений</div>
                    </div>
                    <div class="col-6 col-md-4 text-center">
                        <div class="carhut-stat text-success">738K+</div>
                        <div class="carhut-stat-label">успешных сделок</div>
                    </div>
                    <div class="col-6 col-md-4 text-center">
                        <div class="carhut-stat text-indigo">100M+</div>
                        <div class="carhut-stat-label">просмотров в год</div>
                    </div>
                </div>
                <div class="row gy-3 mt-4">
                    <div class="col-md-6">
                        <div class="carhut-testimonial p-3 p-md-4 h-100">
                            <div class="small text-muted mb-2">Отзывы</div>
                            <p class="mb-3">
                                «Нашёл автомобиль мечты за один вечер. Удобные фильтры и честные фото машин.»
                            </p>
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-primary" style="width:32px;height:32px;"></div>
                                <div>
                                    <div class="small fw-semibold">Алексей</div>
                                    <div class="small text-muted">Покупатель</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carhut-blog-card p-3 p-md-4 h-100">
                            <div class="small text-muted mb-2">Блог</div>
                            <p class="mb-2 fw-semibold">
                                Как выгодно продать автомобиль за 7 дней
                            </p>
                            <p class="small text-muted mb-3">
                                Подготовка авто, фото, описание и выбор цены — чек‑лист от экспертов CarHut.
                            </p>
                            <span class="carhut-chip">Читать статью</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


