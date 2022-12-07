<div>
    <div class="container-fluid py-1">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Safety Status
                        <a href="{{ url('admin/safety-status/1/edit') }}" class="btn btn-dark btn-sm float-end">Edit status</a>
                    </h4>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status-32Bit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status-64Bit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last-Update</th>
                            </tr>
                        </thead>
                        @forelse ($safetyModel as $status)
                        <tbody>
                            @php
                                if ($status->is32Bit == 1) {
                                    $is32Bit = 'Unsafe';
                                    $text32 = 'text-danger';
                                } else {
                                    $is32Bit = 'Safe';
                                    $text32 = 'text-success';
                                }

                                if ($status->is64Bit == 1) {
                                    $is64Bit = 'Unsafe';
                                    $text64 = 'text-danger';
                                } else {
                                    $is64Bit = 'Safe';
                                    $text64 = 'text-success';
                                }
                            @endphp
                            <tr>
                                <td class="align-middle">
                                    <p class="text-xs {{ $text32 }} font-weight-bold mb-0">{{ $is32Bit }}</p>
                                </td>

                                <td class="align-middle">
                                    <p class="text-xs {{ $text64 }} font-weight-bold mb-0">{{ $is64Bit }}</p>
                                </td>

                                <td class="align-middle">
                                    <p class="text-xs font-weight-bold mb-0">{{ $status->updated_at }}</p>
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
