@extends('layouts.admin_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

@php
    
    $currentDAY = date('d');
     $post= App\post::count();
     $sector= App\Category::count();
     $type= App\Subcategory::count();
    $tpost = App\post::whereRaw('DAY(created_at) = ?',[$currentDAY])->count();
    $currentMonth = date('m');
    $mpost =  App\post::whereRaw('MONTH(created_at) = ?',[$currentMonth])->count();
    $currentYear = date('Y');
    $ypost = App\post::whereRaw('YEAR(created_at) = ?',[$currentYear])->count();
    $ppost= App\post::where('status',1)->count();
    $dpost= App\post::where('status',0)->count();
    $bpost= App\post::whereRaw('DAY(created_at) = ?',[$currentDAY])->where('breaking',1)->count();
    
@endphp

                <div class="card-body">
                   
                    <div class="card-deck">
                        <div class="card text-white bg-primary">
                          
                          <div class="card-body">
                            <h5 class="card-title">Total Loan: {{$post}}</h5>
                          </div>
                          
                        </div>
                        <div class="card text-white bg-success">
                          
                          <div class="card-body">
                            <h5 class="card-title">Prosesing Loan: {{$sector}}</h5>
                          </div>
                          
                        </div>
                        <div class="card text-white bg-danger">
                          
                          <div class="card-body">
                            <h5 class="card-title">Loan Compelete:{{$type}}</h5>
                          </div>
                          
                        </div>
                      </div>
                </div>

                <div class="card-body">
                   
                    <div class="card-deck">
                        <div class="card text-white bg-warning">
                          
                          <div class="card-body">
                            <h5 class="card-title">Total Bank: {{$tpost}}</h5>
                          </div>
                          
                        </div>
                        <div class="card text-white bg-info">
                          
                          <div class="card-body">
                            <h5 class="card-title">Total User: {{$mpost}}</h5>
                          </div>
                          
                        </div>
                        <div class="card text-white bg-dark">
                          
                          <div class="card-body">
                            <h5 class="card-title">Loan Apply: {{$ypost}}</h5>
                          </div>
                          
                        </div>
                      </div>
                </div>

              
            </div>
        </div>
    </div>
</div>
@endsection
