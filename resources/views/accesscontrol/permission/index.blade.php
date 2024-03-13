@extends('layouts.master')
@section('breadcrumbs')
    <ul class="navbar-nav mr-lg-2">
        <li class="nav-item ml-0">
            <h4 class="mb-0">PERMISSIONS</h4>
        </li>
        <li class="nav-item">
            <div class="d-flex align-items-baseline">
                <p class="mb-0">KCCF SMS</p>
                <i class="typcn typcn-chevron-right"></i>
                <p class="mb-0">Permissions</p>
            </div>
        </li>
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form method="get" class="forms-sample m-0 p-0" action="{{ route('permission.index') }}">
                                <input type="text" value="{{ $searchTerm }}"  class="form-control" name="search" placeholder="Search....">
                            </form>
                        </div>
                        <div class="col">
                            <div class="float-right">
                                <a type="button" class="btn btn-success" href="{{ route('permission.create') }}">Add Permission</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-striped project-orders-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Permission</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $num = 1; @endphp
                                @foreach ($items as $item)
                                    <tr id="row{{ $item->id }}">
                                        <td>{{ $num }}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>
                                            <a href="{{ route('permission.edit', ['permission' => $item->id]) }}">
                                                <button class="btn btn-sm btn-success"><i class="typcn typcn-pencil"></i></button>
                                            </a>
                                            <button class="btn btn-sm btn-danger btndelete" data-url="{{ route('permission.destroy', ['permission' => $item->id]) }}" data-id="{{ $item->id }}">
                                                <i class="typcn typcn-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @php $num++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                        {{ $items->links() }} <!-- Pagination links -->
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('css')
@endsection
@section('script')
    @if(session('function'))
        @if(session('function') == 'store')
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Permission successfully Added",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @else
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Permission successfully Updated",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif

        <?php session()->forget('function'); ?>
    @endif
@endsection
