<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-end mb-3">
                <a class="btn btn-success btn-sm" href="{{route('customers.index')}}">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <tr>
                        <th>ID</th>
                        <td>{{$customers->id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$customers->name}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$customers->phone}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$customers->address}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            @if($customers->image)
                            <img src="{{ asset('storage/' . $customers->image) }}" alt="Customer Image" width="150">
                            @else
                            No Image
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>PDF File</th>
                        <td>
                            @if($customers->pdf)
                            <a href="{{ asset('storage/' . $customers->image) }}" target="_blank">View PDF</a>
                            @else
                            No PDF
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Created AT</th>
                        <td>{{$customers->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated AT</th>
                        <td>{{$customers->updated_at}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>