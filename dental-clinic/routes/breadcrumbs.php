<?php


use Diglactic\Breadcrumbs\Breadcrumbs;

// Admin panel
Breadcrumbs::for('admin.index', function ($trail) {
    $trail->push('Admin panel', route('admin.index'));
});

/* Department */
// Admin panel > Departments
Breadcrumbs::for('admin.department.index', function ($trail) {
    $trail->parent('admin.index');
    $trail->push('Departments', route('admin.department.index'));
});
// Admin panel > Departments > Create
Breadcrumbs::for('admin.department.create', function ($trail) {
    $trail->parent('admin.department.index');
    $trail->push('Create', route('admin.department.create'));
});
// Admin panel > Departments > [Department]
Breadcrumbs::for('admin.department.show', function ($trail, $department) {
    $trail->parent('admin.department.index');
    $trail->push($department->name, route('admin.department.show', $department->id));
});
// Admin panel > Departments > [Department] > Edit
Breadcrumbs::for('admin.department.edit', function ($trail, $department) {
    $trail->parent('admin.department.index');
    $trail->push($department->name, route('admin.department.show', $department->id));
    $trail->push('Edit', route('admin.department.edit', $department->id));
});

/* Doctor */
// Admin panel > Doctors
Breadcrumbs::for('admin.doctor.index', function ($trail) {
    $trail->parent('admin.index');
    $trail->push('Doctors', route('admin.doctor.index'));
});
// Admin panel > Doctors > Create
Breadcrumbs::for('admin.doctor.create', function ($trail) {
    $trail->parent('admin.doctor.index');
    $trail->push('Create', route('admin.doctor.create'));
});
// Admin panel > Doctors > [Doctor]
Breadcrumbs::for('admin.doctor.show', function ($trail, $doctor) {
    $trail->parent('admin.doctor.index');
    $trail->push($doctor->surname, route('admin.doctor.show', $doctor->id));
});
// Admin panel > Doctors > [Doctor] > Edit
Breadcrumbs::for('admin.doctor.edit', function ($trail, $doctor) {
    $trail->parent('admin.doctor.index');
    $trail->push($doctor->surname, route('admin.doctor.show', $doctor->id));
    $trail->push('Edit', route('admin.doctor.edit', $doctor->id));
});

/* Departments of Doctors */
// Admin panel > Departments of Doctors
Breadcrumbs::for('admin.department-doctor.index', function ($trail) {
    $trail->parent('admin.index');
    $trail->push('Departments of Doctors', route('admin.department-doctor.index'));
});
// Admin panel > Departments of Doctors > Create
Breadcrumbs::for('admin.department-doctor.create', function ($trail) {
    $trail->parent('admin.department-doctor.index');
    $trail->push('Create', route('admin.department-doctor.create'));
});
// Admin panel > Departments of Doctors > [Department of Doctor]
Breadcrumbs::for('admin.department-doctor.show', function ($trail, $departmentDoctor, $department) {
    $trail->parent('admin.department-doctor.index');
    $trail->push($department->name, route('admin.department-doctor.show', $departmentDoctor->id));
});
// Admin panel > Departments of Doctors > [Department of Doctor] > Edit
Breadcrumbs::for('admin.department-doctor.edit', function ($trail, $departmentDoctor, $department) {
    $trail->parent('admin.department-doctor.index');
    $trail->push($department->name, route('admin.department-doctor.show', $departmentDoctor->id));
    $trail->push('Edit', route('admin.department-doctor.edit', $departmentDoctor->id));
});

/* Patients */
// Admin panel > Patients
Breadcrumbs::for('admin.patient.index', function ($trail) {
    $trail->parent('admin.index');
    $trail->push('Patients', route('admin.patient.index'));
});
// Admin panel > Patients > Create
Breadcrumbs::for('admin.patient.create', function ($trail) {
    $trail->parent('admin.patient.index');
    $trail->push('Create', route('admin.patient.create'));
});
// Admin panel > Patients > [Patient]
Breadcrumbs::for('admin.patient.show', function ($trail, $patient) {
    $trail->parent('admin.patient.index');
    $trail->push($patient->surname, route('admin.patient.show', $patient->id));
});
// Admin panel > Patients > [Patient] > Edit
Breadcrumbs::for('admin.patient.edit', function ($trail, $patient) {
    $trail->parent('admin.patient.index');
    $trail->push($patient->surname, route('admin.patient.show', $patient->id));
    $trail->push('Edit', route('admin.patient.edit', $patient->id));
});

/* Forms of patients */
// Admin panel > Forms of patients
Breadcrumbs::for('admin.form-patient.index', function ($trail) {
    $trail->parent('admin.index');
    $trail->push('Forms of patients', route('admin.form-patient.index'));
});
// Admin panel > Forms of patients > Create
Breadcrumbs::for('admin.form-patient.create', function ($trail) {
    $trail->parent('admin.form-patient.index');
    $trail->push('Create', route('admin.form-patient.create'));
});
// Admin panel > Forms of patients > [Form of patient]
Breadcrumbs::for('admin.form-patient.show', function ($trail, $formPatient, $patient) {
    $trail->parent('admin.form-patient.index');
    $trail->push($patient->surname, route('admin.form-patient.show', $formPatient->id));
});
// Admin panel > Forms of patients > [Form of patient] > Edit
Breadcrumbs::for('admin.form-patient.edit', function ($trail, $formPatient, $patient) {
    $trail->parent('admin.form-patient.index');
    $trail->push($patient->surname, route('admin.form-patient.show', $formPatient->id));
    $trail->push('Edit', route('admin.form-patient.edit', $formPatient->id));
});

/* Licenses */
// Admin panel > Licenses
Breadcrumbs::for('admin.license.index', function ($trail) {
    $trail->parent('admin.index');
    $trail->push('Licenses', route('admin.license.index'));
});
// Admin panel > Licenses > Create
Breadcrumbs::for('admin.license.create', function ($trail) {
    $trail->parent('admin.license.index');
    $trail->push('Create', route('admin.license.create'));
});
// Admin panel > Licenses > [License]
Breadcrumbs::for('admin.license.show', function ($trail, $license) {
    $trail->parent('admin.license.index');
    $trail->push($license->image, route('admin.license.show', $license->id));
});
// Admin panel > Licenses > [License] > Edit
Breadcrumbs::for('admin.license.edit', function ($trail, $license) {
    $trail->parent('admin.license.index');
    $trail->push($license->image, route('admin.license.show', $license->id));
    $trail->push('Edit', route('admin.license.edit', $license->id));
});

/* Reviews */
// Admin panel > Reviews
Breadcrumbs::for('admin.review.index', function ($trail) {
    $trail->parent('admin.index');
    $trail->push('Reviews', route('admin.review.index'));
});
// Admin panel > Reviews > [Review]
Breadcrumbs::for('admin.review.show', function ($trail, $review) {
    $trail->parent('admin.review.index');
    $trail->push($review->surname, route('admin.review.show', $review->id));
});
