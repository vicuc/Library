@extends('backend.master')
@section('title','Thống kê')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sách</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Thống kê</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card-title">{{ $chart3->options['chart_title'] }}</div>
                                    <div>
                                        {!! $chart3->renderHtml() !!}
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="card-title">{{ $chart1->options['chart_title'] }}</div>
                                    <div>
                                        {!! $chart1->renderHtml() !!}
                                    </div>

                                </div>



                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $chart1->renderChartJsLibrary() !!}
    {!! $chart1->renderJs() !!}
    {{--  --}}
    {!! $chart3->renderChartJsLibrary() !!}
    {!! $chart3->renderJs() !!}
    @endsection
