<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
                <span><i class="fas fa-check"></i></span> {{session('success')}}!
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif

</div>