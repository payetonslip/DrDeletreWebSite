<?php
// Si un traitement est sélectionné dans l'URL
$treatment = isset($_GET['treatment']) ? $_GET['treatment'] : null;
?>

<!-- Page principale avec les images des traitements -->
<?php if (!$treatment): ?>
    <h1>Les traitements</h1>

    <article>
        <h2 class="treatment-title">Traitements de l'alopécie</h2>
        <section class="grid">
            <!-- Lien vers Greffe -->
            <figure>
                <a href="?page=treatments&treatment=graft">
                    <img src="../img/img-3.png" alt="Greffe">
                    <figcaption>Greffe</figcaption>
                </a>
            </figure>
              <!-- Lien vers Laser Médical -->
              <figure>
                <a href="?page=treatments&treatment=medical-laser">
                    <img src="../img/img-3.png" alt="Laser Médical">
                    <figcaption>Laser Médical</figcaption>
                </a>
            </figure>
            <!-- Lien vers LED -->
            <figure>
                <a href="?page=treatments&treatment=led">
                    <img src="../img/img-3.png" alt="LED">
                    <figcaption>LED</figcaption>
                </a>
            </figure>
             <!-- Lien vers Mésogreffe -->
             <figure>
                <a href="?page=treatments&treatment=mesograft">
                    <img src="../img/img-3.png" alt="Mésogreffe">
                    <figcaption>Mésogreffe</figcaption>
                </a>
            </figure>
            <!-- Lien vers Mésothérapie -->
            <figure>
                <a href="?page=treatments&treatment=mesotherapy">
                    <img src="../img/img-3.png" alt="Mésothérapie">
                    <figcaption>Mésothérapie</figcaption>
                </a>
            </figure>
            <!-- Lien vers PRP -->
            <figure>
                <a href="?page=treatments&treatment=prp">
                    <img src="../img/img-3.png" alt="PRP">
                    <figcaption>PRP</figcaption>
                </a>
            </figure>
           

        </section>
        <h2 class="treatment-title">Traitements esthétique du visage</h2>
        <section class="grid">
             <!-- Lien vers Carboxythérapie -->
             <figure>
                <a href="?page=treatments&treatment=carboxytherapy">
                    <img src="../img/img-3.png" alt="Carboxythérapie">
                    <figcaption>Carboxythérapie</figcaption>
                </a>
            </figure>
            <!-- Lien vers Crèmes et Sérums -->
            <figure>
                <a href="?page=treatments&treatment=creams-and-serums">
                    <img src="../img/img-3.png" alt="Crèmes et Sérums">
                    <figcaption>Crèmes et Sérums</figcaption>
                </a>
            </figure>
            <!-- Lien vers Epilation laser -->
            <figure>
                <a href="?page=treatments&treatment=laser-hair-removal">
                    <img src="../img/img-3.png" alt="Epilation laser">
                    <figcaption>Epilation laser</figcaption>
                </a>
            </figure>
             <!-- Lien vers Fils Tenseurs -->
             <figure>
                <a href="?page=treatments&treatment=tensor-threads">
                    <img src="../img/img-3.png" alt="Fils tenseurs">
                    <figcaption>Fils tenseurs</figcaption>
                </a>
            </figure>
            <!-- Lien vers Injections -->
            <figure>
                <a href="?page=treatments&treatment=injections">
                    <img src="../img/img-3.png" alt="Injections d'Acide Hyaluronique">
                    <figcaption>Injections d'Acide Hyaluronique</figcaption>
                </a>
            </figure>
            <!-- Lien vers Injection de Radiesse® -->
            <figure>
                <a href="?page=treatments&treatment=radiess-injection">
                    <img src="../img/img-3.png" alt="Injection de Radiesse®">
                    <figcaption>Injection de Radiesse®</figcaption>
                </a>
            </figure>
            <!-- Lien vers Laser Médical -->
            <figure>
                <a href="?page=treatments&treatment=medical-laser">
                    <img src="../img/img-3.png" alt="Laser Médical">
                    <figcaption>Laser Médical</figcaption>
                </a>
            </figure>
            <!-- Lien vers LED -->
            <figure>
                <a href="?page=treatments&treatment=led">
                    <img src="../img/img-3.png" alt="LED">
                    <figcaption>LED</figcaption>
                </a>
            </figure>
            <!-- Lien vers Injection de Mésothérapie -->
            <figure>
                <a href="?page=treatments&treatment=mesotherapy">
                    <img src="../img/img-3.png" alt="Mésothérapie">
                    <figcaption>Mésothérapie</figcaption>
                </a>
            </figure>
            <!-- Lien vers Peeling -->
            <figure>
                <a href="?page=treatments&treatment=peeling">
                    <img src="../img/img-3.png" alt="Peeling">
                    <figcaption>Peeling</figcaption>
                </a>
            </figure> 
            <!-- Lien vers Toxine botulique -->
            <figure>
                <a href="?page=treatments&treatment=botulinum-toxin">
                    <img src="../img/img-3.png" alt="Toxine botulique">
                    <figcaption>Toxine botulique</figcaption>
                </a>
            </figure>   
        </section>

        <h2 class="treatment-title">Traitements esthétique du corps</h2>
        <section class="grid">
            <!-- Lien vers ATTIVA -->
            <figure>
                <a href="?page=treatments&treatment=attiva">
                    <img src="../img/img-3.png" alt="ATTIVA">
                    <figcaption>ATTIVA</figcaption>
                </a>
            </figure>
            <!-- Lien vers Cryolipolyse -->
            <figure>
                <a href="?page=treatments&treatment=cryolipolysis">
                    <img src="../img/img-3.png" alt="Cryolipolyse">
                    <figcaption>Cryolipolyse</figcaption>
                </a>
            </figure>
             <!-- Lien vers Epilation laser -->
             <figure>
                <a href="?page=treatments&treatment=laser-hair-removal">
                    <img src="../img/img-3.png" alt="Epilation laser">
                    <figcaption>Epilation laser</figcaption>
                </a>
            </figure>
            <!-- Lien vers HIFU -->
            <figure>
                <a href="?page=treatments&treatment=hifu">
                    <img src="../img/img-3.png" alt="HIFU">
                    <figcaption>HIFU</figcaption>
                </a>
            </figure>
            <!-- Lien vers Inshape -->
            <figure>
                <a href="?page=treatments&treatment=inshape">
                    <img src="../img/img-3.png" alt="Inshape">
                    <figcaption>Inshape</figcaption>
                </a>
            </figure>
            <!-- Lien vers Laser Médical -->
            <figure>
                <a href="?page=treatments&treatment=medical-laser">
                    <img src="../img/img-3.png" alt="Laser Médical">
                    <figcaption>Laser Médical</figcaption>
                </a>
            </figure>
            <!-- Lien vers LED -->
            <figure>
                <a href="?page=treatments&treatment=led">
                    <img src="../img/img-3.png" alt="LED">
                    <figcaption>LED</figcaption>
                </a>
            </figure>
        </section>
    </article>

