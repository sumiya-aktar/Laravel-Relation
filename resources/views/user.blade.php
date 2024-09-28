<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="text-center">
    <h1>Relationship -> Many to Many</h1>
    <br>
    <button class="btn btn-md btn-success">Create</button>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Role</th>
                <th>Users</th>
            </tr>
        </thead>
        <tbody>
            @foreach($role as $roles)
                <tr class="table-primary">
                    <td scope="row">{{ $roles->id }}</td>
                    <td>{{ $roles->name }}</td>
                    <td>
                        @forelse($roles->user as $users)
                            {{ $users->name }}
                        @empty
                            No users assigned
                        @endforelse
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
