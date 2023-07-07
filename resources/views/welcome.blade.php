<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body {
            color: #fff;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="border mx-auto p-3" style="width: 60%;">
        <h1 class="text-white">Categories</h1>
        <div action="">
            <div class="form-group">
                <label for="mainInput" class="mb-2">Enter Main Category:</label>
                <div class="d-flex">
                    <input type="text" class="form-control form-control-sm" id="mainInput">
                    <button class="btn btn-primary ml-1" id="submitMainInput">Ekle</button>
                </div>
            </div>
            <hr>
            <h4>All Categories</h4>

            <div id="address"></div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <script src="{{asset('index.js')}}" type="module"></script>
</body>

</html>
