<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//testing code
Route::post('/signin', function () {
    session()->put('logged_in', true);
    return redirect('/');
});

Route::get('/signout', function () {
    session()->flush();
    return redirect('/');
});

Route::get('/', function () {

    $joinery = 
    [
        ["name"=>"Fenêtre", "image"=>"Mask Group 1@2x.png", "price"=>50],
        ["name"=>"Baie coulissante", "image"=>"Mask Group 2@2x.png", "price"=>60], 
        ["name"=>"Porte fenêtre", "image"=>"Mask Group 3@2x.png", "price"=>70],
        ["name"=>"Porte entrée", "image"=>"Mask Group 4@2x.png", "price"=>80], 
        ["name"=>"Porte de service", "image"=>"Mask Group 5@2x.png", "price"=>90], 
        ["name"=>"Volet roulant", "image"=>"Mask Group 6@2x.png", "price"=>100], 
        ["name"=>"Garde corps", "image"=>"Mask Group 7@2x.png", "price"=>110],
        ["name"=>"Véranda", "image"=>"Mask Group 8@2x.png", "price"=>120], 
        ["name"=>"Pergola", "image"=>"Mask Group 9@2x.png", "price"=>130], 
        ["name"=>"Accessoires", "image"=>"Mask Group 10@2x.png", "price"=>140]
    ];

    return view('home', compact('joinery'));
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/mentions', function () {
    return view('mentions');
});

Route::get('/faq', function () {

    $faqs = 
    [
        [
            "title"=>"Pourquoi changer mes menuiseries (portes, fenêtres, baies…) ?", 
            "detail"=>"Les menuiseries peuvent représenter jusqu’à 15 % du total des déperditions de chaleur.<br/>
        En remplaçant vos anciennes menuiseries par des menuiseries isolantes, vous réaliserez à la fois d’importantes économies d’énergie tout en améliorant votre confort.<br/>
        Fini de jeter l’argent par les fenêtres ! Par ailleurs, de belles fenêtres, harmonieusement intégrées au bâti, valorisent votre logement. Changer ses fenêtres représente un investissement durable qui redonne de la valeur à votre patrimoine."
        ],
        [
            "title"=>"Quels sont les avantages des menuiseries en aluminium ?",
            "detail"=>"L’efficacité thermique, acoustique et l’étanchéité à l’air des menuiseries aluminium est incomparable. Avec un coefficient thermique Uw jusqu’à 1,3 W/m² K, les économies sur la facture énergétiques sont garanties !<br/>
            D’un point de vue design, le choix de coloris et de finitions est particulièrement étendu.<br/>
            Nos menuiseries en aluminium offrent, en outre, jusqu’à 20% de lumière en plus qu’une fenêtre traditionnelle. A cela s’ajoute un excellent confort acoustique et un respect de l’environnement puisque l’aluminium est un matériau 100% recyclable."
        ],
        [
            "title"=>"Que signifie exactement le terme PVC ?",
            "detail"=>"Les trois initiales PVC correspondent au mot anglais « Poly Vinyl Chloride » qui en français se traduit par Polychlorure de vinyle. Le PVC est composé de chlore à 57% et d’éthylène à 43% (pour info, la plupart des matières plastiques contient 100% d’éthylène extrait du pétrole)."
        ],
        [
            "title"=>"PVC et écologie vont-ils de paire ?",
            "detail"=>"Sur un ton imagé et humoristique, nous pouvons avancer que « le PVC c’est 43 % d’hydrocarbure et 57% de sel de table (Nacl) ». Plus sérieusement, ce matériau a su s’inscrire sur la voie du développement durable."
        ],
        [
            "title"=>"Puis-je poser mes fenêtres moi-même ?",
            "detail"=>"Le fabricant de menuiseries ne peut être tenu pour responsable de la qualité de votre travail et du résultat final qui en découle ; il est donc préférable de faire appel aux compétences d’un professionnel SOLABAIE. De plus, ela vous permettra d’avoir une garantie décennale et dans le cadre d’une rénovation, un crédit d’impôt qui engagera sa responsabilité et pourra vous délivrer la garantie 10 ans."
        ],
        [
            "title"=>"Vos fenêtres ont-elles un label qualité ?",
            "detail"=>"Nos fenêtres Alu sont fabriquées avec des profilés de la marque NF attestant de la conformité de leur extrusion aux normes en vigueur. Par ailleurs, les menuiseries sont réalisées suivant une conception relevant d’un Avis Technique ; le niveau de qualité de production en atelier est régulièrement contrôlé par le CSBT (Centre Scientifique et Technique du Bâtiment)."
        ],
        [
            "title"=>"Quels sont les avantages des menuiseries en aluminium ?",
            "detail"=>"Si votre habitation est classée ou située dans la zone de protection d’un site classé, vous devez obtenir une autorisation préalable des Monuments Historiques.<br/>
            Si vous êtes en copropriété, consultez votre règlement.<br/>
            Pour créer une nouvelle ouverture, une déclaration de travaux adressée à votre mairie est suffisante.\n
            Dans tous les autres cas, pour un changement de fenêtre qui n’altère pas l’architecture de la façade (mêmes dimensions, même forme, même couleur) vous n’avez pas besoin d’effectuer une démarche administrative avant de changer vos fenêtres."
        ]
    ];

    return view('faq', compact('faqs'));
});

Route::get('/cgv', function () {

    $premilaries = "Le client est censé avoir accepté sans réserve les présentes conditions générales de vente dès la signature pour validation sur le devis.";
    $articles = 
    [
        ["title"=>"FORMATION DU CONTRA", "detail"=>"Le contrat de vente ne prend effet qu’après acceptation par la société SOTOYA CONSTRUCTIONS de la commande du client et ce par accusé de réception. Aucune autre forme d’acceptation n’engagera la société SOTOYA CONSTRUCTIONS. Toute commande passée et acceptée par la société SOTOYA CONSTRUCTIONS devient ferme et définitive et entraîne l’obligation d’achat. A défaut de respect de l’engagement d’achat par le client pour quelque motif que ce soit, la société SOTOYA CONSTRUCTIONS se réserve le droit de lui réclamer l’intégralité du prix du devis validé."],
        ["title"=>"DROIT DE PROPRIETE", "detail"=>"Les études et tout autre document remis au client restent la propriété de la société SOTOYA CONSTRUCTIONS et doivent être rendus sur simple demande. Les brevets, marques, dessins, modèles ou procédés de fabrication qui figurent sur les documents contractuels de la société SOTOYA CONSTRUCTIONS remis au client rentent et sont la propriété exclusive de la société SOTOYA CONSTRUCTIONS. En outre ces documents ne peuvent ni être communiqués, ni exécutés, ni représentés ou reproduits sans autorisation expresse et écrite de la société SOTOYA CONSTRUCTIONS. Les études et projets fournis au client par la société SOTOYA CONSTRUCTIONS peuvent être modifiés à tout moment sans préavis au cas où les normes législatives et règlementaires en vigueur l’impliqueraient."],
        ["title"=>"FRAIS D’ETUDE COMPLEMENTAIRE", "detail"=>"Les frais d’étude sont normalement compris dans le prix fixé à la commande. Néanmoins, si le projet supporte, du fait du client, des modifications importantes non initialement prévues et qui nécessitent une reprise importante des études réalisées, la société SOTOYA CONSTRUCTIONS se réserve la possibilité de facturer des frais d’étude complémentaire."],
        ["title"=>"TRANSPORT", "detail"=>"Quelles que soient les modalités de la vente, les matériels et marchandises voyagent aux risques et périls du destinataire. Il appartient au destinataire de faire toutes les réserves dans les formes et délais prévus par les articles 105 et suivants du code de commerce et d’exercer tout recours, s’il y a lieu, contre les transporteurs."],
        ["title"=>"LIVRAISONS", "detail"=>"Les délais de livraison figurant sur le devis ne commencent à courir qu’après réception par la société SOTOYA CONSTRUCTIONS des plans approuvés par le client. La société SOTOYA CONSTRUCTIONS est dégagée de plein droit de tout engagement relatif aux délais de livraison en cas de force majeure. En outre, le délai imposé par les fournisseurs de fournitures particulières se répercutera sur le délai contractuel sans que cette répercussion puisse justifier quelque annulation de commande ou quelque indemnité que ce soit. Les matériels que le client demanderait à la société SOTOYA CONSTRUCTIONS de conserver en magasin après fabrication seraient immédiatement facturés, la mise en disposition en usine après achèvement de la fabrication étant assimilée à une livraison effectuée tant du point de vue du règlement que du point de vue du transfert de propriété. Dans ce cas les matériels séjournent dans nos locaux aux risques et périls de leur propriétaire."],
        ["title"=>"MODALITES DE PAIEMENT", "detail"=>"Pas d’escompte en cas de paiement anticipé. Sauf convention contraire expresse, il sera versé un acompte de 30% et le solde, les 70% restants, sera payé à la facturation définitive. Si le paiement est prévu par traite, le client s’engage à retourner acceptées et domiciliées lesdites lettres de change dans les 8 jours suivant leur envoi. Le défaut de réception des lettres de change acceptées dans ledit délai sera considéré comme un refus d’acceptation assimilable à un défaut de paiement. En cas de retard de paiement, la société SOTOYA CONSTRUCTIONS pourra suspendre toutes les commandes en cours sans préjudice de toute autre voie d’action. Toute somme non payée à son échéance donnera lieu de plein droit et sans mise en demeure préalable par dérogation à l’article 1153 du code civil, au paiement d’intérêt de retard s’élevant à 10% annuel. Les intérêts courront du jour de l’échéance normal du règlement jusqu’à la date du parfait paiement du prix et de ses accessoires. En cas de défaut de paiement, 10 jours après mise ne demeure demeurée infructueuse, la vente sera résiliée de plein droit si bon semble à la société SOTOYA CONSTRUCTIONS qui pourra demander la restitution des matériels sans préjudice de tous autres dommages et intérêts. L’acheteur devra rembourser la société SOTOYA CONSTRUCTIONS tous les frais occasionnés par le recouvrement des sommes non payées, y compris une indemnité forfaitaire de 10% des sommes dues. En aucun cas les réclamations éventuelles en matière de prix, de quantité ou de qualité ne peuvent dispenser l’acheteur de régler à échéance la part de nos factures excédant le montant de la réclamation sauf à mettre en œuvre automatiquement le régime des pénalités et intérêts de retard ci-dessus prévu."],
        ["title"=>"CLAUSE DE RESERVE DE PROPRIETE", "detail"=>"Conformément aux dispositions législatives en vigueur, le transfert de propriété de nos matériels se verra différé jusqu’au paiement complet du prix en principal, frais et intérêts, les ventes n’étant réputées parfaites qu’après le paiement de la totalité des sommes ci-dessus, les matériels restant notre propriété jusqu’à la réalisation de cette condition. Jusqu’à cette date, l’acquéreur n’aura que la simple qualité de détenteur de nos matériels et devra en assurer à ses frais la garde, les risques et la responsabilité. Dans tous les cas il supportera tous les risques et dommages que nos matériels pourraient subir. L’acheteur ne peut aliéner notre propriété que dans le cadre d’affaires régulièrement conclus à des conditions habituelles. Dans ce cas, l’acheteur doit informer son client de l’existence de la clause de réserve de propriété existant sur les matériels qu’il aura revendus et du droit que se réserve la société SOTOYA CONSTRUCTIONS de revendiquer entre ses mains soit le matériel litigieux, soit son prix. L’acquéreur s’engage à maintenir nos matériels constamment identifiés avant tout usage. La société SOTOYA CONSTRUCTIONS pourra se prévaloir du jeu de la présente clause de réserve de propriété trois jours après une mise en demeure adressée par lettre recommandée avec accusé de réception et restée en tout ou partie sans effet. Lorsque la société SOTOYA CONSTRUCTIONS aura fait connaitre sa décision de faire jouer la clause de réserve de propriété, et de revendiquer ses marchandises, l’acheteur devra soit les rendre sans délai à ses frais, soit les payer intégralement pour pouvoir les utiliser. En cas de redressement judiciaire ou de liquidation judiciaire de l’acheteur, la revendication de nos matériels, affectés de la clause de réserve de propriété, sera effectuée dans les conditions prévues par la loi du 25 janvier 1985 modifiée par la loi du 10 juin 1994."],
        ["title"=>"CLAUSE ATTRIBUTIVE DE COMPETENCE", "detail"=>"Election de domicile est faite par la société SOTOYA CONSTRUCTIONS à son siège social, à LA CIOTAT. En cas de contestation susceptible de s’élever entre les parties quant à la formation ou l’exécution des opérations de vente de nos matériels, quant au paiement du prix ou quant à l’interprétation ou l’exécution des clauses des présentes conditions générales de vente, le Tribunal de Commerce de MARSEILLE sera seul compétent quel que soit le lieu de la livraison, les modes et lieux de paiement. La loi applicable aux opérations de vente conclues par la société SOTOYA CONSTRUCTIONS est la loi française."]

    ];
    return view('cgv', compact('premilaries', 'articles'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/account_pro', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 1;
    return view('account_pro', compact('field'));
});

Route::get('/account_pro_projects', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 1;
    return view('account_pro_projects', compact('field'));
});

Route::get('/account_pro_his', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 1;

    $currenthistory = 
    [
        ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
    ];

    $otherhistory = 
    [
        "Mai 2020"=>[
            ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
        ],
        // "Juin 2020"=>[
        //     ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
        // ]
    ];

    return view('account_pro_his', compact('field', 'currenthistory', 'otherhistory'));
});

