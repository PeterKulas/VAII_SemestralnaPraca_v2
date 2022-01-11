@if (session()->has('success'))
<div class="row justify-content-center g-0">
    <div class="col-md-3 g-0">
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    </div>
</div>
@endif