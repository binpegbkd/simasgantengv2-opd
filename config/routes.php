<?php

return [
    'login'=>'site/login',
    ''=>'site/index',
    ''=>'site',
    'data-asn-pd' => '/sitampan/preskin-asn/index',
    'jadwal-pd' => '/sitampan/pres-harian/jadwal-opd',
    'presensi' => '/sitampan/pres-harian-user/index',
    'presensi-pd' => '/sitampan/pres-harian/pres-opd',
    'target-kinerja' => '/sitampan/kin-harian/target',
    'realisasi-kinerja' => '/sitampan/kin-harian/realisasi',
    'penilaian-bawahan' => '/sitampan/kin-harian/penilaian',
    'kinerja-bawahan' => '/sitampan/kin-harian/kinerja-bawahan',
    'ket-absen' => '/sitampan/pres-ket/index',
    'penerima-tpp' => '/sitampan/preskin-tpp-hitung/penerima-tpp',
    'cetak-tpp' => '/sitampan/preskin-tpp-hitung/cetak-form-pdf',
    'tppcetak' => '/sitampan/preskin-tpp-hitung/cetak-tpp',
    'tpp-final-perbendaharaan' => '/sitampan/preskin-tpp-hitung-bpkad/cetak-form',
    'data-asn-upt' => '/sitampan/upt/index',
    'presensi-upt' => '/sitampan/upt/presensi',
    'kinerja-upt' => '/sitampan/upt/kinerja',
    'penerima-tpp-upt' => '/sitampan/upt/penerima-tpp',
    'cetak-tpp-upt' => '/sitampan/upt/cetak-tpp-form',
    'anomali' => '/integrasi/siasn-anomali/index',

    'data-asn-opd' => '/integrasi/kepegawaian/index',
    'data-view' => '/integrasi/kepegawaian/view',
    'data-profil' => '/integrasi/kepegawaian/profil',

    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
    ['class' => 'app\config\UrlRule', 'connectionID' => 'db'],
];
