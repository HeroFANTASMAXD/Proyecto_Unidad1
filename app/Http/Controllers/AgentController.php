<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agents.index', compact('agents'));
    }

    public function create()
    {
        return view('admin.agents.create');
    }

    public function store(Request $request)
    {
        Agent::create($request->all());

        return redirect()->route('agents.index')->with('success', 'Agente creado');
    }

    public function edit(Agent $agent)
    {
        return view('admin.agents.edit', compact('agent'));
    }

    public function update(Request $request, Agent $agent)
    {
        $agent->update($request->all());

        return redirect()->route('agents.index')->with('success', 'Agente actualizado');
    }

    public function destroy(Agent $agent)
    {
        $agent->delete();

        return back()->with('danger', 'Agente eliminado');
    }
    public function userIndex()
{
    $agents = \App\Models\Agent::all();
   return view('user.agentes', compact('agents'));
}
}