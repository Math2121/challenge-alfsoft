@if ($message = Session::get('success'))
    <div class="container">
        <div class="alert alert-success w-100">

            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="container">
        <div class="alert alert-danger w-100">

            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif




@if ($message = Session::get('message'))
    <div class="container">
        <div class="alert alert-warning w-100">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif
