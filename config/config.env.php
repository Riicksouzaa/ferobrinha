<?php

if (!function_exists('is_https')) {
    function is_https()
    {
        if (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') {
            return TRUE;
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https') {
            return TRUE;
        } elseif (!empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off') {
            return TRUE;
        }

        return FALSE;
    }
}

$is_https = is_https();

if ($is_https) {
    $base_url = "https://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
} else {
    $base_url = "http://" . $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
}

/** SERVER URLS */
/** @var array $config */
$config['base_url'] = $base_url;
$config['site']['base_url'] = $base_url;
$config['site']['realurl'] = ""; //Colocar a url real para seu website sem www
$config['site']['realurlwww'] = ""; //Colocar a url real para seu website com www CASO SEJA UM SUBDOMINIO COLOCAR A MSM URL DA URL REAL
$config['site']['testurl'] = ""; // colocar a url que você utiliza para testar seu site (LOCALHOST)
/** END SERVER URLS */

/** SERVER PATHS */
if ($config['base_url'] == $config['site']['realurl'] || $config['base_url'] == $config['site']['realurlwww']) {
    $config['site']['serverPath'] = "";
} else {
    $config['site']['serverPath'] = "";
}
/** END SERVER PATHS */

/** GOOGLE RECAPTCHA VALUES */
$config['site']['gRecaptchaSecret'] = "";
$config['site']['gRecaptchaSiteKey'] = "";

/** WIDGETS CONFIG */
$config['site']['widget_rank'] = TRUE;
$config['site']['widget_supportButton'] = false;
$config['site']['widget_buycharButton'] = false;
$config['site']['widget_PremiumBox'] = false;
$config['site']['widget_Serverinfobox'] = false;
$config['site']['widget_NetworksBox'] = false;
$config['site']['widget_CurrentPollBox'] = false;
$config['site']['widget_CastleWarBox'] = false;
$config['site']['widget_tibiaClips'] = false;

/**
 * SISTEMA STREAM NA FIRST PAGE WITH MODAL OPEN WHEN CLICK
 * CONFIGS
 */

$config['site']['tibialcips_streamName'] = "lolgoiania";
$config['site']['tibialcips_parentName'] = "ferobraglobal.com";
$config['site']['tibialcips_modalTitle'] = "Stream do lolgoiania Online partiu acompanhar!";
$config['site']['tibialcips_modalSubtitle'] = "Sistema developado pelo Ricardin PHP. Ao vivo na stream só chora.";

/** WIDGETS 'widget_rank' TOP LVL CONFIGS */
$config['site']['top_lvl_qtd'] = 5; // 1 -- 5
$config['site']['top_lvl_group_inactive'] = '4,5,6'; // '1,2,3...'
$config['site']['top_lvl_acc_inactive'] = '1'; // '1,2,3...'
$config['site']['top_lvl_goku_isActive'] = false; // TRUE - FALSE
$config['site']['top_lvl_out_anim'] = FALSE; // TRUE - FALSE

# Social Networks
$config['social']['status'] = TRUE;
$config['social']['facebook'] = "https://www.facebook.com/otservferobra/";
//$config['social']['facebook'] = "https://www.facebook.com/LeagueOfLegendsGoiania/";
$config['social']['fbapiversion'] = "v3.2";
$config['social']['fbapilink'] = "https://graph.facebook.com/";
$config['social']['fbpageid'] = "";
$config['social']['accessToken'] = "";
$config['social']['twitter'] = "";
$config['social']['twittercreator'] = "";
$config['social']['fbappid'] = "";

# Using Ajax Field Validation, this is important if you want to use ajax check in your create account.
$config['site']['sqlHost'] = "localhost";
$config['site']['sqlUser'] = "root";
$config['site']['sqlPass'] = "";
$config['site']['sqlBD'] = "";

