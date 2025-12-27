@extends('layouts.app')
@section('title', 'О нас')
@section('content')

<section class="carhut-hero" style="min-height: 50vh; padding: 4rem 0;">
    <div class="carhut-hero-bg"></div>
    <div class="container carhut-hero-inner">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="carhut-hero-title mb-3">О компании CarHut</h1>
                <p class="carhut-hero-subtitle mb-4">
                    Современная платформа для покупки и продажи автомобилей, которая объединяет 
                    продавцов и покупателей по всей стране. Мы делаем процесс простым, безопасным и выгодным.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('catalog') }}" class="btn carhut-btn-primary btn-lg">Смотреть каталог</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Связаться с нами</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://placeimg.com/1200/800/transport" 
                     class="w-100 rounded-4 shadow-lg float-animation" alt="О нас">
            </div>
        </div>
    </div>
</section>

<section class="carhut-section">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card-premium text-center h-100">
                    <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">🚗</div>
                    <h3 class="h5 mb-3">Большой выбор</h3>
                    <p class="text-soft">
                        Тысячи объявлений от частных продавцов и автосалонов. Найдите автомобиль 
                        своей мечты среди огромного ассортимента.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-premium text-center h-100">
                    <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">🔒</div>
                    <h3 class="h5 mb-3">Безопасность</h3>
                    <p class="text-soft">
                        Проверенные продавцы, защищённые сделки и поддержка на каждом этапе покупки. 
                        Ваша безопасность — наш приоритет.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-premium text-center h-100">
                    <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">⚡</div>
                    <h3 class="h5 mb-3">Быстро и удобно</h3>
                    <p class="text-soft">
                        Простой интерфейс, умный поиск и фильтры. Находите нужное за минуты. 
                        Экономьте время и силы.
                    </p>
                </div>
            </div>
        </div>

        <!-- Mission -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-lg-2">
                <img src="{{ asset('images/cars/car1.jpg') }}" 
                     class="w-100 rounded-4 shadow-lg" alt="Миссия"
                     onerror="this.src='{{ asset('images/cars/car1.jpg') }}'">
            </div>
            <div class="col-lg-6 order-lg-1">
                <h2 class="carhut-section-title mb-4">Наша миссия</h2>
                <p class="text-soft mb-4">
                    Мы создали CarHut с целью сделать процесс покупки и продажи автомобилей максимально 
                    простым, прозрачным и выгодным для всех участников. Наша платформа объединяет 
                    технологии и человеческий подход.
                </p>
                <p class="text-soft mb-4">
                    Мы верим, что каждый должен иметь возможность найти идеальный автомобиль или 
                    быстро продать свой без лишних хлопот и переплат.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <div class="text-center">
                        <div class="carhut-stat text-primary">836K+</div>
                        <div class="carhut-stat-label">Активных объявлений</div>
                    </div>
                    <div class="text-center">
                        <div class="carhut-stat text-success">738K+</div>
                        <div class="carhut-stat-label">Успешных сделок</div>
                    </div>
                    <div class="text-center">
                        <div class="carhut-stat text-indigo">100M+</div>
                        <div class="carhut-stat-label">Просмотров в год</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="carhut-section-title text-center mb-5">Наши ценности</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <div class="carhut-feature-icon flex-shrink-0">✓</div>
                            <div>
                                <h5 class="mb-2">Честность</h5>
                                <p class="text-soft small mb-0">
                                    Прозрачные цены, честные описания и открытая коммуникация с клиентами.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <div class="carhut-feature-icon flex-shrink-0">💎</div>
                            <div>
                                <h5 class="mb-2">Качество</h5>
                                <p class="text-soft small mb-0">
                                    Высокие стандарты сервиса и постоянное улучшение платформы.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <div class="carhut-feature-icon flex-shrink-0">🤝</div>
                            <div>
                                <h5 class="mb-2">Партнерство</h5>
                                <p class="text-soft small mb-0">
                                    Взаимовыгодное сотрудничество с продавцами и забота о покупателях.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-3">
                            <div class="carhut-feature-icon flex-shrink-0">🚀</div>
                            <div>
                                <h5 class="mb-2">Инновации</h5>
                                <p class="text-soft small mb-0">
                                    Использование современных технологий для улучшения пользовательского опыта.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="carhut-section carhut-section-light">
    <div class="container">
        <div class="cta-section">
            <h2 class="h3 mb-3 text-white">Готовы начать?</h2>
            <p class="text-white-50 mb-4">
                Присоединяйтесь к тысячам довольных клиентов CarHut
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="{{ route('catalog') }}" class="btn btn-light btn-lg">Смотреть каталог</a>
                <a href="{{ route('sell') }}" class="btn btn-outline-light btn-lg">Продать автомобиль</a>
            </div>
        </div>
    </div>
</section>

@endsection
