<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Diego Luiz">
  <meta name="description" content="A responsive, mobile first e-commerce product page built according to the challenge by Frontend Mentor, using HTML, CSS and Javascript">
  <meta name="keywords" content="html, css, javascript, e-commerce, product, page, challenge, frontend mentor, frontend, web developer, responsive, mobile first">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets/img/favicon-32x32.png')}}">

  <link href="{{ asset('admin/assets/css/normalize.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/assets/css/main2.css') }}" rel="stylesheet">

  
  <script src="{{asset('admin/assets/js/products.js')}}"></script>
  <script src="{{asset('admin/assets/js/cart.js')}}"></script>
  <script src="{{asset('admin/assets/js/focusable-lightbox.js')}}"></script>
  <script src="{{asset('admin/assets/js/main2.js')}}" defer></script>
  
  <title>E-commerce product page challenge by Frontend Mentor</title>
</head>
<body>
  <header class="top-header">
    <div class="top-header__left">
      <button class="nav-btn" type="button" aria-controls="main-nav" aria-expanded="false">
        <span class="sr-only">Menu button</span>
        href="{{asset('admin/assets/img/icon-menu.svg')}}"
        <img src="images/icon-menu.svg" alt="" role="presentation">
      </button>
      <h1 class="logo">
        <a href="index.html" class="invisible" tabindex="0" >sneakers</a>
      </h1>
        <nav class="main-nav" id="main-nav" aria-label="Main menu">
          <div class="main-nav__content-container">
            <button class="main-nav__close-btn" type="button">
              <span class="sr-only">Close menu</span>
              <span class="icon icon-close" aria-hidden="true"></span>
            </button>
            <ul class="main-nav__links">
              <li>
                <a href="#" class="nav-item">Collections</a>
              </li>
              <li>
                <a href="#" class="nav-item">Men</a>
              </li>
              <li>
                <a href="#" class="nav-item">Women</a>
              </li>
              <li>
                <a href="#" class="nav-item">About</a>
              </li>
              <li>
                <a href="#" class="nav-item">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <div class="top-header__right">
      <button class="top-header__btn-cart" type="button" aria-controls="cart-section" aria-expanded="false">
        <span class="sr-only">Button cart</span>
        <span class="icon icon-cart" aria-hidden="true"></span>
        <span class="items-quantity">
          <span class="value">0</span><span class="sr-only">items</span>
        </span>
      </button>
      <button class="user-container" type="button" aria-label="User section">
        <img src="images/image-avatar.png" alt="" class="user-container__img" role="presentation">
      </button>
    </div>

    <section class="cart-section" id="cart-section" aria-live="polite">
      <h3 class="cart-section__title">Cart</h3>
      <div class="cart-section__body">
        <p class="empty-msg">Your cart is empty.</p>
        <ul class="cart-section__products"></ul>
        <button type="button" class="cart-section__btn-checkout">Checkout</button>
      </div>
    </section>
  </header>

  <main>
    <article class="product">
      <section class="product__slider default-container" aria-label="Product preview">
        <button type="button" class="product__slider___btn-close-lightbox">
          <span class="sr-only">Close lightbox</span>
          <span class="icon icon-close" aria-hidden="true"></span>
        </button>  
        <div class="image-box" aria-label="Product preview" role="region">
          <button type="button" class="btn-previousImage">
            <span class="sr-only">Previous Image</span>
            <span class="icon icon-previous" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn-nextImage">
            <span class="sr-only">Next Image</span>
            <span class="icon icon-next" aria-hidden="true"></span>
          </button>
           
          
          <img src="{{ asset('img/'.$product->image) }}" alt="">
        </div>
        
          <ul class="product__thumbs default-container" aria-label="Product thumbnails">
            <li class="thumb-item">
              <button type="button" class="thumb-item__btn" aria-label="change to image 1">
              <img src="{{ asset('img/'.$product->image) }}"  alt="" data-thumb-index="0" role="presentation">
              </button>
            </li>
            <li class="thumb-item">
              <button type="button" class="thumb-item__btn" aria-label="change to image 2">
              <img src="{{ asset('img/'.$product->image) }}"  alt="" data-thumb-index="0" role="presentation">
              </button>
            </li>
            <li class="thumb-item">
              <button type="button" class="thumb-item__btn" aria-label="change to image 3">
              <img src="{{ asset('img/'.$product->image) }}"  alt="" data-thumb-index="0" role="presentation">
              </button>
            </li>
            <li class="thumb-item">
              <button type="button" class="thumb-item__btn" aria-label="change to image 4">
              <img src="{{ asset('img/'.$product->image) }}"  alt="" data-thumb-index="0" role="presentation">
              </button>
            </li>
          </ul>


      </section>
      <section class="product__content default-container" aria-label="Product content">
        <header>
          <h2 class="company-name" tabindex="0">{{$product->name}}</h2>
          <p class="product__name" tabindex="0">{{$product->name}}</p>
          <h3 class="product__title" tabindex="0"></h3>
        </header>
        <p class="product__description" tabindex="0">
        {{$product->description}}
        </p>
        <div class="product__price">
          <div class="discount-price">
            <p class="discount-price__value" tabindex="0">
              &dollar;125.00
              <span class="sr-only">dollars</span>
            </p>
            <p class="discount-price__discount" tabindex="0">50%</p>
          </div>
          <div class="full-price">
            <p tabindex="0">
              &dollar;250.00
              <span class="sr-only">dollars</span>
            </p>
          </div>
        </div>
        



        <form action="#" class="cart-form">
          <div class="cart-form__input-container" aria-label="Define the product quantity">
            <button type="button" class="btn-changeValue minus-item">
              <span class="sr-only">Minus one item</span>
              <span class="icon icon-minus" aria-hidden="true"></span>
            </button>
            <label for="product__quantity" class="sr-only">Set the quantity manually</label>
            <input type="number" min="0" value="0" id="product__quantity">
            <button type="button" class="btn-changeValue plus-item">
              <span class="sr-only">Plus one item</span>
              <span class="icon icon-plus" aria-hidden="true"></span>
            </button>
          </div>
          <button type="button" class="cart-form__add-btn">
            <span class="icon icon-cart" aria-hidden="true"></span>
            Add to cart
          </button>
        </form>
      </section>
    </article>
  </main>
  
  <div class="lightbox" id="lightbox" role="dialog"></div>
</body>
</html>