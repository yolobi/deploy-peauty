@extends('layouts.home')

@section('content')
<section class="home-section">
    <div class="container-fluid" style="border-radius: 30px">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-9">
                <div class="shadow p-3 mb-10 bg-body" style="border-radius: 30px">

                    <div>

                        <div class="row">
                            {{-- <div class="col-xl-4">
                                <!-- Profile picture card-->
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle mb-3"
                                            src="D:\MPPL PROJECT\peauty-main\peauty-main\frontend\src\img\patrick.png">
                                        <!-- Profile picture upload button-->
                                        <button class="btn btn-primary profile-button" type="button">Edit
                                            Profile</button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-xl-12">
                                <!-- Account details card-->
                                <div class="card mb-3 rounded">
                                    <div class="card-header">Profile Details</div>
                                    <div class="card-body">
                                        <form action="{{ route('user.post-edit') }}" method="POST">
                                            @csrf
                                            <!-- Form Group (username)-->
                                            <div class="mb-xl-0">
                                                <label class="small mb-xl-0" for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                    id="name" type="text" placeholder="Enter your name" name="name"
                                                    value="{{ $user->name }}">

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <label class="small mb-xl-0" for="inputUsername">Username</label>
                                                <input class="form-control @error('username') is-invalid @enderror"
                                                    id="inputUsername" type="text" placeholder="Enter your username"
                                                    name="username" value="{{ $user->username }}" readonly>
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <!-- Form Group (email address)-->
                                            <div class="mb-4">
                                                <label class="small mb-xl-0" for="inputEmailAddress">Email
                                                    address</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    id="inputEmailAddress" type="email"
                                                    placeholder="Enter your email address" name="email"
                                                    value="{{ $user->email }}" readonly>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-xl-0">

                                                <!-- Form Group (gender)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-xl-0" for="inputGender">Gender</label>
                                                    <p><input class="form-gender mb-xl-0" type='radio' name='gender'
                                                            value='Male'> Male</p>
                                                    <p><input class="form-gender mb-xl-0" type='radio' name='gender'
                                                            value='Female'> Female</p>
                                                </div>

                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-xl-0" for="inputPhone">Phone Number</label>
                                                    <input
                                                        class="form-control @error('phone_number') is-invalid @enderror"
                                                        id="inputPhone" type="text"
                                                        placeholder="Enter your phone numnber" name="phone_number"
                                                        value="{{ $user->phone_number }}">
                                                    @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (password)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-xl-0" for="inputCurrentPassword">Current
                                                        Password</label>
                                                    <input class="form-control" id="inputCurrentPassword"
                                                        type="password" placeholder="Current password"
                                                        name="curr_password" value="">
                                                </div>
                                                <!-- Form Group (password)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-xl-0" for="inputNewPassword">New
                                                        Password</label>
                                                    <input class="form-control" id="inputNewPassword" type="password"
                                                        name="new_password" placeholder="New password" value="">
                                                </div>
                                            </div>
                                            <!-- Save changes button-->
                                            <button class="btn btn-primary profile-button" type="submit">Save
                                                changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection