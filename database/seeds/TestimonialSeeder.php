<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            
            
            ['name'=>'Heena Trivedi','It was an absolutely amazing experience to do the Spanish Crash Course.I have & will always recommend you guys to all my friends & family." Es un placer". I am glad I have utilised my quarantine time like this. Thank You once again The Language Academy ! Lots of love and success for the future !'=>'Comment here','created_at'=>now(),'updated_at'=>now()],
            // ['name'=>'Animal Feed','comment'=>'Comment here','created_at'=>now(),'updated_at'=>now()],
            // ['name'=>'Animal Feed','comment'=>'Comment here','created_at'=>now(),'updated_at'=>now()],
            // ['name'=>'Animal Feed','comment'=>'Comment here','created_at'=>now(),'updated_at'=>now()],
            // ['name'=>'Animal Feed','comment'=>'Comment here','created_at'=>now(),'updated_at'=>now()],
            // ['name'=>'Animal Feed','comment'=>'Comment here','created_at'=>now(),'updated_at'=>now()],
            // ['name'=>'Animal Feed','comment'=>'Comment here','created_at'=>now(),'updated_at'=>now()],
        ];

        DB::table('testimonials')->insert($testimonials);
    }
}
