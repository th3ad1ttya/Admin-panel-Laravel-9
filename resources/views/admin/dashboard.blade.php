@extends('layouts.admin')

@section('content')


<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold">Loader</a>
                    <h5 class="font-weight-bolder text-xs mb-0">
                        @forelse ($manageLoader as $loader)
                                    {{ $loader->loaderVersion }}
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-solid fa-vr-cardboard"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold">Plugin32</a>
                    <h5 class="font-weight-bolder text-xs mb-0">
                        @forelse ($manage32Plugin as $plugin32)
                                    {{ $plugin32->pluginVersion }}
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-solid fa-plug"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold">Plugin64</a>
                    <h5 class="font-weight-bolder text-xs mb-0">
                        @forelse ($manage64Plugin as $plugin64)
                                    {{ $plugin64->plugin64Version }}
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-solid fa-plug"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->



          <div class="col-lg-3 col-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold">Lib-32bit-ARMV7a</a>
                    <h5 class="font-weight-bolder text-xs mb-0">
                        @forelse ($manage64Plugin as $plugin64)
                                    {{ $plugin64->plugin64Version }}
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-solid fa-plug"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold">Lib-32bit-ARMV8a</a>
                    <h5 class="font-weight-bolder text-xs mb-0">
                        @forelse ($manage64Plugin as $plugin64)
                                    {{ $plugin64->plugin64Version }}
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-solid fa-plug"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->



          <div class="col-lg-3 col-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold">Lib-64bit-ARMV7a</a>
                    <h5 class="font-weight-bolder text-xs mb-0">
                        @forelse ($manage64Plugin as $plugin64)
                                    {{ $plugin64->plugin64Version }}
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-solid fa-plug"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->



          <div class="col-lg-3 col-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <a class="text-sm mb-0 text-capitalize font-weight-bold">Lib-64bit-ARMV8a</a>
                    <h5 class="font-weight-bolder text-xs mb-0">
                        @forelse ($manage64Plugin as $plugin64)
                                    {{ $plugin64->plugin64Version }}
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-solid fa-plug"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->



        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

     @php
          $currentPageName = 'Admin/Dashboard';
          $namePage = "Dashboard";
      @endphp

@endsection
