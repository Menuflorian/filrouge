<?php
include '../include/header.php'
?>

<!-- Page Content -->
<div class="container" id="contacthead">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="red lighten-4 white-text text-uppercase font-weight-bold text-center py-2" id="Contact">Contact</h1>
    <!-- Content Row -->
    <span class="border-0">
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-7 mb-4">
                <!-- Embedded Google Map -->
                <div class="shadow-lg p-3 mb-5 bg-white rounded" id="mamap">
                    <iframe width="100%" height="635" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=51100%20reims+(Gourmandise)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/" class="border-0">Map a route</a></iframe>
                </div>
            </div>
            <!-- Contact Details Column -->

            <div class="col-lg-5 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Form contact -->
                        <form>
                            <h2 class="card-header red lighten-4 white-text text-uppercase font-weight-bold text-center py-5">Une question?</h2>
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form31" class="form-control">
                                <label for="form31">Nom</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="form21" class="form-control">
                                <label for="form21">Email</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="form321" class="form-control">
                                <label for="form341">Sujet</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-pencil prefix grey-text"></i>
                                <textarea type="text" id="form81" class="md-textarea" style="height: 100px"></textarea>
                                <label for="form81">Votre message</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-info btn-lg">Envoyer</button>
                            </div>
                        </form>
                        <!-- Form contact -->
                    </div>
                </div>
            </div>
        </div>
    </span>

    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col-lg-12 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <!-- Form contact -->

                        <h3 class="card-header red lighten-4 white-text text-uppercase font-weight-bold text-center py-2">Détails</h3>
                        <p>
                            19 rue de Bioko
                            <br>Reims 51100
                            <br>
                        </p>
                        <p>
                            <i class="fa fa-phone prefix grey-text"></i>: 02-02-02-02-02
                        </p>
                        <p>
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <a href="mailto:name@example.com">Contact@Gourmandise.fr
                            </a>
                        </p>

                    <!-- Form contact -->
                </div>
            </div>
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->


    </main>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

    <?php
  include '../include/footer.php'
  ?>
