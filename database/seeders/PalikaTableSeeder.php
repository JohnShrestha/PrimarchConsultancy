<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PalikaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //bhojpur
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Bhojpur Municipality",
            'palika_np' => 'भोजपुर नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Shadanand Municipality",
            'palika_np' => 'षडानन्द नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Tyamke Maiyum",
            'palika_np' => 'ट्याम्केमैयुम गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Arun Rural Municipality",
            'palika_np' => 'अरुण गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Pauwadungma Rural Municipality",
            'palika_np' => 'पौवादुङमा गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Salpasilichho Rural Municipality",
            'palika_np' => 'साल्पासिलिछो गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Hatuwagadhi Rural Municipality",
            'palika_np' => 'हतुवागढी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Ramprasad Rai Rural Municipality",
            'palika_np' => 'रामप्रसाद राई गाउँपालिका'
        ]);
         //Dhankuta
        DB::table('palikas')->insert([
            'district_id' => 2,
            'palika_en' => "Paakhribas Municipality",
            'palika_np' => 'पाख्रिबास नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 2,
            'palika_en' => "Dhankuta Municipality",
            'palika_np' => 'धनकुटा नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 2,
            'palika_en' => "Mahalaxmi Municipality",
            'palika_np' => 'महालक्ष्मी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 2,
            'palika_en' => "Sangurigadhi Rural Municipality",
            'palika_np' => 'सागुरीगढी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 2,
            'palika_en' => "Sahidbhumi Rural Municipality",
            'palika_np' => 'सहीदभूमि गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 2,
            'palika_en' => "Chhathar Jorpati Rural Municipality",
            'palika_np' => 'छथर जोरपाटी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 2,
            'palika_en' => "Chaubise Rural Municipality",
            'palika_np' => 'चौविसे गाउँपालिका'
        ]);
        //illam
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Iilam Municipality",
            'palika_np' => 'ईलाम नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Deumaai Municipality",
            'palika_np' => 'देउमाई नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Maai Municipality",
            'palika_np' => 'माई नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Suryodaya Municipality",
            'palika_np' => 'सूर्योदय नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Phakphokthum Rural Municipality",
            'palika_np' => 'फाकफोकथुम गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Mai Jogmai Rural Municipality",
            'palika_np' => 'माईजोगमाई गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Chulachuli Rural Municipality",
            'palika_np' => 'चुलाचुली गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Rong Rural Municipality",
            'palika_np' => 'रोङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Mangsebung Rural Municipality",
            'palika_np' => 'माङसेबुङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 3,
            'palika_en' => "Sandakpur Rural Municipality",
            'palika_np' => 'सन्दकपुर गाउँपालिका'
        ]);
        //
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Mechinagar Municipality",
            'palika_np' => 'मेचीनगर नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Damak Municipality",
            'palika_np' => 'दमक नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Kankai Municipality",
            'palika_np' => 'कन्काई नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Bhadrapur Municipality",
            'palika_np' => 'भद्रपुर नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Arjundhara Municipality",
            'palika_np' => 'अर्जुनधारा नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Shivasatakshi Municipality",
            'palika_np' => 'शिवसताक्षी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Gauraadaha Municipality",
            'palika_np' => 'गौरादह नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Birtamod Municipality",
            'palika_np' => 'विर्तामोड नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Kamal Rural Municipality",
            'palika_np' => 'कमल गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Buddha Shanti Rural Municipality",
            'palika_np' => 'बुद्धशान्ति गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Kachankawal Rural Municipality",
            'palika_np' => 'कचनकवल गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Jhapa Rural Municipality",
            'palika_np' => 'झापा गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Barhadashi Rural Municipality",
            'palika_np' => 'बाह्रदशी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Gaurigunj Rural Municipality",
            'palika_np' => 'गौरीगंज गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 4,
            'palika_en' => "Haldibari Rural Municipality",
            'palika_np' => 'हल्दीवारी गाउँपालिका'
        ]);
        // Morang
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Biratnagar Sub-Metropolitan",
            'palika_np' => 'विराटनगर उपमहानगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Belbari Municipality",
            'palika_np' => 'बेलबारी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Letang Municipality",
            'palika_np' => 'लेटांग नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Pathari Sanischari Municipality",
            'palika_np' => 'पथरी शनिश्चरे नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Rangeli Municipality",
            'palika_np' => 'रंगेली नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Ratuwamaai Municipality",
            'palika_np' => 'रतुवामाई नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Sunwarsi Municipality",
            'palika_np' => 'सुनवर्षी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Urlabari Municipality",
            'palika_np' => 'उर्लाबारी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Sundarharaicha Municipality",
            'palika_np' => 'सुन्दरहरैचा नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Jahada Rural Municipality",
            'palika_np' => 'जहदा गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Budi Ganga Rural Municipality",
            'palika_np' => 'बुढीगंगा गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Katahari Rural Municipality",
            'palika_np' => 'कटहरी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Dhanpalthan Rural Municipality",
            'palika_np' => 'धनपालथान गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Kanepokhari Rural Municipality",
            'palika_np' => 'कानेपोखरी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Gramthan Rural Municipality",
            'palika_np' => 'ग्रामथान गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Kerabari Rural Municipality",
            'palika_np' => 'केरावारी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Miklajung Rural Municipality",
            'palika_np' => 'मिक्लाजुङ गाउँपालिका'
        ]);
        //Khotang
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Halesituwanchung Municipality",
            'palika_np' => 'हलेसीतुवांचुंग नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Rupakot Majhuwagadhi Municipality",
            'palika_np' => 'रुपाकोट मझुवागढ़ी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Khotehang Rural Municipality",
            'palika_np' => 'खोटेहाङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Diprung Rural Municipality",
            'palika_np' => 'दिप्रुङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Aiselukharka Rural Municipality",
            'palika_np' => 'ऐसेलुखर्क गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Jantedhunga Rural Municipality",
            'palika_np' => 'जन्तेढुंगा गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Kepilasgadhi Rural Municipality",
            'palika_np' => 'केपिलासगढी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Barahpokhari Rural Municipality",
            'palika_np' => 'बराहपोखरी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Lamidanda Rural Municipality",
            'palika_np' => 'लामीडाँडा गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 6,
            'palika_en' => "Sakela Rural Municipality",
            'palika_np' => 'साकेला गाउँपालिका'
        ]);
        // Okhaldhunga
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Siddhicharan Municipality",
            'palika_np' => 'सिद्दिचरण नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Manebhanjyang Rural Municipality",
            'palika_np' => 'मानेभञ्ज्याङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Champadevi Rural Municipality",
            'palika_np' => 'चम्पादेवी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Sunkoshi Rural Municipality",
            'palika_np' => 'सुनकोशी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Molung Rural Municipality",
            'palika_np' => 'मोलुङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Chisankhugadhi Rural Municipality",
            'palika_np' => 'चिसंखुगढी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Khiji Demba Rural Municipality",
            'palika_np' => 'खिजिदेम्बा गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 7,
            'palika_en' => "Likhu Rural Municipality",
            'palika_np' => 'लिखु गाउँपालिका'
        ]);
        // Panchthar
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Fidim Municipality",
            'palika_np' => 'फिदिम नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Miklajung Rural Municipality",
            'palika_np' => 'मिक्लाजुङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Phalgunanda Rural Municipality",
            'palika_np' => 'फाल्गुनन्द गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Hilihang Rural Municipality",
            'palika_np' => 'हिलिहाङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Phalelung Rural Municipality",
            'palika_np' => 'फालेलुङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Yangwarak Rural Municipality",
            'palika_np' => 'याङवरक गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Kummayak Rural Municipality",
            'palika_np' => 'कुम्मायक गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 8,
            'palika_en' => "Tumbewa Rural Municipality",
            'palika_np' => 'तुम्बेवा गाउँपालिका'
        ]);
        //Sankhuwasabha
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Chainpur Municipality",
            'palika_np' => 'चैनपुर नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Khandwari Municipality",
            'palika_np' => 'धर्मदेवी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Dharmadevi Municipality",
            'palika_np' => 'खांदवारी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Maadi Municipality",
            'palika_np' => 'मादी नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Panchkhapan Municipality",
            'palika_np' => 'पाँचखपन नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Makalu Rural Municipality",
            'palika_np' => 'मकालु गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Silichong Rural Municipality",
            'palika_np' => 'सिलीचोङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Sabhapokhari Rural Municipality",
            'palika_np' => 'सभापोखरी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Chichila Rural Municipality",
            'palika_np' => 'चिचिला गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 9,
            'palika_en' => "Bhot Khola Rural Municipality",
            'palika_np' => 'भोटखोला गाउँपालिका'
        ]);
        //Solukhumbu
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Solukhumbu",
            'palika_np' => 'सोलुदुधकुण्ड नगरपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Dudhakaushika Rural Municipality",
            'palika_np' => 'दुधकौशिका गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Necha Salyan Rural Municipality",
            'palika_np' => 'नेचासल्यान गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Dudhkoshi Rural Municipality",
            'palika_np' => 'दुधकोशी गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Maha Kulung Rural Municipality",
            'palika_np' => 'महाकुलुङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Sotang Rural Municipality",
            'palika_np' => 'सोताङ गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Khumbu Pasang Lhamu Rural Municipality",
            'palika_np' => 'खुम्बु पासाङल्हमु गाउँपालिका'
        ]);
        DB::table('palikas')->insert([
            'district_id' => 10,
            'palika_en' => "Likhu Pike Rural Municipality",
            'palika_np' => 'लिखुपिके गाउँपालिका'
        ]);
        // Sunsari
        DB::table('palikas')->insert([
            'district_id' => 11,
            'palika_en' => "Sunsari",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 12,
            'palika_en' => "Taplejung",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 1,
            'palika_en' => "Tehrathum",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 13,
            'palika_en' => "Udayapur",
            'palika_np' => ''
        ]);

        //province 2
        DB::table('palikas')->insert([
            'district_id' => 14,
            'palika_en' => "Bara",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 15,
            'palika_en' => "Dhanusa",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 16,
            'palika_en' => "Mahottari",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 17,
            'palika_en' => "Parsa",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 18,
            'palika_en' => "Rautahat",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 19,
            'palika_en' => "Saptari",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 20,
            'palika_en' => "Sarlahi",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 21,
            'palika_en' => "Siraha",
            'palika_np' => ''
        ]);

        //province 3
        DB::table('palikas')->insert([
            'district_id' => 22,
            'palika_en' => "Bhaktapur",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 23,
            'palika_en' => "Chitwan",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 24,
            'palika_en' => "Dhading",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 25,
            'palika_en' => "Dolakha",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 26,
            'palika_en' => "Kavrepalanchok",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 27,
            'palika_en' => "Kathmandu",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 28,
            'palika_en' => "Lalitpur",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 29,
            'palika_en' => "Makwanpur",
            'palika_np' => ''

        ]);
        DB::table('palikas')->insert([
            'district_id' => 30,
            'palika_en' => "Nuwakot",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 31,
            'palika_en' => "Ramechhap",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 32,
            'palika_en' => "Rasuwa",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 33,
            'palika_en' => "Sindhuli",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 34,
            'palika_en' => "Sindhupalchowk",
            'palika_np' => ''
        ]);

        //province 4
        DB::table('palikas')->insert([
            'district_id' => 35,
            'palika_en' => "Baglung",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 36,
            'palika_en' => "Gorkha",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 37,
            'palika_en' => "Kaski",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 38,
            'palika_en' => "Lamjung",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 39,
            'palika_en' => "Manang",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 40,
            'palika_en' => "Mustang",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 41,
            'palika_en' => "Myagdi",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 42,
            'palika_en' => "Nawalparasi",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 43,
            'palika_en' => "Parbat",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 44,
            'palika_en' => "Syangja",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 45,
            'palika_en' => "Tanahun",
            'palika_np' => ''
        ]);

        //province 5
        DB::table('palikas')->insert([
            'district_id' => 46,
            'palika_en' => "Arghakhanchi",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 47,
            'palika_en' => "Banke",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 48,
            'palika_en' => "Bardiya",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 49,
            'palika_en' => "Dang",
        ]);
        DB::table('palikas')->insert([
            'district_id' => 50,
            'palika_en' => "Gulmi",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 51,
            'palika_en' => "Kapilvastu",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 52,
            'palika_en' => "Nawalparasi (West)",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 53,
            'palika_en' => "Palpa",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 54,
            'palika_en' => "Pyuthan",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 5,
            'palika_en' => "Rolpa",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 56,
            'palika_en' => "Rukum (East)",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 57,
            'palika_en' => "Rupandehi",
            'palika_np' => ''
        ]);

        //province 6
        DB::table('palikas')->insert([
            'district_id' => 58,
            'palika_en' => "Dailekh",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 59,
            'palika_en' => "Dolpa",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 60,
            'palika_en' => "Humla",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 61,
            'palika_en' => "Jajarkot",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 62,
            'palika_en' => "Jumla",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 63,
            'palika_en' => "Kalikot",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 64,
            'palika_en' => "Mugu",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 65,
            'palika_en' => "Rukum (West)",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 67,
            'palika_en' => "Salyan",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 68,
            'palika_en' => "Surkhet",
            'palika_np' => ''
        ]);

        //province 7
        DB::table('palikas')->insert([
            'district_id' => 69,
            'palika_en' => "Acham",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 70,
            'palika_en' => "Baitadi",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 71,
            'palika_en' => "Bajhan",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 72,
            'palika_en' => "Bajura",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 73,
            'palika_en' => "Dadeldhura",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 74,
            'palika_en' => "Darcula",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 75,
            'palika_en' => "Doti",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 76,
            'palika_en' => "Kailali",
            'palika_np' => ''
        ]);
        DB::table('palikas')->insert([
            'district_id' => 77,
            'palika_en' => "Kanchanpur",
            'palika_np' => ''
        ]);
    }
}
