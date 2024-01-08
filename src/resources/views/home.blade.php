<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
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
                    <div class="card">
                        <h5 class="card-header">ホーム</h5>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">・<a href="#">An item0</a></li>
                                <li class="list-group-item">・<a href="#">An item1</a></li>
                            </ul>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
