<?php

/*
* スキルの一元管理を行う
*/

class Skills
{
    /**
     * skillsメソッド内にある配列を取得するため
     *
     * @param void
     * @return array
     */
    private function get():array
    {
        return $this->createSkills();
    }

    /**
     * 作成したskillsメソッド内のID(key名)取得
     * 取得できない場合は空の配列が返る
     *
     * @param integer $skillID
     * @return array
     */
    public function getById($skillID)
    {
        $skills = $this->get();

        if (!isset($skills[$skillID])) {
            return array();
        } else {
            return $skills[$skillID];
        }
    }

    /**
     * 全てのスキルを配列形式で格納してあるメソッド
     *
     * @param void
     * @return array
     */
    private function createSkills()
    {
        return [
          001 => [
            "name" => "お注射",
            "addHP"=> 0,
            "damage"=> $this->randomDamage(50, 100),
            "useMP" => 0,
            "text" => "お注射をねじ込んだ!!",
            "percent" => 30
          ],

          002 => [
            "name" => "解剖手術",
            "addHP"=> 0,
            "damage"=> 10000,
            "useMP" => 0,
            "text" => "解剖した",
            "percent" => 30
          ],


        ];
    }

    /**
     * 引数ベースでランダム数字を発生させる
     *
     * @param integer $min
     * @param integer $max
     * @return integer
     */
    private function randomDamage($min, $max)
    {
        return rand($min, $max);
    }
}
