@extends('backend.app')

@section('content')

            <div class="row" style="margin:10px">
            
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Testimonials</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>S/N</th>
													<th>Name</th>
                                                    <th>Content</th>
                                                    <th>Designation</th>
                                                    <th>Image</th>
													<th>Action</th>
												</tr>
											</thead>
											
                                            <tbody>
											<?php $i = 1; ?>
                                            @foreach($testimonials as $testimonial)
                                           
											<tr>
												<td>{{$i++;}}</td>
                                                <td>{{$testimonial->name}}</td>
                                                <td>{{$testimonial->content}}</td>
                                                <td>{{$testimonial->title}}</td>
                                                <td><img height="40" width="40" src="{{asset($testimonial->image)}}" /></td>
                                                <td>
                                                <a href="{{route('testimonial.edit', $testimonial->id)}}" ><i style="color:blue;" class="fa fa-edit"></i></a>    
                                                <a href="#" data-toggle="modal" data-target="#testimonial_{{$testimonial->id}}" ><i style="color:red;" class="fa fa-trash"></i></a>
                                                </td>
                                                @include('backend.modals.deleteTestimonial')
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