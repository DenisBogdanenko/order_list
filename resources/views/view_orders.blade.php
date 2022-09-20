<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Main page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <style>
        .btn {
            margin-bottom: 20px;
        }
    </style>

    <body>
<div class="container">
    <div class="text-right">
        <a href="create" class="btn btn-success">Create new order</a>
    </div>

    <table class="table">
        <tr>
            <td>id</td>
            <td>start point</td>
            <td>end point</td>
            <td>distance</td>
            <td>cargo weight</td>
            <td>created at</td>
            <td>action</td>
        </tr>

            @foreach($orders_arr as $order)
            <tr>
                <td>{{ $order -> id }}</td>
                <td>{{ $order -> start_point }}</td>
                <td>{{ $order -> end_point }}</td>
                <td>{{ $order -> distance }}</td>
                <td>{{ $order -> cargo_weight }}</td>
                <td>{{ $order -> created_at }}</td>
                <td>
                    <a href="delete/{{$order -> id}}" class="btn btn-danger">Delete</a> 
                    <a href="edit/{{$order -> id}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
    </table>
</div>
    </body>
</html>
