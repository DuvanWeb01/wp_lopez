jQuery(document).ready(function($){
    $('.lp-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        autoplay: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

    $('.lp-carousel-proyects').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        autoplay: true,
        dots: true,
    });

    $('.lp-tipos__car').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
      autoplay: true,
      dots: false,
    });

    $('#lp-galeria a').append('<i class="far fa-eye"></i>');
    $('.add_to_wishlist').html('<i class="far fa-heart"></i>');
    $('.quantity').prepend('<span class="lp-cantidad">Cantidad</span>');
    
    $('.widget_product_categories .product-categories .cat-parent a').first().append('<i class="fas fa-sort-down ml-2"></i>');

    $('.widget_product_categories .product-categories .cat-parent a i').click(function(e){
      e.preventDefault();
      $(this).parent().next().slideToggle();
    })
});