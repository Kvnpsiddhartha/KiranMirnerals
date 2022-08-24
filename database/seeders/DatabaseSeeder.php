<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProductAccordion;
use App\Models\ProductAccordionImage;
use App\Models\ProductAccordionTag;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Service::create([
            'title1' => 'Quartz',
            'title2' => 'Snow White',
            'sss4class' => 'gas',
            'icon' => 'industrio-icon-gas-station-1',
            'image' => '1/6.jpg',
            'url' => 'quartz',
            'description' => "Quartz is the second most abundant mineral on Earth's crust. A wide variety of high grade Quartz that we are offering is appreciated for its resistance against mechanical and chemical weathering. Quartz (Silica SiO2) is the most common mineral in the Earths crust. Quartz is found in sandstones, pegmatites granites, and other igneous rocks.
                                It is hard, chemically inert and has a high melting point, attributable to the strength of the bonds between the atoms and extremely resistant to weathering. Quartz used in many industries:- Quartz sand/grains in Glass Industry, Ceramics Industry, Paint industry, Oil well drilling. A wide variety of high grade Quartz that we are offering is appreciated for its resistance against mechanical and chemical weathering. They are ubiquitous and durable. The offered Quartz is finely processed at our sophisticated production unit. We are a well-established Quartz Manufacturer, Exporter and Supplier from Rajasthan (India). We provide them in safe, industrial grade packing. Also, we can process bulk orders on request.",
        ]);
        Service::create([
            'title1' => 'Silica',
            'title2' => 'Sand',
            'sss4class' => 'gas',
            'icon' => 'industrio-icon-gas-station-1',
            'image' => '1/6.jpg',
            'url' => 'silica-sand',
            'description' => "Silica sand is a quartz that has been broken down into tiny granules due to the activities of water and wind. It is mostly surface-mined in an open pit operations. Extracted ore is subjected to extensive processing in order to boost silica content and remove impurities. After that, it's dried and sized to get the best particle size distribution for the job.
<br/><br/>
Widely used as a proppant in the oil and natural gas companies.Silica sand is used industries such as Glass and construction industries to make everyday items. Our company manufactures and supplies sand with accurate composition, impurity-free and long shelf life at the best price.",
        ]);
        Service::create([
            'title1' => 'Potash',
            'title2' => 'Feldspar',
            'sss4class' => 'eco',
            'icon' => 'industrio-icon-atomic',
            'image' => '1/1.jpg',
            'url' => 'potash-feldspar',
            'description' => "Feldspar is by far the most abundant group of minerals in the earth’s crust, forming about 60% of terrestrial rocks. Most deposits offer sodium feldspar as well as potassium feldspar and mixed feldspars. Feldspars are primarily used in industrial applications for their alumina and alkali content. The term feldspar encompasses a whole range of materials.",
        ]);
        Service::create([
            'title1' => 'Sodium',
            'title2' => 'Feldspar',
            'sss4class' => 'gas',
            'icon' => 'industrio-icon-gas-station-1',
            'image' => '1/2.jpg',
            'url' => 'sodium-feldspar',
            'description' => "Feldspar is by far the most abundant group of minerals in the earth’s crust, forming about 60% of terrestrial rocks. Most deposits offer sodium feldspar as well as potassium feldspar and mixed feldspars. Feldspars are primarily used in industrial applications for their alumina and alkali content. The term feldspar encompasses a whole range of materials.           
                            <br/><br/>
                            Sodium feldspar is commonly used in Ceramic and Glass industries. Kiran Minerals is a market leader in the mining and processing of feldspar in Rajasthan (India), supplying high-quality products to the market",
        ]);
        Service::create([
            'title1' => 'Abrasive',
            'title2' => 'Sand',
            'sss4class' => 'chemical',
            'icon' => 'industrio-icon-flasks',
            'image' => '1/3.jpg',
            'url' => 'abrasive-sand',
            'description' => "Abrasive sand is mostly used as an alternative to silica sand because it produces less dust and very safe than silica sand. They are commonly used to remove impurities from surfaces since the sand has same size and the edges of the particles are sharp. Kiran Minerals is well-known for the manufacturing and supplying of quality abrasive."
        ]);
        Service::create([
            'title1' => 'Dolomite',
            'title2' => '',
            'sss4class' => 'eco',
            'icon' => 'industrio-icon-atomic',
            'image' => '1/4.jpg',
            'url' => 'dolomite',
            'description' => "Dolomite is a type of limestone. One of the three most abundant carbonate minerals. It is rich in magnesium and calcium carbonate. It differs from calcite and aragonite, which are the other two carbonate minerals, in its crystal structure. Crystals of dolomite are common in hydrothermal vein deposits and sedimentary rocks called dolostone, where fill pores in their host rock. They serve as the host rock for many lead, zinc and copper deposits.
<br/><br/>
Dolomites are used in the Paint industry, Glass industry, Ceramic industry, Detergent industry. The dolomite lumps we produce are slightly harder, shiny, denser and never forms scalenohedrons. Kiran Minerals are well-known for the manufacturing, exporting and supplying of dolomites in a safe industrial grade packing from Rajasthan (India). our company has the capacity to produce bulk dolomites on request.",
        ]);
        Service::create([
            'title1' => 'Talc',
            'title2' => '',
            'sss4class' => 'eco',
            'icon' => 'industrio-icon-atomic',
            'image' => '1/5.jpg',
            'url' => 'talc',
            'description' => "Talc is a mineral that has a hydrophobic surface, is chemically inert, and has a slick texture. It's a soft, water-like substance that can be used to make plastics and other items. Talc is made up primarily of magnesium silicate minerals. The white mineral solid is crushed into lumps and powder. The harder grades of Talc are suitable for commercial applications.
<br/><br/>
Talc has soft, greasy, and soapy feel, and a high-temperature lubricant due to the weak bonds between its sheets. It is used in industries such as the Plastic, Paint, Ceramics, Paper, Construction and Cosmetic industries. Customers can rest confident that the talc they purchase from us is pure. This asbestos-free material comes in lump form and can be acquired in various grades depending on the use. As a great manufacturer and supplier, we serve you with highly effective and correct formulation of Talc at the best price.

",
        ]);
        Review::create([
            'client_name' => 'Laure Spinello',
            'client_photo' => 'testi-1-1.jpg',
            'designation' => 'Founder, Arch Industry',
            'review' => 'For over 10 years working with Kiran Minerals, they have continuously demonstrated excellent ability while ensuring superior customer service.'
        ]);
        Review::create([
            'client_name' => 'Juan Horii',
            'client_photo' => 'testi-1-2.jpg',
            'designation' => 'Director, Crono Sanitary',
            'review' => 'I have not written letters of praise to many of the companies I have worked with over the years, but in this case, I think I should go on record.'
        ]);
        Review::create([
            'client_name' => 'Reyes Slotemaker',
            'client_photo' => 'testi-1-3.jpg',
            'designation' => 'Manager, Shribalaji Minerals',
            'review' => 'I would highly recommend Kiran Minerals for Quartz, they will finish the task within budget, on time and to a high standard of workmanship.'
        ]);
        Review::create([
            'client_name' => 'Ashwani Kumar',
            'client_photo' => 'testi-1-1.jpg',
            'designation' => 'Founder, MyHostLord',
            'review' => 'Very professional management at Kiran Minerals. Congratulations guys and look forward to working with you again soon.'
        ]);
        ServiceImage::create([
            'service_id'=>1,
            'image'=> 'quartz/snow/1.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>1,
            'image'=> 'quartz/snow/2.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>1,
            'image'=> 'quartz/snow/3.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>1,
            'image'=> 'quartz/snow/4.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>2,
            'image'=> 'silica/1.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>2,
            'image'=> 'silica/2.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>2,
            'image'=> 'silica/3.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>2,
            'image'=> 'silica/4.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>2,
            'image'=> 'silica/5.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>2,
            'image'=> 'silica/6.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>3,
            'image'=> '1/w1.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>3,
            'image'=> '1/w2.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>4,
            'image'=>'quartz/snow/sodium.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>4,
            'image'=>'quartz/snow/sodium2.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>5,
            'image'=> 'abrasive/1.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>5,
            'image'=> 'abrasive/2.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>5,
            'image'=> 'abrasive/3.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>5,
            'image'=> 'abrasive/4.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>5,
            'image'=> 'abrasive/5.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>6,
            'image'=> 'dolo/1.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>6,
            'image'=> 'dolo/2.jpg'
        ]);
        ServiceImage::create([
            'service_id'=>7,
            'image'=> 'talc/1.jpg'
        ]);
        ProductAccordion::create([
            'service_id'=>1,
            'title'=> 'Quartz Snow White Powder',
        ]);
        ProductAccordion::create([
            'service_id'=>1,
            'title'=> 'Quartz Silica Powder',
        ]);
        ProductAccordion::create([
            'service_id'=>1,
            'title'=> 'Quartz B+ Grade Powder',
        ]);
        ProductAccordion::create([
            'service_id'=>1,
            'title'=> 'Quartz B Grade Powder',
        ]);
        ProductAccordion::create([
            'service_id'=>1,
            'title'=> 'Applications/Uses',
        ]);
        ProductAccordionImage::create([
            'product_accordion_id'=>1,
            'image'=> 'quartz/snow/1.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id'=>1,
            'image'=> 'quartz/snow/3.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id'=>1,
            'image'=> 'quartz/snow/4.jpg'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 1,
            'tag'=> 'Mesh Size',
            'value'=> 'NILL'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 1,
            'tag'=> 'Sio2',
            'value'=> 'NILL'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 1,
            'tag'=> 'Lol',
            'value'=> 'NILL'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 1,
            'tag'=> 'Al2o3',
            'value'=> 'NILL'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 1,
            'tag'=> 'Fe2o3',
            'value'=> 'NILL'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 2,
            'image' => 'project-1-1.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 2,
            'image' => 'project-1-1.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 2,
            'image' => 'project-1-1.jpg'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 2,
            'tag' => 'Mesh Size',
            'value' => '200/300/325'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 2,
            'tag' => 'Sio2',
            'value' => '99% – 99.5%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 2,
            'tag' => 'Al2o3',
            'value' => '0.10%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 2,
            'tag' => 'Fe2o3',
            'value' => '0.05%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 2,
            'tag' => 'Lol',
            'value' => '0.01%'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 3,
            'image' => 'quartz/b/1.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 3,
            'image' => 'quartz/b/2.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 3,
            'image' => 'quartz/b/3.jpg'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 3,
            'tag' => 'Mesh Size',
            'value' => '200/300/325'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 3,
            'tag' => 'Sio2',
            'value' => '98%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 3,
            'tag' => 'Al2o3',
            'value' => '0.10% – 0.15%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 3,
            'tag' => 'Fe2o3',
            'value' => '0.05% – 0.09%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 3,
            'tag' => 'Lol',
            'value' => '0.01%'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 4,
            'image' => 'quartz/c/1.jpg'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 4,
            'tag' => 'Mesh Size',
            'value' => '200/300/325'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 4,
            'tag' => 'Sio2',
            'value' => '96% – 97%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 4,
            'tag' => 'Al2o3',
            'value' => '1%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 4,
            'tag' => 'Fe2o3',
            'value' => '0.10% – 0.15%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 4,
            'tag' => 'Lol',
            'value' => '0.15%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Fiber Glass Industries',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Glass(Bottling Plant)',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Float Glass',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Insulator (Porcelain)',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Sanitary ware, Ceramic Tiles',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Silicon Carbide, Abrasives',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Refractory, Paint',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Flits, Glaze',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 5,
            'tag' => 'Television Picture Tube',
            'value' => ''
        ]);
        ProductAccordion::create([
            'service_id' => 2,
            'title' => 'Applications/Uses',
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 6,
            'tag' => 'Glass',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 6,
            'tag' => 'Electronics',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 6,
            'tag' => 'Construction materials',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 6,
            'tag' => 'Personal care products',
            'value' => ''
        ]);
        ProductAccordion::create([
            'service_id' => 3,
            'title' => 'Super Grade',
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 7,
            'image' => '1/w3.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 7,
            'image' => '1/w4.jpg'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'Mesh Size',
            'value' => '200/300/325'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'Sio2',
            'value' => '64% – 66%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'Lol',
            'value' => '< 1%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'Al2o3',
            'value' => '16% – 18%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'Fe2o3',
            'value' => '0.02% – 0.06%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'K2o',
            'value' => '11%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'Na2o',
            'value' => '2.5% – 3%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 7,
            'tag' => 'CaO',
            'value' => '0.30% – 0.50%'
        ]);
        ProductAccordion::create([
            'service_id' => 3,
            'title' => 'A Grade',
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 8,
            'image' => '1/w5.jpg'
        ]);
        ProductAccordionImage::create([
            'product_accordion_id' => 8,
            'image' => '1/w6.jpg'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'Mesh Size',
            'value' => '200/300/325'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'Sio2',
            'value' => '66% – 68%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'Lol',
            'value' => '< 1%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'Al2o3',
            'value' => '16% – 18%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'Fe2o3',
            'value' => '0.05% – 0.09%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'K2o',
            'value' => '9% – 10%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'Na2o',
            'value' => '3% – 4%'
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 8,
            'tag' => 'CaO',
            'value' => '0.30% – 0.50%'
        ]);
        ProductAccordion::create([
            'service_id' => 3,
            'title' => 'Applications/Uses',
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 9,
            'tag' => 'TV Tubes',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 9,
            'tag' => 'Glass(Bottling Plant)',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 9,
            'tag' => 'Float Glass',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 9,
            'tag' => 'Insulators',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 9,
            'tag' => 'Television Picture Tube',
            'value' => ''
        ]);
        ProductAccordion::create([
            'service_id' => 4,
            'title' => 'Applications/Uses',
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 10,
            'tag' => 'Ceramics',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 10,
            'tag' => 'Plastics',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 10,
            'tag' => 'Glass',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 10,
            'tag' => 'Cement',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 10,
            'tag' => 'Paint',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 10,
            'tag' => 'Rubber',
            'value' => ''
        ]);
        ProductAccordion::create([
            'service_id' => 5,
            'title' => 'Applications/Uses',
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 11,
            'tag' => 'Surface preparation',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 11,
            'tag' => 'Roughing industrial gas',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 11,
            'tag' => 'Coating turbine engine',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 11,
            'tag' => 'Removing rust, scale',
            'value' => ''
        ]);
        ProductAccordion::create([
            'service_id' => 6,
            'title' => 'Applications/Uses',
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 12,
            'tag' => 'Source of Magnesia(MgO)',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 12,
            'tag' => 'Glass production',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 12,
            'tag' => 'Sintering agent',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 12,
            'tag' => 'Bricks',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 12,
            'tag' => 'Flux in metal processing',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 12,
            'tag' => 'Ceramics',
            'value' => ''
        ]);
        ProductAccordion::create([
            'service_id' => 7,
            'title' => 'Applications/Uses',
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Sculptures',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Sinks',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Lubricants',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Bowls',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Pipe bowls',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Toilet and dusting powders',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Countertops',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Leather dressings',
            'value' => ''
        ]);
        ProductAccordionTag::create([
            'product_accordion_id' => 13,
            'tag' => 'Marking pencils',
            'value' => ''
        ]);
    }
}
