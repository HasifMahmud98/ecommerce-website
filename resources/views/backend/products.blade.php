@extends('backend.shared.base')

@section('title', 'Products')

<style>
    .mdi-delete {
        color: red;
    }

    .mdi-tooltip-edit {
        color: orange;
    }

    .action-btn {
        display: flex;
    }

    .delete-button {
        border: none;
        background: #fff;
        /* padding: 0; */
    }

    .btns {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .btn-style {
        border: 0;
        margin: 0;
        background: transparent;
        padding: 0 3px;
    }

</style>

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="ecommerce-widget">
                    <div class="row">
                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Recent Orders</h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                                <tr class="border-0">
                                                    <th class="border-0">#</th>
                                                    <th class="border-0">Image</th>
                                                    <th class="border-0">Product Name</th>
                                                    <th class="border-0">Price</th>
                                                    <th class="border-0">Quantity</th>
                                                    <th class="border-0">Category</th>
                                                    <th class="border-0">Customer</th>
                                                    <th class="border-0">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $x = 1;
                                                @endphp
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <td>{{ $x++ }}</td>
                                                        <td>
                                                            <div class="m-r-10">
                                                                @if (count($item->images) > 0)
                                                                    <img src="{{ asset('images/products-image/' . $item->images[0]->image) }}"
                                                                        alt="{{ $item->title }}" class="rounded"
                                                                        width="45">
                                                                @endif

                                                            </div>
                                                        </td>
                                                        <td> {{ $item->title }} </td>
                                                        <td>৳ {{ $item->price }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>Fruits</td>
                                                        <td>Patricia </td>
                                                        <form action="{{ route('admin.product.delete.post', $item->id) }}"
                                                            method="post">
                                                            <td>
                                                                <div class="btns">

                                                                    <a
                                                                        href="{{ route('admin.product.edit', $item->id) }}"><i
                                                                            class="m-r-10 mdi mdi-tooltip-edit"></i></a>



                                                                    @csrf
                                                                    <button class="btn-style"><a
                                                                            href="#exampleModal{{ $item->id }}"
                                                                            data-toggle="modal"
                                                                            data-target="#exampleModal{{ $item->id }}"><i
                                                                                class="m-r-10 mdi mdi-delete"></i></a></button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade"
                                                                        id="exampleModal{{ $item->id }}" tabindex="-1"
                                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">Modal
                                                                                        Delete</h5>
                                                                                    <a href="#" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Do you want to delete Product??
                                                                                    </p>
                                                                                </div>
                                                                                <div class="modal-footer">

                                                                                    <button type="submit"
                                                                                        class="btn btn-danger">Delete
                                                                                        Item
                                                                                    </button>

                                                                                    <a href="#" class="btn btn-primary"
                                                                                        data-dismiss="modal">Close</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end recent orders  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
@endsection

@section('js')
    <script>
        $('.products').addClass('active');
    </script>
@endsection
