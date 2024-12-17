<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{

    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Đi chợ mua rau',
                'description' => 'Mua rau muống, rau cải, cà chua, hành lá',
                'long_description' => 'Nhớ mua rau sạch, rau hữu cơ ở cửa hàng uy tín. Chú ý chọn rau tươi, không bị dập nát.',
                'completed' => false,
            ],
            [
                'title' => 'Hoàn thành báo cáo',
                'description' => 'Hoàn thành báo cáo cuối tháng',
                'long_description' => 'Báo cáo cần bao gồm các số liệu về doanh thu, chi phí, lợi nhuận. Phân tích các yếu tố ảnh hưởng đến kết quả kinh doanh.',
                'completed' => true,
            ],
            [
                'title' => 'Học tiếng Anh',
                'description' => 'Học 30 từ vựng mới',
                'long_description' => null,
                'completed' => false,
            ],
            // Thêm các task khác vào đây...
        ];

        foreach ($tasks as $task) {
            \App\Models\Task::create($task);
        }

    }
}
