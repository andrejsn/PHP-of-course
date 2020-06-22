<?php

use Illuminate\Database\Seeder;

class DebtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($id = 1; $id <= 3; $id++)
            {
                DB::table('debtors')->insert([
                    'company' => 'COBOLD  SIA',
                    'created_by' => $id,
                    'reg_number' => '50003316671',
                    'debt' => '1000.00',
                    'legal_address' => 'Ganību dambis 19',
                    'city' => 'Rīga',
                    'country' => 'LV',
                    'postal_code' => 'LV-1005',
                    'phone' => '+371 67389055',
                    'fax' => '+371 67389055',
                    'email' => 'info@cobold.lv',
                    'homepage' => 'www.cobold.lv',
                    'bank_name' => 'AS Swedbank',
                    'bank_account_number' => 'LV80 BANK 0000 4351 9500 1',
                    'status' => 'hopeless',
                    'note' => 'Mežkopība un citas mežsaimniecības darbības',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' =>  date("Y-m-d H:i:s")
                ]);
        }
    }
}
