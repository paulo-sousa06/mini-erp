<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="/css/style.css">


</head>


<body>


    <div class="app">

    <x-sidebar />


    <div class="main">


        <x-header />


        <main class="content">

            @yield('content')

        </main>


    </div>


</div>


</body>


</html>