<?php else: ?>
    <!-- Si un traitement est sélectionné, afficher son contenu -->
    <?php
    switch ($treatment) {
        case 'led':
            echo '<h1>LED - Photobiomodulation</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="LED">
                    <p>
            La Photobiomodulation par LED est une technique non invasive qui utilise des lumières spécifiques pour stimuler les processus naturels de guérison de la peau. En émettant des longueurs d\'onde précises, cette méthode favorise la régénération cellulaire, augmente la circulation sanguine et réduit l\'inflammation. Les LED sont généralement bien tolérées et ne présentent pas d\'effets secondaires majeurs, ce qui les rend idéales pour une utilisation en médecine esthétique.<br><br>
            La Photobiomodulation par LED est une méthode de traitement utilisant un rayonnement électromagnétique non ionisant basé sur l’émission de sources optiques non cohérentes du spectre visible et proche infra-rouge.<br><br>
            Le principe de la photobiomodulation est de convertir l’énergie apportée par une source lumineuse en énergie biochimique utilisable par les cellules. La photothérapie est un principe naturel qui est à l’action au quotidien sur Terre grâce à l’énergie reçue du soleil par les êtres vivants.<br><br>
            Principales indications de la Photobiomodulation par LED :<br><br>
        
            Réduction des rides et ridules<br><br>
            Amélioration de la texture de la peau<br><br>
            Diminution des cicatrices d\'acné<br><br>
            Atténuation des taches pigmentaires<br><br>
            Traitement des rougeurs et rosacée<br><br>
            Accélération de la cicatrisation des blessures<br><br>
            Stimulation de la production de collagène<br><br>
            Amélioration de l\'hydratation de la peau<br><br>
            Réduction de l\'inflammation<br><br>
            Relaxation musculaire<br><br>
            Traitement des vergetures<br><br>
           Amélioration de l\'éclat du teint<br><br>
        </p>      
                  </article>';
            break;
        case 'mesotherapy':
            echo '<h1>Mésothérapie</h1>';
            echo '<article class="presa">
                        <img src="../img/img-2.png" alt="Mésothérapie">
                        <p>
                            La mésothérapie est une technique de médecine esthétique qui consiste à injecter des substances bénéfiques dans le derme, généralement par de multiples micro-injections. Développée dans les années 1950 par le médecin français Michel Pistor, la mésothérapie a d\'abord été utilisée pour des applications médicales, mais elle a rapidement trouvé sa place dans le domaine esthétique.<br><br>

            Le fonctionnement de la mésothérapie repose sur l\'injection de cocktails de nutriments, vitamines, minéraux et acide hyaluronique, adaptés aux besoins spécifiques de chaque patient. Cette méthode permet une absorption directe des actifs dans la peau, offrant des résultats rapides et ciblés.<br><br>

            Il existe principalement deux types de mésothérapie : <br><br>

            1. Mésothérapie du cuir chevelu : Cette technique est utilisée pour stimuler la croissance des cheveux, notamment en cas de chute de cheveux ou d\'alopécie. Des produits spécifiques comme HAIRCARE, qui contiennent des vitamines, des acides aminés et des extraits de plantes, sont injectés pour nourrir le cuir chevelu et favoriser la circulation sanguine. Ces éléments nourrissent les follicules pileux, améliorant ainsi la densité et la qualité des cheveux.<br><br>

            2. <strong>Mésothérapie du visage et du corps</strong> : Dans ce cas, des solutions d\'acide hyaluronique et de vitamines sont injectées pour hydrater la peau, améliorer sa texture et réduire les signes de vieillissement. Un produit populaire dans ce domaine est le NCTF 135HA de chez Fillmed, qui combine un complexe de vitamines et d’acide hyaluronique pour revitaliser la peau; selon de nombreux articles médicaux et esthétiques, le NCTF 135HA est parfois comparé à des produits d’induction du collagène et offre une alternative plus douce avec une efficacité similaire à d’autres techniques plus invasives. Des études ont montré que NCTF 135HA stimule la production de collagène et d\'élastine, offrant une amélioration significative de l\'hydratation et de l\'élasticité de la peau.<br><br>

            En résumé, la mésothérapie est une technique polyvalente, adaptée à divers besoins esthétiques, qu\'il s\'agisse de revitaliser le cuir chevelu ou de rajeunir le visage et le corps. Grâce à des produits ciblés comme HAIRCARE et NCTF 135HA, les résultats peuvent être visibles rapidement, offrant une solution efficace et personnalisée pour chaque patient.
                        </p>
                      </article>';
            break;
        case 'prp':
            echo '<h1>PRP</h1>';
            echo '<article class="presa">
                            <img src="../img/img-2.png" alt="PRP">
                            <p>
                              
            L\'injection de PRP, ou plasma riche en plaquettes, est une technique de médecine esthétique qui utilise les propres plaquettes sanguines du patient pour favoriser la régénération des tissus.<br>
            Cette méthode a été développée dans les années 1980 pour des applications médicales, notamment en chirurgie orthopédique et en dentisterie.<br>
            Au fil des ans, elle a trouvé sa place en esthétique, notamment pour la repousse des cheveux et le traitement des blessures.<br><br>

            Le fonctionnement du PRP repose sur le principe que les plaquettes contiennent des facteurs de croissance qui stimulent la réparation et la régénération des cellules.<br>
            Lors d\'une séance, une petite quantité de sang est prélevée, puis centrifugée pour isoler le plasma riche en plaquettes.<br>
            Ce PRP est ensuite injecté dans les zones ciblées, comme le cuir chevelu, pour encourager la croissance des cheveux.<br><br>
      

        Bénéfices de l\'injection de PRP

        
            Repousse des cheveux : De nombreuses études montrent qu\'elle peut améliorer la densité et la qualité des cheveux, en particulier chez les personnes souffrant d\'alopécie androgénétique.<br>
            L’un des principaux mécanismes est la multiplication de nombreux petits vaisseaux sanguins pour favoriser l’apport en nutrition des follicules, mais également en améliorant la qualité du cuir chevelu.<br><br>

            Après une greffe de cheveux : Le PRP peut être utilisé pour favoriser la cicatrisation et stimuler la repousse des follicules transplantés, améliorant ainsi les résultats globaux.<br><br>

            Le PRP est également efficace dans le cadre de l\'entretien contre l\'alopécie. Des séances régulières peuvent aider à prévenir la chute des cheveux et à maintenir un cuir chevelu en bonne santé.<br><br>

            Enfin, le PRP présente des indications intéressantes chez les sportifs. Il peut être utilisé pour traiter des blessures musculaires ou tendineuses, favorisant une récupération plus rapide et réduisant les temps d\'arrêt.<br>
            De plus, il peut améliorer la régénération des tissus après des efforts physiques intenses, contribuant ainsi à une meilleure performance.<br><br>

            En résumé, l\'injection de PRP est une solution prometteuse pour la repousse des cheveux, l\'entretien contre l\'alopécie et le traitement des blessures chez les sportifs.
        
                            </p>
                          </article>';
            break;
        case 'mesograft':
            echo '<h1>Mésogreffe</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="Mésogreffe">
                    <p>
                         La mésogreffe MediGraft, par méthode Rigenera, est une technique innovante de médecine esthétique utilisée pour favoriser la repousse des cheveux et traiter l\'alopécie.<br>
            Cette méthode repose sur l\'utilisation de tissu adipeux prélevé sur le patient, qui est ensuite transformé en un concentré de facteurs de croissance.<br>
            Ce concentré est injecté dans le cuir chevelu pour revitaliser les follicules pileux.<br><br>

            Le déroulement de la procédure commence par un prélèvement de graisse, généralement effectué sur l\'abdomen ou les cuisses.<br>
            Cette graisse est ensuite traitée avec un dispositif spécifique, le Rigenera, qui permet d\'extraire les cellules souches et les facteurs de croissance.<br>
            Après cette préparation, le concentré est injecté directement dans les zones concernées du cuir chevelu.<br>
            La procédure est relativement rapide, ne prenant généralement pas plus d\'une heure, et ne nécessite qu\'une anesthésie locale pour le confort du patient.<br><br>

            La durée du plan de traitement peut varier, mais il est souvent recommandé de réaliser plusieurs séances, espacées de quelques semaines, pour optimiser les résultats.<br>
            Les patients peuvent commencer à observer des améliorations après environ trois mois, avec des résultats de plus en plus visibles jusqu\'à six mois après la première séance.<br><br>

            Études et efficacité<br><br>

            Des études ont démontré l’efficacité de la mésogreffe Rigenera sur la stimulation de la repousse des cheveux.<br>
            Par exemple, un article publié dans le <em>Journal of Cosmetic Dermatology</em> a montré une amélioration significative de la densité capillaire chez les patients traités.<br>
            Une autre étude dans <em>Dermatologic Therapy</em> a mis en avant la capacité de cette méthode à revitaliser les follicules pileux en stimulant la circulation sanguine et la régénération des tissus.<br><br>
            En résumé, la mésogreffe par méthode Rigenera est une approche efficace et personnalisée pour lutter contre la chute des cheveux.<br>
            Elle offre, en association avec d\'autres techniques (PRP, mésothérapie, photobiomodulation par LED, traitements topiques et per os), une alternative à la greffe pour lutter efficacement contre l’alopécie dans les stades les plus précoces.
        
                  </article>';
            break;

        case 'graft':
            echo '<h1>Greffe</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="Greffe">
                    <p>
            La greffe de sourcils par méthode FUE (Follicular Unit Extraction) est une technique avancée de médecine esthétique visant à restaurer ou à améliorer la densité des sourcils.<br>
            Cette méthode a gagné en popularité au cours des dernières décennies, notamment grâce aux progrès technologiques dans le domaine de la transplantation capillaire.<br><br>

            L’histoire de la greffe de sourcils remonte à plusieurs années, mais c\'est avec l\'émergence de la méthode FUE dans les années 2000 que les résultats esthétiques sont devenus plus naturels et satisfaisants.<br>
            Contrairement aux méthodes traditionnelles, la FUE permet d’extraire individuellement les unités folliculaires sans laisser de cicatrices linéaires, ce qui est particulièrement important pour une zone aussi délicate que les sourcils.<br><br>

            Le fonctionnement de cette méthode repose sur l\'extraction de follicules pileux situés généralement à l\'arrière ou sur les côtés de la tête.<br>
            Une fois extraits, ces follicules sont ensuite implantés dans la zone des sourcils selon un motif soigneusement planifié pour garantir un aspect naturel.<br><br>

            Voici les principales étapes de la greffe de sourcils par méthode FUE :<br>
            Consultation initiale : Évaluation des besoins et des attentes du patient, ainsi que détermination de la forme idéale des sourcils.<br>
            Préparation : Nettoyage de la zone donneuse et anesthésie locale pour assurer le confort optimal du patient pendant la procédure.<br>
            Extraction des follicules : Utilisation d\'un appareil de prélèvement infra millimétrique (0,85 mm) pour extraire les unités folliculaires de manière individuelle avec des cicatrices “invisibles”.<br>
            Préparation des follicules : Tri et préparation des follicules extraits pour garantir leur viabilité lors de l\'implantation.<br>
            Implantation : Insertion des follicules dans la zone des sourcils à l\'aide de techniques microchirurgicales pour un résultat naturel.<br>
            Suivi post-opératoire : Suivi de l’évolution pour un résultat définitif à 9 mois.<br><br>

            La greffe de sourcils par méthode FUE permet d\'obtenir des résultats durables et esthétiquement plaisants, offrant une solution efficace pour ceux qui souhaitent améliorer la forme ou la densité de leurs sourcils.
        </p>
                  </article>';
            break;
        case 'injections':
            echo '<h1>Injection</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="Injections d\'Acide Hyaluronique">
                    <p>
                        L\'injection d\'acide hyaluronique est une méthode de médecine esthétique largement utilisée pour améliorer l\'apparence de la peau et restaurer le volume du visage.<br>
            L\'acide hyaluronique est une substance naturellement présente dans notre organisme, notamment dans la peau et les articulations, où il joue un rôle clé dans l\'hydratation et la fermeté.<br><br>

            Les produits de la gamme Vivacy ont été développés pour offrir une technologie de pointe, garantissant des résultats efficaces et durables.<br>
            Cette gamme a été introduite sur le marché dans les années 2000, avec un accent sur la sécurité et l\'efficacité.<br>
            Grâce à un processus de réticulation spécifique, les produits Vivacy sont conçus pour offrir une consistance optimale, permettant une injection fluide et une répartition homogène dans les tissus.<br><br>

            Une fois injecté, l\'acide hyaluronique attire et retient l\'eau, ce qui contribue à repulper la peau et à atténuer les rides.<br><br>

            Les résultats sont généralement visibles immédiatement après la procédure, avec un effet qui peut durer de 6 à 18 mois selon le produit utilisé et le métabolisme du patient.<br><br>

            Les injections se font exclusivement par un médecin esthétique ou un chirurgien plasticien formé, et les professionnels de santé veillent à personnaliser le traitement en fonction des besoins spécifiques de chaque patient.<br><br>

            Voici les principales indications de l\'injection d\'acide hyaluronique de la gamme Vivacy :<br>
            - Comblement des rides : Réduction des rides d’expression, notamment autour de la zone périorale comme les sillons nasogéniens.<br>
            - Restaurer le volume : Restauration du volume des joues et des tempes pour un aspect plus jeune.<br>
            - Hydratation de la peau : Amélioration de l’hydratation et de l’élasticité de la peau.<br>
            - Embellissement des lèvres : Augmentation du volume et définition des contours des lèvres.<br>
            - Amélioration du contour du visage : Redéfinition de la mâchoire et du menton.<br>
            - Traitement des cernes : Diminution des cernes et des poches sous les yeux pour un regard plus frais.
                    </p>
                  </article>';
            break;
        case 'tensor-threads':
            echo '<h1>Fils tenseurs</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
            Les fils tenseurs résorbables sont une technique innovante en médecine esthétique, permettant de réaliser un lifting non chirurgical du visage.<br>
            Introduits sur le marché dans les années 2000, ces fils ont rapidement gagné en popularité grâce à leur capacité à redéfinir les contours du visage sans nécessiter d’incision.<br><br>

            Le principe des fils tenseurs résorbables repose sur l\'insertion de fils fins dans les couches sous-cutanées de la peau.<br>
            Une fois insérés, ces fils créent un effet de suspension immédiat, rehaussant les zones affaissées tout en stimulant la production de collagène.<br>
            Cette stimulation contribue à améliorer l’élasticité de la peau et à obtenir des résultats durables.<br><br>

            Il existe principalement trois types de fils tenseurs résorbables :<br>
            - Fils PDO (Polydioxanone) : Utilisés pour leur efficacité à stimuler le collagène, ces fils sont souvent choisis pour un effet liftant et une amélioration de la texture cutanée. Ils se résorbent en environ 6 à 8 mois.<br>
            - Fils PLLA (Acide poly-L-lactique) : Ces fils offrent un effet de lifting tout en favorisant la production de collagène sur le long terme. Ils sont idéaux pour une action soutenue et se résorbent en 12 à 18 mois.<br>
            - Fils PCL (Polycaprolactone) : Ces fils sont les plus durables, offrant un soutien prolongé et un effet liftant. Leur résorption peut prendre jusqu\'à 24 mois, ce qui les rend adaptés pour des résultats à long terme.<br><br>

            Les principales indications des fils tenseurs résorbables incluent :<br>
            - Lifting non chirurgical : Raffermissement des contours du visage et réduction de l\'affaissement.<br>
            - Restauration du volume : Correction des zones creuses, comme les joues et les tempes.<br>
            - Réduction des rides et ridules : Atténuation des signes de vieillissement sur le visage.<br>
            - Amélioration de la texture de la peau : Stimulation de la production de collagène pour une peau plus lisse.<br>
            - Soutien des tissus mous : Correction des affaissements au niveau du cou et du décolleté.<br>
            - Raffermissement des zones délicates : Lifting des sourcils et amélioration de l’apparence de la mâchoire.<br><br>

            Les fils tenseurs résorbables constituent une solution efficace pour un rajeunissement naturel, offrant des résultats visibles sans les risques associés à la chirurgie.
        </p>
                  </article>';
            break;
        case 'peeling':
            echo '<h1>Peeling</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
            Le peeling médical est une procédure esthétique qui consiste à appliquer des agents chimiques sur la peau pour en améliorer l\'apparence.<br>
            Parmi les types de peeling, le peeling à l\'acide trichloroacétique (TCA) est particulièrement efficace pour traiter les problèmes de peau plus profonds.<br>
            Cet acide exfolie les couches supérieures de l\'épiderme, favorisant ainsi le renouvellement cellulaire et améliorant la texture de la peau.<br>
            D\'autre part, les peelings aux acides glycoliques et au rétinol sont plus doux, ciblant les couches superficielles pour un effet revitalisant.<br><br>

            Les différents types de peeling incluent :<br>
            - Le peeling superficiel : agit sur la couche externe de l’épiderme.<br>
            - Le peeling moyen : pénètre jusqu’à la couche papillaire du derme pour traiter les imperfections cutanées modérées.<br>
            - Le peeling profond : atteint la couche réticulaire du derme et est utilisé pour corriger les rides et cicatrices importantes, mais requiert des compétences accrues et un temps de récupération plus long.<br><br>

            Le choix du type de peeling dépend des besoins spécifiques, du profil individuel et des résultats souhaités.<br><br>

            Voici les principales indications de ces peelings :<br>
            - Réduction des rides et ridules<br>
            - Amélioration de la texture de la peau<br>
            - Diminution des cicatrices d’acné<br>
            - Éclaircissement des taches pigmentaires<br>
            - Traitement de l\'hyperpigmentation<br>
            - Réduction des pores dilatés<br>
            - Amélioration de l’éclat du teint<br>
            - Traitement des irrégularités cutanées<br>
            - Diminution de la sécrétion de sébum<br>
            - Prévention du vieillissement cutané<br>
            - Amélioration de l\'hydratation de la peau<br>
            - Raffermissement de l\'épiderme<br><br>

            En résumé, le peeling médical offre une solution adaptée à divers besoins cutanés, permettant une amélioration significative de l\'apparence et de la santé de la peau.
        </p>
                  </article>';
            break;
        case 'carboxytherapy':
            echo '<h1>Carboxythérapie</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'botulinum-toxin':
            echo '<h1>Toxine botulique</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                     <p>
            L\'injection de toxine botulique, communément connue sous le nom de Botox, est une procédure esthétique non chirurgicale utilisée pour réduire l\'apparence des rides et des ridules.<br>
            Cette substance est dérivée d\'une protéine qui agit en bloquant les signaux nerveux aux muscles, ce qui entraîne une relaxation temporaire de ces muscles.<br>
            Ainsi, les rides d\'expression, souvent causées par des mouvements musculaires répétitifs, sont atténuées, offrant un aspect plus lisse et rajeuni.<br><br>

            Voici les principales indications de l\'injection de toxine botulique :<br>
            - Rides du front : Réduction des lignes horizontales qui apparaissent lors des expressions faciales.<br>
            - Rides de la glabelle : Atténuation des rides verticales entre les sourcils, souvent appelées "rides du lion".<br>
            - Rides de coin des yeux : Diminution des pattes d\'oie qui se forment autour des yeux lors du sourire.<br><br>

            Cette technique est rapide, peu douloureuse et permet des résultats visibles progressifs en quelques jours, souvent 8, avec un effet qui dure généralement 4 à 6 mois.
        </p>
                  </article>';
            break;
        case 'creams-and-serums':
            echo '<h1>Crèmes et Sérums</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'medical-laser':
            echo '<h1>Laser médical</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
            La régénération cutanée par laser fractionné non ablatif, comme le système ORIGIN de chez Deleo, est une technique avancée de médecine esthétique conçue pour améliorer la texture de la peau et atténuer les signes de vieillissement.<br>
            Contrairement aux lasers ablatifs, qui retirent les couches supérieures de la peau, les lasers non ablatifs ciblent les couches plus profondes sans endommager la surface, ce qui permet une récupération rapide.<br><br>

            Le déroulement d\'une séance commence par une consultation, durant laquelle le praticien évalue les besoins spécifiques de chaque patient.<br>
            Ensuite, une anesthésie locale peut être appliquée pour garantir le confort durant le traitement.<br>
            Le laser ORIGIN émet des impulsions lumineuses qui pénètrent la peau, créant de minuscules zones de chaleur dans le derme.<br>
            Cela stimule la production de collagène et d’élastine, deux composants essentiels à l’élasticité et à la fermeté de la peau.<br><br>

            En général, un plan de traitement consiste en plusieurs séances, souvent espacées de trois à quatre semaines.<br>
            Les patients peuvent commencer à voir des améliorations notables de la texture et de l’apparence de leur peau après la deuxième séance.<br>
            Les résultats optimaux se manifestent généralement après six mois, lorsque la production de collagène est à son maximum.<br><br>

            Concernant la stimulation de la repousse des cheveux, des études ont montré l’efficacité des lasers non ablatifs dans ce domaine.<br>
            Un article publié dans le *Journal of Cosmetic Dermatology* a révélé que les traitements au laser fractionné non ablatif peuvent également favoriser la circulation sanguine et revitaliser les follicules pileux, aidant ainsi à la repousse des cheveux.<br><br>

            En résumé, la régénération cutanée par laser fractionné non ablatif, comme le traitement ORIGIN, est une solution efficace pour améliorer l\'apparence de la peau mais également la qualité du cuir chevelu afin de lutter contre l’alopécie.
        </p>
                  </article>';
            break;
        case 'radiess-injection':
            echo '<h1>Injection de Radiesse®</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                     <p>
            L\'injection de Radiesse, à base d\'hydroxyapatite de calcium, est une méthode de médecine esthétique conçue pour restaurer le volume et la structure du visage.<br>
            Il fait partie de la famille des Inducteurs collagéniques injectables. Développé dans les années 2000, Radiesse est reconnu pour ses propriétés biocompatibles et biodégradables.<br>
            Son utilisation s\'est répandue grâce à son efficacité dans le comblement des rides et le redrapage des zones affaissées.<br><br>

            Le fonctionnement de Radiesse repose sur deux mécanismes :<br>
            - Tout d\'abord, les microsphères d\'hydroxyapatite de calcium agissent comme un agent volumateur immédiat, offrant un résultat visible dès l\'injection.<br>
            - Ensuite, elles stimulent la production naturelle de collagène, ce qui contribue à un effet de long terme.<br>
            En général, les résultats peuvent durer jusqu\'à 24 mois, en fonction des caractéristiques individuelles de chaque patient.<br><br>

            Radiesse est particulièrement apprécié pour sa capacité à offrir des résultats naturels, sans nécessiter de chirurgie.<br>
            L\'injection est effectuée par un professionnel qualifié, utilisant des techniques précises pour garantir un contour harmonieux du visage.<br><br>

            Voici les principales indications de l\'injection de Radiesse :<br>
            - Rides et ridules : Comblement des rides nasolabiales et des plis de marionette.<br>
            - Restaurer le volume : Correction des zones creuses, notamment les joues et les tempes.<br>
            - Redéfinition du contour facial : Amélioration de la définition de la mâchoire et du menton.<br>
            - Rajeunissement des mains : Diminution de l\'apparence des veines et des rides sur le dos des mains.<br>
            - Amélioration du décolleté : Lissage des ridules et amélioration de l\'élasticité de la peau.<br>
            - Soutien des tissus mous : Restauration de la fermeté et de la structure des tissus faciaux affaissés.<br><br>

            Cette option esthétique permet d\'obtenir des résultats subtils et naturels, contribuant à un rajeunissement du visage tout en préservant l\'expression naturelle.
        </p>
                  </article>';
            break;
        case 'laser-hair-removal':
            echo '<h1>Épilation laser</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'attiva':
            echo '<h1>ATTIVA</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'hifu':
            echo '<h1>HIFU</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
            Les HIFU, ou ultrasons focalisés de haute intensité, est une technique non invasive de médecine esthétique visant à raffermir et lifter la peau.<br>
            Utilisée depuis le début des années 2000, cette technologie a été initialement développée pour des applications médicales, notamment en oncologie, avant de trouver sa place dans l\'esthétique.<br><br>

            Le principe du HIFU repose sur l\'utilisation d\'ultrasons qui, lorsqu\'ils sont focalisés sur des couches profondes de la peau, génèrent de la chaleur.<br>
            Cette chaleur stimule la production de collagène et d’élastine, deux éléments essentiels à la fermeté et à l’élasticité de la peau.<br>
            Les ultrasons pénètrent sans endommager les couches supérieures de l\'épiderme, permettant ainsi une procédure confortable et sûre.<br><br>

            Le traitement est généralement réalisé en cabinet médical et dure entre 30 et 90 minutes, selon la zone à traiter.<br>
            Les résultats ne sont souvent visibles qu\'après quelques semaines, le temps que le corps génère suffisamment de collagène, et peuvent perdurer jusqu\'à un an ou plus.<br><br>

            Voici les principales indications du HIFU :<br><br>
            - Raffermissement de la peau : Amélioration de la fermeté et de l\'élasticité de la peau, notamment sur le visage et le cou.<br>
            - Lifting non chirurgical : Effet lifting sur le visage, réduisant l\'affaissement cutané.<br>
            - Réduction des rides : Atténuation des rides et ridules sur le front et autour des yeux.<br>
            - Amélioration du contour du visage : Redéfinition de l’ovale du visage et des contours de la mâchoire.<br>
            - Traitement du décolleté : Raffermissement et amélioration de la texture de la peau du décolleté.<br>
            - Stimulation du collagène : Amélioration générale de la texture et du tonus de la peau.<br><br>

            Le HIFU est une option idéale pour ceux qui souhaitent un lifting naturel et progressif sans intervention chirurgicale, offrant ainsi une alternative efficace aux méthodes plus invasives.
        </p>
                  </article>';
            break;
        case 'cryolipolysis':
            echo '<h1>Cryolipolyse</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'inshape':
            echo '<h1>Inshape</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;

        default:
            echo '<p>Traitement non disponible.</p>';
            break;
    }
    ?>
<?php endif; ?>