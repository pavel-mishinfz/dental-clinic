<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="{{route('admin.department.index')}}" class="nav-link">
                <p>
                    Departments
                    <span class="badge badge-info right">{{Config::get('admin.department')}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.doctor.index')}}" class="nav-link">
                <p>
                    Doctors
                    <span class="badge badge-info right">{{Config::get('admin.doctor')}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.department-doctor.index')}}" class="nav-link">
                <p>
                    Departments of doctors
                    <span class="badge badge-info right">{{Config::get('admin.department_doctor')}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.patient.index')}}" class="nav-link">
                <p>
                    Patients
                    <span class="badge badge-info right">{{Config::get('admin.patient')}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.form-patient.index')}}" class="nav-link">
                <p>
                    Forms of patients
                    <span class="badge badge-info right">{{Config::get('admin.form_patient')}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.license.index')}}" class="nav-link">
                <p>
                    Licenses
                    <span class="badge badge-info right">{{Config::get('admin.license')}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.review.index')}}" class="nav-link">
                <p>
                    Reviews
                    <span class="badge badge-info right">{{Config::get('admin.review')}}</span>
                </p>
            </a>
        </li>
    </ul>
</nav>
