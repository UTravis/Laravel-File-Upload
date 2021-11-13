<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-4">
                <ul>
                    @foreach ($photos as $photo)
                        <li> <img src="{{ asset('storage/images/'. $photo->name) }}" alt=""> </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>