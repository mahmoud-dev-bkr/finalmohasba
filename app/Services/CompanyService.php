<?php

namespace App\Services;

use App\Company;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;

class CompanyService
{
    public function CompanyRegister(array $data)
    {
        $company = $this->createCompanyUsernameAndPasswordDatabase($data);

        // Create a new user in your application's user table
        // $user = User::create([
        //     'name'       => $data['user']['first_name'] . ' ' . $data['user']['last_name'],
        //     'email'      => $data['user']['email'],
        //     'password'   => Hash::make($data['user']['password']),
        //     'company_id' => $company->id,
        //     'role_id'    => 1,
        //     'pos'        => 1,
        // ]);

        // Switch to the new tenant's database
        $this->switchToTenantDatabase($company);

        // Run the migrations for the tenant database
        Artisan::call('migrate', [
            '--path' => 'database/migrations/tenant/'
        ]);

        $this->AccountSeeder();


        return $company;
        // dd("Database, user created and migrations run successfully.");
    }

    public function createCompanyUsernameAndPasswordDatabase(array $data)
    {
        $username = 'user_' . $data['company']['organization_name'];
        $database = 'database_' . $data['company']['organization_name'];
        $password = 'password_' . $data['company']['organization_name'];
        $data['company']['database'] = $database;
        $data['company']['user'] = $username;
        $data['company']['password'] = $password;
        $data['company']['domain'] = $data['company']['organization_name'];

        // Create the company record in the database
        $company = Company::create($data['company']);
        $user = User::create([
            'name'       => "superadmin",
            'email'      => "superadmin@" . $data['company']['organization_name'] . ".com",
            'password'   => Hash::make("123456"),
            'company_id' => $company->id,
            'role_id'    => 1,
            'pos'        => 1,
        ]);
        // Create the new database
        DB::statement("CREATE DATABASE IF NOT EXISTS `$database`");

        // Create a new database user with the specified username and password
        DB::statement("CREATE USER IF NOT EXISTS '$username'@'localhost' IDENTIFIED BY '$password'");

        // Grant all privileges on the new database to the new user
        DB::statement("GRANT ALL PRIVILEGES ON `$database`.* TO '$username'@'localhost'");

        // Apply the changes
        DB::statement("FLUSH PRIVILEGES");

        // dd("Database '$database' and user '$username' created successfully.");

        // Return the company instance for further use
        return $company;
    }

    protected function switchToTenantDatabase(Company $company)
    {

        Config::set('database.connections.tenant.database', 'database_' . $company->organization_name);
        Config::set('database.connections.tenant.username', 'user_'     . $company->organization_name);
        Config::set('database.connections.tenant.password', 'password_' . $company->organization_name);

        // Set the tenant as the default database connection
        Config::set('database.default', 'tenant');


        // Reconnect to apply the new settings
        DB::purge('mysql');
        DB::reconnect('tenant');
        // dd(DB::connection());
        // $dbUsername = config('database.connections.tenant.username');
        // dd($dbUsername);
    }

    public function AccountSeeder()
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


