
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <title>Verwaltung</title>
</head>
<body class='bg-dark text-white'>
    <h1>Verwaltung</h1>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <a href={{route('INDEX')}}>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Home</button>
          </li>
        </a>
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="statistics-tab" data-bs-toggle="tab" data-bs-target="#statistics" type="button" role="tab" aria-controls="statistics" aria-selected="true">Statistiken</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Bücher</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="authoren-tab" data-bs-toggle="tab" data-bs-target="#authoren" type="button" role="tab" aria-controls="authoren" aria-selected="false">Authoren</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="Verläge-tab" data-bs-toggle="tab" data-bs-target="#Verläge" type="button" role="tab" aria-controls="Verläge" aria-selected="false">Verläge</button>
      </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="statistics" role="tabpanel" aria-labelledby="home-tab"> statistics </div>
      <div class="tab-pane" id="authoren" role="tabpanel" aria-labelledby="profile-tab"> profile </div>
      <div class="tab-pane" id="Verläge" role="tabpanel" aria-labelledby="messages-tab"> messages </div>
    </div>
    <body>
        <main>
            {{$slot}}
        </main>
    </body>
</html>