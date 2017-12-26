
<?php
ini_set('date.timezone', 'UTC');
define('YAAMP_LOGS', '/var/log');
define('YAAMP_HTDOCS', '/var/web');
define('YAAMP_BIN', '/var/bin');
define('YAAMP_DBHOST', 'localhost');
define('YAAMP_DBNAME', 'yiimpfrontend');
define('YAAMP_DBUSER', 'panel');
define('YAAMP_DBPASSWORD', 'motdepassedb');
define('YAAMP_PRODUCTION', true);
define('YAAMP_RENTAL', false);
define('YAAMP_LIMIT_ESTIMATE', false);
define('YAAMP_FEES_MINING', 1);
define('YAAMP_FEES_EXCHANGE', 2);
define('YAAMP_FEES_RENTING', 2);
define('YAAMP_TXFEE_RENTING_WD', 0.002);
define('YAAMP_PAYMENTS_FREQ', 3*60*60);
define('YAAMP_PAYMENTS_MINI', 0.001);
define('YAAMP_ALLOW_EXCHANGE', false);
define('YIIMP_PUBLIC_EXPLORER', true);
define('YIIMP_PUBLIC_BENCHMARK', false);
define('YIIMP_FIAT_ALTERNATIVE', 'USD'); // USD is main
define('YAAMP_USE_NICEHASH_API', false);
define('YAAMP_BTCADDRESS', '1PqjApUdjwU9k4v1RDWf6XveARyEXaiGUz');
define('YAAMP_SITE_URL', 'vps496236.ovh.net');
define('YAAMP_STRATUM_URL', YAAMP_SITE_URL); // change if your stratum server is on a different host
define('YAAMP_SITE_NAME', 'UtoPool');
define('YAAMP_ADMIN_EMAIL', 'xavatar@wanadoo.fr');
define('YAAMP_ADMIN_IP', '90.53.66.1'); // samples: "80.236.118.26,90.234.221.11" or "10.0.0.1/8"
define('YAAMP_ADMIN_WEBCONSOLE', true);
define('YAAMP_NOTIFY_NEW_COINS', true);
define('YAAMP_DEFAULT_ALGO', 'x11');
define('YAAMP_USE_NGINX', true);
// Exchange public keys (private keys are in a separate config file)
define('EXCH_CRYPTOPIA_KEY', '');
define('EXCH_POLONIEX_KEY', '');
define('EXCH_BITTREX_KEY', '');
define('EXCH_BLEUTRADE_KEY', '');
define('EXCH_BTER_KEY', '');
define('EXCH_YOBIT_KEY', '');
define('EXCH_CCEX_KEY', '');
define('EXCH_COINMARKETS_USER', '');
define('EXCH_COINMARKETS_PIN', '');
define('EXCH_BITSTAMP_ID','');
define('EXCH_BITSTAMP_KEY','');
define('EXCH_HITBTC_KEY','');
define('EXCH_KRAKEN_KEY', '');
define('EXCH_LIVECOIN_KEY', '');
define('EXCH_NOVA_KEY', '');
// Automatic withdraw to Yaamp btc wallet if btc balance > 0.3
define('EXCH_AUTO_WITHDRAW', 0.3);
// nicehash keys deposit account & amount to deposit at a time
define('NICEHASH_API_KEY','f96c65a7-3d2f-4f3a-815c-cacf00674396');
define('NICEHASH_API_ID','825979');
define('NICEHASH_DEPOSIT','3ABoqBjeorjzbyHmGMppM62YLssUgJhtuf');
define('NICEHASH_DEPOSIT_AMOUNT','0.01');
$cold_wallet_table = array(
	'1PqjApUdjwU9k4v1RDWf6XveARyEXaiGUz' => 0.10,
);
// Sample fixed pool fees
$configFixedPoolFees = array(
        'zr5' => 1.0,
        'scrypt' => 1.0,
        'sha256' => 1.0,
);
// Sample custom stratum ports
$configCustomPorts = array(
//	'x11' => 7000,
);
// mBTC Coefs per algo (default is 1.0)
$configAlgoNormCoef = array(
//	'x11' => 5.0,
);

