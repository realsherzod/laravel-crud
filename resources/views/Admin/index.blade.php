<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1>User Table</h1>
            </div>
            <div class="col-12 text-end mb-3">
                <a class="btn btn-success btn-sm" href="{{Route('customers.create')}}">
                    <i class="bi bi-plus-circle"></i>
                </a>
            </div>
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                                
                            
                            <td>{{$loop->iteration}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->created_at}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{Route('customers.show' , $customer->id)}}">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{Route('customers.edit' , $customer->id)}}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route('customers.destroy', $customer->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"  onclick="return confirm('Delete?')"><i class="bi bi-trash"></i></button>

                                </form>
                           
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>