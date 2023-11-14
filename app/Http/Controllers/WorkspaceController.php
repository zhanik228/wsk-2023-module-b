<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use App\Models\ServiceUsage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\workspace\CreateRequest;
use Illuminate\Support\Carbon;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $serviceUsages = ServiceUsage::where('username', $request->user()->name)->get();
        return view('workspace.workspace')->with('services', $serviceUsages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('workspace.create-workspace');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $workspaces = new Workspace();
        $workspaces->title = $request->title;
        $workspaces->description = $request->description;
        $workspaces->authorId = $request->user()->id;
        $workspaces->save();

        $end = Carbon::parse($workspaces->created_at);
        $current = Carbon::now();
        $length = $end->diffInMilliseconds($current);

        $serviceUsages = new ServiceUsage();
        $serviceUsages->username = $request->user()->name;
        $serviceUsages->workspace_title = $request->title;
        $serviceUsages->api_token_name = 'development';
        $serviceUsages->usage_duration_in_ms = $length;
        $serviceUsages->usage_started_at = now();
        $serviceUsages->service_name = 'Service 2';
        $serviceUsages->service_cost_per_ms = 0.001500;
        $serviceUsages->save();

        return redirect('/workspace/token');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
