<?php

namespace App\Http\Controllers\Api;

use App\Models\Laptops;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\StatusController;
use App\Http\Resources\Laptops as LaptopsResource;
use App\Models\LaptopOwner;

class LaptopController extends StatusController
{
    public function index()
    {
        $noutes = LaptopOwner::paginate(20);
        return $this->handleResponse(LaptopsResource::collection($noutes), 'Laptops have been retrieved!');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'owner_name' => 'required | string',
            'country' => 'required | string',
            'year' => 'required | integer',
            'price' => 'required | integer',
            'laptop_model' => 'required | string',
        ]);

        if ($validator->fails()) {
            return $this->handleError($validator->errors());
        }

        $noute = LaptopOwner::create($input);
        return $this->handleResponse(new LaptopsResource
    ($noute), 'Laptop created!');
    }

    public function show($id)
    {
        $noute = LaptopOwner::find($id);

        if (is_null($noute)) {
            return $this->handleError('Laptop not found!');
        }

        return $this->handleResponse(new LaptopsResource
    ($noute), 'Laptop retrieved.');
    }

    public function update(Request $request, LaptopOwner $noute)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'owner_name' => 'required | string',
            'country' => 'required | string',
            'year' => 'required | integer',
            'price' => 'required | integer',
            'laptop_model' => 'required | string',
        ]);

        if ($validator->fails()) {
            return $this->handleError($validator->errors());
        }

        $noute->owner_name = $input['owner_name'];
        $noute->country = $input['country'];
        $noute->year = $input['year'];
        $noute->price = $input['name'];
        $noute->laptop_model = $input['laptop_model'];
        $noute->save();

        return $this->handleResponse(new LaptopsResource
    ($noute), 'Laptop successfully updated!');
    }

    public function destroy(LaptopOwner $noute)
    {
        $noute->delete();
        return $this->handleResponse([], 'Laptop deleted!');
    }
}
