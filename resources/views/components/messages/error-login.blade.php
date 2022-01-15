@if (session()->has('error'))
<div class="row justify-content-center g-0">
    <div class="col-md-3 g-0">
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    </div>
</div>
@endif