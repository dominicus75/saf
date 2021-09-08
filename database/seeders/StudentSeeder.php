<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('students')->count() == 0){

            DB::table('students')->insert([

                [
                    'name'        => 'Claudia Lawson',
                    'sex'         => 'Female',
                    'birth_place' => 'Idkuer',
                    'birth_date'  => '2081-10-01',
                    'email'       => 'jijib@raksovda.me'
                ],
                [
                    'name'        => 'Bess Marshall',
                    'sex'         => 'Female',
                    'birth_place' => 'Jifcawuma',
                    'birth_date'  => '2075-05-05',
                    'email'       => 'zenledma@vefvaizu.cl'
                ],
                [
                    'name'        => 'Duane Colon',
                    'sex'         => 'Female',
                    'birth_place' => 'Murtirha',
                    'birth_date'  => '2110-03-09',
                    'email'       => 'fuibnu@lujopew.cu'
                ],
                [
                    'name'        => 'Frederick Reynolds',
                    'sex'         => 'Female',
                    'birth_place' => 'Kahsozi',
                    'birth_date'  => '2025-09-14',
                    'email'       => 'giadoifa@sunek.ca'
                ],
                [
                    'name'        => 'Keith Ellis',
                    'sex'         => 'Male',
                    'birth_place' => 'Jululfew',
                    'birth_date'  => '2098-11-14',
                    'email'       => 'hi@gefleh.gb'
                ],
                [
                    'name'        => 'Charlie Thomas',
                    'sex'         => 'Female',
                    'birth_place' => 'Urkohbe',
                    'birth_date'  => '2094-03-18',
                    'email'       => 'tufper@wabo.cc'
                ],
                [
                    'name'        => 'Carlos Barton',
                    'sex'         => 'Male',
                    'birth_place' => 'Ikafepci',
                    'birth_date'  => '2050-10-08',
                    'email'       => 'tu@vuh.nu'
                ],
                [
                    'name'        => 'Nathaniel Adkins',
                    'sex'         => 'Male',
                    'birth_place' => 'Fuhuho',
                    'birth_date'  => '2061-12-05',
                    'email'       => 'nubcidvuj@dom.ls'
                ],
                [
                    'name'        => 'Rebecca Foster',
                    'sex'         => 'Male',
                    'birth_place' => 'Lelcuhmu',
                    'birth_date'  => '2047-08-04',
                    'email'       => 'dano@sis.hk'
                ],
                [
                    'name'        => 'Mathilda Wheeler',
                    'sex'         => 'Male',
                    'birth_place' => 'Febemup',
                    'birth_date'  => '2072-02-22',
                    'email'       => 'ras@izuaki.pk'
                ],
                [
                    'name'        => 'Catherine Castillo',
                    'sex'         => 'Female',
                    'birth_place' => 'Vobahcaf',
                    'birth_date'  => '2051-03-21',
                    'email'       => 'vij@lu.iq'
                ],
                [
                    'name'        => 'Lola Stephens',
                    'sex'         => 'Female',
                    'birth_place' => 'Wejebuk',
                    'birth_date'  => '2070-07-04',
                    'email'       => 'cavzufbe@cevej.ee'
                ],
                [
                    'name'        => 'Leila Jenkins',
                    'sex'         => 'Male',
                    'birth_place' => 'Ijasle',
                    'birth_date'  => '2120-10-04',
                    'email'       => 'apiwewag@habeh.vc'
                ],
                [
                    'name'        => 'Lela Rivera',
                    'sex'         => 'Female',
                    'birth_place' => 'Kiibjal',
                    'birth_date'  => '2064-06-15',
                    'email'       => 'boplo@ejide.ke'
                ],
                [
                    'name'        => 'Dennis Weaver',
                    'sex'         => 'Female',
                    'birth_place' => 'Dolartu',
                    'birth_date'  => '2084-09-21',
                    'email'       => 'zowhamlav@mehmu.ge'
                ],
                [
                    'name'        => 'Lina Delgado',
                    'sex'         => 'Female',
                    'birth_place' => 'Togtiic',
                    'birth_date'  => '2057-06-17',
                    'email'       => 'so@maweriz.no'
                ],
                [
                    'name'        => 'Victor Robertson',
                    'sex'         => 'Male',
                    'birth_place' => 'Pidigbi',
                    'birth_date'  => '2100-01-06',
                    'email'       => 'pes@on.ru'
                ],
                [
                    'name'        => 'Claudia Pittman',
                    'sex'         => 'Female',
                    'birth_place' => 'Digcaki',
                    'birth_date'  => '2063-10-04',
                    'email'       => 'koibaca@kalnafpa.nr'
                ],
                [
                    'name'        => 'Johanna Patrick',
                    'sex'         => 'Female',
                    'birth_place' => 'Burralhul',
                    'birth_date'  => '2074-02-14',
                    'email'       => 'coplu@to.tg'
                ],
                [
                    'name'        => 'Ryan Kim',
                    'sex'         => 'Female',
                    'birth_place' => 'Obgenez',
                    'birth_date'  => '2038-12-09',
                    'email'       => 'banfu@ag.ae'
                ],
                [
                    'name'        => 'Lloyd May',
                    'sex'         => 'Male',
                    'birth_place' => 'Haldebjuj',
                    'birth_date'  => '2113-11-09',
                    'email'       => 'katode@koplu.pt'
                ],
                [
                    'name'        => 'Vera Clark',
                    'sex'         => 'Female',
                    'birth_place' => 'Hinaaw',
                    'birth_date'  => '2066-12-07',
                    'email'       => 'anu@tujebo.bm'
                ],
                [
                    'name'        => 'Victor Cobb',
                    'sex'         => 'Male',
                    'birth_place' => 'Rupipudad',
                    'birth_date'  => '2058-12-21',
                    'email'       => 'ga@wu.bb'
                ],
                [
                    'name'        => 'Tillie Dixon',
                    'sex'         => 'Female',
                    'birth_place' => 'Lijgizoc',
                    'birth_date'  => '2049-10-03',
                    'email'       => 'ofike@ke.bs'
                ],
                [
                    'name'        => 'Clifford Wilson',
                    'sex'         => 'Female',
                    'birth_place' => 'Gepajag',
                    'birth_date'  => '2077-08-02',
                    'email'       => 'ruduwa@mebni.at'
                ],
                [
                    'name'        => 'Jane Chandler',
                    'sex'         => 'Male',
                    'birth_place' => 'Ovisket',
                    'birth_date'  => '2120-06-02',
                    'email'       => 'ta@ro.fk'
                ],
                [
                    'name'        => 'Wesley Baker',
                    'sex'         => 'Female',
                    'birth_place' => 'Pujomimob',
                    'birth_date'  => '2035-06-29',
                    'email'       => 'rilen@sazfuptoc.bv'
                ],
                [
                    'name'        => 'Evan Parker',
                    'sex'         => 'Female',
                    'birth_place' => 'Gihbenmed',
                    'birth_date'  => '2091-02-04',
                    'email'       => 'nicje@aralurhin.ca'
                ],
                [
                    'name'        => 'Aaron Flores',
                    'sex'         => 'Male',
                    'birth_place' => 'Guifuinu',
                    'birth_date'  => '2093-11-23',
                    'email'       => 'bedoc@fo.as'
                ],
                [
                    'name'        => 'Maggie Lee',
                    'sex'         => 'Male',
                    'birth_place' => 'Mipioc',
                    'birth_date'  => '2097-07-21',
                    'email'       => 'lepat@kiji.bd'
                ],
                [
                    'name'        => 'Anthony Bush',
                    'sex'         => 'Female',
                    'birth_place' => 'Jajona',
                    'birth_date'  => '2073-02-23',
                    'email'       => 'ju@isbu.ma'
                ],
                [
                    'name'        => 'Lee Thompson',
                    'sex'         => 'Male',
                    'birth_place' => 'Ribowwi',
                    'birth_date'  => '2114-06-14',
                    'email'       => 'uzowe@icsana.gd'
                ],
                [
                    'name'        => 'Brian Jacobs',
                    'sex'         => 'Female',
                    'birth_place' => 'Zadizu',
                    'birth_date'  => '2116-04-24',
                    'email'       => 'vucumci@ru.si'
                ],
                [
                    'name'        => 'Austin Fields',
                    'sex'         => 'Female',
                    'birth_place' => 'Ocdassec',
                    'birth_date'  => '2087-04-16',
                    'email'       => 'fubin@ro.gh'
                ],
                [
                    'name'        => 'Katie Guerrero',
                    'sex'         => 'Female',
                    'birth_place' => 'Tuimmas',
                    'birth_date'  => '2039-08-03',
                    'email'       => 'bivpoac@kerublu.no'
                ],
                [
                    'name'        => 'Mae Jimenez',
                    'sex'         => 'Female',
                    'birth_place' => 'Umiwutni',
                    'birth_date'  => '2027-04-23',
                    'email'       => 'tasem@gandu.hm'
                ],
                [
                    'name'        => 'Marion Swanson',
                    'sex'         => 'Female',
                    'birth_place' => 'Kegoesi',
                    'birth_date'  => '2089-03-27',
                    'email'       => 'pokunibip@ilgesjih.ru'
                ],
                [
                    'name'        => 'Ina Lopez',
                    'sex'         => 'Female',
                    'birth_place' => 'Guasuveh',
                    'birth_date'  => '2074-04-17',
                    'email'       => 'woenaku@reuwisi.sl'
                ],
                [
                    'name'        => 'Josie Hart',
                    'sex'         => 'Female',
                    'birth_place' => 'Jockaona',
                    'birth_date'  => '2029-03-31',
                    'email'       => 'de@nisoc.gr'
                ],
                [
                    'name'        => 'Jean Santiago',
                    'sex'         => 'Female',
                    'birth_place' => 'Wudulij',
                    'birth_date'  => '2071-02-11',
                    'email'       => 'sawbukul@ziupa.gr'
                ],
                [
                    'name'        => 'Willie Turner',
                    'sex'         => 'Female',
                    'birth_place' => 'Lavjolob',
                    'birth_date'  => '2096-07-19',
                    'email'       => 'gor@asa.by'
                ],
                [
                    'name'        => 'Benjamin Hernandez',
                    'sex'         => 'Male',
                    'birth_place' => 'Zamuvko',
                    'birth_date'  => '2099-03-19',
                    'email'       => 'ugfoub@ivfigvik.na'
                ],
                [
                    'name'        => 'Francis Bowen',
                    'sex'         => 'Female',
                    'birth_place' => 'Numumok',
                    'birth_date'  => '2035-03-08',
                    'email'       => 'vub@pa.fo'
                ],
                [
                    'name'        => 'Virginia Fuller',
                    'sex'         => 'Female',
                    'birth_place' => 'Rumatil',
                    'birth_date'  => '2032-07-08',
                    'email'       => 'kidow@irawirlat.ws'
                ],
                [
                    'name'        => 'Lida Peterson',
                    'sex'         => 'Male',
                    'birth_place' => 'Bavizmo',
                    'birth_date'  => '2062-10-18',
                    'email'       => 'ukagesra@sogjon.sv'
                ],
                [
                    'name'        => 'Robert Turner',
                    'sex'         => 'Female',
                    'birth_place' => 'Bolmifug',
                    'birth_date'  => '2114-07-04',
                    'email'       => 'lorzemovo@ot.cc'
                ],
                [
                    'name'        => 'Leonard French',
                    'sex'         => 'Female',
                    'birth_place' => 'Dapigpaz',
                    'birth_date'  => '2053-04-21',
                    'email'       => 'noma@omuosi.kw'
                ],
                [
                    'name'        => 'Carl Rodgers',
                    'sex'         => 'Male',
                    'birth_place' => 'Inimero',
                    'birth_date'  => '2079-02-13',
                    'email'       => 'zo@gaksi.tk'
                ],
                [
                    'name'        => 'Cynthia Gomez',
                    'sex'         => 'Male',
                    'birth_place' => 'Muvetona',
                    'birth_date'  => '2065-06-06',
                    'email'       => 'apzab@wu.sd'
                ],
                [
                    'name'        => 'Belle Kelley',
                    'sex'         => 'Female',
                    'birth_place' => 'Ecomepkuf',
                    'birth_date'  => '2113-11-09',
                    'email'       => 'fare@pe.cd'
                ],
                [
                    'name'        => 'Lora Hines',
                    'sex'         => 'Female',
                    'birth_place' => 'Nezvebti',
                    'birth_date'  => '2063-09-14',
                    'email'       => 'sarbowne@idkite.je'
                ],
                [
                    'name'        => 'Lora Rodgers',
                    'sex'         => 'Female',
                    'birth_place' => 'Nesegti',
                    'birth_date'  => '2057-06-30',
                    'email'       => 'gevicipow@nid.co'
                ],
                [
                    'name'        => 'Ruth Massey',
                    'sex'         => 'Male',
                    'birth_place' => 'Wepoina',
                    'birth_date'  => '2115-12-06',
                    'email'       => 'seij@jiboh.kn'
                ],
                [
                    'name'        => 'Lewis Reeves',
                    'sex'         => 'Male',
                    'birth_place' => 'Gobapme',
                    'birth_date'  => '2065-09-23',
                    'email'       => 'ekidircic@mu.sc'
                ],
                [
                    'name'        => 'Benjamin Romero',
                    'sex'         => 'Male',
                    'birth_place' => 'Fireew',
                    'birth_date'  => '2118-06-07',
                    'email'       => 'hogac@po.gd'
                ],
                [
                    'name'        => 'Lina Evans',
                    'sex'         => 'Female',
                    'birth_place' => 'Ictepruw',
                    'birth_date'  => '2038-04-15',
                    'email'       => 'bolut@ririr.il'
                ],
                [
                    'name'        => 'Bess Jacobs',
                    'sex'         => 'Female',
                    'birth_place' => 'Vufnekfo',
                    'birth_date'  => '2080-03-19',
                    'email'       => 'uhefujos@je.mv'
                ],
                [
                    'name'        => 'Jeffrey McBride',
                    'sex'         => 'Female',
                    'birth_place' => 'Saefci',
                    'birth_date'  => '2076-09-21',
                    'email'       => 've@anowin.gq'
                ],
                [
                    'name'        => 'Belle Zimmerman',
                    'sex'         => 'Female',
                    'birth_place' => 'Casopdo',
                    'birth_date'  => '2082-12-15',
                    'email'       => 'ruonomej@kok.ga'
                ],
                [
                    'name'        => 'Eunice Benson',
                    'sex'         => 'Male',
                    'birth_place' => 'Lajapi',
                    'birth_date'  => '2117-05-05',
                    'email'       => 'izupugip@oz.tf'
                ],
                [
                    'name'        => 'Ophelia Kelley',
                    'sex'         => 'Male',
                    'birth_place' => 'Artiewa',
                    'birth_date'  => '2025-01-16',
                    'email'       => 'ogzoc@kud.gb'
                ],
                [
                    'name'        => 'Adam Bowers',
                    'sex'         => 'Female',
                    'birth_place' => 'Ruhabna',
                    'birth_date'  => '2065-12-28',
                    'email'       => 'te@vi.es'
                ],
                [
                    'name'        => 'Garrett Curry',
                    'sex'         => 'Female',
                    'birth_place' => 'Tasivpo',
                    'birth_date'  => '2073-11-29',
                    'email'       => 'leccukuw@zihaw.sj'
                ],
                [
                    'name'        => 'Eric Pearson',
                    'sex'         => 'Male',
                    'birth_place' => 'Jejkeboz',
                    'birth_date'  => '2042-07-28',
                    'email'       => 'ad@benmatoc.fm'
                ],
                [
                    'name'        => 'Hannah Rodriguez',
                    'sex'         => 'Female',
                    'birth_place' => 'Jabniip',
                    'birth_date'  => '2042-07-24',
                    'email'       => 'rima@voltiv.by'
                ],
                [
                    'name'        => 'Antonio Jefferson',
                    'sex'         => 'Male',
                    'birth_place' => 'Gupvovec',
                    'birth_date'  => '2110-05-13',
                    'email'       => 'furbamri@li.bm'
                ],
                [
                    'name'        => 'Cynthia Ellis',
                    'sex'         => 'Female',
                    'birth_place' => 'Zujabuiz',
                    'birth_date'  => '2025-03-12',
                    'email'       => 'ipebe@jit.jo'
                ],
                [
                    'name'        => 'Fannie Olson',
                    'sex'         => 'Male',
                    'birth_place' => 'Utdaodu',
                    'birth_date'  => '2043-01-29',
                    'email'       => 'kagnisaw@ika.il'
                ],
                [
                    'name'        => 'Travis Lopez',
                    'sex'         => 'Male',
                    'birth_place' => 'Kodtehut',
                    'birth_date'  => '2121-11-30',
                    'email'       => 'wu@pacsisud.cz'
                ],
                [
                    'name'        => 'Elsie Perez',
                    'sex'         => 'Female',
                    'birth_place' => 'Resaguobe',
                    'birth_date'  => '2118-12-10',
                    'email'       => 'va@vukci.br'
                ],
                [
                    'name'        => 'John Reeves',
                    'sex'         => 'Male',
                    'birth_place' => 'Ojpafso',
                    'birth_date'  => '2025-02-20',
                    'email'       => 'laslorje@vog.mc'
                ],
                [
                    'name'        => 'Birdie Blair',
                    'sex'         => 'Female',
                    'birth_place' => 'Jupbecdu',
                    'birth_date'  => '2092-03-28',
                    'email'       => 'vedbihul@uja.fk'
                ],
                [
                    'name'        => 'Ivan Walters',
                    'sex'         => 'Male',
                    'birth_place' => 'Ozwuje',
                    'birth_date'  => '2121-08-03',
                    'email'       => 'bipafa@filirco.pl'
                ],
                [
                    'name'        => 'Belle Stevens',
                    'sex'         => 'Male',
                    'birth_place' => 'Pewsimbu',
                    'birth_date'  => '2089-02-04',
                    'email'       => 'decze@fajkucir.kz'
                ],
                [
                    'name'        => 'Zachary Holloway',
                    'sex'         => 'Female',
                    'birth_place' => 'Gecsotkuz',
                    'birth_date'  => '2081-04-12',
                    'email'       => 'tap@favav.mh'
                ],
                [
                    'name'        => 'Rosalie Stevens',
                    'sex'         => 'Male',
                    'birth_place' => 'Midaugu',
                    'birth_date'  => '2095-03-02',
                    'email'       => 'sel@id.bi'
                ],
                [
                    'name'        => 'Florence Palmer',
                    'sex'         => 'Female',
                    'birth_place' => 'Hiwiko',
                    'birth_date'  => '2042-07-13',
                    'email'       => 'guw@buf.br'
                ],
                [
                    'name'        => 'Lina Harris',
                    'sex'         => 'Male',
                    'birth_place' => 'Sicafe',
                    'birth_date'  => '2059-11-06',
                    'email'       => 'aveur@kapuzpam.es'
                ],
                [
                    'name'        => 'Louisa Osborne',
                    'sex'         => 'Male',
                    'birth_place' => 'Wonsobod',
                    'birth_date'  => '2064-01-07',
                    'email'       => 'kalhahos@howel.br'
                ],
                [
                    'name'        => 'Trevor Robbins',
                    'sex'         => 'Female',
                    'birth_place' => 'Dablibne',
                    'birth_date'  => '2083-06-14',
                    'email'       => 'sanabi@mahomur.com'
                ],
                [
                    'name'        => 'Mattie Wheeler',
                    'sex'         => 'Female',
                    'birth_place' => 'Wekwava',
                    'birth_date'  => '2068-09-07',
                    'email'       => 'izewa@sok.am'
                ],
                [
                    'name'        => 'Mae McDonald',
                    'sex'         => 'Male',
                    'birth_place' => 'Nagepa',
                    'birth_date'  => '2066-03-09',
                    'email'       => 'emuir@wimurfu.fj'
                ],
                [
                    'name'        => 'Rose Cross',
                    'sex'         => 'Female',
                    'birth_place' => 'Lauzzit',
                    'birth_date'  => '2085-02-02',
                    'email'       => 'ogrizil@mutice.et'
                ],
                [
                    'name'        => 'Brett Sparks',
                    'sex'         => 'Male',
                    'birth_place' => 'Toltofor',
                    'birth_date'  => '2068-01-06',
                    'email'       => 'goz@ifliap.kh'
                ],
                [
                    'name'        => 'Maggie Quinn',
                    'sex'         => 'Female',
                    'birth_place' => 'Kadfoizu',
                    'birth_date'  => '2086-05-14',
                    'email'       => 'wabedpe@se.li'
                ],
                [
                    'name'        => 'Pauline Robinson',
                    'sex'         => 'Female',
                    'birth_place' => 'Vagnovhu',
                    'birth_date'  => '2091-08-28',
                    'email'       => 'tepcuduh@rokfu.jm'
                ],
                [
                    'name'        => 'Helen Tyler',
                    'sex'         => 'Male',
                    'birth_place' => 'Juchopeh',
                    'birth_date'  => '2066-12-08',
                    'email'       => 'sadulhab@ta.co'
                ],
                [
                    'name'        => 'Ophelia Burton',
                    'sex'         => 'Male',
                    'birth_place' => 'Digarca',
                    'birth_date'  => '2107-05-21',
                    'email'       => 'dojef@luclobi.edu'
                ],
                [
                    'name'        => 'Mittie Roberts',
                    'sex'         => 'Male',
                    'birth_place' => 'Uslihor',
                    'birth_date'  => '2026-12-27',
                    'email'       => 'guwsal@utipe.ch'
                ],
                [
                    'name'        => 'Maria Elliott',
                    'sex'         => 'Female',
                    'birth_place' => 'Jerusig',
                    'birth_date'  => '2118-12-10',
                    'email'       => 'sos@tu.tz'
                ],
                [
                    'name'        => 'James Wilkerson',
                    'sex'         => 'Male',
                    'birth_place' => 'Orogopku',
                    'birth_date'  => '2022-09-15',
                    'email'       => 'kire@pe.li'
                ],
                [
                    'name'        => 'Lora Lloyd',
                    'sex'         => 'Male',
                    'birth_place' => 'Gedorpe',
                    'birth_date'  => '2114-05-04',
                    'email'       => 'kocvovpag@voabeh.ss'
                ],
                [
                    'name'        => 'Randall McLaughlin',
                    'sex'         => 'Male',
                    'birth_place' => 'Mibiko',
                    'birth_date'  => '2054-07-12',
                    'email'       => 'ipaehbi@ze.gi'
                ],
                [
                    'name'        => 'Leon Craig',
                    'sex'         => 'Female',
                    'birth_place' => 'Wajvaag',
                    'birth_date'  => '2095-02-02',
                    'email'       => 'pe@wocvubej.sr'
                ],
                [
                    'name'        => 'Carolyn McDaniel',
                    'sex'         => 'Male',
                    'birth_place' => 'Wejecuzuk',
                    'birth_date'  => '2058-10-05',
                    'email'       => 'tu@kugmu.vn'
                ],
                [
                    'name'        => 'Essie Riley',
                    'sex'         => 'Male',
                    'birth_place' => 'Cunefewab',
                    'birth_date'  => '2077-07-21',
                    'email'       => 'ud@eju.ml'
                ],
                [
                    'name'        => 'Bertha Jacobs',
                    'sex'         => 'Male',
                    'birth_place' => 'Soepza',
                    'birth_date'  => '2077-01-03',
                    'email'       => 'kuzule@wudibut.nl'
                ],
                [
                    'name'        => 'Florence Mitchell',
                    'sex'         => 'Female',
                    'birth_place' => 'Newagu',
                    'birth_date'  => '2121-04-20',
                    'email'        => 'wifsiz@mocuc.au'
                ],
                [
                    'name'        => 'Victoria Burton',
                    'sex'         => 'Male',
                    'birth_place' => 'Zizwabuh',
                    'birth_date'  => '2091-10-28',
                    'email'       => 'sefbo@pulu.ni'
                ],
                [
                    'name'        => 'Ethan Padilla',
                    'sex'         => 'Male',
                    'birth_place' => 'Takcoveh',
                    'birth_date'  => '2107-07-10',
                    'email'       => 'icaloskiv@ze.jp'
                ]

            ]);

        }
    }
}
