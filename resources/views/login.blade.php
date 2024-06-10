<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        /* CSS tambahan untuk memastikan form berada di tengah */
        .full-height {
            height: 100vh;
        }
        .login {
            text-align: center;
            margin-bottom: 20px;
        }
        body {
            background: rgb(254,226,255);
            background: linear-gradient(90deg, rgba(254,226,255,1) 0%, rgba(253,247,254,1) 43%, rgba(245,254,255,1) 76%);
        }
        .card {
            filter: drop-shadow(1px 1px 8px #000000);
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center full-height">
        <div class="card bg-light" style="width: 22rem; padding: 20px;">




            <form action="{{ route('actionlogin') }}" method="POST">
                @csrf
                <div class="login">
                    <h2>Login</h2>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" class="form-control" required />
                    <label class="form-label" for="username">Username</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" required />
                    <label class="form-label" for="password">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>belum punya akun? <a href="/register">daftar</a></p>
                </div>




                
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- Font Awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>

