@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div style="box-shadow: 1px 1px 8px #bdbdbd" class="bg-white rounded-lg p-6 md:w-1/2 mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-center">Contact Details</h1>
            <div class="my-4">
                <a style="box-shadow: 1px 1px 8px #00BBA6" href="{{ url('/contacts') }}" class="btn btn-accent text-white">Back</a>
            </div>
            <p class="text-lg"><span class="font-semibold">Name:</span> {{ $contact->name }}</p>
            <p class="text-lg"><span class="font-semibold">Email:</span> {{ $contact->email }}</p>
            <p class="text-lg"><span class="font-semibold">Phone:</span> {{ $contact->phone }}</p>
            <p class="text-lg"><span class="font-semibold">Address:</span> {{ $contact->address }}</p>
            <p class="text-lg"><span class="font-semibold">Created At:</span> {{ $contact->created_at }}</p>
        </div>
    </div>
@endsection