Route::get('/account_pro_info', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 1;
    $user = 
    [
        "gender"=>"1", 
        "firstname"=>"Jean", 
        "lastname"=>"Marc", 
        "email"=>"jeanmarc@gmail.com", 
        "password"=>"123456", 
        "field"=>1, 
        "companyname"=>"Sotoweb", 
        "address"=>"14 Avenue Saint-Médard", 
        "postcode"=>"33000", 
        "city"=>"Bordeaux", 
        "telephone"=>"06 90 84 23 12"
    ];
    return view('account_pro_info', compact('field', 'user'));
});

Route::get('/account_part', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 0;

    return view('account_part', compact('field'));
});

Route::get('/account_part_projects', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 0;

    $products = 
    [
        ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        ["date"=>"16 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>90, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        ["date"=>"12 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>240, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
    ];

    return view('account_part_projects', compact('field', 'products'));
});

Route::get('/account_part_his', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 0;

    $history = 
    [
        ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
    ];

    return view('account_part_his', compact('field', 'history'));
});

Route::get('/account_part_info', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }
    $field = 0;

    $user = 
    [
        "gender"=>"0", 
        "firstname"=>"Jean", 
        "lastname"=>"Marc", 
        "email"=>"jeanmarc@gmail.com", 
        "password"=>"123456", 
        "field"=>0, 
        "companyname"=>"", 
        "address"=>"14 Avenue Saint-Médard", 
        "postcode"=>"33000", 
        "city"=>"Bordeaux", 
        "telephone"=>"06 90 84 23 12"
    ];

    return view('account_part_info', compact('field', 'user'));
});

