@section('navbar')
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <!-- enlaces -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('pintor1')}}">Diego</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pintor2')}}">Leonardo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pintor3')}}">Miguel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pintor4')}}">Salvador</a>
        </li>
    </ul>
</nav>
@show
