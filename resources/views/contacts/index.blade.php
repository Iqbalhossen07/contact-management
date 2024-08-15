@extends('layouts.app')

@section('content')
    <div style="box-shadow: 2px 2px 8px #bdbdbd" class="overflow-x-auto p-8">
        <h1 class="text-center text-3xl font-medium">Contacts</h1>
        <div class=" p-4">
            <form method="GET" action="{{ route('contacts.index') }}">
                <input
                    type="text"
                    name="search" value="{{ request('search') }}" placeholder="Search by name or email"
                    class="input input-bordered input-accent w-full max-w-xs" />
                <button style="box-shadow: 2px 2px 8px #00935F" class="btn btn-success text-white" type="submit">Search</button>
            </form>
        </div>
        <table class="table">
            <thead class="bg-black text-white">
                <tr>
                    <th><a href="{{ route('contacts.index', ['sort_field' => 'name', 'sort_direction' => request('sort_direction') === 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th><a href="{{ route('contacts.index', ['sort_field' => 'created_at', 'sort_direction' => request('sort_direction') === 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <th>{{ $contact->name }}</th>
                        <th>{{ $contact->email }}</th>
                        <th>{{ $contact->phone }}</th>
                        <th>{{ $contact->address }}</th>
                        <th>{{ $contact->created_at }}</th>
                        <th>
                            <a style="box-shadow: 2px 2px 8px #009DE4" class="btn btn-info text-white" href="{{ route('contacts.show', $contact) }}">View</a>
                            <a style="box-shadow: 2px 2px 8px #E7A500" class="btn btn-warning text-white" href="{{ route('contacts.edit', $contact) }}">Edit</a>
                            <form  action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button style="box-shadow: 2px 2px 8px #EF4C53" class="btn btn-error text-white" type="submit">Delete</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $contacts->links() }}
        <a href="{{ url('/contacts/create') }}" style="box-shadow: 1px 1px 8px #3F00E7"  class="text-white btn btn-primary">Add</a>
    </div>
@endsection
