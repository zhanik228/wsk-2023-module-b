<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WorkSpace</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
</head>
<body class="d-flex justify-content-center align-items-center bg-dark text-light">
<a href="{{ route('workspace.create') }}" class="btn btn-primary m-2 align-self-start">
    Create a token
</a>
<table class="my-4 border border-primary rounded">
    <thead class="border-bottom rounded">
    <tr>
        <th class="p-2 border border-primary">token name</th>
        <th class="p-2 border border-primary">token</th>
        <th class="p-2 border border-primary">created at</th>
        <th class="p-2 border border-primary">revoked at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tokens AS $t)
        <tr class="position-relative border-bottom">
            <td class="p-2">
                <form method="post" action="{{ route('workspace.token.destroy', [$t->workspace_id, $t->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="position-absolute top-0 bottom-0 end-0 start-0 bg-transparent border-0"></button>
                    {{ $t->name }}
                </form>
            </td>
            <td class="p-2">
                {{ $t->token }}
            </td>
            <td class="p-2">
                {{ $t->created_at }}
            </td>
            <td class="p-2">
                {{ $t->revoked_at }}
            </td>
            <td class="p-2">
                <a href="{{ route('workspace.token.destroy', [$t->workspace_id, $t->id]) }}">Revoke token</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