# Config Shop
$outfits_list = array();
$loyalty_title = array(
    50 => 'Scout',
    100 => 'Sentinel',
    200 => 'Steward',
    400 => 'Warden',
    1000 => 'Squire',
    2000 => 'Warrior',
    3000 => 'Keeper',
    4000 => 'Guardian',
    5000 => 'Sage
');
$config['shop']['newitemdays'] = 1;

# Character Former name, time in days to show the former names
$config['site']['formerNames'] = 10;
$config['site']['formerNames_amount'] = 10;

# PAGE: characters.php
$config['site']['playerBorders'] = [
    'Border 1' => 1,
    'Border 2' => 2,
    'Border 3' => 3,
    'Border 4' => 4,
    'Border 5' => 5,
    'Border 6' => 6,
    'Border 7' => 7,
    'Border 8' => 8,
];

$config['site']['quests'] = array(
    "Demon Helmet" => 2213,
    "In Service of Yalahar" => 12279,
    "Pits Of Inferno" => 10544,
    "The Ancient Tombs" => 50220,
    "The Annihilator" => 2215,
    "The Demon Oak" => 1010,
    "Wrath Of The Emperor" => 12374
);

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 0;

# Account Maker Config
$config['site']['encryptionType'] = 'sha1';
$config['site']['useServerConfigCache'] = FALSE;
$towns_list = array(
    5 => 'Ab\'Dendriel',
    9 => 'Ankrahmun',
    4 => 'Carlin',
    10 => 'Darashia',
    11 => 'Edron',
    14 => 'Farmine',
    28 => 'Gray Beach',
    3 => 'Kazordoon',
    7 => 'Liberty Bay',
    8 => 'Port Hope',
    33 => 'Rathleton',
    12 => 'Svargrond',
    2 => 'Thais',
    1 => 'Venore',
    13 => 'Yalahar',
);

$vocations_list = [
    15 => "No Vocation",
    0 => "No Vocation",
    1 => "Sorcerer",
    2 => "Druid",
    3 => "Paladin",
    4 => "Knight",
    5 => "Master Sorcerer",
    6 => "Elder Druid",
    7 => "Royal Paladin",
    8 => "Elite Knight",
    10 => "ALL"];

$highscores_list = [
//    1 => "Achievements",
    2 => "Axe Fighting",
    3 => "Club Fighting",
    4 => "Distance Fighting",
    5 => "Experience Points",
    6 => "Fishing",
    7 => "First Fighting",
//    8 => "Loyalty Points",
    9 => "Magic Level",
    10 => "Shielding",
    11 => "Sword Fighting"
];
# Create Account Options
$config['site']['one_email'] = TRUE;
$config['site']['create_account_verify_mail'] = FALSE;
$config['site']['verify_code'] = TRUE;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 500;
$config['site']['send_register_email'] = TRUE;
$config['site']['flash_client_enabled'] = FALSE;

# Create Character Options
$config['site']['newchar_vocations'] = array(0 => 'Rook Sample');
$config['site']['newchar_towns'] = array(6);
$config['site']['max_players_per_account'] = 7;

# Emails Config
$config['site']['lost_acc'] = true;
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "";
$config['site']['mail_senderName'] = "";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "smtp.gmail.com";
$config['site']['smtp_port'] = 465;
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "";
$config['site']['smtp_pass'] = "";
$config['site']['smtp_secure'] = "";

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = TRUE;
$config['site']['send_mail_when_generate_reckey'] = TRUE;
$config['site']['email_time_change'] = 7;
$config['site']['daystodelete'] = 7;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 0;
$config['site']['guild_need_pacc'] = FALSE;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5);

# PAGE: highscores.php INACTIVE
$config['site']['groups_hidden'] = array(3, 4, 5);
$config['site']['accounts_hidden'] = array(1);

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

