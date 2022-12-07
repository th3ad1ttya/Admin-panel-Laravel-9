@extends('layouts.admin')

@section('content')

<div>
    <livewire:admin.safety.safety-status>
</div>

     @php
          $currentPageName = 'Admin/Safety-Status';
          $namePage = "Safety-Status";
      @endphp

@endsection
