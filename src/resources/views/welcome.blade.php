<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>welcome</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .navbar {
                box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
            }
            @media (min-width: 767.98px) {
                .navbar {
                    top: 0;
                    position: sticky;
                    z-index: 999;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Navbar</a>
              <div>
                <a class="mx-3" href="#">Simple Dashboard</a>
                <a class="mx-3" href="#">Simple Dashboard</a>
              </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <main class="col-md-9 mx-auto col-lg-10 px-md-4 py-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Overview</li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="pt-1">
                                        Latest transactions
                                    </h5>
                                    <div class="justify-content-between align-items-center">
                                        <!-- Search button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#search">
                                            検索
                                        </button>
                                        <!-- Search modal -->
                                        <div class="modal fade" id="search" tabindex="-1" aria-labelledby="searchLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="searchLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                        <div class="modal-body">
                                                        ...
                                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-success">
                                            <a href="#" style="color: inherit; text-decoration: inherit;">
                                                新規作成
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                              <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Date</th>
                                                <th scope="col"></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">17371705</th>
                                                <td>Volt Premium Bootstrap 5 Dashboard</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>€61.11</td>
                                                <td>Aug 31 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">17370540</th>
                                                <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                                <td>jacob.monroe@company.com</td>
                                                <td>$153.11</td>
                                                <td>Aug 28 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">17371705</th>
                                                <td>Volt Premium Bootstrap 5 Dashboard</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>€61.11</td>
                                                <td>Aug 31 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">17370540</th>
                                                <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                                <td>jacob.monroe@company.com</td>
                                                <td>$153.11</td>
                                                <td>Aug 28 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                              </tr>
                                              <tr>
                                                <th scope="row">17371705</th>
                                                <td>Volt Premium Bootstrap 5 Dashboard</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>€61.11</td>
                                                <td>Aug 31 2020</td>
                                                <td>
                                                    <div class="mb-2">
                                                        <a href="#" class="btn btn-sm btn-primary">View</a>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="btn btn-sm btn-primary">View</a>
                                                    </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">17370540</th>
                                                <td>Pixel Pro Premium Bootstrap UI Kit</td>
                                                <td>jacob.monroe@company.com</td>
                                                <td>$153.11</td>
                                                <td>Aug 28 2020</td>
                                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
