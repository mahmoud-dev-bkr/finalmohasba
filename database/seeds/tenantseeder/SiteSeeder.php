<?php

namespace Database\Seeders\tenantseeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->dataSeeder();
    }

    public function dataSeeder()
    {
        DB::table('sites')->insert([
            [
                'id' => 10,
                'name_ar' => 'الرائيسي',
                'name_en' => 'main',
                'Inventory_id' => '37',
                'created_at' => '2023-08-25 20:55:55',
                'updated_at' => '2023-08-25 20:55:55',
                'type' => 1,
                'company_id' => NULL,
                'email' => NULL,
                'email2' => NULL,
                'main_activity' => NULL,
                'Activity_description' => NULL,
                'Registered_capital' => NULL,
                'Added_capital' => NULL,
                'Commercial_Record' => NULL,
                'Commercial_Record_data' => '2024-05-24',
                'Municipality_number' => NULL,
                'Municipality_number_data' => '2024-04-27',
                'Tex_Number' => NULL,
                'Tex_Number_data' => '2024-05-24',
                'Human_Resources_License' => NULL,
                'Human_Resources_License_data' => '2024-05-24',
                'FDA_license' => NULL,
                'FDA_license_data' => '2024-05-24',
                'Social_Insurance' => NULL,
                'Social_Insurance_data' => '2024-05-24',
                'Chamber_Commerce' => NULL,
                'Chamber_Commerce_data' => '2024-05-24',
                'Another' => NULL,
                'Another_data' => '2024-05-24',
                'street_1' => NULL,
                'city_1' => NULL,
                'st_1' => NULL,
                'zip_1' => NULL,
                'cantry_1' => NULL,
                'phon' => NULL,
                'phon2' => NULL,
                'code_phon' => NULL,
                'code_phon2' => NULL,
                'Inventory' => NULL,
                'Accounts_tree' => NULL,
                'Payment_accounts' => NULL,
                'Accounts_tree2' => NULL,
                'code' => NULL,
                'Facility' => NULL,
                'name1' => NULL,
                'name_account1' => NULL,
                'country1' => NULL,
                'currency1' => NULL,
                'number_statement1' => NULL,
                'number_account1' => NULL,
                'code1' => NULL,
                'address1' => NULL,
                'name2' => NULL,
                'name_account2' => NULL,
                'country2' => NULL,
                'currency2' => NULL,
                'number_statement2' => NULL,
                'number_account2' => NULL,
                'code2' => NULL,
                'address2' => NULL,
                'file_Commercial_Record' => NULL,
                'file_Municipality_number' => NULL,
                'file_tax_number' => NULL,
                'file_national_address' => NULL,
                'file_bank_account' => NULL,
                'file_credit_limit' => NULL,
                'name' => NULL
            ]
        ]);
    }


}
