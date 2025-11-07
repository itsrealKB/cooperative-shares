<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::where('user_id', Auth::id())->paginate(8);
        return view('screens.vendor.Listings.index', compact('listings'));
    }

    public function create()
    {
        return view('screens.vendor.Listings.create');
    }

    public function store(Request $request)
    {
        try {

            if ($request->has('files') && $request->has('main_image')) {
                $files = $request->file('files');
                $mainImage = $request->file('main_image');
                $name = Str::random(20) . '_listing_main_image' . '.' . $mainImage->getClientOriginalExtension();
                $mainImagePath = $mainImage->storeAs('listing_files', $name, 'public');

                $filesArray = [];
                foreach ($files as $file) {
                    $name = Str::random(20) . '_listing_file' . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('listing_files', $name, 'public');
                    $filesArray[] = [
                        'name' => $file->getClientOriginalName(),
                        'path' => $path,
                        'type' => $file->getClientOriginalExtension(),
                    ];
                }

                $listing = Listing::create([
                    'user_id' => Auth::id(),
                    'listing' => $request->listing,
                    'property_title' => $request->property_title,
                    'description' => $request->description,
                    'category' => $request->category,
                    'listed_in' => $request->listed_in,
                    'price' => $request->price,
                    'tax_rate' => $request->tax_rate,
                    'size_in_ft' => $request->size_in_ft,
                    'bedrooms' => $request->bedrooms,
                    'bathrooms' => $request->bathrooms,
                    'kitchens' => $request->kitchens,
                    'garages' => $request->garages,
                    'garage_size' => $request->garage_size,
                    'year_built' => $request->year_built,
                    'floors' => $request->floors,
                    'listing_description' => $request->listing_description,
                    'main_image' => $mainImagePath,
                    'files' => json_encode($filesArray),
                    'has_ac' => $request->has_ac ?? null,
                    'has_garages' => $request->has_garages ?? null,
                    'has_pool' => $request->has_pool ?? null,
                    'has_parking' => $request->has_parking ?? null,
                    'has_lakeview' => $request->has_lakeview ?? null,
                    'has_garden' => $request->has_garden ?? null,
                    'has_fireplace' => $request->has_fireplace ?? null,
                    'has_pet' => $request->has_pet ?? null,
                    'has_ceiling' => $request->has_ceiling ?? null,
                    'has_shower' => $request->has_shower ?? null,
                    'has_refrigerator' => $request->has_refrigerator ?? null,
                    'has_dryer' => $request->has_dryer ?? null,
                    'has_wifi' => $request->has_wifi ?? null,
                    'has_tv' => $request->has_tv ?? null,
                    'has_bbq' => $request->has_bbq ?? null,
                    'has_laundry' => $request->has_laundry ?? null,
                    'has_accessible' => $request->has_accessible ?? null,
                    'has_lawn' => $request->has_lawn ?? null,
                    'has_elevator' => $request->has_elevator ?? null,
                    'address' => $request->address,
                    'country' => $request->country,
                    'state' => $request->state,
                    'city' => $request->city,
                    'zip_code' => $request->zip_code,
                    'map_location' => $request->map_location,
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Your Listing Has Been Added Successfully!',
                // 'url' => route('vendor.payment.methods'),
            ], 200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "Error Message, $e",
            ], 200);
        }
    }

    public function edit(Listing $listing)
    {
        return view('screens.vendor.Listings.edit', compact('listing'));
    }

    public function update(Request $request, Listing $listing)
    {
        dd($listing);
    }

    public function destory(Listing $listing)
    {
        try {
            if (Storage::disk('public')->exists($listing->main_image)) {

                Storage::disk('public')->delete($listing->main_image);
            }

            $files = json_decode($listing->files);

            foreach($files as $file)
            {
                if(Storage::disk('public')->exists($file->path))
                {
                    Storage::disk('public')->delete($file->path);
                }
            }
            $listing->delete();

            return response()->json([
                'status' => true,
                'message' => 'Your Listing Deleted Successfully!',
            ],200);

        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "Error Message, $e",
            ],200);
        }

    }
}
