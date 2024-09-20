@include('admin.layout.head')

@include('admin.layout.sidebar')


@include('admin.layout.navbar')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Create tour</h1>
                        <p>We are on a mission to help developers like you build successful projects for FREE.</p>
                    </div>
                    <div>
                        <a href="" class="btn btn-link btn-soft-light">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0711 18.9706V4.82847M19.1421 11.8995H5" stroke="currentColor" stroke-linecap="round" />
                            </svg>
                            Announcements
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="{{asset('image/dashboard/top-header.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('image/dashboard/top-header1.png')}}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('image/dashboard/top-header2.png')}}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('image/dashboard/top-header3.png')}}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('image/dashboard/top-header4.png')}}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="{{asset('image/dashboard/top-header5.png')}}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
    </div>
</div> <!-- Nav Header Component End -->
<!--Nav End-->
</div>

<!-- error any -->
@if ($errors->any()){
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
}
@endif
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add New User</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">

                                <div class="profile-img-edit position-relative">
                                    <img id="profile-pic-preview" src="{{ asset('image/avatars/01.png') }}" alt="profile-pic" class="theme-color-default-img profile-pic rounded avatar-100">


                                    <div class="upload-icone bg-primary">
                                        <!-- <label style="display: none;" for="avatar_url">Profile Image</label> -->
                                        <div class="upload-icon-wrapper" style="position: relative; display: inline-block;">
                                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/24/image-file-add.png" alt="image-file-add" id="upload-icon" style="cursor: pointer;">
                                            <input type="file" class="upload-input" id="avatar_url" name="avatar_url" accept=".jpg, .jpeg, .png" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                        </div>
                                        <svg class="upload-button icon-14" width="14" viewBox="0 0 24 24" onclick="document.getElementById('avatar_url').click();"></svg>
                                        <path fill="#ffffff" d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="img-extension mt-3">
                                    <div class="d-inline-block align-items-center">
                                        <span>Only</span>
                                        <a href="javascript:void();">.jpg</a>
                                        <a href="javascript:void();">.png</a>
                                        <a href="javascript:void();">.jpeg</a>
                                        <span>allowed</span>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">New User Information</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="first_name">First Name:</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="phone">Mobile Number:</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Mobile Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="preferred_currency">Preferred Currency:</label>
                                    <input type="text" class="form-control" name="preferred_currency" id="preferred_currency" placeholder="Preferred Currency">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="travel_hobby">Travel Hobby:</label>
                                    <input type="text" class="form-control" name="travel_hobby" id="travel_hobby" placeholder="Travel Hobby">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="role">Role:</label>
                                    <input type="text" class="form-control" name="role" id="role" value="user" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="password">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                </div>
                            </div>
                          
                            <input type="submit" value="Add " class="btn btn-primary"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('admin.layout.footer')

@include('admin.layout.setting')

@include('admin.layout.js')
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const uploadButton = document.querySelector('.upload-button');
        const uploadInput = document.querySelector('.upload-input');
        const profilePicPreview = document.getElementById('profile-pic-preview');

        uploadButton.addEventListener('click', function() {
            uploadInput.click();
        });

        uploadInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profilePicPreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection