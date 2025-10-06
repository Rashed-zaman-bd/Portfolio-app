<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroModel;

class HomeController extends Controller
{
    // Return all heroes as JSON
    public function homePage()
    {
        $heroes = HeroModel::all()->map(function ($hero) {
        // Prepend full URL for image
            $hero->img = $hero->img ? asset('storage/' . $hero->img) : null;
            return $hero;
        });
        return response()->json($heroes, 200);
    }

    // Insert new hero record
    public function storeHero(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'keyLine'     => 'nullable|string|max:255',
            'title'       => 'nullable|string|max:255',
            'short_title' => 'nullable|string|max:255',
            'message'     => 'nullable|string',
            'img'         => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // now file
        ]);

        // Handle file upload
        $path = null;
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('hero_images', 'public');
        }

        // Save to database
        $hero = HeroModel::create([
            'keyLine'     => $request->keyLine,
            'title'       => $request->title,
            'short_title' => $request->short_title,
            'message'     => $request->message,
            'img'         => $path, // stored path in DB
        ]);

        return response()->json([
            'message' => 'Hero data inserted successfully',
            'data'    => $hero
        ], 201);
    }


    // Update hero record
    public function updateHero(Request $request, $id)
    {
        $hero = HeroModel::findOrFail($id);

        $hero->update($request->all());

        return response()->json([
            'message' => 'Hero data updated successfully',
            'data'    => $hero
        ], 200);
    }

    // Delete hero record
    public function deleteHero($id)
    {
        $hero = HeroModel::findOrFail($id);
        $hero->delete();

        return response()->json(['message' => 'Hero data deleted successfully'], 200);
    }

    // About data
    public function aboutData()
    {
        return response()->json(['message' => 'About data goes here'], 200);
    }

    // Social data
    public function socialData()
    {
        return response()->json(['message' => 'Social data goes here'], 200);
    }
}
