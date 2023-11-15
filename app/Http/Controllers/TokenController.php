<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($workspaceId)
    {
        $tokens = Token::with('workspace')
            ->where('workspace_id', $workspaceId)
            ->get();

        return view('token.token-list')
            ->with('tokens', $tokens);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $workspaceId, string $tokenId)
    {
        $token = Token::where('id', $tokenId)
        ->update(['revoked_at' => now()]);

        return redirect("/workspace/$workspaceId/token");
    }
}
