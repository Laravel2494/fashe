<div class="row">
    @foreach ($sales as $sale)

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
            <!-- Block2 -->
            <div class="block2">

                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-label{{ ($sale->status) ? $sale->status->prefix : '' }}">  {{-- block2-labelsale --}}
                    <a href="{{ route('show.product', $sale->id) }}">
                        <img src="{{ $sale->getImage() }}" alt="{{ $sale->getImage() }}">
                    </a>


                    {{-- <div class="block2-overlay trans-0-4">
                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                        </a>

                        <div class="block2-btn-addcart w-size1 trans-0-4">
                            <!-- Button -->
                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                @lang("langue.add_to_cart")
                            </button>
                        </div>
                    </div> --}}
                </div>

                <div class="block2-txt p-t-20">
                    <button class="size1 bg4 hov1 s-text1" style="margin-bottom: 10px;">
                        @lang("langue.add_to_cart")
                    </button>

                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                        {{ $sale->name }}
                    </a>

                    {{-- <span class="block2-price m-text6 p-r-5">
                        $29.50
                    </span>--}}


                    @if ($sale->discount)
                        <span class="block2-oldprice m-text7 p-r-5">
                            $ {{ $sale->price }}
                        </span>

                        <span class="block2-newprice m-text8 p-r-5">
                            $ {{ $sale->discount }}
                        </span>
                    @else
                        <span class="block2-price m-text6 p-r-5">
                            $ {{ $sale->price }}
                        </span>
                    @endif

                </div>

            </div>
        </div>

    @endforeach
</div>
