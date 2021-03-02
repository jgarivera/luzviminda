@extends('layouts.master-dashboard')

@section('head')
    <title>Records Manager</title>

    <!-- DataTables CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/r-2.2.7/datatables.min.js"></script>

    <script src="{{ asset('js/tables.js') }}" defer></script>
@endsection

@section('body')
    <table id="donations" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Donor</th>
                <th>Drive</th>
                <th>Payment Type</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Honda</td>
                <td>Edinburgh</td>
                <td>G-Cash</td>
                <td>100.00</td>
                <td>In Progress</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Donor</th>
                <th>Drive</th>
                <th>Payment Type</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
@endsection