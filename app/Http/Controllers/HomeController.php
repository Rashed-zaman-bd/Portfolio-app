<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HeroModel;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Return heroes with SEO info for the home page
     */
    public function homePage()
    {
        $seo = DB::table('seoproperties')->where('pageName', 'home')->first();

        $heroes = DB::table('heroproperties')->get()->map(function ($hero) {
            $hero->img = $hero->img
                ? asset('storage/' . ltrim($hero->img, '/'))
                : null;
            return $hero;
        });

        return response()->json([
            'seo' => $seo,
            'heroes' => $heroes
        ], 200);
    }

        /**
         * Return only heroes (no SEO)
         */
        public function heroData()
        {
            $heroes = HeroModel::all()->map(function ($hero) {
                $hero->img = $hero->img
                    ? asset('storage/' . ltrim($hero->img, '/'))
                    : null;
                return $hero;
            });

            return response()->json($heroes, 200);
        }

    /**
     * Store a new hero record
     */
    public function storeHero(Request $request)
    {
        $validated = $request->validate([
            'keyLine'     => 'nullable|string|max:255',
            'title'       => 'nullable|string|max:255',
            'short_title' => 'nullable|string|max:255',
            'message'     => 'nullable|string',
            'img'         => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('hero_images', 'public');
        }

        $hero = HeroModel::create([
            'keyLine'     => $validated['keyLine'] ?? null,
            'title'       => $validated['title'] ?? null,
            'short_title' => $validated['short_title'] ?? null,
            'message'     => $validated['message'] ?? null,
            'img'         => $path,
        ]);

        return response()->json([
            'message' => 'Hero data inserted successfully',
            'data'    => $hero
        ], 201);
    }

    /**
     * Update existing hero
     */
    public function updateHero(Request $request, $id)
    {
        $hero = HeroModel::findOrFail($id);

        $validated = $request->validate([
            'keyLine'     => 'nullable|string|max:255',
            'title'       => 'nullable|string|max:255',
            'short_title' => 'nullable|string|max:255',
            'message'     => 'nullable|string',
            'img'         => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // ✅ Replace old image if new one uploaded
        if ($request->hasFile('img')) {
            if ($hero->img && Storage::disk('public')->exists($hero->img)) {
                Storage::disk('public')->delete($hero->img);
            }
            $validated['img'] = $request->file('img')->store('hero_images', 'public');
        }

        $hero->update($validated);

        return response()->json([
            'message' => 'Hero data updated successfully',
            'data'    => $hero
        ], 200);
    }

    /**
     * Delete hero
     */
    public function deleteHero($id)
    {
        $hero = HeroModel::findOrFail($id);

        if ($hero->img && Storage::disk('public')->exists($hero->img)) {
            Storage::disk('public')->delete($hero->img);
        }

        $hero->delete();

        return response()->json(['message' => 'Hero data deleted successfully'], 200);
    }

    /**
     * About section data (optional)
     */
    public function aboutData()
    {
        return response()->json(['message' => 'About data goes here'], 200);
    }

    /**
     * Social section data (optional)
     */
    public function socialData()
    {
        return response()->json(['message' => 'Social data goes here'], 200);
    }
}
