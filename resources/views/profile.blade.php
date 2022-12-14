@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
			</ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                        </div>
                        <div class="profile-info">
							<div class="profile-photo">
								<img src="assets/images/profile/pp.jpg" class="img-fluid rounded-circle" alt="">
							</div>
							<div class="profile-details">
								<div class="profile-name px-3 pt-2">
									<h4 class="text-primary mb-0">{{auth()->user()->name}}</h4>
									<p>0003278621</p>
								</div>
								<div class="profile-email px-2 pt-2">
									<h4 class="text-muted mb-0">{{auth()->user()->email}}</h4>
									<p>Email</p>
								</div>
								<div class="dropdown ml-auto">
									<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection