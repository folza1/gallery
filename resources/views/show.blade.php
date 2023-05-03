<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Gallery</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div>
    <div style="text-align:center">
        <a href="/"><button type="button" class="btn btn-success m-5"><h3>Vissza</h3></button></a>
    </div>
    <h1 style="text-align:center">{{ $item['title'] }}</h1>
    <div class="row" style="max-width: 100%; margin: 0;">
        @if (isset($item['images']))
            @foreach ($item['images'] as $image)
                <div class="col-md-6 border" style="height: 250px; margin: 0; padding:15px;">
                    <img src="{{ $image }}" alt="{{ $item['title'] }}" class="mx-auto d-block" style="width: auto; height: 100%; border: 1px solid black; max-width: 100%;">
                </div>
            @endforeach
        @endif
    </div>
</div>
</body>
</html>
