<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Магазины</title>
</head>
<body>

<div class="container">
    <h1 class="text-center mt-4">Время: {{ $real_time }}</h1>
    <div class="row">
        <div class="col-6">
            <h5 class="mt-4 mb-4 text-primary">Открытые магазины</h5>
            @foreach($shops as $shop)
                @if ($real_time >= $shop->open && $real_time < $shop->close)
                    <div class="card mb-5">
                        <div class="card-header">
                            Открыто с {{ $shop->open }} до {{ $shop->close }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $shop->name }}</h5>
                            <p class="card-text"><a href="{{ $shop->url }}">{{ $shop->url }}</a></p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="col-6">
            <h5 class="mt-4 mb-4 text-primary">Закрытые магазины</h5>
            @foreach($shops as $shop)
                @if ($real_time < $shop->open)
                    <div class="card mb-5">
                        <div class="card-header">
                            Открыто с {{ $shop->open }} до {{ $shop->close }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $shop->name }}</h5>
                            <p class="card-text"><a href="{{ $shop->url }}">{{ $shop->url }}</a></p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('xml') }}" download class="btn btn-primary">Получить XML</a>
                <a href="{{ route('xml') }}" class="btn btn-primary">Просмотреть XML</a>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>

<footer class="bg-light text-center text-lg-start mt-5">
    <div class="container">
        <!-- Copyright -->
        <div class="text-center p-3">
            <a class="text-dark" href="https://github.com/iahrimani">Мой github</a>
        </div>
        <!-- Copyright -->
    </div>
</footer>
</body>
</html>
