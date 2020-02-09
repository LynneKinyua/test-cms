@extends('admin.layouts.app')

    
@section('content')

<div class="row">
    <div class="col-sm-5"> 
        <div class="card">
            <div class="card-header">
                User Details
                <span class="btn btn-sm btn-primary float-right" id="open-edit0details-modal">Edit</span>
            </div>
            <div class="card-body">
                <h5>Name: {{ $user->name}}</h5>
                <h5>Email: {{ $user->email}}</h5>
                <h5>Roles: {{ $user->roles}}</h5>
                <h5>Active: {{ $user->isActive == 1 ? 'Yes': 'No'}}</h5>
            </div>
             
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card">

        </div>
    </div>
</div>

<!-- Modals-->

<div id="edit-details-modal" class="modal-cont">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card md-5">
                <div class="card-header">
                    Edit the details for: {{ $user->name }} <span class="float-right" id="close-edit-details-modal" style="cursor: pointer; color: red"><b>X</b></span>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Users Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Users Email:</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="roles">Users Roles:</label>
                            <select name="roles" class="form control">
                            <option value="{{ $user->roles }}">{{ ucfirst($user->role) }}</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="isActive">Is the Users Active</label>
                            <select name="isActive" class="form control">
                                <option value="1" {{ $user->isActive == 1 ? 'default' : '' }}>Yes</option>
                                <option value="0" {{ $user->isActive == 0 ? 'default' : '' }}>No</option>
                            </select>
                        </div>
                        <button class="btn btn-primary btn-block"> Update User Details</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection
@push('admin.layouts.scripts.scripts')
    <script src="{{ asset('js/admin/user.js') }}"></script>
@endpush


