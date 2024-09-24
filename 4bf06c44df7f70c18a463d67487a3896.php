<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MoonlightBlooms</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <link rel="stylesheet" href="css/about.css" />
  </head>

  <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">


    <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
    <section id="Tentang" class="position-relative">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-12 Tentang-tagline my-auto">
            <h1 class="text-uppercase">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section id="About" class="position-relative">
      <div class="container w-100 h-100">
        <div class="row">
          <div class="col-md-6">
            <div class="tentang-1 py-5">
              <h1 class="pt-5 pb-3">AiraFlorist</h1>
              <h6 class="py-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eligendi exercitationem itaque id minus aliquam ducimus vel
                reprehenderit omnis cupiditate culpa sunt nemo, fugit voluptatum
                modi pariatur. Pariatur quaerat nihil odit?
              </h6>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex
                fugiat nobis reiciendis, amet adipisci ipsum iste! Ad molestias,
                aperiam natus placeat ducimus sapiente laborum dolor minus
                perferendis doloribus animi maiores.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-galery-1 py-5" style="width: 100%">
              <div class="about-ga-1"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-galery-1 py-5" style="width: 100%">
              <div class="about-ga-2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <section id="VisiMisi" class="position-relative">
      <div class="container w-100 h-100">
        <div class="row">
          <div class="col-md-3">
            <div class="card visi-galery-1 py-5" style="width: 100%">
              <div class="visi-ga-1"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card visi-galery-1 py-5" style="width: 100%">
              <div class="visi-ga-2"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="Visi py-5">
              <h1 class="py-3">Visi</h1>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex
                fugiat nobis reiciendis, amet adipisci ipsum iste! Ad molestias,
                aperiam natus placeat ducimus sapiente laborum dolor minus
                perferendis doloribus animi maiores. Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Molestiae nostrum libero aperiam
                laudantium, numquam voluptatibus accusantium omnis dolorem fuga
                ut! Autem accusantium obcaecati cumque quae reiciendis sit
                nesciunt laborum. Non?
              </p>
            </div>
          </div>
        </div>

        <!--  -->

        <div class="row">
          <div class="col-md-6">
            <div class="misi py-5">
              <h1 class="py-3">Misi</h1>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex
                fugiat nobis reiciendis, amet adipisci ipsum iste! Ad molestias,
                aperiam natus placeat ducimus sapiente laborum dolor minus
                perferendis doloribus animi maiores. Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Molestiae nostrum libero aperiam
                laudantium, numquam voluptatibus accusantium omnis dolorem fuga
                ut! Autem accusantium obcaecati cumque quae reiciendis sit
                nesciunt laborum. Non?
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card misi-galery-1 py-5" style="width: 100%">
              <div class="misi-ga-1"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html><?php /**PATH C:\xampp1\htdocs\MoonlightBlooms\resources\views/about.blade.php ENDPATH**/ ?>