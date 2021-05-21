<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Pricing example · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<!--<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Features</a>
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Nuevo Estacionamiento</h1>
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="data:image/png;base64,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" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    
  </body>
</html>
