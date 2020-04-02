<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crud Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@deveodk/vue-toastr/dist/@deveodk/vue-toastr.min.css"></link>
    <script src="https://unpkg.com/@deveodk/vue-toastr/dist/@deveodk/vue-toastr.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Crud Application</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/list">List</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/create">Add</router-link>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top:30px">
            <router-view />
        </div>

        <!-- <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Footer</p>
        </div> -->

    </div>

</body>

</html>