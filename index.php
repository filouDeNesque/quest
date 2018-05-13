<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 01/05/2018
 * Time: 10:31
 */
include ('page/default/default.php');
?>

<head><link rel="stylesheet" href="index.css"></head>
<body style="background-image: url('http://www.letendanceur.bzh/wp-content/uploads/2016/09/exemple-flat-design.jpg'); background-position: left;
">


<!--<!-- formulaire 1-->
<!--<form method="post" action="result.php">-->
<!--    <p>-->
<!--        <label>-->
<!--            <input type="text" name="prenom"/>-->
<!--            <input type="submit" value="valider">-->
<!--        </label>-->
<!--    </p>-->
<!--</form>-->

<div class="allraw">
<form name="instruction" method="post" action="result.php">

        <div class="row ">
            <div class="col-lg-4" >
                <div class="form-group">
                    <h1><label>	Votre nom : </label></h1>
                    <input type="text" name="nom" class= "form-control" id="nom" placeholder="Ex: Polo" />
                </div>
            </div>

            <div class="col-lg-4" >
                <div class="form-group">
                    <h1><label for="love">Votre ...</label></h1>
                    <input type="text" name="love" class="form-control" id="love" placeholder="Ex: .... " />
                </div>
            </div>

            <div class="col-lg-4 " >
                <div class="form-group">
                    <h1><label for="age">Votre age: </label></h1>
                    <select class="form-control"  name="age" id="age">
                        <option value="16">Moins de 16 ans</option>
                        <?php
                        for($i=16;$i<70;$i++){
                            echo "<option value='$i'>$i ans</option>";
                        }
                        ?>
                        <option value="70">70 ans</option>
                    </select>
                </div>
            </div>
        </div>






    <!-- premier formulaire 1 I) -->
    <div class="row justify-content-center row2satvend" >
        <div class="col-lg-12 radiobox1 ">

        <h1>Satisfaction vendeur</h1>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="Excellent" value="4" />
            <label class="form-check-label" for="Excellent">
                <div class="skillbox">
                    <p>Excelent 100%</p>
                    <div class="skill">
                        <div class="skill_level" style="width: 100%"></div>
                    </div>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="moyen" value="3" />
            <label class="form-check-label" for="moyen">
                <div class="skillbox">
                    <p>Moyen 50%</p>
                    <div class="skill">
                        <div class="skill_level" style="width: 50%"></div>
                    </div>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="faible" value="2">
            <label class="form-check-label" for="faible">
                <div class="skillbox">
                    <p>faible 25%</p>
                    <div class="skill">
                        <div class="skill_level" style="width: 25%"></div>
                    </div>
                </div>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="SatisfactionVendeur" id="nul" value="1">
            <label class="form-check-label" for="nul">
                <div class="skillbox">
                    <p>mediocre 2%</p>
                    <div class="skill">
                        <div class="skill_level" style="width: 2%"></div>
                    </div>
                </div>
            </label>
        </div>
    </div>
    </div>




    <!-- deuxieme formulaire 2 II) -->
    <div class="row justify-content-center row3satdep">
        <div class="col-lg-12 radiobox1 ">
            <h1>Satisfaction depôt</h1>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="SatisfactionDepot" id="Excellent1" value="4">
                <label class="form-check-label" for="Excellent1">
                    <div class="skillbox">
                        <p>Excelent 100%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 100%"></div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="SatisfactionDepot" id="moyen1" value="3">
                <label class="form-check-label" for="moyen1">
                    <div class="skillbox">
                        <p>Moyen 50%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 50%"></div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="SatisfactionDepot" id="faible1" value="2">
                <label class="form-check-label" for="faible1">
                    <div class="skillbox">
                        <p>faible 25%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 25%"></div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="SatisfactionDepot" id="nul1" value="1">
                <label class="form-check-label" for="nul1">
                    <div class="skillbox">
                        <p>mediocre 2%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 2%"></div>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>




    <!-- premier troisieme 3 III) -->
    <div class="row justify-content-center row4satca">
        <div class="col-lg-12 radiobox1 ">
            <h1>Satisfaction caisse</h1>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="Excellent3" value="4">
                <label class="form-check-label" for="Excellent3">
                    <div class="skillbox">
                        <p>Excelent 100%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 100%"></div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="moyen3" value="3">
                <label class="form-check-label" for="moyen3">
                    <div class="skillbox">
                        <p>Moyen 50%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 50%"></div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="faible3" value="2">
                <label class="form-check-label" for="faible3">
                    <div class="skillbox">
                        <p>moyen 25%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 25%"></div>
                        </div>
                    </div>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Satisfactioncaisse" id="nul3" value="1">
                <label class="form-check-label" for="nul3">
                    <div class="skillbox">
                        <p>mediocre 2%</p>
                        <div class="skill">
                            <div class="skill_level" style="width: 2%"></div>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>
</div>



    <div class="row row5achat">
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="MontantAchat" id="achat1" value="1">
                <label class="form-check-label" for="achat1">
                    <h3>Achat < 100€</h3>
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="MontantAchat" id="achat2" value="2">
                <label class="form-check-label" for="achat2">
                    <h3>Achat < 200€</h3>
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="MontantAchat" id="achat3" value="3">
                <label class="form-check-label" for="achat3">
                    <h3>Achat < 300€</h3>
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="MontantAchat" id="achat4" value="4">
                <label class="form-check-label" for="achat4">
                    <h3>Achat < 500€</h3>
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="MontantAchat" id="achat5" value="5">
                <label class="form-check-label" for="achat5">
                    <h3>Achat < 1000€</h3>
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="MontantAchat" id="achat6" value="6" />
                <label class="form-check-label" for="achat6">
                    <h3>Achat > 1000€</h3>
                </label>
            </div>
        </div>

    </div>
    </div>


    <div class="divbottom">
    <input type="submit" name="submit" class="btn btn-info btn-lg justify-content-center" />
    </div>

</form>



</body>
</html>
