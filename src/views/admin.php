<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="views/css/admin.css">
</head>
<body>
<h1>Admin pagina</h1>
<p>Welkom, Admin!</p>
<div class="message-table">
    <h1>Berichten</h1>
    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>email</th>
            <th>onderwerp</th>
            <th>bericht</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($mails as $mail): ?>
            <tr>
                <td><?php echo $mail['Name']; ?></td>
                <td><?php echo $mail['Email']; ?></td>
                <td><?php echo $mail['Subject']; ?></td>
                <td><?php echo $mail['Message']; ?></td>
                <td>
                    <form action="/mail/delete/<?php echo $mail['Mailid']; ?>" method="POST">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>
<div class="project-table">
    <h1>Projecten</h1>
    <table>
        <thead>
        <tr>
            <th>Project naam</th>
            <th>Beschrijving</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?php echo $project['Title']; ?></td>
                <td><?php echo $project['Description']; ?></td>
                <td>
                    <form action="/project/delete/<?php echo $project['Projectid']; ?>" method="POST">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>
<div class="form-container">
    <h2>Nieuw project</h2>
    <form onsubmit="" action="" method="POST">
        <div class="fields">
            <div class="field title">
                <input type="text" name="title" placeholder="Titel" required>
            </div>
        </div>
        <div class="field textarea">
            <textarea cols="30" rows="10" name="description" placeholder="Beschrijving.." required></textarea>
        </div>
        <div class="button-area">
            <button type="submit">Send message</button>
        </div>
    </form>
</div>
<br>
<a href="/">Verlaat de pagina</a>
</body>
</html>
