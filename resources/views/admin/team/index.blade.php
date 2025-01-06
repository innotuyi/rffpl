@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="card-title">Manage Team</h6>
        <a href="{{ route('admin.team.create') }}" class="btn btn-primary float-right"><i class="icon-plus2"></i> Add New Team Member</a>
    </div>

    <div class="card-body">
        <table class="table datatable-button-html5-columns">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Contact Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($team as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($member->photo)
                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <span>No Photo</span>
                            @endif
                        </td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->role }}</td>
                        <td><a href="{{ $member->contact_link }}" target="_blank">Contact</a></td>
                        <td>
                            <a href="{{ route('admin.team.edit', $member->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.team.destroy', $member->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
