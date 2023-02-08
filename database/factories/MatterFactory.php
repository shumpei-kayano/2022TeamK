<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Matter;
use Faker\Generator as Faker;

$factory->define(Matter::class, function (Faker $faker) {
    return [
        'prefectures_id' => rand(1,47),
        'matter_name' => $faker->randomElement($array=['売上商品集計において、決済方法と発送日（月単位）でフィルターしたい',
                        'ダイレクトバンキングシステム構築',
                        'UI・UXの設計/LPOの担当者募集','【ネクストエンジンの商品管理のページ作成機能を利用したAmazon店舗ページの作成】']),
        'development_language_id1' => rand(1,21),
        'development_language_id2' => rand(1,21),
        'development_language_id3' => rand(1,21),
        'development_language_id4' => rand(1,21),
        'occupation_id' => rand(1,26),
        'remarks' => $faker->randomElement($array=['【 概要 】&NewLine;
        表題の通りです。&NewLine;
        売上集計プラグインでは&NewLine;
        複数のフィルターに対応していないためカスタマイズ要望です。&NewLine;
        【 納期 】&NewLine;
        なるべく早め希望です。&NewLine;
        【 契約金額(税抜) 】&NewLine;
        なるべくコスト抑えたいです。&NewLine;
        ※契約金額（税込）からシステム利用料を差し引いた金額が、ワーカーさまの受取金額となります&NewLine;
        【 重視する点・経験 】&NewLine;
        ・ECCUBE4のプラグイン制作経験のある方。&NewLine;
        ・もしくは本体カスタマイズでも可&NewLine;
        【 応募方法 】&NewLine;
        ・簡単な自己紹介や実績、ポートフォリオをご提示ください。&NewLine;
        ・条件提示にてお見積もり金額を入力してください。&NewLine;
        ご質問がありましたら、気軽にお問い合わせください。&NewLine;
        応募をお待ちしております。&NewLine;',
        '■概要&NewLine;
        広告配信用のLPのUI・UXデザインが出来る方を募集しております。&NewLine;
        ■依頼イメージ&NewLine;
        ・UI/UXの観点からのLPの改善案の設計/振り返り&NewLine;
        ・デザインイメージの設計&NewLine;
        ■必須条件&NewLine;
        ・獲得目的のWeb広告でのLPO経験&NewLine;
        ・これまでの実績の開示&NewLine;
        ■こんな方にオススメです！&NewLine;
        ・自分のスキルを活かして副業がしたい&NewLine;
        ・スケジュールに融通が聞く副業を探している&NewLine;
        ・完全リモートで隙間時間に働きたい&NewLine;
        ※実際に働かれている方は広告代理店勤務、事業会社勤務、フリーランス・自営業の方など多岐にわたります。&NewLine;
        ■契約について&NewLine;
        ・勤務時間：平日夜、土日のみなど自由な働き方が可能！&NewLine;
        ・雇用形態：業務委託&NewLine;
        ・出勤：なし（フルリモートです）&NewLine;
        ・報酬：応相談■注意点・禁止事項　&NewLine;
        ・制作物の流用、転載、売却は禁止&NewLine;
        ・ネットや他作品からのコピーの禁止&NewLine;
        ・弊社より提供した全ての情報漏洩は禁止&NewLine;
        ・当方で提案した内容を他へ提案することも同様に禁止&NewLine;
        ・他で登録されているデザインや商標の転用など、他社の知的財産権、著作権を侵すことは禁止&NewLine;
        ・納品頂いた制作物は、著作権（著作権法第２７条及び第２８条の権利を含む）が当方に譲渡されます。&NewLine;
        　(制作実績としてお使いいただく分には構いません。)&NewLine;
        ※土日・祝日のご応募の場合、弊社からのご連絡は翌営業日になります。予めご了承ください。&NewLine;',
        '【内　容】お客様によるテストで発生した不具合箇所の対応と&NewLine;
        　　　　　テストで発生したインシデントの類似対応（品質強化対応）を&NewLine;
        　　　　　実施しています。&NewLine;
        【環　境】Java（Junitでのテスト実施あり）&NewLine;
        　　　　　DB　ORACLE&NewLine;
        【スキル】Java開発経験&NewLine;
        【期　間】3月～中長期&NewLine;
        【場　所】中野(リモート併用)&NewLine;
        【面　談】1回　&NewLine;
        【単　価】スキル見合い&NewLine;',
        '【 概要 】ネクストエンジンの商品管理のページ作成機能を利用したAmazon店舗ページの作成&NewLine;
        【 依頼内容 】&NewLine;
        在庫・受注連携としてネクストエンジンを使用していますが、&NewLine;
        ネクストエンジンからAmazon店舗のページ作成を考えております。&NewLine;
        現状、ネクストエンジンには在庫・受注連携に必要な項目しかデータ登録をしていないので、&NewLine;
        　・ネクストエンジンへの商品データ登録&NewLine;
        　　　※セット商品登録も必須&NewLine;
        　・Amazon項目への紐付設定&NewLine;
        　・ページ作成＆販売開始&NewLine;
        までの一連の作業をご教示頂ける方を探しています。&NewLine;
        【必須条件】&NewLine;
        ・早いレスポンス&NewLine;
        ・ネクストエンジンの機能を利用したAmazonページ作成経験者&NewLine;
        【 応募方法 】&NewLine;
        ・簡単な自己紹介や実績をご提示ください。&NewLine;
        ・条件提示にてお見積もり金額を入力してください。&NewLine;
        ご質問がありましたら、気軽にお問い合わせくださいませ。&NewLine;
        応募をお待ちしております！&NewLine;']),
        'success_fee' => rand(1,50)*10000,
        'deadline' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
        'rank' => rand(1,7),
        'number_of_person' => rand(1,5),
        'tel' => $faker->phoneNumber(),
        'user_id' => rand(3,5),
        
    ];
});
