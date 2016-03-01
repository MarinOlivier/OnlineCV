<?php
/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 19/09/15
 * Time: 22:15
 */
?>
<span class="anchor" id="top"></span>
<?php echo $this->session->flashdata('msg'); ?>
<section id="first_sect" class="row">
    <div>
        <div class="col-md-12 col-xs-12" id="first_title">
            <h1>A propos de moi...</h1>
        </div>
        <div class="col-md-4 col-md-offset-1" style="text-align: center;">
            <img itemprop="image" width="200px" height="200px" id="pic_my" src="<?php echo img_url('moi.png') ?>">
        </div>
        <div class="col-md-offset-0 col-md-5">
            <div id="aboutMe" class="col-md-12">
                <h2 itemprop="name">Olivier Marin</h2>
                <h3>22 ans</h3>
                <h4>Région <b>PACA</b></h4>
                <div style="background-color: #0086b3; color: white; padding: 3px; width: 70px; text-align:center">
                    &Eacutetudiant
                </div>
                <h5 style="margin-bottom: 0; margin-top: 15px">Qui suis-je ?</h5>
                <p style="margin-top: 5px">
                    &Eacutelève ingénieur et passionné de nouvelles technologies.</br>
                    Je suis animé par un intense esprit de découverte et d'innovation.
                </p>
                <h5 style="margin-bottom: 0">Actuellement</h5>
                <p style="margin-top: 5px">
                    En recherche active de stage pour l'été 2016, entre juin et août, pour une durée minimale de 2 mois.
                    Les secteurs visés sont : les réseaux, la sécurité, et les systèmes embarqué.
                </p>
            </div>
        </div>

        <div class="nop col-md-12 col-xs-12"></div>
        <div class="nop col-md-12 col-xs-12"></div>
        <div class="nop col-md-12 col-xs-12"></div>
    </div>
</section>

<span class="anchor" id="parcours"></span>
<section class="row" id="parcours">
    <div class="col-md-12 col-xs-12" id="first_title">
        <h1>Mon parcours</h1>
    </div>

    <div class="nop col-md-12"></div>
    <div class="nop col-md-12"></div>

    <div class="col-md-7 col-xs-12" id="XP_prof">
        <h3>Expériences Professionelles</h3>
        <span class="col-md-3 col-xs-3 underline"></span>
        <div id="content_XP_prof" class="col-md-12">
            <ul class="list-unstyled">
                <li class="year">
                    20
                    <span>15</span>
                </li>
                <li>
                    <ul class="list-unstyled">
                        <li>
                            <h1>Polygon Association d'étude</h1> <span style="margin-left: 10px"><a style="display: inline-block" href="http://www.polygon-junior.com/"> Site officiel </a></span>
                            <h2><span class="label label-default">Chargé de mission</span></h2>
                            <p><b>Mise à jour</b> & <b>Maintenance</b> d'une application web.</p>
                        </li>
                    </ul>
                </li>
                <li class="year">
                    20
                    <span>14</span>
                </li>
                <li>
                    <ul class="list-unstyled">
                        <li>
                            <h1>Gemalto S.A.</h1>  <span style="margin-left: 10px"><a style="display: inline-block" href="http://www.gemalto.com/"> Site officiel </a></span>
                            <h2><span class="label label-default">Stage</span></h2>
                            <p><b>Conception</b> & <b>Développement</b> & <b>Intégration</b> d'une application web de gestion de stock.</p>
                        </li>
                    </ul>
                </li>
                <li class="year">
                    20
                    <span>13</span>
                </li>
                <li>
                    <ul class="list-unstyled">
                        <li>
                            <h1>Auchan</h1> <span style="margin-left: 10px"><a style="display: inline-block" href="http://www.auchan.fr/"> Site officiel </a></span>
                            <h2><span class="label label-default">Employé magasin</span></h2>
                            <p><b>Maintenance</b> de rayons & <b>Conseil</b> clientelle</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-5 col-xs-12" id="diplome">
        <h3>&Eacutetudes supérieures et diplôme</h3>
        <span class="col-md-6 col-xs-6 underline"></span>

        <div id="content_diplome" class="col-md-12">

            <div class="year col-md-12">
                20
                <span>13</span> / <span>17</span>
            </div>
            <div class="text_diplome">
                <p class="title_diplome">&Eacutecole d'ingénieur <a href="http://polytech.univ-amu.fr/formations/cycle-ingenieur/informatique-reseau-multimedia">Polytech' Marseille</a></p>
                <p class="content_diplome">Section Informatique</p>
            </div>

            <div class="year col-md-12">
                20
                <span>11</span> / <span>12</span>
            </div>
            <div class="text_diplome">
                <p class="title_diplome">Classe Préparatoire aux Grandes &Eacutecoles</p>
                <p class="content_diplome">Dans les 10 premiers à l'issue des deux années</p>
            </div>

            <div class="year col-md-12">
                20
                <span>11</span>
            </div>
            <div class="text_diplome">
                <p class="title_diplome">Bac Sciences et Techniques Industrielles<br>Génie &Eacutelectronique</p>
                <p class="content_diplome">Mention Bien</p>
            </div>

        </div>
    </div>

    <div class="nop col-md-12"></div>
    <div class="nop col-md-12"></div>
