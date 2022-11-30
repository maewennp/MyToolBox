<?php
template('header', array(
    'title' => 'Boite à outils • Code césar',
));
?>

    <!-- ======= CESAR ======= -->
    <section id="homepage" class="homepage">
        <div class="container">
            <div class="section-title">
                <h2>Coder ou décoder un texte à l'aide du Code César </h2>
            </div>

            <div class="row">
                <figure class="bg-light rounded p-3">
                    <blockquote cite="https://www.huxley.net/bnw/four.html">
                        <p>
                            Le code César est une méthode de cryptage qui consiste à décaler chaque lettre de l'alphabet d'un certain rang. Ce code est le plus simple et le plus connu de la cryptographie, mais cela reste très amusant à utiliser.
                        </p>

                        <p>
                            Le code César consiste à substituer une lettre par une autre un plus loin dans l'alphabet, c'est-à-dire qu'une lettre est toujours remplacée par la même lettre et que l'on applique le même décalage à toutes les lettres, cela rend très simple le décode d'un message puisqu'il y a 25 décalages possibles.
                        </p>
                    </blockquote>
                    <figcaption><cite><a href="https://calculis.net/code-cesar">Calculis.net</a></cite></figcaption>
                </figure>
            </div>

            <div class="row justify-content-around">
                <fieldset class="col-5 mt-4">
                    <legend>Chiffrer</legend>
                    <form action="" method="POST" name="cesar">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="clear">Le texte à chiffrer</label>
                                <div class="input-group">
                                    <textarea id="clear" name="clear" rows="10" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="key">Clé</label>
                                <div class="input-group">
                                    <input id="key" name="key" type="number" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="result">Résultat</label>
                                <p id="result"></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn-block btn btn-primary">Chiffrer</button>
                            </div>
                        </div>
                    </form>
                </fieldset>

                <fieldset class="col-5 mt-4  ms-md-auto">
                    <legend>Déchiffrer</legend>
                    <form action="" method="POST" name="cesar">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="result">Le texte à déchiffrer</label>
                                <div class="input-group">
                                    <textarea id="result" name="result" rows="10" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="key">Clé</label>
                                <div class="input-group">
                                    <input id="key" name="key" type="number" class="form-control" >
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="clear">Résultat</label>
                                <p id="clear"></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn-block btn btn-primary">Déchiffrer</button>
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

        for(form of forms){
            form.addEventListener('submit', async (event) => {
                event.preventDefault();

                const formData = new FormData(event.target).entries()

                const response = await fetch('/api/post', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(
                        Object.assign(Object.fromEntries(formData), {form: event.target.name})
                    )
                });

                const result = await response.json();

                let inputName = Object.keys(result.data)[0];

                event.target.querySelector(`#${inputName}`).innerHTML= result.data[inputName];

            })
        }
    });
</script>


<?php template('footer');
