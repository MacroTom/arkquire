<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Business;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Enums\TransactionTypes;
use Illuminate\Support\Facades\Storage;

class BusinessController extends Controller
{
    public function index()
    {
        return Inertia::render('Post', [
            'categories' => Category::all(),
            'transaction_types' => TransactionTypes::toObject()
        ]);
    }

    public function business($id)
    {
        $business = Business::find($id);
        return Inertia::render('Business', [
            'business' => $business
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'business_name' => 'required|unique:businesses,business_name',
                'business_type' => 'required',
                'category_id' => 'required',
                'age' => 'required',
                'business_number' => 'required|unique:businesses,business_number',
                'description' => 'required',
                'address' => 'nullable',
                'property_type' => 'required',
                'photos' => 'required',
                'transaction_type' => 'required',
                'price' => 'required',
                'profit' => 'required',
                'margin' => 'required',
                'properties' => 'nullable'
            ],
            [
                'business_number.unique' => 'Reg. number has been used!'
            ]
        );

        $user = $request->user();

        $business = $user->businesses()->create($request->only(
            [
                'business_name',
                'business_number',
                'business_type',
                'property_type',
                'category_id',
                'description',
                'transaction_type',
                'address',
                'price',
                'profit',
                'margin',
                'age',
            ]) + ['listing_id' => generateUID()]
        );


        foreach ($request->photos as $file) {
            $extension = $file->extension();
            $filename = Str::random(50).".$extension";

            // File Storage
            $path = $file->storePubliclyAs(
                'public/businesses', $filename
            );

            $url = Storage::url($path);

            $business->images()->create([
                'url' => $url,
                'path' => $path,
            ]);
        }

        return redirect()->back()->with('message', 'Business has been created and under review, you will been notified via email once approved!');
    }

    public function update(Request $request)
    {

    }
}
