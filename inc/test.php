 
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="third-party/OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="third-party/OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

      <!-- javascript -->
    <script src="third-party/OwlCarousel/docs/assets/vendors/jquery.min.js"></script>
    <script src="third-party/OwlCarousel/docs/assets/owlcarousel/owl.carousel.js"></script>
  </head>
  <body>

 

    <!--  Demos -->
    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>1</h4>
            </div>
            <div class="item">
              <h4>2</h4>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div>
            <div class="item">
              <h4>9</h4>
            </div>
            <div class="item">
              <h4>10</h4>
            </div>
            <div class="item">
              <h4>11</h4>
            </div>
            <div class="item">
              <h4>12</h4>
            </div>
          </div>
           
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                dots: false,
                autoplay:true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
          </script>
        </div>
      </div>
    </section>

     

    <!-- vendors -->
    <script src="third-party/OwlCarousel/docs/assets/vendors/highlight.js"></script>
    <script src="third-party/OwlCarousel/docs/assets/js/app.js"></script>
  </body>
</html>