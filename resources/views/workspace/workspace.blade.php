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
        Create a workspace
    </a>
    <table class="my-4 border border-primary rounded">
        <thead class="border-bottom rounded">
            <tr>
                <th class="p-2 border border-primary">workspace name</th>
                <th class="p-2 border border-primary">api token name</th>
                <th class="p-2 border border-primary">usage duration</th>
                <th class="p-2 border border-primary">started at</th>
                <th class="p-2 border border-primary">service name</th>
                <th class="p-2 border border-primary">service cost per ms</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services AS $s)
            <tr class="position-relative border-bottom">
                <td class="p-2">
                    <a href="{{ route('workspace.edit', $s->id) }}" class="position-absolute top-0 bottom-0 end-0 start-0"></a>
                    {{ $s->workspace_title }}
                </td>
                <td class="p-2">
                    {{ $s->api_token_name }}
                </td>
                <td class="p-2">
                    {{ $s->usage_duration_in_ms }}
                </td>
                <td class="p-2">
                    {{ $s->usage_started_at }}
                </td>
                <td class="p-2">
                    {{ $s->service_name }}
                </td>
                <td class="p-2">
                    {{ $s->service_cost_per_ms }}
                </td>
                <td class="p-2">
                    <a class="btn btn-primary">
                        Open
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
