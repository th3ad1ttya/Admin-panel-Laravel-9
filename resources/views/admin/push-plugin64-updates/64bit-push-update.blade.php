@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card-header">
                    <h3>Push new plugin64 update</h3>
                    <a href="" class="btn bg-gradient-dark btn-sm float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/push-plugin64-update/'.$modelPlugin64->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Plugin64 Name*</label>
                                <input type="text" name="plugin64Name" id="plugin64Name" @error('plugin64Name') is-invalid @enderror value="{{ $modelPlugin64->plugin64Name }}" placeholder="plugin64.apk" class="form-control" required>
                                    @error('plugin64Name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Plugin64 Version*</label>
                                <input type="text" name="plugin64Version" id="plugin64Version" @error('plugin64Version') is-invalid @enderror value="{{ $modelPlugin64->plugin64Version }}" placeholder="2.5.66" class="form-control" required>
                                    @error('plugin64Version')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Plugin64 APK*</label>
                                <input type="file" name="plugin64Url" id="plugin64Url" @error('plugin64Url') is-invalid @enderror value="{{ $modelPlugin64->plugin64Url }}" placeholder="2.5.66" class="form-control">
                                    @error('plugin64Url')
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

    @php
          $currentPageName = 'Admin/Push-Plugin32-Update/Push-Update';
          $namePage = "Push Update";
      @endphp

@endsection()
