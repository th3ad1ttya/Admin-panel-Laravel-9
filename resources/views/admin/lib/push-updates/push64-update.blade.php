@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Push Lib64</h4>
                    <a href="" class="btn  btn-dark btn-sm float-end">Go Back</a>
                </div>
                @if (session('error'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            <div class="card-body">
                <form action="{{ url('admin/push-lib64-update/'.$lib64Model->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="card-header text-center">
                            <h5 class="btn btn-sm btn-secondary text-xxs">Lib64-ARMV7a</h5>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Lib64-V7-Name</label>
                            <input type="text" name="lib64ARMV7aName" id="lib64ARMV7aName" @error('lib64ARMV7aName') is-invalid @enderror value="{{ $lib64Model->lib64ARMV7aName }}" placeholder="lib-v7.so" class="form-control">
                                    @error('lib64ARMV7aName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib64-V7-Version</label>
                            <input type="text" name="lib64ARMV7aVersion" id="lib64ARMV7aVersion" @error('lib64ARMV7aVersion') is-invalid @enderror value="{{ $lib64Model->lib64ARMV7aVersion }}" placeholder="1.0.0" class="form-control">
                                    @error('lib64ARMV7aVersion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib64-V7-File</label>
                            <input type="file" name="lib64ARMV7aUrl" id="lib64ARMV7aUrl" @error('lib64ARMV7aUrl') is-invalid @enderror value="{{ $lib64Model->lib64ARMV7aUrl }}" placeholder="" class="form-control">
                                    @error('lib64ARMV7aUrl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="card-header text-center">
                            <h5 class="btn btn-sm btn-secondary text-xxs">Lib64-ARMV8a</h5>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Lib64-V8-Name</label>
                            <input type="text" name="lib64ARMV8aName" id="lib64ARMV8aName" @error('lib64ARMV8aName') is-invalid @enderror value="{{ $lib64Model->lib64ARMV8aName }}" placeholder="lib-v8.so" class="form-control">
                                    @error('lib64ARMV8aName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib64-V8-Version</label>
                            <input type="text" name="lib64ARMV8aVersion" id="lib64ARMV8aVersion" @error('lib64ARMV8aVersion') is-invalid @enderror value="{{ $lib64Model->lib64ARMV8aVersion }}" placeholder="1.0.0" class="form-control">
                                    @error('lib64ARMV8aVersion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Lib64-V8-File</label>
                            <input type="file" name="lib64ARMV8aUrl" id="lib64ARMV8aUrl" @error('lib64ARMV8aUrl') is-invalid @enderror value="{{ $lib64Model->lib64ARMV8aUrl }}" placeholder="" class="form-control">
                                    @error('lib64ARMV8aUrl')
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
          $currentPageName = 'Admin/Lib64-Update/Push-Lib';
          $namePage = "Push-Lib";
      @endphp
