<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">



            @foreach ($sliders as $slide)
                <div class="item-slick1 item1-slick1" style="background-image: url( {{ $slide->getImage() }} );">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
                            {{ $slide->title }}
                        </h2>

                        <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
                            {{ $slide->info }}
                        </span>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="{{ $slide->link }}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" >
                                @lang("langue.show_now")
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach




            {{--  <div class="item-slick1 item2-slick1" style="background-image: url({{ asset('fashe') }}/images/master-slide-06.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
                        Leather Bags
                    </h2>

                    <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="lightSpeedIn">
                        New Collection 2018
                    </span>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>  --}}

            {{--  <div class="item-slick1 item3-slick1" style="background-image: url({{ asset('fashe') }}/images/master-slide-02.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rotateInDownLeft">
                        Leather Bags
                    </h2>

                    <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="rotateInUpRight">
                        New Collection 2018
                    </span>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>  --}}

        </div>
    </div>
</section>
