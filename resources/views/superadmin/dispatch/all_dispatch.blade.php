@extends('superadmin.superadmin_app')

@section('content')
<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <span class="au-breadcrumb-span">You are here:</span>
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="{{url('finance')}}}">Home</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Invoices</li>
                        </ul>
                    </div>
                <form class="au-form-icon--sm" action="{{url('/invoice')}}" method="GET">
                       @csrf
                        <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for Client &amp; Data...">
                        <button class="au-btn--submit2" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Product</b></h2>
					</div>
					<div class="col-sm-6">
                    <a href="{{url('add-product')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add Product</span></a>
						<a href="{{url('all-categories')}}" class="btn btn-danger" ><i class="material-icons">&#xE15C;</i> <span>Manage Category</span></a>
					</div>
				</div>
			</div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Details</th>
                                    <th> Product Category</th>
                                    <th >Product Per Carton</th>
                                    <th>Sell Price</th>
                                    <th >Supplier Price</th>
                                    <th>Product Model</th>
                                    <th >Supplier Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $products)

                                <tr>
                                    <td>{{$products->product_name}}</td>
                                    <td>{{$products->product_details}}</td>
                                    <td>{{$products->category_name}}</td>
                                    <td>{{$products->product_per_cartoon}}</td>
                                    <td>{{$products->sell_price}}</td>
                                    <td>{{$products->supplier_price}}</td>
                                    <td>{{$products->model}}</td>
                                    <td>{{$products->supplier_name}}</td>

                                    <td class="col-lg-3">
                                        <a href="{{url('/edit-product/'.$products->product_id)}}" class="btn btn-warning col-lg-4"><span style="margin-right: 5px" class="fas fa-edit"></span>Edit</a>

                                            <a href="{{url('/edit-product/'.$products->product_id)}}" class="btn btn-info col-lg-4 " ><span style="margin-right: 5px" class="glyphicon glyphicon-align-justify"></span>Details</a>

                                                <a href="{{url('/delete-product/'.$products->product_id)}}" class="btn btn-danger col-lg-4" ><span style="margin-right: 5px" class="far fa-trash-alt"></span>Delete</a>
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
</div>


@endsection
