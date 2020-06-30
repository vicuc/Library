<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class ChartController extends Controller
{
    public function chart()
    {
        $chart_options = [
            'chart_title' => 'Người tham gia',
            'report_type' => 'group_by_date',
            'model' => 'App\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'pie',
        ];
    
        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Sách được đăng lên',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Sach',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
        ];
    
        $chart3 = new LaravelChart($chart_options);

    	return view('backend.chart',['chart1' => $chart1, 'chart3' => $chart3]);
    }
}
