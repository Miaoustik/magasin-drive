<?php

namespace App\DataFixtures;

use App\Factory\DepartmentFactory;
use App\Factory\MainDepartmentFactory;
use App\Factory\ProductCategoryFactory;
use App\Factory\ProductFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Zenstruck\Foundry\Proxy;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

    }
    
    public function generateProducts(): void
    {

    }

    public static function getData(): array
    {

        return [
            [
                'name' => "Viandes Poissons",
                'departments' => [
                    [
                        'name' => "Boucherie",
                        'imageName' => "boucherie.jpg",
                        'products' => [
                            [
                                'name' => "Bavette d'Aloyau *** Charal",
                                'weight' => 260,
                                'price' => 878,
                                'imageName' => "viande-charal.jpg",
                                'productCategory' => "Viande bovine",
                                "ingredients" => "100 % viande bovine française",
                                'unity' => 'gr'
                            ],
                            [
                                'name' => "Steak haché 15%mg Charal Viande bovine",
                                'weight' => 260,
                                'price' => 502,
                                'imageName' => "steack-charal.jpg",
                                'productCategory' => "Viande hachée et Farce",
                                "ingredients" => "100 % viande hachée de boeuf française. Pourcentage de matières grasses inférieur à 15 % - Rapport collagène sur protéines de viande inférieur à 15 %.",
                                'unity' => 'gr'
                            ],
                        ]
                    ],
                    [
                        'name' => "Volailles et Gibiers",
                        'imageName' => "volaille.jpg",
                        'products' => [
                            [
                                'name' => "Aiguillettes poulet Maitre coq Jaune",
                                'weight' => 450,
                                'price' => 424,
                                'imageName' => "poulet.jpg",
                                'productCategory' => "Poulets",
                                "description" => "Contre-filet de poulet jaune, sans os, sans peau",
                                'unity' => 'gr'
                            ],
                            [
                                'name' => "Escalope de dinde Le Gaulois x6",
                                'weight' => 720,
                                'price' => 1073,
                                'imageName' => "dinde.jpg",
                                'productCategory' => "Dindes",
                                "description" => "Contre-filet de poulet jaune, sans os, sans peau",
                                "ingredients" => "escalopes de dinde barquette s/atmosphere",
                                'unity' => 'gr'
                            ],
                        ]
                    ],
                    [
                        'name' => "Traiteur de la mer",
                        'imageName' => "traiteur-mer.jpg",
                        'products' => [
                            [
                                'name' => "Saumon fumé Petit Navire Ecosse - 4 tranches",
                                'weight' => 120,
                                'price' => 666,
                                'imageName' => "saumon.jpg",
                                'productCategory' => "Saumons et Poissons fumés",
                                "description" => "Elevé dans les Lochs écossais selon un cahier des charges d'aquaculture très exigeant, ce saumon est préparé avec soin selon la méthode de fumage traditionnelle au bois de hêtre pour un vrai moment de plaisir.",
                                "ingredients" => "SAUMON ATLANTIQUE (Salmo salar) 97%, sel 3%",
                                'unity' => 'gr'
                            ],
                            [
                                'name' => "Batonnets Surimi Coraya x30",
                                'weight' => 450,
                                'price' => 455,
                                'imageName' => "surimi.jpg",
                                'productCategory' => "Surimis",
                                "description" => "Les bâtonnets de surimi incontournables à déguster en toute liberté ! Prêts à consommer, ils sont les compagnons idéaux à l'apéritif, pour vos salades et vos recettes chaudes ou froides.",
                                "ingredients" => "Ingrédients : Surimi : Chair de POISSON 40% (COLIN d'Alaska et/ou MERLU du Pacifique), eau, amidons (dont blé), huile de colza, blanc D'OEUF (d'élevage au sol) réhydraté, sucre, arômes naturels (CRUSTACES, BLE), sel, colorant : extrait de paprika. Peut contenir : MOLLUSQUES",
                                'unity' => 'gr'
                            ],
                        ]
                    ],
                ]
            ],
            [
                'name' => "Fruits Légumes",
                'departments' => [
                    [
                        'name' => "Légumes",
                        'imageName' => "legumes.jpg",
                        'products' => [
                            [
                                'name' => "Concombre",
                                'weight' => 1,
                                'price' => 878,
                                'imageName' => "concombre.jpg",
                                'productCategory' => "Légumes",
                                "description" => "Origine : France\nCatégorie : CAT-1-\nCalibre : 400/500G",
                                'unity' => 'p'
                            ],
                            [
                                'name' => "Salade maxi Florette Laitue iceberg",
                                'weight' => 450,
                                'price' => 220,
                                'imageName' => "salade.jpg",
                                'productCategory' => "Salades en sachet",
                                "description" => "Cette variété de laitue aux feuilles croquantes et juteuses doit son nom à la glace que l’on utilisait jadis pour la transporter. Avec une saveur légèrement sucrée, elle est parfaite pour accompagner toutes vos salades ou hamburger maison.",
                                "ingredients" => "Ingrédient : Laitue Iceberg",
                                'unity' => 'gr'
                            ],
                        ]
                    ],
                    [
                        'name' => "Fruits",
                        'imageName' => "fruits.jpg",
                        'products' => [
                            [
                                'name' => "Fraises Barquette",
                                'weight' => 500,
                                'price' => 449,
                                'imageName' => "fraise.jpg",
                                'productCategory' => "Fruits frais",
                                "description" => "Origine : France\nCatégorie : Cat-1-\nVariété : Murano",
                                'unity' => 'gr'
                            ],
                            [
                                'name' => "Quatro de graines Daco Bello Grillées - Non salées",
                                'weight' => 175,
                                'price' => 424,
                                'imageName' => "graines.jpg",
                                'productCategory' => "Fruits secs",
                                "description" => "Très croquantes, légèrement grillées, naturellement parfumées et de qualité supérieures, elles raviront tous les amateurs de noix de cajou !",
                                "ingredients" => "NOIX DE CAJOU grillées, AMANDES décortiquées grillées, NOISETTES émondées grillées, PISTACHES décortiquées grillées.",
                                'unity' => 'gr'
                            ],
                        ]
                    ],
                ]
            ],
            [
                'name' => "Pains Pâtisseries",
                'departments' => [
                    [
                        'name' => "Pains et Pâtisseries",
                        'imageName' => "pain.jpg",
                        'products' => [
                            [
                                'name' => "Baguette de campagne",
                                'weight' => 250,
                                'price' => 99,
                                'imageName' => "baguette.jpg",
                                'productCategory' => "Pains et Baguettes",
                                "ingredients" => "farine (BLE), eau, farine campagne\n(farine de BLÉ, sel, épices, enzyme fongiques,\nfarine de MALT torrifiée), sel, levure\ncontient : GLUTEN",
                                'unity' => 'gr'
                            ],
                            [
                                'name' => "Pains au chocolat pur beurre x8",
                                'weight' => 400,
                                'price' => 430,
                                'imageName' => "chocolatine.jpg",
                                'productCategory' => "Viennoiseries",
                                "ingredients" => "Farine de BLE,BEURRE\n(22.5%),eau,chocolat(10%)(sucre,pate de\ncacao,beurre de cacao,émulsifiant:lécithine de\nSOJA,arome naturel de vanille),sucre,levure,poudre\nde LAIT entier(1.5%),GLUTEN DE BLE,sel,farine de\nBLE maltée,enzymes,agent de traitement de la\nfarine E300,émulsifiant:lécithine de tournesol.\nDorure:OEUFS(0.2%).\nTraces de fruits à coque.",
                                'unity' => 'gr'
                            ],
                        ]
                    ],
                    [
                        'name' => "Pains de mie et Pains grillés",
                        'imageName' => "pain-mie.jpg",
                        'products' => [
                            [
                                'name' => "Pain Burgers création graine x4",
                                'weight' => 260,
                                'price' => 197,
                                'imageName' => "burger.jpg",
                                'productCategory' => "Pain Burger, Hot-dog, Panini",
                                "ingredients" => "farine de BLÉ ( 61%), eau, sucre, levure, huile de colza, BEURRE concentré, arôme naturel (contient alcool), flocons d'AVOINE (1,1%), sel, farine de maïs fermentée, graines de lin brun (0,6%), GRAINES DE SÉSAME (0,6%), graines de tournesol (0,6%), jaune d'OEUF en poudre, GLUTEN DE BLÉ, protéines de pois, millet décortiqué (0,3%), graines de pavot (0,2%), farine de riz, sirop de glucose, jus d'acérola en poudre. Présence possiBLE de SOJA.",
                                "description" => "Quand c'est le restaurant qui s'invite chez vous ! Une mie aérée, un chapeau doré et bombé, et un gourmand topping graines ! Découvrez le Création Graines : une recette sans huile de palme et des pains toujours fabriqués en France !",
                                'unity' => 'gr'
                            ],
                            [
                                'name' => "Pain de mie Harrys American Sandwich Nature",
                                'weight' => 550,
                                'price' => 120,
                                'imageName' => "pain-mie.jpg",
                                'productCategory' => "Pain de mie et précuit",
                                "ingredients" => "Farine de BLÉ 65%, eau, sucre, huile de colza, sel, vinaigre, levure, farine de fèves, gluten de BLÉ, arôme (contient alcool), extrait d'acérola. Peut contenir des traces d'OEUFS, SOJA, LAIT, FRUITS A COQUE, GRAINES DE SÉSAME.",
                                "description" => "Découvrez American Sandwich : L'authentique pain de mie Harrys, un vrai succès depuis 1984 ! De grandes tranches moelleuses et généreuses, irrésistibles pour satisfaire toutes vos envies au quotidien* : tartines, sandwichs, croque-monsieurs… Un vrai plaisir ! *dans le cadre d'une alimentation variée et équilibrée, et d'un mode de vie sain.",
                                'unity' => 'gr'
                            ],
                        ]
                    ],
                ]
            ],
            [
                'name' => "Laitier Oeufs Végétal",
                'departments' => [
                    [
                        'name' => "Laits et Oeufs",
                        'imageName' => "lait.jpg",
                        'products' => [
                            [
                                'name' => "Lait demi-écrémé Lactel Avec vitamine D",
                                'weight' => 50,
                                'price' => 99,
                                'imageName' => "lactel.jpg",
                                'productCategory' => "Laits demi-écrémés",
                                "ingredients" => " Ingrédients : LAIT demi-écrémé, vitamine D",
                                'unity' => 'cl',
                                'quantity' => 6,
                                'description' => "Le lait Lactel stérilisé UHT enrichi en vitamine D, est le lait de toute la famille qui participe à l’entretien de notre capital osseux, dans le cadre d'une alimentation équilibrée : la vitamine D contenue dans le lait LACTEL aide le calcium à bien se fixer sur les os, pour des os solides.",

                            ],
                            [
                                'name' => "Boisson lactée Candia Colombus Café latté goût Spéculoos",
                                'weight' => 25,
                                'price' => 196,
                                'imageName' => "candia.jpg",
                                'productCategory' => "Boissons lactées arômatisées",
                                "ingredients" => "LAIT demi-écrémé (94%), sucre, extrait de café (1,8%), arôme naturel, stabilisant : carraghénanes, correcteurs d’acidité : hydroxyde de potassium, citrate de sodium.",
                                'unity' => 'cl',
                                "description" => "Ce CAFE LATTE DE L’OURS est l’alliance de l’expertise coffee shop de COLUMBUS et du savoir-faire laitier de CANDIA. Le cold Brew, la signature café de Columbus, est une méthode douce qui infuse doucement le café à froid pour mieux libérer les arômes. Candia appartient à une coopérative d’éleveurs depuis 1971. Le lait est collecté en France dans des fermes sélectionnées de la coopérative Sodiaal."
                            ],
                        ]
                    ],
                    [
                        'name' => "Fromages",
                        'imageName' => "fromage.jpg",
                        'products' => [
                            [
                                'name' => "Mozzarella Les Croisés",
                                'weight' => 125,
                                'price' => 279,
                                'imageName' => "moza.jpg",
                                'productCategory' => "Mozzarellas, Burratas, Fetas",
                                "ingredients" => "Lait de vache pasteurisé (origine : UE), sel, coagulant microbien, correcteur d'acidité : acide citrique.\nPAYS DE FABRICATION : ITALIE\nLAIT ORIGINE : UE",
                                'unity' => 'gr',
                                'quantity' => 3,
                            ],
                            [
                                'name' => "Fromage apéritif Apérivrais Ail et fines herbes",
                                'weight' => 100,
                                'price' => 225,
                                'imageName' => "aperivrais.jpg",
                                'productCategory' => "Apéritifs et salades",
                                "ingredients" => "Ingrédients : Ingrédients du fromage: LAIT (Origine: France), CRÈME, mélange ail et fines herbes: 2,5% (ail, persil, ciboulette, poivre, arôme naturel d'ail et arôme naturel de fines herbes), sel, ferments lactiques. Ingrédients sur le fromage (en quantité variable): ail, thym, pavot, poivron, basilic, ciboulette. Produit fabriqué dans un atelier utilisant du poisson, du lait de chèvre et des fruits à coque",
                                'unity' => 'gr',
                                "description" => "La saveur phare des fromages à pâte fraîche s'invite à l'apéritif ! Avec l'ail et les fines herbes, succombez à ces délicieuses bouchées au goût frais et intense !"
                            ],
                        ]
                    ],

                ]
            ],
            [
                'name' => "Charcuterie Traiteur",
                'departments' => [
                    [
                        'name' => "Charcuteries",
                        'imageName' => "charcuterie.jpg",
                        'products' => [
                            [
                                'name' => "Jambon sec Aoste 4 Grandes tranches",
                                'weight' => 200,
                                'price' => 742,
                                'imageName' => "jambon-sec.jpg",
                                'productCategory' => "Charcuteries sèches tranchées",
                                "ingredients" => "Jambon de porc origine France, sel.\nPrésence possible de fruits à coques et de lait.",
                                'unity' => 'gr',
                                'description' => "Le jambon Aoste est tranché au meilleur de sa saveur pour offrir à votre table finesse et raffinement au quotidien.",

                            ],
                            [
                                'name' => "Knacki au jambon Herta x10",
                                'weight' => 350,
                                'price' => 406,
                                'imageName' => "knacki.jpg",
                                'productCategory' => "Knacks, Saucisses, Boudins",
                                "ingredients" => "Viande de porc 73,2% (dont jambon de porc 52,9%), eau, fibre de chicorée, sel, dextrose, PROTEINES DE LAIT, fibre de BLE, isolat de protéines de pois, levure, LACTOSE, arômes, antioxydant : isoascorbate de sodium, conservateur : nitrite de sodium, ferments. Peut contenir : OEUF,SOJA.",
                                'unity' => 'gr',
                                "description" => "Tout le plaisir de KNACKI dans une recette au jambon avec 30% de matière grasse en moins* et toujours un fumage traditionnel au bois de hêtre. Pour les enfants de moins de 4 ans, couper la saucisse dans le sens de la longueur puis en tout petits morceaux afin de prévenir les risques d'étouffement. (*par rapport à la moyenne de la catégorie)."
                            ],
                        ]
                    ],
                    [
                        'name' => "Traiteur",
                        'imageName' => "traiteur.jpg",
                        'products' => [
                            [
                                'name' => "HERTA Tendre Croc Jambon Fromg ss croûte ss nitrite",
                                'weight' => 200,
                                'price' => 228,
                                'imageName' => "croc.jpg",
                                'productCategory' => "Burgers et Croques",
                                "ingredients" => "Farine de BLE, eau, jambon de porc, FROMAGES (OEUF), huiles végétales (colza, palme), amidons modifiés, protéines de LAIT, dextrose, sel, BEURRE, GLUTEN de BLE, levure, sel de fonte : E331, conservateurs : E202, E282 ; stabilisants : E450, E451 ; émulsifiants : E322, E471 ; gélifiant : E407, arôme naturel (présence naturelle de polyphénols), antioxydant : acide ascorbique, arômes, jus de citron concentré. Viande de porc rigoureusement sélectionnée d'origine UE.",
                                'unity' => 'gr',
                                'description' => "Savourez le croque-monsieur TENDRE CROC' Sans Croûte Jambon Fromage : deux tranches de pain de mie sans croûte avec une garniture au jambon et au fromage délicieusement fondant. Les croque-monsieur de HERTA, c'est la solution pratique pour une pause déjeuner, un dîner gourmand en famille ou entre amis. Au four ou à la poêle, tout le monde se régale !",
                            ],
                            [
                                'name' => "Fettucini Lustucru Selection",
                                'weight' => 350,
                                'price' => 196,
                                'imageName' => "lustucru.jpg",
                                'productCategory' => "Pâtes fraîches et Gnocchis",
                                "ingredients" => "Semoule de BLE dur, eau, ŒUFS frais issus de poules élevées en Plein Air 10.4%. Peut contenir des traces de soja et moutarde. Conditionné sous atmosphère protectrice.",
                                'unity' => 'gr',
                                "description" => "Lustucru, n°1 des pâtes fraîches en France, met tout son savoir-faire au service des gourmands afin de vous proposer des recettes savoureuses : ravioli, gnocchi à poêler, lasagne, tagliatelle, quenelle... il y en a pour tous les goûts ! Laissez-vous tenter, c'est sûr, toute la famille va en raffoler !"
                            ],
                        ]
                    ],
                ]
            ],
            [
                'name' => "Epicerie salée",
                'departments' => [
                    [
                        'name' => "Conserves de légumes",
                        'imageName' => "conserve.jpg",
                        'products' => [
                            [
                                'name' => "Maïs ultra croquant D'Aucy",
                                'weight' => 285,
                                'price' => 108,
                                'imageName' => "mais.jpg",
                                'productCategory' => "Maïs et légumes froids",
                                "ingredients" => " Maïs doux en grains sans OGM *, eau, sel. *Organisme Génétiquement Modifié",
                                'unity' => 'gr',
                                'description' => "Notre maïs est cultivé en plein champ en France, récolté en saison et à bonne maturité. Nous le mettons en boîte le jour même de sa récolte pour préserver toutes ses qualités.",

                            ],
                            [
                                'name' => "Champignons à la Grecque Bonduelle",
                                'weight' => 400,
                                'price' => 196,
                                'imageName' => "champignon.jpg",
                                'productCategory' => "Champignons",
                                "ingredients" => "Champignons de Paris (45%), eau, double concentré de tomate (8.7%), huile de colza, vinaigre d'alcool, oignons (2,3%), oignons frits deshydratés (oignons 1%, huile de tournesol) 1,2%, sucre, sel, amidon transformé de maïs, arôme naturel, arôme naturel de citron, extrait d'oignon 0,1%, épaississant : gomme de xanthane, persil, poivre. Peut contenir des traces de lait et de céleri.",
                                'unity' => 'gr',
                                "description" => "Champignons origine Val de Loire\nRecette délicieuse et déjà prête à déguster"
                            ],
                        ]
                    ],
                    [
                        'name' => "Pâtes, Riz, Purées, Féculents",
                        'imageName' => "pate.jpg",
                        'products' => [
                            [
                                'name' => "Pâtes Barilla Coquillettes",
                                'weight' => 1,
                                'price' => 196,
                                'imageName' => "pate.jpg",
                                'productCategory' => "Pâtes",
                                "ingredients" => "Semoule de BLÉ dur, eau. Peut contenir des traces de SOJA et de MOUTARDE.",
                                'unity' => 'kg',
                                'description' => "Découvrez la sélection des pâtes courtes Barilla : Penne rigate, Fusilli, Coquillettes... Nos variétés de pâtes courtes, originales et inspirantes, vous permettront de réaliser de délicieuses recettes et de satisfaire les plus gourmands. Depuis 1877, Barilla met toute sa passion dans la fabrication des pâtes pour vous offrir des pâtes al dente.",
                            ],
                            [
                                'name' => "Riz Basmati du Penjab",
                                'weight' => 500,
                                'price' => 236,
                                'imageName' => "riz.jpg",
                                'productCategory' => "Riz",
                                "ingredients" => "Riz Basmati long grain naturellement parfumé.",
                                'unity' => 'gr',
                                "description" => "Le Basmati Taureau Ailé provient des hauts plateaux du Penjab.Situés à la frontière de l'Inde et du Pakistan. Vous apprécierez son parfum et son goût unique, la finesse de ses grains et sa blancheur intense."
                            ],
                        ]
                    ],
                ]
            ],
            [
                'name' => "Epicerie sucrée",
                'departments' => [
                    [
                        'name' => "Cafés",
                        'imageName' => "cafe.jpg",
                        'products' => [
                            [
                                'name' => "Café capsules L'OR Espresso Ristretto N°11 - x20",
                                'weight' => 104,
                                'price' => 534,
                                'imageName' => "cafe-caps.jpg",
                                'productCategory' => "Compatible Nespresso",
                                "ingredients" => "Café",
                                'unity' => 'gr',
                                'description' => "Le café en capsule L'OR Espresso RISTRETTO éblouit les sens. Composé avec soin par nos maîtres torréfacteurs, c'est un café ristretto fort au gout intense, avec de puissantes notes épicées.\nFormat : pack de 20 capsules. Couleur : Noir. Niveau d’intensité : 11.\nLes capsules L’OR Espresso sont compatibles avec votre machine à café L'OR BARISTA ® ou Nespresso ®*.\nParfumé, riche et aromatique, les amateurs apprécient la douceur et le goût fuité du café L'OR. Sans doute le meilleur café du monde.\nQue vous l’aimiez serré, expresso ou allongé, la capsule en aluminium permet de préserver ses arômes.\nNos capsules en aluminium sont fabriquées en France. Elles sont recyclables dans les poubelles de tri sélectif pour les communes recyclant les petits emballages en aluminium ou en les déposant dans l’un des nombreux points de collecte de capsules en aluminium disponibles.",

                            ],
                            [
                                'name' => "Café Moulu Carte Noire Arabica Classique",
                                'weight' => 250,
                                'price' => 1117,
                                'quantity' => 3,
                                'imageName' => "cafe.jpg",
                                'productCategory' => "Cafés moulus",
                                "ingredients" => "Café moulu 100% arabica.",
                                'unity' => 'gr',
                                "description" => "Ces grains pur arabica, cultivés à environ 1000 mètres d'altitude, ont été soigneusement sélectionnés selon des critères de qualité exigeants.\nRévélés par une torréfaction ambrée puis délicatement moulus, ils offrent un café d'exception au goût unique et parfaitement équilibré.\nPour les Maîtres Torréfacteurs Carte Noire, tout part de la qualité des grains : de l'intensité aux notes aromatiques, du savoir-faire à l'engagement, le grain est au cœur de tout un monde vivant."
                            ],
                        ]
                    ],
                    [
                        'name' => "Chocolats et Tablettes",
                        'imageName' => "choco.jpg",
                        'products' => [
                            [
                                'name' => "Chocolat assortis Lindt Lindor",
                                'weight' => 200,
                                'price' => 554,
                                'imageName' => "lindor.jpg",
                                'productCategory' => "Boites de chocolats et Rochers",
                                "ingredients" => "sucre, matière grasse végétale (coprah, palmiste), beurre de cacao, pâte de cacao, poudre de LAIT, LACTOSE, poudre de LAIT écrémé, beurre LAITIER concentré, émulsifiant (lécithine de SOJA), extrait de malt d'ORGE, arômes, vanille.\nType d'allergènes",
                                'unity' => 'gr',
                                'description' => "Découvrez le Cornet LINDOR Assorti, un assortiment de bouchées de chocolat au cœur incroyablement fondant. Composé de 3 recettes emblématiques : chocolat au lait, noir et blanc. Croquez sa délicate coquille, et son cœur passionnément fondant vous emporte comme dans un rêve, pour un petit moment de bonheur rien qu'à vous. Fondez de bonheur avec LINDOR, créé par les Maîtres Chocolatiers Lindt. La Passion et l'Amour pour le chocolat depuis 1845.",
                            ],
                            [
                                'name' => "Barre Chocolatée Kinder Maxi Chocolat au Lait x10",
                                'weight' => 210,
                                'price' => 298,
                                'imageName' => "kinder.jpg",
                                'productCategory' => "Barres chocolatées",
                                "ingredients" => "Kinder Maxi, c'est la barre au goût unique de chocolat Kinder que je connais depuis toujours. Retrouvez le temps d'une pause l'insouciance de votre enfance, en taille adulte !",
                                'unity' => 'gr',
                                "description" => "Chocolat supérieur au LAIT 40% (sucre, LAIT en poudre, beurre de cacao, pâte de cacao, émulsifiants : lécithines [SOJA], vanilline), sucre, LAIT écrémé en poudre, huile de palme, BEURRE concentré, émulsifiants : lécithines [SOJA], vanilline."
                            ],
                        ]
                    ],
                ]
            ],
        ];
    }

    private function createProduct(
        string $name,
        int $grams,
        int $price,
        string $imageName,
        string $productCategory,
        Proxy $department,
        ?string $description = null,
        ?string $ingredients = null,
        bool $isGram = true
    ): Proxy
    {
        return ProductFactory::createOne([
            'name' => $name,
            'grams' => $grams,
            'price' => $price,
            'imageName' => $imageName,
            'description' => $description,
            'productCategory' => ProductCategoryFactory::new([
                'name' => $productCategory,
                'department' => $department,
            ]),
            'department' => $department,
            "ingredients" => $ingredients,
            "isGram" => $isGram
        ]);
    }
}
