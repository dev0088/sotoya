<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
    }

    public function mentions()
    {
        return view('common.mentions');
    }

    public function faq()
    {

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

        return view('common.faq', compact('faqs'));
    }
    public function cgv()
    {

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

        return view('common.cgv', compact('premilaries', 'articles'));
    }

    public function contact()
    {
        return view('common.contact');
    }

    public function about()
    {
        return view('common.about');
    }
}
