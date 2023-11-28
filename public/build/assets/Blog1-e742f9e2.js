import e from"./Code-f8c1d7e5.js";import a from"./Console-aea12a2e.js";import o from"./Content-7cda5dc5.js";import i from"./Goal-4064ecfd.js";import u from"./Head-43b852a6.js";import s from"./SubTitle-58b7cf8f.js";import c from"./Title-b523c309.js";import f from"./URL-09679970.js";import h from"./Layout-7ecc5911.js";import{c as r,w as l,o as m,b as _,g as t,t as p,a as n}from"./app-b278ce3c.js";import"./Footer-5b462ce0.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./Header-c1ebe89c.js";import"./RightSideMenu-03f80032.js";const g=t(" 目標: DBを作って`blogs`というテーブルを作成して、adminer.phpで確認する。 "),b=t("作成するテーブルのカラム"),w=t(" 作成するカラムは"),B=t("id"),$=t("created_at"),x=t("updated_at"),M=t("deleted_at"),y=t("title"),D=t("content"),N=t("tags"),k=t("の７つ。 "),C=t("Migrationファイルを作成する"),S=t(" Migrationファイルを作成するために、ターミナルで以下のコマンドを打つ "),V=t("php artisan make:migration create_blogs_table"),q=t(" コマンドに成功すると、以下のメッセージが出てきてblogsテーブルのマイグレーションファイルができる。 "),v=t(" INFO Migration"),P=n("br",null,null,-1),A=t(" [C:\\xampp\\htdocs\\blog\\blog\\database\\migrations/2023_11_11_133513_create_blogs_table.php]"),F=n("br",null,null,-1),H=t(" created successfully."),I=n("br",null,null,-1),L=t("database\\migrations"),O=t("フォルダの中に "),R=t("2023_11_11_11111_create_blogs_table.php"),T=t(" のようなファイルができている。 "),U=t("2023_11_11_11111"),j=t("はコマンドを実行した時間が書かれている。 "),z=t("DBとテーブルを作成する"),E=t(" コンソール上で以下のコマンドを実行する "),G=t("php artisan migrate"),J=t(" コマンドに成功すると、DBが作られて作成したマイグレーションファイルが実行されて、`blogテーブル`が作成される。 "),K=t("DBを確認するために、adminer.phpを使用する"),Q=t(" adminer.php1とは、１つのPHPファイルでデータベースを管理することができるツールのこと "),W=t(" public配下にadminer.phpをダウンロードしてきて設置する。ダウンロードページは以下のURL。 "),X=t(" https://www.adminer.org/ "),Y=t(" xamppでは初期設定ではrootのパスワードが設定されていないため、設定する。 "),Z=t(" windowsのxammpp配下の"),tt=t("xampp\\mysql\\bin\\"),lt=t("に行き、以下のコマンドを実行する。 "),_t=t("mysqladmin -u root password"),ot=t(" 実行すると以下のように質問されるため、設定したいパスワードを２回入力する "),et=t(" Newpassword: **** "),st=n("br",null,null,-1),nt=t(" Confirm new password: **** "),dt=t(" .envにも設定したパスワードを入力する "),at=t(" ブラウザで、"),it=t("\\adminer.php"),ut=t(" にアクセスし、.envに書いてある情報を入力するとログインできる "),ct=t(" さっき作成したblogsテーブルがあるから確認できる。作成したカラムがしっかり入っていれば成功。 "),ft=t("Modelを作成する"),ht=t(" コンソール上で以下のコマンドを実行する "),rt=t("php artisan make:model Blog app\\Models"),mt=t(" コマンドに成功すると、"),pt=t("app\\Models"),gt=t("フォルダの中に`BlogModel`が作成されている。 "),At={name:"Blog1",props:{hello:String,blog:Array,tags:String},setup(d){return(bt,wt)=>(m(),r(h,null,{default:l(()=>[_(u,{blog:d.blog,tags:d.tags},null,8,["blog","tags"]),_(c,null,{default:l(()=>[t(p(d.blog.content),1)]),_:1}),_(i,null,{default:l(()=>[g]),_:1}),_(s,null,{default:l(()=>[b]),_:1}),_(o,null,{default:l(()=>[w,_(e,null,{default:l(()=>[B]),_:1}),_(e,null,{default:l(()=>[$]),_:1}),_(e,null,{default:l(()=>[x]),_:1}),_(e,null,{default:l(()=>[M]),_:1}),_(e,null,{default:l(()=>[y]),_:1}),_(e,null,{default:l(()=>[D]),_:1}),_(e,null,{default:l(()=>[N]),_:1}),k]),_:1}),_(s,null,{default:l(()=>[C]),_:1}),_(o,null,{default:l(()=>[S]),_:1}),_(o,null,{default:l(()=>[_(e,null,{default:l(()=>[V]),_:1})]),_:1}),_(o,null,{default:l(()=>[q]),_:1}),_(a,null,{default:l(()=>[v,P,A,F,H,I]),_:1}),_(o,null,{default:l(()=>[_(e,null,{default:l(()=>[L]),_:1}),O,_(e,null,{default:l(()=>[R]),_:1}),T,_(e,null,{default:l(()=>[U]),_:1}),j]),_:1}),_(s,null,{default:l(()=>[z]),_:1}),_(o,null,{default:l(()=>[E]),_:1}),_(o,null,{default:l(()=>[_(e,null,{default:l(()=>[G]),_:1})]),_:1}),_(o,null,{default:l(()=>[J]),_:1}),_(s,null,{default:l(()=>[K]),_:1}),_(o,null,{default:l(()=>[Q]),_:1}),_(o,null,{default:l(()=>[W]),_:1}),_(f,{content:"https://www.adminer.org/"},{default:l(()=>[X]),_:1}),_(o,null,{default:l(()=>[Y]),_:1}),_(o,null,{default:l(()=>[Z,_(e,null,{default:l(()=>[tt]),_:1}),lt]),_:1}),_(o,null,{default:l(()=>[_(e,null,{default:l(()=>[_t]),_:1})]),_:1}),_(o,null,{default:l(()=>[ot]),_:1}),_(a,null,{default:l(()=>[et,st,nt]),_:1}),_(o,null,{default:l(()=>[dt]),_:1}),_(o,null,{default:l(()=>[at,_(e,null,{default:l(()=>[it]),_:1}),ut]),_:1}),_(o,null,{default:l(()=>[ct]),_:1}),_(s,null,{default:l(()=>[ft]),_:1}),_(o,null,{default:l(()=>[ht]),_:1}),_(o,null,{default:l(()=>[_(e,null,{default:l(()=>[rt]),_:1})]),_:1}),_(o,null,{default:l(()=>[mt,_(e,null,{default:l(()=>[pt]),_:1}),gt]),_:1})]),_:1}))}};export{At as default};
