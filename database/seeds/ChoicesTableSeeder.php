<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([
            [
                'question_id' => 1,
                'choice_text' => '後期高齢者医療広域連合の区域内に住所を有する75歳以上の者は、原則として、後
                期高齢者医療制度の被保険者となる。',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'choice_text' => '国民年金の付加保険料納付済期間を有する者が、老齢基礎年金の繰下げ支給の申出
                をした場合、付加年金は、老齢基礎年金と同様の増額率によって増額される。',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 1,
                'choice_text' => '確定拠出年金の個人型年金の加入者が国民年金の第１号被保険者である場合、原則と
                して、掛金の拠出限度額は年額816,000円である。',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'choice_text' => '日本政策金融公庫の教育一般貸付（国の教育ローン）において、融資の対象となる
                学校は、中学校、高等学校、大学、大学院等の小学校卒業以上の者を対象とする教育
                施設である。',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 2,
                'choice_text' => '契約転換制度により、現在加入している生命保険契約を新たな契約に転換する場合、
                転換後契約の保険料は、転換前契約の加入時の年齢に応じた保険料率により算出され
                る。',
                'is_correct' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'choice_text' => '収入保障保険の死亡保険金を年金形式で受け取る場合の受取総額は、一般に、一時
                金で受け取る場合の受取額よりも少なくなる。',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'choice_text' => '所得税において、個人が2021年中に締結した生命保険契約に基づく支払保険料のう
                ち、先進医療特約に係る保険料は、介護医療保険料控除の対象となる。',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'choice_text' => '景気動向指数において、コンポジット・インデックス（ＣＩ）は、主として景気変動
                の大きさやテンポ（量感）の測定を目的とした指標である。',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'choice_text' => '一般に、格付の高い債券ほど利回りが高く、格付の低い債券ほど利回りが低くなる。',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'choice_text' => ' 特定口座を開設している金融機関に、ＮＩＳＡ口座（少額投資非課税制度における非
                課税口座）を開設した場合、特定口座内の株式投資信託をＮＩＳＡ口座に移管すること
                ができる。',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'choice_text' => '所得税において、医療保険の被保険者が病気で入院したことにより受け取った入院
                給付金は、非課税である。',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'choice_text' => '夫が生計を一にする妻に係る確定拠出年金の個人型年金の掛金を負担した場合、そ
                の負担した掛金は、夫に係る所得税の小規模企業共済等掛金控除の対象となる。',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'choice_text' => '現価係数',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'choice_text' => '減債基金係数',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 5,
                'choice_text' => '資本回収係数',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'choice_text' => '30万円',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'choice_text' => '42万円',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 6,
                'choice_text' => '56万円',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'choice_text' => '100日',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'choice_text' => '150日',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 7,
                'choice_text' => '200日',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'choice_text' => '２分の１',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'choice_text' => '３分の２',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'choice_text' => '４分の３',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'choice_text' => '① 特別勘定 ② 死亡給付金額',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'choice_text' => '① 特別勘定 ② 解約返戻金額',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 9,
                'choice_text' => '① 一般勘定 ② 解約返戻金額',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'choice_text' => '贈与税',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'choice_text' => '相続税',
                'is_correct' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'choice_text' => '所得税',
                'is_correct' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