/** LANDPAGE CONFIG */
$config['site']['landpage_isactive'] = FALSE;
$config['site']['landpage_title'] = "";
$config['site']['landpage_timeout'] = 60 * 60; //Tempo em segundos 1*60 = 1 minuto
$config['site']['landpage_description'] = ""; //Escreva aqui um texto para aparecer na landpage
$config['site']['landpage_max_noticias'] = 0; //Numero máximo de noticias exibidas na landpage.
$config['site']['landpage_youtube'] = ""; // id do video do youtube


/** OUIBOUNCE -- EXIBE UM MODAL AO TIRAR O MOUSE DA TELA*/
$config['site']['ouibounce_isActive'] = true;

/** HIGH SCORES CONFIG */
$config['site']['h_limit'] = 25; //limite players por de pagina
$config['site']['h_limitOffset'] = 200; //Limita a quantidade maxima de players no rank
$config['site']['h_group_acc_show'] = "1,2,3,6"; //Seleciona os grupos de class que irão aparecer no rank

/** INFO_BAR TIBIA NEW LIKE */
$config['site']['info_bar_active'] = TRUE;
$config['site']['info_bar_cast'] = TRUE;
$config['site']['info_bar_twitch'] = FALSE;
$config['site']['info_bar_youtube'] = FALSE;
$config['site']['info_bar_forum'] = FALSE;
$config['site']['info_bar_online'] = TRUE;
$config['site']['info_bar_online_botton_table'] = false;

/**
 * DONATE CONFIG LIKE PAGASEGURO OLD_CONFIG
 * (50*10) = R$5,00 // 50 = TIBIA COINS COUNT Proporção de 1 pra 1
 */

$config['donate']['offers'] = [
    /** id =>[PRICE=>COINS]*/
    0 => [(1 * 100) => 5],
    1 => [(10 * 100) => 10],
    2 => [(25 * 100) => 25],
    3 => [(50 * 90) => 50],
    4 => [(100 * 90) => 100],
    5 => [(200 * 80) => 200],
    6 => [(300 * 80) => 300],
    7 => [(400 * 70) => 400],
    8 => [(228 * 100) => 3000]
];
$proporcao_preco = (array_keys($config['donate']['offers'][intval(0)])[0] / 100);
$proporcao_qnt = array_values($config['donate']['offers'][intval(0)])[0];

$config['donate']['proporcao'] = $proporcao_preco / $proporcao_qnt;
$config['donate']['show_proporcao'] = FALSE;

/**
 * configure your active payment method with this
 * TRUE = ACTIVE
 * FALSE = INACTIVE
 */
$config['paymentsMethods'] = [
    'pagseguro' => TRUE,
    'paypal' => TRUE,
    'transfer' => TRUE,
    'picpay' => TRUE,
    'mercadoPago' => FALSE
];

/** PICPAY CONFIGS */
$config['picpay'] = [
    "user" => "",
    "isAutomaticReturn" => true,
    "callbackUrl" => $base_url . "/picpay_ipn.php",
    "returnUrl" => $base_url . "/?subtopic=accountmanagement",
    "x-picpay-token" => "",
    "x-seller-token" => ""
];

/** Bank transfer data */
$config['banktransfer'] = [
    0 => [
        'bank' => '',
        'agency' => '',
        'account' => '',
        'name' => '',
        'operation' => 0,
        'email' => '',
        'acctype' => ''
    ],
    1 => [
        'bank' => 'BB',
        'agency' => '7417',
        'account' => '42185-1',
        'name' => 'Ricardo Antônio Souza Filho',
        'operation' => 003,
        'email' => 'souzaariick@gmail.com',
        'acctype' => 'Conta Corrente'
    ]
];

/** PAGSEGURO FIXED */
$config['pagseguro']['testing'] = TRUE;
$config['pagseguro']['lightbox'] = TRUE;
$config['pagseguro']['tokentest'] = "";

