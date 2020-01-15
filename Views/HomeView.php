<?php

require_once "header.php";

?>
<div id="form" class="container">
        <div class="row justify-content-center">
                <h1>Formulaire d'envoi de carte de voeux</h1>
        </div>
        <div class="row justify-content-center">

                <form action="" method="post">
                        <div class="form-group row m-2">
                                <label for="texte">De la part de :</label>
                                <input class="form-control" type="text" name="texte" id="texte" placeholder="Nom et prénom" value="">
                        </div>
                        <div class="form-group row m-2">
                                <label for="email">Email de l'expéditeur :</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Adresse email de l'expéditeur" value="">
                        </div>
                        <hr>
                        <div class="form-group row m-2">
                                <label for="emailto">Email du destinataire :</label>
                                <input class="form-control" type="emailto" name="emailto" id="emailto" placeholder="Adresse email du destinataire" value="">
                        </div>
                        <div class="form-group row m-2">
                                <label for="nom">Nom du destinataire :</label>
                                <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom" value="">
                        </div>
                        <div class="form-group row m-2">
                                <label for="message">Message reçu dans l'email :</label>
                                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Votre message"></textarea>
                        </div>
                        <div class="form-group row m-2">
                                <input class="form-control btn btn-submit" type="submit" id="submit" name="submit" value="Envoyer">
                        </div>
                </form>
        </div>
</div>
<?php
require_once "footer.php";

?>