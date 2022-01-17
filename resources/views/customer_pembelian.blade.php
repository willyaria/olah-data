@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <!-- {{ __('You are logged in!') }} -->
                    <h2>List 10 Customer Paling Banyak Pembelian</h2>
                    <div class="container">
                        <br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no=1;
                                    foreach ($customer_pembelian as $dt1) {                                   
                                    
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dt1->quantity ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection