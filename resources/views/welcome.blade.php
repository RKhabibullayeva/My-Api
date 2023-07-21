<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/7971/7971967.png">

    <title>Laptop API</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body class="antialiased">
    <div class="container-fluid float-left">
        <div class="blur m-5">
            <div class="text-white">
                <h2 class="title mt-5 fs-1">Laptops Api</h2>
            </div>
            <a href="{{url('/api/noutes')}}" class="btn btn-outline-light mt-2">Enter api</a>

            <div class="info text-light mt-5">
                <table>
                    <tr>
                        <td class="d-flex bc-blue">
                            <div class="methods bc-blue bg-primary text-white">GET</div>
                            <div class="route">/noutes</div>
                            <small>All Laptops</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex bc-green">
                            <div class="methods bg-success text-white">POST</div>
                            <div class="route">/noutes</div>
                            <small>Create a new laptop</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex bc-blue">
                            <div class="methods bg-primary text-white">GET</div>
                            <div class="route">/noutes/{id}</div>
                            <small>Show a laptop</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex bc-green">
                            <div class="methods bg-success text-white">POST</div>
                            <div class="route">/noutes/{id}</div>
                            <small>Update a laptop</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex bc-red">
                            <div class="methods bg-danger text-white">DELETE</div>
                            <div class="route">/noutes/{id}</div>
                            <small>Delete a laptop</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex bc-blue">
                            <div class="methods bg-primary text-white">GET</div>
                            <div class="route">/noutes?page={Page Number}</div>
                            <small>Show next page</small>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
