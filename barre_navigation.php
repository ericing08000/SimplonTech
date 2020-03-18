<!-- Barre de navigation -->
<nav class="container">
    <img src="image/Logo.png" alt="logo">
        <div class="container">
            
            <div class="dropdown_produit">
                <a href="#" class="drop_produit">Produits</a>
                    <div class="drop_item_prod">
                        <a href="#">Top vente</a>
                        <a href="#">Les nouveautés</a>
                        <a href="produit.html">Nos produits</a>    
                    </div>
            </div>

            <!-- menu témoignages -->
            <div class="item">
                <a href="#" class="info">Témoignages</a>
            </div>

            <!-- Liste déroulante formulaire -->
            <div class="dropform">
                <a href="#" class="dropform">Nous contacter</a>
                    <div class="dropformitem">
                        <form name="formulaire" method="post" action="traitement">
                            <table>
                            <tr><th><label>Civilité</label></th><td>
                            <select name="option" id="">
                                <option value="">Monsieur</option>
                                <option value="">Madame</option>
                                <option value="">Mademoiselle</option>
                            </select></td></tr>
                            <tr><th><label>Nom</label></th><td>
                                <input type="text" name="nom" id="nom"></td></tr>
                            <tr><th><label>Prénom</label></th><td>
                                <input type="text" name="prenom" id="prenom"></td></tr>
                            <tr><th class="top"><label for="">Adresse</label></th><td><textarea name="adresse" id="adresse" cells="30" rows="1"></textarea></td></tr>
                            <tr><th><label>Mail</label></th><td>
                                <input type="text" name="mail" id="mail"></td></tr>
                            <tr><th><label>Portable</label></th><td>
                                <input type="text" name="portable" id="portable"></td></tr>
                            <tr><th><label>Domicile</label></th><td>
                                <input type="text" name="domicile" id="domicile"></td></tr>
                            <tr><th></th><td><input type="reset" value="Annuler"><input type="button" value="Envoyer"></td></tr>
                            </table>
                        </form>
                    </div>
            </div>
        </div>     
</nav>
<!-- Fin Barre de navigation -->