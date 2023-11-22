<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $faker = Faker::create('id_ID');
        // ADMIN
        $token = Str::random(16);
        $role = "admin";
        $hashPassword = Hash::make('admin', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'Administrator',
            'login_username' => 'admin',
            'login_password' => $hashPassword,
            'login_email' => 'administrator@pmb-unidayan.com',
            'login_telepon' => '085944923123',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ADMIN
        $token = Str::random(16);
        $role = "admin";
        $hashPassword2 = Hash::make('jancok', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'Fathur Walkers',
            'login_username' => 'fathurwalkers',
            'login_password' => $hashPassword2,
            'login_email' => 'fathurwalkers@laravel.com',
            'login_telepon' => '084842848242',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // ---------------------------------------------------------------------------
        // ---------------------------------------------------------------------------

        // ADMIN
        $token = Str::random(16);
        $role = "admin";
        $hashPassword = Hash::make('jancok', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'Syarah',
            'login_username' => 'syarah',
            'login_password' => $hashPassword,
            'login_email' => 'syaral@flask.com',
            'login_telepon' => '08554929239',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // ---------------------------------------------------------------------------
        // ---------------------------------------------------------------------------

        // User Pertama
        $token = Str::random(16);
        $role = "user";
        $hashPassword = Hash::make('12345', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'Example Users',
            'login_username' => 'example',
            'login_password' => $hashPassword,
            'login_email' => 'user1@gmail.com',
            'login_telepon' => '085342072185',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ---------------------------------------------------------------------------

        // User Kedua
        $token = Str::random(16);
        $role = "user";
        $hashPassword = Hash::make('user1234', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'User 2',
            'login_username' => 'user2',
            'login_password' => $hashPassword,
            'login_email' => 'user2@gmail.com',
            'login_telepon' => '085342072185',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // User Ketiga
        $token = Str::random(16);
        $role = "user";
        $hashPassword = Hash::make('jancok', [
            'rounds' => 12,
        ]);
        $hashToken = Hash::make($token, [
            'rounds' => 12,
        ]);
        Login::create([
            'login_nama' => 'Fathur Walkers',
            'login_username' => 'fathur',
            'login_password' => $hashPassword,
            'login_email' => 'fathurwalkers@gmail.com',
            'login_telepon' => '08492929191',
            'login_token' => $hashToken,
            'login_level' => $role,
            'login_status' => "verified",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        foreach ($anggaran as $ang) {
            foreach ($deskripsi as $desk) {
                $anggaran_tanggal = $faker->dateTimeBetween('-1 years');
                switch ($ang->anggaran_tipe) {
                    case 'PENERIMAAN':
                        $randomDigit = $faker->numberBetween(5,9);
                        $penerimaan = $faker->randomNumber($randomDigit);
                        $pengeluaran = NULL;
                        $data_anggaran = new Dataanggaran;
                        $save_data_anggaran = $data_anggaran->create([
                            'data_anggaran_deskripsi' => $desk,
                            'data_anggaran_debet' => $penerimaan,
                            'data_anggaran_kredit' => $pengeluaran,
                            'data_anggaran_tanggal' => $anggaran_tanggal,
                            'anggaran_id' => $ang->id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                        $save_data_anggaran->save();
                        break;
                    case 'PENGELUARAN':
                        $randomDigit = $faker->numberBetween(5,9);
                        $pengeluaran = $faker->randomNumber($randomDigit);
                        $penerimaan = NULL;
                        $data_anggaran = new Dataanggaran;
                        $save_data_anggaran = $data_anggaran->create([
                            'data_anggaran_deskripsi' => $desk,
                            'data_anggaran_debet' => $penerimaan,
                            'data_anggaran_kredit' => $pengeluaran,
                            'data_anggaran_tanggal' => $anggaran_tanggal,
                            'anggaran_id' => $ang->id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                        $save_data_anggaran->save();
                        break;
                }
            }
        }
    }
}
