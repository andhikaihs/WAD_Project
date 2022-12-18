@extends('layout')
@section('content')

	<section id="cart_items">
		<div class="container">
        <a href="/product/create" class="btn btn-dark">Add Product</a>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>No</td>
							<td>Picture</td>
							<td>Name</td>
							<td>Price</td>
							<td>Action</td>
						</tr>
					</thead>
                    <tbody>
                        <!-- Code the foreach here ONLY after you are instructed to -->
                        @foreach ($products as $product)
                        <tr>
                            <td><p>{{/$loop->iteration}}</p></td>
                            <td><img src="/image/{{$product->gambar}}" width="100px" height="100px"/></td>
                            <td class="cart_description">
                                <h4><a href="">{{$product->nama}}</a></h4>
                            </td>
                            <td class="cart_price">
                                <p>{{$product->harga}}</p>
                            </td>
                            <td>
                                <a href="/product/{{$product-> id}}/edit" class="btn btn-primary">Edit</a>
                                <form action="/product/{{ $product-> id }}" method ="POST" style="display: inline-block"
                                    @csrf 
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    <!- Your code ends here -->
                    </tbody>
                </table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			
				<div class="col-sm-6">
					<div class="total_area">
						
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection