<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create order</title>

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

        <form action="save_new_order">
            <input type="text" name="start_point" placeholder="Enter start point" class="form-control">
            <input type="text" name="end_point" placeholder="Enter end point" class="form-control">
            <input type="number" name="distance" placeholder="Enter distance" class="form-control">
            <input type="number" name="cargo_weight" placeholder="Enter cargo weight" class="form-control">
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>

</body>
</html>
