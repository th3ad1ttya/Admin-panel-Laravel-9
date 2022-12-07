@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div style="padding-top: 1%">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (session('message'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    <div class="card-header">
                        <h3>Push new update</h3>
                        <a href="#" class="btn bg-gradient-dark btn-sm float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/manage-loader/'.$manageLoaderModel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" id="name" @error('name') is-invalid @enderror value="{{ $manageLoaderModel->name }}" placeholder="APP-NAME" class="form-control">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Version</label>
                                    <input type="text" name="loaderVersion" id="loaderVersion" @error('loaderVersion') is-invalid @enderror value="{{ $manageLoaderModel->loaderVersion }}" placeholder="1.0.02" class="form-control">
                                    @error('loaderVersion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Package</label>
                                    <input type="text" name="loaderPackage" id="loaderPackage" @error('loaderPackage') is-invalid @enderror value="{{ $manageLoaderModel->loaderPackage }}" placeholder="com.brand.appname" class="form-control">
                                    @error('loaderPackage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">New loader</label>
                                    <input type="file" name="loaderUrl" id="loaderUrl" @error('loaderUrl') is-invalid @enderror value="{{ $manageLoaderModel->loaderUrl }}" placeholder="com.brand.appname" class="form-control" required>
                                    @error('loaderUrl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">New loader</label>
                                    <input type="text" name="loaderChangeLog" id="loaderChangeLog" @error('loaderChangeLog') is-invalid @enderror value="{{ $manageLoaderModel->loaderChangeLog }}" placeholder="**Fixed-bugs" class="form-control">
                                    @error('loaderChangeLog')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark btn-sm float-end">Push update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
          $currentPageName = 'Admin/Manage-Loader/Push-Update';
          $namePage = "Push-Update";
      @endphp
@endsection
