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
        return Inertia::render('Businesses', [
            'auction' => Business::where('transaction_type', TransactionTypes::Auction->value)
                        ->where('status', 'approved')->with('images', 'category')->get()->take(20),
            'sale' => Business::where('transaction_type', TransactionTypes::Sale->value)
                        ->where('status', 'approved')->with('images', 'category')->paginate(),
            'investment' => Business::where('transaction_type', TransactionTypes::Investment->value)
                        ->where('status', 'approved')->with('images', 'category')->paginate(),
            'lease' => Business::where('transaction_type', TransactionTypes::Lease->value)
                        ->where('status', 'approved')->with('images', 'category')->paginate()
        ]);
    }

    public function show()
    {
        return Inertia::render('Post', [
            'categories' => Category::all(),
            'transaction_types' => TransactionTypes::toObject()
        ]);
    }

    public function business($id)
    {
        $business = Business::where('listing_id', $id)
        ->with('images','category','watchers','owner')->first();
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
                'staffs' => 'required',
                'photos' => 'required',
                'transaction_type' => 'required',
                'price' => 'required',
                'profit_margin' => 'required',
                'ends' => 'nullable',
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
                'staffs',
                'category_id',
                'description',
                'transaction_type',
                'address',
                'price',
                'profit_margin',
                'age',
                'ends',
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
