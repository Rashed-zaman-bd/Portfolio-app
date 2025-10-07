<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    // Return services & skills as JSON
    public function index()
    {
        $services = Service::all();
        $skills = Skill::all();

        return response()->json([
            'services' => $services,
            'skills' => $skills
        ]);
    }

    // Optional: store service
    public function storeService(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'icon'=> 'nullable|string'
        ]);

        $service = Service::create($validated);

        return response()->json(['message' => 'Service added', 'data' => $service]);
    }

    // Optional: store skill
    public function storeSkill(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'level' => 'required|integer|min:0|max:100',
        ]);

        $skill = Skill::create($validated);

        return response()->json(['message' => 'Skill added', 'data' => $skill]);
    }
}