</section>

<div class="nop col-md-12"></div>

<span class="anchor" id="comp"></span>
<section id="sec_section" class="row">
    <div class="col-md-12" id="sec_title">
        <h1 class="">Compétences</h1>
    </div>

    <div class="col-md-4 comp_title">
        <h3>Développement web</h3>
        <span class="col-md-6 col-xs-6 underline"></span>
        <div class="col-md-12"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">HTML/CSS</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-12 comp">
            <h4 class="col-md-12">PHP/SQL</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="nop col-md-12 col-xs-0"></div>
        <div class="nop col-md-12 col-xs-0"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">JavaScript</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>


        <div class="col-md-5 col-md-offset-1 col-xs-12 comp">
            <h4 class="col-md-12">Symfony 2</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="nop col-md-12 col-xs-0"></div>
        <div class="nop col-md-12 col-xs-0"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">CodeIgniter</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-12 comp">
            <h4 class="col-md-12">Bootstrap 2</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="nop col-md-12 col-xs-0"></div>
        <div class="nop col-md-12 col-xs-0"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">JQuery</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

    </div>

    <div class="col-md-4 col-xs-12 comp_title">
        <h3>Développement logiciel</h3>
        <span class="col-md-6 col-xs-6 underline"></span>
        <div class="col-md-12"></div>

        <div class="col-md-5  col-xs-12 comp">
            <h4 class="col-md-12">C / C++</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-12 comp">
            <h4 class="col-md-12">Java</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="nop col-md-12 col-xs-0"></div>
        <div class="nop col-md-12 col-xs-0"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12 col-xs-12">MIPS-ASM</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>
    </div>

    <div class="col-md-4 comp_title">
        <h3>Autres</h3>
        <span class="col-md-3 col-xs-3 underline"></span>
        <div class="col-md-12"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">Suite Office</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-12 comp">
            <h4 class="col-md-12">Linux</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="nop col-md-12 col-xs-0"></div>
        <div class="nop col-md-12 col-xs-0"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">Windows</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-12 comp">
            <h4 class="col-md-12">OS X</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="nop col-md-12"></div>
        <div class="nop col-md-12"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">PhotoShop</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="col-md-5 col-md-offset-1 col-xs-12 comp">
            <h4 class="col-md-12">Illustrator</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

        <div class="nop col-md-12 col-xs-0"></div>
        <div class="nop col-md-12 col-xs-0"></div>

        <div class="col-md-5 col-xs-12 comp">
            <h4 class="col-md-12">Admin. Serveur</h4>

            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_full.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">
            <img class="col-md-2 col-xs-2 comp" src="<?php echo img_url('comp_empty.png') ?>">

        </div>

    </div>


    <div class="nop col-md-12 col-xs-12"></div>

    <div class="col-md-12" id="lang-title">
        <h3>Facultés linguistiques</h3>
        <span class="col-md-2 col-xs-6 underline"></span>
    </div>

    <div class="nop col-md-12 col-xs-12"></div>

    <div id="lang-fr" class="col-md-6 col-md-offset-0 col-xs-12 set-size">
        <div class="pie-wrapper progress-french style-2">
            <span class="label">Français</span>
            <div class="pie">
                <div class="left-side half-circle"></div>
                <div class="right-side half-circle"></div>
            </div>
            <div class="shadow"></div>
            <p>Langue maternelle</p>
        </div>
    </div>

    <div class="nop col-md-0 col-xs-12 nop-mob"></div>
    <div class="nop col-md-0 col-xs-12 nop-mob"></div>
    <div class="nop col-md-0 col-xs-12 nop-mob"></div>

    <div id="lang-eng" class="col-md-6 col-md-offset-0 col-xs-12 set-size">
        <div class="pie-wrapper progress-75 style-2">
            <span class="label">Anglais</span>
            <div class="pie">
                <div class="left-side half-circle"></div>
                <div class="right-side half-circle"></div>
            </div>
            <div class="shadow english"></div>
            <p>TOEIC = 835</p>
        </div>
    </div>

    <div id="lang-end" class="nop col-md-12 col-xs-12"></div>

    <div class="nop col-md-0 col-xs-12"></div>
    <div class="nop col-md-0 col-xs-12"></div>

