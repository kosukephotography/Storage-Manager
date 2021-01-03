@if (session('information'))
    <ul class="alert alert-success" role="alert">
        <li class="ml-4">{{ session('information') }}</li>
    </ul>
@endif