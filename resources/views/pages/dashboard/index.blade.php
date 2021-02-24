@extends('layouts.master-dashboard')

@section('head')
    <title>Dashboard</title>

    <!-- Load scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" defer></script>
    <script src="{{ asset('js/charts.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/dashboard/home.css') }}">
@endsection

@section('body')

    <!-- Statistics -->
    <div class="statistics">
        <h2>Statistics</h2>
        <div class="row">
            <div class="column">
                <div class="chart-container">
                    <canvas id="donationChart"></canvas>
                </div>
            </div>

            <div class="column">
                <div class="chart-container">
                    <canvas id="affectedPeopleChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection