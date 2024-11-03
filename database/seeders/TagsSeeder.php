<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Electronics',
            'Smartphones',
            'Laptops',
            'Tablets',
            'Gaming',
            'Cameras',
            'Headphones',
            'Wearables',
            'Smart Home',
            'Printers',
            'Networking',
            'TVs',
            'Monitors',
            'Audio',
            'Bluetooth Speakers',
            'Kitchen Appliances',
            'Health & Wellness',
            'Personal Care',
            'Home Office',
            'Fitness',
            'Photography',
            'Video Recording',
            'Drones',
            'Storage',
            'Chargers',
            'Power Banks',
            'Accessories',
            'Keyboards',
            'Mice',
            'Webcams',
            'Microphones',
            'Computer Components',
            'Motherboards',
            'Graphics Cards',
            'Processors',
            'SSD',
            'HDD',
            'Memory',
            'Routers',
            'Smartwatches',
            'Earbuds',
            'Noise-Canceling',
            'Gaming Consoles',
            'Fitness Trackers',
            'Smart Lights',
            'Streaming Devices',
            'Security Cameras',
            'Bluetooth',
            'USB-C',
            '4K',
            '5G',
            'Ultra HD',
            'Fast Charging',
            'Portable',
            'Travel',
            'Outdoor',
            'Professional',
            'Photo Editing',
            'Video Editing',
            'Content Creation',
            'Live Streaming',
            'Gaming Accessories',
            'Home Entertainment',
            'Smart Displays',
            'Voice Assistants',
            'Eco-Friendly',
            'Rechargeable',
            'Wireless',
            'Multi-Device',
            'High-Resolution',
            'Waterproof',
            'Compact',
            'Lightweight',
            'Noise Isolation',
            'Bass Boost',
            'All-in-One',
            'Touchscreen',
            'Durable',
            'Fashion',
            'Luxury',
            'Affordable',
            'Productivity',
            'Educational',
            'Kids',
            'Home Security',
            'Fitness Goals',
            'Health Tracking',
            'Photo Printing',
            '3D Printing',
            'Vlogging',
            'Podcasting',
            'Mobile Photography',
            'Thermostats',
            'Electric Shavers',
            'Air Purifiers',
            'Vacuum Cleaners',
            'Food Processors',
            'Instant Cooking',
            'Energy Efficient',
            'Office Supplies',
            'Ergonomic',
            'Adjustable',
            'Expandable',
        ];

        foreach ($tags as $t) {

            $res = Tags::query()->where(['name' => $t])->first();

            if (!is_null($res)) {
                return;
            }

            Tags::create(['name' => $t]);
        }
    }
}
