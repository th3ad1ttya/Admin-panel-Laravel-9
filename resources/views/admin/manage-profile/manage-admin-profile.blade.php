@extends('layouts.admin')

@section('content')

@include('admin.manage-profile.edit')

    @php
          $currentPageName = 'Admin/Manage-Profile/'.Auth::user()->name;
          $namePage = "Update Profile";
      @endphp
@endsection