/** PAGSEGURO CONFIGS */
$config['pagseguro']['email'] = "";
$config['pagseguro']['token'] = "";
$config['pagseguro']['produtoNome'] = 'Tibia Coins';
$config['pagseguro']['urlRedirect'] = $config['base_url'];
$config['pagseguro']['urlNotification'] = $config['base_url'] . 'retpagseguro.php';

/** PayPal configs */
$config['paypal']['email'] = "";
$config['paypal']['sandboxemail'] = "";
$config['paypal']['itemName'] = "";
$config['paypal']['notify_url'] = $config['base_url'] . "paypal_ipn.php"; // não alterar
$config['paypal']['currency'] = "BRL"; // não alterar
/** SETUP LIVE OR TESTING YOUR IMPLEMENT */
$config['paypal']['env'] = "sandbox"; // sandbox | production (teste ou produção)
/** PRODUCTION IDS */
$config['paypal']['clientID'] = '';
$config['paypal']['clientSecretID'] = '';
/** SANDBOX IDS */
$config['paypal']['sandboxClientID'] = '';
$config['paypal']['sandboxClientSecretID'] = '';
/** ##PayPal configs */

/** MERCADO PAGO CONFIGS */
$config['mp']['CLIENT_ID'] = "";
$config['mp']['CLIENT_SECRET'] = "";
$config['mp']['SANDBOX_CLIENT_ID'] = "";
$config['mp']['SANDBOX_CLIENT_SECRET'] = "";
$config['mp']['sandboxMode'] = TRUE; // TRUE | FALSE (teste ou produção)
$config['sale']['productName'] = "Tibia Coins";
$config['sale']['subProductName'] = "Coins";
/** ##MERCADO PAGO CONFIGS */

/** LAYOUT CONFIGS */
//$config['site']['layout'] = 'med'; //Layout Name
$config['site']['layout'] = 'tibiacom'; //Layout Name
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = FALSE;
$config['site']['serverinfo_page'] = TRUE;
$config['site']['cssVersion'] = "?vs=7.0.3";

/** MULTIPLE REQ CONFIGS */
$config['site']['max_req_tries'] = 3;
$config['site']['timeout_time'] = 1; //TIME IN MINUTES

/** MULTIPLE WEBSITE REQ CONFIGS */
$config['site']['website_max_req_tries'] = 140;
$config['site']['website_timeout_time'] = 3; //TIME IN MINUTES

/** SELL CHARACTERS ACCOUNT CONFIGURE */
$config['sell']['account_seller_id'] = 2;
$config['site']['max_price_coin'] = 10000;
$config['site']['max_price_gold'] = 100000000;
$config['site']['sell_by_gold'] = FALSE;
$config['site']['min_lvl_to_sell'] = 1;
/** SALE TAXES PERCENT 0-100 */
$config['site']['percent_sellchar_sale'] = 5;

/** Promoção configuration */
$config['site']['promo_isactive'] = false;
$config['site']['promo_imagename'] = 'promo.png';
$config['site']['websitelogo'] = "tibia-logo-artwork-top-codenome-website.png";
$config['site']['background_image_name'] = "background-artwork-novo.jpg";

/** website sale */
$config['site']['website_sale'] = false;

/** DISCORD WIDGET */
$config['site']['discord_widget_id'] = '472958107048345609';

/** SELL CHARACTERS VARIABLES LOAD */
$config['site']['Outfits_path'] = $config['site']['serverPath'] . "data/XML/outfits.xml";
$config['site']['Mounts_path'] = $config['site']['serverPath'] . "data/XML/mounts.xml";
$config['site']['Itens_path'] = $config['site']['serverPath'] . "data/items/items.xml";
$config['site']['Events_path'] = $config['site']['serverPath'] . "data/globalevents/globalevents.xml";
$config['site']['Quests_path'] = $config['site']['serverPath'] . "data/XML/quests.xml";
$config['site']['Houses_path'] = $config['site']['serverPath'] . "data/world/map-house.xml";
