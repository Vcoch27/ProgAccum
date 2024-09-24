@extends('admin.layouts.app')
@section('title', 'Create Users')
@section('content')
    <div class="card">
        <h1>Create User</h1>

        <div>
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-5 mb-4">
                        <label>Image</label>
                        <input type="file" accept="image/*" name="image" id="image-input" class="form-control">

                        @error('image')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-5">
                        <img src="" id="show-image" alt="" width="60%">
                    </div> 
                    <script>
                        document.getElementById("image-input").addEventListener("change", function(event) {
                            const file = event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    document.getElementById("show-image").src = e.target.result;
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                    </script>
                </div>


                
                
                <div class="input-group input-group-static mb-4">
                    <label>Name</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control">

                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    <label>Email</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                    @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                
                <div class="input-group input-group-static mb-4">
                    <label>Phone</label>
                    <input type="text" value="{{ old('phone') }}" name="phone" class="form-control">
                    @error('phone')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                
                <div class="input-group input-group-static mb-4">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                
                <div class="input-group input-group-static mb-4">
                    <label>Address</label>
                    <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                    @error('address')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    <label name="gender" class="ms-0">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>

                    </select>

                    @error('group')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

               


                <div class="form-group">
                    <label for="">Role</label>
                    <div class="row">
                        @foreach ($roles as $groupName => $role)
                            <div class="col-5">
                                <h4>{{ $groupName }}</h4>
                                <div>
                                    @foreach ($role as $item)
                                        <div class="form-check">
                                            <input 
                                                class="form-check-input" 
                                                name="role_ids[]" 
                                                type="checkbox"
                                                value="{{ $item->id }}"
                                                {{ in_array($item->id, old('role_ids', [])) ? 'checked' : '' }}  
                                            ><!-- giữ lại trạng thái checkbox -->
                                            <label class="custom-control-label">{{ $item->display_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <button type="submit" class="btn btn-submit btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('script')

   
@endsection

