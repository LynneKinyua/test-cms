@extends('admin.layouts.app')

@section('content')

<div class="row">
    
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-block btn-primary" id="show-new-user-form">Add a New User</button>
                @component('admin.layouts.components.forms.add_user')
                @endcomponent
            </div>
        </div>
       
    </div>
    <div class="col-sm-5">
        <div class="card">
            <div class="card-header">
                Current Users
            </div>
             <ul class="list-group list-group-flush">
                @if($users)
                    @foreach ($users as $user)
                        <li class="list-group-item">($user->name)<a href="{{ route('admin.user', ['id' -> $user->id]) }}"></a></li>
                    @endforeach

                @endif
             </ul>
        </div>
    </div>
</div>

@endsection

@push('admin.layouts.scripts.scripts')
    <script src="{{asset('js/admin/users.js') }}"></script>
@endpush
@push('admin.layouts.styles')
    <link rel="stylesheet" href="{{ asset('css.admin.user.css') }}">   
@endpush
 

