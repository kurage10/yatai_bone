@extends('layouts.master')

@section('title')
ダッシュボード
@endsection
@section('contents')
<br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <strong>サマリ</strong>
        </div>
        <div class="card-block">
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
              <td>{{$all_sum}}</td>
            </tr>

            <tr>
              <td>残額</td>
              <td>100</td>
            </tr>
          </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-header">
          <strong>計算</strong>
        </div>

        <div class="card-block">
            {!! Form::open() !!}
            @foreach($foods_list as $food)
            <div class="input-group">
              <span class="input-group-addon">{{$food['name']}}</span>
              <input type="number" class="form-control" name={{$food['name_id']}}>
              <span class="input-group-addon">個</span>
            </div>
            @endforeach
            <br>
            {!! Form::submit('送信', ['class' => 'btn btn-primary form-control']) !!}
            {!! Form::close() !!}

        </div>
      </div>
    </div>
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <strong>統計</strong>
          </div>
          <div class="card-block">
            <ul class="nav nav-tabs" role="tablist">
              <li class=nav-item>
                <a href="#tab1" class="nav-link", data-toggle="tab" role="tab">時間ごと</a>
              </li>
              <li class=nav-item>
                <a href="#tab2" class="nav-link", data-toggle="tab" role="tab">累計</a>
              </li>
            </ul>

            <div class="tab-content">
              <div id="tab1" class="tab-pane active" role="tabpanel">
                時間ごとの売り上げをグラフ化
              </div>
              <div id="tab2" class="tab-pane" role="tabpanel">
                累計をグラフ化。目標に対する伸び方を分析
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>
@endsection
