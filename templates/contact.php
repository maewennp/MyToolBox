<?php
template('header', array(
    'title' => 'Boite à outils • Accueil',
));

$messages = [];
// Send contact form to database
if (!empty($_POST)) {
    $submited_items = array(
        'name' => htmlspecialchars($_POST['name'], ENT_QUOTES),
        'email' => htmlspecialchars($_POST['email'], ENT_QUOTES),
        'subject' => htmlspecialchars($_POST['subject'], ENT_QUOTES),
        'message' => htmlspecialchars($_POST['message'], ENT_QUOTES)
    );

    $validated_items = validate($submited_items, array(
        'name' => array(
            'label' => 'Name',
            'required' => true,
            'sanitize' => 'string',
            'min' => 2,
            'regexp' => '/^[a-zA-Z0-9\s]+$/' /*ajouter \s pour que les espaces soient pris en compte*/
        ),
        'email' => array(
            'label' => 'Email',
            'required' => true,
            'sanitize' => 'email',
        ),
        'subject' => array(
            'label' => 'Subject',
            'required' => true,
            'sanitize' => 'string',
        ),
        'message' => array(
            'label' => 'Message',
            'required' => true,
            'sanitize' => 'string',
        )
    ));

    $result = check_validation($validated_items);

    if (!is_passed($result)) {
        $messages = $result;
    } else {
        if(insert('admin_messages', $result)) {
            $messages['success'][] = 'Message envoyé !';

            //ajout de cet partie du code pour l'envoi des mails quand submit le formulaire complété
            // headers pour l'email
            $headers = "From: norep.mytoolbox@gmail.com \r\n";
            $headers .= "Reply-To: norep.mytoolbox@gmail.com \r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";

            // adresse e-mail à qui envoyer le message
            $to = $_POST['email'];
            // sujet du message
            $object = "Confirmation de réception de votre demande";

            // message
            $message = 'Bonjour '.$_POST['name'].'<br><br>';
            $message .='Nous avons bien reçu votre demande concernant "'.$_POST['subject'] .'"<br>';
            $message .="Nous vous remercions pour votre proposition et nous reviendrons vers vous dans les plus brefs délais.
                        <br><br> Bien cordialement, <br> L'équipe de MyToolBox";

            // fonction pour envoyer l'e-mail
            mail($to, $object, $message, $headers);
        }
    }
}
?>

    <!-- ======= About Section ======= -->
    <section id="homepage" class="homepage">
        <div class="container">
            <div class="section-title">
                <h2>Il vous manque une fonctionnalité ? </h2>
                <p>La boite à outils est un site qui vous permet de réaliser un bon nombre de calculs ou transformations nécessaires au quotidien. Mais il peut parfois être incomplet pour certains.</p>

                <p>Si vous avez une demande particulière quant aux fonctionnalités du site, n'hésitez pas à nous contacter grâce au formulaire de contact et nous vous répondrons dans les plus brefs délais.</p>
            </div>

            <?php getAlert($messages); ?>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 content">
                    <h3>Formulaire de contact</h3>
                    <p class="fst-italic">
                        Veuillez renseigner tous les champs ci-dessous, s'il vous plaît.
                    </p>
                    <form id="contact-form" name="contact-form" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Votre nom</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Votre email (pour vous répondre)</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Votre email"> <!-- changement de type text -> email pour la validation back -->
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Objet</label>
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Objet de votre message">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message">Votre demande</label>
                                    <textarea id="message" name="message" rows="5" class="form-control md-textarea" placeholder="Votre message ici"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        J'accepte que mes données soient utilisées dans le cadre de demande de fonctionnalité
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center text-md-start">
                                    <button type="submit" class="btn  btn-block btn-primary">Envoyer ma demande</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section><!-- End Home Section -->


<?php template('footer');
