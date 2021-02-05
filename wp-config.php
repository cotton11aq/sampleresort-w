<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress_sampleresort' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lJr{k:/LwW{tUz2d0)K@35-s[HG+m}>KOR3s>4#Ogc<?Qcd6]@Z@K[YWMY($t[AE' );
define( 'SECURE_AUTH_KEY',  '}*,T5DU/tp~vQ!pwoLQ~9eMns(}hg{?wm7=aK7lsB/qiWO.)S,1~.~,}Hh;pCjXZ' );
define( 'LOGGED_IN_KEY',    '(82Ln20Ap+5J2Gb)cv3:)5=KVr#vCxYI`ydpL[i`A-TSqC~&q;Pr<1yy7u:UlEbQ' );
define( 'NONCE_KEY',        'VL/17=AR9)iLq`/fdN9x8D~s%G5+Snb:2{gj36%l0![x[q<4)H-,$W8y[5h_#=XU' );
define( 'AUTH_SALT',        '99ryqswd4Zu%IRJMJBob!~&@29$^O?#%[cE+58HSfvmzk(.sib}eyl>b]ep(tFZ5' );
define( 'SECURE_AUTH_SALT', 'dh1n8fkka)^$=B?;]FQs5-2ba=XxQPs!Jk*c<q#$3]BsL[j6e>GjZ3<OGJM]jxms' );
define( 'LOGGED_IN_SALT',   ']il,}DS[PD@`KvH]28b2@i`3uS0>?Bg2-LRI^fY}geSPXibvcs+Tl.ppKNtT^Rii' );
define( 'NONCE_SALT',       ';l6[4/hc/bw6/ paK K(B%Bf&|Q}V>Z=x?wYlk-s1XLK!_HjmHl_B& nh1ZwX84c' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
