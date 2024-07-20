<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conflix Indo | Login Page</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <main>
        <div class="container-fluid py-5 text-center">
            <div class="col-md-3 mx-auto">
                <form action="{{ route('login.auth') }}" method="POST">
                    @csrf
                    <a href="{{ route('now-playing') }}"><img class="mb-4"
                            src="{{ asset('assets/images/favicon.png') }}" alt=""></a>
                    <h1 class="h3 mb-3 fw-bold">Masuk Sekarang</h1>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        <label for="email">Email address</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="passeord" placeholder="Password" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                        <label for="passeord">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mb-4" type="submit">Sign in</button>
                    <span class="mt-5 mb-3 text-muted text-primary">Don't have an account? </span><a
                        href="{{ route('register') }}" class="text-primary">Create account</a>
                </form>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Custom scripts -->
    <script></script>
</body>

</html>
