<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit order</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    .btn, .form-control {
        margin-bottom: 20px;
    }
</style>

<body>

<div class="container text-center">
    <div class="text-right">
        <a href="/" class="btn btn-success">Back</a>
    </div>

    <form action="../update_order/{{$order_arr->id}}">
        <input type="text" name="start_point" value="{{$order_arr->start_point}}" class="form-control">
        <input type="text" name="end_point" value="{{$order_arr->end_point}}" class="form-control">
        <input type="number" name="distance" value="{{$order_arr->distance}}" class="form-control">
        <input type="number" name="cargo_weight" value="{{$order_arr->cargo_weight}}" class="form-control">
        <input type="submit" value="Save" class="btn btn-success">
    </form>
</div>

</body>
</html>
