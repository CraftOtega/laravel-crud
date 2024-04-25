<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;



class studentseederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        

        $posts = [ 

            [
                'name' => 'ben',
                'email' => 'ben@gmail.com ',
                'phone' => '123',
                'address' => 'lagos',
                
            ],
            
            



            [
            'name' => 'jack ',
            'email' => 'jack@gmail.com',
            'phone' => '2788',
            'address' => 'loca',
            
            ],


            [
                'name' => 'ben5',
                'email' => 'ben5@gmail.com ',
                'phone' => '123',
                'address' => 'lagos',
                
            ],
            
            



            [
            'name' => 'jacks ',
            'email' => 'jacks@gmail.com',
            'phone' => '27888',
            'address' => 'loca',
            
            ],




            [
                'name' => 'benmo',
                'email' => 'benmo@gmail.com ',
                'phone' => '123',
                'address' => 'lagos',
                
            ],
            
            



            [
            'name' => 'jack05 ',
            'email' => 'jack05@gmail.com',
            'phone' => '2788',
            'address' => 'loca',
            
            ]
            
        ];

         
        
        foreach($posts as $Key => $value )  {
        

            student::create($value);
        
        }

    }
}
