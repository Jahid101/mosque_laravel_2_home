<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABC Mosque</title>

    <style>
        .loginBg {
            background-image: url('https://t4.ftcdn.net/jpg/02/63/48/39/360_F_263483946_oUd7VNlXB7fbDhhmVkur6ytxBgsBTaH7.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

    </style>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>


<body class="container login-bg ">
    {{-- @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif --}}

    <main class=" m-5 shadow loginBg">
        <div class="row ">
            <div class="col-md-6 col-sm-12 text-dark ">
                <div class="p-5 m-5">
                    <h1>Welcome</h1>
                    <p class="m-3">To</p>
                    <h1>ABC Mosque</h1>

                    <br />
                    <a href="{{route('home')}}">
                        <button class="btn btn-danger mt-5">Home</button>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="p-5 m-5">
                    <form action="" method="">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal"><strong>Login</strong></h1>

                        <label for="inputEmail" class="mb-2">Email</label>
                        <input type="email" name="email" id="inputEmail" class="form-control mb-3"
                            placeholder="Email address" required autofocus>

                        <label for="inputPassword" class="mb-2">Password</label>
                        <input type="password" id="inputPassword" name="password" class="form-control mb-3"
                            placeholder="Password" required>

                        <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
