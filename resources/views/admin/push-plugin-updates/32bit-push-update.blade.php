@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card-header">
                    <h3>Push new plugin update</h3>
                    <a href="" class="btn bg-gradient-dark btn-sm float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/push-plugin-update/'.$modelPlugin32->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Plugin Name*</label>
                                <input type="text" name="pluginName" id="pluginName" @error('pluginName') is-invalid @enderror value="{{ $modelPlugin32->pluginName }}" placeholder="Plugin.apk" class="form-control" required>
                                    @error('pluginName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Plugin Version*</label>
                                <input type="text" name="pluginVersion" id="pluginVersion" @error('pluginVersion') is-invalid @enderror value="{{ $modelPlugin32->pluginVersion }}" placeholder="2.5.66" class="form-control" required>
                                    @error('pluginVersion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Plugin APK*</label>
                                <input type="file" name="pluginUrl" id="pluginUrl" @error('pluginUrl') is-invalid @enderror value="{{ $modelPlugin32->pluginUrl }}" placeholder="2.5.66" class="form-control" required>
                                    @error('pluginUrl')
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
