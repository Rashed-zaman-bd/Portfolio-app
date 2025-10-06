<?php

namespace App\Http\Controllers;

use App\Models\SeoProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeoPropertyController extends Controller
{
    /**
     * Get SEO data by page name
     */
    public function getSeoByPage($pageName)
    {
        $seo = SeoProperty::where('pageName', $pageName)->first();

        if (!$seo) {
            return response()->json(['message' => 'SEO data not found'], 404);
        }

        $seo->ogImage = $seo->ogImage ? asset('storage/' . $seo->ogImage) : null;

        return response()->json($seo, 200);
    }

    /**
     * Store new SEO data
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pageName' => 'required|in:home,resume,projects,contact',
            'title' => 'required|string|max:50',
            'keywords' => 'required|string|max:500',
            'description' => 'required|string|max:500',
            'ogSiteName' => 'required|string|max:100',
            'ogUrl' => 'required|string|max:200',
            'ogTitle' => 'required|string|max:100',
            'ogDescription' => 'required|string|max:500',
            'ogImage' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('ogImage')) {
            $path = $request->file('ogImage')->store('seo_images', 'public');
        }

        $seo = SeoProperty::create(array_merge($validated, ['ogImage' => $path]));

        return response()->json([
            'message' => 'SEO data created successfully',
            'data' => $seo
        ], 201);
    }

    /**
     * Update existing SEO data
     */
    public function update(Request $request, $id)
    {
        $seo = SeoProperty::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:50',
            'keywords' => 'sometimes|required|string|max:500',
            'description' => 'sometimes|required|string|max:500',
            'ogSiteName' => 'sometimes|required|string|max:100',
            'ogUrl' => 'sometimes|required|string|max:200',
            'ogTitle' => 'sometimes|required|string|max:100',
            'ogDescription' => 'sometimes|required|string|max:500',
            'ogImage' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('ogImage')) {
            // Delete old image if exists
            if ($seo->ogImage && Storage::disk('public')->exists($seo->ogImage)) {
                Storage::disk('public')->delete($seo->ogImage);
            }

            $validated['ogImage'] = $request->file('ogImage')->store('seo_images', 'public');
        }

        $seo->update($validated);

        return response()->json([
            'message' => 'SEO data updated successfully',
            'data' => $seo
        ], 200);
    }
}
