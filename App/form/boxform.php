<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 05/05/2018
 * Time: 21:05
 */


function SatisfacCaisse($valuec){
    echo " <div class=\"boxy1\">
        <div class=\"card text-center \">
            <div class=\"card-header \">
                <h2>Satisfaction caisse</h2>
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Caissier</h5>
                <p class=\"card-text\">Le métier de caissier ou hôte de caisse consiste à tenir la caisse d'une entreprise ou d'une administration : l'exemple le plus connu est le caissier d'une grande surface.</p>
                <div class=\"progress\" >
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"70\"
                         aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:$valuec%\">
                        <span class=\"sr-only\">70% Complete</span>
                    </div>
                </div>

            </div>
        </div>
        </div>";
}
function SatisfacDepot($valued){
    echo " <div class=\"boxy1\">
        <div class=\"card text-center \">
            <div class=\"card-header\">
                <h2>Satisfaction depôt</h2>
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Magasinier</h5>
                <p class=\"card-text\">Le magasinier exerce une activité entendue tantôt au sens large (opérations de magasinage) tantôt selon un sens plus restreint (gestion de stock) en un lieu (un magasin, un entrepôt de fabrication ou de distribution) où sont entreposées des marchandises (produits finis, semi-finis, pièces de rechange, etc.) destinées à être mises à disposition et/ou acheminées pour être utilisées par des consommateurs intermédiaires ou finaux.</p>
                <div class=\"progress\" >
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"70\"
                         aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:$valued%\">
                        <span class=\"sr-only\">70% Complete</span>
                    </div>
                </div>

            </div>
        </div>
    </div>";
}
function  SatisfacVend ($valuev) {

    echo "<div class=\'boxy1\'>
        <div class=\"card text-center\">
            <div class=\"card-header\">
                <h2>Satisfaction vendeur</h2>
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">Le vendeur</h5>
                <p class=\"card-text\"> Exerce la vente  : 
                il échange un bien de consommation ou un service 
                marchand contre de l'argent. Étymologiquement, le 
                mot \"vendre\" vient de venes dare, « donner vénalement, 
                contre argent ». Le secteur d'activité économique est 
                le secteur tertiaire.</p>
                <div class=\"progress\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"70\"
                         aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: $valuev%\">
                        <span class=\"sr-only\">70% Complete</span>
                    </div>
                </div>
            </div>
        </div>
    </div>";
}

/**
 *
 */
function infoname(){

    echo "<div class=\"row \">
            <div class=\"col-lg-4\" >
                <div class=\"form-group\">
                    <h1><label>	Votre nom : </label></h1>
                    <input type=\"text\" name=\"nom\" class= \"form-control\" id=\"nom\" placeholder=\"Ex: Moha\" />
                </div>
            </div>
            <div class=\"col-lg-5\" >
                <div class=\"form-group\">
                    <h1><label for=\"love\">Votre prénom : </label></h1>
                    <input type=\"text\" name=\"prenom\" class=\"form-control\" id=\"prenom\" placeholder=\"Ex: Paul\" />
                </div>
            </div>

            <div class=\"col-lg-3 \" >
                <div class=\"form-group\">
                    <h1><label for=\"age\">Votre âge : </label></h1>
                    <select class=\"form-control\"  name=\"age\" id=\"age\">
                        <option value=\"16\">Moins de 16 ans</option>";
    for($i=16;$i<70;$i++){
        $html1 = "<option value=\"".$i."\">".$i."</option>";
        echo  $html1;
    }
    echo "<option value=\"70\">70 ans</option>
                    </select>
                </div>
            </div>
        </div>";
}

/**
 * @param $value definie le type de formulaire vente, caisse, ...
 */
function inputsatdvc($value){
    echo " <!-- deuxieme formulaire 2 II) -->
    <div class=\"container justify-content-md-center\" style='padding-left: 15%'>
            <h1>Satisfaction $value</h1>
          
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"Satisfaction$value\" id=\"$value Excellent1\" value=\"4\" style='padding-top: -25em'\">
                <label class=\"form-check-label\" for=\"Excellent1\"><p style='padding-top: 12%'>Excelent 100%</p></label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"Satisfaction$value\" id=\"$value moyen1\" value=\"3\">
                <label class=\"form-check-label\" for=\"moyen1\"><p style='padding-top: 12%'>Moyen 50%</p></label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"Satisfaction$value\" id=\"$value faible1\" value=\"2\">
                <label class=\"form-check-label\" for=\"faible1\"><p style='padding-top: 12%'>Faible 25%</p></label>
            </div>
            <div class=\"form-check form-check-inline\">
                <input class=\"form-check-input\" type=\"radio\" name=\"Satisfaction$value\" id=\"$value nul1\" value=\"1\">
                <label class=\"form-check-label\" for=\"nul1\"><p style='padding-top: 12%'>Médiocre 2%</p></label>
            </div>
    </div>
        ";
}
