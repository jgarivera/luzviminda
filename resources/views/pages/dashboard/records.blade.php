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
                <td>Steven Da-Anton</td>
                <td>Edinburgh</td>
                <td>G-Cash</td>
                <td>100.00</td>
                <td>In Progress</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>2</td>
                <td>Demeter Caubang</td>
                <td>Edukasyon 101</td>
                <td>Paymaya</td>
                <td>500.00</td>
                <td>In Progress</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>3</td>
                <td>Yuca Beltran</td>
                <td>Kalinisan Drive</td>
                <td>Mastercard</td>
                <td>3500.00</td>
                <td>Completed</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>4</td>
                <td>Aldwin Vergara</td>
                <td>Faithful Youth</td>
                <td>GCash</td>
                <td>500.00</td>
                <td>Completed</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>5</td>
                <td>Jose Rivera</td>
                <td>Tech Solution 101</td>
                <td>VISA</td>
                <td>30000.00</td>
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