@if (session()->has('message'))
    <div class="container mb-4">
        <div class="alert alert-success glass-card">
            {{ session('message') }}
        </div>
    </div>
@endif