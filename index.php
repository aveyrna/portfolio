<?php
// ---------------------------------------------------------
// Portfolio — Aubry Varen
// Page principale, volontairement simple et durable
// ---------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Aubry Varen — Créateur & Développeur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Polices Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Space+Grotesk:wght@400;500;600&family=Oxanium:wght@400;500;600;700&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Feuille de style principale -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>
        <h1>Aubry Varen</h1>
        <ul>
            <li><a href="#about-me">Qui suis-je ?</a></li>
            <li><a href="#what-i-do">Ce que je fais</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#background">Parcours</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>

    <section id="about-me">
        <h2>Qui suis-je ?</h2>

        <p class="tagline">
            Créateur indépendant, développeur et auteur de mondes.
            Je construis des outils, des univers et des récits.
            Parfois sur un clavier. Parfois sur la route.
        </p>

    </section>

    <section id="what-i-do">
        <h2>Ce que je fais</h2>

        <div class="grid">
            <div class="card">
                <h3>Développement</h3>
                <p>
                    Des classiques HTML / CSS / JS aux Back-end en Go, PHP,
                    en passant par les bases de données (PostgreSQL), ou même le C# avec Unity.
                    J'apprecie et m'intéresse au développement sous de nombreuses formes,
                    particulièrement quand il s'agit de projets créatifs.
                    <br /><br />
                    Jeu vidéo > Web > Logiciel
                </p>
            </div>

            <div class="card">
                <h3>Écriture & univers</h3>
                <p>
                    J'ai fait le choix de prendre du temps pour moi
                    dans le but d'explorer d'autres idées qui se sont précisées au fil du temps.<br />
                    La création d’univers narratifs et de personnages.
                    Et cela au moyen de l'écriture et du modding, voir même sous forme de jeu vidéo à part entière.<br /><br />
                    Sci-fi > Anticipation > Fantaisie
                </p>
            </div>

            <div class="card">
                <h3>Création nomade</h3>
                <p>
                    Avide d'aventures et de découvertes,
                    une situation familiale et personelle m'a poussé à voyager sans attendre.
                    J'ai donc aménagé un van pour y vivre et y travailler.<br />
                    Une aventure qui se verra documentée sur Instagram, Youtube et TikTok, et rassemblé sur une app web dédié.<br /><br />
                    Vivre > Voyager > Créer
                </p>
            </div>
        </div>
    </section>

    <section id="projects">
        <h2>Projets</h2>

        <p>
            Mes projets évoluent dans le temps.
            Certains sont techniques, d’autres narratifs,
            souvent les deux à la fois.
        </p>

        <div class="grid">
            <div class="card">
                <h3>Aveyrna</h3>
                <p>
                    L'app web de documentation de mon voyage en van et de mes projets de création.
                    Récits, photos, vidéos et outils pour suivre mon aventure.
                </p>
            </div>

            <div class="card">
                <h3>Modding narratif</h3>
                <p>
                    J'envisage d'utiliser des jeux déjà existants comme medium
                    en utilisant des outils dédiés, tels que le Creation Kit de Bethesda, et les
                    REDkit / REDmod de CD Projekt.
                    <br /><br />
                    <strong>Univers cibles:</strong> Fallout 4, Starfield, Skyrim, Cyberpunk 2077 et The Witcher 3.
                </p>
            </div>

            <div class="card">
                <h3>Game Development</h3>
                <p>
                    Je continuerai à développer mes compétences en création de jeux vidéo,
                    en explorant des moteurs comme Unity et Unreal Engine. <br /><br />
                    Si le modding est un moyen de raconter des histoires plus vites,
                    pouvoir développer des jeux de A à Z reste un objectif à long terme.
                </p>
            </div>
        </div>
    </section>

    <section id="background">
        <h2>Mon parcours (formations et expériences)</h2>

        <h3>Juin - Décembre 2025 : Coordinateur technique et pédagogique</h3>
        <h4>Efficenty - Saint-Ouen-Sur-Seine</h4>
        <p>
            En alternance de ma formation, j'ai intégré l'équipe pédagogique de Efficenty en tant que coordinateur technique et pédagogique.
            J'ai eu pour mission d'accompagner les étudiants dans leur apprentissage,
            de les encadrer dans leurs projets en les guidant dans un parcours du même type que celui que j'avais découvert à Zone01.

            Cette expérience m'a permis de développer mes compétences en communication et en encadrement,
            tout en consolidant mes connaissances techniques. Mais bien que cette expérience ait été enrichissante,
            j'ai ressenti le besoin de me concentrer pleinement sur mes propres projets de création et sur le développement.

            Si l'encadrement d'étudiants était gratifiant, ce n'est pas ce que je cherchais à long terme.
        </p>

        <h3>2023 - 2025 : Formation Développeur fullstack (Bac+3)</h3>
        <h4>Zone01 - Rouen</h4>
        <p>
            C'est en octobre 2022 que j'ai entendu parler de zone01 par un conseiller en insertion professionnelle qui prenait enfin en compte mes motivations.
            Après les tests en ligne, comme pour 42, j'ai intégré la piscine de séléction. Un nouveau mois d'épreuves intensives, en Go cette fois.
            J'ai cette fois été retenu pour intégrer la formation de Développeur fullstack en mai 2023.<br><br>
            La formation couvre un large éventail de technologies: Golang, HTML/CSS, JavaScript, Rust, bases de données (SQLite, PostgreSQL), et plus encore.
            Après deux ans de formation, j'ai acquis les compétences que je cherchais depuis longtemps.
        </p>

        <h3>2021 - 2022 : Programme en ligne Unity Learn</h3>
        <h4>Unity Technologies</h4>
        <p>
            J'ai suivi plusieurs parcours de formation en ligne proposés par Unity Technologies,
            couvrant les bases du développement de jeux vidéo avec le moteur Unity.
            J'y ai appris le C#, la gestion des assets, la physique dans les jeux, et les principes fondamentaux du game design.
            Cette formation m'a permis de créer mes premiers prototypes de jeux vidéo.

            18 fevrier 2021 - Complétion du parcours "Unity Essentials"

            Puis poursuite avec le parcours "Unity Junior Programmer" que je finirai le 28 janvier 2023, quelques semaines avant de commencer ma formation fullstack.
        </p>

        <h3>2019 - 2020 : Piscine 42 et passage à vide</h3>
        <h4>École 42 - Paris</h4>
        <p>
            J'ai intégré la piscine de l'école 42 à Paris pour un mois d'épreuves intensives afin d'intégrer la formation.
            Cependant, bien qu'étant arrivé au bout de la piscine et avoir obtenu un score correct à l'examen final (55%), je n'ai pas été retenu. <br><br>
            Cette expérience m'a beaucoup appris sur la programmation en C et sur ce qu'est la programmation.
            De nombreuses erreurs à régler, encore et encore, necessitant patience et persévérance.<br><br>
            Après cette expérience, je savais que je voulais continuer à apprendre le développement,
            mais mes expériences passées ne semblaient pas suffisantes à mes conseillers pour me diriger vers des formations plus avancées.
            J'ai donc recommencé à apprendre de mon côté, en autodidacte. Sur des domaines plus poussés cette fois.
        </p>

        <h3>2018 : Formation Développeur intégrateur en développement d'applications web (Bac+2)</h3>
        <h4>OpenClassrooms & 3W Academy</h4>
        <p>
            Mon premier vrai pas dans le développement informatique.<br>
            J'ai suivi une formation à distance de 6 mois en développement web full-stack,
            couvrant HTML, CSS, JavaScript, PHP et MySQL.
            J'y ai décroché mon premier titre professionnel de Développeur intégrateur d'applications web.
        </p>

        <h3>2016 - 2017 : Première expérience autonome - Rédacteur web</h3>
        <h4>Indépendant</h4>
        <p>
            Je ne parle pas ici de Développement web car j'utilisais alors le CMS Wordpress.<br><br>
            Ce fut ma première expérience en tant qu'indépendant,
            principalement en tant que rédacteur web pour mon propre site de l'époque (Youmad.fr).
            Le site traitant du jeu vidéo et de la culture numérique dans son ensemble,
            j'ai tiré de cette expérience d'importantes leçons sur la veille informatique et la création de contenu.
            Je me déplaçais souvent dans les salons et événements liés au jeu vidéo pour y couvrir l'actualité.<br><br>
            Ne parvenant pas à en générer des revenus suffisants, j'ai décidé de continuer mon apprentissage.
        </p>

        <h3>2013 - 2015 : Activités diverses et préparation à l'informatique</h3>
        <h4>Paris-Normandie / AFPA</h4>
        <p>
            Durant cette période, j'ai occupé divers emplois temporaires,
            notamment en tant que correspondant de presse chez Paris-Normandie.
            Parallèlement, j'ai suivi une formation de quelques mois dans l'hotellerie-restauration avec l'AFPA,
            durant laquelle j'ai effectué un stage de 3 semaines en tant que récéptionniste au Village Club du Soleil Les Karellis.
            Je commençais en parrallèle à me former en autodidacte à l'informatique et au développement web.
        </p>

        <h3>2011 - 2012 : Agent de production en industrie pharmaceutique</h3>
        <h4>Fresenius Kabi France - Louviers</h4>
        <p>
            De retour dans l'industrie pharmaceutique, j'ai travaillé sur la production de solutions
            intraveineuses. Cette expérience m'a permis de continuer à gagner ma vie le temps de définir ma poursuite d'études.
        </p>

        <h3>2011: Diplôme d'Accès aux Études Universitaires (DAEU) — Série A (Littéraire)</h3>
        <h4>-Université d'Orléans - Antenne de Chateauroux</h4>
        <p>
            J'ai décidé de reprendre mes études en visant un diplôme équivalent au baccalauréat.
            Le DAEU m'a permis d'acquérir des bases solides en littérature, philosophie et langues,
            tout en développant ma capacité de travail autonome.
        </p>

        <h3>2005 - 2011 : Agent de production en industrie pharmaceutique</h3>
        <h4>-GlaxoSmithKline - Evreux</h4>
        <p>Mon premier emploi, à une époque où je n'avais aucun diplôme en poche.
            Je travaillais sur les chaînes de conditionnement des inhalateurs Diskus.
            J'y ai appris la rigueur, le travail en équipe et le sens des responsabilités.
            Mais après plusieurs années, j'ai ressenti le besoin de me réorienter.
        </p>

    </section>

    <section id="contact">
        <h2>Contact</h2>

        <p>
            Je ne cherche pas la visibilité à tout prix.
            Mais j’apprécie les échanges honnêtes,
            les projets sincères et les idées bien construites.
        </p>

        <p>
            GitHub :
            <a href="https://github.com/aveyrna" target="_blank" rel="noopener noreferrer">
                github.com/aveyrna
            </a>
            <br>
            Email :
            <a href="mailto:aubry.varen@gmail.com">
                aubry.varen@gmail.com
            </a>
        </p>
    </section>

    <footer>
        © <?php echo date('Y'); ?> — Aubry Varen
        <br>
        Fait simplement. Pour durer.
    </footer>

</body>

</html>