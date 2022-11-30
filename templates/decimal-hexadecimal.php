<?php
    template('header', array(
        'title' => 'Boite à outils • Décimal - Hexadécimal',
    ));
?>

<section id="homepage" class="homepage">
    <div class="container">
        <div class="section-title">
            <h2>Convertisseur système décimal positif en binaire </h2>
        </div>

        <div class="row">
            <figure class="bg-light rounded p-3">
                <blockquote cite="https://www.huxley.net/bnw/four.html">
                    <p>
                        Le système binaire (du latin binārĭus, « double ») est le système de numération utilisant la base 2. On nomme couramment bit (de l'anglais binary digit, soit « chiffre binaire ») les chiffres de la numération binaire positionnelle. Un bit peut prendre deux valeurs, notées par convention 0 et 1.
                    </p>   <p>
                        Le système binaire est utile pour représenter le fonctionnement de l'électronique numérique utilisée dans les ordinateurs. Il est donc utilisé par les langages de programmation de bas niveau.
                    </p>
                </blockquote>
                <figcaption><cite><a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_binaire">Wikipedia</a></cite></figcaption>
            </figure>
        </div>

        <div class="row">
            <fieldset class="col-6 mt-4">
                <legend>Convertisseur</legend>
                <form action="" name="decimal-hexadecimal">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="decimal">Décimal</label>
                            <div class="input-group">
                                <input id="decimal" name="decimal" type="number" min="0" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="hex">Héxadécimal</label>
                            <div class="input-group">
                                <input id="hex" name="hex" type="text"  class="form-control" disabled>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="binary">Binaire</label>
                            <div class="input-group">
                                <input id="binary" name="binary" type="text" min="0" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </form>
            </fieldset>
            </div>
        </div>
</section>


    <script type="text/javascript">
        window.addEventListener('load', () => {
            let forms = document.forms;
            let decimal = forms['decimal-hexadecimal'].elements['decimal'];

            function dec2Hex(dec) {
                return Math.abs(dec).toString(16);
            }

            function convertToBinary(x) {
                let bin = 0;
                let rem, i = 1, step = 1;
                while (x !== 0) {
                    rem = x % 2;
                    console.log(
                        `Step ${step++}: ${x}/2, Remainder = ${rem}, Quotient = ${parseInt(x/2)}`
                    );
                    x = parseInt(x / 2);
                    bin = bin + rem * i;
                    i = i * 10;
                }
                return bin;
            }

            decimal.addEventListener('input', () => {
                let hex = forms['decimal-hexadecimal'].elements['hex'];
                let binary = forms['decimal-hexadecimal'].elements['binary'];

                hex.value = dec2Hex(decimal.value);
                binary.value = convertToBinary(decimal.value);
            });

        });
    </script>

<?php template('footer');
