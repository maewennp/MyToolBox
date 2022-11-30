<?php
template('header', array(
    'title' => 'Boite à outils • Accueil',
));

$messages = select('admin_messages');
$logs = select('logs');

?>

<section id="homepage" class="homepage">
    <div class="container">
        <div class="section-title">
            <h2>Espace adminstrateur</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content">
                <h3>Messages reçus depuis le formulaire de contact</h3>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($messages as $message): ?>
                                <tr>
                                    <th scope="row"><?php echo $message['id']; ?></th>
                                    <td><?php echo $message['name']; ?></td>
                                    <td><?php echo $message['email']; ?></td>
                                    <td><?php echo $message['message']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12 pt-4 pt-lg-0 content">
                <h3>Logs</h3>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Formulaire</th>
                                <th scope="col">Data</th>
                                <th scope="col">Result</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($logs as $log): ?>
                                <tr>
                                    <th scope="row"><?php echo $log['id']; ?></th>
                                    <td><?php echo $log['form']; ?></td>
                                    <td><?php echo $log['data']; ?></td>
                                    <td><?php echo $log['result']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php template('footer');
