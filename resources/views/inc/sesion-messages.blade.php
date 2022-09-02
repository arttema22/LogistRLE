@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Отлично!</strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Внимание!</strong> {{ session('danger') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Внимание!</strong> {{ session('warning') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
