<?php

// data array
$Biodata = [
    'nama' => 'Ummi Raehani',
    'umur' => '20 Tahun',
    'jenis_kelamin' => 'Perempuan',
    'alamat' => 'Jl. Selamet, Gg. Patuh',
    'no_telepon' => '082339408767',
    'orangtua' => [
        'ayah' => [
            'nama' => 'Jumawal',
            'umur' => '44 Tahun',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Selamet, Gg. Patuh',
            'no_telepon' => '0123456789',
        ],

        'ibu' => [
            'nama' => 'Rakyah',
            'umur' => '38 Tahun',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. Selamet, Gg. Patuh',
            'no_telepon' => '1234567890',
        ]
    ]
];

//konversi data array ke dalam bentuk object
$Biodata = (object)$Biodata;
$Biodata->orangtua = (object)$Biodata->orangtua;
$Biodata->orangtua->ayah = (object)$Biodata->orangtua->ayah;
$Biodata->orangtua->ibu = (object)$Biodata->orangtua->ibu;

// Menampilkan isi array $biodata
echo "Nama : {$Biodata->nama} <br>";
echo "Umur : {$Biodata->umur} <br>";
echo "Jenis Kelamin : {$Biodata->jenis_kelamin} <br>";
echo "Alamat : {$Biodata->alamat} <br>";
echo "No Telepon : {$Biodata->no_telepon} <br>";
echo "Orang Tua : <br>";
echo "  - Ayah : {$Biodata->orangtua->ayah->nama} <br>";
echo "  - Ibu : {$Biodata->orangtua->ibu->nama} <br>";
echo "__________________________________________";

echo "<br/> <br/> <br/> <br/>";

//menampilkan object
echo "hasil konversi data array ke dalam bentuk object :";
echo "<br/> <br/>";
echo "<pre>";
print_r($Biodata);
echo "<pre>";
