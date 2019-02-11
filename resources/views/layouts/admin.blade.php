@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group mb-4">
                    <div class="list-group-item disabled font-weight-bold">管理</div>
                    <a class="list-group-item list-group-item-action {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                       href="{{ route('admin.dashboard') }}"><span class="oi oi-dashboard mr-1"></span> ダッシュボード</a>
                    <a class="list-group-item list-group-item-action {{ Route::is('admin.info*') ? 'active' : '' }}"
                       href="{{ route('admin.info') }}"><span class="oi oi-bullhorn mr-1"></span> お知らせ</a>
                </div>
            </div>
            <div class="tab-content col-lg-9">
                @yield('tab-content')
            </div>
        </div>
    </div>
@endsection