<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Graduando;
use App\Models\Invitacion;

class GraduandosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $graduandos = [
       
        [
            'numero_cuenta' => '20182300279',
            'nombre' => 'Isis Estefani Castillo Aguilera',
            'telefono' => '50432029391',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300001',
            'nombre' => 'Litzy Janely Rivas Carbajal',
            'telefono' => '50495931097',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20172330070',
            'nombre' => 'Olga Sarahi lopez Maradiaga',
            'telefono' => '50494688584',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300077',
            'nombre' => 'Dania Iveth Blanco Aguilar',
            'telefono' => '50432050237',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300350',
            'nombre' => 'Axcel Osmani Rodriguez Mendoza',
            'telefono' => '50487552223',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300201',
            'nombre' => 'Susan Daniela Mendez Avilez',
            'telefono' => '50488129989',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182300187',
            'nombre' => 'Erick Samuel Aguilar Galo',
            'telefono' => '50433453115',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20201002848',
            'nombre' => 'Arely Yoseth Ortiz Rodriguez',
            'telefono' => '50487347711',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182330142',
            'nombre' => 'Leonardo Enrique Valladares Davila',
            'telefono' => '50489532129',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20172330198',
            'nombre' => 'Francisco Jose Reyes Flores',
            'telefono' => '50433783480',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330039',
            'nombre' => 'Brandon Josué Cerrato Soliz',
            'telefono' => '50487453062',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330196',
            'nombre' => 'Cesar Danilo Martinez Benitez',
            'telefono' => '50432382390',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300125',
            'nombre' => 'Nissi Escarleth Martínez Díaz',
            'telefono' => '50432934938',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300354',
            'nombre' => 'Alejandra Michelle Sosa Cerrato',
            'telefono' => '50488899542',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300065',
            'nombre' => 'Melissa Anahi Casco Soriano',
            'telefono' => '50433637076',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300010',
            'nombre' => 'Evelyn Marcela Nuñez Betancourth',
            'telefono' => '50488225496',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20132300031',
            'nombre' => 'Scarleth Maely Aguilar Aguilera',
            'telefono' => '50498140533',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300389',
            'nombre' => 'Maryuri Jissell Solorzano Erazo',
            'telefono' => '50487818989',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300143',
            'nombre' => 'Olga Ivec Portillo Espinal',
            'telefono' => '50488601580',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182330068',
            'nombre' => 'Heyser Alejandro Osorto Pineda',
            'telefono' => '50433651775',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20171001826',
            'nombre' => 'Alejandro José Hernández Álvarez',
            'telefono' => '50497018170',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20122300129',
            'nombre' => 'Arnaldo Ivan Corrales Corrales',
            'telefono' => '50488346604',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330205',
            'nombre' => 'Karla Lizzeth Ordoñez Cruz',
            'telefono' => '50497402013',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330044',
            'nombre' => 'Brian Enrique Laínez Hernández',
            'telefono' => '50433260659',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330204',
            'nombre' => 'Eimy Lizeth Inestroza Mendez',
            'telefono' => '50431634244',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        
        [
            'numero_cuenta' => '20182330182',
            'nombre' => 'Cristhian Obed Herrera Funez',
            'telefono' => '50488792400',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '9905398',
            'nombre' => 'Nelson Enrique Oyuela Canales',
            'telefono' => '50433295013',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20172300031',
            'nombre' => 'Edwar Johah Campos Tabora',
            'telefono' => '50499673264',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20132302251',
            'nombre' => 'Yoni Jeovany Montoya Herrera',
            'telefono' => '50488144362',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330042',
            'nombre' => 'Ranses Enmanuel Moreno Fortin',
            'telefono' => '50499068356',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212330090',
            'nombre' => 'Guillermo Antonio Pastrana',
            'telefono' => '50489016851',
            'carrera' => 'INGENIERIA AGROINDUSTRIAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212320062',
            'nombre' => 'ANGEL GABRIEL FLORES ORDOÑEZ',
            'telefono' => '50432313801',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300111',
            'nombre' => 'ALEXA SARAHI DOMINGUEZ CASTILLO',
            'telefono' => '50487573050',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20191000916',
            'nombre' => 'YEIMY DARLENY GARCIA FLORES',
            'telefono' => '50498966234',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300109',
            'nombre' => 'ANGILLY MARBETH ANDINO GARCIA',
            'telefono' => '50432895393',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330056',
            'nombre' => 'MARIA JOSE JUAREZ PORTILLO',
            'telefono' => '50488821046',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300100',
            'nombre' => 'KEYLIN DANIELA OSORTO ZAMBRANO',
            'telefono' => '50489961298',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20171001047',
            'nombre' => 'ADRIANA JESSENIA GUEVARA VILLATORO',
            'telefono' => '50499272371',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300133',
            'nombre' => 'HERSOL ESAU PINEDA ZEPEDA',
            'telefono' => '50431509988',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212300167',
            'nombre' => 'REINA SOFIA VENTURA BARAHONA',
            'telefono' => '50431582144',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300132',
            'nombre' => 'DERIS FABRICIO CARRANZA SORIANO',
            'telefono' => '50488487569',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20172330044',
            'nombre' => 'ALEXIS ANTONIO VELÁSQUEZ ESCALANTE',
            'telefono' => '50495625371',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212300013',
            'nombre' => 'FLOR GEORGETTE CONTRERAS REYES',
            'telefono' => '50488983185',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300236',
            'nombre' => 'MARLON DANIEL SOLANO PEREZ',
            'telefono' => '50431541697',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300441',
            'nombre' => 'ROSMERY HERRERA SOLANO',
            'telefono' => '50432294239',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20152302038',
            'nombre' => 'AMINTA GISEL MARTÍNEZ PORTILLO',
            'telefono' => '50487740063',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182300134',
            'nombre' => 'ANA GISSEL HERRERA APLICANO',
            'telefono' => '50431813049',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182330066',
            'nombre' => 'KAREN MARCELA BOQUIN UMANZOR',
            'telefono' => '50488821046',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300050',
            'nombre' => 'LESLY LORENA CASTILLO DIAZ',
            'telefono' => '50499598003',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20172330175',
            'nombre' => 'LIDIA TATIANA MONTERO LÓPEZ',
            'telefono' => '50432739455',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330052',
            'nombre' => 'NAHUM NEFTALY BOBADILLA DELGADO',
            'telefono' => '50488898708',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300119',
            'nombre' => 'ANGELA CAROLINA MONCADA CARCAMO',
            'telefono' => '50488911257',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182330067',
            'nombre' => 'NASARY PAULETH LÓPEZ MONTOYA',
            'telefono' => '50488751893',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20172330101',
            'nombre' => 'CRISTY PAOLA EUCEDA LAÍNEZ',
            'telefono' => '50497654554',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20132300115',
            'nombre' => 'EUGENIO ANTONIO LAINEZ MEJIA',
            'telefono' => '50432637904',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20162330063',
            'nombre' => 'IRIS YARITZA PERALTA CRUZ',
            'telefono' => '50496733082',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182300173',
            'nombre' => 'JORGE ROLANDO MOLINA MARTÍNEZ',
            'telefono' => '50488177960',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182300280',
            'nombre' => 'LESTER JOSHUA ZELAYA ANDURAY',
            'telefono' => '50488585121',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20162330034',
            'nombre' => 'ALLAN ENRIQUE ESCALANTE OLIVA',
            'telefono' => '50488263697',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300074',
            'nombre' => 'BEBERLING MICHELLE PASTRANA ORDOÑEZ',
            'telefono' => '50432015304',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300262',
            'nombre' => 'LUIS NOEL SANDOVAL AGUILERA',
            'telefono' => '50431896480',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20122302110',
            'nombre' => 'RITSY TAHTIANA VELASQUEZ SOSA',
            'telefono' => '50496881444',
            'carrera' => 'INGENIERIA EN CIENCIAS ACUICOLAS Y RECURSOS MARINO COSTERO',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212320169',
            'nombre' => 'FERNANDA JOSÉ CASTELLANOS PINEL',
            'telefono' => '50431577560',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330080',
            'nombre' => 'KAREN PATRICIA RAMIREZ ORTIZ',
            'telefono' => '50499911821',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330072',
            'nombre' => 'JOSÉ FERNANDO CALIX RUBIO',
            'telefono' => '50431989574',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212300063',
            'nombre' => 'SAMARIA ALEJANDRA RUIZ TERCERO',
            'telefono' => '50497831705',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300041',
            'nombre' => 'ARIANNA NICOLLE POSADAS GARCÍA',
            'telefono' => '50495289015',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212320131',
            'nombre' => 'VERÓNICA ABIGAIL RAMÍREZ MONTOYA',
            'telefono' => '50496036194',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300090',
            'nombre' => 'NITSSI BETSABÉ BETANCOURTH MORALES',
            'telefono' => '50432371075',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212300114',
            'nombre' => 'CARMEN LEONELA SÁNCHEZ ORTIZ',
            'telefono' => '50431653069',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300032',
            'nombre' => 'SAIDY FABIOLA MALDONADO MONTENEGRO',
            'telefono' => '50433752584',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20212320164',
            'nombre' => 'YANORI ADELAIDA BENITEZ INESTROZA',
            'telefono' => '50494975683',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300157',
            'nombre' => 'GRISSELY ODILETH SÁNCHEZ OSORTO',
            'telefono' => '50496019049',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20172330179',
            'nombre' => 'CRISTOPHER DAVID MOTIÑO SÁNCHEZ',
            'telefono' => '50488098833',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20102300344',
            'nombre' => 'PEDRO JOSÉ GÓMEZ ÁLVAREZ',
            'telefono' => '50494504060',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300032',
            'nombre' => 'ANA JANSY CANALES GUERRERO',
            'telefono' => '50489403409',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300073',
            'nombre' => 'GENSI MILAGRO PASTRANA CASTRO',
            'telefono' => '50432643233',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20191031388',
            'nombre' => 'LEONELA ANAHÍ GONZÁLEZ GÓMEZ',
            'telefono' => '50432251579',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20131102114',
            'nombre' => 'YOSSELIN YIBELLY FLORES MARTÍNEZ',
            'telefono' => '50431517157',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20152302197',
            'nombre' => 'JOSÉ MARÍA RODRÍGUEZ CASTILLO',
            'telefono' => '50432490605',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300059',
            'nombre' => 'CARMEN DANIELA ZAMBRANO VALLEJO',
            'telefono' => '50487445312',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300252',
            'nombre' => 'KATYA SHOANY NUÑEZ ÁLVAREZ',
            'telefono' => '50498675462',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20152300136',
            'nombre' => 'LUIS ENRIQUE SOZA AGUILAR',
            'telefono' => '50432209669',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300019',
            'nombre' => 'PAMELA NAHOMY PAZ REYES',
            'telefono' => '50487553272',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '9705275',
            'nombre' => 'CARLA PATRICIA ZEPEDA MARTINEZ',
            'telefono' => '50431659035',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20191000004',
            'nombre' => 'MARÍA FERNANDA ALVARADO MOLINA',
            'telefono' => '50432567915',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182300144',
            'nombre' => 'LOANY MIREYA ESPINAL PORTILLO',
            'telefono' => '50487794731',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20041000474',
            'nombre' => 'ELVIS MANUEL BAQUEDANO GUTIERREZ',
            'telefono' => '50431500959',
            'carrera' => 'COMERCIO INTERNACIONAL',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300280',
            'nombre' => 'EDUARDO JOSÉ PINEDA ESTRADA',
            'telefono' => '50433273305',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330076',
            'nombre' => 'JAIME EDGARDO VELÁSQUEZ RODRÍGUEZ',
            'telefono' => '50496814424',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300035',
            'nombre' => 'NATALY REBECA OLIVAS VARGAS',
            'telefono' => '50488145606',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300008',
            'nombre' => 'YOSELIN NAOMY MAJANO RODAS',
            'telefono' => '50487782396',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300005',
            'nombre' => 'YOJANA MARISOL ARRIOLA RODRÍGUEZ',
            'telefono' => '50499298337',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20182330079',
            'nombre' => 'LITZY CLAUDETH RUIZ LÓPEZ',
            'telefono' => '50497068182',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300125',
            'nombre' => 'LUCIANA MARCELA MEZA AGUILAR',
            'telefono' => '50489390993',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300116',
            'nombre' => 'CLARISSA ALEJANDRA GUERRERO CARRANZA',
            'telefono' => '50492977504',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300189',
            'nombre' => 'KEREN MARÍA JOSÉ GARCÍA QUIROZ',
            'telefono' => '50496835111',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192330104',
            'nombre' => 'ELISA JULIETH ALVARENGA CRUZ',
            'telefono' => '50497721515',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300018',
            'nombre' => 'JENNIFER ALEXANDRA GARCÍA JOYA',
            'telefono' => '50498345112',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300135',
            'nombre' => 'ROSSY LISETH ESPINAL CARRANZA',
            'telefono' => '50488970607',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20191000747',
            'nombre' => 'NELLY ALEXANDRA SANDOVAL PALACIOS',
            'telefono' => '50494142821',
            'carrera' => 'ADMINISTRACIÓN Y GENERACION DE EMPRESAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300021',
            'nombre' => 'OMRI DAVID AGUILAR ROMERO',
            'telefono' => '50432514662',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300336',
            'nombre' => 'DAVID ISAAC RIVERA SÁNCHEZ',
            'telefono' => '50498925544',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20202300182',
            'nombre' => 'NOHELIA LILIANA CRUZ HERNÁNDEZ',
            'telefono' => '50496019507',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 5
        ],
        [
            'numero_cuenta' => '20192330050',
            'nombre' => 'ONIEL OSMIN ESPINAL ESPINAL',
            'telefono' => '50489688381',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 5
        ],
        [
            'numero_cuenta' => '20192300186',
            'nombre' => 'ASTRID MARHIAM HERNÁNDEZ SOLANO',
            'telefono' => '50499268032',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20181030091',
            'nombre' => 'ALEX MAURICIO AGUILERA VALLEJO',
            'telefono' => '50489806058',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300276',
            'nombre' => 'IVETH ALEJANDRA LINAREZ TORRES',
            'telefono' => '50433989261',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 3
        ],
        [
            'numero_cuenta' => '20182330065',
            'nombre' => 'WALTER JEHOVANNY CARRANZA MARADIAGA',
            'telefono' => '50495116144',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 2
        ],
        [
            'numero_cuenta' => '20192300264',
            'nombre' => 'JAIME DAVID LUNA PONCE',
            'telefono' => '50488461192',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 5
        ],
        [
            'numero_cuenta' => '20171100033',
            'nombre' => 'ALAN ROBERTO PÉREZ CARDONA',
            'telefono' => '50494815032',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 3
        ],
        [
            'numero_cuenta' => '20181002673',
            'nombre' => 'BRANDON GEOVANNY MONDRAGÓN SORIANO',
            'telefono' => '50497562292',
            'carrera' => 'INGENIERIA EN SISTEMAS',
            'cantidad_invitados' => 3
        ],

        ];

        foreach ($graduandos as $graduandoData) {
            $graduando = Graduando::create($graduandoData);

            // Crear las invitaciones para cada graduando
            for ($i = 0; $i < $graduando->cantidad_invitados; $i++) {
                $invitacion = Invitacion::create([
                    'fecha' => now()->addDays(30),
                ]);
                
                $graduando->invitaciones()->attach($invitacion->id);
            }
        }
    }
}
