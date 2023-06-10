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
            <h2>Espace administrateur</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content">
                <h3>Messages reçus depuis le formulaire de contact</h3>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body table-reponsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($messages as $message): ?>
                                <tr>
                                    <th><?php echo $message['id']; ?></th>
                                    <td><?php echo $message['name']; ?></td>
                                    <td><?php echo $message['email']; ?></td>
                                    <td class="text-break"><?php echo $message['message']; ?></td>
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
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Formulaire</th>
                                <th>Data</th>
                                <th>Result</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($logs as $log): ?>
                                <tr>
                                    <th><?php echo $log['id']; ?></th>
                                    <td><?php echo $log['form']; ?></td>
                                    <td class="text-break"><?php echo $log['data']; ?></td>
                                    <td class="text-break"><?php echo $log['result']; ?></td>
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
