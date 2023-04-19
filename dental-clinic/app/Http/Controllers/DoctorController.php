<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\FormPatient;
use App\Models\Patient;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $title = 'Doctors';
        $doctors = Doctor::all();
        $departments = Department::all();

        return view('doctors', compact('doctors', 'departments','title'));
    }
    public function create() {
        $doctors =[
            [
                'name' => 'Шамсулло',
                'surname' => 'Саидов',
                'lastname' => 'Нарзуллоевич',
                'image' => 'person-1.png',
                'small-image' => 'face-icon-1.svg',
                'position' => 'Врач-стоматолог',
                'orientation' => 'съемные, несъемные, безметалловые конструкции, цирконий, протезирование на имплантах, драгметаллах, вкладки, виниры, гнатология и хирургия',
                'experience' => 25,
                'certificates' => 'стоматология ортопедическая; стоматология хирургическая',
            ],
            [
                'name' => 'Дмитрий',
                'surname' => 'Анисимов',
                'lastname' => 'Владимирович',
                'image' => 'person-2.png',
                'small-image' => 'face-icon-2.svg',
                'position' => 'Врач-стоматолог',
                'orientation' => 'имплантация, пародонтология, удаление зубов любой сложности',
                'experience' => 5,
                'certificates' => 'стоматология общей практики; стоматология хирургическая',
            ],
            [
                'name' => 'Давид',
                'surname' => 'Варданян',
                'lastname' => 'Араевич',
                'image' => 'person-3.png',
                'small-image' => 'face-icon-3.svg',
                'position' => 'Врач-стоматолог',
                'orientation' => 'протезирование зубов, хирургическое удаление, терапевтическое лечение и отбеливание',
                'experience' => 5,
                'certificates' => 'стоматология общей практики; стоматология хирургическая',
            ],
            [
                'name' => 'Анастасия',
                'surname' => 'Соха',
                'lastname' => 'Юрьевна',
                'image' => 'person-4.png',
                'small-image' => 'face-icon-4.svg',
                'position' => 'Врач-стоматолог',
                'orientation' => 'терапевтическое лечение, эстетическая реставрация зубов и исправление прикуса любой сложности',
                'experience' => 10,
                'certificates' => 'стоматология общей практики; стоматология терапевтическая; стоматология ортодонтическая',
            ],
            [
                'name' => 'Оксана',
                'surname' => 'Иванова',
                'lastname' => 'Григорьевна',
                'image' => 'person-5.png',
                'small-image' => 'face-icon-5.svg',
                'position' => 'Врач-стоматолог',
                'orientation' => 'терапевтическое лечение, все виды протезирования, хирургическое удаление зубов',
                'experience' => 20,
                'certificates' => 'стоматология общей практики; стоматология ортопедическая',
            ],
            [
                'name' => 'Елена',
                'surname' => 'Синельщикова',
                'lastname' => 'Дмитриевна',
                'image' => 'person-6.png',
                'small-image' => 'face-icon-6.svg',
                'position' => 'Врач-стоматолог',
                'orientation' => 'терапевтическое лечение, эстетическая реставрация, хирургическое удаление зубов , профессиональная гигиена и отбеливание',
                'experience' => 5,
                'certificates' => 'стоматология общей практики; стоматология хирургическая',
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
        dd('created');
    }

    public function update() {
        $doctor = Doctor::find(1);

        $doctor->update([
            'name' => 'Шамсулло',
            'surname' => 'Саидов',
        ]);
        dd('updated');
    }
}
