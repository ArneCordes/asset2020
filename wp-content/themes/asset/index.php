<?php get_header(); ?>

<?php if( have_posts()) : while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <ul class="image-grid">
      <li class="image-grid__item image-grid__item--highlight">
        <a href="#" class="image-grid__item-inner">
          <div class="image-grid__content image-grid__content--vertical">
            <div class="image-grid__headline">
              Spascher Gärten /<br>
              Wildeshausen
            </div>
            <span class="image-grid__more">
              <span class="image-grid__more-text">
                Zum Projekt
              </span>
            </span>
          </div>
          <div class="image-grid__image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/haeuser-1.jpg" class="image-grid__image" alt="Dummy">
          </div>
        </a>
      </li>
      <li class="image-grid__item image-grid__item--default">
        <a href="#" class="image-grid__item-inner">
          <div class="image-grid__content image-grid__content--overlay">
            <div class="image-grid__headline">
              Veerner Höfe / Verden
            </div>
            <span class="image-grid__more">
              <span class="image-grid__more-text">
                Mehr lesen
              </span>
            </span>
          </div>
          <div class="image-grid__image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/haeuser-1.jpg" class="image-grid__image" alt="Dummy">
          </div>
        </a>
      </li>
      <li class="image-grid__item image-grid__item--default">
        <a href="#" class="image-grid__item-inner">
          <div class="image-grid__content image-grid__content--overlay">
            <div class="image-grid__headline">
              Brockes’sches Palais
            </div>
            <span class="image-grid__more">
              <span class="image-grid__more-text">
                Mehr lesen
              </span>
            </span>
          </div>
          <div class="image-grid__image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/haeuser-1.jpg" class="image-grid__image" alt="Dummy">
          </div>
        </a>
      </li>
    </ul>
  </div>

  <div class="section section--bottomspace-x2" data-css-animate>
    <div class="container container--wide">
      <h2 class="section__title section__title--arrow">
        <span class="section__title-text">
          News / Aktuelles
        </span>
      </h2>
      <div class="news-slider" data-css-animate>
        <div class="news-slider__wrapper swiper">
          <ul class="news-slider__items swiper-wrapper">
            <li class="news-slider__item swiper-slide">
              <div class="news-slider__roof">
                Unternehmen
              </div>
              <div class="news-slider__content">
                <h3 class="news-slider__headline">
                  DGNB- Vorzertifikat in Gold für Quartiere
                </h3>
                <div class="news-slider__text">
                  <p>
                    Das Klimaschutzprojekt »Hohe Düne« setzt technisch, ökologisch, ökonomisch und funktional Maßstäbe. Es bietet Eigentümern und Nutzern mehr Komfort, geringere Nebenkosten, einen höheren Marktwert und Wohnqualität. Dafür wurde es mit dem DGNB (Vor-)Zertifikat in Gold ausgezeichnet.
                  </p>
                </div>
              </div>
            </li>
            <li class="news-slider__item swiper-slide">
              <div class="news-slider__roof">
                Veener Höfe
              </div>
              <div class="news-slider__content">
                <h3 class="news-slider__headline">
                  Investor spricht von Stadtbalkon
                </h3>
                <div class="news-slider__text">
                  <p>
                    <i class="color-main">Kreiszeitung |</i> Das Verdener Großprojekt Stadtkante bekommt Konturen. Die Stadtpolitik will innerhalb von drei Wochen einen Bebauungsplan auf den Weg bringen. Vorgesehen ist eine Verteilung auf drei Gebäudekomplexe. Investor ist die Asset-Firmengruppe aus Bremen.
                  </p>
                </div>
              </div>
            </li>
            <li class="news-slider__item swiper-slide">
              <div class="news-slider__roof">
                Veener Höfe
              </div>
              <div class="news-slider__content">
                <h3 class="news-slider__headline">
                  Neuer Name für die Verdener Stadtkante
                </h3>
                <div class="news-slider__text">
                  <p>
                    <i class="color-main">Weserkurier |</i> Die Verdener Stadtkante hat einen neuen Namen: Als »Veerner Höfe« soll das Projekt weitergeführt werden. Der Architekt stellte die Pläne nun dem Städte-planungsausschuss vor.
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="news-slider__pagination swiper-pagination"></div>
        </div>
        <div class="news-slider__nav">
          <div class="news-slider__nav-buttons slider__nav-buttons">
            <button class="news-slider__nav-button slider__button slider__button--prev swiper-button-prev">
              <span class="sr-only">Zurück</span>
            </button>
            <button class="news-slider__nav-button slider__button slider__button--next swiper-button-next">
              <span class="sr-only">Vor</span>
            </button>
          </div>
        </div>
        <div class="news-slider__footer footer-button__wrapper">
          <a href="#" class="footer-button__button button hover-text">
            <span class="hover-text__text">
              Mehr Neuigkeiten
            </span>
            <span class="hover-text__overlay">
              <span class="hover-text__overlay-text">
                Zum News-Blog
              </span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section section--bg-lightgray section--topspace-halve section--bottomspace-halve">
    <div class="container">
      <div class="text-image text-image--image-offset" data-css-animate>
        <div class="text-image__content">
          <h2 class="text-image__headline">
            Das Unternehmen und<br>
            <span class="color-main">die Menschen dahinter</span>
          </h2>
          <div class="text-image__text text">
            <p>
              Die ASSET Firmengruppe wurde 1998 in Bremen gegründet. Seit dem haben wir uns mit solide geplanten Immobilienprojekten einen guten Namen gemacht . Unsere Bandbreite reichte von hochwertigen Wohnimmobilien, Verbraucher-märkten und Einkaufszentren bis hin zur Sanierung von historischen Baudenkmälern. 2016 wurde unser Unternehmen gemäß DIN ISO 9001:2015 zertifiziert. ASSET bedeutet »Vermögenswert«. Die Schaffung und Betreuung Ihrer Vermögenswerte ist uns eine Verpflichtung.
            </p>
          </div>
          <a href="#" class="text-image__button button">
            Mehr über uns
          </a>
        </div>
        <div class="text-image__media">
          <div class="text-image__image-wrapper responsive-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/bank-natur.jpg" class="text-image__image responsive-image" alt="Dummy">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section" data-css-animate>
    <div class="container container--wide">
      <h2 class="section__title section__title--text-left">
        <span class="section__title-text">
          Unternehmen
        </span>
      </h2>
      <ul class="facts">
        <li class="facts__item">
          <div class="facts__number" data-count="5000">
            5.000
          </div>
          <div class="facts__caption">
            Wohn- und Geschäftseinheiten saniert oder gebaut
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="730">
            730
          </div>
          <div class="facts__caption">
            Millionen Euro<br>
            Projektvolumen insgesamt
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="180">
            180
          </div>
          <div class="facts__caption">
            Millionen Euro Projektvolumen In Bau und Entwicklung
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="6">
            06
          </div>
          <div class="facts__caption">
            Aktuelle Projekte
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="13">
            13
          </div>
          <div class="facts__caption">
            Projekte Insgesamt
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="section section--half-bg" data-css-animate>>
    <div class="container container--wide">
      <h2 class="section__title">
        <span class="section__title-text">
          Referenzen
        </span>
      </h2>
    </div>
    <div class="container">
      <div class="image-slider">
        <div class="image-slider__wrapper">
          <div class="image-slider__swiper swiper">
            <ul class="image-slider__slides swiper-wrapper">
              <li class="image-slider__slide swiper-slide">
                <a href="#" class="image-slider__anchor">
                  <div class="image-slider__image-wrapper responsive-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/europaquartier-square.jpg" class="image-slider__image responsive-image" alt="Dummy">
                  </div>
                  <div class="image-slider__caption">
                    01.<br>
                    Europaquartier
                  </div>
                </a>
              </li>
              <li class="image-slider__slide swiper-slide">
                <a href="#" class="image-slider__anchor">
                  <div class="image-slider__image-wrapper responsive-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/brockessches-palais-square.jpg" class="image-slider__image responsive-image" alt="Dummy">
                  </div>
                  <div class="image-slider__caption">
                    02.<br>
                    Brockessches Palais
                  </div>
                </a>
              </li>
              <li class="image-slider__slide swiper-slide">
                <a href="#" class="image-slider__anchor">
                  <div class="image-slider__image-wrapper responsive-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/friesengut-square.jpg" class="image-slider__image responsive-image" alt="Dummy">
                  </div>
                  <div class="image-slider__caption">
                    03.<br>
                    Friesengut
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="image-slider__nav">
            <div class="image-slider__nav-buttons slider__nav-buttons slider__nav-buttons--white">
              <button class="image-slider__nav-button slider__button slider__button--prev swiper-button-prev">
                <span class="sr-only">Zurück</span>
              </button>
              <button class="image-slider__nav-button slider__button slider__button--next swiper-button-next">
                <span class="sr-only">Vor</span>
              </button>
            </div>
          </div>
        </div>
        <div class="image-slider__footer footer-button__wrapper">
          <a href="#" class="footer-button__button button button--white hover-text">
            <span class="hover-text__text">
              Weitere Referenzen
            </span>
            <span class="hover-text__overlay">
              <span class="hover-text__overlay-text">
                Zu den Projekten
              </span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section" data-css-animate>
    <div class="container">
      <h2 class="section__title section__title--text-center">
        <span class="section__title-text">
          Kontakt
        </span>
      </h2>
      <div class="contact">
        <h2 class="contact__headline">
          Sprechen sie uns an!
        </h2>
        <div class="contact__text">
          <p>
            Sie haben Fragen zu unserem Unternehmen oder interessieren sich für ein spezielles Objekt? Sprechen Sie uns an, oder schreiben Sie uns eine Mail! Wir helfen Ihnen gerne!
          </p>
        </div>
        <ul class="contact__buttons">
          <li class="contact__buttons-item">
            <a href="#" class="contact__buttons-anchor">
              <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/phone.png" class="contact__buttons-icon" alt="Dummy">
              <div class="contact__buttons-text">
                Jetzt anrufen
              </div>
            </a>
          </li>
          <li class="contact__buttons-item">
            <a href="#" class="contact__buttons-anchor">
              <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/plane.png" class="contact__buttons-icon" alt="Dummy">
              <div class="contact__buttons-text">
                Mail schreiben
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
