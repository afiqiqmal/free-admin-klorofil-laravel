@extends('index')

@section('title')
    Charts
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <h3 class="page-title">Charts</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Line Chart</h3>
                </div>
                <div class="panel-body">
                    <div id="demo-line-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Bar Chart</h3>
                </div>
                <div class="panel-body">
                    <div id="demo-bar-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Area Chart</h3>
                </div>
                <div class="panel-body">
                    <div id="demo-area-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Multiple Chart</h3>
                </div>
                <div class="panel-body">
                    <div id="visits-trends-chart" class="ct-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('extra-script')

@endsection