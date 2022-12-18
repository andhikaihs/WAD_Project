@extends('layout')
@section('content')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				
					<div>
						 <!-- YOUR CODE START HERE -->
                        <form action="/product/{{$product-> id}}" method="POST" enctype="multipart/form-data" style="width: 100px;">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$product->nama}}">
                            </div>

                            <div class="from-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" id="price" value="{{$product->harga}}">

                            </div>

                            <div class="custom-file" style="margin-top: 30px; margin-bottom: 30px">
                                <input type="file" class="custom-file-input" name="img_path" id="img_path">
                                <label for="customFile" class="custom-file-label">Choose image</label>
                            </div>

                            <div style="margin-top: 30px;">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
						 <!-- YOUR CODE ENDS HERE -->
					</div>
				</div>
			</div>
	</section><!--/form-->
    @endsection
    