
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel  Newsletter Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  </head>
  <body>
    <div class="container">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif
      <h2 class="mb-2 mt-2">Laravel Newsletter Tutorial With Example</h2>
      <form method="post" action="{{url('newsletter/store')}}">
        @csrf
        </div>
        <div class="row">
          <div class="col-md-8"></div>
            <div class="form-group col-md-2">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>