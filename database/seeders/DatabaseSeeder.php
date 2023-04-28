<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name'=> 'Hung Tran',
            'email' => 'test@gmail.com'
        ]);

         Listing::factory(6)->create([
            'user_id' => $user->id
         ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' =>'Laravel Senior',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'VietNam',
        //     'email' => 'email1@gmail.com',
        //     'description'=>'Sự kiện quà tặng đã kết thúc!bCảm ơn mọi người đã ủng hộ Auto Chess Và đây là Mã đổi quà! Lần này chúng tôi sẽ tặng hơn 1400 Chìa khóa Rune tổng cộng, sẽ được gửi riêng lúc trưa và 18 giờ (UTC+8), ngày 20 tháng 4. Mã đổi quà: 【ACAUTOCHESS666】Hãy nhận ngay Chìa khóa Runecủa bạn! (Lưu ý: cấp độ nhân vật của bạn phải trên 5 để sử dụng mã.) Cách nhận Redeem: Cài đặt-Khác-Mã đổi quà'
        // ]);

        // Listing::create([
        //     'title' =>'Fullstack',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'VietNam',
        //     'email' => 'email2@gmail.com',
        //     'description'=>'Sự kiện quà tặng đã kết thúc!bCảm ơn mọi người đã ủng hộ Auto Chess Và đây là Mã đổi quà! Lần này chúng tôi sẽ tặng hơn 1400 Chìa khóa Rune tổng cộng, sẽ được gửi riêng lúc trưa và 18 giờ (UTC+8), ngày 20 tháng 4. Mã đổi quà: 【ACAUTOCHESS666】Hãy nhận ngay Chìa khóa Runecủa bạn! (Lưu ý: cấp độ nhân vật của bạn phải trên 5 để sử dụng mã.) Cách nhận Redeem: Cài đặt-Khác-Mã đổi quà'

        // ]);
    }
}
