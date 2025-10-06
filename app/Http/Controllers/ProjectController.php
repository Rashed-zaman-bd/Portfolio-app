<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // Return all projects with SEO data (optional)
    public function projectPage()
    {
        // Get SEO info for 'projects' page
        $seo = DB::table('seoproperties')->where('pageName', 'projects')->first();

        // Get all projects
        $projects = DB::table('projects')->get()->map(function ($item) {
            $item->image = $item->image ? asset('storage/' . $item->image) : null;
            return $item;
        });

        // Return as JSON
        return response()->json([
            'seo' => $seo,
            'projects' => $projects
        ], 200);
    }

    // Return only projects (no SEO)
    public function projectData()
    {
        $projects = DB::table('projects')->get()->map(function ($item) {
            $item->image = $item->image ? asset('storage/' . $item->image) : null;
            return $item;
        });

        return response()->json($projects, 200);
    }

     /**
     * Store a new project
     */
     public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:100',
            'previewLink' => 'nullable|url|max:300',
            'details'     => 'required|string',
            'category'    => 'required|in:project,product',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $path = null;

        // ✅ Proper image upload handling
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
        }

        $project = Project::create([
            'title'         => $validated['title'],
            'previewLink'   => $validated['previewLink'] ?? null,
            'details'       => $validated['details'],
            'category'      => $validated['category'],
            'image'         => $path,
        ]);

        return response()->json([
            'message' => 'Project created successfully',
            'data'    => $project
        ], 201);
    }

    /**
     * Update an existing project
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'title'       => 'sometimes|required|string|max:100',
            'previewLink' => 'nullable|url|max:300',
            'details'     => 'sometimes|required|string',
            'category'    => 'sometimes|required|in:project,product',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5048',
        ]);

        // ✅ Replace old image if a new one is uploaded
        if ($request->hasFile('image')) {
            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($validated);

        return response()->json([
            'message' => 'Project updated successfully',
            'data'    => $project
        ], 200);
    }

    /**
     * Delete a project
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return response()->json(['message' => 'Project deleted successfully'], 200);
    }
}
