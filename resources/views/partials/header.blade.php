@php
    $headerList = config('headerList');
@endphp

<header>
    <nav class="d-flex justify-content-around align-items-center">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </div>
        <div>
            <ul class="d-flex list-unstyled">
                @foreach ($headerList as $item)
                    <li class="m-3">
                        <a href="#">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
