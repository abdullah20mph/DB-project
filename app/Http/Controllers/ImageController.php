<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function getImages($searchTerm)
    {
        // Replace 'YOUR_PIXABAY_API_KEY' with your actual Pixabay API key
        $apiKey = 'YOUR_PIXABAY_API_KEY';
        $response = Http::get('https://pixabay.com/api/', [
            'key' => $apiKey,
            'q' => $searchTerm,
            'image_type' => 'photo',
            'per_page' => 10, // Number of images to retrieve
            'orientation' => 'horizontal', // Optional
        ]);

        // Check if the response is successful
        if ($response->successful()) {
            $images = $response->json()['hits'];
            return view('categories.graphics', ['images' => $images]);
        } else {
            // Handle the error
            return response()->json(['error' => 'Unable to fetch images from Pixabay'], 500);
        }
    }
}
