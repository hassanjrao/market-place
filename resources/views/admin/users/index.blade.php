@extends('layouts.backend')
@section('page-title', 'Users')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Users
                </h3>



                {{-- <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add</a> --}}

            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                {{-- <th>Action</th> --}}

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($users as $ind => $user)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $user->name }}</td>


                                    <td>
                                        {{ $user->email }}
                                    </td>


                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>

                                    {{-- <td>
                                        <div class="btn-group" role="group" aria-label="Horizontal Primary">

                                            @if($user->is_blocked)
                                            <a href="{{ route('admin.users.unblock', $user->id) }}"
                                                class="btn btn-sm btn-alt-success">Unblock</a>
                                            @else
                                            <a href="{{ route('admin.users.block', $user->id) }}"
                                                class="btn btn-sm btn-alt-warning">Block</a>
                                            @endif
                                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                                class="btn btn-sm btn-alt-primary">Edit</a>
                                            <form id="form-{{ $user->id }}"
                                                action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="button" onclick="confirmDelete({{ $user->id }})"
                                                    class="btn btn-sm btn-alt-danger" value="Delete">

                                            </form>
                                        </div>
                                    </td> --}}

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
