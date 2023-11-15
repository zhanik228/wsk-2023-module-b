@extends('layout.defaultLayout')

@section('title', 'Workspace')

@section('content')
    <body class="d-flex bg-dark text-light">
    <div>
        <a href="{{ route('workspace.create') }}" class="btn btn-primary m-2 align-self-start">
            Create a token
        </a>
        <a href="{{ route('workspace.create') }}" class="btn btn-primary m-2 align-self-start">
            Go to quotas
        </a>
    </div>

    <table class="my-4 border border-primary rounded">
        <thead class="border-bottom rounded">
        <tr>
            <th class="p-2 border border-primary">Month cost</th>
            <th class="p-2 border border-primary">limit</th>
            <th class="p-2 border border-primary">created at</th>
            <th class="p-2 border border-primary">revoked at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($quotas AS $q)
            <tr class="position-relative border-bottom">
                <td class="p-2">
                    {{ $q->quota_total_cost }}
                </td>
                <td class="p-2">
                    {{ $q }}
                </td>
                <td class="p-2">

                </td>
                <td class="p-2">

                </td>
                <td class="p-2">

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
@stop
