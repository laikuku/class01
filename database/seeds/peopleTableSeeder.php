<?php
use App\Home_model;
use Illuminate\Database\Seeder;

class peopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        //
        /*
        foreach(range(1,20)as $number){
        	 Home_model::create([
        	'ARRAYname'=>'王小',
        	'CLASSROOMname'=>'教室',
            'SCHEDULEyear'=>'2017',
            'SCHEDULEmonth'=>'1',
            'BORROWer'=>'1',
            'CELLphone'=>'0911321321',
            'PURPOSE'=>'1',
            'application'=>'1998-05-02 01:23:56.123',
            'key_status'=>'0'
            ]);
        }
        */
        /*
        //使用faker 讓假資料更逼真
        $faker=\Faker\Factory::create('zh_TW');
        foreach(range(1,20)as $number){
         Home_model::create([
        'ARRAYname'=> $faker->name,
        'CLASSROOMname'=> $faker->regexify('教室[0-9]{1}'),
        'SCHEDULEyear'=>'2017',
        'SCHEDULEmonth'=>$faker->numberBetween(1,12),
        'BORROWer'=>$faker->numberBetween(1,28),
        'CELLphone'=>$faker->phoneNumber(),
        'PURPOSE'=>'1',
        'application'=>'1998-05-02 01:23:56.123',
        'key_status'=>'0'
            ]);
        }
        */

        //利用ModelFactory.php來建立假資料,truncate是建立前會清除資料表 目前這方法還沒找到創中文資料
        \App\Home_model::truncate();
        factory(Home_model::class,5)->create();

    }
}



