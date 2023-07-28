<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
    </style>
</head>
<body>
<h1>Data Layanan Bantuan</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>Id</th>
            <th>user_id</th>
            <th>name</th>
            <th>device</th>
            <th>description</th>
            <th>status</th>
            <th>location</th>
            <th>dibuat</th>
            <th>diupdate</th>
            <th>action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->user }}</td>
                <td>{{ $item->user }}</td>
                <td>{{ $item->device }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>{{ $item->action }}</td>
            </tr>
        @endforeach
      </tbody>
</table>
</body>
</html>
