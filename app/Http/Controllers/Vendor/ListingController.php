<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('screens.vendor.listing');
    }

    public function addLisitingView()
    {
        return view('screens.vendor.add-listing');
    }

    public function addListing(Request $request)
    {
        try {

            if ($request->has('files')) {
                $files = $request->file('files');
                foreach ($files as  $file) {
                    // $name = time() . '_profile_image' . '.' . $file->getClientOriginalExtension();
                    // $path = $file->storeAs('profile_images', $name, 'public');
                    dump($file);
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Your Listing Has Been Added Successfully!',
            ], 200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "Error Message, $e",
            ], 200);
        }
    }
}
