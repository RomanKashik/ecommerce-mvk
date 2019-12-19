<?php include (ROOT.'/views/layouts/header.php') ?>


<header class="header">
    <div class="container">
        <h1 class="header__title">Winter Collection</h1>
        <div class="header__subtitle">Buy stylish products in our shop!</div><a class="header-button">
            <div class="header-button__text">SHOP NOW</div>
            <div class="header-button__arrow"><img src="template/images/header/arrow_right.png" alt="arrow" title="shop now" /></div>
        </a>
    </div>
</header>
<main class="content">
    <section class="featured">
        <div class="container">
            <div class="featured__title title">Featured Items</div>
            <div class="featured__subtitle subtitle">Let’s see featured items!</div>
            <div class="featured__slider">
                <div class="slider responsive">
                    <div class="slider__item">
                        <div class="card">
                            <div class="card__img"><img src="template/images/future/bag.jpg" alt="Vaber Jinish Very Stylish" title="Vaber Jinish Very Stylish" /></div>
                            <div class="card__content">
                                <div class="card__title">Vaber Jinish Very Stylish</div>
                                <div class="card__rating"><img src="template/images/future/star.png" alt="images/future/star.png" title="images/future/star.png" /></div>
                                <div class="card__price">$255</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="card">
                            <div class="card__img"><img src="template/images/future/clock.jpg" alt="Vaber Jinish Very Stylish" title="Vaber Jinish Very Stylish" /></div>
                            <div class="card__content">
                                <div class="card__title">Vaber Jinish Very Stylish</div>
                                <div class="card__rating"><img src="template/images/future/star.png" alt="images/future/star.png" title="images/future/star.png" /></div>
                                <div class="card__price">$255</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="card">
                            <div class="card__img"><img src="template/images/future/bag_wooman.jpg" alt="Vaber Jinish Very Stylish" title="Vaber Jinish Very Stylish" /></div>
                            <div class="card__content">
                                <div class="card__title">Vaber Jinish Very Stylish</div>
                                <div class="card__rating"><img src="template/images/future/star.png" alt="images/future/star.png" title="images/future/star.png" /></div>
                                <div class="card__price">$255</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="card">
                            <div class="card__img"><img src="template/images/future/bag.jpg" alt="Vaber Jinish Very Stylish" title="Vaber Jinish Very Stylish" /></div>
                            <div class="card__content">
                                <div class="card__title">Vaber Jinish Very Stylish</div>
                                <div class="card__rating"><img src="template/images/future/star.png" alt="images/future/star.png" title="images/future/star.png" /></div>
                                <div class="card__price">$255</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="card">
                            <div class="card__img"><img src="template/images/future/clock.jpg" alt="Vaber Jinish Very Stylish" title="Vaber Jinish Very Stylish" /></div>
                            <div class="card__content">
                                <div class="card__title">Vaber Jinish Very Stylish</div>
                                <div class="card__rating"><img src="template/images/future/star.png" alt="images/future/star.png" title="images/future/star.png" /></div>
                                <div class="card__price">$255</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="card">
                            <div class="card__img"><img src="template/images/future/bag_wooman.jpg" alt="Vaber Jinish Very Stylish" title="Vaber Jinish Very Stylish" /></div>
                            <div class="card__content">
                                <div class="card__title">Vaber Jinish Very Stylish</div>
                                <div class="card__rating"><img src="template/images/future/star.png" alt="images/future/star.png" title="images/future/star.png" /></div>
                                <div class="card__price">$255</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="products__title title">Products Collections</div>
            <div class="products__subtitle subtitle">Check out popular products in our shop!</div>
            <div class="products__filter filter">
                <ul class="filter__list">
                    <?php foreach ($categories as $categoryItem) :?>
                    <li class="filter__item">
                        <spana class="filter__link" data-id="<?php echo $categoryItem['cat_id'];?>">
                            <?php echo $categoryItem['category_name'];?></spana>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <ul class="products__content">
                <li class="card card--bg"><a class="card__link card__add-btn" href="#" data-id="">Add to card</a>
                    <div class="card__add"></div>
                    <div class="card__img"><img src="template/images/products/jacket_grey.jpg" alt="Jacket Of Prince" title="Jacket Of Prince" /></div>
                    <div class="card__content">
                        <div class="card__title">Jacket Of Prince</div>
                        <div class="card__subtitle">Valo lagla kinen na kinla poth mapen</div>
                        <div class="card__price">$28</div>
                    </div>
                </li>
                <li class="card card--bg"><a class="card__link card__add-btn" href="#" data-id="">Add to card</a>
                    <div class="card__add"></div>
                    <div class="card__img"><img src="template/images/products/bag_wooman.png" alt="Fatafati Stylish Belt" title="Fatafati Stylish Belt" /></div>
                    <div class="card__content">
                        <div class="card__title">Fatafati Stylish Belt</div>
                        <div class="card__subtitle">Valo lagla kinen na kinla poth mapen</div>
                        <div class="card__price">$28</div>
                    </div>
                </li>
                <li class="card card--bg"><a class="card__link card__add-btn" href="#" data-id="">Add to card</a>
                    <div class="card__add"></div>
                    <div class="card__img"><img src="template/images/products/jacket-blue.jpg" alt="Fatafati Stylish Belt" title="Fatafati Stylish Belt" /></div>
                    <div class="card__content">
                        <div class="card__title">Fatafati Stylish Belt</div>
                        <div class="card__subtitle">Valo lagla kinen na kinla poth mapen</div>
                        <div class="card__price">$28</div>
                    </div>
                </li>
                <li class="card card--bg"><a class="card__link card__add-btn" href="#" data-id="">Add to card</a>
                    <div class="card__add"></div>
                    <div class="card__img"><img src="template/images/products/clock_2.png" alt="Fatafati Stylish Belt" title="Fatafati Stylish Belt" /></div>
                    <div class="card__content">
                        <div class="card__title">Fatafati Stylish Belt</div>
                        <div class="card__subtitle">Valo lagla kinen na kinla poth mapen</div>
                        <div class="card__price">$28</div>
                    </div>
                </li>
                <li class="card card--bg"><a class="card__link card__add-btn" href="#" data-id="">Add to card</a>
                    <div class="card__add"></div>
                    <div class="card__img"><img src="template/images/products/belt.png" alt="Jacket Of Prince" title="Jacket Of Prince" /></div>
                    <div class="card__content">
                        <div class="card__title">Jacket Of Prince</div>
                        <div class="card__subtitle">Valo lagla kinen na kinla poth mapen</div>
                        <div class="card__price">$28</div>
                    </div>
                </li>
                <li class="card card--bg"><a class="card__link card__add-btn" href="#" data-id="">Add to card</a>
                    <div class="card__add"></div>
                    <div class="card__img"><img src="template/images/products/shoes.jpg" alt="Jacket Of Prince" title="Jacket Of Prince" /></div>
                    <div class="card__content">
                        <div class="card__title">Jacket Of Prince</div>
                        <div class="card__subtitle">Valo lagla kinen na kinla poth mapen</div>
                        <div class="card__price">$28</div>
                    </div>
                </li>
            </ul>
            <div class="products__button-block"><button class="products__btn btn__product">MORE</button></div>
        </div>
    </section>
    <section class="subscribe content">
        <div class="container">
            <div class="subscribe__title title">Subscribe To Our Newsletter</div>
            <div class="subscribe__subtitle subtitle">Only our latest news to send your email addre</div>
            <form class="subscribe__form form"><input class="form__input" type="email" placeholder="Enter your email address" name="email" /><button class="form__button btn__form-subscribe">Subscribe</button></form>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="news__title title">Latest New’s</div>
            <div class="news__subtitle subtitle">Read latests new’s in our blog</div>
            <div class="news__content">
                <div class="news__column news__column--one">
                    <article class="article-news">
                        <div class="article-news__img"><img src="template/images/news/indus.jpg" alt="news" title="news" /></div>
                        <div class="article-news__content">
                            <div class="article-news__title article-news__title--big">Top kamla of this year!</div>
                            <div class="article-news__text">Ashole uni kamla noy uni VONDU & uni dami pc use kore so unar digayn o dami. Typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</div><a class="article-news__btn">READ MORE</a>
                        </div>
                    </article>
                </div>
                <div class="news__column">
                    <article class="article-news">
                        <div class="article-news__img"><img src="template/images/news/glass_man.jpg" alt="news" title="news" /></div>
                        <div class="article-news__content">
                            <div class="article-news__title">Specialize in Mobile and Web UI/UX!</div>
                            <div class="article-news__text">Kotha sotto blv it or not, is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text. ever. since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </article>
                    <article class="article-news">
                        <div class="article-news__img"><img src="template/images/news/cap.jpg" alt="news" title="news" /></div>
                        <div class="article-news__content">
                            <div class="article-news__title">Best photo of this month!</div>
                            <div class="article-news__text">Kotha sotto blv it or not, is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text. ever. since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include(ROOT .'/views/layouts/footer.php');