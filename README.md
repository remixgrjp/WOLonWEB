### ■ソフト名称
	WOL javaコマンド実行WEBアプリ

### ■バージョン
	1.0

### ■ソフトの概要
	　リモートでＬＡＮ内のパソコンを起動します。
	　You can remote start PC in LAN.

### ■動作条件
	　シェルから「Wake-Up On LAN javaコマンド」を起動できていること。

	　「Wake-Up On LAN javaコマンド」は
	https://www.vector.co.jp/soft/win95/net/se399880.html
	からダウンロード・インストールできます。JREが必要です。

	　設置対象のサーバで、Apache などのＷＥＢサーバから php が実行できている
	必要があります。フレームワーク Ethna は、安定バージョン 2.5.0。
	　PHP7に対応済です。

### ■インストールの手順
	１．設置対象のサーバで直接ダウンロード・解凍するか、解凍済みの全てのファイ
	ルをディクトリ構造のままＦＴＰで設置します。

	　主要なファイルとディクトリ構造
		wol
		│  README.md	★このファイル
		├─etc
		│      wol-ini.php	★設定ファイル
		├─locale
		├─www
		│  │  index.php	★エントリーポイント
		│  ├─css
		│  └─js
		├─template
		│  └─ja_JP
		├─bin
		├─app
		│  ├─action
		│  ├─action_cli
		│  ├─action_xmlrpc
		│  ├─view
		│  ├─test
		│  └─plugin
		│      ├─Filter
		│      ├─Smarty
		│      └─Validator
		├─log		★ログディレクトリ
		├─schema
		├─skel
		├─tmp		★テンポラリディレクトリ
		└─lib


	２．必要最小限のパーミッション設定。
	　エントリーポイントには不特定者の read 権限を付けます。
	　ログディレクトリ、テンポラリディレクトリには、apache プロセスの write
	権限を付けます。

	３．ＷＥＢサーバのDocumentRootを変更することが可能ならば、解凍した www フォ
	ルダを DocumentRoot にするのが最も簡単です。
	　既存の DocumentRoot に配置したい場合、シンボリックリンクを張るか、エントリ
	ーポイントを含む、www フォルダ内のファイルを既存の DocumentRoot に配置し エ
	ントリーポイントファイルの２行目
		require_once dirname(__FILE__) . '/../app/Wol_Controller.php';
	を実際の絶対パスに書き換えます。

	４．設定ファイル ac-ini.php 設定例。
	　java → /usr/bin/java
	　Wake-Up On LAN javaコマンド → /usr/local/bin/WakeUpOnLAN.jar
	の場合
		'PATH_CMD'=>'/usr/bin/java  -jar /usr/local/bin/WakeUpOnLAN.jar ',
	を指定します。

### ■アンインストールの手順
	　インストール時に解凍したwolフォルダごと削除するだけでアンインストールが
	完了します。ＷＥＢサーバの設定を元へ戻すのをお忘れなく。

### ■使用方法
	　ブラウザでアクセスすると、コマンド起動するフォームを表示します。
	Mac Address：起動したいパソコンのＭＡＣアドレスを指定します
	Broadcast Address：ＬＡＮのアドレスが192.168.0.1～254なら 192.168.0.255 です
	Port：一般に 1 です
	LicenceKey：「Wake-Up On LAN javaコマンド」で取得したライセンスキーです
	「Wake On LAN」ボタンを押すと「Wake-Up On LAN javaコマンド」を実行します。

### ■取り扱い種別
	　無料です。
	　作者は本ソフトウエアを使用したことにより生じた損害について一切の責任を負い
	ません。

### ■金額
	無料

### ■送金方法
	　寄付していただける場合、お振込先銀行口座を返信いたしますので

		http://www.remix.asia/service/formmail/

	より、ご連絡ください。

### ■試用制限
	制限はありません。利用者の責任で設置・運用お願いいします。

### ■連絡先
	ＲＥＭＩＸ
	http://www.vector.co.jp/vpack/browse/person/an044540.html

### ■変更履歴
	2020-04-26	Version 1.0 初版リリース
