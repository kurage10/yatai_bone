<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Laravel</title>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">サマリ</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped">
                  <tr>
                    <td>目標値</td>
                    <td>100000</td>
                  </tr>
                  @foreach ($foods_list as $food)
                  <tr>
                    <td>売れた{{$food['name']}}</td>
                    <td>{{$food['sum']}}</td>
                  </tr>
                  @endforeach
                  <tr>
                    <td>総額</td>
                    <td>1000</td>
                  </tr>

                  <tr>
                    <td>残額</td>
                    <td>100</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">計算</h3>
              </div>

              <div class="panel-body">
                  {!! Form::open() !!}
                  @foreach($foods_list as $food)
                  <div class="input-group">
                    <span class="input-group-addon">{{$food['name']}}</span>
                    <input type="number" class="form-control" id={{$food['name_id']}}>
                    <span class="input-group-addon">個</span>
                  </div>
                  @endforeach

                  <input id="send_btn" type="submit" class="col-md-3 btn btn-primary"></botton>
                  {!! Form::close() !!}

              </div>
            </div>
          </div>
          <div class="col-md-8">

          </div>
        </div>
      </div>
    </body>
</html>