Route::get('/part/{joinery}', function ($joinery) {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }

    $field = 0;

    $selected_joinery = $joinery;

    $joinery = 
    [
        ["name"=>"Fenêtre", "image"=>"Mask Group 1@2x.png", "price"=>50],
        ["name"=>"Baie coulissante", "image"=>"Mask Group 2@2x.png", "price"=>60], 
        ["name"=>"Porte fenêtre", "image"=>"Mask Group 3@2x.png", "price"=>70],
        ["name"=>"Porte entrée", "image"=>"Mask Group 4@2x.png", "price"=>80], 
        ["name"=>"Porte de service", "image"=>"Mask Group 5@2x.png", "price"=>90], 
        ["name"=>"Volet roulant", "image"=>"Mask Group 6@2x.png", "price"=>100], 
        ["name"=>"Garde corps", "image"=>"Mask Group 7@2x.png", "price"=>110],
        ["name"=>"Véranda", "image"=>"Mask Group 8@2x.png", "price"=>120], 
        ["name"=>"Pergola", "image"=>"Mask Group 9@2x.png", "price"=>130], 
        ["name"=>"Accessoires", "image"=>"Mask Group 10@2x.png", "price"=>140]
    ];
    $material = 
    [
        ["name"=>"Aluminium", "price"=>10], 
        ["name"=>"PVC", "price"=>20]
    ];
    $range = 
    [
        ["name"=>"Gamme 70", "price"=>100], 
        ["name"=>"Gamme 50", "price"=>200]
    ];
    $opening = 
    [
        ["name"=>"Fixe", "price"=>10], 
        ["name"=>"Abattant", "price"=>20], 
        ["name"=>"Ouvrant française", "price"=>30], 
        ["name"=>"Ouvrant anglaise", "price"=>40], 
        ["name"=>"Oscillo-battant", "price"=>50]
    ];
    $leave = 
    [
        ["name"=>"1 vantail", "price"=>100]
    ];
    $installation = 
    [
        ["name"=>"Applique", "price"=>100], 
        ["name"=>"Tunnel", "price"=>200], 
        ["name"=>"Rénovation", "price"=>300]
    ];

    $height = 
    [
        ["name"=>"600", "price"=>100], 
        ["name"=>"700", "price"=>200], 
        ["name"=>"800", "price"=>300], 
        ["name"=>"900", "price"=>400], 
        ["name"=>"1000", "price"=>500]
    ];
    $width = 
    [
        ["name"=>"1600", "price"=>100], 
        ["name"=>"1700", "price"=>200], 
        ["name"=>"1800", "price"=>300], 
        ["name"=>"1900", "price"=>400], 
        ["name"=>"2000", "price"=>500]
    ];

    $insulation = 
    [
        ["name"=>"120", "price"=>100], 
        ["name"=>"130", "price"=>200], 
        ["name"=>"140", "price"=>300], 
        ["name"=>"150", "price"=>400]
    ];
    $aeration = 
    [
        ["name"=>"Aucune", "price"=>100], 
        ["name"=>"15 M3/H", "price"=>200], 
        ["name"=>"30 M3/H", "price"=>300]
    ];
    $glazing = 
    [
        ["name"=>"4/16/4 FE", "price"=>100], 
        ["name"=>"4/20/4 FE", "price"=>200], 
        ["name"=>"4/16/4 FE one", "price"=>300], 
        ["name"=>"4 FE/-/4 G200", "price"=>400], 
        ["name"=>"4 FE/-/4 dépoli", "price"=>500], 
        ["name"=>"4 planistar/-/4", "price"=>600], 
        ["name"=>"4 stopsol/-/4", "price"=>700], 
        ["name"=>"5/-/5 FE", "price"=>800], 
        ["name"=>"6/-/6", "price"=>900], 
        ["name"=>"6/-/4 planistar", "price"=>1000], 
        ["name"=>"10/-/4 FE", "price"=>1100], 
        ["name"=>"44.2/-/4 FE", "price"=>1200]
    ];

    $color = 
    [
        ["color"=>"#edede6", "name"=>"RAL 9016", "price"=>100], 
        ["color"=>"#383e42", "name"=>"RAL 7016", "price"=>200], 
        ["color"=>"#f1ece1", "name"=>"RAL 9010", "price"=>300], 
        ["color"=>"#a1a1a0", "name"=>"RAL 9006", "price"=>400], 
        ["color"=>"#0e0e10", "name"=>"RAL 9005", "price"=>500], 
        ["color"=>"#114232", "name"=>"RAL 6005", "price"=>600], 
        ["color"=>"#442f29", "name"=>"RAL 8017", "price"=>700], 
        ["color"=>"#878581", "name"=>"RAL 9007", "price"=>800], 
        ["color"=>"#e3d9c6", "name"=>"RAL 1013", "price"=>900], 
        ["color"=>"#004f7c", "name"=>"RAL 5010", "price"=>1000], 
        ["color"=>"#e6d2b5", "name"=>"RAL 1015", "price"=>1100], 
        ["color"=>"#6b1c23", "name"=>"RAL 3004", "price"=>1200]
    ];

    return view('particular', compact('field', 'selected_joinery', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));
});

Route::get('/part', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }

    $field = 0;

    $joinery = 
    [
        ["name"=>"Fenêtre", "image"=>"Mask Group 1@2x.png", "price"=>50],
        ["name"=>"Baie coulissante", "image"=>"Mask Group 2@2x.png", "price"=>60], 
        ["name"=>"Porte fenêtre", "image"=>"Mask Group 3@2x.png", "price"=>70],
        ["name"=>"Porte entrée", "image"=>"Mask Group 4@2x.png", "price"=>80], 
        ["name"=>"Porte de service", "image"=>"Mask Group 5@2x.png", "price"=>90], 
        ["name"=>"Volet roulant", "image"=>"Mask Group 6@2x.png", "price"=>100], 
        ["name"=>"Garde corps", "image"=>"Mask Group 7@2x.png", "price"=>110],
        ["name"=>"Véranda", "image"=>"Mask Group 8@2x.png", "price"=>120], 
        ["name"=>"Pergola", "image"=>"Mask Group 9@2x.png", "price"=>130], 
        ["name"=>"Accessoires", "image"=>"Mask Group 10@2x.png", "price"=>140]
    ];
    $material = 
    [
        ["name"=>"Aluminium", "price"=>10], 
        ["name"=>"PVC", "price"=>20]
    ];
    $range = 
    [
        ["name"=>"Gamme 70", "price"=>100], 
        ["name"=>"Gamme 50", "price"=>200]
    ];
    $opening = 
    [
        ["name"=>"Fixe", "price"=>10], 
        ["name"=>"Abattant", "price"=>20], 
        ["name"=>"Ouvrant française", "price"=>30], 
        ["name"=>"Ouvrant anglaise", "price"=>40], 
        ["name"=>"Oscillo-battant", "price"=>50]
    ];
    $leave = 
    [
        ["name"=>"1 vantail", "price"=>100]
    ];
    $installation = 
    [
        ["name"=>"Applique", "price"=>100], 
        ["name"=>"Tunnel", "price"=>200], 
        ["name"=>"Rénovation", "price"=>300]
    ];

    $height = 
    [
        ["name"=>"600", "price"=>100], 
        ["name"=>"700", "price"=>200], 
        ["name"=>"800", "price"=>300], 
        ["name"=>"900", "price"=>400], 
        ["name"=>"1000", "price"=>500]
    ];
    $width = 
    [
        ["name"=>"1600", "price"=>100], 
        ["name"=>"1700", "price"=>200], 
        ["name"=>"1800", "price"=>300], 
        ["name"=>"1900", "price"=>400], 
        ["name"=>"2000", "price"=>500]
    ];

    $insulation = 
    [
        ["name"=>"120", "price"=>100], 
        ["name"=>"130", "price"=>200], 
        ["name"=>"140", "price"=>300], 
        ["name"=>"150", "price"=>400]
    ];
    $aeration = 
    [
        ["name"=>"Aucune", "price"=>100], 
        ["name"=>"15 M3/H", "price"=>200], 
        ["name"=>"30 M3/H", "price"=>300]
    ];
    $glazing = 
    [
        ["name"=>"4/16/4 FE", "price"=>100], 
        ["name"=>"4/20/4 FE", "price"=>200], 
        ["name"=>"4/16/4 FE one", "price"=>300], 
        ["name"=>"4 FE/-/4 G200", "price"=>400], 
        ["name"=>"4 FE/-/4 dépoli", "price"=>500], 
        ["name"=>"4 planistar/-/4", "price"=>600], 
        ["name"=>"4 stopsol/-/4", "price"=>700], 
        ["name"=>"5/-/5 FE", "price"=>800], 
        ["name"=>"6/-/6", "price"=>900], 
        ["name"=>"6/-/4 planistar", "price"=>1000], 
        ["name"=>"10/-/4 FE", "price"=>1100], 
        ["name"=>"44.2/-/4 FE", "price"=>1200]
    ];

    $color = 
    [
        ["color"=>"#edede6", "name"=>"RAL 9016", "price"=>100], 
        ["color"=>"#383e42", "name"=>"RAL 7016", "price"=>200], 
        ["color"=>"#f1ece1", "name"=>"RAL 9010", "price"=>300], 
        ["color"=>"#a1a1a0", "name"=>"RAL 9006", "price"=>400], 
        ["color"=>"#0e0e10", "name"=>"RAL 9005", "price"=>500], 
        ["color"=>"#114232", "name"=>"RAL 6005", "price"=>600], 
        ["color"=>"#442f29", "name"=>"RAL 8017", "price"=>700], 
        ["color"=>"#878581", "name"=>"RAL 9007", "price"=>800], 
        ["color"=>"#e3d9c6", "name"=>"RAL 1013", "price"=>900], 
        ["color"=>"#004f7c", "name"=>"RAL 5010", "price"=>1000], 
        ["color"=>"#e6d2b5", "name"=>"RAL 1015", "price"=>1100], 
        ["color"=>"#6b1c23", "name"=>"RAL 3004", "price"=>1200]
    ];

    return view('particular', compact('field', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));
});

