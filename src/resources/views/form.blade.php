<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>form</title>
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
                                <h5 class="card-header">Latest transactions</h5>
                                <div class="card-body">
                                    <div class="row g-5">

                                        <div class="col-md-5 col-lg-4">
                                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-primary">Your cart</span>
                                                <span class="badge bg-primary rounded-pill">3</span>
                                            </h4>
                                            <form class="card p-2 my-4">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Default file input example</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </form>
                                            <ul class="list-group mb-3">
                                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                                    <div>
                                                    <h6 class="my-0">Product name</h6>
                                                    <small class="text-body-secondary">Brief description</small>
                                                    </div>
                                                    <span class="text-body-secondary">$12</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                                    <div>
                                                    <h6 class="my-0">Second product</h6>
                                                    <small class="text-body-secondary">Brief description</small>
                                                    </div>
                                                    <span class="text-body-secondary">$8</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                                    <div>
                                                    <h6 class="my-0">Third item</h6>
                                                    <small class="text-body-secondary">Brief description</small>
                                                    </div>
                                                    <span class="text-body-secondary">$5</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                                                    <div class="text-success">
                                                    <h6 class="my-0">Promo code</h6>
                                                    <small>EXAMPLECODE</small>
                                                    </div>
                                                    <span class="text-success">−$5</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                    <span>Total (USD)</span>
                                                    <strong>$20</strong>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-7 col-lg-8">
                                            <h4 class="mb-3">Billing address</h4>
                                            <form class="needs-validation" novalidate="">
                                                <div class="row g-3">
                                                    <fieldset class="col-sm-6">
                                                        <label for="firstName" class="form-label">First name</label>
                                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Valid first name is required.
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-sm-6">
                                                        <label for="lastName" class="form-label">Last name</label>
                                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                                        <div class="invalid-feedback">
                                                            Valid last name is required.
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-12">
                                                        <label for="username" class="form-label">Username</label>
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text">@</span>
                                                            <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                                            <div class="invalid-feedback">
                                                                Your username is required.
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-12">
                                                        <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                                                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                                        <div class="invalid-feedback">
                                                            Please enter a valid email address for shipping updates.
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-12">
                                                        <label for="address" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter your shipping address.
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-12">
                                                        <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
                                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                    </fieldset>
                                                    <fieldset class="col-md-5">
                                                        <label for="country" class="form-label">Country</label>
                                                        <select class="form-select" id="country" required="">
                                                            <option value="">Choose...</option>
                                                            <option>United States</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid country.
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-4">
                                                        <label for="state" class="form-label">State</label>
                                                        <select class="form-select" id="state" required="">
                                                            <option value="">Choose...</option>
                                                            <option>California</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-3">
                                                        <label for="zip" class="form-label">Zip</label>
                                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Zip code required.
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <hr class="my-4">
                                                <fieldset>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="same-address">
                                                        <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="save-info">
                                                        <label class="form-check-label" for="save-info">Save this information for next time</label>
                                                    </div>
                                                </fieldset>
                                                <hr class="my-4">
                                                <h4 class="mb-3">Payment</h4>
                                                <fieldset class="my-3">
                                                    <div class="form-check">
                                                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                                                        <label class="form-check-label" for="credit">Credit card</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                                                        <label class="form-check-label" for="debit">Debit card</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                                                        <label class="form-check-label" for="paypal">PayPal</label>
                                                    </div>
                                                </fieldset>
                                                <div class="row gy-3">
                                                    <fieldset class="col-md-6">
                                                        <label for="cc-name" class="form-label">Name on card</label>
                                                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                        <small class="text-body-secondary">Full name as displayed on card</small>
                                                        <div class="invalid-feedback">
                                                            Name on card is required
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-6">
                                                        <label for="cc-number" class="form-label">Credit card number</label>
                                                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Credit card number is required
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-3">
                                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Expiration date required
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="col-md-3">
                                                        <label for="cc-cvv" class="form-label">CVV</label>
                                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Security code required
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <hr class="my-4">
                                                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                                            </form>
                                        </div>

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
