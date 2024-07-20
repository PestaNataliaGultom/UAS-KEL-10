<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'photo' => 'assets/images/movies/24BWTB.jpg',
            'title' => 'BLACKPINK WORLD TOUR BORN PINK IN CINEMAS',
            'genre' => 'Music',
            'synopsis' => 'Tur BORN PINK BLACKPINK yang memikat dunia hadir di layar lebar, merayakan ulang tahun yang ke-8 sejak debut mereka!Menarik penonton sebanyak 1,8 juta dan memecahkan rekor global untuk tur konser grup perempuan, rasakan energi live performance di bioskop di seluruh dunia!Menampilkan set ikonik Hanok yang telah memukau penggemar dan pers di seluruh dunia, film ini menunjukkan skala produksi yang belum pernah terjadi sebelumnya, menyajikan versi aransemen eksklusif dari lagu-lagu hit BLACKPINK yang unik untuk konser ini dan menghadirkan penampilan dari Gocheok Dome Seoul serta cuplikan dari kota-kota lain di seluruh tur. Bergabunglah bersama kami untuk semua momen menggembirakan, yang ditayangkan perdana di lebih dari 110 negara, menandai pertama kalinya bagi grup K-POP Perempuan.',
            'duration' => 92,
            'director' => 'Yoondong Oh, Geun Min',
            'writer' => '-',
            'cast' => 'Blackpink’s Jisoo, Jennie, RosÉ, Lisa',
            'distributor' => 'Cj 4dplex, Screenx Studio',
            'trailer' => 'RjRkne7tkrY?si=GVOPmu9FTfftkdUO',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14HTBN.jpg',
            'title' => 'HARTA TAHTA BORU NI RAJA',
            'genre' => 'Drama, Romance',
            'synopsis' => "Jerry Panjaitan yang lebih suka menamai dirinya Jerry Tan (Mark Natama) karena minder mengakui kalo orang Batak. Judul skripsi Jerry yang selalu ditolak dosen, membuatnya harus ditinggal lulus lebih dulu oleh 3 sahabatnya yakni Elin (Frislly Herlind), Aliya (Fahira Almira) dan Hendro (Fadlan Holao). Lewat usul dari sahabatnya, Jerry membuat judul skripsi tentang sejarah tokoh Pahlawan Nasional yang tak lain masih leluhurnya karena semarga yakni Jendral D.I Panjaitan. Yang ternyata judul ini diterima oleh dosen. Berangkatlah Jerry ke Balige, Kab. Toba, beserta 3 sahabatnya juga ikut karena sangat penasaran dan ingin liburan ke Danau Toba. Justru Jerry yang merasa asing di kampung halamannya, karena ini pengalaman pertamanya. Di sana dia bertemu Ita Pangaribuan (Novia Situmeang), yaitu gadis Batak penulis riset mengenai D.I Panjaitan dan ternyata dia juniornya di kampus yang sudah lulus duluan namun balik kampung untuk bekerja dan membangun kampungnya.Riset dan data Jerry semuanya dibantu oleh Ita, yang hal itu membuat Elin cemburu, karena dia sejak dulu menyukai sahabatnya tersebut. Ternyata Ita, disukai oleh Bang Jemun Nainggolan (Jenda Munthe), pemuda kampung sana yang cukup disegani dan pemilik Lapo BUMN. Beberapa hari di kampung dan sering berjumpa dengan Ita membuat Jerry menaruh hati kepada Ita, hal ini membuat Bang Jemun semakin terbakar cemburu dan terjadi persaingan serius antara mereka berdua untuk mendapatkan Ita.Siapa yang berhasil mendapatkan hati Ita? Bagaimana persaingan antara Jerry dan Bang Jemun? Bagaimana perasaan Elin melihat kedekatan Jerry dan Ita?? Pulang kampung Jerry kali ini apakah untuk Harta, Tahta atau Boru Ni Raja?",
            'duration' => 114,
            'director' => 'Agustinus Sitorus',
            'writer' => 'Ridho Brado, Agustinus Sitorus',
            'cast' => 'Mark Natama Saragi, Novia Situmeang, Frislly Herlind, Fadlan Holao, Fahira Almira, Jenda Munthe, Tabitha Napitupulu, Diknal Sitorus',
            'distributor' => 'Pim Pictures, Bpodt, Layar Production',
            'trailer' => 'Gs3ETzNkDaE?si=tZeaMag8urMfqNoD',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14MELA.jpg',
            'title' => 'MUNGKIN ESOK LUSA ATAU NANTI',
            'genre' => 'Drama',
            'synopsis' => "Kemuning (Natasya Nurhalima) adalah seorang gadis desa yang menempuh S2 di Turki. Walau berada di negara dua benua, Ning tetap memegang teguh untuk setia menunggu cinta sejatinya, Raditya (Bilal Fadh), yang berjanji untuk setia dan akan meminangnya suatu saat nanti. Bahkan demi memenuhi janjinya, Ning menolak cinta Dewo (Tegar Iman), yang ternyata bersahabat dengan Raditya. Sampai akhirnya waktu mempertemukan mereka, ketika Raditya mengunjungi Dewo untuk mengabarkan bahwa ia akan menikah dengan gadis pilihan Ibunya, dan harus meninggalkan Ning. Kabar ini membuat Ning hancur.",
            'duration' => 118,
            'director' => 'Iwan Kurniawan',
            'writer' => 'Ririen Setiarini, Ade Bareto, Atut Ayam, Nuthayla Anwar',
            'cast' => 'Natasya Nurhalima, Bilal Fadh, Tegar Iman, Olga Lydia, Akbar Kobar, Intan Erlita, Terry Putri, Farid Aja, Devi Permata Sari, Empriw, Ipoel Mlumah',
            'distributor' => 'Kolam Ikan Pictures',
            'trailer' => 'eG9cXjei1_k?si=yHTk2SGgAajxmOnz',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14JRIA.jpg',
            'title' => 'JURNAL RISA BY RISA SARASWATI',
            'genre' => 'Horor',
            'synopsis' => 'Kamera dokumenter merekam sebuah perjalanan mengerikan tim Jurnal Risa dalam upaya menyelamatkan bintang tamu mereka, Prinsa, yang diikuti oleh hantu yang paling mereka takuti, Samex hantu yang selalu mendatangi siapapun yang menyebut namanya.',
            'duration' => 92,
            'director' => 'Rizal Mantovani',
            'writer' => 'Lele Laila',
            'cast' => 'Risa Saraswati, Ranggana Purwana, Indy Ratna Pratiwi, Riana Rizki, Abimanyu Bhakti, Nicko Irham, Dimas Tri Adityo, Fahrul Rohman, Prinsa Mandagie, Sandy Pradana, Vyatra Novrisyah',
            'distributor' => 'Md Pictures',
            'trailer' => '-HuNHKFaW60?si=X9In1qHEwy8N0dCa',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24ESCE.jpg',
            'title' => 'ESCAPE',
            'genre' => 'Action, Drama',
            'synopsis' => 'Setelah menyelesaikan pelayanan militer selama 10 tahun dan dihormati sebagai pahlawan, seorang perwira Korea Utara membuat keputusan mengejutkan untuk melarikan diri ke Selatan, mempertaruhkan nyawa demi sebuah kesempatan untuk akhirnya bisa menentukan nasibnya sendiri.',
            'duration' => 94,
            'director' => 'Jong-pil Lee',
            'writer' => 'Kwon Sung-hui, Kim Woo-geun',
            'cast' => 'Lee Je-hoon, Koo Kyo-hwan, Hong Xa-bin, Song Kang',
            'distributor' => 'Plus M Entertainment',
            'trailer' => '9mPzDILlt5g?si=TW_QXWBim5zHGJAl',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24TWIS.jpg',
            'title' => 'TWISTERS',
            'genre' => 'Disaster, Adventure',
            'synopsis' => 'Tyler Owens (Glen Powell) dan Kate Cooper (Daisy Edgar-Jones) adalah peneliti badai dan pemburu badai yang mempertaruhkan nyawa mereka dalam upaya menguji sistem peringatan untuk bisa menanggulangi badai yang sering kali terjadi di Oklahoma.',
            'duration' => 122,
            'director' => 'Lee Isaac Chung',
            'writer' => 'Mark L. Smith',
            'cast' => "Glen Powell, Daisy Edgar-jones, Maura Tierney, Kiernan Shipka, Katy O'brian, David Corenswet, Anthony Ramos, Sasha Lane, Paul Scheer, Daryl Mccormack, Brandon Perea",
            'distributor' => 'Warner Bros. Pictures',
            'trailer' => 'wdok0rZdmx4?si=ILzl-h7LfTDh8HPk',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24TWX2.jpg',
            'title' => 'TWISTERS (IMAX 2D)',
            'genre' => 'Disaster, Adventure',
            'synopsis' => 'Tyler Owens (Glen Powell) dan Kate Cooper (Daisy Edgar-Jones) adalah peneliti badai dan pemburu badai yang mempertaruhkan nyawa mereka dalam upaya menguji sistem peringatan untuk bisa menanggulangi badai yang sering kali terjadi di Oklahoma.',
            'duration' => 122,
            'director' => 'Lee Isaac Chung',
            'writer' => 'Mark L. Smith',
            'cast' => "Glen Powell, Daisy Edgar-jones, Maura Tierney, Kiernan Shipka, Katy O'brian, David Corenswet, Anthony Ramos, Sasha Lane, Paul Scheer, Daryl Mccormack, Brandon Perea",
            'distributor' => 'Warner Bros. Pictures',
            'trailer' => 'J6Qtf2OKbBU?si=wh2EemSbW03Rsf9k',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24EXOM.jpg',
            'title' => 'THE EXORCISM',
            'genre' => 'Horror, Thriller',
            'synopsis' => 'Anthony Miller (Russell Crowe) aktor senior yang sedang bermasalah mulai menunjukkan prilaku aneh saat terlibat dalam produksi film horor. Lee Miller (Ryan Simpkins) putrinya bingung apakah sang ayah kembali ke kecanduan masa lalu atau ada sesuatu yang lebih jahat yang sedang terjadi.',
            'duration' => 95,
            'director' => 'Joshua John Miller',
            'writer' => 'M.a. Fortin, Joshua John Miller',
            'cast' => 'Russell Crowe, Ryan Simpkins, Sam Worthington, Chloe Bailey, Adam Goldberg, Adrian Pasdar, David Hyde Pierce, Tracey Bonner, Marcenae Lynette, Joshua John Miller',
            'distributor' => 'Miramax',
            'trailer' => 'PIxpPMyGcpU?si=vmZAB9vexF52eiSf',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14SLIO.jpg',
            'title' => 'SEKAWAN LIMO',
            'genre' => 'Komedi, Horror',
            'synopsis' => 'Bagas (Bayu Skak), Lenni (Nadya Arina), Dicky (Firza Valaza), Juna (Benidictus Siregar), dan Andrew (Indra Pramujito) dipersatukan ketika mendaki Gunung Madyopuro. Mereka gagal mematuhi mitos Rombongan harus genap dan dilarang menoleh ke belakang atau akan ada yang mengikuti!. Sepanjang perjalanan mereka terus dihantui hingga akhirnya sadar kalau dari berlima salah satu bukan manusia. Siapa yang hantu di antara mereka?',
            'duration' => 112,
            'director' => 'Bayu Skak',
            'writer' => 'Nona Ica',
            'cast' => 'Bayu Skak, Nadya Arina, Keisya Levronka, Dono Pradana, Benidictus Siregar, Indra Pramujito, Firza Valaza, Devina Aureel, Cak Kartolo, Tini Kartolo, Tri Karnadinata, Beta Sofiansyah',
            'distributor' => 'Starvision, Skak Studios',
            'trailer' => 'ERZncVUuKlk?si=K7Nh6h-Dn5d_kgW3',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24DME4.jpg',
            'title' => 'DESPICABLE ME 4',
            'genre' => 'Animation, Comedy',
            'synopsis' => 'Gru, Lucy, Margo, Edith, dan Agnes siap menyambut anggota baru di keluarga. Di tengah kebahagiaan, Gru harus menghadapi penjahat bernama Maxime Le Mal yang berniat membalas dendam kepada Gru. Apakah Gru bisa menyelamatkan keluarga kecilnya?',
            'duration' => 94,
            'director' => 'Chris Renaud',
            'writer' => 'Ken Daurio, Mike White',
            'cast' => 'Steve Carell, Kristen Wiig, Joey King, Will Ferrell, Sofia Vergara, Miranda Cosgrove, Dana Gaier, Madison Skyy Polan, Pierre Coffin, Steve Coogan, Stephen Colbert, Chloe Fineman',
            'distributor' => 'Universal Pictures',
            'trailer' => 'qQlr9-rF32A?si=LBX4WgZi6cXbE0ID',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14MSOW.jpg',
            'title' => 'MARNI - THE STORY OF WEWE GOMBEL',
            'genre' => 'Horor, Action',
            'synopsis' => 'Anisa (Amanda Rigby) bersama ibunya Rahayu (Hannah Al Rashid) dan adiknya Aan (Athar Barakbah), pindah ke sebuah desa terpencil dengan legenda lokal yang menyeramkan. Anisa berusaha melindungi adiknya dari makhluk halus yang sering menculik anak-anak pada saat maghrib. Suatu hari Aan hilang saat maghrib, dibantu dengan seorang pemuda bernama Tama (Reza Hilman), anak dari Pak Lurah (Mathias Muchus), Anisa mencari cara untuk mengembalikan Aan kembali. Setelah Aan kembali ditemukan, Aan tidaklah sama seperti dulu, menjadi lebih pendiam. Anisa sendiri pun mengalami keanehan pada dirinya, keanehan ini disadari oleh sahabatnya Poppy (Frislly Herlind). Rahayu pun menjadi khawatir dan berusaha melakukan apapun untuk melindungi kedua anaknya. Teror semakin menjadi.',
            'duration' => 120,
            'director' => 'Billy Christian',
            'writer' => 'Billy Christian, Tisa Ts',
            'cast' => 'Amanda Rigby, Hannah Al Rashid, Ismi Melinda, Athar Barakbah, Reza Hilman, Frislly Herlind, Shareefa Daanish, Mathias Muchus, Djaenar Maesa Ayu, Volland Volt, Roy Marten, Ruth Marini, Totos Rastiti',
            'distributor' => 'Shen Entertainment, Legacy Pictures, A&z Film',
            'trailer' => 'zQqFCak0B90?si=cLwCdxd7BBRteUnc',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24QPDO.jpg',
            'title' => 'A QUIET PLACE: DAY ONE',
            'genre' => 'Thriller, Sci-fi',
            'synopsis' => "Kisah awal mula kehancuran. Hari pertama kenapa dunia menjadi sunyi!Sam (Lupita Nyong'o) berusaha selamat dari invasi makhluk asing dengan pendengaran ultrasonik yang menyerang New York.",
            'duration' => 99,
            'director' => 'Michael Sarnoski',
            'writer' => 'Michael Sarnoski, John Krasinski',
            'cast' => "Joseph Quinn, Djimon Hounsou, Alex Wolff, Lupita Nyong'o, Thea Butler, Jennifer Woodward, Zay Domo Artist, Malik Jubal, Elijah Ungvary",
            'distributor' => 'Paramount Pictures',
            'trailer' => 'YPY7J-flzE8?si=srhS0Lqh5YvgXSBb',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24IOT2.jpg',
            'title' => 'INSIDE OUT 2',
            'genre' => 'Animation',
            'synopsis' => 'Petualangan kali ini akan membawa ke dunia emosi yang rumit. Riley telah tumbuh menjadi remaja berusia 13 tahun, seiring dengan itu tumbuh pula emosi baru yang harus dia hadapi.Bersama dengan emosi Joy, Sadness, Anger, Fear, dan Disgust, Riley sekarang juga menghadapi Anxiety, sebuah emosi baru dengan warna oranye. Kehadiran Anxiety di markas besar Riley menambah drama dalam ruang kontrol emosi.',
            'duration' => 96,
            'director' => 'Kelsey Mann',
            'writer' => 'Dave Holstein, Meg Lefauve',
            'cast' => 'Amy Poehler, Phyllis Smith, Lewis Black, Tony Hale, Liza Lapira, Maya Hawke, Ayo Edebiri, Adele Exarchopoulos, Paul Walter Hauser, Kensington Tallman, Diane Lane, Kyle Maclachlan',
            'distributor' => 'Walt Disney Pictures',
            'trailer' => 'LEjhY15eCx0?si=KfN3aCSjLe9sghZi',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14IAMT.jpg',
            'title' => 'IPAR ADALAH MAUT',
            'genre' => 'Drama',
            'synopsis' => 'Cinta datang tak pernah bisa ditebak, NISA (Michelle Ziudith) dipinang oleh dosen muda dari kampusnya, ARIS (Deva Mahenra), laki-laki cerdas yang punya pesona luar biasa. Pernikahan mereka bagai pernikahan negeri dongeng, sempurna, apalagi dengan kelahiran putri mereka, RAYA (Alesha Fadillah Kurniawan). Sayangnya, seperti juga cinta masalah datang tanpa diduga. Ibu Nisa tiba-tiba menitipkan putri keduanya, Rani (Davina Karamoy), untuk tinggal bersama Aris dan Nisa. Rani tadinya menjaga jarak dengan Aris, tapi perlahan, celah hubungan terlarang terbuka. Di belakang Nisa, Aris mengkhianati pernikahan dengan adik kandung istrinya sendiri.',
            'duration' => 131,
            'director' => 'Hanung Bramantyo',
            'writer' => 'Oka Aurora',
            'cast' => 'Michelle Ziudith, Deva Mahenra, Davina Karamoy, Alesha Fadillah Kurniawan, Dewi Irawan, Devina Aureel, Asri Welas',
            'distributor' => 'Md Pictures',
            'trailer' => '9M3VN0J5ffM?si=WkssTNK4wOqwIN4r',
            'playing' => 'now'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24ALED.jpg',
            'title' => 'A LEGEND',
            'genre' => 'Action, Adventure',
            'synopsis' => 'Seorang arkeolog memperhatikan bahwa tekstur artefak yang ditemukan oleh murid-muridnya selama ini mirip dengan liontin batu giok yang dia lihat dalam mimpinya. Ia yakin liontin batu giok itu adalah jembatan antara mimpi dan kenyataan. Bersama timnya, ia memulai ekspedisi ke kedalaman gletser untuk mencari kebenaran di balik mimpinya tersebut.',
            'duration' => 0,
            'director' => 'Stanley Tong',
            'writer' => 'Stanley Tong',
            'cast' => 'Jackie Chan, Gulnezer Bextiyar, Yixing Zhang, Aarif Lee, Chen Li, Kim Hee-seon, Max Huang, Shawn Dou, Yecheng Zheng',
            'distributor' => 'Bona Film Group',
            'trailer' => 'hIrmsHpF7p4?si=TQiUU_HhkPVi-BFY',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14AATR.jpg',
            'title' => 'ALL ACCESS TO ROSSA 25 SHINING YEARS',
            'genre' => 'Musik, Drama, Dokumenter',
            'synopsis' => 'All Access to Rossa: 25 Shining Years bercerita tentang kehidupan dan karier Rossa, seorang diva pop Indonesia terkemuka. Film dokumenter ini menawarkan gambaran multifaset tentang perjalanan Rossa, mencakup prestasi musiknya, tantangan pribadi, dinamika keluarga, dan segala lika liku usahanya dalam membangun karir selama 25 tahun. Inklusi konser megah yang merayakan 25 tahun kesuksesan Rossa menambahkan kemegahan dan kegembiraan, menjadikannya informatif dan menghibur. Secara keseluruhan, ini adalah pengalaman sinematik yang menggugah hati yang merayakan warisan abadi salah satu ikon musik Indonesia yang paling dicintai.',
            'duration' => 0,
            'director' => 'Ani Ema Susanti',
            'writer' => '-',
            'cast' => 'Rossa',
            'distributor' => 'Sinemaku Pictures, Inspire Pictures',
            'trailer' => 'I9GgSQkVtjI?si=q4fh6Hv3Fo9rhT-G',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24ARCN.jpg',
            'title' => 'ARCADIAN',
            'genre' => 'Action, Thriller',
            'synopsis' => 'Mengisahkan seorang ayah dan dua anak kembarnya yang berjuang untuk bertahan hidup di sebuah peternakan terpencil di akhir dunia. Cerita dimulai dengan Paul (Nicolas Cage) yang melarikan diri dari kehancuran peradaban. Lima belas tahun kemudian, Paul tinggal bersama kedua anak remajanya, Joseph dan Thomas. Mereka harus menghadapi ancaman makhluk mengerikan yang muncul di malam hari.',
            'duration' => 0,
            'director' => 'Benjamin Brewer',
            'writer' => 'Mike Nilon',
            'cast' => 'Nicolas Cage, Jaeden Martell, Maxwell Jenkins, Sadie Soverall, Samantha Coughland, Joe Dixon, Joel Gillman',
            'distributor' => 'Aperture Media Partners, Highland Film Group (hfg)',
            'trailer' => 'RGLtN_2UrEw?si=sPgbmzh7pZBCiqe4',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14AZZE.jpg',
            'title' => 'AZZAMINE',
            'genre' => 'Drama, Romance',
            'synopsis' => 'Kehidupan Jasmine (Megan Domani) berubah 180 derajat gara-gara kedatangan Azzam, (Arbani Yasiz) laki-laki yang dijodohkan oleh orang tuanya. Masalahnya, Jasmine sudah punya pacar bernama Deka, (Axel Matthew) yang menyenangkan dan seru. Bertolak belakang dengan Azzam yang kaku dan sedikit-sedikit bicara agama.',
            'duration' => 0,
            'director' => 'Benni Setiawan',
            'writer' => 'Archie Hekagery',
            'cast' => 'Megan Domani, Arbani Yasiz, Axel Matthew, Dina Lorenza, Alex Abbad, Indra Brasco, Meisya Siregar, Arafah Rianti, Alleyra Fakhir, Dimas Putra',
            'distributor' => 'Md Pictures',
            'trailer' => 'Sh4YAfkhFaE?si=qeZhjyv5-6yXMUNl',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14BISI.jpg',
            'title' => 'BANGSAL ISOLASI',
            'genre' => 'Action, Thriller',
            'synopsis' => 'Butuh nyali besar bagi WENI (Kimberly Ryder) seorang jurnalis yang dengan sengaja merekayasa bahwa dirinya seorang Narapidana - demi bisa mengungkap misteri kematian adiknya, RATNA (Hanisah Halim) di sebuah bangsal sangat mengerikan yang di juluki para napi ruang kutukan karena setiap yang masuk kedalamnya akan berakhir dengan kematian.Upaya Weni dibantu oleh ADIT (Ibrahim Risyad) yang berperan sebagai sipir penjara. Pembantaian dan pembullyan para NAPI wanita yang dilakukan secara keji menjadi pemandangan sehari-hari. BELA (Wulan Guritno) seorang NAPI Mafia Human Trafficking yang begitu ditakuti oleh para napi. Setiap yang berurusan dengan Bella akan berakhir dijebloskan ke dalam bangsal isolasi oleh kepala lapas HERMAN (Piet Pagau) yang keji karena dianggap melakukan pelanggaran berat.Diantara kekejian didalam lapas,hanya RUSDIAH lah (Rowiena Umboh)seorang psikolog di lapas yang lembut, baik hati dan memotivasi para NAPI.Bersama suasana mencekam, suara-suara mengerikan yang seolah teriakan para NAPI yang sudah mati, benang merah misteri kematian mereka di bangsal isolasi kian terang. Misteri Bangsal Isolasi membungkam apa yang nyata, siapa yang baik dan siapa yang palsu dalam kebenaran.',
            'duration' => 0,
            'director' => 'Adhe Dharmastriya',
            'writer' => 'Oscar Haviv Sebastian',
            'cast' => 'Kimberly Ryder, Wulan Guritno, Ibrahim Risyad, Rowiena Umboh, Piet Pagau, Niniek Arum, Dyan Deye, Dafina Jamasir, Hanisah Halim, Sugesta Handayani, Evelyn Aurora',
            'distributor' => 'Mesari Pictures, Jp Pictures',
            'trailer' => 'ebOr2ZFtNEc?si=FiA5aGFMwE2SQubc',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24BORS.jpg',
            'title' => 'BORDERLANDS',
            'genre' => 'Action, Adventure',
            'synopsis' => 'Lilith (Blanchett), seorang pemburu hadiah terkenal dengan masa lalu yang misterius, dia enggan kembali ke rumahnya, Pandora, planet paling kacau di galaksi. Misinya adalah menemukan putri Atlas (Ramirez) yang hilang. Lilith membentuk aliansi tak terduga dengan tim yang tidak harmonis – Roland (Hart), tentara bayaran berpengalaman; Tiny Tina (Greenblatt), seorang remaja yang tidak bisa diatur; Krieg (Munteanu), pelindung Tina; Tannis (Curtis), ilmuwan eksentrik yang telah melihat semuanya; dan Claptrap, robot yang bijaksana. Bersama-sama, para pahlawan yang tidak terduga ini harus melawan spesies asing dan bandit berbahaya untuk mengungkap salah satu rahasia terbesar di Pandora. Nasib alam semesta mungkin ada di tangan mereka - tetapi mereka akan berjuang untuk sesuatu yang lebih: satu sama lain. Selamat datang di BORDERLANDS.',
            'duration' => 0,
            'director' => 'Eli Roth',
            'writer' => 'Eli Roth, Joe Crombie',
            'cast' => 'Cate Blanchett, Kevin Hart, Jack Black, Edgar Ramirez, Ariana Greenblatt, Florian Munteanu, Gina Gershon, Jamie Lee Curtis',
            'distributor' => 'Lionsgate, Gearbox Studios',
            'trailer' => 'lU_NKNZljoQ?si=nm_4IWLAT6Y8z59X',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14CHMS.jpg',
            'title' => 'CATATAN HARIAN MENANTU SINTING',
            'genre' => 'Drama, Comedy',
            'synopsis' => 'Aku Minar (Ariel Tatum). Ini cerita cintaku dan Sahat (Raditya Dika) dan Mamak Mertua (Lina Marpaung). Ditambah latar belakang keluarga besar Batak yang penuh drama. Seru. Ngeselin. Gemesin. Bikin pengen nyakar aspal.Aku dan Mama Mertua punya kepercayaan berbeda tentang cinta. Buatku cinta adalah quality time dan komunikasi. Sedangkan buat Mamak Mertua, cinta adalah kehadiran anak laki-laki di tengah pernikahan sebagai penerus marga. Karena itu, sejak awal pernikahan, Mamak Mertua tidak pernah bosan menagihku untuk memberikan seorang cucu laki-laki. Dan karena belum punya cukup uang, terpaksa aku dan Sahat tinggal di rumah Mamak Mertua dan dihadiahi ranjang peninggalan Opungnya Sahat. Ranjang itu disebut ‘Ranjang Keramat’ oleh Mamak Mertua, karena satu minggu tidur di ranjang itu dia langsung hamil Monang, anak pertamanya. Aku punya sebuah agenda. Aku mau mengajak Sahat keluar dari rumah Mamak Mertua. Aku mau memiliki rumah sendiri, tanpa campur tangan Mamak Mertua. Tapi, apa mungkin Mamak Mertua mengizinkan aku dan Sahat keluar dari rumahnya sebelum kami memberikan Mamak Mertua seorang cucu laki-laki?',
            'duration' => 0,
            'director' => 'Sunil Soraya',
            'writer' => 'Dona Rosamayna',
            'cast' => 'Raditya Dika, Ariel Tatum, Robby Purba, Raline Shah, Lina Marpaung',
            'distributor' => 'Soraya Intercine Films',
            'trailer' => 'ky6MO1r3UVg?si=Y6E9RoHHYEz0oA6c',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24DWOE.jpg',
            'title' => 'DEADPOOL & WOLVERINE',
            'genre' => 'Action, Sci-fi',
            'synopsis' => 'Sosok Deadpool atau Wade Wilson (Ryan Reynolds) yang dikenal tidak bertanggung jawab dipercaya untuk mengubah sejarah Marvel Cinematic Universe (MCU) bersama Wolverine (Hugh Jackman). Mereka bekerja sama untuk mengalahkan musuh bersama.',
            'duration' => 0,
            'director' => 'Shawn Levy',
            'writer' => 'Shawn Levy, Rhett Reese, Ryan Reynolds, Zeb Wells, Paul Wernick',
            'cast' => 'Ryan Reynolds, Hugh Jackman, Emma Corrin, Morena Baccarin, Rob Delaney, Karan Soni, Leslie Uggams, Matthew Macfadyen',
            'distributor' => 'Walt Disney Pictures',
            'trailer' => '73_1biulkYk?si=P3L8vzBO-TxVUZ7M',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24DWX2.jpg',
            'title' => 'DEADPOOL & WOLVERINE (IMAX 2D)',
            'genre' => 'Action, Sci-fi',
            'synopsis' => 'Sosok Deadpool atau Wade Wilson (Ryan Reynolds) yang dikenal tidak bertanggung jawab dipercaya untuk mengubah sejarah Marvel Cinematic Universe (MCU) bersama Wolverine (Hugh Jackman). Mereka bekerja sama untuk mengalahkan musuh bersama.',
            'duration' => 0,
            'director' => 'Shawn Levy',
            'writer' => 'Shawn Levy, Rhett Reese, Ryan Reynolds, Zeb Wells, Paul Wernick',
            'cast' => 'Ryan Reynolds, Hugh Jackman, Emma Corrin, Morena Baccarin, Rob Delaney, Karan Soni, Leslie Uggams, Matthew Macfadyen',
            'distributor' => 'Walt Disney Pictures',
            'trailer' => 'WJC9GNP1qiM?si=Bv9Qkcr4W7unKvym',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24DMNE.jpg',
            'title' => 'DORAEMON THE MOVIE NOBITAS EARTH SYMPHONY',
            'genre' => 'Animation',
            'synopsis' => 'Musik ada dalam kehidupan kita sehari-hari dan dianggap remeh. Tapi apa yang akan terjadi apa jadinya jika musik hilang dari muka bumi? Doraemon dan Nobita, bersama-sama dengan kenalan baru mereka, akan berkomunikasi melalui musik, menjalin hubungan baru persahabatan dan selamatkan bumi dari kehancuran!',
            'duration' => 115,
            'director' => 'Imai Kazuaki',
            'writer' => 'Utsumi Teruko',
            'cast' => 'Mizuta Wasabi, Ohara Megumi, Kakazu Yumi, Kimura Subaru, Seki Tomokazu',
            'distributor' => 'Fujiko-pro',
            'trailer' => 'Bpf0r-nSyjU?si=3PqD6VxvH9VEyzhC',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14DGSM.jpg',
            'title' => 'DOSEN GHAIB: SUDAH MALAM ATAU SUDAH TAHU',
            'genre' => 'Horror, Drama',
            'synopsis' => 'Pak Bakti (Egi Fedly) adalah dosen killer yang sangat ditakuti oleh semua mahasiswa di kampus. Kredibilitas dan nama baiknya dipertaruhkan ketika Amelia (Ersya Aurelia), Emir (Rayn Wijaya), Maya (Annette Edoarda), dan Fattah (Endy Arfian), dinyatakan gagal dalam mata kuliahnya. Mereka diwajibkan mengambil kelas remidi untuk memperbaiki nilai. Sayangnya, kelas remidi itu berubah menjadi pengalaman mengerikan hingga mereka ingin keluar kelas. Mengapa? Sudah Malam atau Sudah Tahu?!15 Agustus 2024 di Bioskop.',
            'duration' => 0,
            'director' => 'Guntur Soeharjanto',
            'writer' => 'Evelyn Afnilia',
            'cast' => 'Egi Fedly, Endy Arfian, Rayn Wijaya, Ersya Aurelia, Annette Edoarda, Makayla Rose, Anyun Cadel, Oce Permatasari, Shan Ryadi',
            'distributor' => 'Dee Company',
            'trailer' => '2NxFa2imUWo?si=UAsUK7QoAcA3i4yj',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24DRIE.jpg',
            'title' => 'DRIVE',
            'genre' => 'Thriller',
            'synopsis' => 'Berkisah tentang Yu Na, seorang influencer yang mau melakukan apapun demi uang. Sampai malapetaka pun tiba ketika ia terbangun didalam sebuah bagasi mobil, mengharuskan dirinya mengumpulkan uang melalui donasi via Live Streaming. Jika donasi tidak sampai target, maka maut telah menantinya.',
            'duration' => 90,
            'director' => 'Park Dong-hee',
            'writer' => 'Park Dong-hee',
            'cast' => 'Park Ju-hyun, Kim Yeo-jin, Kim Do-yoon',
            'distributor' => 'M Pictures',
            'trailer' => 'v3UjxIR6J_Y?si=JKNtttMqM8StkeB_',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24FMTM.jpg',
            'title' => 'FLY ME TO THE MOON',
            'genre' => 'Comedy, Romance',
            'synopsis' => 'Berlatar tahun 1960-an, saat perlombaan luar angkasa antara Amerika Serikat dan Uni Soviet sedang meningkat. Kelly Jones (Scarlett Johansson), seorang ahli pemasaran membuat tugas Cole Davis (Channing Tatum) sosok direktur peluncuran NASA menjadi lebih sulit. Ketika Gedung Putih menganggap misi tersebut terlalu penting untuk gagal, keduanya diarahkan untuk merencanakan pendaratan palsu di bulan sebagai cadangan.',
            'duration' => 132,
            'director' => 'Greg Berlanti',
            'writer' => 'Rose Gilroy',
            'cast' => 'Scarlett Johansson, Channing Tatum, Woody Harrelson, Ray Romano, Jim Rash, Christian Clemenson, Peter Jacobson, Greg Kriek, Colin Woodell, Anna Garcia, Joe Chrest',
            'distributor' => 'Columbia Pictures',
            'trailer' => 'lW7enw6mFxs?si=Yyah7cfZ-TLxX7UG',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/22GZOE.jpg',
            'title' => 'GANGNAM ZOMBIE',
            'genre' => 'Horror',
            'synopsis' => 'Gangnam Zombie menceritakan tentang pengalaman mengerikan warga Gangnam untuk bisa selamat dari serangan zombie. Hyun Seok (Ji Il Ho) dan Min Jung (Park Ji Yeon) berusaha bertahan hidup dari serangan para zombie yang menyergap mereka. Mampukah keduanya lolos dan siapa sebenarnya dalang di balik serangan para zombie tersebut?',
            'duration' => 81,
            'director' => 'Lee Soo Sung',
            'writer' => 'Choe Seung',
            'cast' => 'Ji Il Joo, Park Ji Yeon, Jo Kyung Hoon, Choi Sung Min, Jung Yi Joo, Tak Teu In',
            'distributor' => 'Lee Film, Joy N Cinema',
            'trailer' => 'dnl_r9r2U8g?si=TMAOrH-wLvMV5KKm',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24H971.jpg',
            'title' => 'HIJACK 1971',
            'genre' => 'Crime, Thriller',
            'synopsis' => 'Diangkat dari kisah nyata pembajakan pesawat di Korea Selatan. Seorang penumpang yang bernama Yong Dae (Yeo Jin Goo) membajak pesawat penumpang dan meminta agar pesawat untuk terbang ke Korea Utara.Insiden ini semakin mencekam saat pelaku mengancam akan meledakan bom - hingga aksi Tae In (Ha Joong Wa) mantan pilot pesawat tempur turut mengambil alih pesawat. Akankan semua penumpang pesawat akan selamat?',
            'duration' => 100,
            'director' => 'Kim Sung Han',
            'writer' => 'Kim Kyung Chan',
            'cast' => 'Ha Jung Woo, Yeo Jin Goo, Sung Dong Il, Chae Soo Bin, Moon Yoo Kang',
            'distributor' => 'Columbia Pictures',
            'trailer' => 'UxyutkXQnvA?si=trZJ_vFgoeYatBKu',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14KROO.jpg',
            'title' => 'KROMOLEO',
            'genre' => 'Horror, Thriller',
            'synopsis' => 'Zia (Ratu Sofya), gadis muda anak dari Djarot (Cornelio Sunny), seorang preman dengan julukan gali menikah dengan anak gadisnya Danang (Tio Pakusadewo) yang sebenarnya ketua PETRUS (PENEMBAK MISTERIUS). Ketika Danang Sudah tidak memerlukan Djarot dan para gali yang selama ini dia manfaatkan , Danang memutuskan untuk membunuh dan membantai mereka semua. Semenjak itulah muncul arwah - arwah penasaran para Gali yg mati, jadi rombongan hantu pembawa keranda yang menakuti warga desa yang disebut ‘KROMOLEO", siapapun yang menyaksikan kromoleo akan mati karena teror kromoleo. Zia pun terjebak diantara 2 pilihan memilih Danang kakeknya atau Djarot Ayahnya.',
            'duration' => 80,
            'director' => 'Anggy Umbara',
            'writer' => 'Dirmawan Hatta',
            'cast' => 'Ratu Sofya, Abun Sungkar, Aline Fauziah, Tio Pakusadewo, Rukman Rosadi, Cornelio Sunny, Totos Rasiti, Dayu Wijanto, Vonny Anggraini',
            'distributor' => 'Imperial Pictures',
            'trailer' => 'yDwqwjp2leM?si=jKXlLSkVmGLrMFqZ',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14LAUA.jpg',
            'title' => 'LAURA',
            'genre' => 'Drama',
            'synopsis' => 'Laura (Amanda Rawles), selebgram ceria yang sangat disayangi oleh teman dan keluarganya, harus berjuang ketika hidupnya yang penuh warna mendadak menjadi hitam putih setelah ia lumpuh karena kecelakaan yang disebabkan sang kekasih, Jojo (Kevin Ardilova).',
            'duration' => 0,
            'director' => 'Hanung Bramantyo',
            'writer' => 'Alim Sudio',
            'cast' => 'Amanda Rawles, Kevin Ardilova, Carissa Perusset, Fadi Alaydrus, Unique Priscilla, Willem Bevers, Kaneisha Yusuf, Jinan Safa, Fachrulhadid, Rafly Altama, Muhammad Fauzan, Michelle Yuti',
            'distributor' => 'Md Pictures',
            'trailer' => 'pN0qpTztWvE?si=STKS2LZ6tnP_-K9P',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24LONS.jpg',
            'title' => 'LONGLEGS',
            'genre' => 'Horror, Thriller',
            'synopsis' => 'Demi mengungkap kasus rumit dan menangkap Longlegs (Nicolas Cage) seorang pembunuh berantai yang penuh dengan misteri, Lee Harker (Maika Monroe), agen muda FBI harus mengungkap serangkaian petunjuk gaib untuk ia pecahkan sebelum sang pembunuh merenggut nyawa korban selanjutnya.',
            'duration' => 101,
            'director' => 'Osgood Perkins',
            'writer' => 'Osgood Perkins',
            'cast' => 'Nicolas Cage, Maika Monroe, Blair Underwood, Alicia Witt, Michelle Choi-lee, Dakota Daulby, Lauren Acala, Kiernan Shipka, Jason Day, Lisa Chandler',
            'distributor' => 'Neon Entertainment, Black Bear',
            'trailer' => 'FXOtkvx25gI?si=3ch9MBURiiQYlAoC',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24PSIE.jpg',
            'title' => 'PUSAKA',
            'genre' => 'Horror',
            'synopsis' => 'Sebuah vila besar milik seorang kolektor (Slamet Rahardjo) yang hendak dipugar menjadi museum memperangkap para pekerja projek yang tengah melakukan survei. Sebuah kutukan terlepas, membunuh satu persatu para manusia di dalamnya.',
            'duration' => 90,
            'director' => 'Rizal Mantovani',
            'writer' => 'Husein M Atmodjo',
            'cast' => 'Susan Sameh, Ajil Ditto, Ully Triani, Sahila Hisyam, Shareefa Daanish, Bukie B. Mansyur, Shofia Shireen, Slamet Rahardjo, Joseph Kara, Ikhsan Samiaji, Coki Anwar',
            'distributor' => 'Mvp Pictures',
            'trailer' => 'AouSK44vPZo?si=yuvhxNVBUEvP2Gv-',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14RIJI.jpg',
            'title' => 'ROMEO INGKAR JANJI',
            'genre' => 'Drama',
            'synopsis' => 'Seorang gadis dari keluarga disfungsional bernama Agatha (Valerie Thomas), menganggap cinta sebagai kesialan dalam hidup. Hingga suatu hari, takdir mempertemukannya dengan seorang seniman tato berjiwa bebas bernama Romeo (Morgan Oey). Kedekatan mereka berkembang menjadi keintiman. Namun semesta seakan menggiring keduanya untuk dipisahkan dan dipertemukan dengan cara-cara yang tak terduga.',
            'duration' => 0,
            'director' => 'Emil Heradi',
            'writer' => 'Titien Wattimena, Lynda Ulviana',
            'cast' => 'Morgan Oey, Valerie Thomas, Zulfa Maharani, Tatyana Akman, Fajar Nugra, Donny Damara, Widyawati Sophiaan, Unique Priscilla',
            'distributor' => 'Adhya Pictures, Cpm',
            'trailer' => 'pvIWe_bqWus?si=yAPXM2OA5mO3HSaa',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14RDBK.jpg',
            'title' => 'RUMAH DINAS BAPAK',
            'genre' => 'Horror, Comedy',
            'synopsis' => 'Dodit (Oktavianus Fransiskus), Ibu (Putri Ayudya), Mbak Lis (Yasamin Jasem), dan Mas Dewo (Elang El Gibran) harus ikut Bapak (Dodit Mulyanto) pindah ke rumah dinas barunya di tengah Hutan Jati. Di sana, ada sebuah penjara yang konon digunakan untuk menghukum blandong. Tiap malam Jumat Kliwon hal-hal mengerikan terjadi dan semua mendapat teror. Termasuk dua anak buah Bapak, Sugeng (Sadana Agung) dan Kasno (Fajar Nugra).',
            'duration' => 0,
            'director' => 'Bobby Prasetyo',
            'writer' => 'Evelyn Afnilia',
            'cast' => 'Dodit Mulyanto, Putri Ayudya, Yasamin Jasem, Elang El Gibran, Oktavianus Fransiskus, Sadana Agung, Fajar Nugra, Rukman Rosadi, Fatmah Faisal Nahdi, Ega Al Fariz',
            'distributor' => 'Starvision',
            'trailer' => 'L7aWQUvaXlE?si=cICh7DNBCYOrXL49',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14SMAT.jpg',
            'title' => 'SAKARATUL MAUT',
            'genre' => 'Horror',
            'synopsis' => 'Pak Wiryo (Yose Rizal) dan istri pertamanya (Retno Yunitawati) mengalami kecelakaan maut. Istrinya tewas di tempat, sedangkan Pak Wiryo jatuh koma dan sulit meregang nyawa. Tetangga bergosip Pak Wiryo bisa selamat karena ‘ngilmu’ dan punya ‘pegangan’.Saat Pak Wiryo menghadapi sakaratul maut, anak-anaknya dari istri pertama (Indah Permatasari dan Della Erawati Dartiyan) dan istri kedua (Maryam Supraba) malah sibuk berebut harta warisan. Bersamaan dengan konflik itu, rentetan teror menyerang anak-anak Pak Wiryo. Satu per satu dari mereka diteror Jin mengerikan. Apakah itu jin pegangan yang bersemayam di tubuh Bapak?Sakaratul Maut, 1 Agustus 2024 di Bioskop.',
            'duration' => 0,
            'director' => 'Sidharta Tata',
            'writer' => 'Agasyah Karim, Khalid Kashogi, Bayu Kurnia, Sidharta Tata',
            'cast' => 'Indah Permatasari, Della Erawati Dartiyan, Claresta Taufan Kusumarina, Yose Rizal, Retno Yunitawati, Maryam Supraba',
            'distributor' => 'Rapi Films',
            'trailer' => 'so2K08Prul8?si=7lf6iKDJjR63M2XI',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/24TARK.jpg',
            'title' => 'TAROT',
            'genre' => 'Thriller, Mystery',
            'synopsis' => 'Berkisah tentang peristiwa misterius dan brutal mengenai takdir yang terjadi akibat kutukan kartu tarot yang diputarbalikkan. Kisah ini terungkap ketika orang-orang yang menjalani kehidupan biasa tiba-tiba menghadapi nasib buruk berdasarkan prediksi kartu tarot.',
            'duration' => 94,
            'director' => 'Choi Byung-gi',
            'writer' => 'Kyung Min Sun',
            'cast' => 'Cho Yeo-jeong, Kim Jin-young, Ko Kyu-phil, Park Ha-sun, Seo Ji-hoon, Ham Eun Jung, Kim Sung Tae',
            'distributor' => 'Special Movie City',
            'trailer' => 'bvDArsKoTOE?si=xIgLryAl5IdEJKuL',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/22TMMY.jpg',
            'title' => 'THE THREE MUSKETEERS: MILADY',
            'genre' => 'Adventure, History',
            'synopsis' => "D'Artagnan (Francois Civil) terpaksa bekerjasama dengan Milady (Eva Green) untuk menyelamatkan Constance (Lyna Khoudri), yang diculik di depan matanya. Sementara Athos (Vincent Cassel), Porthos (Pio Marmai), dan Aramis (Romain Duris) telah bergabung di garis depan untuk menentukan masa depan Prancis.",
            'duration' => 114,
            'director' => 'Martin Bourboulon',
            'writer' => 'Matthieu Delaporte, Alexandre De La Patelliere',
            'cast' => 'Francois Civil, Vincent Cassel, Romain Duris, Pio Marmai, Eva Green, Louis Garrel, Vicky Krieps, Lyna Khoudri, Jacob Fortune-lloyd, Eric Ruf',
            'distributor' => 'Pathé, Chapter 2',
            'trailer' => 'P1HfovIccgw?si=7e04eGeefVThZQlK',
            'playing' => 'upcoming'
        ]);
        Movie::create([
            'photo' => 'assets/images/movies/14UPI2.jpg',
            'title' => 'UANG PANAI 2',
            'genre' => 'Drama',
            'synopsis' => 'Setelah Tuming dan Abu berhasil mempersatukan Ancha dan Risna di Uang Panai 2016, Mereka setelah 8 Tahun di 2024 membuka perusahaan untuk mengatasi problem pasangan yang terkendala dengan Uang Panai (Mahar) yang sangat mahal.Sebuah kisah lebih romantic dan comedy di kemas dengan drama anak remaja zaman now, Mampukah Tuming dan Abu mempertahankan perusahaannya @Pattumbu (Anca Tumming dan Abu).Temukan Jawabannya di Film UANG PANAI 2 (MAHAR/MAHAL) di bioskop-bioskop seluruh Indonesia.',
            'duration' => 0,
            'director' => 'Nicki RV, Mohit NV',
            'writer' => 'Elvin Miradi, Gabriella Dwiputri',
            'cast' => 'Tumming, Abu, Diny Arishandy, Rendi Yusa Ali, Ikram Noer, Nurfadillah, Mellong, Bimbi',
            'distributor' => '786 Production, Rumpi Entertainment',
            'trailer' => 'wfR2Fi20at8?si=VzQkB-1rCnWNt0XW',
            'playing' => 'upcoming'
        ]);
        
    }
}
