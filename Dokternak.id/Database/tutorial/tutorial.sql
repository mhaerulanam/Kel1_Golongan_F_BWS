-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 10:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dokternak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id_tutorial` varchar(11) NOT NULL,
  `judul_tutorial` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `icon` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id_tutorial`, `judul_tutorial`, `isi`, `icon`) VALUES
('T01', 'Cara Daftar Untuk Dokter', 'Pertama pilih menu registrasi, Kemudian klik button Dokter di pojok kanan atas, Setelah itu masukkan nama lengkap anda, Isi tempat  lahir dan tanggal lahir anda, Pilih jenis kelamin anda, Kemudian masukkan No.Telpon atau WA, Masukkan jabatan atau gelar anda, Masukkan jadwal kerja dan jam kerja anda, Setelah itu isi deskripsi di tempat yang tersedia, Masukkan foto anda(ukuran foto 3x4) dan foto sertifikat(sebagai bukti bahwa anda adalah seorang dokter), Isikan alamat lengkap anda, Setelah itu masukkan akun gmail anda, Kemudian masukkan  password anda, lalu klik daftar maka anda sudah berhasil terdaftar', 0x89504e470d0a1a0a0000000d49484452000000e1000000e10803000000096d224800000096504c5445ffffff4687c7ecd7884084c6ecd6853e83c5f9fbfd3b81c5ecf3f99cbcdf7ca6d56399cfc0d2e9ebd683aec9e64888c7edd98d8eb4dbf2f6fa307dc36b9ed2fefdf9f9f3dcf0dfa2fdfefff2e4b0f4e8bce5eef7f1e2aaf6ecc9efdd9a5491ccfdfaf0faf5e2c3d7ecd7e4f2faf4def6ecc7f7efd1c3d6ebcdddee75a3d3699cd0f4e7ba85aed8dde9f496b9de8cb2daa9c5e31e76c0170ceca000000d7a49444154789ced5d6d97a23a0c1e850a088802ea282a38ae0abe8df7ffffb90b435a5191162888e7f09cb31f7605b60f6993344dc2d7578b162d5ab468d1a2458b162d5ab468d1a2458b161f8f9e79d6aea3931d22f8fd1dfc38bddebb87c413676da4224b4248f80342926419f665efbc7b605cf0ed28aa1172eb3c4240821168f2bbc7571afb7e477a6647584ac665f3ee219681b9775384770f24049bef770fb428362a95df1fc7ceef67ce5539b09ef8456a26fcf3c4115d3f50b3fa2e7ad02b9d8e6bdba74b601f0cf87b8263ffe3f4aa92d42f82e59eae3f090ebdf3fe1a18c94b10f2df37d802304f37010ac8ed6fcc6765d293f7819194f3e00d032d0a394037f11d06aff5c8593124c250bad438c472700e842052b56c1d622ab7f58a46350db034544404a898d4ab9d8088117d8614cd3e26886c367f4533b0ca91ae150f8e0b2e98a064d3051863e31231ee2b1d1b170cf060ad1cf230896a42e7ea86c6078e81d7a092e7b61ea688fa0df76ebe6d18a9948b6048b15ff0c6ba31c0a218e5dd2ff45c503752a3fd379968d1fc73edec7ec23c1dc52214dc2272f8011d2534589f9e41cd20add0ed7dfc7e380f8b237e11ccb362b7cbb0140bbea01a20839a318a865e06562cc4a0a92b51011116d6f7df8758885243f78ab21a8fcf6275d69ea1c1343d711c1647ec51e93dd037bc24a399363110caadc208e0d5a246eef7bfb19a2813fd948d06eb1a30d85239550f3e43a7f85aae0eb02f94cabd7d0d35569b9ab1a61782928f314aababaa001bc3d27188589b0a072e83e28abd545e9346b8c6d3b490ef5e2dc0a171cb1eb26c62956c346f21065c966138db5d1e2ab90af0d21072acb19a17cce84108a2bc33728a2743c11d5875703abcec586c570595c3a0b8c2877d45791508aea9c161505cf1537ae784a1c50cada61dee83b7659467e803430e83e20a60e896df1360864d33f9fc189e63936f35ed00e3ca8da1dc5086036e0c9d8632841812c775d83886ada6614653adc59e9bc5ff69a8c5f7b931c401450e83e28a8dc04b3f60bbc361505c21f3de5b342e50f3cd7b7fd8bca30bd8e397ce6a32e37048f103acca6073da9ae3384df34e2e46b0352f6b10cff174ef342fd6064abe749cd3e71477e58f8dc4e7dde3304df38e6678ad1f9b53dc953f7a01175583a392cd53a5b7accb724ff11b9cab004733563915013e1b6ade3224d18772f30bcff502797135c085c19579fd67106133b3a1e17cad9425bb72b239d5003650a53c4a955bb8a70a98b65076efeac7126ce229fe1f609a5ac5a718cee7689ecb16c3891751f1741fd846375493468069da292a02d0330dd5a41120e056d4a9c419b49de696949aa00a856242849381a6e65efe418195782a12ec3461ef5b7892d701c8d92ae638832245bfdc87c51360308a04333620c1c61d58dc83a4dbe7776cf09d8d4b3379c0d502b724af2448cd5b93576104d8fee40eb480bfd6cccdfd3d7e60ab2fe48a0df7c0cef048e6a81cb850ddca53bef4fb01354f040ef64c7224505e71655ebf69a786a9f041d908cc330e12aa3a42e9ecd49a80f3ed91cd3660ac653e638e46c05be190228b14cfa47af433caf123c886c02ec533be586874f1e80334527c1ed0a4b8c112148c0f59843134eca1203b5b3bca886899a6a50851a090ce0ad95e98421a143433809881110c3dfb30aad7c7c6f353d4e80dbd919083a1f053d7b878c26067f8216d5b1e9183e107ec28d2c09fa137d96de7f3e3f138df2e27eb31975196014f86636f725c75bba2a863886277b8d8bd97263f86de72310c39751f21eae2f4b8e63ae85cc8612db2c23ae3dd348d1d21a977e76f2269e660f83a4a3edeae5ed303e8c3c53b383ab0c1a094d9c14e4b5252bd6e6fdba5f28b2539ad9b634fc30e3525fc89436c829ad2e373b7d21f98849332523662a468ee7fe9cebc8ab8a4423be0be97b4f27cd3c2bb5fd47ff04cbde99dfc4276e26a719c2f436c8fb3e950bf5f9efa705721a3fb415fd544034f9a434d9a9f7584ce21b9bd580e13028cc86dd7e3846d188fbddd6c354c9014c58557019d276c466ea2a7a54575c74c9b50941247abe3d98d5f382f67132fede6f17a9ee4a8affef123920e67e00ac97696e8428f9dc998a290d82daf132b505c2db3ecfabf4557bcbd8b2d0716afe19fdcbbaec882a4b00407e5d3dfa24deef1d7433268bdbbf3280f582716ac382bc3200bbd8d2249775d673be8c0ba6bdfabd25d1ece8e684a7dc82494902379238b4a1c397370df6c35528d86c61ea09715c1ba790693dbc29a7a6c0f182f8918f545cec1d361ee4fd243cf6e41b207f90267f2cd31d8dd6c5c0efdef1131729662cff955857bf1759011f8c50f58d64418ab5c7eca78466e3c16fecf9fe068b6841ec5e72a65a2661e5632fa34af2896448a9c34aae9f78d477ac8ed97105f88f14ac44a31ff5cdb91b733293306c0f9aa3e2e3e64b983b241cf39c8412ca42f26f8f50cbd92e390355b78129f3a2a1fd3dd6182afcc9a868c101df5457c1cab61715a6a188ef2243ec90af61c82f2639866faead5148d83e9c22b865f5b78457a7137dcdc07d6033f4908067c0ea7c1191557deab2b680cc9342f3a4f4de5f17b07e15f2f1b4e87ef6b3c475f2b0a2ac32f5055c50cffe6f4f0b11141324e3fdccec4c65391aaece90cbd21ccd3dcbbfe9effe899a18e7a95391ebcef4498a319d7d019626d25e6756d6edb7622be0be7e3226c0ab35e3e03c32f980a1973fd19df9a7affdd0dd4b13929971b263a83cfc5c2703dcc6d31367deb7edf87788b2fc2025661e6e46261485432eb4a342f77ea050979f70d6c58838298675ec5c4d0137379e0e6eddb05113febe457935000866c98fde2991862210e99748da926142872af95a513c07ba74421d818e2f9c0e4d85c8804c38dc3a0baec56b0f6342bc6c610d43293fbbec74b50900e95b6c18b2769a62d8cc0c870c93c4d7163df8ee0523ea75212e0cf50f7ae8c0c3dd863d04da286b3f07e2bcefbc4be164dc13332647d612443adfa73f6094c52dab4626408bb28fa4284aadc1a3addcf1947c4ca1076fbd48588930cabcf578a6795489d55ac0cc7602fbceccb4c288139549f34182f439d7ab2c2ca90f181032e0dac59805f3955bb33338cbd5c7d9979d1f7098a3caacf9f07ed4eb75fcc0c8f3a83970b8d20eaa8258b03dd77aa74a0a401f2e0dc4bda8f97c46a8a6d3ee5280aba6ed5917d1dab3e3119e656a53460170ba5fdf85f62b2ed5894f3a9bec6d393673fd2be8f78b120d969ec9fceb00b8e27692d6d4676dc19ae19183a1ceaeb59f11e86908e5eb295071bf8336499a53855bb8e5aab144d73806f5c3f00c8a4fe966438a16b1ad252a78e52a4146b71e9a701beb56304693f264b1f18ac85ecd6b70cd32c7e2f0ddfd8e23ba93f279e18bbf299c128e8e75b4f2dd25bbc36add6b66243a6284d0e8671a426f330f8c2ade72a0ba62c8ef217dfdd935debc74278ef80d70c3b60503435d5ff5714c5c8cae7a8b9432344a228116ff64814289aaccd936fd4e7d17c912c13ea42648d26c2f15396a2d16aeea472e41a11de314484712fcbba18e2d3432ffb32468610d8caf44ae3ef51d6f80134b613317e2733e095a2429d660a6106d3d4cbbc8a8de11c6c45d6b3a08d438d2d9be0bd5342a66c27a420c2cc200dfefe597ded7c71ae8958fe94fb084fca0c96421d449db59da0ffb24f535818625391ad97f1cea2ce6e3190d49669f559182e74ba9e210d8b6b6d2c06c79a7a968e6760f80f27c7657b80eff8ea12ce9e15331c1b96ac2fb03b6c4716f57e570a67976668793ac30543ee580430f876b1a116c5823ac1a80c718229d5877f0f437cd6fd3aeb8ec6102709d3cfb7edf77ca100a7dbbf74deb4ffac08afdc65701be873947cb0b1ee862aa4644d7cb1b3eb9931d29d49522f459da3e45446388c06e5ca0b72624c0a0a0ad44c10822cc950b8fd8a106505bb7dc53f3b2fde1b6740ea6491e29e092ed37b3501ee20e3ea55e029755cbb7f19fc9c2b9fb693a2f54bdb2ebe912db1547928668a8e0a90245996e40697abbfd9387245649764a40c294d04de82bc19c67222d37da27893289204c35583fe49b96afe99f73ac5262d9c74475631fe233599f4781d867390b2cfb7a2d31ee94fac56c755fb81a20c34cdf7fdf3f92c9b665e0127ef58de2a48d90ab443018a392518a177753b88f5102f621b2174f45cd7554304b66d9f46217e95c12b28bfd105e195c14155131da077a4b457ecd27b0978f35bd9776684f419a63fe8bb968484bc8795e4440ffd2135e7e00f7f3fe36b13eec53a31667d3ac91af57a7eab740e3d85dc156fdf3dd9574e07d7100a10cd89642bf65b496854683f9c7ba9231f7bbb69829f58a2e980b3f9195c0257b2a2d72e54453519151a1f931d1344713a7face91eafb78b64357edea2d3174c7d4df9eddbaa6bc4543953bcfbf6fc7a95187dd48ba63b9cceb6bbc97a3dd92de78be1df3f252ee8b2d8794698b2b3f1f7d7d149752337385e4fc953f6c2b8ebeb3a9eeb8f9d3f7431d163e8fe171e024c87e3f83f83eb6574ea076a285b23a62c2136d2378514dd14de3b4a9a19efd87de0988e901f8fba580abe7ba62c3b8eb3d96cb4d0104466e2101a0cd5003c50837f54c34bec7e78f125bc29bcf5fce016ae1722b5438d28ae76ef6f8b157aba7760bfcf9baf1e27ebbdf886b31ae4572dc6ff66c3ee53cf9d78590ea7d4b6199f81d032cc56a061fe10a99ce1b305f96c8cbdf5723e5b4c23cc8edb89376ec2e26bd1a2458b162d5ab468d1a2458b162d5ab468d1e219ff03114be70299a178250000000049454e44ae426082),
('T02', 'Cara Daftar User Umum', 'Pertama pilih menu registrasi, Kemudian klik button Umum di pojok kanan atas, Setelah itu masukkan nama lengkap anda , Masukkan akun gmail anda, Pilihlah jenis kelamin anda, lalu isikan alamat anda secara lengkap, Setelah itu masukkan foto profil anda(Upload di tempat yang sudah tersedia), Setelah memasukkan foto, langkah selanjutnya adalah memasukkan username, Kemudian masukkan juga password anda, klik masuk maka anda sudah berhasil terdaftar', 0x89504e470d0a1a0a0000000d49484452000000b2000000b20803000000d154655a00000033504c5445ffffffc92827f1c9c9d65d5ce49393cc3534d04241ebaeaef8e4e4fcf2f1eebcbbd3504ff5d7d6dd7877da6b6ae7a1a0e186856412e7200000048849444154789ced9dd996a3201040238b02c6c4ffffda69531017367568a83ea7eedb98b1731b91ad28faf1200882200882200882b8856283108cb5d6388d99646719dfaab5cd0986bedb3161977e8edd11f96e2d9564909ef10f2fddda2bce10125eaa345ae7d5587221c434a2777e3a416eec1535bb8a3235358b629b0a6936d714b7ce267a5b4384357eee2f4f70b96f239544cba0f1d779682195e60d66814e7ac45acc20f60a7cc2e097f18abf353ae105afa0a8ad94038a720c7e06ed35af6c9405da8b39f8998217b3b25116916a7da1d2d415ca2362edc50227e53288547f81b962a45e3f747d094b68bd7136723ada5fbb8e11df7cea152d4a83b4c3765312bf2c759fe818dbd247069f1cede0d315b3dc57670d150665217f8b733764636e2106e762977273d3de2d6b19f75be01b795a58f765e4f38bafff443ac17ec4975ef01a3f1ecfe00257b81bc7826b2036f4289730b630be171648d7b67628e1acfb097d09af28c6fe50dc812008822008bcb01ca8c2efebd02d0d9a811d3be70b4804c3e7c0342423ddbaa45970b297a6ede43536a5c6ebbc59b8e879160ccefef2501a3339e7668b47a145b834dfad478d169bed52b7bf3c9b40db826e1485186f15987d344da6df765fced51088ddb7d1e40d9ce1cdbb7c1f348c4d22da502f6ec41364b39a01f5e2c690616ad5ce4155be1302819ad1600597dd6eaceedff99fb0db8f9794af7e3129ff2ea45c0352ae0129d780946b40ca3520e51a90720d48b9065895157b0b0f589945a96ca6431aaae3b3d6894f598b88efc2f840a86c12c2dd27130099722e32f642a7acfdcce41df8eab25a63799fb4d923835ebf1887f25ac63c1508c5a4ece24c637ad11a91b24de8cc0633f028bb8a9c0d28e051b671b9bc0a1a65d5057fdec05fc757118d3224944915b87a7046a3dc074564e03bb028db88e931ee1ffa0e2cca10dff2f2bf312b4390d70b4b9755861d06a5e27ed0f379dd5e59e5f9f69d2140d90bf29655eec3e5729348f6715165bb85aad47eb90aca36c93274c4c32d2a28db1141b1bd0d1794cd3d656b5c2ec9f2bcb29d085c54fe9e56536e03c94e99c1bc69b29bf2e46e9f9e1da35edac0b99e09547033c656d99e909324beb368f0a68c7c5d6728997bbb553eb301353a11985377153d2b6aab7cc2383ad952a9bbca9e22b6554eaf172dc46b248bdf54faacb6ad72380f75fdea29b10d5147ef2d7e22deaec5d0df9dff9fabe32e1920f370c31b9bf9bbfcb6f60b5d49067d4c7860ec7776d39653aec625651cc9a917949f3f2d4a8f20bde582f26709bad810f23e1794bbf07fadce9f553e335dd5585a11889178839d805eb310e91118707aa39dde7fd552a7415505cacedb27bf4c9a0eb9187df87934a00b9b2871c8cfb1433504edb2adccf93406784f519cec63337272635a13791a4d889df1b4c30654901cb77626f1c945067114f237ec977076e964286af2828ba245e768469e781075b15523120f5ef381b1548b8575ded6cf66dbf22a36afd36e5ca76a9d49a2c565bc56d7281253ad00543a837dc4f3e66d38fe11810d3dbe22b60ce10d461cadf08236826f965825e7c2b43fc5802008822008822008a21aff00b7721c9c280c7d670000000049454e44ae426082),
('T03', 'Cara Konsultasi', 'Pertama pilih menu konsultasi, Cari dokter yang akan anda hubungi pada icon pencarian yang tersedia, Pilih salah satu button (dengan hewan yang  akan anda konsultasikan, Masukkan jenis hewan anda, Kemudian masukkan nama hewan  anda, jika hewan anda adalah  hewan peliharaan, Setelah itu masukkan No.Telepon anda, Tuliskan keluhan yang ingin anda sampaikan, pada tempat yang tersedia, Sertakan gambar hewan anda agar lebih jelas, Setelah itu klik kirim', 0x89504e470d0a1a0a0000000d49484452000000e1000000e10803000000096d2248000000f0504c54452a2829fffffffbca0c000000ffcd0b242223272526afafb0e1e6e5151214221f20e6e7e7ffcf0aecefee201d1f575858424545212229cecfcf6a5924c6a3164e4b257679786869690a01079ca1a0907c1e1c1d2af3f5f4d4d9d7343228e7be0f3837381b2029d9b11412172abd9e15534a26dedede393527717070939293514f50312f30878a8a110d0fbcbbbc444243484026606161c4c4c49e9d9e0f152ad2ad13b0921a8083828b8d8d000f2a87741f00002b353535969898a9aaaa403f406f60227b6921433c279e841de3b9102c2d2860542498821cb396182c3227081929a88b1c7665218e7a1e16151e35301d4508f32d0000136049444154789ced9d7b7bdab8b687ed188bc806016e864b310dcd85e16628d094a43b40a74d66b24ff69cf3fdbfcd916d8c655bb6245f02d9cffcfe9827cd80ed37baadb5b4b42cc9ffed928efd0085eb1fc2f7af7f08dfbfde90d0c4aa3ac23fbcdd6ddf80d01c18cb72793b9a3687ad85add670d8bcdf6ccbb3a5a1177ffb62094d63bb1e2ec6bb890a214248c35255fbbf08e15f80c97cbc18de978d429fa128c2aadedb2c80624184990090a80200e322d85626adf2402fa8e716423898ad5a7d0b6a316014540dc2f97abbac16f030f913eadbe17882f8e90e94084d6acd72eecf932fa13958cd15a8a9c2787b481577d95a39dffe9a27616f3bd4a09a0ece976af5d7e51ce7d8fc0897cd39d2b2e2390248ad4d07793d574e84fa566da3947d93261529e3593e0d990b616fb48339e2ed21e1789b4743e640386816c0e7306ae369f6492733a13154f2ec9e214608efb3b66346c2de5a4245e13902f0719b6d3c66223447f362fa6780511baf8e446896dbc5f3d952adf932fd784c4fb86c1537fe228c6a33f5704c4b688e26f92cef7c02709ed6624d49389bbc4d07f585bb6aba664c45a88fac37e6b3a5f5b76946631a42a3f6961dd4970a162910c509cd8d92d97f482b24cd8a271c0c8b5de2930554613b4e94d0981f13d09e548782268e20e10a1dad877a4293657184e6faed16f978a95068691421ac36e1b1e91c0169530ca1313e0d408c68092c1bfc84bdfe715641aa04e61b6e42637e4280d8c059f0468f790967c79f44834288b315390997a7308906a58df92c713ec2e5e389b5a02d6dccd58a5c8427d7455d695c1d9587d038bd2eea0ad5381039087bf3936c415b1ac7bac826344e691d0c0b8db31356c7270c8897fe35ab155984e689d8a2b15259c15406a1b93e71406ca36e3311ae8eebeff208c0e45c8e64c2935d274869c96b4622e1e074d70952709834db24119a470d3a09088e52126ede0960f2504c203494633f39b7d484887f3ca15e7b1783d0158a5ff8e30947696d19d0e0557e1335d06283e1b184332bedcdbe7ce0d5971c1195b8a8461ca1394979f7c68fa70aafae7e347243444d41c2515a6bedfab274c6abd2e5d7dc0841dca64d0ce12c7513fe56e1063c3babfc965f23aa73ba694327345b6997c2e31162474a80b09c7aad3f22a1645117452aa1d94e3dc91d93505b7013a69e668e4b0826b4c98646d89ba75fa78e49480f4cd108b3f8f541c252e9f04329f443118412cddfa7101a52065383242c9ddddcb8ab63e5eae6c2f9a1f4747373562a8c104cb8083379850461e9f28fe7e72f4f98a772f3f3f9d34707f0cbf3f31f9785114a56747b384a38c8e434916df8eb1a80ee9f98ebea670380c60b66fdb30bc0f5af5261846a742f234ab8cee4f792847f74f1bf7123962e3ee17edffd552a5dd9b676f78fe2da5052238d1821eced3219fc24e1dfd8ea6cdce236bcfbd990c0e76fa5b3cb5b4cf4f5638184d19dd3086186b5d016390e9f3e343e7fbab3c7e1ebf3e7c677fb57179f3e373e3c15d74bf1480caf8961423d5b1306e7d2cb6faf77ce3f2b37af2f2ed2ddebb7cbe2e652c91e890cc26dc61877783d0c2f83c5ae87b6da8364c2b447963c1dd5a6711476854384cb76c6eb1f9f301c770b1136b386488f4f2869e504c22c36b7ab53200c2e1841c2ad781382e0c88d12962e13c4220469e605ad174b680ec562a42a54e0aedeb7da7eae4694f0d76d829e4140c1aba3b6f558dfe17b0886a683db1801c281102040b58dfbd7eaadeb5ee387092bdf1f1a5df0294ebf0725114d8aeaebfdd53735b14d3ea0c512ae44164375b2f1fbfbe0de8a21c4c6f77f5e2e38f5edcf03a2451ce9aa6e2642cda8901b35014291ed42351432e8b80714c0cf10e143e3b7b34a89574fb72e22b03a81abcf841011d94d49425dc06f02c1e16c3f84eb387fbdd89b2dee23571eaeeff843c4d882ed3a578f84777b2287c3d51a11cd2009452c36d891c372dd2ef0e5dbdd930df87465ebe9faf3950061e9e6da698468e8b32330cd833e910a4e120acca48892de69baf65043fafdafca59e5e5f68b23908650894694aa0b81691011f11a82703016e8ebb4b8ddc8fd3383afd87bf8feb5b15f005210425a1ef74ca09b6ac4ce3e4128b057a18ecf29cfd073ffca8d0f95cbeffe964b0a429516bc3e176800b0f3831904a140ee8cd6a23c82acbbcf707d71f98158d7c40929c1165b2d816e6af9eb854f5815b8029ad21ec16cda5768fcb8fb4cda62e2845a93ba653d15986b8807f409f53e7f4747f754426736053fbe048ccd206129fa53294c18b3297f2f40a8ce298486c0b6760ca1d38652c8bc24092b677797ae4550797aaab8c1e2cb2b12db21ccde86924221dc08ac86f42de52a357b83247c693c3ce0a504fb1b3ffef5f06f2760f3fd5f0fffe3db04ee38ac51f7e485dc027f20fa8422eb0dfd1974ea64ec13969e7ee2fefb60fffb17365dba3ff0af5e801d71bc0c1082096da6a1fffde2040f49993e615ca9239ac023edfc5899da0b08c28b07c98e0c57ce2eed14050c563afb8851c1ef17259250a21edd5a3e8a3818be557420348582f9d4c980be9e128457f65ff1e106fffb3b06fbfc01ffea751f170f10d236584cb158bc7ad8683b108a4c34b6691c6dc42dfd0ae438fcd8ed5effb0c7e1d5edd76b805baef4f4e1a1fbf55b701c52375896623b62eae1bcc981503050aaeec28f10b71d10582d2efeba71c7dcd3ebabf3fbd2e5cb5f17a1d5c2b649c29e8bbc1373f441df9b6a0e84a21b32a81634dc6253fa0384a58a1719aef83f95228492d60f661b9ed7442348aa67391f08456c22f7216aa4f51defa2a6f12dc20ef64cfc7c3cdc86084df14c446db2f6fad27228c57e3d1d21beded01beabd758a0a1507a3c42314729df6d740fdfae2bed3992e9095e081a7249480d65617d34ee77e51ef23f12827f21c288fd010dd7302a8b535aaa639587616893532d212daa9bf8bd5f2dc34abc656bc8ecac128f1089782896cc8f24bc6546756422f4a4da859b383e5642e2dc166045e9a9b475816eba46a2b60b625e513a725541701dbadda125c2ec02044c8b51c6afb9a7391bd643d7e18a79d69c2a728bc408dc659f70e860879167c4d594c874e6f512261865eacd12746f8e2112a9135df491241d670ba507818db469070c4eee6aab3c69b4d400bf6c9dbb8bb765f0576a32adfbbfbbf2625bb091b25c0711dcf7996366f437f4f68b2dd4bb5ee369cb9d068c71bccb8ad47f07cc79110ed587095b397dfdd098fea041bd04b5c1bd4d9889e8322319ecfd721f451b61e69fedb79dc5d1b3ffff3f74786febeab6073fcaf1f7b40b54e8be5e98f078b9cc3dff73c448f90ed401f9cb673a54e8d85f5e2d62cd0e832d578c546f86dd7bd4274cbc025ac2b1e38c7c4e86d5e78846cb394492877329c74038dbfcf2abfba7b40fa914241c26980902366ce2694a719525540f7fbd9d9837b276aac5298705d00a17c4f3ac1026111e7a3d7b74fce4c6a510379d9099993130fa1bcf64c5480607dc7b93dadc25d1de21edebd7d7dc6c6283de55e9cb05908a1d94110d925bad5b5a1ebc6238f31891eed8faed536fcdfff7b86a8137b462b23612ebdd4616c0ed7abfd82c93181495a6b8f64acd6c3663c5fd65e9ac75c4a91c1dc2a007deea2f39908f3580f696287716302dc3910debf09a1c91cdf2a7fc92741c24d90906db5a522641b909eb99b3b61c86ae3d8ba6210ea543b64cb5e2f54ea173bb45b8811062d6f8e9d27162165e7d6ec70543905303a7f62873a33a1b50c12b23d6016e123eaaf4883d934b62d3e2b0eb6b60609d95bf511cd7d11236cf78284ecf3784c420050bd59769fe1bc3c5d3c42a8f209c2c7c574e67db359d700c84e188e62b07339d8848eada6b45509294a7d5c13d25852140501d4566cfb4dca4e78d884e48f26f210bad7065aadac57c5a41b76219c83b19e0361389ac88e087313e20580eac0b2441633ca4ea82e4211e18470a0302164d4c489d1807882ec848748cf616786697cf013b6533561e08f9c03a1978179d85d639ec97b678491dd35b651c3229ca0bd346ae21d5b069280e65d84968e21b65a44764899df6111ae9b7bb5287bd41c326b1a9ab4bc8bac3312825d6497db609d966159dea6a7ea60d1172f826fb4a0b538af1eae42f988082125534166659b88f81653bc705b96a5500fc887b451f027f1a735352e029586d0cf9ef409594b3e4148cd590a3c8b3b69d0933443ea40efafcebcea849f909231c44c5520081915d2642fb3438890b6dd139401f909fd35d927647d8920d46a7c8f2d4448c98d0fa9a6f113fafb7f3ee1809f904cc1a56b6909135aac52eb8625f1135a87af1119b48c736b24a1caaae1db6b0b13b2ec043b5b849b90382beb13b252e34842095193137db979804284941308a4967674999bd04fbe2433d91947f30284920a37893d35452f4dfa90b1717608f8096999ec2c179120b4cf51a868d7ea2c7b3d8350cf6f06e75a228444c6a569042eda5b765a3ba4da37e525242b2a11848ce8ad4f08768efafd09f1bfb15fdf2612189c6b8910aafefc3cc05752c80e35e9f7dd5b024e4234a59e28611c02f613770d9a96a30920a65827c22c42a80d0fbf312c30192da977f13ec220248f029384c95f63be5562a9101f71aa4a8a1022df21294385b572243faa6f768708e544e39bfdde8c69dbb72c67509090a8f670df8ed904e6250cdc3740983810d9843d85ec69a284440f8f660b891142b27a7280b09c94ebcd26d4a1bfce0e847ba93f4b8dd9d5e4930903295b01c2c48341f47332a496963fe33b971220047d627e671a70c91109e248509830d1ac617b3735aded13dafe9300217975b6659f1c190cc6fa821507127330d561e25ea6b981925f62d3d9541620d4fc74ceaa22c14da209571d263d27900246739030b1ee2c501327007b43dbb79e9dee2040481c51c1563b63ebbb9758692174da2554f923295fcccfa6d307840e1968d86020a67c7bbb4e809088cfcd2c62f93f276fe57564c67e6ef0046f8830a9d0d7e1f8f0685c2734f63cd72d24bdd8ad601b6ec95f1c465227782b2fca9bb453169e2fc21578e28730f0de065656827b635ea13bdcbb88a39b33c1b9d4ffc3e37ee4f5f6ad15bc95b2bf559293108ed6860967b10bcde1907b383aeef55eec5511e712ed87e02704c4cbd47017dcfb1091b91ded7bef3261596b87a6fc4825acd8466412e2399040b237b30408094b12cfc21e6178bc7110464a7c46aa99c56633f31012c931f6e1727e4262f0d84e5c7ac2686a6a8430f6f00c17a11fbfb18f190910fa952c88784c0ac268fa74b4aa605c92280f61a8b3f11386ba776a424a45e828a1199321c245489c38c34fc74f488483edd20ea9092977a454f7bca737220f215998f15e88d037eb6dcb3135613b6ab3530807f423c55c8430b070f31392a6024c4f183dd94aafb24b9f4eb90889ea3e4b4b8090f09746283521d028e62c8d90be26f2113649039a9fd02f76e850a524a49e43a156bb5ed17c7d2e42c209321501423fe0edb85de90801f52db3f49aecb492585c84c0df3c3d17223c78287a1da42584d428049d704971c098844e212d7f246c85669ac30c6568523ca196440810d543a713d2de45762832104e7af7b28fdcf09a1780b09d6975d163cb09b9f8a70d9d53dbfbc05be4048197504cf52d2cfafbc9e884d4373d21378a518e5cdd8dc2edf3f261d3f9d460e13c789b2db799d0c2996bf6af1cdee7ef47226a40726e55a525ff68316f7d8a21a40616d1ba57d5b7d1e206402d9f578db5f7a95a67365bf5454f5fa3fe0a7fcd2b2c00d646f5bc1c1d2bea6eab577bb480596ce0238e50a6bd1c17cd6b63409b84c0b8b63b7c5e457848889ff1b2bfe35798d476f856948ba8f856d4979fc71d968a271cf469286a8ce3a166adce9bf556da3c0e249650debe8397ca1d0426b1c1b9784273f15e5e4a2625be792d9e5036b3bc23e16d8512de9e974028cf721f5c050968091b0e498499ce84bea100a5241127e13b7901a296f8b2d54442598f2f3b733a4a1a844c4279c971ace7c85261f2f13e06a15c3ef50955ed33b6c45984f226ed5b02df46f4773c0911ca8b939e5015d62b9d3908450bb5bfa580c64c2ee02094f5d335df34665e3117a15ce5aceaf3e682ade48c4d6e42593fcd37c8239e30101fa13c384544949c1b224628eba7d751618bef203f27a1ac8b572e2c54802b522942b80f9e9d8cb4f89738a72594cdf1e92cfd4061af83e284d85d3c158f589d302d997484e6ca3a0944b5cfb245d312da7b112730df202874bc518c50366ac71e8c40e35b06d312cafaf0b83e31b056dcd55ed211cae648f4f54b790a69c2a7538509714f9d67a83c9749000eb92be3642194076b9117f7e4276d3212eca169096573a6bc7d330238e7ae999599d0dec97ceb38a3d6671e33c995509667f3b75c3780354cd5805908657d9a54c53b5f3ea889ae117910da019c14b5d253f0a1c97d6abe6c84b8ab2e8ab75455adc93c42531ca16c6e275691530ed0da3b2343036627c42a8fd5a2fa2a40522b53fbe54328ebe54531eda8694d1137a93842bbb0fe987815693e52617bd1cbd63f5de542883568ceb5fc3a2bee9ee38db8094a555e8498b1bcd0f2f1ac5428ad6739f1e549883b6b6fa429285b30076850996f077974cfbdf224b4658c6a7d94d6d65191b66badb8ab7df2296f42fb651bdbe1ce129f785408e7d3725aeb335ef9136299ba319d2b16445ce96e40d51054acf1cad073ec9c071542e8ca58ad17e3be0a91a6d28b970380d1a0b41bb7d6db9cbb26a10209b1cc8131db8e9a8b39806d0b42741084561b4ee68bf5663b33729b36a92a96d09559d50718b5bc1a4deda26eebf5fd66555ef606ba5e2da25b86f41684c7d53f84ef5fff10be7ffdf713fe3f6a5728bf300fb5e60000000049454e44ae426082);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id_tutorial`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
