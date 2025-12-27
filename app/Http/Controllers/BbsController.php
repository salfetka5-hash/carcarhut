<?php

namespace App\Http\Controllers;

use App\Models\Bb;

class BbsController extends Controller
{
    public function index() { 
        $query = Bb::query();
        
        // Поиск по названию
        if (request()->has('search') && request('search')) {
            $query->where('title', 'like', '%' . request('search') . '%');
        }
        
        // Фильтр по максимальной цене
        if (request()->has('price_max') && request('price_max')) {
            $query->where('price', '<=', request('price_max'));
        }
        
        // Сортировка
        $sort = request('sort', 'latest');
        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'latest':
            default:
                $query->latest();
                break;
        }
        
        // Показываем популярные предложения (последние 6 объявлений после фильтрации)
        $bbs = $query->take(6)->get();
        return view('index', ['bbs' => $bbs]);
    }

    public function detail($bb) {
        // Пытаемся найти объявление по ID (bb уже проверен на числовое значение в маршруте)
        $bbModel = Bb::find($bb);
        if (!$bbModel) {
            abort(404);
        }
        
        return view('detail', ['bb' => $bbModel]);
    }

    public function catalog() {
        $query = Bb::query();
        
        // Поиск по названию
        if (request()->has('search') && request('search')) {
            $query->where('title', 'like', '%' . request('search') . '%');
        }
        
        // Фильтр по цене
        if (request()->has('price_filter')) {
            $priceFilter = request('price_filter');
            switch ($priceFilter) {
                case '0-500000':
                    $query->where('price', '<=', 500000);
                    break;
                case '500000-1000000':
                    $query->whereBetween('price', [500000, 1000000]);
                    break;
                case '1000000-2000000':
                    $query->whereBetween('price', [1000000, 2000000]);
                    break;
                case '2000000+':
                    $query->where('price', '>=', 2000000);
                    break;
            }
        }
        
        // Сортировка
        $sort = request('sort', 'latest');
        switch ($sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'latest':
            default:
                $query->latest();
                break;
        }
        
        // Показываем ВСЕ машины с пагинацией
        $bbs = $query->paginate(12)->withQueryString();
        return view('catalog', ['bbs' => $bbs]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function blog() {
        // Создаем массив статей блога
        $blogPosts = [
            [
                'id' => 1,
                'title' => 'BMW X5 2024: обзор и впечатления',
                'category' => 'Обзор',
                'date' => '22 ноября 2024',
                'image' => 'https://images.pexels.com/photos/1402787/pexels-photo-1402787.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'badge' => 'Новое',
                'badgeStyle' => '',
            ],
            [
                'id' => 2,
                'title' => '10 способов сэкономить на покупке автомобиля',
                'category' => 'Советы',
                'date' => '20 ноября 2024',
                'image' => 'https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'badge' => 'Популярное',
                'badgeStyle' => 'background: var(--accent-gradient);',
            ],
            [
                'id' => 3,
                'title' => 'Будущее за электромобилями: что нужно знать',
                'category' => 'Электрические',
                'date' => '18 ноября 2024',
                'image' => 'https://images.pexels.com/photos/116675/pexels-photo-116675.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'badge' => 'Тренд',
                'badgeStyle' => 'background: var(--warning-gradient);',
            ],
            [
                'id' => 4,
                'title' => 'Как быстро продать автомобиль: пошаговая инструкция',
                'category' => 'Продажа',
                'date' => '15 ноября 2024',
                'image' => 'https://images.pexels.com/photos/1149137/pexels-photo-1149137.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'badge' => null,
                'badgeStyle' => '',
            ],
            [
                'id' => 5,
                'title' => 'Автокредит: как выбрать лучшие условия',
                'category' => 'Финансы',
                'date' => '12 ноября 2024',
                'image' => 'https://images.pexels.com/photos/3802508/pexels-photo-3802508.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'badge' => null,
                'badgeStyle' => '',
            ],
            [
                'id' => 6,
                'title' => 'Регулярное обслуживание: экономия на ремонте',
                'category' => 'Обслуживание',
                'date' => '10 ноября 2024',
                'image' => 'https://images.pexels.com/photos/210019/pexels-photo-210019.jpeg?auto=compress&cs=tinysrgb&w=1200',
                'badge' => null,
                'badgeStyle' => '',
            ],
        ];

        // Используем LengthAwarePaginator для пагинации
        $currentPage = request()->get('page', 1);
        $perPage = 6; // Показываем 6 статей на странице (1 featured + 5 в сетке)
        $items = collect($blogPosts);
        $currentItems = $items->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
            $currentItems,
            $items->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('blog', ['blogPosts' => $paginator]);
    }

    public function sell() {
        return view('sell');
    }

    public function calculator() {
        return view('calculator');
    }

    public function brands() {
        return view('brands');
    }
}