        DB::table('accounts')->insert(

            [
                [
                    'id' => 4,
                    'name' => '1 - الأصول',
                    'Note' => 'أصل مادي ملموس اكتسبت المنشأة الحق فيه نتيجة لأحداث حدثت في الماضي له القدرة بتزويد المنشأة بمنافع في المستقبل',
                    'amount' => 50000,
                    'code' => '1',
                    'created_at' => '2023-03-27 21:07:10',
                    'updated_at' => '2023-07-07 02:18:59',
                    'type' => 1,
                    'parent_id' => 0,
                    'count_child' => 4,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 1,
                    'vis_account' => 1,
                ],
                [
                    'id' => 5,
                    'name' => '2 - الالتزامات',
                    'Note' => 'ديون أو إلتزامات المالية على المنشأة والتي تنشأ خلال عملياتها التشغيلية ويتم سدادها عن طريق منافع المنشأة الاقتصادية من أموال أو سلع أو خدمات',
                    'amount' => 50000,
                    'code' => '2',
                    'created_at' => null,
                    'updated_at' => '2023-07-29 14:39:42',
                    'type' => 2,
                    'parent_id' => 0,
                    'count_child' => 3,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 1,
                    'vis_account' => 1,
                ],
                [
                    'id' => 6,
                    'name' => '3 - حقوق الملكية',
                    'Note' => 'هي الأموال التي يتم إرجاعها للمساهمين عند تصفية جميع أصول المنشأة وسداد جميع التزاماتها',
                    'amount' => 50000,
                    'code' => '3',
                    'created_at' => null,
                    'updated_at' => '2023-07-29 14:51:30',
                    'type' => 3,
                    'parent_id' => 0,
                    'count_child' => 4,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 1,
                    'vis_account' => 1,
                ],
                [
                    'id' => 7,
                    'name' => '4 - الإيرادات',
                    'Note' => 'هي مقدار زيادة الأصول أو نقص الالتزامات أو كليهما معاً خلال مدة زمنية معينة نتيجة إنتاج السلع أو بيعها',
                    'amount' => 50000,
                    'code' => '4',
                    'created_at' => null,
                    'updated_at' => '2023-07-29 14:56:07',
                    'type' => 4,
                    'parent_id' => 0,
                    'count_child' => 2,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 1,
                    'vis_account' => 1,
                ],
                [
                    'id' => 8,
                    'name' => '5 - المصاريف',
                    'Note' => 'هو انقضاء أصل أو تحمل التزام أو كلاھما معا خلال مدة زمنیة معینة نتبجة إنتاج السلع أو بیعھا',
                    'amount' => 50000,
                    'code' => '5',
                    'created_at' => null,
                    'updated_at' => '2023-07-29 15:54:56',
                    'type' => 5,
                    'parent_id' => 0,
                    'count_child' => 3,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 1,
                    'vis_account' => 1,
                ],
                [
                    'id' => 25,
                    'name' => '11 - أصول متداولة',
                    'Note' => 'هي الأصول التي يسهل تحويلها إلى نقل ويمكنها الوفاء بالالتزامات المتداولة خلال السنة المالية',
                    'amount' => 50000,
                    'code' => '11',
                    'created_at' => '2023-07-07 02:13:28',
                    'updated_at' => '2023-07-07 03:15:01',
                    'type' => 1,
                    'parent_id' => 4,
                    'count_child' => 5,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 2,
                    'vis_account' => 1,
                ],
                [
                    'id' => 26,
                    'name' => '12 - أصول غير متداولة',
                    'Note' => 'هي الأصول التي لا يمكن تحويلها بسهولة إلى نقد وتشمل الأصول الملموسة وغير الملموسة وذات طبيعة طويلة الأجل',
                    'amount' => 50000,
                    'code' => '12',
                    'created_at' => '2023-07-07 02:18:59',
                    'updated_at' => '2023-07-07 03:18:23',
                    'type' => 1,
                    'parent_id' => 4,
                    'count_child' => 4,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 2,
                    'vis_account' => 1,
                ],
                [
                    'id' => 27,
                    'name' => '1101 - النقد ومايعادله',
                    'Note' => 'النقدية وما في حكمها (في الخزينة والعهد)',
                    'amount' => 50000,
                    'code' => '1101',
                    'created_at' => '2023-07-07 02:20:26',
                    'updated_at' => '2023-07-07 02:31:59',
                    'type' => 1,
                    'parent_id' => 25,
                    'count_child' => 2,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 3,
                    'vis_account' => 1,
                ],
                [
                    'id' => 28,
                    'name' => '1102 - النقدية في البنك',
                    'Note' => 'النقدية في البنوك',
                    'amount' => 50000,
                    'code' => '1102',
                    'created_at' => '2023-07-07 02:21:31',
                    'updated_at' => '2023-07-07 03:08:36',
                    'type' => 1,
                    'parent_id' => 25,
                    'count_child' => 1,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 3,
                    'vis_account' => 1,
                ],
                [
                    'id' => 29,
                    'name' => '1103 - المدينون',
                    'Note' => 'مبالغ مستحقة على حساب العملاء (بالأجل)',
                    'amount' => 20,
                    'code' => '1103',
                    'created_at' => '2023-07-07 02:25:00',
                    'updated_at' => '2023-10-02 01:26:19',
                    'type' => 1,
                    'parent_id' => 25,
                    'count_child' => 1,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 3,
                    'vis_account' => 1,
                ],
                [
                    'id' => 30,
                    'name' => '1104 - مصروفات مقدمة',
                    'Note' => 'مصروف مدفوع مقدماً مثل التأمين وسلف الموظفين وإيجار المكتب',
                    'amount' => 50000,
                    'code' => '1104',
                    'created_at' => '2023-07-07 02:26:42',
                    'updated_at' => '2023-07-07 03:13:23',
                    'type' => 1,
                    'parent_id' => 25,
                    'count_child' => 2,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 3,
                    'vis_account' => 1,
                ],
                [
                    'id' => 31,
                    'name' => '1105 - مدفوعات مقدمة للموظفين',
                    'Note' => 'سلف الموظفين يلتزم الموظف بسدادها حسب المتفق عليه',
                    'amount' => 50000,
                    'code' => '1105',
                    'created_at' => '2023-07-07 02:27:40',
                    'updated_at' => '2023-07-07 02:27:40',
                    'type' => 1,
                    'parent_id' => 25,
                    'count_child' => 0,
                    'non_editable' => 0,
                    'transactions' => 0,
                    'level' => 3,
                    'vis_account' => 1,
                ],
                [
                    'id' => 32,
                    'name' => '110101 - النقدية في الخزينة',
                    'Note' => 'النقدية في الخزينة',
                    'amount' => 14030,
                    'code' => '110101',
                    'created_at' => '2023-07-07 02:29:30',
                    'updated_at' => '2023-08-24 22:30:55',
                    'type' => 1,
                    'parent_id' => 27,
                    'count_child' => 0,
                    'non_editable' => 0,
                    'transactions' => 1,
                    'level' => 4,
                    'vis_account' => 1,
                ],
                ['id' => 33, 'name' => '110102 - العهد النقدية', 'Note' => 'العهد النقدية للموظفين بشكل مؤقت أو دائم لدفع مصروفات المنشأة', 'amount' => 50000, 'code' => '110102', 'created_at' => '2023-07-07 02:31:59', 'updated_at' => '2023-07-07 02:31:59', 'type' => 1, 'parent_id' => 27, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 1, 'level' => 4, 'vis_account' => 1],
                ['id' => 34, 'name' => '110201 - حساب البنك الجاري - اسم البنك', 'Note' => 'حساب البنك الجاري - اسم البنك', 'amount' => 50000, 'code' => '110201', 'created_at' => '2023-07-07 03:08:36', 'updated_at' => '2023-07-07 03:08:36', 'type' => 1, 'parent_id' => 28, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 1, 'level' => 4, 'vis_account' => 1],
                ['id' => 35, 'name' => '110401 - تأمين طبي مقدم', 'Note' => 'تأمين طبي مدفوع مقدماً يتم إطفاء مايخص السنة المالية إلى مصروف', 'amount' => 50000, 'code' => '110401', 'created_at' => '2023-07-07 03:11:36', 'updated_at' => '2023-07-07 03:11:36', 'type' => 1, 'parent_id' => 30, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 36, 'name' => '110402 - إيجار مقدم', 'Note' => 'إيجار مدفوع مقدماً يتم إطفاء مايخص السنة المالية إلى مصروف', 'amount' => 50000, 'code' => '110402', 'created_at' => '2023-07-07 03:13:23', 'updated_at' => '2023-07-07 03:13:23', 'type' => 1, 'parent_id' => 30, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 37, 'name' => '1106 - المخزون', 'Note' => 'المخزون ويشمل المواد أولية وتامة الصنع', 'amount' => 19326, 'code' => '1106', 'created_at' => '2023-07-07 03:15:01', 'updated_at' => '2023-08-25 00:44:27', 'type' => 1, 'parent_id' => 25, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 38, 'name' => '1201 - عقارات وآلات ومعدات', 'Note' => 'الممتلكات والآلات والمعدات', 'amount' => 50000, 'code' => '1201', 'created_at' => '2023-07-07 03:16:40', 'updated_at' => '2023-07-07 03:25:31', 'type' => 1, 'parent_id' => 26, 'count_child' => 3, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 39, 'name' => '1202 - الأصول غير الملموسة', 'Note' => 'الأصول غير الملموسة مثل حق الشهرة وبراءة الاختراع وحقوق النسخ والعلامات التجارية', 'amount' => 50000, 'code' => '1202', 'created_at' => '2023-07-07 03:17:45', 'updated_at' => '2023-07-07 03:17:45', 'type' => 1, 'parent_id' => 26, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 40, 'name' => '1203 - العقارات الاستثمارية', 'Note' => 'أصول مشتراة لغرض الاستثمار وليس للاستخدام الذي يساهم في الأنشطة التشغيلية', 'amount' => 50000, 'code' => '1203', 'created_at' => '2023-07-07 03:18:23', 'updated_at' => '2023-07-07 03:18:23', 'type' => 1, 'parent_id' => 26, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 41, 'name' => '120101 - الأراضي', 'Note' => 'الأراضي الممتلكة من قبل المنشأة', 'amount' => 50000, 'code' => '120101', 'created_at' => '2023-07-07 03:19:33', 'updated_at' => '2023-07-07 03:19:33', 'type' => 1, 'parent_id' => 38, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 42, 'name' => '120102 - المباني', 'Note' => 'المباني التي تستخدم في عمليات الشركة مثل المخازن والمكاتب والمصانع والمستودعات', 'amount' => 50000, 'code' => '120102', 'created_at' => '2023-07-07 03:20:41', 'updated_at' => '2023-07-07 03:20:41', 'type' => 1, 'parent_id' => 38, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 43, 'name' => '120103 - المعدات', 'Note' => 'المعدات المستخدمة في عمليات التشغيل', 'amount' => 50000, 'code' => '120103', 'created_at' => '2023-07-07 03:25:31', 'updated_at' => '2023-07-07 03:25:31', 'type' => 1, 'parent_id' => 38, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 45, 'name' => '2101 - الدائنون', 'Note' => 'مبالغ مستحقة لحسابات الموردين (بالأجل)', 'amount' => 153045, 'code' => '2101', 'created_at' => '2023-07-24 23:04:55', 'updated_at' => '2023-08-27 18:22:04', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 46, 'name' => '2102 - مصروفات مستحقة', 'Note' => 'مصروفات مستحقة على المنشأة لم يتم سدادها أو تسجيلها بعد', 'amount' => 50000, 'code' => '2102', 'created_at' => '2023-07-24 23:06:18', 'updated_at' => '2023-07-24 23:06:18', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 48, 'name' => '21 - الالتزامات المتداولة', 'Note' => 'التزامات متوقع سدادها خلال عام أو فترة مالية أيهما أطول', 'amount' => 50000, 'code' => '21', 'created_at' => '2023-07-29 14:17:23', 'updated_at' => '2023-07-29 14:32:45', 'type' => 2, 'parent_id' => 5, 'count_child' => 7, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 49, 'name' => '2103 - الرواتب المستحقة', 'Note' => 'رواتب مستحقة على المنشأة لم يتم سدادها بعد', 'amount' => 50000, 'code' => '2103', 'created_at' => '2023-07-29 14:21:53', 'updated_at' => '2023-07-29 14:21:53', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 50, 'name' => '2104 - قروض قصيرة الأجل', 'Note' => 'قروض متوقع سداده خلال عام أو فترة مالية أيهما أطول', 'amount' => 50000, 'code' => '2104', 'created_at' => '2023-07-29 14:22:49', 'updated_at' => '2023-07-29 14:22:49', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 51, 'name' => '2105 - ضريبة القيمة المضافة المستحقة', 'Note' => 'ضريبة القيمة المضافة مستحقة الدفع لهيئة الزكاة والدخل', 'amount' => 54594, 'code' => '2105', 'created_at' => '2023-07-29 14:29:12', 'updated_at' => '2023-08-26 22:21:30', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 52, 'name' => '2106 - الضرائب المستحقة', 'Note' => 'ضريبة الدخل المستحقة عن الشركات الأجنبية', 'amount' => 50000, 'code' => '2106', 'created_at' => '2023-07-29 14:30:23', 'updated_at' => '2023-07-29 14:30:23', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 53, 'name' => '2107 - إيرادات غير مكتسبة', 'Note' => 'مبالغ حصلت عليها المنشأة قبل تسليم البضاعة أو تقديم الخدمة', 'amount' => 50000, 'code' => '2107', 'created_at' => '2023-07-29 14:31:06', 'updated_at' => '2023-07-29 14:31:06', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 54, 'name' => '2108 - مستحقات المؤسسة العامة للتأمينات الاجتماعية', 'Note' => 'مبالغ مستحقة للمؤسسة العامة للتأمينات الاجتماعية', 'amount' => 50000, 'code' => '2108', 'created_at' => '2023-07-29 14:31:49', 'updated_at' => '2023-07-29 14:31:49', 'type' => 2, 'parent_id' => 48, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 55, 'name' => '2109 - مجمع الاستهلاك', 'Note' => 'مجمع استهلاك الأصول', 'amount' => 50000, 'code' => '2109', 'created_at' => '2023-07-29 14:32:45', 'updated_at' => '2023-07-29 14:34:49', 'type' => 2, 'parent_id' => 48, 'count_child' => 3, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 56, 'name' => '210901 - مجمع استهلاك المباني', 'Note' => 'مجمع استهلاك المباني', 'amount' => 50000, 'code' => '210901', 'created_at' => '2023-07-29 14:33:38', 'updated_at' => '2023-07-29 14:33:38', 'type' => 2, 'parent_id' => 55, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 57, 'name' => '210902 - مجمع استهلاك المعدات', 'Note' => 'مجمع استهلاك المعدات', 'amount' => 50000, 'code' => '210902', 'created_at' => '2023-07-29 14:34:06', 'updated_at' => '2023-07-29 14:34:06', 'type' => 2, 'parent_id' => 55, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 58, 'name' => '210903 - مجمع استهلاك أجهزة مكتبية وطابعات', 'Note' => 'مجمع استهلاك أجهزة مكتبية وطابعات', 'amount' => 50000, 'code' => '210903', 'created_at' => '2023-07-29 14:34:49', 'updated_at' => '2023-07-29 14:34:49', 'type' => 2, 'parent_id' => 55, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 59, 'name' => '22 - التزامات غير متداولة', 'Note' => 'التزامات مستحق سدادها خلال أكثر من عام أو فترة مالية', 'amount' => 50000, 'code' => '22', 'created_at' => '2023-07-29 14:39:42', 'updated_at' => '2023-07-29 14:43:17', 'type' => 2, 'parent_id' => 5, 'count_child' => 2, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 60, 'name' => '2201 - قروض طويلة أجل', 'Note' => 'قروض طويلة الأجل مستحق سدادها خلال أكثر من عام أو فترة مالية أيهما أطول', 'amount' => 50000, 'code' => '2201', 'created_at' => '2023-07-29 14:41:59', 'updated_at' => '2023-07-29 14:41:59', 'type' => 2, 'parent_id' => 59, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 61, 'name' => '2202 - مخصص مكافأة نهاية الخدمة', 'Note' => 'قروض طويلة الأجل مستحق سدادها خلال أكثر من عام أو فترة مالية أيهما أطول', 'amount' => 50000, 'code' => '2202', 'created_at' => '2023-07-29 14:43:17', 'updated_at' => '2023-07-29 14:43:17', 'type' => 2, 'parent_id' => 59, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 62, 'name' => '31 - رأس المال', 'Note' => 'رأس المال', 'amount' => 50000, 'code' => '31', 'created_at' => '2023-07-29 14:44:25', 'updated_at' => '2023-07-29 14:47:06', 'type' => 3, 'parent_id' => 6, 'count_child' => 2, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 63, 'name' => '3101 - رأس المال المسجل', 'Note' => 'رأس المال المسجل في السجل التجاري', 'amount' => 50000, 'code' => '3101', 'created_at' => '2023-07-29 14:45:46', 'updated_at' => '2023-07-29 14:45:46', 'type' => 3, 'parent_id' => 62, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 64, 'name' => '3102 - رأس المال الإضافي المدفوع', 'Note' => 'رأس المال إضافي مدفوع من قبل المستثمرين لزيادة حقوق الملكية', 'amount' => 50000, 'code' => '3102', 'created_at' => '2023-07-29 14:47:06', 'updated_at' => '2023-07-29 14:47:06', 'type' => 1, 'parent_id' => 62, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 65, 'name' => '32 - حقوق ملكية أخرى', 'Note' => 'حقوق ملكية أخرى', 'amount' => 50000, 'code' => '32', 'created_at' => '2023-07-29 14:48:07', 'updated_at' => '2023-07-29 14:48:49', 'type' => 3, 'parent_id' => 6, 'count_child' => 1, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 66, 'name' => '3201 - أرصدة افتتاحية', 'Note' => 'الأرصدة الافتتاحية', 'amount' => 50000, 'code' => '3201', 'created_at' => '2023-07-29 14:48:49', 'updated_at' => '2023-07-29 14:48:49', 'type' => 3, 'parent_id' => 65, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 67, 'name' => '33 - احتياطيات', 'Note' => 'مبلغ يحجز من الأرباح لمقابلة خسارة مستقبلية محتملة', 'amount' => 50000, 'code' => '33', 'created_at' => '2023-07-29 14:49:32', 'updated_at' => '2023-07-29 14:50:48', 'type' => 3, 'parent_id' => 6, 'count_child' => 2, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 68, 'name' => '3301 - احتياطي نظامي', 'Note' => 'تجنيب 10% من صافي الربح حتى يصل إلى 30% من رأس المال حسب نظام الشركات', 'amount' => 50000, 'code' => '3301', 'created_at' => '2023-07-29 14:50:06', 'updated_at' => '2023-07-29 14:50:06', 'type' => 3, 'parent_id' => 67, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 69, 'name' => '3302 - احتياطي ترجمة عملات أجنبية', 'Note' => 'احتياطي لتغطية الفرق بين سعر الصرف عند تسجيل الأصول أو الالتزامات عن سعر الصرف وقت السداد', 'amount' => 50000, 'code' => '3302', 'created_at' => '2023-07-29 14:50:48', 'updated_at' => '2023-07-29 14:50:48', 'type' => 3, 'parent_id' => 67, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 70, 'name' => '34 - الأرباح المبقاة (أو الخسائر)', 'Note' => 'الأرباح المبقاة (أو الخسائر)', 'amount' => 50000, 'code' => '34', 'created_at' => '2023-07-29 14:51:30', 'updated_at' => '2023-07-29 14:54:02', 'type' => 3, 'parent_id' => 6, 'count_child' => 2, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 71, 'name' => '3401 - الأرباح والخسائر العاملة', 'Note' => 'صافي الربح أو الخسارة للفترة المالية الحالية', 'amount' => 50000, 'code' => '3401', 'created_at' => '2023-07-29 14:52:56', 'updated_at' => '2023-07-29 14:52:56', 'type' => 3, 'parent_id' => 70, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 72, 'name' => '3402 - الأرباح المبقاة (أو الخسائر)', 'Note' => 'أرباح مبقاة لغرض إعادة استثمارها في أعمال المنشأة', 'amount' => 50000, 'code' => '3402', 'created_at' => '2023-07-29 14:54:02', 'updated_at' => '2023-07-29 14:54:02', 'type' => 3, 'parent_id' => 70, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 73, 'name' => '41 - الإيرادات التشغيلية', 'Note' => 'هي الإيرادات المُتحَصَل عليها من النشاط الرئيسي للشركة', 'amount' => 50000, 'code' => '41', 'created_at' => '2023-07-29 14:54:53', 'updated_at' => '2023-07-29 14:55:22', 'type' => 4, 'parent_id' => 7, 'count_child' => 1, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 74, 'name' => '4101 - إيرادات المبيعات/ الخدمات', 'Note' => 'الدخل الناتج من بيع سلعة أو تقديم خدمة', 'amount' => 93485, 'code' => '4101', 'created_at' => '2023-07-29 14:55:22', 'updated_at' => '2023-08-26 22:21:30', 'type' => 4, 'parent_id' => 73, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 75, 'name' => '42 - الإيرادات غير التشغيلية', 'Note' => 'هي الإيرادات التي حصلتها المنظمة من غير عملياتها الرئيسية التي أنشأت من أجلها المنشأة', 'amount' => 50000, 'code' => '42', 'created_at' => '2023-07-29 14:56:07', 'updated_at' => '2023-07-29 14:57:10', 'type' => 4, 'parent_id' => 7, 'count_child' => 1, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 76, 'name' => '4201 - إيرادات أخرى', 'Note' => 'إيراد نتج من أنشطة أخرى للمنشأة غير النشاط الأساسي', 'amount' => 50000, 'code' => '4201', 'created_at' => '2023-07-29 14:57:10', 'updated_at' => '2023-07-29 14:57:10', 'type' => 4, 'parent_id' => 75, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 77, 'name' => '51 - التكاليف المباشرة', 'Note' => 'هي التكاليف التي يمكن ربطها مباشرة بالمنتج أو الخدمة مثل العمالة والمواد ...', 'amount' => 50000, 'code' => '51', 'created_at' => '2023-07-29 14:59:23', 'updated_at' => '2023-07-29 15:11:41', 'type' => 5, 'parent_id' => 8, 'count_child' => 4, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 78, 'name' => '5101 - تكلفة البضاعة المباعة', 'Note' => 'تكلفة البضاعة المباعة', 'amount' => 50000, 'code' => '5101', 'created_at' => '2023-07-29 15:00:05', 'updated_at' => '2023-07-29 15:00:05', 'type' => 5, 'parent_id' => 77, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 79, 'name' => '5102 - رواتب وأجور', 'Note' => 'رواتب وأجور الموظفين العاملين في النشاط الأساسي للمنشأة', 'amount' => 50000, 'code' => '5102', 'created_at' => '2023-07-29 15:00:43', 'updated_at' => '2023-07-29 15:00:43', 'type' => 5, 'parent_id' => 77, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 80, 'name' => '5103 - عمولات البيع', 'Note' => 'عمولات البيع', 'amount' => 50000, 'code' => '5103', 'created_at' => '2023-07-29 15:04:58', 'updated_at' => '2023-07-29 15:04:58', 'type' => 5, 'parent_id' => 77, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 81, 'name' => '5104 - شحن وتخليص جمركي', 'Note' => 'شحن وتخليص جمركي للبضاعة المستوردة من الخارج', 'amount' => 50000, 'code' => '5104', 'created_at' => '2023-07-29 15:11:41', 'updated_at' => '2023-07-29 15:11:41', 'type' => 5, 'parent_id' => 77, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 82, 'name' => '52 - التكاليف التشغيلية', 'Note' => 'هي التكاليف الناتجة عن عملية الإنتاج', 'amount' => 50000, 'code' => '52', 'created_at' => '2023-07-29 15:12:16', 'updated_at' => '2023-07-29 15:49:33', 'type' => 5, 'parent_id' => 8, 'count_child' => 15, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 83, 'name' => '5201 - الرواتب والرسوم الإدارية', 'Note' => 'رواتب وأجور الموظفين الإداريين', 'amount' => 50000, 'code' => '5201', 'created_at' => '2023-07-29 15:13:02', 'updated_at' => '2023-07-29 15:13:02', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 84, 'name' => '5202 - تأمين طبي', 'Note' => 'تأمين طبي وعلاج', 'amount' => 50000, 'code' => '5202', 'created_at' => '2023-07-29 15:13:29', 'updated_at' => '2023-07-29 15:13:29', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 85, 'name' => '5203 - مصاريف تسويقية ودعائية', 'Note' => 'مصاريف تسويقية ودعائية', 'amount' => 50000, 'code' => '5203', 'created_at' => '2023-07-29 15:14:49', 'updated_at' => '2023-07-29 15:14:49', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 86, 'name' => '5204 - مصاريف الإيجار', 'Note' => 'إيجار المكتب', 'amount' => 50000, 'code' => '5204', 'created_at' => '2023-07-29 15:15:27', 'updated_at' => '2023-07-29 15:15:27', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 87, 'name' => '5205 - عمولات وحوافز', 'Note' => 'مكافآت وحوافز للموظفين الإداريين', 'amount' => 50000, 'code' => '5205', 'created_at' => '2023-07-29 15:16:02', 'updated_at' => '2023-07-29 15:16:02', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 88, 'name' => '5206 - تذاكر سفر', 'Note' => 'مصاريف سفر', 'amount' => 50000, 'code' => '5206', 'created_at' => '2023-07-29 15:17:04', 'updated_at' => '2023-07-29 15:17:04', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 89, 'name' => '5207 - التأمينات الاجتماعية', 'Note' => 'نسبة التأمينات الاجتماعية تدفع شهرياً', 'amount' => 50000, 'code' => '5207', 'created_at' => '2023-07-29 15:17:33', 'updated_at' => '2023-07-29 15:17:33', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 90, 'name' => '5208 - الرسوم الحكومية', 'Note' => 'مثل رسوم تجديد السجل التجاري والبلدية وختم الغرفة التجارية', 'amount' => 50000, 'code' => '5208', 'created_at' => '2023-07-29 15:18:06', 'updated_at' => '2023-07-29 15:18:06', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 91, 'name' => '5209 - رسوم واشتراكات', 'Note' => 'رسوم اشتراكات', 'amount' => 50000, 'code' => '5209', 'created_at' => '2023-07-29 15:30:09', 'updated_at' => '2023-07-29 15:30:09', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 92, 'name' => '5210 - مصاريف خدمات المكتب', 'Note' => 'فواتير الماء والكهرباء والهاتف والانترنت', 'amount' => 50000, 'code' => '5210', 'created_at' => '2023-07-29 15:31:05', 'updated_at' => '2023-07-29 15:31:05', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 93, 'name' => '5211 - مصاريف مكتبية ومطبوعات', 'Note' => 'قرطاسية وطباعة', 'amount' => 50000, 'code' => '5211', 'created_at' => '2023-07-29 15:31:37', 'updated_at' => '2023-07-29 15:31:37', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 94, 'name' => '5212 - مصاريف ضيافة', 'Note' => 'ضيافة ونظافة تخص المنشأة', 'amount' => 50000, 'code' => '5212', 'created_at' => '2023-07-29 15:47:27', 'updated_at' => '2023-07-29 15:47:27', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 95, 'name' => '5213 - عمولات بنكية', 'Note' => 'رسوم بنكية عند تحويل من بنك محلي إلى بنك محلي آخر أو لطباعة كشف حساب مختوم', 'amount' => 50000, 'code' => '5213', 'created_at' => '2023-07-29 15:48:22', 'updated_at' => '2023-07-29 15:48:22', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 96, 'name' => '5214 - مصاريف أخرى', 'Note' => 'مصاريف أخرى متنوعة', 'amount' => 50000, 'code' => '5214', 'created_at' => '2023-07-29 15:48:56', 'updated_at' => '2023-07-29 15:48:56', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 97, 'name' => '5215 - مصاريف الإهلاك', 'Note' => 'إهلاك الأصول الثابتة', 'amount' => 50000, 'code' => '5215', 'created_at' => '2023-07-29 15:49:33', 'updated_at' => '2023-07-29 15:51:52', 'type' => 5, 'parent_id' => 82, 'count_child' => 4, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 98, 'name' => '521501 - مصروف إهلاك المباني', 'Note' => 'مصروف إهلاك المباني', 'amount' => 50000, 'code' => '521501', 'created_at' => '2023-07-29 15:50:12', 'updated_at' => '2023-07-29 15:50:12', 'type' => 5, 'parent_id' => 97, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 99, 'name' => '521502 - مصروف إهلاك المعدات', 'Note' => 'مصروف إهلاك المعدات', 'amount' => 50000, 'code' => '521502', 'created_at' => '2023-07-29 15:50:39', 'updated_at' => '2023-07-29 15:50:39', 'type' => 5, 'parent_id' => 97, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 100, 'name' => '521503 - مصروف إهلاك أجهزة مكتبية وطابعات', 'Note' => 'مصروف إهلاك أجهزة مكتبية وطابعات', 'amount' => 50000, 'code' => '521503', 'created_at' => '2023-07-29 15:51:25', 'updated_at' => '2023-07-29 15:51:25', 'type' => 5, 'parent_id' => 97, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 101, 'name' => '5219 - مصروف نقل ومواصلات', 'Note' => 'مصروف نقل ومواصلات (بنزين ، أجرة)', 'amount' => 50000, 'code' => '5219', 'created_at' => '2023-07-29 15:51:52', 'updated_at' => '2023-07-29 15:51:52', 'type' => 5, 'parent_id' => 82, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
                ['id' => 102, 'name' => '53 - مصاريف غير التشغيلية', 'Note' => NULL, 'amount' => 50000, 'code' => '53', 'created_at' => '2023-07-29 15:54:56', 'updated_at' => '2023-07-29 15:58:05', 'type' => 5, 'parent_id' => 8, 'count_child' => 4, 'non_editable' => 0, 'transactions' => 0, 'level' => 2, 'vis_account' => 1],
                ['id' => 103, 'name' => '5301 - الزكاة', 'Note' => 'زكاة تدفع لهيئة الزكاة والدخل', 'amount' => 50000, 'code' => '5301', 'created_at' => '2023-07-29 15:55:57', 'updated_at' => '2023-07-29 15:55:57', 'type' => 5, 'parent_id' => 102, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 104, 'name' => '5302 - الضرائب', 'Note' => 'ضريبة الدخل تدفع لهيئة الزكاة والدخل', 'amount' => 50000, 'code' => '5302', 'created_at' => '2023-07-29 15:56:35', 'updated_at' => '2023-07-29 15:56:35', 'type' => 5, 'parent_id' => 102, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 105, 'name' => '5303 - ترجمة عملات أجنبية', 'Note' => 'الربح أو الخسارة من ترجمة عملات أجنبية', 'amount' => 50000, 'code' => '5303', 'created_at' => '2023-07-29 15:57:28', 'updated_at' => '2023-07-29 15:57:28', 'type' => 5, 'parent_id' => 102, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 106, 'name' => '5304 - فوائد', 'Note' => 'فوائد بنكية', 'amount' => 50000, 'code' => '5304', 'created_at' => '2023-07-29 15:58:05', 'updated_at' => '2023-07-29 15:58:05', 'type' => 5, 'parent_id' => 102, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 3, 'vis_account' => 1],
                ['id' => 107, 'name' => '110301 - المدينون تجارييون', 'Note' => NULL, 'amount' => 12, 'code' => '110301', 'created_at' => '2023-10-02 01:26:19', 'updated_at' => '2023-10-02 01:26:19', 'type' => 1, 'parent_id' => 29, 'count_child' => 0, 'non_editable' => 0, 'transactions' => 0, 'level' => 4, 'vis_account' => 1],
            ]
        );
    }
}
