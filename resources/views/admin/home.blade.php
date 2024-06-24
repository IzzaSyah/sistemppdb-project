<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* CSS Styling */
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    h1 {
      color: #135D66;
      margin-bottom: 30px;
    }
    .table {
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .table th {
      background-color: #135D66;
      color: #fff;
    }
    .table th,
    .table td {
      padding: 12px 15px;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(0, 0, 0, 0.05);
    }
    .table-striped tbody tr:hover {
      background-color: rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Admin Dashboard</h1>
  
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Upload Kartu Peserta</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>
          <td>
            <form action="{{ route('admin.upload.kartupeserta', $user->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="file" name="kartupeserta" required>
              <button type="submit" class="btn btn-sm btn-primary">Upload</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
