@extends('backend.app')
@section('title' , 'All Products')
@section('page' , 'All Products')

@section('content')

            <div class="row" style="margin:10px">

						<div class="col-md-12">
							<div class="card">
								<div class="">
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="my-table" class="display table " >
											<thead>
												<tr>
													<th>S/N</th>
													<th>Title</th>
                                                    <th>Price (#)</th>
													<th>Content</th>
                                                    <th>Discount (%)</th>

                                                    <th>Image</th>
													<th>Action</th>
												</tr>
											</thead>

                                            <tbody>
											<?php $i = 1; ?>
                                            @foreach($products as $product)

											<tr>
												<td>{{$i++;}}</td>
                                                <td>{{$product->title}}</td>
                                                <td>{{$product->price}}</td>
												<td>{!!Str::limit(html_entity_decode($product->content),20,"...")!!}</td>
                                                <td>{{$product->discount}}</td>

                                                <td><img height="40" width="40" src="{{asset($product->image)}}" /></td>
                                                <td>
                                                <a href="{{route('product.edit', $product->id)}}" ><i style="color:blue;" class="fa fa-edit"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#product_{{$product->id}}" ><i style="color:red;" class="fa fa-trash"></i></a>
                                                </td>
                                                @include('backend.modals.deleteproduct')
											</tr>

                                            @endforeach

                                            </tbody>
										</table>
									</div>
								</div>
							</div>
						</div>


            </div>

@endsection
