@extends('admin.layouts.app')
@section('title', 'Users')
@section('content')
<div class="card">
    <h1>
        User List
    </h1>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
    </div>
    <div>
        <table class="table table-hover">
            <>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            @foreach ($users as $item )
            
            <tr>
                <th>
                    @php
                        $latestImage = $item->images()->orderBy('created_at', 'desc')->first();
                    @endphp
                    <img src="{{ $latestImage ? asset('upload/users/'.$latestImage->url) : 'upload/users/defaultImage.jpg' }}" width="150px" height="150px" alt="">
                </th>
                <th>{{ $item->id }}</th>
                <th>{{ $item->name }}</th>
                <th>{{ $item->email }}</th>
                <th>{{ $item->phone }}</th>
                <th>
                    <a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning"> Edit</a>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('users.destroy', $item->id) }}" method="post" style="display:none;">
                        @csrf
                        @method('delete')
                    </form>

                    <button class="btn btn-danger" onclick="confirmDelete({{ $item->id }})">
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
                                    // Submit the form if the item$item confirms
                                    document.getElementById('delete-form-' + roleId).submit();
                                }
                            })
                        }
                    </script>
                </th>
            </tr>
            @endforeach
        </table>
        <!-- hiển thị phân trang -->
        {{$users->links()}}
    </div>
</div>


@endsection