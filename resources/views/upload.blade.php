<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>File Upload</title>
</head>
<body>
    <div class="container">
        <h1>Uplaod</h1>
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" name="photo" id="" class="form-control">
            </div>
            <div class="d-grid gap-2 mt-2">
                <input type="submit" value="Upload" class="btn btn-dark text-white btn-block">
            </div>
            
        </form>
    </div>
</body>
</html>