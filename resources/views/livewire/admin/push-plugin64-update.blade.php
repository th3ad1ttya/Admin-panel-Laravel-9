<div>
    <div class="container-fluid py-4">
        <div style="padding-top: 1%">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Push 64bit Plugin
                            <a href="{{ url('admin/push-plugin64-update/1/push-64bit-plugin') }}" class="btn btn-primary btn-sm float-end">Push update</a>
                        </h3>
                    </div>
                    <div>
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Version</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Plugin-Dir</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last-Update</th>
                                    </tr>
                                </thead>
                                @forelse ($plugin64model as $plugModel)
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0">{{ $plugModel->plugin64Name }}</p>
                                            </td>

                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0">{{ $plugModel->plugin64Version }}</p>
                                            </td>

                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0">{{ $plugModel->plugin64Url }}</p>
                                            </td>

                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0">{{ $plugModel->updated_at }}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                @empty
                                <tr>
                                  <td colspan="10" align="center">
                                      <span class="text-danger text-sm font-weight-bold">No record found!</span>
                                    </td>
                                </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @php
          $currentPageName = 'Admin/Push-Plugin64-Update';
          $namePage = "Push plugin64";
      @endphp
