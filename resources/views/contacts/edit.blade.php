@extends('layouts.app')

@section('content')
    <div style="box-shadow: 1px 1px 8px #bdbdbd" class="container mx-auto p-8 " >
        <h1 class="text-2xl font-bold mb-6 text-center">Edit Contact</h1>
        <div class="my-4">
            <a style="box-shadow: 1px 1px 8px #00BBA6" href="{{ url('/contacts') }}" class="btn btn-accent text-white">Back</a>
        </div>
        <form action="{{ route('contacts.update', $contact) }}" method="POST" >
            @csrf
            @method('PUT')
          <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input
                    type="text"
                    name="name" id="name" value="{{ $contact->name }}" required
                    placeholder="Type here"
                    class="input input-bordered input-accent w-full " />
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>

                <input
                    type="text"
                    type="email" name="email" id="email" value="{{ $contact->email }}" required
                    placeholder="Type here"
                    class="input input-bordered input-accent w-full " />
            </div>
          </div>
          <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input
                    type="text"
                    type="text" name="phone" id="phone" value="{{ $contact->phone }}" required
                    placeholder="Type here"
                    class="input input-bordered input-accent w-full " />
            </div>
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input
                type="text"
                type="text" name="address" id="address" value="{{ $contact->address }}" required
                placeholder="Type here"
                class="input input-bordered input-accent w-full " />
            </div>
          </div>
            <button style="box-shadow: 1px 1px 8px #4338CA" type="submit" class="mt-4 bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Update</button>
        </form>
    </div>
@endsection
