<!DOCTYPE html>
<?php
include '../include/header.php'
?>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/bonbon1.bmp')">
        <div class="carousel-caption d-none d-md-block">
          <h3>First Slide</h3>
          <p>This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/bonbon2.bmp')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Second Slide</h3>
          <p>This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/bonbon3.bmp')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Third Slide</h3>
          <p>This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Header -->
  <header id="head">
      <div class="container">
          <div class="row">
              <h1 class="lead">Premier Titre</h1><br>
              <p class="tagline">dans le header <a href="#">Permalien</a></p>
              <p><a class="btn btn-default btn-lg" role="button">par florian menu</a> <a class="btn btn-action btn-lg" role="button">on sais pas pourquoi!</a></p>
          </div>
      </div>
  </header>
  <!-- /Header -->

  <!-- Intro -->
  <div class="container text-center">
      <br> <br>
      <h2 class="thin">The best place to tell people why they are here</h2>
      <p class="text-muted">
          The difference between involvement and commitment is like an eggs-and-ham breakfast:<br>
          the chicken was involved; the pig was committed.
      </p>
  </div>
  <!-- /Intro-->


  <!-- container -->
  <div class="container">

      <h2 class="text-center top-space">Frequently Asked Questions</h2>
      <br>

      <div class="row">
          <div class="col-sm-6">
              <h3>Which code editor would you recommend?</h3>
              <p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
          </div>
          <div class="col-sm-6">
              <h3>Nice header. Where do I find more images like that one?</h3>
              <p>
                  Well, there are thousands of stock art galleries, but personally,
                  I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a>
                  and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
          </div>
      </div> <!-- /row -->

      <div class="row">
          <div class="col-sm-6">
              <h3>Can I use it to build a site for my client?</h3>
              <p>
                  Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>,
                  which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work.
              </p>
          </div>
          <div class="col-sm-6">
              <h3>Can you customize this template for me?</h3>
              <p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
          </div>
      </div> <!-- /row -->

      <div class="jumbotron top-space">
          <h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
          <p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
      </div>

</div>	<!-- /container -->

  <!-- Social links.-->
  <section id="social">
      <div class="container">
          <div class="wrapper clearfix">
              <!-- AddThis Button BEGIN -->
              <div class="addthis_toolbox addthis_default_style">
              <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
              <a class="addthis_button_tweet"></a>
              <a class="addthis_button_linkedin_counter"></a>
              <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
              </div>
              <!-- AddThis Button END -->
          </div>
      </div>
  </section>
  <!-- /social links -->

<?php
include '../include/footer.php'
?>
