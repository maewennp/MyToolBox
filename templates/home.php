<?php
template('header', array(
    'title' => 'Boite à outils • Accueil',
));
?>

    <!-- ======= About Section ======= -->
    <section id="homepage" class="homepage">
        <div class="container">
            <div class="section-title">
                <h1>Bienvenue</h1>
                <h2>Dans la boite à outils </h2>
                <p>La boite à outils est un site accessible 24h/24 et 7j/7 qui vous permet de réaliser un bon nombre de calculs ou transformations nécessaires au quotidien.</p>
                <p>Dans les différentes rubriques ci-dessous, vous retrouverez tous les calculs et transformations possibles sur notre site.</p>
                <p>Transformer 1/4 de litres en millilitres ou encore convertir des euros en dollars n'a jamais été aussi simple !</p>
            </div>

        </div>
    </section><!-- End Home Section -->


    <section id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4 class="title"><a href="<?= home_url(); ?>/cesar" class="nav-link scrollto <?= is_current_url('/cesar') ? 'active' : '' ?>">Code César</a></h4>
                    <p class="description">Chiffrez et déchiffrez vos textes.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="<?= home_url(); ?>/devises" class="nav-link scrollto <?= is_current_url('/devises') ? 'active' : '' ?>">Convertisseur de devises</a></h4>
                    <p class="description">Convertissez vos devises. <br>Plusieurs choix de devises</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="<?= home_url(); ?>/pourcentage" class="nav-link scrollto <?= is_current_url('/pourcentage') ? 'active' : '' ?>">Pourcentage</a></h4>
                    <p class="description">Calculez le pourcentage d'un nombre sous toutes ses formes</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="<?= home_url(); ?>/decimal-hexadecimal" class="nav-link scrollto <?= is_current_url('/decimal-hexadecimal') ? 'active' : '' ?>">Décimal en héxadécimal</a></h4>
                    <p class="description">Donnez un nombre, on vous donnera son héxadécimal et son binaire</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="<?= home_url(); ?>/regle-de-trois" class="nav-link scrollto <?= is_current_url('/regle-de-trois') ? 'active' : '' ?>">Règle de troix</a></h4>
                    <p class="description">Découvrer la règle de trois en un clic</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="<?= home_url(); ?>/volume" class="nav-link scrollto <?= is_current_url('/volume') ? 'active' : '' ?>">Convertisseur de volumes</a></h4>
                    <p class="description">Que vaut un litre en millilitres ?</p>
                </div>
            </div>
        </div>
    </section>

<?php template('footer');

