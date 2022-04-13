<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'question_text' => '次の文章を読んで、正しいものまたは適切なものを全て選択しなさい。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章を読んで、正しいものまたは適切なものを全て選択しなさい。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章を読んで、正しいものまたは適切なものを全て選択しなさい。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章を読んで、正しいものまたは適切なものを全て選択しなさい。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章の（ ）内にあてはまる最も適切な語句を選択しなさい。
                元金を一定の利率で複利運用しながら、毎年一定金額を一定の期間にわたり取り崩していくときの毎年の取崩し金額を計算する場合、元金に乗じる係数は、（ ）である。 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章の（ ）内にあてはまる最も適切な数字を選択しなさい。
                全国健康保険協会管掌健康保険の被保険者が、産科医療補償制度に加入する医療機関で出産した場合の出産育児一時金の額は、１児につき（ ）である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章の（ ）内にあてはまる最も適切な数字を選択しなさい。
                20年以上勤務した会社を60歳到達月の末日で定年退職し、雇用保険の基本手当の受給資格者となった者が受給することができる基本手当の日数は、最大（ ）である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章の（ ）内にあてはまる最も適切な数字を選択しなさい。
                遺族厚生年金の額（中高齢寡婦加算額および経過的寡婦加算額を除く）は、原則として、死亡した者の厚生年金保険の被保険者記録を基礎として計算した老齢厚生年金の報酬比例部分の額の（ ）に相当する額である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章の（ ）内にあてはまる最も適切な組み合わせを選択しなさい。
                変額個人年金保険は、（ ① ）の運用実績に基づいて将来受け取る年金額等が変動するが、一般に、（ ② ）については最低保証がある。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => '次の文章の（ ）内にあてはまる最も適切な語句を選択しなさい。
                生命保険契約において、契約者（＝保険料負担者）および死亡保険金受取人がＡさん、被保険者がＡさんの父親である場合、被保険者の死亡によりＡさんが受け取る死亡保険金は、（ ）の課税対象となる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
