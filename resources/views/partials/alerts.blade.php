@if (session('registred'))
    <div class="alert alert-success">
        عملیات با موفقیت انجام شد.
    </div>
@endif

@if (session('failed'))
    <div class="alert alert-danger">
        عملیات با شکست انجام شد.
    </div>
@endif

