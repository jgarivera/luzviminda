@extends('layouts.master-dashboard')

@section('head')
    <title>Landing Page</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" defer></script>
    <script src="{{ asset('js/charts.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/dashboard/charts.css') }}">
@endsection

@section('body')
    <div class="chart-container">
        <canvas id="donationChart"></canvas>
    </div>

    <div class="chart-container">
        <canvas id="affectedPeopleChart"></canvas>
    </div>
@endsection