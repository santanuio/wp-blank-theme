<?php
$asset_img_uri = get_stylesheet_directory_uri() . '/assets/img/';
get_header();
?>
    <section class="hero linear-gradient" aria-labelledby="hero-title">
      <div class="global-background-image" style="background-image: url('<?php echo esc_url( $asset_img_uri . 'banner-image.jpg' ); ?>')" aria-hidden="true">
      </div>
      <div class="o-container">
        <div class="o-text-center global-background-image--content o-mt-50">
          <p class="eyebrow">Tattoo shop in Los Angeles</p>
          <h1 class="hero__title" id="hero-title">
            Spinner Ink Tattoo shop <br />
            <span>in Los Angeles</span>
          </h1>
          <p class="hero__subtitle">
            Welcome to the Home of the 2 for $100 Flash & Home of the Get Now Pay Later! LA’s #1 spot for Anime Tattoos
            & Black & Grey Realism. As well as Cartoons, lettering & more—your idea, our ink. Come get your next Tattoo
            now!”
          </p>
          <div class="hero__actions">
            <a href="contact.html" class="o-btn o-btn-primary o-btn-xl">
              BOOK AN APPOINTMENT
            </a>
            <a href="contact.html" class="o-btn o-btn-primary o-btn-xl">
              SEE OUR WORK
            </a>
          </div>
          <div class="hero__trust">
            <ul>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                  <path
                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                </svg>
                100+ Google Reviews
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                  <path
                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                </svg>
                10+ Years of Experience
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                  <path
                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                </svg>
                100% Satisfaction Guarantee
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="relative section-padding-sm" aria-label="features">
      <div class="divider-fadeout absolute o-top-0"></div>
      <div class="o-container">
        <ul class="features-list o-d-flex o-flex-wrap o-gap-30 o-justify-around o-text-center">
          <li>
            <img src="<?php echo esc_url( $asset_img_uri . 'icons/washing-hands.svg' ); ?>" width="84" height="84" class="features-list__icon"
              alt="Hygiene & Safety icon" decoding="async" loading="lazy" />
            <h3 class="title-h4 o-mt-15">Hygiene & Safety</h3>
            <p class="p-sm o-mt-15">
              Professional hygiene standards and a clean, safe environment for
              every tattoo session.
            </p>
          </li>

          <li>
            <img src="<?php echo esc_url( $asset_img_uri . 'icons/best-employee.svg' ); ?>" width="84" height="84" class="features-list__icon"
              alt="Experienced Artists icon" decoding="async" loading="lazy" />
            <h3 class="title-h4 o-mt-15">Experienced Artists</h3>
            <p class="p-sm o-mt-15">
              Skilled tattoo artists with distinct styles, strong portfolios,
              and attention to detail.
            </p>
          </li>

          <li>
            <img src="<?php echo esc_url( $asset_img_uri . 'icons/heart.svg' ); ?>" width="84" height="84" class="features-list__icon" alt="Perfect Design icon"
              decoding="async" loading="lazy" />
            <h3 class="title-h4 o-mt-15">Perfect Design</h3>
            <p class="p-sm o-mt-15">
              Discuss your idea, placement, and style with an artist before
              your tattoo session.
            </p>
          </li>
        </ul>
      </div>
      <div class="divider-fadeout absolute o-bottom-0"></div>
    </section>
    <section class=" section-padding-xl">
      <div class="o-container">
        <div class="o-row">
          <div class="o-col-lg-5">
            <div class="business-location" style="max-width: 600px;">
              <img src="<?php echo esc_url( $asset_img_uri . 'shop.jpg' ); ?>" width="500" height="400" decoding="async" loading="lazy" alt="gallery image"
                class="o-border" />
            </div>
          </div>
          <div class="o-col-lg-6 o-pl-md-40">
            <div class="o-mt-50 o-mt-lg-0">
              <p class="preheading preheading--line">Top Rated Tattoo Shop in Los Angeles</p>
              <h2 class="title-h2 o-mt-15">Where Ideas Take Shape and <span>Art Gets Under Your Skin</span>
              </h2>
            </div>
            <div class="o-mt-30">
              <p class="sub-title">Where the vibe is as fire as the art. Right in the heart of LA, we specialize in
                Anime
                Tattoos and Black & Grey Realism that hit different, plus photoreal portraits, bold lettering, and any
                wild idea you bring through the door. We tattoo everybody — all skin tones, all genders, all walks of
                life — no exceptions. Led by Big Will, with 10+ years in the game, our crew is here to turn your vision
                into ink you’ll wear with pride.</p>

            </div>
            <div class="o-d-flex o-gap-15 o-flex-wrap o-mt-30">
              <button href="contact.html"
                class="o-btn o-btn-primary o-btn-xl weight500 text-uppercase o-d-flex o-gap-5 o-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                  <path
                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                </svg>
                BOOK AN APPOINTMENT
              </button>
              <a href="#" class="o-btn o-btn-primary o-btn-xl weight500 text-uppercase">
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding section-background" aria-label="services">
      <div class="o-container">
        <div class="o-row" style="align-items: center;">
          <div class="o-col-md-7">
            <p class="preheading preheading--line">Discover Our Services</p>
            <h2 class="title-h2 o-mt-15">What Are You <span>Planning</span></h2>
          </div>
          <div class="o-col-md-5">
            <p>

            </p>
          </div>
        </div>
        <div class="o-row o-mt-30">
          <div class="o-col-md-4 o-mt-30">
            <div class="service-card">
              <img class="service-card__media" src="<?php echo esc_url( $asset_img_uri . 'realism.jpg' ); ?>" alt="Realism tattoo work" loading="lazy" />
              <div class="service-card__overlay"></div>
              <div class="service-card__body">
                <h3 class="title-h3">Black and Grey Realism</h3>
                <p class="p-xl">Large, detailed tattoos &amp; individual projects</p>
                <div class="service-card__more">
                  <p class="p-xl">Photo-real portraits, animals and black &amp; grey pieces, built over one or more
                    sessions after a
                    free consultation.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="o-col-md-4 o-mt-30">
            <div class="service-card">
              <img class="service-card__media" src="<?php echo esc_url( $asset_img_uri . 'anime.jpeg' ); ?>" alt="Fine line tattoo work" loading="lazy" />
              <div class="service-card__overlay"></div>
              <div class="service-card__body">
                <h3 class="title-h3">Anime & Pop Culture Tattoos</h3>
                <p class="p-xl">Delicate, elegant tattoos – small or large</p>
                <div class="service-card__more">
                  <p class="p-xl">Photo-real portraits, animals and black &amp; grey pieces, built over one or more
                    sessions after a
                    free consultation.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="o-col-md-4 o-mt-30">
            <div class="service-card">
              <img class="service-card__media" src="<?php echo esc_url( $asset_img_uri . 'other.jpg' ); ?>" alt="Piercing work" loading="lazy" />
              <div class="service-card__overlay"></div>
              <div class="service-card__body">
                <h3 class="title-h3">Other styles we offer</h3>
                <p class="p-xl">Professionally pierced &amp; personally advised</p>
                <div class="service-card__more">
                  <p class="p-xl">Photo-real portraits, animals and black &amp; grey pieces, built over one or more
                    sessions after a
                    free consultation.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="relative gallery section-padding-xl" id="gallery">
      <div class="o-container">
        <div class="section__intro section__intro--center o-text-center">
          <p class="eyebrow">Selected Work</p>
          <h2 class="title-h2" id="portfolio-title">
            Ink That Speaks <span>Your Story</span>
          </h2>
          <p class="o-mt-30 sub-title">
            Explore a selection of custom tattoos created with precision,
            creativity, and attention to detail.
          </p>
        </div>
        <div class="gallery__grid o-mt-20 o-mt-md-40" id="galleryGrid">
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work01.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work02.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work03.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work04.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work05.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work06.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work07.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work08.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work09.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work10.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work11.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
          <div class="gallery__item">
            <img class="gallery__img" src="<?php echo esc_url( $asset_img_uri . 'gallery/work12.jpg' ); ?>" width="300" height="500" decoding="async"
              loading="lazy" alt="gallery image" />
          </div>
        </div>
        <div class="gallery__lightbox" id="galleryLightbox">
          <button class="gallery__close" id="galleryClose" aria-label="Close">&times;</button>

          <button class="gallery__nav gallery__nav--prev" id="galleryPrev" aria-label="Previous image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>

          <img class="gallery__lightbox-img" id="galleryLightboxImg" src="" alt="" />

          <button class="gallery__nav gallery__nav--next" id="galleryNext" aria-label="Next image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>

          <div class="gallery__counter" id="galleryCounter"></div>
        </div>
        <div class="o-text-center">
          <a href="contact.html" class="o-btn o-btn-primary o-btn-xl o-mt-10 o-mt-md-30">
            Check our all works
          </a>
        </div>
      </div>
    </section>
    <section class="relative section-padding-xl" aria-label="Artist">
      <div class="divider-fadeout divider-fadeout--white absolute o-top-0"></div>
      <div class="o-container">
        <div class="o-row">
          <div class="o-col-md-4">
            <div class="o-border artist-card o-mt-15 o-mt-md-30">
              <div class="artist-card__image">
                <img src="<?php echo esc_url( $asset_img_uri . 'artist/001.jpg' ); ?>" width="510" height="532" decoding="async" loading="lazy"
                  alt="tattoo artist" />
              </div>
              <div class="artist-card__content">
                <h3 class="title-h3 text-spacing">Vicki</h3>
                <p class="p-xs text-primary text-uppercase text-spacing o-mt-5">
                  Fine Line Artist
                </p>
                <p class="p-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Quisquam excepturi officiis.
                </p>
                <ul class="o-d-flex o-flex-wrap o-gap-5 o-mt-15">
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Blackwork
                  </li>
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Geometric
                  </li>
                </ul>
                <a href="contact.html"
                  class="o-btn o-btn-sm o-btn-primary weight500 text-uppercase o-d-flex-inline o-gap-5 o-mt-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  </svg>
                  See my Work
                </a>
              </div>
            </div>
          </div>
          <div class="o-col-md-4">
            <div class="o-border artist-card o-mt-15 o-mt-md-30">
              <div class="artist-card__image">
                <img src="<?php echo esc_url( $asset_img_uri . 'artist/002.jpg' ); ?>" width="510" height="532" decoding="async" loading="lazy"
                  alt="tattoo artist" />
              </div>
              <div class="artist-card__content">
                <h3 class="title-h3 text-spacing">Will (CEO)</h3>
                <p class="p-xs text-primary text-uppercase text-spacing o-mt-5">
                  Fine Line Artist
                </p>
                <p class="p-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Quisquam excepturi officiis.
                </p>
                <ul class="o-d-flex o-flex-wrap o-gap-5 o-mt-15">
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Blackwork
                  </li>
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Geometric
                  </li>
                </ul>
                <a href="contact.html"
                  class="o-btn o-btn-sm o-btn-primary weight500 text-uppercase o-d-flex-inline o-gap-5 o-mt-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  </svg>
                  See my Work
                </a>
              </div>
            </div>
          </div>
          <div class="o-col-md-4">
            <div class="o-border artist-card o-mt-15 o-mt-md-30">
              <div class="artist-card__image">
                <img src="<?php echo esc_url( $asset_img_uri . 'artist/003.jpg' ); ?>" width="510" height="532" decoding="async" loading="lazy"
                  alt="tattoo artist" />
              </div>
              <div class="artist-card__content">
                <h3 class="title-h3 text-spacing">PabloHidalgo</h3>
                <p class="p-xs text-primary text-uppercase text-spacing o-mt-5">
                  Fine Line Artist
                </p>
                <p class="p-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Quisquam excepturi officiis.
                </p>
                <ul class="o-d-flex o-flex-wrap o-gap-5 o-mt-15">
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Blackwork
                  </li>
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Geometric
                  </li>
                </ul>
                <a href="contact.html"
                  class="o-btn o-btn-sm o-btn-primary weight500 text-uppercase o-d-flex-inline o-gap-5 o-mt-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  </svg>
                  See my Work
                </a>
              </div>
            </div>
          </div>
          <div class="o-col-md-4">
            <div class="o-border artist-card o-mt-15 o-mt-md-30">
              <div class="artist-card__image">
                <img src="<?php echo esc_url( $asset_img_uri . 'artist/dummy.jpg' ); ?>" width="510" height="532" decoding="async" loading="lazy"
                  alt="tattoo artist" />
              </div>
              <div class="artist-card__content">
                <h3 class="title-h3 text-spacing">Mariyah</h3>
                <p class="p-xs text-primary text-uppercase text-spacing o-mt-5">
                  Fine Line Artist
                </p>
                <p class="p-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Quisquam excepturi officiis.
                </p>
                <ul class="o-d-flex o-flex-wrap o-gap-5 o-mt-15">
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Blackwork
                  </li>
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Geometric
                  </li>
                </ul>
                <a href="contact.html"
                  class="o-btn o-btn-sm o-btn-primary weight500 text-uppercase o-d-flex-inline o-gap-5 o-mt-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  </svg>
                  See my Work
                </a>
              </div>
            </div>
          </div>
          <div class="o-col-md-4">
            <div class="o-border artist-card o-mt-15 o-mt-md-30">
              <div class="artist-card__image">
                <img src="<?php echo esc_url( $asset_img_uri . 'artist/005.jpg' ); ?>" width="510" height="532" decoding="async" loading="lazy"
                  alt="tattoo artist" />
              </div>
              <div class="artist-card__content">
                <h3 class="title-h3 text-spacing">Artist Name</h3>
                <p class="p-xs text-primary text-uppercase text-spacing o-mt-5">
                  Fine Line Artist
                </p>
                <p class="p-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Quisquam excepturi officiis.
                </p>
                <ul class="o-d-flex o-flex-wrap o-gap-5 o-mt-15">
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Blackwork
                  </li>
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Geometric
                  </li>
                </ul>
                <a href="contact.html"
                  class="o-btn o-btn-sm o-btn-primary weight500 text-uppercase o-d-flex-inline o-gap-5 o-mt-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  </svg>
                  See my Work
                </a>
              </div>
            </div>
          </div>
          <div class="o-col-md-4">
            <div class="o-border artist-card o-mt-15 o-mt-md-30">
              <div class="artist-card__image">
                <img src="<?php echo esc_url( $asset_img_uri . 'artist/dummy.jpg' ); ?>" width="510" height="532" decoding="async" loading="lazy"
                  alt="tattoo artist" />
              </div>
              <div class="artist-card__content">
                <h3 class="title-h3 text-spacing">Artist Name</h3>
                <p class="p-xs text-primary text-uppercase text-spacing o-mt-5">
                  Fine Line Artist
                </p>
                <p class="p-sm">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Quisquam excepturi officiis.
                </p>
                <ul class="o-d-flex o-flex-wrap o-gap-5 o-mt-15">
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Blackwork
                  </li>
                  <li class="tag-xs o-border text-uppercase o-rounded-full">
                    Geometric
                  </li>
                </ul>
                <a href="contact.html"
                  class="o-btn o-btn-sm o-btn-primary weight500 text-uppercase o-d-flex-inline o-gap-5 o-mt-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                  </svg>
                  See my Work
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="process section-padding-xl section-background" id="process">
      <div class="o-container">
        <div class="o-container-sm o-text-center">
          <p class="eyebrow">Our Process</span>
          <h2 class="title-h2 text-capitalize">Five steps to your <span>perfect tattoo</span></h2>
        </div>

        <div class="process__grid o-mt-50">
          <div class="process__item">
            <span class="process__number">01</span>
            <h3 class="title-h4">Consultation</h3>
            <p class="process__text">
              We talk through your idea, placement, and size to shape the
              concept together.
            </p>
          </div>

          <div class="process__item process__item--active">
            <span class="process__number">02</span>
            <h3 class="title-h4">Custom Design</h3>
            <p class="process__text">
              Your artist sketches and refines original artwork built around
              you.
            </p>
          </div>

          <div class="process__item">
            <span class="process__number">03</span>
            <h3 class="title-h4">Stencil &amp; Placement</h3>
            <p class="process__text">
              We fit and confirm the stencil on your skin before a single
              needle touches it.
            </p>
          </div>

          <div class="process__item">
            <span class="process__number">04</span>
            <h3 class="title-h4">Tattooing Session</h3>
            <p class="process__text">
              Your design brought to life with precision, care, and a clean,
              safe process.
            </p>
          </div>

          <div class="process__item">
            <span class="process__number">05</span>
            <h3 class="title-h4">Aftercare</h3>
            <p class="process__text">
              Clear healing guidance so your new tattoo stays vibrant for
              years to come.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding-xl relative" aria-labelledby="faq">
      <div class="divider-fadeout divider-fadeout--white absolute o-top-0"></div>
      <div class="o-container o-container-sm">
        <div class="o-row">
          <div class="o-col-md-12">
            <p class="preheading preheading--line">Questions & Answers</p>
            <h2 class="title-h2 o-mt-15">Everything you need to know</h2>
            <ul class="faq-list o-mt-10 o-mt-md-30">
              <li class="faq-item">
                <details class="faq-details" name="faq" open>
                  <summary class="title-h3 faq-summary">
                    <span>How do I book a tattoo appointment?</span>
                    <div class="faq-icon-wrapper">
                      <!-- Wrapped Plus Icon -->
                      <div class="faq-icon-box faq-icon-plus-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-plus-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                      </div>

                      <!-- Wrapped Dash Icon -->
                      <div class="faq-icon-box faq-icon-dash-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-dash-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
                        </svg>
                      </div>
                    </div>
                  </summary>
                  <div class="faq-content">
                    <p class="p-xl">
                      Contact us with your tattoo idea, preferred placement, approximate size,
                      reference images, and availability. We will guide you through the next
                      steps.
                    </p>
                  </div>
                </details>
              </li>
              <li class="faq-item">
                <details class="faq-details" name="faq">
                  <summary class="title-h3 faq-summary">
                    <span>How much does a tattoo cost?</span>
                    <div class="faq-icon-wrapper">
                      <div class="faq-icon-box faq-icon-plus-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-plus-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                      </div>
                      <div class="faq-icon-box faq-icon-dash-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-dash-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
                        </svg>
                      </div>
                    </div>
                  </summary>
                  <div class="faq-content">
                    <p class="p-xl">
                      Pricing depends on the design, size, placement, complexity, and time
                      required. Share your idea with us to discuss an estimate.
                    </p>
                  </div>
                </details>
              </li>
              <li class="faq-item">
                <details class="faq-details" name="faq">
                  <summary class="title-h3 faq-summary">
                    <span>Can I bring my own tattoo design?</span>
                    <div class="faq-icon-wrapper">
                      <div class="faq-icon-box faq-icon-plus-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-plus-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                      </div>
                      <div class="faq-icon-box faq-icon-dash-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-dash-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
                        </svg>
                      </div>
                    </div>
                  </summary>
                  <div class="faq-content">
                    <p class="p-xl">
                      Yes, you can share your own design or reference images. The artist can
                      discuss how the concept may be adapted to suit your preferences and
                      placement.
                    </p>
                  </div>
                </details>
              </li>
              <li class="faq-item">
                <details class="faq-details" name="faq">
                  <summary class="title-h3 faq-summary">
                    <span> Do you create custom tattoo designs?</span>
                    <div class="faq-icon-wrapper">
                      <div class="faq-icon-box faq-icon-plus-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-plus-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                      </div>
                      <div class="faq-icon-box faq-icon-dash-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-dash-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
                        </svg>
                      </div>
                    </div>
                  </summary>
                  <div class="faq-content">
                    <p class="p-xl">
                      Custom concepts can be discussed as part of the booking process. Share your
                      inspiration and the details of what you would like to create.
                    </p>
                  </div>
                </details>
              </li>
              <li class="faq-item">
                <details class="faq-details" name="faq">
                  <summary class="title-h3 faq-summary">
                    <span>How should I prepare for my appointment?</span>
                    <div class="faq-icon-wrapper">
                      <div class="faq-icon-box faq-icon-plus-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-plus-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                      </div>
                      <div class="faq-icon-box faq-icon-dash-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-dash-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
                        </svg>
                      </div>
                    </div>
                  </summary>
                  <div class="faq-content">
                    <p class="p-xl">
                      Follow the studio's specific pre-appointment instructions. Generally, arrive
                      well-rested, eat beforehand, stay hydrated, and avoid arriving under the
                      influence of alcohol or drugs.
                    </p>
                  </div>
                </details>
              </li>
              <li class="faq-item">
                <details class="faq-details" name="faq">
                  <summary class="title-h3 faq-summary">
                    <span> How do I care for a new tattoo?</span>
                    <div class="faq-icon-wrapper">
                      <div class="faq-icon-box faq-icon-plus-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-plus-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                      </div>
                      <div class="faq-icon-box faq-icon-dash-box">
                        <svg xmlns="http://w3.org" width="24" height="24" fill="currentColor" class="bi bi-dash-lg"
                          viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
                        </svg>
                      </div>
                    </div>
                  </summary>
                  <div class="faq-content">
                    <p class="p-xl">
                      Follow your artist's aftercare instructions, keep the tattoo clean as
                      directed, and avoid picking or scratching healing skin. Contact a healthcare
                      professional if you develop signs of infection.
                    </p>
                  </div>
                </details>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="form-cta linear-gradient section-padding-xl" style="padding-bottom: 0px;" id="cta"
      style="background-image: url('<?php echo esc_url( $asset_img_uri . 'cta-background.jpg' ); ?>');">
      <div class="global-background-image" style="background-image: url('<?php echo esc_url( $asset_img_uri . 'cta-background.jpg' ); ?>')" aria-hidden="true">
      </div>
      <div class="o-container global-background-image--content">
        <div class="o-row">
          <div class="o-col-md-6">
            <p class="tag-xs o-border text-uppercase o-rounded-full text-primary">free consultation</p>
            <h2 class="title-h2 o-mt-20" id="portfolio-title">
              Tell Us About <span>Your Idea</span>
            </h2>
            <p class="o-mt-20 sub-title">
              Explore a selection of custom tattoos created with precision,
              creativity, and attention to detail.
            </p>
            <div class="o-d-none o-d-md-block">
              <ul class="contact-list o-d-flex o-flex-column o-gap-30 o-mt-50">
                <li>
                  <div class="o-d-flex o-gap-15 o-items-center">
                    <img src="<?php echo esc_url( $asset_img_uri . 'icons/email.svg' ); ?>" class="contact-list__icon" alt="email icon" width="80" height="80"
                      decoding="async" loading="lazy" />
                    <div>
                      <h4 class="contact-list__label">Email</h4>
                      <a href="mailto:management@spinnerinktattoos.com"
                        class="contact-list__link">management@spinnerinktattoos.com</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="o-d-flex o-gap-10 o-items-center">
                    <img src="<?php echo esc_url( $asset_img_uri . 'icons/smartphone.svg' ); ?>" class="contact-list__icon" alt="smartphone icon" width="80"
                      height="80" decoding="async" loading="lazy" />
                    <div>
                      <h4 class="contact-list__label">Call</h4>
                      <a href="tel:(323) 351-6963" class="contact-list__link">(323) 351-6963</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="o-d-flex o-gap-10 o-items-center">
                    <img src="<?php echo esc_url( $asset_img_uri . 'icons/whatsapp.svg' ); ?>" class="contact-list__icon" alt="whatsapp icon" width="80"
                      height="80" decoding="async" loading="lazy" />
                    <div>
                      <h4 class="contact-list__label">WhatsApp</h4>
                      <a href="https://wa.me/" class="contact-list__link" target="_blank"
                        rel="noopener noreferrer">123-456-7890</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="o-col-md-6">
            <form class="form-area form-area--background o-mt-30 o-mt-md-0">
              <input type="hidden" name="form_id" value="free-review">
              <div class="form-row">
                <div class="form-field field">
                  <label for="full_name">Name</label>
                  <input type="text" id="full_name" name="full_name" placeholder="Your Name" autocomplete="name"
                    required="" minlength="2" data-error="Please enter your name.">
                </div>
                <div class="form-field field">
                  <label for="business_email">E-mail</label>
                  <input type="email" id="business_email" name="business_email" placeholder="your@email.com"
                    autocomplete="email" required="" data-error="Please enter a valid email address.">
                </div>
              </div>
              <div class="form-field field">
                <label for="website_url">Phone Number</label>
                <input type="tel" id="website_url" name="website_url" placeholder="Your Phone Number" required=""
                  data-error="Please enter your phone number.">
              </div>
              <div class="form-row">
                <div class="form-field field">
                  <label for="full_name">Tattoo Area</label>
                  <input type="text" id="full_name" name="full_name" placeholder="e.g. Arm, Back, Leg, etc."
                    autocomplete="name" required="" minlength="2" data-error="Please enter the tattoo area.">
                </div>

                <div class="form-field field">
                  <label for="website_url">Approximate Size</label>
                  <input type="text" id="full_name" name="full_name" placeholder="e.g. Small, Medium, Large"
                    autocomplete="name" required="" minlength="2" data-error="Please enter the tattoo area.">
                </div>
              </div>
              <div class="form-row">
                <div class="form-field field">
                  <label for="tattoo_style">Style</label>
                  <select name="tattoo_style" id="tattoo_style" required="" data-error="Please select a style.">
                    <option value="">Select Style</option>
                    <option value="FINELINE">FINELINE</option>
                    <option value="TRADITIONAL">TRADITIONAL</option>
                    <option value="REALISTIC">REALISTIC</option>
                    <option value="BLACKWORK">BLACKWORK</option>
                    <option value="GEOMETRIC">GEOMETRIC</option>
                    <option value="NEO-TRADITIONAL">NEO-TRADITIONAL</option>
                    <option value="WATERCOLOR">WATERCOLOR</option>
                    <option value="OTHERS">OTHERS</option>

                  </select>
                </div>
                <div class="form-field field">
                  <label for="tattoo_artist">Perfect Artist</label>
                  <select name="tattoo_artist" id="tattoo_artist" required="" data-error="Please select an artist.">
                    <option value="">Select Artist</option>
                    <option value="Artist 1">Artist 1</option>
                    <option value="Artist 2">Artist 2</option>
                    <option value="Artist 3">Artist 3</option>
                  </select>
                </div>
              </div>
              <div class="form-field field file-upload">
                <label for="reference_image">Attach Reference Image</label>
                <input type="file" id="reference_image" name="reference_image" accept="image/jpeg,image/png,image/webp">
              </div>
              <div class="form-field field">
                <label for="comments">
                  Additional Comments
                  <span class="optional-tag">(Optional)</span>
                </label>
                <textarea id="comments" name="comments" rows="4" maxlength="3000"
                  placeholder="Tell me about your business, your goals, or the main challenge you'd like to discuss."></textarea>
              </div>
              <!-- Honeypot — leave exactly as-is on every form. -->
              <div class="hp-field" aria-hidden="true">
                <label for="hp_review">Leave this field empty</label>
                <input type="text" id="hp_review" name="hp_field_do_not_fill" data-skip-validate="" tabindex="-1"
                  autocomplete="off">
              </div>
              <button type="submit" class="o-btn o-btn-primary o-btn-xl o-mt-10 text-uppercase weight500">
                Send Request
              </button>
            </form>
          </div>
          <div class="o-col-md-12">
            <div class="o-d-block o-d-md-none">
              <ul class="contact-list o-d-flex o-flex-wrap o-gap-30 o-mt-20">
                <li>
                  <div class="o-d-flex o-gap-15 o-items-center">
                    <img src="<?php echo esc_url( $asset_img_uri . 'icons/email.svg' ); ?>" class="contact-list__icon" alt="email icon" width="80" height="80"
                      decoding="async" loading="lazy" />
                    <div>
                      <h4 class="contact-list__label">Email</h4>
                      <a href="mailto:management@spinnerinktattoos.com"
                        class="contact-list__link">management@spinnerinktattoos.com</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="o-d-flex o-gap-10 o-items-center">
                    <img src="<?php echo esc_url( $asset_img_uri . 'icons/smartphone.svg' ); ?>" class="contact-list__icon" alt="smartphone icon" width="80"
                      height="80" decoding="async" loading="lazy" />
                    <div>
                      <h4 class="contact-list__label">Call</h4>
                      <a href="tel:(323) 351-6963" class="contact-list__link">(323) 351-6963</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="o-d-flex o-gap-10 o-items-center">
                    <img src="<?php echo esc_url( $asset_img_uri . 'icons/whatsapp.svg' ); ?>" class="contact-list__icon" alt="whatsapp icon" width="80"
                      height="80" decoding="async" loading="lazy" />
                    <div>
                      <h4 class="contact-list__label">WhatsApp</h4>
                      <a href="https://wa.me/" class="contact-list__link" target="_blank"
                        rel="noopener noreferrer">123-456-7890</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="o-mt-50" aria-labelledby="location">
      <div class="o-container">
        <div class="o-row">
          <div class="o-col-md-12 o-mt-30 o-mt-md-50">
            <div class="map-wrap">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d468593.06695861265!2d-118.63761463069835!3d34.07138145020867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b969718e536b%3A0xe0ed312bdf076608!2s1435%20S%20La%20Cienega%20Blvd%20Ste%20D%2C%20Los%20Angeles%2C%20CA%2090035%2C%20USA!5e0!3m2!1sen!2sin!4v1793276848157!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
              </iframe>
            </div>
            <!-- !5e1 | !5e0  for map view change -->
            <style>
              .map-wrap {
                background: #0a0a0a;
                border-radius: 12px;
                overflow: hidden;
              }

              .map-wrap iframe {
                width: 100%;
                height: 500px;
                border: 0;
                filter: grayscale(1) invert(1) contrast(0.9) brightness(0.95);
              }
            </style>
          </div>
        </div>
      </div>
    </section>
  </main>
  </div>
  <footer class="footer o-mt-50" aria-labelledby="footer">
    <section class="footer__main section-padding relative">
      <div class="divider-fadeout absolute o-top-0"></div>
      <div class="o-container">
        <div class="o-row">
          <!-- Brand & Social -->
          <div class="o-col-md-3">
            <a href="/" class="footer__logo-link" aria-label="Your Company - Home">
              <img src="<?php echo esc_url( $asset_img_uri . 'spinnerinktattoos-logo.png' ); ?>" class="footer__logo" alt="Spinner Ink Tattoos" width="200" height="80"
                decoding="async" loading="lazy">
            </a>
            <ul class="o-d-flex o-gap-10 o-mt-30" aria-label="Social media links">
              <li>
                <a href="#">
                  <div class="social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                      class="bi bi-instagram" viewBox="0 0 16 16">
                      <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                      </path>
                    </svg>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-twitter-x" viewBox="0 0 16 16">
                      <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                      viewBox="0 0 16 16">
                      <path
                        d="M9.1 15V8.7h2.1l.3-2.4H9.1V4.8c0-.7.2-1.2 1.1-1.2h1.4V1.4c-.2 0-.9-.1-1.7-.1-1.8 0-3 1.1-3 3.2v1.8H5v2.4h1.9V15h2.2Z" />
                    </svg>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <!-- Navigation -->
          <div class="o-col-md-2 o-mt-30 o-mt-md-0">
            <h3 class="footer__title text-uppercase font-body weight400">
              Navigate
            </h3>
            <nav aria-label="Footer Navigation">
              <ul class="footer__ul o-mt-15 o-d-flex o-flex-column o-gap-10">
                <li>
                  <a href="#booking">Book Now</a>
                </li>
                <li>
                  <a href="#portfolio">Portfolio</a>
                </li>

                <li>
                  <a href="#faq">FAQ</a>
                </li>

                <li>
                  <a href="#blog">Blog</a>
                </li>

                <li>
                  <a href="#contact">Contact</a>
                </li>

              </ul>

            </nav>

          </div>


          <!-- Contact -->
          <div class="o-col-md-3 o-mt-30 o-mt-md-0">

            <h3 class="footer__title text-uppercase font-body weight400">
              Contact
            </h3>

            <address class="footer__address o-mt-15">

              <ul class="footer__ul o-d-flex o-flex-column o-gap-15">

                <li>
                  1435 S La Cienega Blvd Ste D, <br /> Los Angeles, CA 90035, <br /> United States
                </li>

                <li>
                  <a href="mailto:management@spinnerinktattoos.com" style="word-break: break-word; font-size: 16px;">
                    management@spinnerinktattoos.com
                  </a>
                </li>

                <li>
                  <a href="tel:(323) 351-6963">
                    (323) 351-6963
                  </a>
                </li>

              </ul>

            </address>

          </div>


          <!-- Opening Hours -->
          <div class="o-col-md-4 o-mt-30 o-mt-md-0">

            <h3 class="footer__title text-uppercase font-body weight400">
              Work Time
            </h3>

            <div class="footer__hours o-mt-15">

              <ul class="footer__ul o-d-flex o-flex-column o-gap-10">

                <li class="hours__item">
                  <span class="hours__day">Monday</span>
                  <span class="hours__dots" aria-hidden="true"></span>
                  <span class="hours__time">10:00 – 18:00</span>
                </li>

                <li class="hours__item">
                  <span class="hours__day">Tuesday</span>
                  <span class="hours__dots" aria-hidden="true"></span>
                  <span class="hours__time">10:00 – 18:00</span>
                </li>

                <li class="hours__item">
                  <span class="hours__day">Wednesday</span>
                  <span class="hours__dots" aria-hidden="true"></span>
                  <span class="hours__time">10:00 – 18:00</span>
                </li>

                <li class="hours__item">
                  <span class="hours__day">Thursday</span>
                  <span class="hours__dots" aria-hidden="true"></span>
                  <span class="hours__time">10:00 – 18:00</span>
                </li>

                <li class="hours__item">
                  <span class="hours__day">Friday</span>
                  <span class="hours__dots" aria-hidden="true"></span>
                  <span class="hours__time">10:00 – 18:00</span>
                </li>

                <li class="hours__item">
                  <span class="hours__day">Saturday</span>
                  <span class="hours__dots" aria-hidden="true"></span>
                  <span class="hours__time">10:00 – 17:00</span>
                </li>

                <li class="hours__item hours__item--closed">
                  <span class="hours__day">Sunday</span>
                  <span class="hours__dots" aria-hidden="true"></span>
                  <span class="hours__time">Closed</span>
                </li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </section>
    <!-- Copyright -->
    <div class="copy-right o-text-center">
      <p class="copy-right__text">
        &copy; 2026
        <a href="/">
          Your Company
        </a>.
        All Rights Reserved.
      </p>
    </div>
  </footer>

  <!-- <div style="height: 100vh"></div> -->
  <!-- Side Menu -->
  <div class="o-side-menu" id="js-side-menu">
    <nav class="o-side-menu__nav">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li class="o-side-menu__dropdown">
          <a href="#">About</a>
          <div class="o-side-menu__dropdown-button" id="js-dropdown-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
              class="bi bi-plus-lg o-side-menu__plus" id="js-show" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
              class="bi bi-dash-lg o-side-menu__subs" id="js-hide" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
            </svg>
          </div>
          <ul class="o-side-menu__dropdown-menu" id="js-mobile-dropdown">
            <li><a href="#">Service 01</a></li>
            <li><a href="#">Service 02</a></li>
            <li><a href="#">Service 03</a></li>
            <li><a href="#">Service 04</a></li>
            <li><a href="#">Service 05</a></li>
          </ul>
        </li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>
  <!-- /Side Menu -->
  <?php get_footer(); ?>