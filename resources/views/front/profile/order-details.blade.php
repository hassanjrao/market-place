@extends('layouts.front')

@section('page-title', 'Orders')

@section('content')

    <!-- Start user Dash Navigation Menu -->
    <x-profile.header />

    <section class="dashboard-area section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12  order-lg-first order-last">

                    <table class="table table-bordered tabled-hovered">

                        <thead>
                            <tr>
                                <th>Order ID</th>

                                <th>Customer</th>
                                <th>Product</th>
                                <th>Quantity</th>

                                <th>Product Price</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($order->orderItems as $item)
                                <tr>
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


    </section>


@endsection
