@extends('layouts.master-dashboard')

@section('head')
    <title>Records Manager</title>
    <link rel="icon" href="{{ asset('images/Luz-Logo_2.png') }}" type="image/icon type">

    <!-- DataTables CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/r-2.2.7/datatables.min.js"></script>

    <script src="{{ asset('js/tables.js') }}" defer></script>
@endsection

@section('body')
<div class="uk-border-rounded uk-text-center" uk-grid style="border-top: 25px solid  #f8b20c">
    <div class="uk-width-1-6 uk-visible@m">
        <div class="uk-card uk-card-default uk-card-body uk-height-1-1" style="padding-left: 0px; padding-right: 0px;">
            <!-- dd history -->
            <div style="width: 100%; height: 45px; border-top: 1px solid lightgray; background-color: #fcfcfc;
             border-bottom: 1px solid lightgray">
                <div style="padding: 10px 5px 10px 5px">
                    <a href=""><span uk-icon="icon: mail"></span> All</a> <span class="uk-label uk-label-danger uk-border-pill" style="padding-left: 5px; padding-right: 5px;">76</span><br>
                </div>
            </div>
            <div style="width: 100%; height: auto; border-bottom: 1px solid lightgray; background-color: #fcfcfc">
                <div style="padding: 10px 5px 10px 5px">
                    <a href="">Rizal Relief Operation Drive</a> <span class="uk-label uk-label-success uk-border-pill" style="padding-left: 5px; padding-right: 5px;">22</span><br>
                </div>
            </div>
            <div style="width: 100%; height: auto; border-bottom: 1px solid lightgray; background-color: #fcfcfc">
                <div style="padding: 10px 5px 10px 5px">
                    <a href="">Cagayan de Oro Donation Drive</a> <span class="uk-label uk-label-success uk-border-pill" style="padding-left: 5px; padding-right: 5px;">120</span><br>
                </div>
            </div>
            <div style="width: 100%; height: auto; border-bottom: 1px solid lightgray; background-color: #fcfcfc">
                <div style="padding: 10px 5px 10px 5px">
                    <a href="">Meal donation for the Frontliners in Cebu</a> <span class="uk-label uk-label-success uk-border-pill" style="padding-left: 5px; padding-right: 5px;">25</span><br>
                </div>
            </div>

            <!-- create new dd -->
            <button class="uk-button uk-button-primary uk-border-pill uk-text-capitalize" style="padding: 0px 10px 0px 10px;margin-top: 25px"><span uk-icon="icon: plus; ratio: 0.7"></span> Add Donation Drive</button>
        </div>
    </div>
    <div class="uk-width-expand@m " style="background-color: white; padding: 50px 50px 50px 50px;">
        <div class="uk-child-width-expand-" uk-grid>
            <div class="uk-grid-item-match uk-width-1-2">
                <div class="uk-container" style="border: 1px solid black; padding: 50px 50px 50px 50px">
                    <h2>All donation drive funds</h2>
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
                            <tr>
                                <td>2</td>
                                <td>Demeter Caubang</td>
                                <td>Edukasyon 101</td>
                                <td>Paymaya</td>
                                <td>5000.00</td>
                                <td>In Progress</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Yuca Beltran</td>
                                <td>Kalinisan Drive</td>
                                <td>Mastercard</td>
                                <td>35000.00</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Aldwin Vergara</td>
                                <td>Faithful Youth</td>
                                <td>GCash</td>
                                <td>5000.00</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Jose Rivera</td>
                                <td>Tech Solution 101</td>
                                <td>VISA</td>
                                <td>30000.00</td>
                                <td>In Progress</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Harold Hermoza</td>
                                <td>Edukasyon 101</td>
                                <td>Cash</td>
                                <td>5000.00</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Jasffer Padigdig</td>
                                <td>Faithful Youth</td>
                                <td>GCash</td>
                                <td>30000.00</td>
                                <td>In Progress</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Jed Tinio</td>
                                <td>Kabataan Sportsfest</td>
                                <td>Cash</td>
                                <td>5000.00</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Clifford Austria</td>
                                <td>Kabataan Sportsfest</td>
                                <td>Cash</td>
                                <td>20000.00</td>
                                <td>Completed</td>
                            </tr>
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
                </div>
            </div>
            <div class="uk-grid-item-match uk-width-1-2">
                <div class="uk-card uk-card-default uk-card-body uk-margin">
                    <h3>Heading</h3>
                    <div class="uk-container" style="border: 1px solid black;">
                        <table id="focuses" class="display" style="width:100%">
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
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-card-body uk-margin">
                    <h3>Heading</h3>
                    <div class="uk-container uk-margin">
                        <!-- graph here-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection