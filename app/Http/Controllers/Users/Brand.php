<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Brand extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $products = [
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Piguet Royal Oak/4_BASELUXREF_45.png',
                'alt' => 'Audemars Piguet Royal Oak',
                'title' => 'Audemars Piguet Royal Oak',
                'images' => [
                    "assets/img/audemars/Audemars Piguet Royal Oak/2_ap5_55aad9ca-1c41-4c2b-bea0-4149db28a709.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak/4_BASELUXREF_45.png",
                    "assets/img/audemars/Audemars Piguet Royal Oak/1_ap4_10358e30-d297-4d36-be19-c15cd6cd0e73.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak/3_ap3.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Un véritable chef-d’œuvre horloger, la Royal Oak est une montre iconique au design audacieux et intemporel. Elle se distingue par sa lunette octogonale vissée, inspirée des hublots de navire, et son bracelet intégré qui offre un confort inégalé. Conçue pour allier sport et élégance, elle est dotée d’un mouvement mécanique de haute précision.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Royal Oak Fond Blanc 41mm Homme/5_Lady_Dior_My_ABC_26.png',
                'alt' => 'Audemars Royal Oak Fond Blanc 41mm',
                'title' => 'Audemars Royal Oak Fond Blanc 41mm',
                'images' => [
                    "assets/img/audemars/Audemars Royal Oak Fond Blanc 41mm Homme/3_ap4_a82162a6-8bcb-43f7-bb5a-09726aaf6057.jpg",
                    "assets/img/audemars/Audemars Royal Oak Fond Blanc 41mm Homme/2_ap4_a82162a6-8bcb-43f7-bb5a-09726aaf6057.jpg",
                    "assets/img/audemars/Audemars Royal Oak Fond Blanc 41mm Homme/1_apwhite2.jpg",
                    "assets/img/audemars/Audemars Royal Oak Fond Blanc 41mm Homme/4_ap5_8ad7e66b-9fe2-4354-b5d3-1bf7f546aa1d.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Un modèle raffiné avec un cadran blanc lumineux, incarnant le savoir-faire et l’excellence horlogère.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Offshore Diver Chronographe 44 mm Jaune/1_Lady_Dior_My_ABC_27.png',
                'alt' => 'Audemars Offshore Diver Chronographe 44 mm Jaune',
                'title' => 'Audemars Offshore Diver Chronographe 44 mm Jaune',
                'images' => [
                    "assets/img/audemars/Audemars Offshore Diver Chronographe 44 mm Jaune/1_Lady_Dior_My_ABC_27.png",
                    "assets/img/audemars/Audemars Offshore Diver Chronographe 44 mm Jaune/3_photo1632404285.jpg",
                    "assets/img/audemars/Audemars Offshore Diver Chronographe 44 mm Jaune/5_audemarsjaune1.jpg",
                    "assets/img/audemars/Audemars Offshore Diver Chronographe 44 mm Jaune/4_audemarsjaune.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Une montre conçue pour l’exploration sous-marine, cette Offshore Diver est équipée d’un chronographe précis et d’une résistance à l’eau exceptionnelle. Son cadran jaune vibrant, associé à un boîtier robuste de 44 mm, lui confère un caractère dynamique et audacieux. Idéale pour les passionnés de plongée et d’aventure.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Piguet Royal Oak Skeleton argenté/4_image_1200x_d9cb8a2e-ac4c-4990-af0f-fa3e7c6568eb.jpg',
                'alt' => 'Audemars Piguet Royal Oak Skeleton argenté',
                'title' => 'Audemars Piguet Royal Oak Skeleton argenté',
                'images' => [
                    "assets/img/audemars/Audemars Piguet Royal Oak Skeleton argenté/4_image_1200x_d9cb8a2e-ac4c-4990-af0f-fa3e7c6568eb.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak Skeleton argenté/1_image_1200x_95ef0cd8-23fe-44fe-ab1c-804894e77e56.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak Skeleton argenté/2_image_1200x_abceb3a8-4f20-41f2-8bd6-1dd25224143c.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak Skeleton argenté/3_image_1200x_6c7c777b-dbdd-4075-9f33-7128a1bd66ac.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Un modèle qui allie haute horlogerie et savoir-faire artistique. Grâce à son cadran ajouré, il dévoile avec finesse la mécanique complexe de son mouvement automatique. Les finitions argentées ajoutent une touche d’élégance, faisant de cette montre un choix parfait pour les connaisseurs en quête d’exclusivité.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars piguet chronographe noir/4_Audemars-Piguet-26320ST.OO_.1220ST.01-Royal-Oak-Cronograph-Full-Set-Passione-Vintage-Palermo0A-7-scaled.jpg',
                'alt' => 'Audemars piguet chronographe noir',
                'title' => 'Audemars piguet chronographe noir',
                'images' => [
                    "assets/img/audemars/Audemars piguet chronographe noir/4_Audemars-Piguet-26320ST.OO_.1220ST.01-Royal-Oak-Cronograph-Full-Set-Passione-Vintage-Palermo0A-7-scaled.jpg",
                    "assets/img/audemars/Audemars piguet chronographe noir/1_watch-club-audemars-piguet-royal-oak-box-and-papers-never-polished-ref-26320stoo1220st01-year-2014-wb.jpgwbwbwbwbwb8.jpg",
                    "assets/img/audemars/Audemars piguet chronographe noir/3_26576317-pvfs5utrr52ndgdgcchvrzbw-ExtraLarge.webp",
                    "assets/img/audemars/Audemars piguet chronographe noir/2_1_80a89a84-b27c-4f90-a26d-4850a520b8a4.png",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Cette version noire du chronographe Audemars Piguet incarne la puissance et le style moderne. Son boîtier raffiné, associé à un cadran sombre avec des compteurs chronographiques, en fait une montre idéale pour les amateurs de montres sportives haut de gamme. Son allure sobre et sophistiquée lui permet de s’adapter à toutes les tenues.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Piguet Royal Oak rose gold/1_BASELUXREF_97190428-d13f-4dc9-8338-8a0bc569bb7a.jpg',
                'alt' => 'Audemars Piguet Royal Oak rose gold',
                'title' => 'Audemars Piguet Royal Oak rose gold',
                'images' => [
                    "assets/img/audemars/Audemars Piguet Royal Oak rose gold/5_image_23f37430-d809-41a9-b323-baa185478b86.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak rose gold/3_image_c05bd2fe-f2a0-42d4-881a-7ca6111f17f3.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak rose gold/2_image_a4584039-5d7b-4fce-9395-266d40d91ec1.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak rose gold/1_BASELUXREF_97190428-d13f-4dc9-8338-8a0bc569bb7a.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Une montre qui symbolise le luxe et le raffinement avec son boîtier et son bracelet en or rose 18 carats. Son design emblématique et son mouvement automatique en font une pièce d’exception, parfaite pour ceux qui souhaitent affirmer leur élégance avec une montre à la présence imposante et intemporelle.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Offshore Diver 44 mm Vert/3_photo1664037810_7.jpg',
                'alt' => 'Audemars Offshore Diver 44 mm Vert',
                'title' => 'Audemars Offshore Diver 44 mm Vert',
                'images' => [
                    "assets/img/audemars/Audemars Offshore Diver 44 mm Vert/3_photo1664037810_7.jpg",
                    "assets/img/audemars/Audemars Offshore Diver 44 mm Vert/4_photo1664037810_7.jpg",
                    "assets/img/audemars/Audemars Offshore Diver 44 mm Vert/2_photo1664037810_5.jpg",
                    "assets/img/audemars/Audemars Offshore Diver 44 mm Vert/1_photo1664037810_8.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Dotée d’un boîtier robuste de 44 mm et d’une résistance à l’eau jusqu’à 300 mètres, cette montre est idéale pour les amateurs de plongée et d’activités nautiques. Son cadran vert profond apporte une touche unique et dynamique, tout en conservant la sophistication propre à la collection Offshore.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Royal Oak Fond Noir 41mm Homme/5_apnoir2.png',
                'alt' => 'Audemars Royal Oak Fond Noir 41mm',
                'title' => 'Audemars Royal Oak Fond Noir 41mm',
                'images' => [
                    "assets/img/audemars/Audemars Royal Oak Fond Noir 41mm Homme/5_apnoir2.png",
                    "assets/img/audemars/Audemars Royal Oak Fond Noir 41mm Homme/2_ap2_716fb77f-2b54-442b-a46f-ca68283886c9.jpg",
                    "assets/img/audemars/Audemars Royal Oak Fond Noir 41mm Homme/1_ap5.jpg",
                    "assets/img/audemars/Audemars Royal Oak Fond Noir 41mm Homme/3_ap2_716fb77f-2b54-442b-a46f-ca68283886c9.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Une montre élégante avec un cadran noir profond, offrant un contraste saisissant et un style moderne.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Offshore Diver 44 mm Noire/1_Lady_Dior_My_ABC_30.png',
                'alt' => 'Audemars Offshore Diver 44 mm Noire',
                'title' => 'Audemars Offshore Diver 44 mm Noire',
                'images' => [
                    "assets/img/audemars/Audemars Offshore Diver 44 mm Noire/1_Lady_Dior_My_ABC_30.png",
                    "assets/img/audemars/Audemars Offshore Diver 44 mm Noire/2_WhatsAppImage2023-04-09at04.29.44_4.jpg"
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Cette version full black de l’Offshore Diver se distingue par son look audacieux et moderne. Conçue pour résister aux conditions extrêmes, elle offre une lisibilité parfaite sous l’eau grâce à ses index luminescents et son affichage précis. Une montre parfaite pour les amateurs de montres de sport de luxe.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Piguet Royal Oak Double Balance Wheel Openworked 41mm/3_image_1280x_df84a040-3219-4ad2-b6a9-eabb07be21db.jpg',
                'alt' => 'Audemars Piguet Royal Oak Double Balance Wheel Openworked 41mm',
                'title' => 'Audemars Piguet Royal Oak Double Balance Wheel Openworked 41mm',
                'images' => [
                    "assets/img/audemars/Audemars Piguet Royal Oak Double Balance Wheel Openworked 41mm/3_image_1280x_df84a040-3219-4ad2-b6a9-eabb07be21db.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak Double Balance Wheel Openworked 41mm/1_image_1280x_afe34699-f2bc-43f1-9f5c-fe6d280044ac.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak Double Balance Wheel Openworked 41mm/2_Audemars-Piguet-Royal-Oak-Double-Balance-Wheel-Openworked-Black-Ceramic-2020-front-scaled.jpg",
                    "assets/img/audemars/Audemars Piguet Royal Oak Double Balance Wheel Openworked 41mm/5_image_1280x_273d7c90-386f-4ccf-b160-7754dfd76935.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Une œuvre d’ingénierie horlogère remarquable. Son cadran squelette met en valeur la double roue d’échappement, une innovation qui améliore la précision du mouvement. Son boîtier en acier et ses finitions raffinées en font une montre d’exception pour les passionnés d’horlogerie fine.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Montre Homme Audemars Royal Oak Chronographe 41mm 26320ST.OO.1220ST/5_audemarsfdbleu.jpg',
                'alt' => 'Montre Audemars Royal Oak Chronographe 41mm 26320ST.OO.1220ST',
                'title' => 'Montre Audemars Royal Oak Chronographe 41mm 26320ST.OO.1220ST',
                'images' => [
                    "assets/img/audemars/Montre Homme Audemars Royal Oak Chronographe 41mm 26320ST.OO.1220ST/5_audemarsfdbleu.jpg",
                    "assets/img/audemars/Montre Homme Audemars Royal Oak Chronographe 41mm 26320ST.OO.1220ST/4_audemarsfdbleu4.jpg",
                    "assets/img/audemars/Montre Homme Audemars Royal Oak Chronographe 41mm 26320ST.OO.1220ST/3_audemarsfdbleu6.jpg",
                    "assets/img/audemars/Montre Homme Audemars Royal Oak Chronographe 41mm 26320ST.OO.1220ST/2_AudemarsPiguetRoyalOakChronograph41mm26320STOO1220ST02_a0cfe115-2a4b-4770-8c76-422e12f896e4.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Un chronographe sportif et prestigieux, reconnaissable à son boîtier octogonal et son design intemporel.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/audemars piguet royal oak chronograph panda/2_Audemars_Piguet_Royal_Oak_Chronograph_Panda_Watch_Vault_10_2048x_6d2cd53d-7562-4f7e-8b64-f7ea365079dd.jpg',
                'alt' => 'audemars piguet royal oak chronograph panda',
                'title' => 'audemars piguet royal oak chronograph panda',
                'images' => [
                    "assets/img/audemars/audemars piguet royal oak chronograph panda/2_Audemars_Piguet_Royal_Oak_Chronograph_Panda_Watch_Vault_10_2048x_6d2cd53d-7562-4f7e-8b64-f7ea365079dd.jpg",
                    "assets/img/audemars/audemars piguet royal oak chronograph panda/4_Audemars_Piguet_Royal_Oak_Chronograph_Panda_Watch_Vault_03_2048x_15be114c-167b-4d87-b766-b4c876e9a36c.jpg",
                    "assets/img/audemars/audemars piguet royal oak chronograph panda/1_Untitleddesign_96.png",
                    "assets/img/audemars/audemars piguet royal oak chronograph panda/5_2-6.jpg",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Un modèle au cadran blanc avec des sous-compteurs noirs, inspiré des célèbres montres « Panda ». Son design distinctif, combiné à la robustesse du boîtier en acier et au bracelet intégré, en fait une montre très prisée par les collectionneurs et amateurs de chronographes sportifs.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/Audemars Diver Chronographe 42 mm Bleu/1_photo1664037830_1.jpg',
                'alt' => 'Audemars Diver Chronographe 42 mm Bleu',
                'title' => 'Audemars Diver Chronographe 42 mm Bleu',
                'images' => [
                    "assets/img/audemars/Audemars Diver Chronographe 42 mm Bleu/1_photo1664037830_1.jpg",
                    "assets/img/audemars/Audemars Diver Chronographe 42 mm Bleu/2_photo1664037852_2.jpg",
                    "assets/img/audemars/Audemars Diver Chronographe 42 mm Bleu/5_008_Royal-Oak-Offshore-Stainless-Steel-Gents-15710ST.jpg",
                    "assets/img/audemars/Audemars Diver Chronographe 42 mm Bleu/4_Untitleddesign_40.png",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Conçue pour l’action, cette montre de plongée est équipée d’un chronographe précis et d’un cadran bleu profond qui évoque l’océan. Son boîtier en acier inoxydable et son étanchéité élevée en font un choix parfait pour les passionnés de sports nautiques et de montres techniques.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/audemars/audemart piguet skeleton rose gold/IMG_8517.PNG',
                'alt' => 'audemart piguet skeleton rose gold',
                'title' => 'audemart piguet skeleton rose gold',
                'images' => [
                    "assets/img/audemars/audemart piguet skeleton rose gold/IMG_8517.PNG",
                    "assets/img/audemars/audemart piguet skeleton rose gold/IMG_8518.PNG",
                    "assets/img/audemars/audemart piguet skeleton rose gold/IMG_8519.PNG",
                    "assets/img/audemars/audemart piguet skeleton rose gold/IMG_8520.PNG",
                ],
                'slug' => 'audemars',
                'brand_slug' => 'audemars',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Un chef-d'œuvre horloger avec un cadran squelette qui révèle la complexité du mouvement, sublimé par un boîtier en or rose 18K."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot Classic Fusion noir/2_s3b6530-4.jpg',
                'alt' => 'Hublot Classic Fusion noir',
                'title' => 'Hublot Classic Fusion noir',
                'images' => [
                    "assets/img/hublot/Hublot Classic Fusion noir/2_s3b6530-4.jpg",
                    "assets/img/hublot/Hublot Classic Fusion noir/3_0_s3b6514-1.jpg",
                    "assets/img/hublot/Hublot Classic Fusion noir/4_0_s3b6565-2.jpg",
                    "assets/img/hublot/Hublot Classic Fusion noir/1_BASE_LUXMMOMENT_2.jpg",
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Un modèle classique et raffiné qui incarne l’élégance intemporelle. Son cadran noir profond, associé à un boîtier en céramique ou en titane, confère à cette montre une allure sophistiquée et polyvalente. Elle est idéale pour ceux qui recherchent une montre sobre et luxueuse à la fois.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot CLASSIC FUSION VERT/1_66f550b104dda0.jpg',
                'alt' => 'Hublot CLASSIC FUSION VERT',
                'title' => 'Hublot CLASSIC FUSION VERT',
                'images' => [
                    "assets/img/hublot/Hublot CLASSIC FUSION VERT/1_66f550b104dda0.jpg",
                    "assets/img/hublot/Hublot CLASSIC FUSION VERT/4_66f550b105d661.jpg",
                    "assets/img/hublot/Hublot CLASSIC FUSION VERT/3_mdyJj3uzuWbpWqNnDU3EjFi7TiAnAZras9HH1EuN_1.jpg",
                    "assets/img/hublot/Hublot CLASSIC FUSION VERT/2_66f550b105d661.jpg"
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => 'Cette version en vert profond apporte une touche d’originalité à l’iconique Classic Fusion. Son design épuré et contemporain en fait une montre parfaite pour les amateurs d’élégance moderne. Son cadran soleillé capte la lumière et lui donne une profondeur unique.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot Big Bang/1_BASELUXREF_2.png',
                'alt' => 'Hublot Big Bang',
                'title' => 'Hublot Big Bang',
                'images' => [
                    "assets/img/hublot/Hublot Big Bang/1_BASELUXREF_2.png",
                    "assets/img/hublot/Hublot Big Bang/4_hublot-big-bang-44-mm_2.png",
                    "assets/img/hublot/Hublot Big Bang/3_hublot-big-bang-44-mm_1.png",
                    "assets/img/hublot/Hublot Big Bang/2_hublot-big-bang-44-mm.png"
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => 'Véritable emblème de la marque, la Big Bang incarne l’esprit audacieux de Hublot avec son design puissant et sa technologie de pointe. Dotée d’un boîtier robuste et de matériaux innovants, elle est conçue pour les passionnés de montres sportives haut de gamme. Son allure dynamique et sa mécanique de précision en font une montre prisée par les amateurs d’horlogerie moderne.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot Classic Fusion Racing/1_32390263-iefgrx2ipwi3mwd90aremz3a-ExtraLarge.jpg',
                'alt' => 'Hublot Classic Fusion Racing',
                'title' => 'Hublot Classic Fusion Racing',
                'images' => [
                    "assets/img/hublot/Hublot Classic Fusion Racing/1_32390263-iefgrx2ipwi3mwd90aremz3a-ExtraLarge.jpg",
                    "assets/img/hublot/Hublot Classic Fusion Racing/2_BASELUXREF_2.jpg",
                    "assets/img/hublot/Hublot Classic Fusion Racing/3_32390263-f9b0nwo8kuzhgcpmpwqurnhz-ExtraLarge.jpg"
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => 'Inspirée du monde du sport automobile, cette montre arbore un design dynamique qui évoque la vitesse et la performance. Son cadran épuré et son boîtier léger en font une pièce idéale pour les amateurs de sensations fortes et de montres à l’allure sportive.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot Hublot Classic Fusion Titanium Blue 42mm/3_BASE_LUX_REF_7.png',
                'alt' => 'Hublot Classic Fusion Titanium Blue 42mm',
                'title' => 'Hublot Classic Fusion Titanium Blue 42mm',
                'images' => [
                    "assets/img/hublot/Hublot Hublot Classic Fusion Titanium Blue 42mm/3_BASE_LUX_REF_7.png",
                    "assets/img/hublot/Hublot Hublot Classic Fusion Titanium Blue 42mm/2_BASE_LUX_REF_8.png",
                    "assets/img/hublot/Hublot Hublot Classic Fusion Titanium Blue 42mm/1_BASELUXREF_5.png",
                    "assets/img/hublot/Hublot Hublot Classic Fusion Titanium Blue 42mm/4_BASE_LUX_REF_6.png"
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => 'Une alliance parfaite entre élégance et confort. Son boîtier en titane ultra-léger garantit une sensation de légèreté au poignet, tandis que son cadran bleu vibrant apporte une touche de modernité et de distinction. Un choix idéal pour ceux qui recherchent une montre à la fois robuste et raffinée.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot CLASSIC FUSION JAUNE/2_D058DEF7-9F66-4DC9-A8C7-FE73B9DE5560.jpg',
                'alt' => 'Hublot CLASSIC FUSION JAUNE',
                'title' => 'Hublot CLASSIC FUSION JAUNE',
                'images' => [
                    "assets/img/hublot/Hublot CLASSIC FUSION JAUNE/2_D058DEF7-9F66-4DC9-A8C7-FE73B9DE5560.jpg",
                    "assets/img/hublot/Hublot CLASSIC FUSION JAUNE/1_465903007_17888466036128454_6048976367199474925_n.jpg",
                    "assets/img/hublot/Hublot CLASSIC FUSION JAUNE/3_EA2FA525-AC06-4418-999E-1792F93637B0.jpg"
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => 'Avec son cadran jaune éclatant, cette montre audacieuse se distingue par son design vibrant et énergique. Elle incarne l’esprit novateur de Hublot, parfait pour ceux qui veulent une montre qui attire tous les regards. Son boîtier élégant met en valeur son style unique.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot Classic Fusion Titanium Green 42mm/5_BASE_LUXMMOMENT_16.jpg',
                'alt' => 'Hublot Classic Fusion Titanium Green 42mm',
                'title' => 'Hublot Classic Fusion Titanium Green 42mm',
                'images' => [
                    "assets/img/hublot/Hublot Classic Fusion Titanium Green 42mm/5_BASE_LUXMMOMENT_16.jpg",
                    "assets/img/hublot/Hublot Classic Fusion Titanium Green 42mm/2_17170946_5.jpg",
                    "assets/img/hublot/Hublot Classic Fusion Titanium Green 42mm/4_17170946_7.jpg",
                    "assets/img/hublot/Hublot Classic Fusion Titanium Green 42mm/1_17170946_8.jpg",
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => 'Un modèle qui associe la légèreté du titane à l’élégance d’un cadran vert sophistiqué. Son design minimaliste et ses finitions haut de gamme en font une montre incontournable pour les amateurs de montres contemporaines et distinctives.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/hublot/Hublot Classic Fusion King Gold Blue/3_Classic-Fusion-King-Gold-Blue-42-mm-ad-shot.jpg',
                'alt' => 'Hublot Classic Fusion King Gold Blue',
                'title' => 'Hublot Classic Fusion King Gold Blue',
                'images' => [
                    "assets/img/hublot/Hublot Classic Fusion King Gold Blue/3_Classic-Fusion-King-Gold-Blue-42-mm-ad-shot.jpg",
                    "assets/img/hublot/Hublot Classic Fusion King Gold Blue/1_LadyDiorMyABC_4.png",
                    "assets/img/hublot/Hublot Classic Fusion King Gold Blue/4_Classic-Fusion-King-Gold-Blue-42-mm-lifestyle-shot.jpg",
                    "assets/img/hublot/Hublot Classic Fusion King Gold Blue/5_Classic-Fusion-King-Gold-Blue-42-mm-close-up-shot.jpg",
                ],
                'slug' => 'hublot',
                'brand_slug' => 'hublot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => 'Une pièce d’exception qui marie le prestige de l’or King Gold 18 carats à la profondeur d’un cadran bleu intense. Ce contraste saisissant confère à cette montre une allure royale et somptueuse, idéale pour ceux qui recherchent une montre de luxe au design raffiné.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Santos bleu/5_w1242_tpadding12_6_0d7abf1d-22d0-4d80-b446-01f6eba12e0a.jpg',
                'alt' => 'Santos bleu',
                'title' => 'Santos bleu',
                'images' => [
                    "assets/img/cartier/Santos bleu/3_w1242_tpadding12_3_2f740fcd-04fc-4bc0-9fd3-dccf51917741.jpg",
                    "assets/img/cartier/Santos bleu/4_w1242_tpadding12_1_2d8e1819-89c4-4909-8015-209d9e94c30a.jpg",
                    "assets/img/cartier/Santos bleu/2_w1242_tpadding12_2_073dfc3b-495f-4fca-9791-824846784da7.jpg",
                    "assets/img/cartier/Santos bleu/1_w1242_tpadding12_4_1bfe500a-ea92-40c8-9bea-ae0a6b831348.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' =>  "Un modèle élégant de la collection Santos avec un cadran bleu profond. Ce design classique, associé à une touche moderne, incarne l'élégance et la sophistication, parfait pour ceux qui recherchent une montre à la fois intemporelle et distinctive."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Santos bleu/4_BASE_LUX_REF_12.jpg',
                'alt' => 'Cartier Santos bleu',
                'title' => 'Cartier Santos bleu',
                'images' => [
                    "assets/img/cartier/Cartier Santos bleu/4_BASE_LUX_REF_12.jpg",
                    "assets/img/cartier/Cartier Santos bleu/5_9c6045d5101ae5edee8dbb1bb69c170e-4CKBQMRu8QmhJUi1pjey_1.jpg",
                    "assets/img/cartier/Cartier Santos bleu/2_cartier-santos_3.png",
                    "assets/img/cartier/Cartier Santos bleu/3_9882808a0c935e22efdd624ebe3a5105-T7W4ie6EiDyc4aBqEe5V_1.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Une montre élégante de la collection Santos avec un design carré aux bords doux. Elle présente un cadran bleu qui apporte une touche moderne au design classique, avec un bracelet en acier inoxydable. Elle combine parfaitement luxe et fonctionnalité, en faisant un choix idéal pour les amateurs de montres haut de gamme."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Skeleton Argenté/1_32658058-3t6w4us8nrtxqb5b6w8dzapg-Zoom.jpg',
                'alt' => 'Cartier Skeleton Argenté',
                'title' => 'Cartier Skeleton Argenté',
                'images' => [
                    "assets/img/cartier/Cartier Skeleton Argenté/1_32658058-3t6w4us8nrtxqb5b6w8dzapg-Zoom.jpg",
                    "assets/img/cartier/Cartier Skeleton Argenté/2_32658058-lpm2x82cklhwhwbt5a8dfm8s-Zoom.jpg",
                    "assets/img/cartier/Cartier Skeleton Argenté/3_32658058-0d606j7kjx82wrx3tk9s5h1j-Zoom.jpg"
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => 'Une montre au design ouvert qui révèle la mécanique intérieure, offrant une vue imprenable sur le mouvement. Les touches argentées ajoutent un éclat subtil à ce modèle innovant, idéal pour les amateurs de montres transparentes et mécaniques.'
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Tank Louiss Noir/3_LadyDiorMyABC_4_d8924182-7721-4e27-b751-74f955a10931.png',
                'alt' => 'Cartier Tank Louiss Noir',
                'title' => 'Cartier Tank Louiss Noir',
                'images' => [
                    "assets/img/cartier/Cartier Tank Louiss Noir/1_w1242_tpadding12-23.jpg",
                    "assets/img/cartier/Cartier Tank Louiss Noir/4_w1242_tpadding12-25.jpg",
                    "assets/img/cartier/Cartier Tank Louiss Noir/3_LadyDiorMyABC_4_d8924182-7721-4e27-b751-74f955a10931.png",
                    "assets/img/cartier/Cartier Tank Louiss Noir/2_w1242_tpadding12-22.jpg"
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Un modèle classique de la collection Tank, avec un cadran noir sophistiqué. Ce modèle symbolise l'élégance à la française, avec son design épuré et sa forme rectangulaire iconique qui le rend immédiatement reconnaissable."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Skeleton Doré et Argenté/3_33790327-2bvg2q9z1zbsoivf6m0n2mtd-Zoom.jpg',
                'alt' => 'Cartier Skeleton Doré et Argenté',
                'title' => 'Cartier Skeleton Doré et Argenté',
                'images' => [
                    "assets/img/cartier/Cartier Skeleton Doré et Argenté/3_33790327-2bvg2q9z1zbsoivf6m0n2mtd-Zoom.jpg",
                    "assets/img/cartier/Cartier Skeleton Doré et Argenté/1_33790327-channsj1ygi0la2in3kepnv1-Zoom.jpg",
                    "assets/img/cartier/Cartier Skeleton Doré et Argenté/4_33790327-db5us86yi23pgkx3r6gxyqmx-Zoom.jpg",
                    "assets/img/cartier/Cartier Skeleton Doré et Argenté/5_33790327-wgjuxp70bpip5e8u24n0pp7w-Zoom.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Un modèle Skeleton avec un boîtier bicolore, combinant l'or et l'argent, pour un contraste élégant. Ce design unique met en avant le mouvement de la montre tout en offrant un look luxueux et raffiné."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Drive/2_BASELUXREF_21.jpg',
                'alt' => 'Cartier Drive',
                'title' => 'Cartier Drive',
                'images' => [
                    "assets/img/cartier/Cartier Drive/4_cartier-drive_2.png",
                    "assets/img/cartier/Cartier Drive/2_BASELUXREF_21.jpg",
                    "assets/img/cartier/Cartier Drive/3_cartier-drive_4.png",
                    "assets/img/cartier/Cartier Drive/1_5750db5f-5431-4965-b7e9-e7835ec3ac73.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Une montre inspirée des lignes élégantes des voitures de luxe, offrant une forme arrondie et une esthétique sophistiquée. Ce modèle allie design automobile et horlogerie de précision, parfait pour ceux qui apprécient les détails raffinés et l'innovation."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Santos WSSA0037 Pour Homme/4_Lady_Dior_My_ABC_7_7cff0dd5-27b5-4999-adc4-55db1393cca7.png',
                'alt' => 'Cartier Santos WSSA0037',
                'title' => 'Cartier Santos WSSA0037',
                'images' => [
                    "assets/img/cartier/Cartier Santos WSSA0037 Pour Homme/4_Lady_Dior_My_ABC_7_7cff0dd5-27b5-4999-adc4-55db1393cca7.png",
                    "assets/img/cartier/Cartier Santos WSSA0037 Pour Homme/2_w1242_tpadding12_4_e830a1b5-8712-43c8-b5cd-3921f67aa947.jpg",
                    "assets/img/cartier/Cartier Santos WSSA0037 Pour Homme/5_w1242_tpadding12_1_76408328-30e5-4604-ba63-813762489002.jpg",
                    "assets/img/cartier/Cartier Santos WSSA0037 Pour Homme/1_w1242_tpadding12_3_c3a7b1e8-43cc-42d6-9924-571f42c4a23e.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Un modèle iconique de Cartier avec un bracelet intégré et une allure sophistiquée, alliant tradition et modernité."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/cartier Santos blanc/3_Designsanstitre_51aa8ade-92ab-4416-85ec-ce6d1c241a6a.png',
                'alt' => 'cartier Santos blanc',
                'title' => 'cartier Santos blanc',
                'images' => [
                    "assets/img/cartier/cartier Santos blanc/1_w1242_tpadding12_3_3df03222-50e6-47a9-9927-7aa0ff666d95.jpg",
                    "assets/img/cartier/cartier Santos blanc/2_w1242_tpadding12_4_761fc010-3455-40e9-8603-97859986391b.jpg",
                    "assets/img/cartier/cartier Santos blanc/3_Designsanstitre_51aa8ade-92ab-4416-85ec-ce6d1c241a6a.png",
                    "assets/img/cartier/cartier Santos blanc/4_w1242_tpadding12_1_1ecfb002-74d6-4bae-87cb-c9a8a985c000.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Une version classique de la Santos avec un cadran blanc pur, offrant un style intemporel. Ce modèle conserve l'élégance de la collection tout en apportant une touche de simplicité et de luminosité."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Ballon Bleu/1_Designsanstitre_b53dc35a-872a-4375-ad8c-d6a0e4696606.png',
                'alt' => 'Cartier Ballon Bleu',
                'title' => 'Cartier Ballon Bleu',
                'images' => [
                    "assets/img/cartier/Cartier Ballon Bleu/2_w1242_tpadding12_2_dc6d9ec3-0fa4-45b3-aff5-79d72d26c438.jpg",
                    "assets/img/cartier/Cartier Ballon Bleu/3_w1242_tpadding12_deb8c11d-d4ff-4198-962e-66733db44f4d.jpg",
                    "assets/img/cartier/Cartier Ballon Bleu/1_Designsanstitre_b53dc35a-872a-4375-ad8c-d6a0e4696606.png",
                    "assets/img/cartier/Cartier Ballon Bleu/4_w1242_tpadding12_1_72d1e703-b796-4800-a79e-3f698dd130f2.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Un design arrondi et élégant avec un cadran raffiné, représentant le luxe et le prestige intemporel de Cartier."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Ballon Bleu 42mm/2_BASELUXREF_15.jpg',
                'alt' => 'Cartier Ballon Bleu 42mm',
                'title' => 'Cartier Ballon Bleu 42mm',
                'images' => [
                    "assets/img/cartier/Cartier Ballon Bleu 42mm/3_cartier-12646-annee-2011-ecrin-boite-dorigine-certificat-dorigine-certificat-dorigine-garantie-kronos-2-ans-genre-homme-sous-titre-ballon-bleu-42mm-ref-3001-sous-titre-fiche-produit-m_af8273d8-540f-4e06-86e2-e345de745d03.jpg",
                    "assets/img/cartier/Cartier Ballon Bleu 42mm/4_cartier-12646-annee-2011-ecrin-boite-dorigine-certificat-dorigine-certificat-dorigine-garantie-kronos-2-ans-genre-homme-sous-titre-ballon-bleu-42mm-ref-3001-sous-titre-fiche-produit-m_34eaa569-2f74-4d51-8a6e-5ac5dc537958.jpg",
                    "assets/img/cartier/Cartier Ballon Bleu 42mm/2_BASELUXREF_15.jpg",
                    "assets/img/cartier/Cartier Ballon Bleu 42mm/5_cartier-12646-annee-2011-ecrin-boite-dorigine-certificat-dorigine-certificat-dorigine-garantie-kronos-2-ans-genre-homme-sous-titre-ballon-bleu-42mm-ref-3001-sous-titre-fiche-produit-m_32596bdd-85d0-4ee0-9324-945716892751.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Une version plus imposante de la Ballon Bleu, offrant un équilibre parfait entre élégance et présence au poignet."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier santos 36 Mm/1_Designsanstitre_87495aa1-7085-475d-856d-c88b565068cc.png',
                'alt' => 'Cartier santos 36 Mm',
                'title' => 'Cartier santos 36 Mm',
                'images' => [
                    "assets/img/cartier/Cartier santos 36 Mm/2_w1242_tpadding12-2022-02-26T191347.869_e4443a38-2281-4281-a88d-4259899f990d.jpg",
                    "assets/img/cartier/Cartier santos 36 Mm/3_w1242_tpadding12_8_bc638c5a-96b1-400d-82d2-7f662a503661.jpg",
                    "assets/img/cartier/Cartier santos 36 Mm/1_Designsanstitre_87495aa1-7085-475d-856d-c88b565068cc.png",
                    "assets/img/cartier/Cartier santos 36 Mm/4_w1242_tpadding12_2_aa03b136-29e2-4b3f-88fb-f699def77231.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Une montre iconique au design carré intemporel, idéale pour ceux qui recherchent un modèle à la fois classique et moderne."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/cartier/Cartier Santos vert/5_BASELUXREF_6_ae3b22f8-aa83-459b-a122-08131322a8ec.jpg',
                'alt' => 'Cartier Santos vert',
                'title' => 'Cartier Santos vert',
                'images' => [
                    "assets/img/cartier/Cartier Santos vert/1_w260_tpadding12_3.jpg",
                    "assets/img/cartier/Cartier Santos vert/3_w260_tpadding12_4.jpg",
                    "assets/img/cartier/Cartier Santos vert/5_BASELUXREF_6_ae3b22f8-aa83-459b-a122-08131322a8ec.jpg",
                    "assets/img/cartier/Cartier Santos vert/4_w260_tpadding12_1.jpg",
                ],
                'slug' => 'cartier',
                'brand_slug' => 'cartier',
                'price' => '850',
                'price_packaging' => '999',
                'description' => "Une déclinaison audacieuse avec un cadran vert profond, apportant une touche de fraîcheur et d’originalité."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/tissot/TISSOT PRX POWERMATIC 80Noir/1_205.png',
                'alt' => 'TISSOT PRX POWERMATIC 80 Noir',
                'title' => 'TISSOT PRX POWERMATIC 80 Noir',
                'images' => [
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80Noir/1_205.png",
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80Noir/TISSOT PRX POWERMATIC 80 Noir.webp",
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80Noir/TISSOT PRX POWERMATIC 80 Noir 1.webp",
                ],
                'slug' => 'tissot',
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un garde-temps élégant qui fusionne le classique et le moderne, doté d’un cadran noir raffiné et d’un bracelet intégré en acier inoxydable. Équipée du mouvement automatique Powermatic 80, cette montre offre une réserve de marche exceptionnelle allant jusqu'à 80 heures, garantissant une précision et une fiabilité remarquables. Son design épuré et sa polyvalence en font une pièce idéale pour toutes les occasions, alliant confort et sophistication."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/tissot/TISSOT PRX POWERMATIC 80 Bleu/2_204.png',
                'alt' => 'TISSOT PRX POWERMATIC 80 Bleu',
                'title' => 'TISSOT PRX POWERMATIC 80 Bleu',
                'images' => [
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80 Bleu/1_T137.407.11.041.00_AMB_S_1.webp",
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80 Bleu/2_204.png",
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80 Bleu/IMG_5772.HEIC",
                ],
                'slug' => 'tissot',
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Ce modèle séduit par son cadran bleu intense, apportant une touche contemporaine au design intemporel de la collection PRX. Son boîtier en acier inoxydable brossé, associé à une finition soignée, reflète l'excellence du savoir-faire horloger suisse. Étanche jusqu'à 100 mètres, cette montre est un choix parfait pour les amateurs de montres élégantes et fonctionnelles, offrant un équilibre parfait entre esthétique et performance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/tissot/TISSOT PRX POWERMATIC 80 Vert/1_207.png',
                'alt' => 'TISSOT PRX POWERMATIC 80 Vert',
                'title' => 'TISSOT PRX POWERMATIC 80 Vert',
                'images' => [
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80 Vert/1_207.png"
                ],
                'slug' => 'tissot',
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Avec son cadran vert profond, ce modèle affirme un style audacieux et raffiné. Inspirée du design emblématique des années 70, cette montre arbore un boîtier fin et un bracelet intégré qui épousent parfaitement le poignet. Son mouvement Powermatic 80 assure une autonomie prolongée, tandis que le verre saphir antirayures garantit une lisibilité optimale et une résistance accrue aux chocs du quotidien. Un choix idéal pour ceux qui recherchent une montre distinctive, à la fois vintage et contemporaine."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/tissot/TISSOT PRX POWERMATIC 80 Blanche/1_206.png',
                'alt' => 'TISSOT PRX POWERMATIC 80 Blanche',
                'title' => 'TISSOT PRX POWERMATIC 80 Blanche',
                'images' => [
                    "assets/img/tissot/TISSOT PRX POWERMATIC 80 Blanche/1_206.png",
                ],
                'slug' => 'tissot',
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Élégante et lumineuse, cette édition arbore un cadran blanc immaculé qui incarne à la perfection le raffinement minimaliste. Son bracelet en acier inoxydable et son boîtier aux lignes épurées offrent une allure sophistiquée et intemporelle. Grâce à son mouvement automatique Powermatic 80, cette montre assure une précision exceptionnelle et un confort optimal pour une utilisation quotidienne. Son design raffiné en fait une pièce de choix pour les amateurs de montres qui allient modernité et tradition horlogère suisse."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Cadran Blanc/4_montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-1_1800x1800.png',
                'alt' => 'Montre Homme TT - PXR Powermatic 80 Cadran Blanc',
                'title' => 'Montre Homme TT - PXR Powermatic 80 Cadran Blanc',
                'images' => [
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Cadran Blanc/4_montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-1_1800x1800.png",
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Cadran Blanc/1_montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-3_1800x1800.png",
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Cadran Blanc/2_montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-2_1800x1800.png",
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Cadran Blanc/3_montre-homme-tt-pxr-powermatic-80-cadran-blanc-velvera-ma-4_1800x1800.png",
                ],
                'slug' => 'tissot',
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un modèle classique avec un cadran blanc lumineux, idéal pour une allure élégante et sobre."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Ice Blue/4_montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-1_1800x1800.png',
                'alt' => 'Montre Homme TT - PXR Powermatic 80 Ice Blue',
                'title' => 'Montre Homme TT - PXR Powermatic 80 Ice Blue',
                'images' => [
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Ice Blue/4_montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-1_1800x1800.png",
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Ice Blue/2_montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-2_1800x1800.png",
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Ice Blue/3_montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-4_1800x1800.png",
                    "assets/img/tissot/Montre Homme TT - PXR Powermatic 80 Ice Blue/5_montre-homme-tt-pxr-powermatic-80-ice-blue-velvera-ma-5_1800x1800.png",
                ],
                'slug' => 'tissot',
                'brand_slug' => 'tissot',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Une montre moderne avec un cadran bleu glacé, alliant raffinement et technologie avancée."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Nautilus/4_36981801-nafjj287x70xecxy7wooxrd8-ExtraLarge.jpg',
                'alt' => 'Patek Philippe Nautilus',
                'title' => 'Patek Philippe Nautilus',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Nautilus/4_36981801-nafjj287x70xecxy7wooxrd8-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Nautilus/5_BASELUXREF_22.png",
                    "assets/img/patekphilippe/Patek Philippe Nautilus/2_36981801-1em4otbsnmckgpv9aqzjf6wy-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Nautilus/1_36981801-la0p6uhx4v3vs9xiwrjhci26-ExtraLarge.jpg",
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "L'une des montres les plus emblématiques et convoitées au monde, la Nautilus combine à la perfection un design élégant et un caractère sportif. Dotée d’un cadran rond à huit côtés et d’un bracelet métallique intégré, elle reflète une touche de luxe intemporel tout en restant suffisamment polyvalente pour s’adapter à toutes les occasions. Son style unique et sa qualité exceptionnelle en font une montre de collection très prisée des connaisseurs."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Aquanaut bleu/1_32833548-hdk663juo1ipvv6qw9zc1t57-ExtraLarge.jpg',
                'alt' => 'Patek Philippe Aquanaut bleu',
                'title' => 'Patek Philippe Aquanaut bleu',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Aquanaut bleu/1_32833548-hdk663juo1ipvv6qw9zc1t57-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut bleu/3_20417041-6421klt0oct9kesgggf91w2g-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut bleu/5_ptk_1800x1800_f2be5509-1997-4d94-b978-d2705cf788f3.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut bleu/2_20417041-3fsbbi3dkhaotnu851vpad7z-ExtraLarge.jpg",
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Ce modèle incarne la fusion parfaite entre la haute performance et l’élégance, avec un cadran bleu éclatant qui ajoute une touche dynamique à son allure. Le bracelet en caoutchouc de haute qualité assure confort et flexibilité, faisant de cette montre un choix privilégié pour les amateurs de sports nautiques et les aventuriers, tout en restant sophistiquée pour les occasions les plus élégantes."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe 5968A - AQUANAUT/1_BASE_LUX_REF_32.png',
                'alt' => 'Patek Philippe 5968A - AQUANAUT',
                'title' => 'Patek Philippe 5968A - AQUANAUT',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe 5968A - AQUANAUT/1_BASE_LUX_REF_32.png",
                    "assets/img/patekphilippe/Patek Philippe 5968A - AQUANAUT/2_E8BE86E7-6F21-4287-A289-E901782BDD58.webp"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une montre sportive et élégante en acier inoxydable, dotée d’un cadran noir embossé et d’un chronographe flyback. Son bracelet en composite résistant à l’eau renforce son allure dynamique et moderne."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe 5968G - AQUANAUT/2_Screen_Shot_2020-07-20_at_4.59.06_PM.png',
                'alt' => 'Patek Philippe 5968G - AQUANAUT',
                'title' => 'Patek Philippe 5968G - AQUANAUT',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe 5968G - AQUANAUT/2_Screen_Shot_2020-07-20_at_4.59.06_PM.png",
                    "assets/img/patekphilippe/Patek Philippe 5968G - AQUANAUT/3_5968G_010_12_2x_0b3e95fb-4f7f-4d8d-9975-98036eb0c78a.jpg",
                    "assets/img/patekphilippe/Patek Philippe 5968G - AQUANAUT/1_150.png",
                    "assets/img/patekphilippe/Patek Philippe 5968G - AQUANAUT/4_5968G_010_16_2x_323d8fdc-5424-4570-b2a7-9269da7f03e9.jpg",
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une version en or blanc de l’Aquanaut Chronographe, offrant un cadran bleu sophistiqué et un design raffiné. Son boîtier luxueux et son bracelet en caoutchouc apportent une combinaison parfaite entre élégance et performance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Nautilus Vert Dial/2_23478503-8ctt9h19stumdrghzenbti6f-ExtraLarge.webp',
                'alt' => 'Patek Philippe Nautilus Vert Dial',
                'title' => 'Patek Philippe Nautilus Vert Dial',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Nautilus Vert Dial/2_23478503-8ctt9h19stumdrghzenbti6f-ExtraLarge.webp",
                    "assets/img/patekphilippe/Patek Philippe Nautilus Vert Dial/4_Untitleddesign_26.png",
                    "assets/img/patekphilippe/Patek Philippe Nautilus Vert Dial/1_patek-philippe-nautilus-5711-1a-014-stainless-steel-green-dial-patek-philippe-40740412326132_1280x_bfa96ad3-08f9-4522-b13b-0f8e2e09ba42.webp",
                    "assets/img/patekphilippe/Patek Philippe Nautilus Vert Dial/3_patek-5711-014-06.jpg",
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Édition rare de la célèbre Nautilus, le Vert Dial se distingue par son cadran vert vibrant et audacieux, tout en préservant l’essence de son design classique. Ce modèle, unique en son genre, attire les regards par son style moderne et audacieux, tout en restant fidèle à l'héritage et à l'élégance intemporelle de la collection Nautilus."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Aquanaut marron/3_27621978-8glaj1qci3ujw9dbl0fpz6b4-ExtraLarge.jpg',
                'alt' => 'Patek Philippe Aquanaut marron',
                'title' => 'Patek Philippe Aquanaut marron',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Aquanaut marron/3_27621978-8glaj1qci3ujw9dbl0fpz6b4-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut marron/2_27621978-s97suhk2gkafvtk4rticogo2-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut marron/5_BASELUXREF_1.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut marron/6_BASELUXREF_1.jpg",
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une montre au style distinctif avec un cadran marron raffiné et un bracelet en caoutchouc assorti. Son design sportif et luxueux en fait un choix parfait pour les amateurs d'élégance contemporaine."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Nautilus blanc/5_BASELUXREF_30.png',
                'alt' => 'Patek Philippe Nautilus blanc',
                'title' => 'Patek Philippe Nautilus blanc',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Nautilus blanc/5_BASELUXREF_30.png",
                    "assets/img/patekphilippe/Patek Philippe Nautilus blanc/1_kzbhnv01p22272-600x600_1.webp",
                    "assets/img/patekphilippe/Patek Philippe Nautilus blanc/2_girwwktdeox277-600x600.webp",
                    "assets/img/patekphilippe/Patek Philippe Nautilus blanc/3_czmy4unr22d273-600x600.webp",
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une version emblématique de la Nautilus, avec un cadran blanc épuré qui accentue son allure sophistiquée. Son boîtier en acier et son bracelet intégré assurent un confort et une élégance intemporels."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Aquanaut noir/4_BASE_LUX_REF_ebab2695-9dc6-4966-8f9a-fee8df9235ef.jpg',
                'alt' => 'Patek Philippe Aquanaut noir',
                'title' => 'Patek Philippe Aquanaut noir',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Aquanaut noir/1_33603791-wb9f226xog89k5vh5xunsvex-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut noir/2_33603791-mysmfex5r8murmmjfp78jgof-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut noir/3_23549924-ipffv7qdao61vpzem2v8djg2-ExtraLarge.jpg",
                    "assets/img/patekphilippe/Patek Philippe Aquanaut noir/4_BASE_LUX_REF_ebab2695-9dc6-4966-8f9a-fee8df9235ef.jpg"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Un modèle sportif et moderne avec un cadran noir texturé et un bracelet en composite ultra-résistant. Son look sobre et puissant en fait une montre idéale pour les aventuriers et les amateurs de design raffiné."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe diamant/4fb4f390-1d71-46c6-b77d-eb2ff1748252.jpeg',
                'alt' => 'Patek Philippe diamant',
                'title' => 'Patek Philippe diamant',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe diamant/4fb4f390-1d71-46c6-b77d-eb2ff1748252.jpeg",
                    "assets/img/patekphilippe/Patek Philippe diamant/9ef35d5d-8a87-4160-a02d-273eecfe25b5.jpeg",
                    "assets/img/patekphilippe/Patek Philippe diamant/b873f882-5409-474c-9385-ce01fa83f442.jpeg",
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une pièce d’exception ornée de diamants, incarnant le luxe absolu et le savoir-faire horloger suisse."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe nautilus bleu/WhatsApp Image 2025-03-06 at 02.57.31 (1).jpeg',
                'alt' => 'Patek Philippe nautilus bleu',
                'title' => 'Patek Philippe nautilus bleu',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe nautilus bleu/WhatsApp Image 2025-03-06 at 02.57.27.jpeg",
                    "assets/img/patekphilippe/Patek Philippe nautilus bleu/WhatsApp Image 2025-03-06 at 02.57.30.jpeg",
                    "assets/img/patekphilippe/Patek Philippe nautilus bleu/WhatsApp Image 2025-03-06 at 02.57.31.jpeg",
                    "assets/img/patekphilippe/Patek Philippe nautilus bleu/WhatsApp Image 2025-03-06 at 02.57.31 (1).jpeg",
                    "assets/img/patekphilippe/Patek Philippe nautilus bleu/WhatsApp Image 2025-03-06 at 02.57.27.jpeg"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une montre emblématique avec un cadran bleu raffiné, alliant sophistication et sportivité."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Montre Homme Patek Aquanaut Automatique Orange/1_montre-homme-patek-aquanaut-automatique-orange-velvera-ma-1_1800x1800.png',
                'alt' => 'Montre Homme Patek Aquanaut Automatique Orange',
                'title' => 'Montre Homme Patek Aquanaut Automatique Orange',
                'images' => [
                    "assets/img/patekphilippe/Montre Homme Patek Aquanaut Automatique Orange/4_montre-homme-patek-aquanaut-automatique-orange-velvera-ma-5_1800x1800.png",
                    "assets/img/patekphilippe/Montre Homme Patek Aquanaut Automatique Orange/3_montre-homme-patek-aquanaut-automatique-orange-velvera-ma-3_1800x1800.png",
                    "assets/img/patekphilippe/Montre Homme Patek Aquanaut Automatique Orange/2_montre-homme-patek-aquanaut-automatique-orange-velvera-ma-2_1800x1800.png",
                    "assets/img/patekphilippe/Montre Homme Patek Aquanaut Automatique Orange/1_montre-homme-patek-aquanaut-automatique-orange-velvera-ma-1_1800x1800.png"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une version audacieuse et dynamique avec un bracelet et des détails orange, offrant un style unique et moderne."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Montre Homme Patek - Nautilus Tiffany Automatique/2_montre-homme-patek-nautilus-tiffany-automatique-velvera-ma-1_1800x1800.png',
                'alt' => 'Montre Homme Patek - Nautilus Tiffany Automatique',
                'title' => 'Montre Homme Patek - Nautilus Tiffany Automatique',
                'images' => [
                    "assets/img/patekphilippe/Montre Homme Patek - Nautilus Tiffany Automatique/1_montre-homme-patek-nautilus-tiffany-automatique-velvera-ma-3_1800x1800.png",
                    "assets/img/patekphilippe/Montre Homme Patek - Nautilus Tiffany Automatique/3_montre-homme-patek-nautilus-tiffany-automatique-velvera-ma-2_1800x1800.png",
                    "assets/img/patekphilippe/Montre Homme Patek - Nautilus Tiffany Automatique/4_montre-homme-patek-nautilus-tiffany-automatique-velvera-ma-4_1800x1800.png",
                    "assets/img/patekphilippe/Montre Homme Patek - Nautilus Tiffany Automatique/2_montre-homme-patek-nautilus-tiffany-automatique-velvera-ma-1_1800x1800.png"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Un modèle exclusif avec un cadran bleu Tiffany, combinant luxe et rareté."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe geneve/2_BASELUXREF_28.jpg',
                'alt' => 'Patek Philippe geneve',
                'title' => 'Patek Philippe geneve',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe geneve/1_522042045.jpg",
                    "assets/img/patekphilippe/Patek Philippe geneve/3_522042042.jpg",
                    "assets/img/patekphilippe/Patek Philippe geneve/4_522042046.jpg",
                    "assets/img/patekphilippe/Patek Philippe geneve/2_BASELUXREF_28.jpg"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Symbole d’excellence horlogère, cette montre incarne le savoir-faire et le raffinement de la maison Patek Philippe."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Nautilus Chronograph/1_BASELUXREF_50.png',
                'alt' => 'Patek Philippe Nautilus Chronograph',
                'title' => 'Patek Philippe Nautilus Chronograph',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Nautilus Chronograph/2_82444896_117913433065602_3906581031284637696_n.jpg",
                    "assets/img/patekphilippe/Patek Philippe Nautilus Chronograph/1_BASELUXREF_50.png"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une montre prestigieuse avec fonction chronographe, alliant performance et élégance intemporelle."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/patekphilippe/Patek Philippe Nautilus chronographe vert/5_BASELUXREF_6f01b9c8-dbe4-4f44-856b-005cb06cf0b9.jpg',
                'alt' => 'Patek Philippe Nautilus chronographe vert',
                'title' => 'Patek Philippe Nautilus chronographe vert',
                'images' => [
                    "assets/img/patekphilippe/Patek Philippe Nautilus chronographe vert/1_20220918140400_64aa622bdb753f7b61c5187748c57b1c_tr2k_1.jpg",
                    "assets/img/patekphilippe/Patek Philippe Nautilus chronographe vert/2_20220918140402_64aa622bdb753f7b61c5187748c57b1c_4n7e_1.jpg",
                    "assets/img/patekphilippe/Patek Philippe Nautilus chronographe vert/3_20220918140401_64aa622bdb753f7b61c5187748c57b1c_2c8x_2.jpg",
                    "assets/img/patekphilippe/Patek Philippe Nautilus chronographe vert/5_BASELUXREF_6f01b9c8-dbe4-4f44-856b-005cb06cf0b9.jpg"
                ],
                'slug' => 'patekphilippe',
                'brand_slug' => 'patekphilippe',
                'price' => '850',
                'price_packaging' => '1000',
                'description' => "Une version élégante et distinctive avec un cadran vert intense, associant sportivité et sophistication."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Montre Datejust 41 Blanc Jubilé Pour Homme/Untitleddesign_64.png',
                'alt' => 'Montre Datejust 41 Blanc Jubilé',
                'title' => 'Montre Datejust 41 Blanc Jubilé',
                'images' => [
                    "assets/img/rolex/Montre Datejust 41 Blanc Jubilé Pour Homme/ROLEX126334_891a437c-c86a-45d5-9a36-eafcd95d89fc.jpg",
                    "assets/img/rolex/Montre Datejust 41 Blanc Jubilé Pour Homme/ROLEX126334_eaceaaa2-d74c-4536-b7ff-bee5b37f2d23.jpg",
                    "assets/img/rolex/Montre Datejust 41 Blanc Jubilé Pour Homme/ROLEX126334_0bb1410c-3010-4cdc-a547-5f3cdd9da7bf.jpg",
                    "assets/img/rolex/Montre Datejust 41 Blanc Jubilé Pour Homme/Untitleddesign_64.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un design épuré avec un cadran blanc et un bracelet Jubilé, incarnant le raffinement et la simplicité."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/GMT-MASTER II Pepsi Montre Pour Homme/WhatsAppImage2020-10-13at21.45.35.jpg',
                'alt' => 'GMT-MASTER II Pepsi Montre',
                'title' => 'GMT-MASTER II Pepsi Montre',
                'images' => [
                    "assets/img/rolex/GMT-MASTER II Pepsi Montre Pour Homme/WhatsAppImage2020-10-13at21.45.35.jpg",
                    "assets/img/rolex/GMT-MASTER II Pepsi Montre Pour Homme/Rolex-GMT-Master-II-GMTMasterI2018-Pepsi.jpg",
                    "assets/img/rolex/GMT-MASTER II Pepsi Montre Pour Homme/Untitleddesign_29.png",
                    "assets/img/rolex/GMT-MASTER II Pepsi Montre Pour Homme/5_6b24ffed-73e7-43fb-9fba-21e95cc70335.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un classique intemporel avec une lunette rouge et bleue, conçu spécialement pour les globe-trotteurs."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/GMT-Master II Jubilée Pour Homme/effe.png',
                'alt' => 'GMT-Master II Jubilée',
                'title' => 'GMT-Master II Jubilée',
                'images' => [
                    "assets/img/rolex/GMT-Master II Jubilée Pour Homme/Rolex-GMT-Master-II-Steel-and-Yellow-Gold-Jubilee-Bracelet-2023-two-tone-126713GRNR-hands-on-review-8.jpg",
                    "assets/img/rolex/GMT-Master II Jubilée Pour Homme/Rolex-GMT-MasterII-126713GRNR-Colognewatch-11-7348_f6e39b77-c743-44c8-9887-9bea41a29754.webp",
                    "assets/img/rolex/GMT-Master II Jubilée Pour Homme/effe.png",
                    "assets/img/rolex/GMT-Master II Jubilée Pour Homme/Cover2-TT-scaled_5596ed4d-c013-4d77-938f-fd90971a9821.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Une montre emblématique avec un bracelet Jubilé et une fonction GMT pour suivre plusieurs fuseaux horaires avec élégance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/bruce wayne/s-l1600_8.webp',
                'alt' => 'bruce wayne',
                'title' => 'bruce wayne',
                'images' => [
                    "assets/img/rolex/bruce wayne/s-l1600_6.webp",
                    "assets/img/rolex/bruce wayne/s-l1600_8.webp",
                    "assets/img/rolex/bruce wayne/s-l1600_2.webp",
                    "assets/img/rolex/bruce wayne/s-l1600_1.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Probablement une référence au modèle GMT-Master II bleu et noir, surnommé Batman. Avec son design élégant et contemporain, ce modèle est une expression parfaite du luxe sportif, idéal pour les amateurs de voyages et les aventuriers."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Montre Datejust 41 Noir Jubilé Pour Homme/9_ef81332d-44e9-43b6-ba9d-19c4b13261a6.png',
                'alt' => 'Montre Datejust 41 Noir Jubilé',
                'title' => 'Montre Datejust 41 Noir Jubilé',
                'images' => [
                    "assets/img/rolex/Montre Datejust 41 Noir Jubilé Pour Homme/9_ef81332d-44e9-43b6-ba9d-19c4b13261a6.png",
                    "assets/img/rolex/Montre Datejust 41 Noir Jubilé Pour Homme/ROLEXdatejust126334-0018_cb652f31-a450-47e2-9f0a-056c69a50d01.jpg",
                    "assets/img/rolex/Montre Datejust 41 Noir Jubilé Pour Homme/ROLEX126334_62eb6fc4-daa5-4f5c-82ad-59aa9e1ef44b.jpg",
                    "assets/img/rolex/Montre Datejust 41 Noir Jubilé Pour Homme/ROLEXdatejust126334-0018_a3590b69-a8e3-4b34-ba86-7605a040bc0b.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un modèle classique avec un cadran noir élégant et un bracelet Jubilé, parfait pour toutes les occasions."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Submariner Vert _Hulk_ 116610LV Pour Homme/WhatsApp_Image_2020-02-26_at_21.36.39_1_1.jpg',
                'alt' => 'Submariner Vert _Hulk_ 116610LV',
                'title' => 'Submariner Vert _Hulk_ 116610LV',
                'images' => [
                    "assets/img/rolex/Submariner Vert _Hulk_ 116610LV Pour Homme/WhatsApp_Image_2020-02-26_at_21.36.39_1_1.jpg",
                    "assets/img/rolex/Submariner Vert _Hulk_ 116610LV Pour Homme/84243620_275627480077467_8839299816938445999_n_2.jpg",
                    "assets/img/rolex/Submariner Vert _Hulk_ 116610LV Pour Homme/WhatsApp_Image_2020-02-26_at_21.36.40_1.jpg",
                    "assets/img/rolex/Submariner Vert _Hulk_ 116610LV Pour Homme/WhatsAppImage2020-10-13at21.44.20.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                "description" => "Un modèle reconnaissable à son cadran et sa lunette verte, qui associe robustesse et élégance intemporelle."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Daytona Cosmographe Fond Blanc Montre Pour Homme/12.png',
                'alt' => 'Daytona Cosmographe Fond Blanc Montre',
                'title' => 'Daytona Cosmographe Fond Blanc Montre',
                'images' => [
                    "assets/img/rolex/Daytona Cosmographe Fond Blanc Montre Pour Homme/12.png",
                    "assets/img/rolex/Daytona Cosmographe Fond Blanc Montre Pour Homme/dayonafondblanc116500LN_9c91a3a6-2a59-40d5-93a6-341a17acff19.jpg",
                    "assets/img/rolex/Daytona Cosmographe Fond Blanc Montre Pour Homme/dayonafondblanc116500LN.jpg",
                    "assets/img/rolex/Daytona Cosmographe Fond Blanc Montre Pour Homme/dayonafondblanc116500LN_82f18efc-d0a6-4b9c-aa1c-b3d29907a3b6.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
                'description' => "Un chronographe sportif et luxueux, réputé pour sa précision et son design emblématique, prisé par les amateurs de vitesse et de performance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex gold and black/1_DSC01424_41a16dde-7e32-4e03-b8f0-8d8760d15d54.jpg',
                'alt' => 'Rolex gold and black',
                'title' => 'Rolex gold and black',
                'images' => [
                    "assets/img/rolex/Rolex gold and black/1_DSC01424_41a16dde-7e32-4e03-b8f0-8d8760d15d54.jpg",
                    "assets/img/rolex/Rolex gold and black/3_s-l500_1_18b0aa48-ee29-4904-a7b6-ebf647f151bf.png",
                    "assets/img/rolex/Rolex gold and black/5_Sub-FG-126618LN-New-1-1-600x600_9eefb3a5-e5da-48b1-a185-8fce11cc7c70.webp",
                    "assets/img/rolex/Rolex gold and black/4_m126618ln-0002_b06e0034-0e6a-445b-a267-e28f06dc7b26.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un design audacieux qui associe l'or et le cadran noir pour une apparence élégante et affirmée. Ce modèle incarne le luxe et la puissance, parfait pour les amateurs de montres au caractère fort."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Daytona Cosmographe gris 116518LN/daytonagris2.png',
                'alt' => 'Daytona Cosmographe gris 116518LN',
                'title' => 'Daytona Cosmographe gris 116518LN',
                'images' => [
                    "assets/img/rolex/Daytona Cosmographe gris 116518LN/daytonagris2.png",
                    "assets/img/rolex/Daytona Cosmographe gris 116518LN/r13.jpg",
                    "assets/img/rolex/Daytona Cosmographe gris 116518LN/daytonagris5.png",
                    "assets/img/rolex/Daytona Cosmographe gris 116518LN/daytonagris1.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
                'description' => "Une montre sophistiquée avec un cadran gris et des détails en or. Ce modèle est idéal pour ceux qui recherchent un équilibre parfait entre l'élégance intemporelle et la performance sportive."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/datejust fond vert 41mm/3_126300-green-jub-126300-0020-3-510x680.webp',
                'alt' => 'datejust fond vert 41mm',
                'title' => 'datejust fond vert 41mm',
                'images' => [
                    "assets/img/rolex/datejust fond vert 41mm/3_126300-green-jub-126300-0020-3-510x680.webp",
                    "assets/img/rolex/datejust fond vert 41mm/4_126300-green-jub-126300-0020-2-510x680.webp",
                    "assets/img/rolex/datejust fond vert 41mm/5_BASELUXMMOMENT_2.jpg",
                    "assets/img/rolex/datejust fond vert 41mm/1_126300-green-jub-126300-0020-5-510x680.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un modèle rare de Datejust avec un cadran vert séduisant, parfait pour ceux qui souhaitent une montre qui se distingue des autres. Un choix audacieux et unique pour les connaisseurs."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Milgauss Fond Bleu 116400GV/3_milgaussblue.jpg',
                'alt' => 'Milgauss Fond Bleu 116400GV',
                'title' => 'Milgauss Fond Bleu 116400GV',
                'images' => [
                    "assets/img/rolex/Milgauss Fond Bleu 116400GV/4_milgaussblue4.jpg",
                    "assets/img/rolex/Milgauss Fond Bleu 116400GV/2_milgaussblue1.jpg",
                    "assets/img/rolex/Milgauss Fond Bleu 116400GV/1_milgaussblue2.jpg",
                    "assets/img/rolex/Milgauss Fond Bleu 116400GV/5_milgaussblue2.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Spécialement conçue pour les ingénieurs et scientifiques, cette montre est dotée d'une haute résistance magnétique et d’un cadran bleu. Un modèle innovant, parfait pour ceux qui cherchent à combiner technologie et style."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Datejust Wimbledon 41/rolex-datejust-41-wimbledon-126334-4-scaled.jpg',
                'alt' => 'Datejust Wimbledon 41',
                'title' => 'Datejust Wimbledon 41',
                'images' => [
                    "assets/img/rolex/Datejust Wimbledon 41/rolex-datejust-41-wimbledon-126334-4-scaled.jpg",
                    "assets/img/rolex/Datejust Wimbledon 41/IMG_2982-scaled.jpg",
                    "assets/img/rolex/Datejust Wimbledon 41/IMG_0986.jpg",
                    "assets/img/rolex/Datejust Wimbledon 41/IMG_0988.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un modèle sophistiqué inspiré de la célèbre Wimbledon, alliant un design élégant et des éléments sportifs. Ce modèle est un hommage aux traditions tout en restant contemporain et stylé."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/GMT-Master II _BATMAN_ 126710BLNR Jubilée Pour Homme/Rolex-GMT-Master-II-126710BLNR-Batman-Jubilee-Review-1.jpg',
                'alt' => 'GMT-Master II _BATMAN_ 126710BLNR Jubilée',
                'title' => 'GMT-Master II _BATMAN_ 126710BLNR Jubilée',
                'images' => [
                    "assets/img/rolex/GMT-Master II _BATMAN_ 126710BLNR Jubilée Pour Homme/Rolex-GMT-Master-II-126710BLNR-Batman-Jubilee-Review-1.jpg",
                    "assets/img/rolex/GMT-Master II _BATMAN_ 126710BLNR Jubilée Pour Homme/Untitleddesign_28.png",
                    "assets/img/rolex/GMT-Master II _BATMAN_ 126710BLNR Jubilée Pour Homme/batman-new.jpg",
                    "assets/img/rolex/GMT-Master II _BATMAN_ 126710BLNR Jubilée Pour Homme/rolex-gmt-master-ii-batman-batgirl-jubilee-mens-watch-126710blnr-0002-luxury-swiss-176.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Dotée d’une lunette bicolore noire et bleue ainsi que d’un bracelet Jubilé raffiné, elle incarne le style et la fonctionnalité pour les voyageurs."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Sky-Dweller/35427216-h4bxdu4hp883znmr5pk5gjco-ExtraLarge.jpg',
                'alt' => 'Rolex Sky-Dweller',
                'title' => 'Rolex Sky-Dweller',
                'images' => [
                    "assets/img/rolex/Rolex Sky-Dweller/35427216-h4bxdu4hp883znmr5pk5gjco-ExtraLarge.jpg",
                    "assets/img/rolex/Rolex Sky-Dweller/OrangeSimpleIllustratiionOnlineShopLogo_6_19c1e6a2-3e2d-4e06-8197-c060566a99ab.jpg",
                    "assets/img/rolex/Rolex Sky-Dweller/35427216-9t3pcixfbxyv3x3omg762sno-ExtraLarge.jpg",
                    "assets/img/rolex/Rolex Sky-Dweller/35427216-tetk0e3do7gjpcanx039ljj2-ExtraLarge.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Une montre luxueuse conçue pour les voyageurs internationaux, avec une fonction de double fuseau horaire et un calendrier annuel unique en son genre. Ce modèle est parfait pour ceux qui mènent une vie active et nécessitent une montre pratique et sophistiquée."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Datejust/d8807c521235d6a3363740073ff1c8ca.jpg',
                'alt' => 'Rolex Datejust',
                'title' => 'Rolex Datejust',
                'images' => [
                    "assets/img/rolex/Rolex Datejust/d8807c521235d6a3363740073ff1c8ca.jpg",
                    "assets/img/rolex/Rolex Datejust/BASELUXREF_11.jpg",
                    "assets/img/rolex/Rolex Datejust/28aefff68c26b70c824095f9e4a79fbd.jpg",
                    "assets/img/rolex/Rolex Datejust/BASELUXREF_11.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un modèle intemporel qui allie sophistication et polyvalence. Avec son affichage de la date et son design emblématique, elle reste un choix incontournable pour toutes les occasions."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Daytona Cosmographe Doré 116518LN/Lady_Dior_My_ABC_8.png',
                'alt' => 'Daytona Cosmographe Doré 116518LN',
                'title' => 'Daytona Cosmographe Doré 116518LN',
                'images' => [
                    "assets/img/rolex/Daytona Cosmographe Doré 116518LN/daytonagold9.jpg",
                    "assets/img/rolex/Daytona Cosmographe Doré 116518LN/Lady_Dior_My_ABC_8.png",
                    "assets/img/rolex/Daytona Cosmographe Doré 116518LN/daytonagold.jpg",
                    "assets/img/rolex/Daytona Cosmographe Doré 116518LN/daytonagold8.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '800',
                'price_packaging' => '950',
                "description" => "Un modèle de la Daytona en or, alliant performance et esthétique de haute qualité. Ce modèle incarne l'excellence de Rolex et est parfait pour ceux qui recherchent une montre de prestige."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Submariner Noir/Untitleddesign_46.png',
                'alt' => 'Rolex Submariner Noir',
                'title' => 'Rolex Submariner Noir',
                'images' => [
                    "assets/img/rolex/Rolex Submariner Noir/Untitleddesign_46.png",
                    "assets/img/rolex/Rolex Submariner Noir/WhatsAppImage2020-10-06at14.42.56.jpg",
                    "assets/img/rolex/Rolex Submariner Noir/WhatsAppImage2020-10-06at14.42.58_1_1.jpg",
                    "assets/img/rolex/Rolex Submariner Noir/WhatsAppImage2020-10-06at14.42.58.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                'description' => "Un modèle classique de la Submariner, avec un cadran noir intemporel, conçu pour les plongeurs professionnels et amateurs. Il combine robustesse et style, et est l'un des modèles les plus populaires de la collection Rolex."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/SUBMARINER LUNETTE VERTE MODÈLE 16610LV Pour Homme/4_a8953aa3-9545-4792-b935-dddb79569a19.png',
                'alt' => 'SUBMARINER LUNETTE VERTE MODÈLE 16610LV',
                'title' => 'SUBMARINER LUNETTE VERTE MODÈLE 16610LV',
                'images' => [
                    "assets/img/rolex/SUBMARINER LUNETTE VERTE MODÈLE 16610LV Pour Homme/ROLEXSUBMARINERLUNETTEVERTEMODELE16610LV5.jpg",
                    "assets/img/rolex/SUBMARINER LUNETTE VERTE MODÈLE 16610LV Pour Homme/ROLEXSUBMARINERLUNETTEVERTEMODELE16610LV6.jpg",
                    "assets/img/rolex/SUBMARINER LUNETTE VERTE MODÈLE 16610LV Pour Homme/ROLEXSUBMARINERLUNETTEVERTEMODELE16610LV3.jpg",
                    "assets/img/rolex/SUBMARINER LUNETTE VERTE MODÈLE 16610LV Pour Homme/4_a8953aa3-9545-4792-b935-dddb79569a19.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '750',
                'price_packaging' => '900',
                "description" => "Un modèle emblématique avec une lunette verte distinctive, parfait pour les amateurs de plongée et d’élégance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Daytona rainbow/IMG_8515.PNG',
                'alt' => 'Rolex Daytona rainbow',
                'title' => 'Rolex Daytona rainbow',
                'images' => [
                    "assets/img/rolex/Rolex Daytona rainbow/IMG_8513.PNG",
                    "assets/img/rolex/Rolex Daytona rainbow/IMG_8514.PNG",
                    "assets/img/rolex/Rolex Daytona rainbow/IMG_8515.PNG",
                    "assets/img/rolex/Rolex Daytona rainbow/IMG_8515.PNG",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une montre iconique sertie de saphirs multicolores sur la lunette, combinant le design légendaire de la Daytona avec une touche éclatante et luxueuse."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Daytona Cosmographe Bleu Glace 116506IB/1_2_bd2bd92b-4fb5-440e-8cd2-f43d729fe8e9.png',
                'alt' => 'Daytona Cosmographe Bleu Glace 116506IB',
                'title' => 'Daytona Cosmographe Bleu Glace 116506IB',
                'images' => [
                    "assets/img/rolex/Daytona Cosmographe Bleu Glace 116506IB/1_2_bd2bd92b-4fb5-440e-8cd2-f43d729fe8e9.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Un chronographe d’exception en platine avec un cadran bleu glacé raffiné et une lunette en céramique marron, offrant une combinaison unique d’élégance et de performance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Daytona Cosmographe Fond Noir Montre Pour Homme/1_3_eb6b576a-07a0-4a0d-80a2-7929b25bd5ea.png',
                'alt' => 'Daytona Cosmographe Fond Noir Montre Pour Homme',
                'title' => 'Daytona Cosmographe Fond Noir Montre Pour Homme',
                'images' => [
                    "assets/img/rolex/Daytona Cosmographe Fond Noir Montre Pour Homme/3_Daytona_noire_ceramique4.jpg",
                    "assets/img/rolex/Daytona Cosmographe Fond Noir Montre Pour Homme/4_rolexdaytonacosmographefondnoir1.jpg",
                    "assets/img/rolex/Daytona Cosmographe Fond Noir Montre Pour Homme/1_3_eb6b576a-07a0-4a0d-80a2-7929b25bd5ea.png",
                    "assets/img/rolex/Daytona Cosmographe Fond Noir Montre Pour Homme/2_WhatsAppImage2020-10-13at21.45.53.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Un design intemporel avec un cadran noir sophistiqué et des compteurs contrastants, symbole du prestige et de la précision de Rolex."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/GMT-Master II Root Beer 126711 CHNR 2020 Pour Homme/1_RolexGMT-MasterIIRootBeer126711CHNR2020PourHomme_06be0ed1-3ec4-4d52-9912-dd41c147df56.jpg',
                'alt' => 'GMT-Master II Root Beer 126711 CHNR 2020 Pour Homme',
                'title' => 'GMT-Master II Root Beer 126711 CHNR 2020 Pour Homme',
                'images' => [
                    "assets/img/rolex/GMT-Master II Root Beer 126711 CHNR 2020 Pour Homme/3_RolexGMT-MasterIIRootBeer126711CHNR2020PourHomme_3f569cf4-838b-4d75-83db-554c1073f260.jpg",
                    "assets/img/rolex/GMT-Master II Root Beer 126711 CHNR 2020 Pour Homme/5_RolexGMT-MasterIIRootBeer126711CHNR2020PourHomme_9d85a64c-a72b-409e-aee3-0a73ad4b2b05.jpg",
                    "assets/img/rolex/GMT-Master II Root Beer 126711 CHNR 2020 Pour Homme/1_RolexGMT-MasterIIRootBeer126711CHNR2020PourHomme_06be0ed1-3ec4-4d52-9912-dd41c147df56.jpg",
                    "assets/img/rolex/GMT-Master II Root Beer 126711 CHNR 2020 Pour Homme/2_RolexGMT-MasterIIRootBeer126711CHNR2020PourHomme_01569d6d-a4e7-4e26-af59-c2b9dead4fed.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Un modèle bicolore en acier et or Everose avec une lunette marron et noire, parfait pour les voyageurs en quête de style et de fonctionnalité."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/GMT‑MASTER II Vert Or Jaune/2_Rolex-GMT-Master-II-Or-Jaune-Vert-Prix-Maroc_67672b4e-062a-4c46-a332-61bbd7730de5.webp',
                'alt' => 'GMT‑MASTER II Vert Or Jaune',
                'title' => 'GMT‑MASTER II Vert Or Jaune',
                'images' => [
                    "assets/img/rolex/GMT‑MASTER II Vert Or Jaune/1_Rolex-GMT-Master-II-Or-Jaune-Vert-Maroc-1_a952aa80-14f7-4224-8293-cbce84752454.webp",
                    "assets/img/rolex/GMT‑MASTER II Vert Or Jaune/2_Rolex-GMT-Master-II-Or-Jaune-Vert-Prix-Maroc_67672b4e-062a-4c46-a332-61bbd7730de5.webp",
                    "assets/img/rolex/GMT‑MASTER II Vert Or Jaune/3_Rolex-GMT-Master-II-Or-Jaune-Vert-Maroc-5_3608da59-f78d-4fe7-8ecc-a40fef7d88bf.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une version audacieuse de la GMT-Master II avec un cadran vert distinctif et une lunette en or jaune, associant raffinement et aventure."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Montre Homme - Day-Date Arabic Blue Dial/1_9_80cb6ef3-8e61-436d-a089-ffb6e6e263b8.png',
                'alt' => 'Montre Homme - Day-Date Arabic Blue Dial',
                'title' => 'Montre Homme - Day-Date Arabic Blue Dial',
                'images' => [
                    "assets/img/rolex/Montre Homme - Day-Date Arabic Blue Dial/2_2_daf73333-a09c-476e-98ba-36b18ff194a1.png",
                    "assets/img/rolex/Montre Homme - Day-Date Arabic Blue Dial/3_1_ba9e246c-98c8-45d8-9aef-78bab0ee3010.png",
                    "assets/img/rolex/Montre Homme - Day-Date Arabic Blue Dial/1_9_80cb6ef3-8e61-436d-a089-ffb6e6e263b8.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une édition exclusive du Day-Date avec un cadran bleu et des chiffres arabes, combinant élégance et singularité."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Montre Rolex Yacht-Master 226659 Pour Homme/1_Lady_Dior_My_ABC_1.png',
                'alt' => 'Montre Rolex Yacht-Master 226659 Pour Homme',
                'title' => 'Montre Rolex Yacht-Master 226659 Pour Homme',
                'images' => [
                    "assets/img/rolex/Montre Rolex Yacht-Master 226659 Pour Homme/3_YachtMaster422266593.jpg",
                    "assets/img/rolex/Montre Rolex Yacht-Master 226659 Pour Homme/4_YachtMaster42226659_92592770-c7cc-4b07-85a1-7d8dca6104c0.jpg",
                    "assets/img/rolex/Montre Rolex Yacht-Master 226659 Pour Homme/1_Lady_Dior_My_ABC_1.png",
                    "assets/img/rolex/Montre Rolex Yacht-Master 226659 Pour Homme/2_YachtMaster422266591.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Un garde-temps nautique en or blanc 18 carats avec un bracelet Oysterflex et une lunette en céramique noire, conçu pour les amateurs de voile et de luxe."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Air-King/5_5_5fac2eff-6495-4a1f-82f0-eeb5ef1dd48a.png',
                'alt' => 'Rolex Air-King',
                'title' => 'Rolex Air-King',
                'images' => [
                    "assets/img/rolex/Rolex Air-King/2_airking20223.webp",
                    "assets/img/rolex/Rolex Air-King/3_Rolex-Oyster-Perpetual-Air-King-126900-2022-Review-4.jpg",
                    "assets/img/rolex/Rolex Air-King/5_5_5fac2eff-6495-4a1f-82f0-eeb5ef1dd48a.png",
                    "assets/img/rolex/Rolex Air-King/4_Oct-22-5.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Un hommage à l’aviation avec un cadran lisible, un boîtier robuste et un design inspiré des instruments de bord des années 1950."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Cosmograph Daytona cadran vert/1_BASELUXREF_18.png',
                'alt' => 'Rolex Cosmograph Daytona cadran vert',
                'title' => 'Rolex Cosmograph Daytona cadran vert',
                'images' => [
                    "assets/img/rolex/Rolex Cosmograph Daytona cadran vert/4_MontreHommeDaytonaCosmographeFondVert116508_c6636c79-ba45-4dd9-8918-08c996a9e9f3.jpg",
                    "assets/img/rolex/Rolex Cosmograph Daytona cadran vert/3_RolexCosmographDaytonaGreenDial_6.jpg",
                    "assets/img/rolex/Rolex Cosmograph Daytona cadran vert/1_BASELUXREF_18.png",
                    "assets/img/rolex/Rolex Cosmograph Daytona cadran vert/2_RolexCosmographDaytonaGreenDial_7.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une montre de collection avec un cadran vert intense et un boîtier en or jaune, alliant prestige et performance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Datejust 41/4_BASELUXREF_72.png',
                'alt' => 'Rolex Datejust 41',
                'title' => 'Rolex Datejust 41',
                'images' => [
                    "assets/img/rolex/Rolex Datejust 41/2_6182f66a9e13788c0c79394b_master.jpg",
                    "assets/img/rolex/Rolex Datejust 41/3_j_24988372_1735074642191_bg_processed.jpg",
                    "assets/img/rolex/Rolex Datejust 41/4_BASELUXREF_72.png",
                    "assets/img/rolex/Rolex Datejust 41/5_6172deb1564f160209c26168_master.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une déclinaison moderne du Datejust avec un boîtier de 41 mm, offrant une présence affirmée et une élégance intemporelle."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Day Date/4_BASELUXREF_65.png',
                'alt' => 'Rolex Day Date',
                'title' => 'Rolex Day Date',
                'images' => [
                    "assets/img/rolex/Rolex Day Date/1_a01911abb92a68232193a3b8089f4d0e-28aNUouPweoMNvTe7ZAn.jpg",
                    "assets/img/rolex/Rolex Day Date/2_IMG_8001.jpg",
                    "assets/img/rolex/Rolex Day Date/4_BASELUXREF_65.png",
                    "assets/img/rolex/Rolex Day Date/3_IMG_8015.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une montre de prestige affichant à la fois le jour de la semaine et la date, prisée par les personnalités influentes du monde entier."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Day Date vert/2_BASELUXREF_64.png',
                'alt' => 'Rolex Day Date vert',
                'title' => 'Rolex Day Date vert',
                'images' => [
                    "assets/img/rolex/Rolex Day Date vert/3_463096458_2622350438152522_7753106389815902738_n.jpg",
                    "assets/img/rolex/Rolex Day Date vert/1_463279877_854182613542370_291879615179667017_n.jpg",
                    "assets/img/rolex/Rolex Day Date vert/2_BASELUXREF_64.png",
                    "assets/img/rolex/Rolex Day Date vert/4_463236668_1689427744991669_4200685602400223286_n.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une édition raffinée du Day-Date avec un cadran vert olive, soulignant son caractère distinctif et luxueux."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Daytona Bleu/1_BASELUXREF_17.png',
                'alt' => 'Rolex Daytona Bleu',
                'title' => 'Rolex Daytona Bleu',
                'images' => [
                    "assets/img/rolex/Rolex Daytona Bleu/2_IMG-6044.webp",
                    "assets/img/rolex/Rolex Daytona Bleu/3_IMG-6051.webp",
                    "assets/img/rolex/Rolex Daytona Bleu/1_BASELUXREF_17.png",
                    "assets/img/rolex/Rolex Daytona Bleu/4_IMG-6049.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une version captivante du Daytona avec un cadran bleu profond et une lunette en céramique, alliant sportivité et élégance."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Deep Sea/1_Untitleddesign_41_800x_16bbbc29-22fe-48ae-90e8-a65da6a36983.png',
                'alt' => 'Rolex Deep Sea',
                'title' => 'Rolex Deep Sea',
                'images' => [
                    "assets/img/rolex/Rolex Deep Sea/2_deepsea2_2000x_4c7b6308-8514-4106-9b71-7e41bb7fe3db.jpg",
                    "assets/img/rolex/Rolex Deep Sea/3_deepsea6_2000x_045d140c-6619-4421-b600-2a805a5d9419.jpg",
                    "assets/img/rolex/Rolex Deep Sea/1_Untitleddesign_41_800x_16bbbc29-22fe-48ae-90e8-a65da6a36983.png",
                    "assets/img/rolex/Rolex Deep Sea/4_RolexSeaDwellerDeepseaCadranBleu126660PourHomme_1_2000x_b4ee7dff-3f46-459b-aee2-311d05293aa7.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une montre de plongée extrême conçue pour résister aux pressions abyssales, offrant une étanchéité jusqu’à 3 900 mètres."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/rolex oyster perpetual bleu/1_Untitleddesign_27.png',
                'alt' => 'rolex oyster perpetual bleu',
                'title' => 'rolex oyster perpetual bleu',
                'images' => [
                    "assets/img/rolex/rolex oyster perpetual bleu/2_rolex-oyster-277200-31mm-bright-blue.webp",
                    "assets/img/rolex/rolex oyster perpetual bleu/3_rolex_oyster_perpetual_36_blue_1664932253_a08dfcfb_progressive.jpg",
                    "assets/img/rolex/rolex oyster perpetual bleu/1_Untitleddesign_27.png",
                    "assets/img/rolex/rolex oyster perpetual bleu/4_Oyster-Perpetual-41-124300-Navy-Blue-Dial-Chronofinder-Ltd-494_1080x1080_jpg.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Un modèle sobre et élégant avec un cadran bleu vibrant, représentant l’essence même de l’horlogerie Rolex."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Oyster Perpetual Noir/1_LadyDiorMyABC_5_3d32283f-80ed-4041-a9d3-07f29d2775a0.png',
                'alt' => 'Rolex Oyster Perpetual Noir',
                'title' => 'Rolex Oyster Perpetual Noir',
                'images' => [
                    "assets/img/rolex/Rolex Oyster Perpetual Noir/2_Rolex-Oyster-Perpetual-41-bright-black-dial-124300-0002-review-4.jpg",
                    "assets/img/rolex/Rolex Oyster Perpetual Noir/1_LadyDiorMyABC_5_3d32283f-80ed-4041-a9d3-07f29d2775a0.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une montre classique et intemporelle avec un cadran noir épuré, mettant en valeur le savoir-faire et la précision de Rolex."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex oyster perpetual vert/2_LadyDiorMyABC_9.png',
                'alt' => 'Rolex oyster perpetual vert',
                'title' => 'Rolex oyster perpetual vert',
                'images' => [
                    "assets/img/rolex/Rolex oyster perpetual vert/1_m126000-0005.jpg",
                    "assets/img/rolex/Rolex oyster perpetual vert/2_LadyDiorMyABC_9.png",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une déclinaison moderne avec un cadran vert intense, symbole d’originalité et de raffinement."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/ROLEX SPRITE JUBILEE/5_2_6c4ed82c-c92d-4327-9882-366639e5e4fd.png',
                'alt' => 'ROLEX SPRITE JUBILEE',
                'title' => 'ROLEX SPRITE JUBILEE',
                'images' => [
                    "assets/img/rolex/ROLEX SPRITE JUBILEE/4_s-l1600_c7aec26f-2cc9-40a8-8723-36d179f32c99.jpg",
                    "assets/img/rolex/ROLEX SPRITE JUBILEE/1_Rolex-GMT-Master-II-Sprite-40-Oystersteel-Jubilee-Black-Dial3.jpg",
                    "assets/img/rolex/ROLEX SPRITE JUBILEE/5_2_6c4ed82c-c92d-4327-9882-366639e5e4fd.png",
                    "assets/img/rolex/ROLEX SPRITE JUBILEE/2_23874072-zxkhwujdta8jukv4b2fk67j0-ExtraLarge.webp",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une version distinctive de la GMT-Master II avec une lunette verte et noire, associée à un bracelet Jubilé élégant et confortable."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Yacht-Master/1_Untitleddesign_28.jpg',
                'alt' => 'Rolex Yacht-Master',
                'title' => 'Rolex Yacht-Master',
                'images' => [
                    "assets/img/rolex/Rolex Yacht-Master/2_Rolex-Yachtmaster-40-116655-RG-Rubber-2_0033_Layer-12.webp",
                    "assets/img/rolex/Rolex Yacht-Master/3_13327322913641346.jpg",
                    "assets/img/rolex/Rolex Yacht-Master/1_Untitleddesign_28.jpg",
                    "assets/img/rolex/Rolex Yacht-Master/4_13327322911135561.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Un modèle inspiré du monde de la voile, combinant luxe et performance, avec une lunette bidirectionnelle et un design sophistiqué."
            ],
            [
                'tag' => 'Sale',
                'image' => 'assets/img/rolex/Rolex Yacht-Master 40/1_116622_20dark_20grey_1561500025.jpg',
                'alt' => 'Rolex Yacht-Master 40',
                'title' => 'Rolex Yacht-Master 40',
                'images' => [
                    "assets/img/rolex/Rolex Yacht-Master 40/1_116622_20dark_20grey_1561500025.jpg",
                ],
                'slug' => 'rolex',
                'brand_slug' => 'rolex',
                'price' => '850',
                'price_packaging' => '1000',
                "description" => "Une version de 40 mm du Yacht-Master, alliant élégance et sportivité avec des finitions haut de gamme et une précision inégalée."
            ]
        ];

        $brands = [
            [
                'image' => 'assets/img/rolex/18975-rolex-logo.png',
                'alt' => 'Rolex',
                'title' => 'Rolex',
                'video' => 'assets/img/rolex/videoplayback.mp4',
                'slug' => 'rolex',
            ],
            [
                'image' => 'assets/img/audemars/ Audemars Piguit Logo.png',
                'alt' => 'Audemars Piguit',
                'video' => 'assets/img/audemars/Royal Oak -  Audemars Piguet.mp4',
                'title' => 'Audemars Piguit',
                'slug' => 'audemars',
            ],
            [
                'image' => 'assets/img/patekphilippe/patek-philippe logo.png',
                'alt' => 'Patek Philippe',
                'title' => 'Patek Philippe',
                'video' => 'assets/img/patekphilippe/Patek Philippe four new Nautilus models.mp4',
                'slug' => 'patekphilippe',
            ],
            [
                'image' => 'assets/img/hublot/HUBLOT-LOGO.png',
                'alt' => 'Hublot',
                'title' => 'Hublot',
                'video' => 'assets/img/hublot/HUBLOT - CLASSIC FUSION ELEMENTS.mp4',
                'slug' => 'hublot',
            ],
            [
                'image' => 'assets/img/tissot/tissot-logo.png',
                'alt' => 'Tissot',
                'title' => 'Tissot',
                'video' => 'assets/img/tissot/Tissot PRX - Cinematic Ad.mp4',
                'slug' => 'tissot',
            ],
            [
                'image' => 'assets/img/cartier/cartier-2-logo.png',
                'alt' => 'Cartier',
                'title' => 'Cartier',
                'video' => 'assets/img/cartier/Cartier Watch Shape Your Time Official Video | aBlogtoWatch.mp4',
                'slug' => 'cartier',
            ],
        ];

        $filteredProducts = array_filter($products, function ($product) use ($slug) {
            return $product['brand_slug'] === $slug;
        });

        $brand = array_filter($brands, function ($item) use ($slug) {
            return strtolower($item['slug']) === strtolower($slug);
        });

        $brand = array_values($brand)[0];

        return view('Users.brand', ['products' => $filteredProducts, 'brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
