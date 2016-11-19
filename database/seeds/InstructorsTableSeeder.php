<?php

use Illuminate\Database\Seeder;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->delete();

        DB::table('instructors')->insert([
                [
'name' => "A. Alexander Antonopoulos"
],
    [
'name' => "Abdel Razik Sebak"
],
    [
'name' => "Abdelaziz Trabelsi"
],
    [
'name' => "Abdelwahab Hamou Lhadj"
],
    [
'name' => "Adam Krzyzak"
],
    [
'name' => "Adeline Saillard"
],
    [
'name' => "Ahmed Kishk"
],
    [
'name' => "Aida Abu-Baker"
],
    [
'name' => "Aiman Latif Hanna"
],
    [
'name' => "Akshay Kumar Rathore"
],
    [
'name' => "Alan Nash"
],
    [
'name' => "Alejandro Allievi"
],
    [
'name' => "Alexei Kokotov"
],
    [
'name' => "Ali Dolatabadi"
],
    [
'name' => "Ali Heydari"
],
    [
'name' => "Ali Nazemi"
],
    [
'name' => "Ali Tezer"
],
    [
'name' => "Ameer Abdelhadi"
],
    [
'name' => "Amin Ranj Bar"
],
    [
'name' => "Amir G. Aghdam"
],
    [
'name' => "Amr Youssef"
],
    [
'name' => "Anca Alecsandru"
],
    [
'name' => "Anjali Agarwal"
],
    [
'name' => "Anne Wade"
],
    [
'name' => "Antonio Lipardi"
],
    [
'name' => "Arash Mohammadi"
],
    [
'name' => "Armen Atoyan"
],
    [
'name' => "Artur De Matos Alves"
],
    [
'name' => "Ashok Kaushal"
],
    [
'name' => "Asim Jawad Al-Khalili"
],
    [
'name' => "Barry C. Kaufman"
],
    [
'name' => "Biao Li"
],
    [
'name' => "Bipin C. Desai"
],
    [
'name' => "Brandiff Caron"
],
    [
'name' => "Brandon Gordon"
],
    [
'name' => "Brent Pearce"
],
    [
'name' => "Bruno Grenier"
],
    [
'name' => "Carmen Kuczewski"
],
    [
'name' => "Carole El Ayoubi"
],
    [
'name' => "Casey Lambert"
],
    [
'name' => "Catharine C. Marsden"
],
    [
'name' => "Chadi Assi"
],
    [
'name' => "Chandra Asthana"
],
    [
'name' => "Chantal Maille"
],
    [
'name' => "Charalambos Poullis"
],
    [
'name' => "Charalambos Poullis,"
],
    [
'name' => "Charles Kiyanda"
],
    [
'name' => "Charles Reiss"
],
    [
'name' => "Chellaiyah Rajalingham"
],
    [
'name' => "Ching Yee Suen"
],
    [
'name' => "Christine Jamieson"
],
    [
'name' => "Christine Jourdan"
],
    [
'name' => "Christopher Trueman"
],
    [
'name' => "Chun Zhang"
],
    [
'name' => "Chun-Yi Su"
],
    [
'name' => "Chunyan Wang"
],
    [
'name' => "Ciprian Alecsandru"
],
    [
'name' => "Constantinos Constantinides"
],
    [
'name' => "Craig Townsend"
],
    [
'name' => "Curtis Sommerlatte"
],
    [
'name' => "Daniel Dagenais"
],
    [
'name' => "Daniel Salee"
],
    [
'name' => "Daniela Isac"
],
    [
'name' => "Danielle Nasrallah"
],
    [
'name' => "David Horowitz"
],
    [
'name' => "David K Probst"
],
    [
'name' => "David Pickup"
],
    [
'name' => "Derek Theriault"
],
    [
'name' => "Dhrubajyoti Goswami"
],
    [
'name' => "Diarra Gaoussou"
],
    [
'name' => "Dmitry Korotkin"
],
    [
'name' => "Donald Gray Stirling"
],
    [
'name' => "Donald Peter Davis"
],
    [
'name' => "Dongyu Qiu"
],
    [
'name' => "Eesha Sen Choudhury"
],
    [
'name' => "Ehsan Fazel"
],
    [
'name' => "Elena Razlogova"
],
    [
'name' => "Elmira Osouli"
],
    [
'name' => "Emilia Angelova"
],
    [
'name' => "Ernestine M. Daubner"
],
    [
'name' => "Eusebius Doedel"
],
    [
'name' => "Eva Pomeroy"
],
    [
'name' => "Ezra Winton"
],
    [
'name' => "Farjad Shadmehri"
],
    [
'name' => "Farnaz Honarmand"
],
    [
'name' => "Ferawati Gani"
],
    [
'name' => "Ferhat Khendek"
],
    [
'name' => "Fidel Khouli"
],
    [
'name' => "Francois Tardy"
],
    [
'name' => "Gabriel Rosenbaum"
],
    [
'name' => "Gada Mahrouse"
],
    [
'name' => "George Tsoublekas"
],
    [
'name' => "Georgi Vatistas"
],
    [
'name' => "Gerard Gouw"
],
    [
'name' => "Giuseppe Di Labbio"
],
    [
'name' => "Glenn Cowan"
],
    [
'name' => "Golam Mohammad Moshiuddin Aurup"
],
    [
'name' => "Gordon Leonard"
],
    [
'name' => "Gosta Grahne"
],
    [
'name' => "Govind Gopakumar"
],
    [
'name' => "Greg Leblanc"
],
    [
'name' => "Gregor Kos"
],
    [
'name' => "Guillaume Beaulac"
],
    [
'name' => "Habib Benali"
],
    [
'name' => "Hany Alaa Eldin Gomaa"
],
    [
'name' => "Hassan Rivaz"
],
    [
'name' => "Henry Hong"
],
    [
'name' => "Hoi Dick Ng"
],
    [
'name' => "Hourik Attarian"
],
    [
'name' => "Hovhannes Harutyunyan"
],
    [
'name' => "Ian Irvine"
],
    [
'name' => "Iman Gohar"
],
    [
'name' => "Ion Stiharu"
],
    [
'name' => "Ivan Tchinkov"
],
    [
'name' => "Jacqueline Peters"
],
    [
'name' => "James Freeman"
],
    [
'name' => "James W Champagne"
],
    [
'name' => "Javad Dargahi"
],
    [
'name' => "Javad Sadri"
],
    [
'name' => "Jean L Freed"
],
    [
'name' => "Jean Nicolas Renaud"
],
    [
'name' => "Jelena Trajkovic"
],
    [
'name' => "Jesse Arseneault"
],
    [
'name' => "Jia Yuan Yu"
],
    [
'name' => "Joey Paquet"
],
    [
'name' => "John Cheung"
],
    [
'name' => "John Hadjinicolaou"
],
    [
'name' => "John W. Buskard"
],
    [
'name' => "John Xiupu Zhang"
],
    [
'name' => "Jon Waind"
],
    [
'name' => "Juergen Rilling"
],
    [
'name' => "Jung Oh"
],
    [
'name' => "Kamal Fox"
],
    [
'name' => "Kate Bligh"
],
    [
'name' => "Katharina Nieswandt"
],
    [
'name' => "Kerly Titus"
],
    [
'name' => "Ketra Schmitt"
],
    [
'name' => "Khashayar Khorasani"
],
    [
'name' => "Krzysztof Skonieczny"
],
    [
'name' => "Larysa Lysenko"
],
    [
'name' => "Lata Narayanan"
],
    [
'name' => "Laurie Lamoureux Scholes"
],
    [
'name' => "Lazar Sarna"
],
    [
'name' => "Li Shang Ly"
],
    [
'name' => "Louis A. Cuccia"
],
    [
'name' => "Lucas Abia Hof"
],
    [
'name' => "Lucian Turcescu"
],
    [
'name' => "Luis Rodrigues"
],
    [
'name' => "Lyes Kadem"
],
    [
'name' => "Maher Al-Badri"
],
    [
'name' => "Malcolm Whiteway"
],
    [
'name' => "Mamadou Sy"
],
    [
'name' => "Marc P. Lalonde"
],
    [
'name' => "Marcel Parent"
],
    [
'name' => "Maria Da Palma"
],
    [
'name' => "Mario D'Amico"
],
    [
'name' => "Marius Paraschivoiu"
],
    [
'name' => "Marta Kersten-Oertel"
],
    [
'name' => "Martin Pugh"
],
    [
'name' => "Matthew Anderson"
],
    [
'name' => "Matthew Harsh"
],
    [
'name' => "Mehdi Hojjati"
],
    [
'name' => "Mehrab Kiarsi"
],
    [
'name' => "Melanie Dean"
],
    [
'name' => "Michel Choquette"
],
    [
'name' => "Mohamed Taleb"
],
    [
'name' => "Mohammad Reza Soleymani"
],
    [
'name' => "Mojtaba Kahrizi"
],
    [
'name' => "Moshe Lander"
],
    [
'name' => "Mustafa Mehmet Ali"
],
    [
'name' => "Muthukumaran Packirisamy"
],
    [
'name' => "Nabil Esmail"
],
    [
'name' => "Nagi Basha"
],
    [
'name' => "Nancy Acemian"
],
    [
'name' => "Nataliia Rossokhata"
],
    [
'name' => "Nawwaf Kharma"
],
    [
'name' => "Neamat Elgayar"
],
    [
'name' => "Nematollaah Shiri Varnaamkhaasti"
],
    [
'name' => "Nicolas Bergeron"
],
    [
'name' => "Nikolaos Tsantalis"
],
    [
'name' => "Nora Houari"
],
    [
'name' => "Olga Ormandjieva"
],
    [
'name' => "Pablo Gilabert"
],
    [
'name' => "Patricia Longo"
],
    [
'name' => "Patrick Gulick"
],
    [
'name' => "Pawel Gora"
],
    [
'name' => "Peter Graham"
],
    [
'name' => "Pierre Deslauriers"
],
    [
'name' => "Pierre Gauthier"
],
    [
'name' => "Pouya Valizadeh"
],
    [
'name' => "Pragasen Pillay"
],
    [
'name' => "Rabindranath Raut"
],
    [
'name' => "Rahim Tadayon"
],
    [
'name' => "Raja Rama Murthy,"
],
    [
'name' => "Rajagopalan Jayakumar"
],
    [
'name' => "Rajamohan Ganesan"
],
    [
'name' => "Ramin Sedaghati"
],
    [
'name' => "Reinaldo Rodriguez Ramos"
],
    [
'name' => "Rene Witte"
],
    [
'name' => "Robby Derek Saks"
],
    [
'name' => "Robert Paknys"
],
    [
'name' => "Robert Soroka"
],
    [
'name' => "Robin Drew"
],
    [
'name' => "Rocco Portaro"
],
    [
'name' => "Rolf Wuthrich"
],
    [
'name' => "Ronald J. Abraira"
],
    [
'name' => "Ronald Stern"
],
    [
'name' => "Ryan Scheiding"
],
    [
'name' => "Sabine Bergler"
],
    [
'name' => "Sadegh Ghaderpanah"
],
    [
'name' => "Salinda Hess"
],
    [
'name' => "Sasan Golnaraghi"
],
    [
'name' => "Shahin Hashtrudi Zad"
],
    [
'name' => "Shahin Karimidorabati"
],
    [
'name' => "Sherwin Pereira"
],
    [
'name' => "Sivakumar Narayanswamy"
],
    [
'name' => "Sofiene Tahar"
],
    [
'name' => "Staff"
],
    [
'name' => "Stanislas Klasa"
],
    [
'name' => "Stephen J Laing"
],
    [
'name' => "Steve Shih"
],
    [
'name' => "Steven T. Lapidus"
],
    [
'name' => "Stuart Leard"
],
    [
'name' => "Stuart Macmillan"
],
    [
'name' => "Subhash Rakheja"
],
    [
'name' => "Sudhir Mudur"
],
    [
'name' => "Suong Van Hoa"
],
    [
'name' => "Suraj Joshi"
],
    [
'name' => "Susil Das"
],
    [
'name' => "Sébastien Robidoux"
],
    [
'name' => "Tadeusz Obuchowicz"
],
    [
'name' => "Terrill Fancott"
],
    [
'name' => "Theodore Stathopoulos"
],
    [
'name' => "Tiberiu Popa"
],
    [
'name' => "Tien Bui"
],
    [
'name' => "Tima Petrushka-Bordan"
],
    [
'name' => "Tristan Glatard"
],
    [
'name' => "Tsz Ho Kwok"
],
    [
'name' => "Ulf Hlobil"
],
    [
'name' => "Venkatanarayana Ramachandran"
],
    [
'name' => "Victor Kalvin"
],
    [
'name' => "Volker Matthias Haarslev"
],
    [
'name' => "Wahid Ghaly"
],
    [
'name' => "Weiping Zhu"
],
    [
'name' => "Weiyi Shang"
],
    [
'name' => "William E Taylor"
],
    [
'name' => "William Lynch"
],
    [
'name' => "Yan Liu"
],
    [
'name' => "Youmin Zhang"
],
    [
'name' => "Yousef Shayan"
],
    [
'name' => "Yuhong Yan"
],
    [
'name' => "Zezhong Chen"
],


        ]);
    }
}
