<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Отображение списка всех услуг.
     */
    public function index()
    {
        // Получаем все услуги из базы данных
        $services = Service::all();

        // Возвращаем представление со списком услуг
        return view('services.index', compact('services'));
    }

    /**
     * Отображение подробной информации об услуге.
     * 
     * @param string $slug Уникальный идентификатор услуги (slug)
     */
    public function show($slug)
    {
        // Найти услугу по slug
        $service = Service::where('slug', $slug)->firstOrFail();

        // Передать данные об услуге в представление
        return view('services.show', compact('service'));
    }
}

