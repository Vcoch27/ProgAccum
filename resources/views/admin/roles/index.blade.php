
@extends('admin.layouts.app')
@section('title', 'Roles')
@section('content')
<div class="card">
    <h1>
        Role List
    </h1>
    <!-- @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div>
        <a href="{{ route('roles.create') }}" class="btn btn-primary">Create</a>
    </div>
    <div>
        <table class="table table-hover">
            <>
                <th>#</th>
                <th>Name</th>
                <th>DisplayName</th>
                <th>Action</th>
            </tr>
            @foreach ($roles as $role )
            <tr>
                <th>{{ $role->id }}</th>
                <th>{{ $role->name }}</th>
                <th>{{ $role->display_name }}</th>
                <th>
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning"> Edit</a>
                    <form id="delete-form-{{ $role->id }}" action="{{ route('roles.destroy', $role->id) }}" method="post" style="display:none;">
                        @csrf
                        @method('delete')
                    </form>

                    <button class="btn btn-danger" onclick="confirmDelete({{ $role->id }})">
                        Delete
                    </button>

                    <script>
                        function confirmDelete(roleId) {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Submit the form if the user confirms
                                    document.getElementById('delete-form-' + roleId).submit();
                                }
                            })
                        }
                    </script>
                </th>
            </tr>
            @endforeach
        </table>
        {{$roles->links()}}
    </div> -->
</div>


@endsection