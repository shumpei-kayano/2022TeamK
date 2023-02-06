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
                'occupation_name' => 'ﾌﾛﾝﾄｴﾝﾄﾞｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ﾊﾞｯｸｴﾝﾄﾞｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ｲﾝﾌﾗｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ｾｷｭﾘﾃｨｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ﾈｯﾄﾜｰｸｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ﾃﾞｰﾀﾍﾞｰｽｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ﾌﾙｽﾀｯｸｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'DevOpsｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => '機械学習ｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'iosｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'Androidｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'QAｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'UXｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ﾃﾞｰﾀｻｲｴﾝﾃｨｽﾄ',
            ],
            [
                'occupation_name' => '組み込みｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ｹﾞｰﾑ開発ｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'SIｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => '情報ｼｽﾃﾑ',
            ],
            [
                'occupation_name' => 'ﾌﾟﾘｾｰﾙｽ',
            ],
            [
                'occupation_name' => 'ﾃｸﾆｶﾙｻﾎﾟｰﾄテｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ｴﾝｼﾞﾆｱﾏﾈｰｼﾞｬｰ',
            ],
            [
                'occupation_name' => 'ﾌﾟﾛﾀﾞｸﾄﾏﾈｰｼﾞｬｰ',
            ],
            [
                'occupation_name' => '技術顧問',
            ],
            [
                'occupation_name' => 'ﾏｰｸｱｯﾌﾟｴﾝｼﾞﾆｱ',
            ],
            [
                'occupation_name' => 'ﾌﾟﾛｼﾞｪｸﾄﾏﾈｰｼﾞｬｰ',
            ],
            [
                'occupation_name' => 'ﾃﾞｰﾀｴﾝｼﾞﾆｱios/Android',
            ],
        ]);
    }
}