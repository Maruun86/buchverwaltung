
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <title>Buchverwaltung</title>
</head>
    <body class="bg-dark">
        {{-- Header --}}
        <div class="container-fluid bg-dark text-white text-center">
            <a href={{route('INDEX')}}><h1 class="display-1">Buchverwaltung</h1></a>
        </div>

        <main>
                
            {{$slot}}
        
        </main>
        {{-- Footer --}}
        <div class="container" ><h6>Pierre Antonschmidts</h5></div>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
   
    