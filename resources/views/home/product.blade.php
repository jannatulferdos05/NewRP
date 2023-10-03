<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our club <span>has</span>
            </h2>
        </div>
        <div class="row">
            @foreach($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                          <!--  @if($products->holder_id!=0)
                            <a href="" class="option1">
                                Check
                            </a>
                            @endif  -->

                            <a href="" class="option1" >Apply Now</a>
                            <a href="{{url('product_details',$products->id)}}" class="option1">Details</a>
                            <form action="{{url('add_cart',$products->id)}}" method="post" >
                                @csrf
                                <input type="submit" value="Add to Wish" class="option2" style="width: 160px; height: 45px; align-content: center; border-radius: 10px; ">
                                <input type="number" name="quantity" value="1" min="1" style="width: 80px;height: 30px; margin-top: 6px; margin-left: 45px; ">
                            </form>

                        </div>
                    </div>
                    <div class="img-box" >
                        <img src="product/{{$products->image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$products->title}}
                        </h5>

                        <h6>
                            Tk {{$products->price}}
                        </h6>
                    </div>
                </div>
            </div>

            @endforeach
            <span style="padding-top: 20px; padding-left: 35px;">
                 {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
            </span>


    </div>
</section>
