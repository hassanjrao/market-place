@extends('layouts.backend')

@section('page-title', 'Dasboard')

@section('content')

    <div class="content">
        <div class="row row-deck">

            <div class="col-sm-3 col-xxl-3 col-md-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">

                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">{{ $users }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">users </dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="nav-main-link-icon fa fa-users"></i>

                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">

                        <div
                            class="block-content block-content-full block-content-sm  d-flex align-items-center justify-content-between">

                            <a href="{{ route('admin.users.index') }}">
                                <span>View users</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>



                        </div>


                    </div>

                </div>

            </div>


            <div class="col-sm-3 col-xxl-3 col-md-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">

                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">{{ $products }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Products </dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="nav-main-link-icon fa fa-tags"></i>

                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">

                        <div
                            class="block-content block-content-full block-content-sm  d-flex align-items-center justify-content-between">

                            <a href="{{ route('admin.products.index') }}">
                                <span>View products</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>



                        </div>


                    </div>

                </div>

            </div>


            <div class="col-sm-3 col-xxl-3 col-md-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">

                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">{{ $categories }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Categories </dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="nav-main-link-icon fa fa-list"></i>

                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">

                        <div
                            class="block-content block-content-full block-content-sm  d-flex align-items-center justify-content-between">

                            <a href="{{ route('admin.categories.index') }}">
                                <span>View categories</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>



                        </div>


                    </div>

                </div>

            </div>


            <div class="col-sm-3 col-xxl-3 col-md-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">

                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">{{ $orders }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Orders </dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="nav-main-link-icon fa fa-shopping-cart"></i>

                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">

                        <div
                            class="block-content block-content-full block-content-sm  d-flex align-items-center justify-content-between">

                            <a href="{{ route('admin.orders.index') }}">
                                <span>View orders</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>



                        </div>


                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
