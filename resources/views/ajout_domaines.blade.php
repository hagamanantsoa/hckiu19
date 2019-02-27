<html>
    <head>
        <title> Ajout de domaines universitaires </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="/ajout_domaines" method="POST">

            {{ csrf_field() }}
            <input type="libelle" name="libelle" placeholder="Libelle du domaine">
            <input type="submit" value="Ajouter">
    </body>
</html>