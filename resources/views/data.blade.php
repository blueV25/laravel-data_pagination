<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('stylesheet/bootstrap.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('data_search/datasearch.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Data</title>
</head>
<body>
    <div class="container shadow mt-5">

        <div class="d-flex justify-content-center">
            <div class="mt-3">
                <h2 class="fs-2 text-center"> Mga Kulerit </h2>
            </div>
        </div>
        <hr>


        <form class="d-flex mb-3" style="max-width: 450px;">
            <input id="search_data" class="form-control me-1" type="search" placeholder="Search" style="width: 70%;">
            <button id="search_button" class="btn btn-outline-success" type="button" style="width: 35%;">Search</button>
        </form>


        <table class="table table-hover table-bordered table-secondary">
            <thead>
                <tr class="table-info style">
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">middle_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col">email</th>
                    <th scope="col">birth_date</th>
                    <th scope="col">age</th>
                    <th scope="col">sex</th>
                    <th scope="col">civil_status</th>
                </tr>
            </thead>

            <tbody id="data_table_body">
                @foreach ($datas as $data)
                    <tr>
                        <th scope="col">{{ $data->id }}</th>
                        <td scope="col">{{ $data->name }}</td>
                        <td scope="col">{{ $data->middle_name }}</td>
                        <td scope="col">{{ $data->last_name }}</td>
                        <td scope="col">{{ $data->email }}</td>
                        <td scope="col">{{ $data->birth_date }}</td>
                        <td scope="col">{{ $data->age }}</td>
                        <td scope="col">{{ $data->sex }}</td>
                        <td scope="col">{{ $data->civil_status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{$datas->links('pagination::bootstrap-4')}}
        </div>
    </div>
</body>
</html>
