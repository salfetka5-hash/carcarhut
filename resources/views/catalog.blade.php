@extends('layouts.app')
@section('title', 'Каталог автомобилей')
@section('content')

<section class="carhut-section py-5">
    <div class="container">
        <div class="catalog-header d-flex justify-content-between align-items-start">
            <div>
                <h1>Каталог автомобилей</h1>
                <p class="text-soft">Все доступные объявления в одном месте</p>
            </div>
            @auth
                <div class="quick-actions-panel">
                    <h5 class="quick-actions-title">Быстрые действия</h5>
                    <div class="quick-actions">
                        <button type="button" class="quick-action-item" onclick="showComparePanel()">
                            <span class="quick-action-icon">📊</span>
                            <span>Сравнить</span>
                        </button>
                        <button type="button" class="quick-action-item" onclick="shareCatalog()">
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

        <div class="catalog-filters">
            <form method="GET" action="{{ route('catalog') }}" id="catalog-filter-form">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" 
                               name="search" 
                               class="form-control" 
                               placeholder="Поиск по названию..." 
                               value="{{ request('search') }}">
                    </div>
                    <div class="col-md-3">
                        <div class="custom-dropdown">
                            <select name="price_filter" id="price_filter">
                                <option value="">Все цены</option>
                                <option value="0-500000" {{ request('price_filter') == '0-500000' ? 'selected' : '' }}>До 500 000 ₽</option>
                                <option value="500000-1000000" {{ request('price_filter') == '500000-1000000' ? 'selected' : '' }}>500 000 - 1 000 000 ₽</option>
                                <option value="1000000-2000000" {{ request('price_filter') == '1000000-2000000' ? 'selected' : '' }}>1 000 000 - 2 000 000 ₽</option>
                                <option value="2000000+" {{ request('price_filter') == '2000000+' ? 'selected' : '' }}>От 2 000 000 ₽</option>
                            </select>
                            <div class="custom-dropdown-select">{{ request('price_filter') ? 'Фильтр применен' : 'Все цены' }}</div>
                            <div class="custom-dropdown-menu"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="custom-dropdown">
                            <select name="sort" id="sort">
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
                </div>
            </form>
        </div>

        @if ($bbs->count())
            <div class="row g-4">
                @foreach ($bbs as $bb)
                    <div class="col-12 col-md-6 col-lg-4">
                        <article class="car-card">
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
                                         style="height: 240px; object-fit: cover;"
                                         onerror="this.src='{{ asset('images/cars/car1.jpg') }}'">
                                </a>
                                <span class="car-card-badge">В наличии</span>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">{{ $bb->title }}</h5>
                                <p class="text-muted small mb-3">{{ Str::limit($bb->content, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="car-card-price">{{ number_format($bb->price, 0, ',', ' ') }} ₽</div>
                                    <a href="{{ route('detail', ['bb' => $bb->id]) }}" class="btn btn-sm carhut-btn-primary rounded-pill px-3">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            <div class="catalog-pagination mt-5">
                <div class="d-flex justify-content-center">
                    {{ $bbs->links() }}
                </div>
            </div>
        @else
            <div class="text-center text-muted py-5">
                <p class="fs-4">Пока нет объявлений</p>
                <p>Будьте первым, кто добавит автомобиль!</p>
            </div>
        @endif
    </div>
</section>

@auth
<script>
    function showComparePanel() {
        const compareList = JSON.parse(localStorage.getItem('compareList') || '[]');
        if (compareList.length === 0) {
            alert('Список сравнения пуст. Добавьте объявления для сравнения со страницы объявления.');
        } else {
            alert('В списке сравнения: ' + compareList.length + ' объявлений. Перейдите на страницу объявления для просмотра.');
        }
    }

    function shareCatalog() {
        const url = window.location.href;
        if (navigator.share) {
            navigator.share({
                title: 'Каталог автомобилей CarHut',
                text: 'Посмотрите каталог автомобилей на CarHut',
                url: url
            }).catch(err => console.log('Ошибка при попытке поделиться:', err));
        } else {
            navigator.clipboard.writeText(url).then(() => {
                alert('Ссылка на каталог скопирована в буфер обмена!');
            }).catch(() => {
                const textArea = document.createElement('textarea');
                textArea.value = url;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                alert('Ссылка на каталог скопирована в буфер обмена!');
            });
        }
    }
</script>
@endauth

@endsection

