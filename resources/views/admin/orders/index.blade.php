@extends('layouts.backend')
@section('page-title', 'Orders')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Orders
                </h3>



                {{-- <a href="{{ route('admin.orders.create') }}" class="btn btn-primary">Add</a> --}}

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
                                <th>Total Products</th>
                                <th>Status</th>
                                <th>Total Price</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($orders as $ind => $order)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>

                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->orderItems->count() }}</td>
                                    <td>{{ $order->status_name }}</td>

                                    <td>{{ $order->total_price }}</td>


                                    <td>{{ $order->created_at }}</td>
                                    <td>{{ $order->updated_at }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            <a href="{{ route('admin.orders.show', $order->id) }}"
                                                class="btn btn-sm btn-alt-primary">View</a>
                                            {{-- <form id="form-{{ $order->id }}"
                                                action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="button" onclick="confirmDelete({{ $order->id }})"
                                                    class="btn btn-sm btn-alt-danger" value="Delete">

                                            </form> --}}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

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
