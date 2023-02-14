<?php

use Illuminate\Database\Seeder;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'user_id' => 1,
                'name' => '大原太郎',
                'email' => 'o-hara@ac.jp',
                'tel' => '090-3636-1627',
                'educational_background' => '大原簿記公務員専門学校大分校',
                'development_language_id1' => rand(1,21),
                'development_year1' => rand(1,4),
                'development_language_id2' => rand(1,21),
                'development_year2' => rand(1,4),
                'development_language_id3' => rand(1,21),
                'development_year3' => rand(1,4),
                'development_language_id4' => rand(1,21),
                'development_year4' => rand(1,4),
                'self_pr' => 'Webプログラマーとして5年間勤務し、Javaを中心に、C、JavaScriptなどのプログラミング言語を習得いたしました。また、業務ではGithubとQiitaを活用しています。今後は業務の幅を広げたいと考え、〇月のRudy技術者認定試験での資格取得に向けて勉強しております。そうしてプログラマーとしてスキルアップを図り、将来的にはプロジェクトマネージャとしてマネジメントを行いたいと考えています。',
                'birthday' => '2002-05-14',
            ],
    
            [
                'user_id' => 2,
                'name' => '大原花子',
                'email' => 'hanako@ac.jp',
                'tel' => '090-5537-4027',
                'educational_background' => '大原簿記公務員専門学校大分校',
                'development_language_id1' => rand(1,21),
                'development_year1' => rand(1,4),
                'development_language_id2' => rand(1,21),
                'development_year2' => rand(1,4),
                'development_language_id3' => rand(1,21),
                'development_year3' => rand(1,4),
                'development_language_id4' => rand(1,21),
                'development_year4' => rand(1,4),
                'self_pr' => '私はアナログ回路設計エンジニアに5年間従事しており、CAD、CAE、CAMを使用して自社のIoT製品の設計・開発に携わっております。生産管理責任者とのコミュニケーションを取りながら製品開発プロジェクトを進行し、●●や▲▲の製品化に成功いたしました。●●は年間○○○〇億円を売り上げるヒット商品になり、3年連続で売上を伸ばしております。',
                'birthday' => date('Y-m-d', strtotime('-20 year')),
            ],
            
        ]);
    }
}
