<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Token</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
</head>
<body class="h-100 d-flex align-items-center justify-content-center bg-dark">
<form class="text-light w-25 d-flex flex-column" action="{{ route('workspace.store') }}" method="POST">
    @csrf
    <h2>Create Token</h2>
    <div class="form-group my-4">
        <label for="title">Token name</label>
        <input type="text" name="token_name" id="description" class="form-control" placeholder="token name">
        @error('title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-flex justify-content-between">
        <a href="{{ route('workspace.index') }}" type="button" class="btn btn-danger">
            Cancel
        </a>
        <button type="submit" class="btn btn-primary ">
            Create Token
        </button>
    </div>
</form>
</body>
</html>