</section>

<div class="nop col-md-12 col-xs-12"></div>
<div class="nop col-md-12 col-xs-12"></div>

<span class="anchor" id="interet"></span>
<section class="row" id="interet">
    <div class="col-md-12" id="first_title">
        <h1>Centres d'intérêts</h1>
    </div>

    <div class="col-md-12" id="interet-content">
        <div class="nop col-md-12"></div>
        <div class="nop col-md-12"></div>
        <!--
        <div class="col-md-3 interet">
            <img class="col-md-6 col-md-offset-3 interet" src="<?php echo img_url("moto.png") ?>">
            <span class="col-md-12">Moto</span>
        </div> -->
        <div class="col-md-4 interet">
            <img class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 interet" src="<?php echo img_url("human.png") ?>">
            <span class="col-md-12 col-xs-12">Organisation évènementielle</span>
            <p class="col-md-12 col-xs-12" style="text-align: center">
                J'aime participer à l'organisation d'évènement que ce soit au seins de mon école, ou alors dans ma vie privé.
                C'est extrement motivant et gratiffiant de voir un évènement que l'ont à organisé se concrétiser.
            </p>
        </div>

        <div class="nop-mob col-md-0 col-xs-12"></div>

        <div class="col-md-4 interet">
            <img class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 interet" src="<?php echo img_url("mountain.png") ?>">
            <span class="col-md-12 col-xs-12">Sport de plein air</span>
            <p class="col-md-12 col-xs-12" style="text-align: center">
                Les sports de plein air sont un réel échappatoire pour moi.
                Après une bonne semaine de travail intense il est réellement agréable de profiter du grand air,
                que ce soit par un jogging, une sortie marche, ou un tour de velo.
            </p>
        </div>

        <div class="nop-mob col-md-0 col-xs-12"></div>

        <div class="col-md-4 interet">
            <img class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 interet" src="<?php echo img_url("enigma.png") ?>">
            <span class="col-md-12 col-xs-12">Jeux d'énigme</span>
            <p class="col-md-12 col-xs-12" style="text-align: center">
                J'aime me lancer des défis mentaux. Les jeux d'énigmes et de logiques sont mon passe temps favoris.
                J'aime également passé du temps sur des défis informatiques en passant par des plateformes d'entrainement en ligne (type RootMe)
            </p>
        </div>
    </div>

    <div class="nop col-md-12"></div>
    <div class="nop col-md-12"></div>
</section>
