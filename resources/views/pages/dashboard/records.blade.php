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
                <td>1000.00</td>
                <td>In Progress</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>2</td>
                <td>Demeter Caubang</td>
                <td>Edukasyon 101</td>
                <td>Paymaya</td>
                <td>5000.00</td>
                <td>In Progress</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>3</td>
                <td>Yuca Beltran</td>
                <td>Kalinisan Drive</td>
                <td>Mastercard</td>
                <td>35000.00</td>
                <td>Completed</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>4</td>
                <td>Aldwin Vergara</td>
                <td>Faithful Youth</td>
                <td>GCash</td>
                <td>5000.00</td>
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
        <tbody>
            <tr>
                <td>6</td>
                <td>Harold Hermoza</td>
                <td>Edukasyon 101</td>
                <td>Cash</td>
                <td>5000.00</td>
                <td>Completed</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>7</td>
                <td>Jasffer Padigdig</td>
                <td>Faithful Youth</td>
                <td>GCash</td>
                <td>30000.00</td>
                <td>In Progress</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>8</td>
                <td>Jed Tinio</td>
                <td>Kabataan Sportsfest</td>
                <td>Cash</td>
                <td>5000.00</td>
                <td>Completed</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>9</td>
                <td>Clifford Austria</td>
                <td>Kabataan Sportsfest</td>
                <td>Cash</td>
                <td>20000.00</td>
                <td>Completed</td>
            </tr>
        </tbody>
        
        <tbody>
            <tr>
                <td>10</td>
                <td>Khrystelle Harion</td>
                <td>Women Empowerment</td>
                <td>VISA</td>
                <td>5000.00</td>
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