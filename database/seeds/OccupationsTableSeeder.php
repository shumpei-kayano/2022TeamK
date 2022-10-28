<?php

use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occupations')->insert([
            [
                'occupation_name' => 'フロントエンドエンジニア',
            ],
            [
                'occupation_name' => 'バックエンドエンジニア',
            ],
            [
                'occupation_name' => 'インフラエンジニア',
            ],
            [
                'occupation_name' => 'セキュリティエンジニア',
            ],
            [
                'occupation_name' => 'ネットワークエンジニア',
            ],
            [
                'occupation_name' => 'データベースエンジニア',
            ],
            [
                'occupation_name' => 'フルスタックエンジニア',
            ],
            [
                'occupation_name' => 'DevOpsエンジニア',
            ],
            [
                'occupation_name' => '機械学習エンジニア',
            ],
            [
                'occupation_name' => 'iosエンジニア',
            ],
            [
                'occupation_name' => 'Androidエンジニア',
            ],
            [
                'occupation_name' => 'QAエンジニア',
            ],
            [
                'occupation_name' => 'UXエンジニア',
            ],
            [
                'occupation_name' => 'データサイエンティスト',
            ],
            [
                'occupation_name' => '組み込みエンジニア',
            ],
            [
                'occupation_name' => 'ゲーム開発エンジニア',
            ],
            [
                'occupation_name' => 'SIエンジニア',
            ],
            [
                'occupation_name' => '情報システム',
            ],
            [
                'occupation_name' => 'プリセールス',
            ],
            [
                'occupation_name' => 'テクニカルサポートエンジニア',
            ],
            [
                'occupation_name' => 'エンジニアマネージャー',
            ],
            [
                'occupation_name' => 'プロダクトマネージャー',
            ],
            [
                'occupation_name' => '技術顧問',
            ],
            [
                'occupation_name' => 'マークアップエンジニア',
            ],
            [
                'occupation_name' => 'プロジェクトマネージャー',
            ],
            [
                'occupation_name' => 'データエンジニアios/Android',
            ],
        ]);
    }
}
