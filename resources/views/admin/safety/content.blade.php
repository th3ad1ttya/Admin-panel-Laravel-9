<div class="container-fluid py-1">
    <div class="row">
        <div class="com-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Edit Safety status
                        <a href="{{ url('admin/safety-status') }}" class="btn btn-dark btn-sm float-end">Go back</a>
                    </h5>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        <a href="" style="color: white">
                        {{ session('error') }}
                    </a>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ url('admin/safety-status/'.$statusModel->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                @php
                                if ($statusModel->is32Bit == 1) {
                                    $is32Bit = 'Unsafe';
                                    $text32 = 'text-danger';
                                } else {
                                    $is32Bit = 'Safe';
                                    $text32 = 'text-success';
                                }

                                if ($statusModel->is64Bit == 1) {
                                    $is64Bit = 'Unsafe';
                                    $text64 = 'text-danger';
                                } else {
                                    $is64Bit = 'Safe';
                                    $text64 = 'text-success';
                                }
                            @endphp

                                <label for="">Status-32Bit</label>
                                <h6>Current status: <span class="{{ $text32 }}"> {{ $is32Bit }} </span></h6>
                                <select name="is32Bit" id="is32Bit">
                        		<option value="0">Safe</option>
                        		<option value="1">Unsafe</option>
                        	</select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status-64Bit</label>
                                <h6>Current status: <span class="{{ $text64 }}"> {{ $is64Bit }} </span></h6>
                                <select name="is64Bit" id="is64Bit">
                        		<option value="0">Safe</option>
                        		<option value="1">Unsafe</option>
                        	</select>
                            </div>
                        </div>
                        <button class="btn btn-success btn-sm float-end" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
