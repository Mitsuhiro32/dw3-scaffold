<li class="nav-item">
    <a href="{{ route('alumnos.index') }}" class="nav-link {{ Request::is('alumnos*') ? 'active' : '' }}">
        <p>Alumnos</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('cursos.index') }}"
       class="nav-link {{ Request::is('cursos*') ? 'active' : '' }}">
        <p>Cursos</p>
    </a>
</li>


