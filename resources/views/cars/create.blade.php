@extends('layouts.master')
@section('css')
		<!--INTERNAL Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Car</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-file-text mr-2 fs-14"></i>Enregistrer</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Forms</a></li>
								</ol>
							</div>
						</div>
                        <!--End Page header-->
@endsection
@section('content')
					
	              {{-- @if(session()->has('message'))
								<div class="alert alert-success" role="alert">
								{{ session()->get('message') }}
							</div>
						@endif  --}}
						<!-- Row -->
				<div class="row">
					<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Enregistrement</h4>
							</div>
						 <div class="card-body">
							<div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-6">
                                    <div class="col-lg-12 col-md-12">
												<form class="form-horizontal" action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">                                    
														@include('includes.form')
                                                    <div class="text-wrap">
                                                            <div class="btn-list text-right">
                                                                <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                                            </div>												
                                                    </div>
                                                </form>
                                     </div>
                                <div class="col-md-3">
                            
                                </div>											
							    </div>
							</div>
						 </div>
						</div>
					</div>
				</div><!-- end app-content-->
            </div>
@endsection
@section('js')
		<!--INTERNAL Select2 js -->
		<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection