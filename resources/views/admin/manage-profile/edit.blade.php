<div class="container-fluid py-1">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card-header">
                    <h5>
                        Edit Profile
                    </h5>
                    <a href="" class="btn btn-dark btn-sm float-end">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ url('admin/manage-admin-profile') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name <span style="color: red">*</span></label>
                                <input type="text" name="name" id="name" @error('name') is-invalid @enderror value="{{ Auth::user()->name }}" placeholder="Sakib Khan" class="form-control" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Username <span style="color: red">*</span></label>
                                <input type="username" name="username" id="username" @error('username') is-invalid @enderror value="{{ Auth::user()->username }}" placeholder="sakibkhan123" class="form-control">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="">Email <span style="color: red">*</span></label>
                                <input type="text" name="email" id="email" @error('email') is-invalid @enderror value="{{ Auth::user()->email }}" placeholder="sakib-khan@bdactor.com" class="form-control">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">New-password <span style="color: red">*</span></label>
                                <input type="password" name="password" id="password" @error('password') is-invalid @enderror value="" placeholder="top-secret" class="form-control" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="">Confirm-password <span style="color: red">*</span></label>
                                <input type="password" name="password_confirmation" id="password-confirm" @error('password-confirm') is-invalid @enderror value="" placeholder="top-secret" class="form-control" required>
                            </div>


                        </div>
                        <button type="submit" class="btn bg-dark btn-sm float-end">Update profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
