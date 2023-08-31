@extends('layouts.backend')
@section('page-title', 'Order Details')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Order {{ $order->order_id }} Details
                </h3>



                <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">All Order</a>

            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Id</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach ($order->orderItems as $ind=> $item)
                                <tr>
                                    <td>{{ ++$ind }}</td>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $item->product->title }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ config('app.currency') }} {{ $item->price }}</td>

                                </tr>
                            @endforeach

                        </tbody>

                        <tfoot>
                            <tr style="border-top: 1px solid black">
                                <td colspan="3" class=""><b>Total</b></td>
                                <td colspan="1" class=""><b>{{ $order->orderItems->sum('quantity') }}</b></td>
                                <td  class=""><b>{{ config('app.currency') }} {{ $order->total_price }}</b></td>
                            </tr>
                        </tfoot>


                    </table>

                </div>

            </div>

        </div>

    </div>







    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