Route::post('/part_summary', function(Request $request) {

    $options = ["joinery", "material", "range", "opening", "leave", "installation" ,"aeration", "glazing", "color"];
    $dimension_options = ["height_size", "width_size", "insulation_size"];

    $price = $request->post("price_submit");

    $joinery = $request->post("joinery_submit");
    $material = $request->post("material_submit");
    $range = $request->post("range_submit");
    $opening = $request->post("opening_submit");
    $leave = $request->post("leave_submit");
    $installation = $request->post("installation_submit");
    $aeration = $request->post("aeration_submit");
    $glazing = $request->post("glazing_submit");
    $color = $request->post("color_submit");
    $height_size = $request->post("height_size_submit");
    $width_size = $request->post("width_size_submit");
    $insulation_size = $request->post("insulation_size_submit");

    return view('particular_summary', compact('price', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'aeration', 'glazing', 'color', 'height_size', 'width_size', 'insulation_size'));

});

Route::get('/pro', function () {
    if (!session()->get('logged_in')) {
        return redirect("/signin");
    }

    $field = 1;

    $joinery = 
    [
        ["name"=>"Fenêtre", "price"=>50, "image"=>"Mask Group 1@2x.png", "default"=>false],
        ["name"=>"Baie coulissante", "image"=>"Mask Group 2@2x.png", "price"=>60, "default"=>false], 
        ["name"=>"Porte fenêtre", "image"=>"Mask Group 3@2x.png", "price"=>70, "default"=>false],
        ["name"=>"Porte entrée", "image"=>"Mask Group 4@2x.png", "price"=>80, "default"=>false], 
        ["name"=>"Porte de service", "image"=>"Mask Group 5@2x.png", "price"=>90, "default"=>true], 
        ["name"=>"Volet roulant", "image"=>"Mask Group 6@2x.png", "price"=>100, "default"=>false], 
        ["name"=>"Garde corps", "image"=>"Mask Group 7@2x.png", "price"=>110, "default"=>false],
        ["name"=>"Véranda", "image"=>"Mask Group 8@2x.png", "price"=>120, "default"=>false], 
        ["name"=>"Pergola", "image"=>"Mask Group 9@2x.png", "price"=>130, "default"=>false], 
        ["name"=>"Accessoires", "image"=>"Mask Group 10@2x.png", "price"=>140, "default"=>false]
    ];
    $material = 
    [
        ["name"=>"Aluminium", "price"=>10, "default"=>false], 
        ["name"=>"PVC", "price"=>20, "default"=>true]
    ];
    $range = 
    [
        ["name"=>"Gamme 70", "price"=>100, "default"=>true], 
        ["name"=>"Gamme 50", "price"=>200, "default"=>false]
    ];
    $opening = 
    [
        ["name"=>"Fixe", "price"=>10, "default"=>false], 
        ["name"=>"Abattant", "price"=>20, "default"=>false], 
        ["name"=>"Ouvrant française", "price"=>30, "default"=>true], 
        ["name"=>"Ouvrant anglaise", "price"=>40, "default"=>false], 
        ["name"=>"Oscillo-battant", "price"=>50, "default"=>false]
    ];
    $leave = 
    [
        ["name"=>"1 vantail", "price"=>100, "default"=>true]
    ];
    $installation = 
    [
        ["name"=>"Applique", "price"=>100, "default"=>false], 
        ["name"=>"Tunnel", "price"=>200, "default"=>true], 
        ["name"=>"Rénovation", "price"=>300, "default"=>false]
    ];

    $height = 
    [
        ["name"=>"600", "price"=>100, "default"=>false], 
        ["name"=>"700", "price"=>200, "default"=>false], 
        ["name"=>"800", "price"=>300, "default"=>true], 
        ["name"=>"900", "price"=>400, "default"=>false], 
        ["name"=>"1000", "price"=>500, "default"=>false]
    ];
    $width = 
    [
        ["name"=>"1600", "price"=>100, "default"=>false], 
        ["name"=>"1700", "price"=>200, "default"=>false], 
        ["name"=>"1800", "price"=>300, "default"=>false], 
        ["name"=>"1900", "price"=>400, "default"=>true], 
        ["name"=>"2000", "price"=>500, "default"=>false]
    ];

    $insulation = 
    [
        ["name"=>"120", "price"=>100, "default"=>false], 
        ["name"=>"130", "price"=>200, "default"=>true], 
        ["name"=>"140", "price"=>300, "default"=>false], 
        ["name"=>"150", "price"=>400, "default"=>false]
    ];
    $aeration = 
    [
        ["name"=>"Aucune", "price"=>100, "default"=>false], 
        ["name"=>"15 M3/H", "price"=>200, "default"=>true], 
        ["name"=>"30 M3/H", "price"=>300, "default"=>false]
    ];
    $glazing = 
    [
        ["name"=>"4/16/4 FE", "price"=>100, "default"=>false], 
        ["name"=>"4/20/4 FE", "price"=>200, "default"=>false], 
        ["name"=>"4/16/4 FE one", "price"=>300, "default"=>false], 
        ["name"=>"4 FE/-/4 G200", "price"=>400, "default"=>false], 
        ["name"=>"4 FE/-/4 dépoli", "price"=>500, "default"=>true], 
        ["name"=>"4 planistar/-/4", "price"=>600, "default"=>false], 
        ["name"=>"4 stopsol/-/4", "price"=>700, "default"=>false], 
        ["name"=>"5/-/5 FE", "price"=>800, "default"=>false], 
        ["name"=>"6/-/6", "price"=>900, "default"=>false], 
        ["name"=>"6/-/4 planistar", "price"=>1000, "default"=>false], 
        ["name"=>"10/-/4 FE", "price"=>1100, "default"=>false], 
        ["name"=>"44.2/-/4 FE", "price"=>1200, "default"=>false]
    ];

    $color = 
    [
        ["color"=>"#edede6", "name"=>"RAL 9016", "price"=>100, "default"=>false], 
        ["color"=>"#383e42", "name"=>"RAL 7016", "price"=>200, "default"=>false], 
        ["color"=>"#f1ece1", "name"=>"RAL 9010", "price"=>300, "default"=>true], 
        ["color"=>"#a1a1a0", "name"=>"RAL 9006", "price"=>400, "default"=>false], 
        ["color"=>"#0e0e10", "name"=>"RAL 9005", "price"=>500, "default"=>false], 
        ["color"=>"#114232", "name"=>"RAL 6005", "price"=>600, "default"=>false], 
        ["color"=>"#442f29", "name"=>"RAL 8017", "price"=>700, "default"=>false], 
        ["color"=>"#878581", "name"=>"RAL 9007", "price"=>800, "default"=>false], 
        ["color"=>"#e3d9c6", "name"=>"RAL 1013", "price"=>900, "default"=>false], 
        ["color"=>"#004f7c", "name"=>"RAL 5010", "price"=>1000, "default"=>false], 
        ["color"=>"#e6d2b5", "name"=>"RAL 1015", "price"=>1100, "default"=>false], 
        ["color"=>"#6b1c23", "name"=>"RAL 3004", "price"=>1200, "default"=>false]
    ];

    return view('professional', compact('field', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));
});









