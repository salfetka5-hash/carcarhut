@extends('layouts.app')
@section('title', 'Премиальные бренды')
@section('content')

<section class="carhut-hero" style="min-height: 40vh; padding: 4rem 0;">
    <div class="carhut-hero-bg"></div>
    <div class="container carhut-hero-inner">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="carhut-hero-title mb-3">Премиальные бренды</h1>
                <p class="carhut-hero-subtitle">
                    Исследуйте нашу коллекцию автомобилей от ведущих мировых производителей
                </p>
            </div>
        </div>
    </div>
</section>

<section class="carhut-section">
    <div class="container">
        <!-- Popular Brands -->
        <div class="text-center mb-5">
            <h2 class="carhut-section-title mb-3">Популярные бренды</h2>
            <p class="text-soft">Выберите бренд для просмотра доступных моделей</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚗</div>
                        <div class="fw-semibold">Audi</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚙</div>
                        <div class="fw-semibold">BMW</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚕</div>
                        <div class="fw-semibold">Mercedes-Benz</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚐</div>
                        <div class="fw-semibold">Ford</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚗</div>
                        <div class="fw-semibold">Toyota</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚙</div>
                        <div class="fw-semibold">Volkswagen</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚕</div>
                        <div class="fw-semibold">Porsche</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚐</div>
                        <div class="fw-semibold">Nissan</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚗</div>
                        <div class="fw-semibold">Hyundai</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚙</div>
                        <div class="fw-semibold">Peugeot</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚕</div>
                        <div class="fw-semibold">Bentley</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="brand-logo">
                    <div class="text-center w-100">
                        <div class="h2 mb-2">🚐</div>
                        <div class="fw-semibold">Jeep</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Cars by Brand -->
        <div class="text-center mb-5">
            <h2 class="carhut-section-title mb-3">Популярные модели</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="car-card h-100">
                    <div class="position-relative">
                        <img src="https://images.pexels.com/photos/1402787/pexels-photo-1402787.jpeg?auto=compress&cs=tinysrgb&w=1200" 
                             class="w-100" alt="BMW" style="height: 220px; object-fit: cover;">
                        <span class="car-card-badge">BMW</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">BMW X5 2023</h5>
                        <p class="text-soft small mb-3">Премиальный SUV с мощным двигателем и роскошным интерьером</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="car-card-price">от 5 500 000 ₽</div>
                            <a href="{{ route('catalog') }}" class="btn btn-sm carhut-btn-primary">Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="car-card h-100">
                    <div class="position-relative">
                        <img src="https://images.pexels.com/photos/3802508/pexels-photo-3802508.jpeg?auto=compress&cs=tinysrgb&w=1200" 
                             class="w-100" alt="Mercedes" style="height: 220px; object-fit: cover;">
                        <span class="car-card-badge" style="background: var(--accent-gradient);">Mercedes</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Mercedes-Benz C-Class 2023</h5>
                        <p class="text-soft small mb-3">Элегантный седан с передовыми технологиями</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="car-card-price">от 3 800 000 ₽</div>
                            <a href="{{ route('catalog') }}" class="btn btn-sm carhut-btn-primary">Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="car-card h-100">
                    <div class="position-relative">
                        <img src="https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&w=1200" 
                             class="w-100" alt="Audi" style="height: 220px; object-fit: cover;">
                        <span class="car-card-badge" style="background: var(--secondary-gradient);">Audi</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2">Audi Q7 2023</h5>
                        <p class="text-soft small mb-3">Просторный и комфортабельный премиальный внедорожник</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="car-card-price">от 6 200 000 ₽</div>
                            <a href="{{ route('catalog') }}" class="btn btn-sm carhut-btn-primary">Смотреть</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Premium -->
        <section class="carhut-section carhut-section-light mt-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="carhut-section-title mb-3" style="color: #1a1a2e;">Почему выбирают премиальные бренды</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card-premium text-center h-100" style="background: white;">
                            <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">⭐</div>
                            <h5 class="mb-3" style="color: #1a1a2e;">Качество</h5>
                            <p class="text-muted small mb-0">
                                Высочайшее качество сборки, надежность и долговечность премиальных автомобилей
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-premium text-center h-100" style="background: white;">
                            <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">🔧</div>
                            <h5 class="mb-3" style="color: #1a1a2e;">Сервис</h5>
                            <p class="text-muted small mb-0">
                                Официальные дилерские центры с квалифицированным обслуживанием и гарантией
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-premium text-center h-100" style="background: white;">
                            <div class="carhut-feature-icon mx-auto mb-3" style="font-size: 2rem;">💎</div>
                            <h5 class="mb-3" style="color: #1a1a2e;">Престиж</h5>
                            <p class="text-muted small mb-0">
                                Статус и репутация, которые говорят о вашем успехе и хорошем вкусе
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection

