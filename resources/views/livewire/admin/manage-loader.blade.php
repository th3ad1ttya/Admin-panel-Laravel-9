<div>
    <div class="container-fluid py-4">
        <div style="padding-top: 1%">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Manage Loader
                            <a href="{{ url('admin/manage-loader/1/push-loader-update') }}" class="btn btn-primary btn-sm float-end">Push Update</a>
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Package</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LoaderURl</th>
                                    </tr>
                                </thead>
                                @forelse ($manageLoader as $loaderModel)
                                <tbody>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $loaderModel->name }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $loaderModel->loaderVersion }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $loaderModel->loaderPackage }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ url('/uploads/loaders/archiver/') }}{{ $loaderModel->loaderUrl }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                                @empty

                                @endforelse

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
