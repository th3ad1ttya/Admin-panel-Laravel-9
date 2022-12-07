@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Push Lib32</h4>
                    <a href="" class="btn  btn-dark btn-sm float-end">Go Back</a>
                </div>
                @if (session('error'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            <div class="card-body">
                <form action="{{ url('admin/push-lib32-update/'.$lib32Model->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="card-header text-center">
                            <h5 class="btn btn-sm btn-secondary text-xxs">Lib-ARMV7a</h5>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Lib-V7-Name</label>
                            <input type="text" name="libARMV7aName" id="libARMV7aName" @error('libARMV7aName') is-invalid @enderror value="{{ $lib32Model->libARMV7aName }}" placeholder="lib-v7.so" class="form-control">
                                    @error('libARMV7aName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib-V7-Version</label>
                            <input type="text" name="libARMV7aVersion" id="libARMV7aVersion" @error('libARMV7aVersion') is-invalid @enderror value="{{ $lib32Model->libARMV7aVersion }}" placeholder="1.0.0" class="form-control">
                                    @error('libARMV7aVersion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib-V7-File</label>
                            <input type="file" name="libARMV7aUrl" id="libARMV7aUrl" @error('libARMV7aUrl') is-invalid @enderror value="{{ $lib32Model->libARMV7aUrl }}" placeholder="" class="form-control">
                                    @error('libARMV7aUrl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="card-header text-center">
                            <h5 class="btn btn-sm btn-secondary text-xxs">Lib-ARMV8a</h5>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Lib-V8-Name</label>
                            <input type="text" name="libARMV8aName" id="libARMV8aName" @error('libARMV8aName') is-invalid @enderror value="{{ $lib32Model->libARMV8aName }}" placeholder="lib-v8.so" class="form-control">
                                    @error('libARMV8aName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib-V8-Version</label>
                            <input type="text" name="libARMV8aVersion" id="libARMV8aVersion" @error('libARMV8aVersion') is-invalid @enderror value="{{ $lib32Model->libARMV8aVersion }}" placeholder="1.0.0" class="form-control">
                                    @error('libARMV8aVersion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib-V8-File</label>
                            <input type="file" name="libARMV8aUrl" id="libARMV8aUrl" @error('libARMV8aUrl') is-invalid @enderror value="{{ $lib32Model->libARMV8aUrl }}" placeholder="" class="form-control">
                                    @error('libARMV8aUrl')
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

@endsection()
        @php
          $currentPageName = 'Admin/Lib32-Update/Push-Lib';
          $namePage = "Push-Lib";
      @endphp
