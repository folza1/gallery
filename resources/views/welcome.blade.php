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
<div class="row" style="max-width: 100%; margin: 0;">
    @foreach ($data as $item)
        <div class="col-md-4 border" style="height: 250px; margin: 0; padding:0;">
            <a href="/images">
                @if (isset($item['images']))
                    <img src="{{$item['images'][0]}}" class="mx-auto d-block"
                         style="width: auto; height: 90%; border: 3px solid blue; max-width: 100%;">
                @endif
                <div>
                    <p style="height: 10%; max-width: 100%; text-align: center;">{{ $item['title'] }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>
</body>
</html>
