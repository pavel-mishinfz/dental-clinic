<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $title = 'Departments';
        $departments = Department::all();

        return view('departments', compact('departments', 'title'));
    }
    public function create() {
        $departments = [
            [
              'name' => 'Хирургия',
              'image' => 'surgery.png',
              'small-image' => 'icon-1.svg',
              'description' => 'Удаление зуба является одной из самых распространенных операций в стоматологической практике.',
              'services' => 'Удаление зубов любой сложности',
            ],
            [
                'name' => 'Терапия',
                'image' => 'therapy.png',
                'small-image' => 'icon-2.svg',
                'description' => 'Лечение напрямую зависит от стадии заболевания. Мы подбираем наиболее эффективные методы диагностики и терапии.',
                'services' => 'Кариозных и некариозных поражений, Пульпитов и периодонтитов, Художественная реставрация зубов',
            ],
            [
                'name' => 'Ортопедия',
                'image' => 'orthopedics.png',
                'small-image' => 'icon-3.svg',
                'description' => 'Помогает решить проблемы, связанные с аномалиями, приобретенными дефектами, повреждениями и деформациями органов жевательно-речевого аппарата.',
                'services' => 'Коронки и мосты керамические, Коронки и мосты циркониевые, Съёмное протезирование (протезы, бюгеля, мягкие протезы), Установка виниров',
            ],
            [
                'name' => 'Имплантация',
                'image' => 'Implantation.png',
                'small-image' => 'icon-4.svg',
                'description' => 'Это операция по установке в челюстную ткань специального стоматологического штифта, который будет играть роль корня.',
                'services' => 'Установка имплантов OSSTEM implant, Наращивание кости (все виды аугментации) OSSTEM implant, Имплантация зубов по системе All ON4-All ON6',
            ],
            [
                'name' => 'Ортодонтия',
                'image' => 'orthodontics.png',
                'small-image' => 'icon-5.svg',
                'description' => 'Поможет сделать вашу улыбку красивой и исправит прикус. Исправляет аномалии челюстей, положения челюстей в черепе, формы, величины, соотношения зубных дуг.',
                'services' => 'Установка брекет систем, Цифровое ортодонтическое лечение прозрачными каппами, Полная диагностика и лечение взрослых и детей',
            ],
            [
                'name' => 'Отбеливание зубов',
                'image' => 'bleaching.png',
                'small-image' => 'icon-6.svg',
                'description' => 'Стоматологическая процедура изменения оттенка зубной эмали. Отбеливание зубов относится к области косметической стоматологии.',
                'services' => ' Система Opalescence Boost',
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
        dd('created');
    }
}
