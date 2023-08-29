@extends('layouts.front')

@section('page-title', 'Orders')

@section('content')

    <!-- Start user Dash Navigation Menu -->
    <x-profile.header />
    <!-- End user Dash Navigation Menu -->
    <!-- Start Dashboard Area -->
    <section class="dashboard-area section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12  order-lg-first order-last">

                    <div class="table-responsive">

                        <table class="table table-bordered tabled-hovered">

                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Status</th>
                                    <th>Total Products</th>
                                    <th>Total Price</th>
                                    <th>Customer</th>
                                    <th>Action</th>
                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_id }}</td>
                                        <td>{{ $order->status_name }}</td>
                                        <td>{{ $order->orderItems->count() }}</td>
                                        <td>{{ config('app.currency') }} {{ $order->total_price }}</td>
                                        <td>{{ $order->user->name }}</td>

                                        <td>
                                            {{-- input group --}}

                                            <div class="input-group">

                                                <a href="{{ route("orders.details",$order->id) }}"
                                                class="btn btn-primary btn-sm">View</a>
                                            {{-- update status --}}

                                            <form action="{{ route("orders.update-status") }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                <select onchange="this.form.submit()" name="status" class="form-select ml-2">
                                                    @foreach ($statuses as $statusCode=> $status)

                                                        <option value="{{ $statusCode }}" {{ $statusCode == $order->status ? 'selected' : '' }}>{{ $status }}</option>

                                                    @endforeach
                                                </select>

                                            </form>
                                           {{-- <select onchange="updateStatus(this)" id="updateStaus" class="form-select ml-2">
                                                  @foreach ($statuses as $statusCode=> $status)

                                                    <option value="{{ $statusCode }}" {{ $statusCode == $order->status ? 'selected' : '' }}>{{ $status }}</option>

                                                  @endforeach
                                           </select> --}}


                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Dashboard Area -->

@endsection

@section("js-after")

<script>

</script>

@endsection
