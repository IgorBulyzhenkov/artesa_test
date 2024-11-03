<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Apple iPhone 13 Pro Max', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 14 Pro Max', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 15 Pro Max', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 16 Pro Max', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 14 Pro', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 15 Pro', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 16 Pro', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 14', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 15', 'price' => 1099, 'stock' => 20],
            ['name' => 'Apple iPhone 16', 'price' => 1099, 'stock' => 20],
            ['name' => 'Samsung Galaxy S21 Ultra', 'price' => 999, 'stock' => 15],
            ['name' => 'Sony PlayStation 5', 'price' => 499, 'stock' => 10],
            ['name' => 'Microsoft Xbox Series X', 'price' => 499, 'stock' => 8],
            ['name' => 'Apple MacBook Pro 16"', 'price' => 2399, 'stock' => 5],
            ['name' => 'Dell XPS 13 Laptop', 'price' => 1399, 'stock' => 12],
            ['name' => 'Apple iPad Pro 12.9"', 'price' => 1099, 'stock' => 18],
            ['name' => 'Samsung Galaxy Tab S7+', 'price' => 849, 'stock' => 14],
            ['name' => 'Sony WH-1000XM4 Headphones', 'price' => 349, 'stock' => 20],
            ['name' => 'Bose QuietComfort Earbuds', 'price' => 279, 'stock' => 15],
            ['name' => 'GoPro HERO9 Black', 'price' => 399, 'stock' => 25],
            ['name' => 'Canon EOS R5 Camera', 'price' => 3899, 'stock' => 6],
            ['name' => 'Nikon Z6 II Camera', 'price' => 1999, 'stock' => 10],
            ['name' => 'Apple Watch Series 7', 'price' => 399, 'stock' => 30],
            ['name' => 'Fitbit Charge 5', 'price' => 179, 'stock' => 35],
            ['name' => 'Samsung Odyssey G9 Monitor', 'price' => 1299, 'stock' => 7],
            ['name' => 'LG UltraFine 4K Monitor', 'price' => 699, 'stock' => 10],
            ['name' => 'HP Spectre x360', 'price' => 1599, 'stock' => 10],
            ['name' => 'JBL Charge 4 Bluetooth Speaker', 'price' => 149, 'stock' => 40],
            ['name' => 'Razer BlackWidow Keyboard', 'price' => 129, 'stock' => 25],
            ['name' => 'HyperX Cloud II Headset', 'price' => 99, 'stock' => 50],
            ['name' => 'DJI Mavic Air 2', 'price' => 799, 'stock' => 10],
            ['name' => 'Canon PIXMA G7020 Printer', 'price' => 229, 'stock' => 30],
            ['name' => 'Philips Hue Smart Bulb', 'price' => 49, 'stock' => 75],
            ['name' => 'Nest Learning Thermostat', 'price' => 249, 'stock' => 20],
            ['name' => 'Roku Ultra 2021', 'price' => 99, 'stock' => 60],
            ['name' => 'Apple TV 4K', 'price' => 179, 'stock' => 25],
            ['name' => 'Fire TV Stick 4K', 'price' => 49, 'stock' => 80],
            ['name' => 'Amazon Echo Show 8', 'price' => 129, 'stock' => 30],
            ['name' => 'Google Nest Hub', 'price' => 99, 'stock' => 40],
            ['name' => 'Ring Video Doorbell Pro', 'price' => 249, 'stock' => 15],
            ['name' => 'Arlo Pro 3 Security Camera', 'price' => 199, 'stock' => 20],
            ['name' => 'TP-Link Deco Mesh WiFi System', 'price' => 179, 'stock' => 25],
            ['name' => 'Netgear Nighthawk AX12 Router', 'price' => 499, 'stock' => 8],
            ['name' => 'Asus ZenWiFi AX6600', 'price' => 349, 'stock' => 12],
            ['name' => 'Sony Bravia 65" 4K TV', 'price' => 1199, 'stock' => 6],
            ['name' => 'Samsung QLED 55" Smart TV', 'price' => 999, 'stock' => 9],
            ['name' => 'LG CX OLED 65" TV', 'price' => 1499, 'stock' => 5],
            ['name' => 'Anker PowerCore 10000', 'price' => 29, 'stock' => 60],
            ['name' => 'Apple AirPods Pro', 'price' => 249, 'stock' => 30],
            ['name' => 'Samsung Galaxy Buds Pro', 'price' => 199, 'stock' => 40],
            ['name' => 'Sony WF-1000XM4 Earbuds', 'price' => 279, 'stock' => 25],
            ['name' => 'Dell UltraSharp 27 Monitor', 'price' => 599, 'stock' => 10],
            ['name' => 'Apple HomePod Mini', 'price' => 99, 'stock' => 50],
            ['name' => 'Google Pixel 6 Pro', 'price' => 899, 'stock' => 15],
            ['name' => 'OnePlus 9 Pro', 'price' => 969, 'stock' => 12],
            ['name' => 'Huawei P40 Pro', 'price' => 899, 'stock' => 10],
            ['name' => 'Xiaomi Mi 11 Ultra', 'price' => 999, 'stock' => 8],
            ['name' => 'Amazon Kindle Paperwhite', 'price' => 129, 'stock' => 45],
            ['name' => 'Garmin Forerunner 945', 'price' => 599, 'stock' => 20],
            ['name' => 'Theragun Elite Massager', 'price' => 399, 'stock' => 15],
            ['name' => 'Dyson Airwrap Styler', 'price' => 549, 'stock' => 12],
            ['name' => 'Instant Pot Duo 7-in-1', 'price' => 89, 'stock' => 40],
            ['name' => 'KitchenAid Stand Mixer', 'price' => 399, 'stock' => 18],
            ['name' => 'iRobot Roomba 960', 'price' => 449, 'stock' => 15],
            ['name' => 'Dyson V11 Cordless Vacuum', 'price' => 599, 'stock' => 10],
            ['name' => 'Ninja Foodi Grill', 'price' => 199, 'stock' => 20],
            ['name' => 'Philips Sonicare Toothbrush', 'price' => 89, 'stock' => 35],
            ['name' => 'Oral-B iO Series 9', 'price' => 299, 'stock' => 20],
            ['name' => 'Braun Electric Shaver', 'price' => 249, 'stock' => 25],
            ['name' => 'Panasonic Lumix G100', 'price' => 749, 'stock' => 7],
            ['name' => 'Fujifilm Instax Mini 11', 'price' => 69, 'stock' => 55],
            ['name' => 'Beats Solo3 Headphones', 'price' => 199, 'stock' => 25],
            ['name' => 'Skullcandy Crusher Wireless', 'price' => 149, 'stock' => 45],
            ['name' => 'Corsair K95 RGB Keyboard', 'price' => 179, 'stock' => 30],
            ['name' => 'Logitech MX Master 3 Mouse', 'price' => 99, 'stock' => 50],
            ['name' => 'SteelSeries Arctis 7', 'price' => 149, 'stock' => 20],
            ['name' => 'Alienware Aurora R12', 'price' => 2399, 'stock' => 5],
            ['name' => 'NZXT H510 Case', 'price' => 69, 'stock' => 25],
            ['name' => 'AMD Ryzen 7 5800X', 'price' => 449, 'stock' => 10],
            ['name' => 'Intel Core i9-11900K', 'price' => 539, 'stock' => 8],
            ['name' => 'NVIDIA GeForce RTX 3080', 'price' => 699, 'stock' => 5],
            ['name' => 'MSI GeForce GTX 1660', 'price' => 229, 'stock' => 12],
            ['name' => 'Western Digital 4TB HDD', 'price' => 89, 'stock' => 30],
            ['name' => 'Samsung 970 EVO 1TB SSD', 'price' => 129, 'stock' => 20],
            ['name' => 'Crucial Ballistix 16GB RAM', 'price' => 79, 'stock' => 40],
            ['name' => 'ASUS ROG Strix 850W PSU', 'price' => 139, 'stock' => 18],
            ['name' => 'Razer Viper Ultimate Mouse', 'price' => 129, 'stock' => 35],
            ['name' => 'HyperX Alloy FPS Pro', 'price' => 89, 'stock' => 45],
            ['name' => 'Samsung T5 Portable SSD 500GB', 'price' => 89, 'stock' => 40],
            ['name' => 'Belkin BoostCharge 10K Power Bank', 'price' => 29, 'stock' => 60],
            ['name' => 'Mophie 3-in-1 Wireless Charger', 'price' => 139, 'stock' => 20],
            ['name' => 'Belkin USB-C Hub', 'price' => 59, 'stock' => 45],
            ['name' => 'Anker Soundcore Life Q30', 'price' => 79, 'stock' => 55],
            ['name' => 'LG Tone Free FN7 Earbuds', 'price' => 149, 'stock' => 35],
            ['name' => 'Sony SRS-XB23 Bluetooth Speaker', 'price' => 99, 'stock' => 45],
            ['name' => 'Nikon D750 DSLR Camera', 'price' => 1499, 'stock' => 10],
            ['name' => 'Canon Rebel T7', 'price' => 449, 'stock' => 20],
            ['name' => 'Olympus OM-D E-M10 Mark IV', 'price' => 699, 'stock' => 8],
            ['name' => 'Apple Magic Keyboard', 'price' => 99, 'stock' => 25],
            ['name' => 'Logitech C920 Webcam', 'price' => 69, 'stock' => 40],
            ['name' => 'Elgato Stream Deck', 'price' => 149, 'stock' => 30],
            ['name' => 'Shure MV7 Microphone', 'price' => 249, 'stock' => 15],
        ];

        foreach ($products as $product) {

            $res = Products::query()->where(['name' => $product['name']])->first();

            if (!is_null($res)) {
                return;
            }

            Products::create($product);
        }
    }
}
