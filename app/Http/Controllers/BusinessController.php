<?php

namespace App\Http\Controllers;

use App\Enums\TransactionTypes;
use Inertia\Inertia;
use App\Models\Business;
use App\Models\Category;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        return Inertia::render('Post', [
            'categories' => Category::all(),
            'transaction_types' => TransactionTypes::toArray()
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
        $request->validate([
            'business_name' => 'required',
            'business_number' => 'required',
            'business_type' => 'required',
            'property_type' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'transaction_type' => 'required',
            'state' => 'nullable',
            'lga' => 'nullable',
            'price' => 'required',
        ]);

        Business::create($request->only(
            [
                'business_name',
                'business_number',
                'business_type',
                'property_type',
                'category_id',
                'description',
                'transaction_type',
                'state',
                'lga',
                'price',
            ]) + ['listing_id' => generateUID()]
        );

        return redirect()->back()->with('message', 'Business has been created and under review, you will been notified via email once approved!');
    }

    public function update(Request $request)
    {

    }
}
