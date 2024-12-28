@extends('layouts.app')
@section('content')
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
        style="background-image: url(assets/images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="display-t js-fullheight">
                        <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                            <h1>The Best Chicken Punch <em>&amp;</em> Restaurant <em>in</em> Palas</h1>
                            <h2>Chill and Enjoy our Food</h2>
                            <br>
                            <br>
                            <br>
                            <h2>
                                Scroll Down<br><i class="bi bi-arrow-down-square-fill"></i>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-about" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                    <img src="assets/images/hero_1.jpeg">
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="section-heading">
                        <h2>Selamat Datang!</h2>
                        <p>Nikmati pengalaman kuliner yang tak terlupakan di Ayam Geprek Jogja, tempat di mana cita
                            rasa autentik bertemu dengan suasana yang hangat dan ramah.
                            Kami menyajikan ayam geprek yang lezat, dipadukan dengan sambal khas yang menggugah
                            selera.
                            Setiap hidangan kami dibuat dengan bahan-bahan segar dan resep yang telah teruji,
                            menjadikan setiap suapan penuh kenikmatan.</p>
                        <p>Bergabunglah dengan kami untuk merasakan kelezatan yang telah menjadi favorit banyak
                            orang.
                            Apakah Anda datang untuk makan siang, makan malam, atau sekadar bersantai dengan
                            teman-teman,
                            Ayam Geprek Jogja adalah pilihan yang tepat!.</p>
                        <p><a href="{{ route('about.index') }}" class="btn btn-primary btn-outline">Our History</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-featured-menu" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 fh5co-heading animate-box">
                    <h2>Today's Menu</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Di Ayam Geprek Jogja, kami bangga menyajikan berbagai hidangan lezat yang siap
                                memanjakan lidah Anda.
                                Setiap menu kami dirancang dengan penuh cinta dan perhatian, menggunakan bahan-bahan
                                segar dan berkualitas tinggi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                    <div class="fh5co-item">
                        <img src="assets/images/gallery_9.jpeg" class="img-responsive"
                            alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
                        <h3>Ayam Geprek</h3>
                        <span class="fh5co-price">15.000</span>
                        <p>Makanan </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                    <div class="fh5co-item margin_top">
                        <img src="assets/images/gallery_8.jpeg" class="img-responsive"
                            alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
                        <h3>Ayam Penyet</h3>
                        <span class="fh5co-price">20.000</span>
                        <p>Makanan</p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                    <div class="fh5co-item">
                        <img src="assets/images/gallery_7.jpeg" class="img-responsive"
                            alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
                        <h3>Soto</h3>
                        <span class="fh5co-price">10.000</span>
                        <p>Makanan</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                    <div class="fh5co-item margin_top">
                        <img src="assets/images/gallery_6.jpeg" class="img-responsive"
                            alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
                        <h3>Aneka Minuman</h3>
                        <span class="fh5co-price">5.000</span>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-heading text-center">
        <p><a href="{{ route('about.index') }}" class="btn btn-primary btn-outline">Our History</a></p>
    </div>

    <div id="fh5co-featured-testimony" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 fh5co-heading animate-box">
                    <h2>Testimony</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit
                                itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam
                                voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique
                                commodi omnis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
                    <img src="assets/images/person_1.jpg" alt="">
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
                    <blockquote>
                        <p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab
                            debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus
                            aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
                        <p class="author"><cite>&mdash; Jane Smith</cite></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-slider" class="fh5co-section animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="fh5co-heading">
                        <h2>Our Best <em>&amp;</em> Unique Menu</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit
                            itaque totam, a maiores nihil, nulla magnam porro minima officiis!</p>
                    </div>
                </div>
                <div class="col-md-6 col-md-push-1 animate-box">
                    <aside id="fh5co-slider-wrwap">
                        <div class="flexslider">
                            <ul class="slides">
                                <li style="background-image: url(assets/images/gallery_7.jpeg);">
                                    <div class="overlay-gradient"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div
                                                class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                                <div class="slider-text-inner">
                                                    <div class="desc">
                                                        <h2>Crab <em>with</em> Curry Sources</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Sunt eveniet quae, numquam magnam doloribus eligendi
                                                            ratione rem, consequatur quos natus voluptates est totam
                                                            magni! Nobis a temporibus, ipsum repudiandae dolorum.
                                                        </p>
                                                        <p><a href="#" class="btn btn-primary btn-outline">Learn
                                                                More</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li style="background-image: url(assets/images/gallery_6.jpeg);">
                                    <div class="overlay-gradient"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div
                                                class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                                <div class="slider-text-inner">
                                                    <div class="desc">
                                                        <h2>Tuna <em>&amp;</em> Roast Beef</h2>
                                                        <p>Ink is a free html5 bootstrap and a multi-purpose
                                                            template perfect for any type of websites. A combination
                                                            of a minimal and modern design template. The features
                                                            are big slider on homepage, smooth animation, product
                                                            listing and many more</p>
                                                        <p><a href="#" class="btn btn-primary btn-outline">Learn
                                                                More</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li style="background-image: url(assets/images/gallery_5.jpeg);">
                                    <div class="overlay-gradient"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div
                                                class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                                <div class="slider-text-inner">
                                                    <div class="desc">
                                                        <h2>Egg <em>with</em> Mushroom</h2>
                                                        <p>Ink is a free html5 bootstrap and a multi-purpose
                                                            template perfect for any type of websites. A combination
                                                            of a minimal and modern design template. The features
                                                            are big slider on homepage, smooth animation, product
                                                            listing and many more</p>
                                                        <p><a href="#" class="btn btn-primary btn-outline">Learn
                                                                More</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-blog" class="fh5co-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Events</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, consequatur. Aliquam quaerat
                        pariatur repellendus veniam nemo, saepe, culpa eius aspernatur cumque suscipit quae nobis
                        illo tempora. Eum veniam necessitatibus, blanditiis facilis quidem dolore! Dolorem,
                        molestiae.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg"
                            style="background-image: url(assets/images/gallery_1.jpeg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Feb. 15th 2016</span>
                            <h3><a href="#">Photoshoot On The Street</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts.</p>
                            <ul class="stuff">
                                <li><i class="icon-heart2"></i>1.2K</li>
                                <li><i class="icon-eye2"></i>2K</li>
                                <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg"
                            style="background-image: url(assets/images/gallery_2.jpeg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Feb. 15th 2016</span>
                            <h3><a href="#">Surfing at Philippines</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts.</p>
                            <ul class="stuff">
                                <li><i class="icon-heart2"></i>1.2K</li>
                                <li><i class="icon-eye2"></i>2K</li>
                                <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg"
                            style="background-image: url(assets/images/gallery_3.jpeg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Feb. 15th 2016</span>
                            <h3><a href="#">Focus On Uderwater</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts.</p>
                            <ul class="stuff">
                                <li><i class="icon-heart2"></i>1.2K</li>
                                <li><i class="icon-eye2"></i>2K</li>
                                <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(assets/images/hero_1.jpeg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Book a Table</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae
                        cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus
                        veniam ipsa fuga maxime odio? Eaque!</p>
                    <p><a href="{{ route('reservation.index') }}" class="btn btn-primary btn-outline">Book
                            Now</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
