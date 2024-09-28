<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Has Many Through</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Country</th>
                <th>States</th>
                <th>Cities</th>
            </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
                <tr>
                    <td>{{ $country->name }}</td>
                    <td>
                        @forelse($country->states as $state)
                            {{ $state->name }}<br>
                        @empty
                            No states available
                        @endforelse
                    </td>
                    <td>
                        @foreach($country->states as $state)
                            @forelse($state->cities as $city)
                                {{ $city->name }}<br>
                            @empty
                                No cities available
                            @endforelse
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
