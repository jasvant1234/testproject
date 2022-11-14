@extends('layouts.app')

@section('content')


<div class="row">
{{--    <div class="col-xl-4">--}}

    
        <div class="card" style="height: 400px;border-radius: 100px;margin-left: 30px;">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                @if(isset(Auth::user()->profile_image))
                <img src="{{asset('storage/profile_image/'. \Illuminate\Support\Facades\Auth::user()->profile_image)}}" alt="Profile" style="border-radius: 60px;width: 300px;height: 350px;" >
                <h5>{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                @else
                    <img src="{{asset('storage/profile_image/users-vector-icon-png_260862.jpg')}}" alt="Profile" style="border-radius: 60px;width: 300px;height: 350px;" >
                @endif


            </div>
        </div>

{{--    </div>--}}

    <div class="container" style="margin-left: 230px;margin-top: -370px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Profile </div>

                    <div class="card-body">
                        <form method="POST" action="{{route('profile_update',\Illuminate\Support\Facades\Auth::user()->id)}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">@lang('messages.Name')</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Illuminate\Support\Facades\Auth::user()->name}}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profile_image" class="col-md-4 col-form-label text-md-end">Profile Image</label>

                                <div class="col-md-6">
                                    <input id="profile_image" type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" value="{{ old('profile_image') }}" required autocomplete="profile_image" autofocus>

                                    @error('profile_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">@lang('messages.Email Address')</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Illuminate\Support\Facades\Auth::user()->email}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>
                                <div class="col-md-6">
                                    <input type="radio"  name="gender" value="male" checked> Male
                                    <input type="radio" name="gender" value="female"> Female
                                    <input type="radio" name="gender" value="other"> Other
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mobile_no" class="col-md-4 col-form-label text-md-end">Mobile No</label>

                                <div class="col-md-6">
                                    <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{Illuminate\Support\Facades\Auth::user()->mobile_no}}" required autocomplete="mobile_no">

                                    @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>



@endsection
