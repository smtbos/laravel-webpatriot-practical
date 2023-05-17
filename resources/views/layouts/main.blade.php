<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Category & Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    @stack('styles')
</head>

<body class="pb-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">
                WP
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('main')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ ucfirst($error) }}");
                @endforeach
            @endif
            @if (session('success'))
                toastr.success("{{ ucfirst(session('success')) }}");
            @endif
        });
    </script>
    @stack('scripts')
</body>

</html>
