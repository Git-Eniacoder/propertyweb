<?php
if (isset($_GET["id"])) {
    $refer_id = $_GET["id"];
    setcookie('referid', $_GET["id"], time() + (86400 * 30), "/");
} else if (isset($_COOKIE['referid'])) {
    $refer_id = $_COOKIE['referid'];
} else {
    $refer_id = NULL;
}
?>
<style>
    .mobi {
        display: none;
    }

    @media screen and (max-width: 770px) {
        .mobi {
            display: block;
            margin: 0px !important;
        }

        .desk {
            display: none;
        }
    }
</style>


<main class="sub-main">

    <section class="hero">
        <div class="container">
            <div class="hero_head">
                <div class="row justify-content-center">
                    <div class="col text-center">
                        <h1 class="hero_head_h1">Lets Find You A Perfect Property</h1>
                        <p class="hero_head_p">according to your needs</p>
                    </div>
                </div>
            </div>

            <!-- <div class="hero_search hero_search_bx">
                <div class="row justify-content-center">
                    <div class="col-sm-2 fg">
                        <div class="form-group">
                            <select name="" id="" class="hero_input">
                                <option value="">Choose Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 fg">
                        <div class="form-group">
                            <input type="text" class="hero_input" name="" id="" aria-describedby="helpId" placeholder="Search Locality">
                        </div>
                    </div>
                    <div class="col-sm-2 fg">
                        <div class="form-group">
                            <select name="" id="" class="hero_input">
                                <option value="">Property Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 fg">
                        <button class="hero_btn">Search</button>
                    </div>
                </div>
            </div> -->

            <!-- Search Bar -->

            <div class="hero_search">
                <!-- <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div>
                            <select name="" id="" class="hero_inputs">
                                <option value="">Choose City</option>
                                <option value="">Ajmer</option>
                                <option value="">Jaipur</option>
                                <option value="">Bilwara</option>
                            </select>
                            <input type="text" class="hero_inputs" placeholder="Search Locality">
                            <select name="" id="" class="hero_inputs">
                                <option value="">Property Type</option>
                            </select>
                            <button class="hero_inputs_btn">Search</button>
                        </div>
                    </div>

                </div> -->
                
                <div class="row justify-content-center align-items-center">
                    <div class="col text-center">
                        <div class="searchbar_bx">
                            <form method="post" action="<?php echo base_url() . 'propertydetail/search_single'; ?>">
                            <input list="city" name="city" class="searchbar sb_1" placeholder="CHOOSE CITY" >    
                            <datalist name="city" id="city" >
                                    
                                    <option value="AGARTALA">AGARTALA</option>
                                    <option value="AGRA">AGRA</option>
                                    <option value="AHMEDABAD">AHMEDABAD</option>
                                    <option value="AIZWAL">AIZWAL</option>
                                    <option value="AJMER">AJMER</option>
                                    <option value="ALLAHABAD">ALLAHABAD</option>
                                    <option value="ALLEPPEY">ALLEPPEY</option>
                                    <option value="ALIBAUG">ALIBAUG</option>
                                    <option value="ALMORA">ALMORA</option>
                                    <option value="ALSISAR">ALSISAR</option>
                                    <option value="ALWAR">ALWAR</option>
                                    <option value="AMBALA">AMBALA</option>
                                    <option value="AMLA">AMLA</option>
                                    <option value="AMRITSAR">AMRITSAR</option>
                                    <option value="ANAND">ANAND</option>
                                    <option value="ANKLESHWAR">ANKLESHWAR</option>
                                    <option value="ASHTAMUDI">ASHTAMUDI</option>
                                    <option value="AULI">AULI</option>
                                    <option value="AURANGABAD">AURANGABAD</option>
                                    <option value="BADDI">BADDI</option>
                                    <option value="BADRINATH">BADRINATH</option>
                                    <option value="BALASINOR">BALASINOR</option>
                                    <option value="BALRAMPUR">BALRAMPUR</option>
                                    <option value="BAMBORA">BAMBORA</option>
                                    <option value="BANDHAVGARH">BANDHAVGARH</option>
                                    <option value="BANDIPUR">BANDIPUR</option>
                                    <option value="BANGALORE">BANGALORE</option>
                                    <option value="BARBIL">BARBIL</option>
                                    <option value="BAREILLY">BAREILLY</option>
                                    <option value="BEHROR">BEHROR</option>
                                    <option value="BELGAUM">BELGAUM</option>
                                    <option value="BERHAMPUR">BERHAMPUR</option>
                                    <option value="BETALGHAT">BETALGHAT</option>
                                    <option value="BHARATPUR">BHARATPUR</option>
                                    <option value="BHANDARDARA">BHANDARDARA</option>
                                    <option value="BHARUCH">BHARUCH</option>
                                    <option value="BHAVANGADH">BHAVANGADH</option>
                                    <option value="BHAVNAGAR">BHAVNAGAR</option>
                                    <option value="BHILAI">BHILAI</option>
                                    <option value="BHIMTAL">BHIMTAL</option>
                                    <option value="BHOPAL">BHOPAL</option>
                                    <option value="BHUBANESHWAR">BHUBANESHWAR</option>
                                    <option value="BHUJ">BHUJ</option>
                                    <option value="BIKANER">BIKANER</option>
                                    <option value="BINSAR">BINSAR</option>
                                    <option value="BODHGAYA">BODHGAYA</option>
                                    <option value="BUNDI">BUNDI</option>
                                    <option value="CALICUT">CALICUT</option>
                                    <option value="CANANNORE">CANANNORE</option>
                                    <option value="CHAIL">CHAIL</option>
                                    <option value="CHAMBA">CHAMBA</option>
                                    <option value="CHANDIGARH">CHANDIGARH</option>
                                    <option value="CHENNAI">CHENNAI</option>
                                    <option value="CHIKMAGALUR">CHIKMAGALUR</option>
                                    <option value="CHIPLUN">CHIPLUN</option>
                                    <option value="CHITRAKOOT">CHITRAKOOT</option>
                                    <option value="CHITTORGARH">CHITTORGARH</option>
                                    <option value="COIMBATORE">COIMBATORE</option>
                                    <option value="COONOOR">COONOOR</option>
                                    <option value="COORG">COORG</option>
                                    <option value="CORBETT NATIONAL PARK">CORBETT NATIONAL PARK</option>
                                    <option value="CUTTACK">CUTTACK</option>
                                    <option value="DABHOSA">DABHOSA</option>
                                    <option value="DALHOUSIE">DALHOUSIE</option>
                                    <option value="DAMAN">DAMAN</option>
                                    <option value="DANDELI">DANDELI</option>
                                    <option value="DAPOLI">DAPOLI</option>
                                    <option value="DARJEELING">DARJEELING</option>
                                    <option value="DAUSA">DAUSA</option>
                                    <option value="DEHRADUN">DEHRADUN</option>
                                    <option value="delhi">DELHI</option>
                                    <option value="DHARAMSHALA">DHARAMSHALA</option>
                                    <option value="DIBRUGARH">DIBRUGARH</option>
                                    <option value="DIGHA">DIGHA</option>
                                    <option value="DIU">DIU</option>
                                    <option value="DIVE AGAR">DIVE AGAR</option>
                                    <option value="DOOARS">DOOARS</option>
                                    <option value="DURGAPUR">DURGAPUR</option>
                                    <option value="DURSHET">DURSHET</option>
                                    <option value="DWARKA">DWARKA</option>
                                    <option value="FARIDABAD">FARIDABAD</option>
                                    <option value="FIROZABAD">FIROZABAD</option>
                                    <option value="GANGOTRI">GANGOTRI</option>
                                    <option value="GANGTOK">GANGTOK</option>
                                    <option value="GANAPATIPULE">GANAPATIPULE</option>
                                    <option value="GANDHIDHAM">GANDHIDHAM</option>
                                    <option value="GANDHINAGAR">GANDHINAGAR</option>
                                    <option value="GARHMUKTESHWAR">GARHMUKTESHWAR</option>
                                    <option value="GARHWAL">GARHWAL</option>
                                    <option value="GAYA">GAYA</option>
                                    <option value="GHAZIABAD">GHAZIABAD</option>
                                    <option value="GOA">GOA</option>
                                    <option value="GOKHARNA">GOKHARNA</option>
                                    <option value="GONDAL">GONDAL</option>
                                    <option value="GORAKHPUR">GORAKHPUR</option>
                                    <option value="GREATER NOIDA">GREATER NOIDA</option>
                                    <option value="GULMARG">GULMARG</option>
                                    <option value="GURGAON">GURGAON</option>
                                    <option value="GURUVAYOOR">GURUVAYOOR</option>
                                    <option value="GUWAHATI">GUWAHATI</option>
                                    <option value="GWALIOR">GWALIOR</option>
                                    <option value="HALEBID">HALEBID</option>
                                    <option value="HAMPI">HAMPI</option>
                                    <option value="HANSI">HANSI</option>
                                    <option value="HARIDWAR">HARIDWAR</option>
                                    <option value="HASSAN">HASSAN</option>
                                    <option value="HOSPET">HOSPET</option>
                                    <option value="HOSUR">HOSUR</option>
                                    <option value="HUBLI">HUBLI</option>
                                    <option value="HYDERABAD">HYDERABAD</option>
                                    <option value="IDUKKI">IDUKKI</option>
                                    <option value="IGATPURI">IGATPURI</option>
                                    <option value="IMPHAL">IMPHAL</option>
                                    <option value="INDORE">INDORE</option>
                                    <option value="JABALPUR">JABALPUR</option>
                                    <option value="JAIPUR">JAIPUR</option>
                                    <option value="JAISALMER">JAISALMER</option>
                                    <option value="JALANDHAR">JALANDHAR</option>
                                    <option value="JALGAON">JALGAON</option>
                                    <option value="JAMBUGODHA">JAMBUGODHA</option>
                                    <option value="JAMMU">JAMMU</option>
                                    <option value="JAMNAGAR">JAMNAGAR</option>
                                    <option value="JAMSHEDPUR">JAMSHEDPUR</option>
                                    <option value="JAWHAR">JAWHAR</option>
                                    <option value="JHANSI">JHANSI</option>
                                    <option value="JODHPUR">JODHPUR</option>
                                    <option value="JOJAWAR">JOJAWAR</option>
                                    <option value="JORHAT">JORHAT</option>
                                    <option value="JUNAGADH">JUNAGADH</option>
                                    <option value="KABINI">KABINI</option>
                                    <option value="KALIMPONG">KALIMPONG</option>
                                    <option value="KANATAL">KANATAL</option>
                                    <option value="KANCHIPURAM">KANCHIPURAM</option>
                                    <option value="KANHA">KANHA</option>
                                    <option value="KANPUR">KANPUR</option>
                                    <option value="KANYAKUMARI">KANYAKUMARI</option>
                                    <option value="KARGIL">KARGIL</option>
                                    <option value="KARJAT">KARJAT</option>
                                    <option value="KARNAL">KARNAL</option>
                                    <option value="KARUR">KARUR</option>
                                    <option value="KARWAR">KARWAR</option>
                                    <option value="KASARGOD">KASARGOD</option>
                                    <option value="KASAULI">KASAULI</option>
                                    <option value="KASHIPUR">KASHIPUR</option>
                                    <option value="KASHID">KASHID</option>
                                    <option value="KATRA">KATRA</option>
                                    <option value="KAUSANI">KAUSANI</option>
                                    <option value="KAZA">KAZA</option>
                                    <option value="KEDARNATH">KEDARNATH</option>
                                    <option value="KHAJJIAR">KHAJJIAR</option>
                                    <option value="KHAJURAHO">KHAJURAHO</option>

                                    <option value="KHANDALA">KHANDALA</option>
                                    <option value="KHIMSAR">KHIMSAR</option>
                                    <option value="KOCHIN">KOCHIN</option>
                                    <option value="KODAIKANAL">KODAIKANAL</option>
                                    <option value="KOLHAPUR">KOLHAPUR</option>
                                    <option value="KOLKATA">KOLKATA</option>
                                    <option value="KOLLAM">KOLLAM</option>
                                    <option value="KOTA">KOTA</option>
                                    <option value="KOTAGIRI">KOTAGIRI</option>
                                    <option value="KOTTAYAM">KOTTAYAM</option>
                                    <option value="KOVALAM">KOVALAM</option>
                                    <option value="KUFRI">KUFRI</option>
                                    <option value="KUMBALGARH">KUMBALGARH</option>
                                    <option value="KULLU">KULLU</option>
                                    <option value="KUMARAKOM">KUMARAKOM</option>
                                    <option value="KUMBAKONAM">KUMBAKONAM</option>
                                    <option value="KUMILY">KUMILY</option>
                                    <option value="KURSEONG">KURSEONG</option>
                                    <option value="KUSHINAGAR">KUSHINAGAR</option>
                                    <option value="LACHUNG">LACHUNG</option>
                                    <option value="LEH">LEH</option>
                                    <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                                    <option value="LONAVALA">LONAVALA</option>
                                    <option value="LOTHAL">LOTHAL</option>
                                    <option value="LUCKNOW">LUCKNOW</option>
                                    <option value="LUDHIANA">LUDHIANA</option>
                                    <option value="LUMBINI">LUMBINI</option>
                                    <option value="MADURAI">MADURAI</option>
                                    <option value="MAHABALESHWAR">MAHABALESHWAR</option>
                                    <option value="MAHABALIPURAM">MAHABALIPURAM</option>
                                    <option value="MALAPPURAM">MALAPPURAM</option>
                                    <option value="MALPE">MALPE</option>
                                    <option value="MALSHEJ GHAT">MALSHEJ GHAT</option>
                                    <option value="MALVAN">MALVAN</option>
                                    <option value="MANALI">MANALI</option>
                                    <option value="MANDAVI">MANDAVI</option>
                                    <option value="MANDAWA">MANDAWA</option>
                                    <option value="MANESAR">MANESAR</option>
                                    <option value="MARARRI">MARARRI</option>
                                    <option value="MANDORMONI">MANDORMONI</option>
                                    <option value="MANGALORE">MANGALORE</option>
                                    <option value="MANMAD">MANMAD</option>
                                    <option value="MARCHULA">MARCHULA</option>
                                    <option value="MATHERAN">MATHERAN</option>
                                    <option value="MATHURA">MATHURA</option>
                                    <option value="MCLEODGANJ">MCLEODGANJ</option>
                                    <option value="MOHALI">MOHALI</option>
                                    <option value="MOUNT ABU">MOUNT ABU</option>
                                    <option value="MORADABAD">MORADABAD</option>
                                    <option value="MORBI">MORBI</option>
                                    <option value="MUKTESHWAR">MUKTESHWAR</option>
                                    <option value="MUMBAI">MUMBAI</option>
                                    <option value="MUNDRA">MUNDRA</option>
                                    <option value="MUNNAR">MUNNAR</option>
                                    <option value="MURUD JANJIRA">MURUD JANJIRA</option>
                                    <option value="MUSSOORIE">MUSSOORIE</option>
                                    <option value="MYSORE">MYSORE</option>
                                    <option value="NADUKANI">NADUKANI</option>
                                    <option value="NAGAPATTINAM">NAGAPATTINAM</option>
                                    <option value="NAGARHOLE">NAGARHOLE</option>
                                    <option value="NAGAUR FORT">NAGAUR FORT</option>
                                    <option value="NAGOTHANE">NAGOTHANE</option>
                                    <option value="NAGPUR">NAGPUR</option>
                                    <option value="NAHAN">NAHAN</option>
                                    <option value="NAINITAL">NAINITAL</option>
                                    <option value="NALDHERA">NALDHERA</option>
                                    <option value="NANDED">NANDED</option>
                                    <option value="NAPNE">NAPNE</option>
                                    <option value="NASIK">NASIK</option>
                                    <option value="NAVI MUMBAI">NAVI MUMBAI</option>
                                    <option value="NERAL">NERAL</option>
                                    <option value="NEW DELHI">NEW DELHI</option>
                                    <option value="NILGIRI">NILGIRI</option>
                                    <option value="NOIDA">NOIDA</option>
                                    <option value="OOTY">OOTY</option>
                                    <option value="ORCHHA">ORCHHA</option>
                                    <option value="OSIAN">OSIAN</option>
                                    <option value="PACHMARHI">PACHMARHI</option>
                                    <option value="PALAMPUR">PALAMPUR</option>
                                    <option value="PALANPUR">PALANPUR</option>
                                    <option value="PALI">PALI</option>
                                    <option value="PAHALGAM">PAHALGAM</option>
                                    <option value="PALITANA">PALITANA</option>
                                    <option value="PALLAKAD">PALLAKAD</option>
                                    <option value="PANCHGANI">PANCHGANI</option>
                                    <option value="PANCHKULA">PANCHKULA</option>
                                    <option value="PANNA">PANNA</option>
                                    <option value="PANHALA">PANHALA</option>
                                    <option value="PANVEL">PANVEL</option>
                                    <option value="PANTNAGAR">PANTNAGAR</option>
                                    <option value="PARWANOO">PARWANOO</option>
                                    <option value="PATIALA">PATIALA</option>
                                    <option value="PATHANKOT">PATHANKOT</option>
                                    <option value="PATNA">PATNA</option>
                                    <option value="PATNITOP">PATNITOP</option>
                                    <option value="PELLING">PELLING</option>
                                    <option value="PENCH">PENCH</option>
                                    <option value="PHAGWARA">PHAGWARA</option>
                                    <option value="PHALODI">PHALODI</option>
                                    <option value="PINJORE">PINJORE</option>
                                    <option value="PONDICHERRY">PONDICHERRY</option>
                                    <option value="POOVAR">POOVAR</option>
                                    <option value="PORBANDAR">PORBANDAR</option>
                                    <option value="PORT BLAIR">PORT BLAIR</option>
                                    <option value="POSHINA">POSHINA</option>
                                    <option value="PRAGPUR">PRAGPUR</option>
                                    <option value="PUNE">PUNE</option>
                                    <option value="PURI">PURI</option>
                                    <option value="PUSKHAR">PUSKHAR</option>
                                    <option value="PUTTAPARTHI">PUTTAPARTHI</option>
                                    <option value="RAI BAREILLY">RAI BAREILLY</option>
                                    <option value="RAICHAK">RAICHAK</option>
                                    <option value="RAIPUR">RAIPUR</option>
                                    <option value="RAJGIR">RAJGIR</option>
                                    <option value="RAJKOT">RAJKOT</option>
                                    <option value="RAJPIPLA">RAJPIPLA</option>
                                    <option value="RAJSAMAND">RAJSAMAND</option>
                                    <option value="RAJAHMUNDRY">RAJAHMUNDRY</option>
                                    <option value="RAMESHWARAM">RAMESHWARAM</option>
                                    <option value="RAM NAGAR">RAM NAGAR</option>
                                    <option value="RAMGARH">RAMGARH</option>
                                    <option value="RANAKPUR">RANAKPUR</option>
                                    <option value="RANCHI">RANCHI</option>
                                    <option value="RANIKHET">RANIKHET</option>
                                    <option value="RANNY">RANNY</option>
                                    <option value="RANTHAMBORE">RANTHAMBORE</option>
                                    <option value="RATNAGIRI">RATNAGIRI</option>
                                    <option value="RAVANGLA">RAVANGLA</option>
                                    <option value="RISHIKESH">RISHIKESH</option>
                                    <option value="RISHYAP">RISHYAP</option>
                                    <option value="ROHETGARH">ROHETGARH</option>
                                    <option value="ROURKELA">ROURKELA</option>
                                    <option value="SAJAN">SAJAN</option>
                                    <option value="SALEM">SALEM</option>
                                    <option value="SAPUTARA">SAPUTARA</option>
                                    <option value="SASAN GIR">SASAN GIR</option>
                                    <option value="SATTAL">SATTAL</option>
                                    <option value="SAWAI MADHOPUR">SAWAI MADHOPUR</option>
                                    <option value="SAWANTWADI">SAWANTWADI</option>
                                    <option value="SECUNDERABAD">SECUNDERABAD</option>
                                    <option value="SHILLONG">SHILLONG</option>
                                    <option value="SHIMLA">SHIMLA</option>
                                    <option value="SHIMLIPAL">SHIMLIPAL</option>
                                    <option value="SHIRDI">SHIRDI</option>
                                    <option value="SHARAVANBELGOLA">SHARAVANBELGOLA</option>
                                    <option value="SHIVANASAMUDRA">SHIVANASAMUDRA</option>
                                    <option value="SIANA">SIANA</option>
                                    <option value="SILIGURI">SILIGURI</option>
                                    <option value="SILVASSA">SILVASSA</option>
                                    <option value="SIVAGANGA DISTRICT">SIVAGANGA DISTRICT</option>

                                    <option value="SOLAN">SOLAN</option>
                                    <option value="SONAULI">SONAULI</option>
                                    <option value="SRINAGAR">SRINAGAR</option>
                                    <option value="SUNDERBAN">SUNDERBAN</option>
                                    <option value="SURAT">SURAT</option>
                                    <option value="TANJORE">TANJORE</option>
                                    <option value="TAPOLA">TAPOLA</option>
                                    <option value="TARAPITH">TARAPITH</option>
                                    <option value="THANE">THANE</option>
                                    <option value="THEKKADY">THEKKADY</option>
                                    <option value="THIRVANNAMALAI">THIRVANNAMALAI</option>
                                    <option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option>
                                    <option value="TIRUCHIRAPALLI">TIRUCHIRAPALLI</option>
                                    <option value="TIRUPUR">TIRUPUR</option>
                                    <option value="TIRUPATI">TIRUPATI</option>
                                    <option value="THRISSUR">THRISSUR</option>
                                    <option value="UDAIPUR">UDAIPUR</option>
                                    <option value="UDHAMPUR">UDHAMPUR</option>
                                    <option value="UDUPI">UDUPI</option>
                                    <option value="UJJAIN">UJJAIN</option>
                                    <option value="UTTARKASHI">UTTARKASHI</option>
                                    <option value="VADODARA">VADODARA</option>
                                    <option value="VAGAMON">VAGAMON</option>
                                    <option value="VARKALA">VARKALA</option>
                                    <option value="VAPI">VAPI</option>
                                    <option value="VARANASI">VARANASI</option>
                                    <option value="VELANKANNI">VELANKANNI</option>
                                    <option value="VELLORE">VELLORE</option>
                                    <option value="VERAVAL">VERAVAL</option>
                                    <option value="VIJAYAWADA">VIJAYAWADA</option>
                                    <option value="VIKRAMGADH">VIKRAMGADH</option>
                                    <option value="VISHAKAPATNAM">VISHAKAPATNAM</option>
                                    <option value="WAYANAD">WAYANAD</option>
                                    <option value="WANKANER">WANKANER</option>
                                    <option value="YAMUNOTRI">YAMUNOTRI</option>
                                    <option value="YERCAUD">YERCAUD</option>
                                    <option value="YUKSOM">YUKSOM</option>
                            </datalist>
                                <input list="searches" type="text" id="click" class="searchbar sb_2" placeholder="SEARCH LOCALITY">
                                <datalist id="searches">

                                </datalist>
                                <select name="type" id="type" class="searchbar sb_3">
                                    <option selected disabled value="">PROPERTY TYPE</option>
                                    <option value="residential">Residential Property</option>
                                    <option value="commercial">Commercial Property</option>
                                </select>
                                <button class="searchbar sb_4"><i class="fa fa-search" aria-hidden="true"></i>
                                    SEARCH
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


            <div class="hero_post_bx">
                <div class="row justify-content-center align-items-center">
                    <div class="col post_line"></div>
                    <div class="col-7 post_mob">Are you a Property Owner?</div>
                    <div class="col post_line"></div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <a href="<?php echo $url['post_property']; ?>"> <button class="btn hero_post_bx_btn">Post Your Free Ad</button></a>
                </div>
            </div>



            <!-- Search  -->
            <div class="hero_service">
                <div class="row justify-content-center align-items-center ">

                    <div class="col-md-3  hero_service_bx hero_ser_shadow" data-toggle="modal" data-target="#exampleModal">

                        <a href="#" class="hero_ser_link">
                            <div class="ser">
                                <img src="assets/img/homeimgs/rentp.png" alt="" class="hero_ser_img">
                                <p class="hero_ser_text">Rental Portal</p>
                            </div>
                        </a>


                    </div>

                    <div class="col-md-3  hero_service_bx hero_ser_shadow">
                        <?php if ($status == false) { ?>
                            <a href="" data-toggle="modal" data-target="#login" class="hero_ser_link">
                            <?php } else { ?>
                                <a href="<?php echo $url['recharge']; ?>" class="hero_ser_link">
                                <?php } ?>
                                <div class="ser">
                                    <img src="assets/img/homeimgs/rechargep.png" alt="" class="hero_ser_img">
                                    <p class="hero_ser_text">Recharge Portal</p>
                                    <!-- <a href="" class="hero_ser_text">Recharge Portal</a> -->
                                </div>
                                </a>


                    </div>
                    <!-- <div class="col-md-3  hero_service_bx">

                        <a href="<?php echo $url['post_property']; ?>" class="hero_ser_link">
                            <div class="ser">
                                <img src="assets/img/homeimgs/postp.png" alt="" class="hero_ser_img">
                                <p class="hero_ser_text">Post Requirement</p>
                            </div>
                        </a>

                    </div> -->
                    <div class="col-md-3  hero_service_bx hero_ser_shadow">
                        <a href="<?php echo base_url() . 'shopping' ?>" class="hero_ser_link">
                            <div class="ser">
                                <img src="assets/img/homeimgs/rentp.png" alt="" class="hero_ser_img">
                                <p class="hero_ser_text">Shopping Portal</p>
                                <!-- <a href="" class="hero_ser_text">Post Requirement</a> -->
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>


    </section>



    <!-- HERO btn Modal Pop Up -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content property_modal">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body text-center">
                    <div>
                        <a name="" id="" class="btn list_btns" href="<?php echo $url['post_property']; ?>" role="button">Post Requirement</a>
                    </div>
                    <div>
                        <a name="" id="" class="btn list_btns" href="<?php echo $url['list']; ?>" role="button">List Property</a>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>








    <!-- Trending Properties -->
    <section class="trending top_trend desk">
        <div class="container text-center my-3">
            <div class="home_subhead">
                <div class="row justify-content-start align-items-center">
                    <div class="col-sm-3 ">
                        <h2 class="home_subhead_text text-center text-start">Trending Properties</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr class="home_subhead_line">
                    </div>
                </div>
            </div>
            <div class="row mx-auto my-auto trend_contain">
                <div id="trending" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item carousel-item2 justify-content-center active">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>" class="prop_card_link">
                                                <div class="card text-left prop_lists prop_lists2">

                                                    <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                    echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                                                    <div class="card-body">
                                                        <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                        <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                        <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                        <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                        <div class="row flex justify-content-between align-items-center">
                                                            <div class="col">
                                                                <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                            </div>

                                                            <div class="col text-right">
                                                                <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>" class="prop_card_link">
                                                <div class="card text-left prop_lists prop_lists2">
                                                    <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                    echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                                                    <div class="card-body">
                                                        <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                        <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                        <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                        <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                        <div class="row flex justify-content-between align-items-center">
                                                            <div class="col">
                                                                <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                            </div>

                                                            <div class="col text-right">
                                                                <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 3; $i < 6; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                            <div class="card text-left prop_lists prop_lists2">
                                                <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>"> <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                                                                                                                echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt=""></a>
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377;<?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev w-auto" href="#trending" role="button" data-slide="prev">

                        <div class="home_arrow_new hrn_left">
                            <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                        </div>


                    </a>

                    <a class="carousel-control-next w-auto" href="#trending" role="button" data-slide="next">
                        <div class="home_arrow_new hrn_right">
                            <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                        </div>

                    </a>
                </div>
            </div>

        </div>
    </section>



    <section class="trending top_trend mobi">
        <div class="container text-center my-3">
            <div class="home_subhead">
                <div class="row justify-content-start align-items-center">
                    <div class="col-sm-3 ">
                        <h2 class="home_subhead_text text-center text-start">Trending Properties</h2>
                    </div>
                    <div class="col-sm-9">
                        <hr class="home_subhead_line">
                    </div>
                </div>
            </div>

            <div class="row mx-auto my-auto trend_contain">
                <div id="trendig" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <?php for ($i = 0; $i < 5; $i++) {
                                if (count($property) <= $i) {
                                    break;
                                }
                            ?>
                                <div class="carousel-item carousel-item2 justify-content-center <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <div class="row justify-content-center">

                                        <div class="col-md-4">
                                            <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>" class="prop_card_link">
                                                <div class="card text-left prop_lists prop_lists2">
                                                    <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]);
                                                                                    echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                                                    <div class="card-body">
                                                        <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                        <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                        <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                        <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                        <div class="row flex justify-content-between align-items-center">
                                                            <div class="col">
                                                                <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                            </div>

                                                            <div class="col text-right">
                                                                <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#trendig" role="button" data-slide="prev">
                        <div class="home_arrow_new hrn_left">
                            <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                        </div>

                    </a>

                    <a class="carousel-control-next w-auto" href="#trendig" role="button" data-slide="next">
                        <div class="home_arrow_new hrn_right">
                            <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                        </div>

                    </a>
                </div>
            </div>

        </div>
    </section>




    <!-- Trending Row -->

    <!-- Recently Added Properties -->

    <section class="trending2 desk">
        <div class="container">
            <div class="home_subhead">
                <div class="row justify-content-start align-items-center">
                    <div class="col-md-4 ">
                        <h2 class="home_subhead_text text-center text-start">Recently Added Properties</h2>
                    </div>
                    <div class="col-md-8 text-start">
                        <hr class="home_subhead_line">
                    </div>
                </div>
            </div>


            <div class="row mx-auto my-auto trend_contain">
                <div id="recent" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item carousel-item2 justify-content-center active">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                        <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>" class="prop_card_link">
                                            <div class="card text-left prop_lists prop_lists2">
                                                 <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]); echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 0; $i < 3; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                        <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>" class="prop_card_link">
                                            <div class="card text-left prop_lists prop_lists2">
                                                 <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]); echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item .carousel-item2">
                                <div class="row justify-content-center">
                                    <?php for ($i = 3; $i < 6; $i++) {
                                        if (count($property) <= $i) {
                                            break;
                                        }
                                    ?>
                                        <div class="col-md-4">
                                        <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>" class="prop_card_link">
                                            <div class="card text-left prop_lists prop_lists2">
                                                 <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]); echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#recent" role="button" data-slide="prev">
                        <div class="home_arrow_new hrn_left">
                            <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                        </div>

                    </a>

                    <a class="carousel-control-next w-auto" href="#recent" role="button" data-slide="next">
                        <div class="home_arrow_new hrn_right">
                            <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                        </div>

                    </a>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section class="trending2 mobi">
        <div class="container">
            <div class="home_subhead">
                <div class="row justify-content-start align-items-center">
                    <div class="col-md-4 ">
                        <h2 class="home_subhead_text text-center text-start">Recently Added Properties</h2>
                    </div>
                    <div class="col-md-8 text-start">
                        <hr class="home_subhead_line">
                    </div>
                </div>
            </div>


            <div class="row mx-auto my-auto trend_contain">
                <div id="recen" class="carousel carousel2 slide w-100" data-ride="carousel">
                    <div class="inner_container">
                        <div class="carousel-inner w-100" role="listbox">
                            <?php for ($i = 0; $i < 5; $i++) {
                                if (count($property) <= $i) {
                                    break;
                                }
                            ?>
                                <div class="carousel-item carousel-item2 justify-content-center <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <div class="row justify-content-center">

                                        <div class="col-md-4">
                                        <a href="<?php echo base_url() . 'single_property/fetch/' . $property[$i]["property_id"] ?>" class="prop_card_link">
                                            <div class="card text-left prop_lists prop_lists2">
                                                 <img class="card-img-top" src="<?php $img = explode(",", $property[$i]["list_images"]); echo base_url() . 'assets/img/property_list/' . $img[0]; ?>" alt="">
                                                <div class="card-body">
                                                    <span class="prop_lists_price">&#8377; <?php echo $property[$i]['list_price'] ?></span>
                                                    <p class="prop_lists_add"> <?php echo $property[$i]['list_property_type'] . ', ' . $property[$i]['list_furnished_type']; ?></p>
                                                    <p><span><?php echo $property[$i]['list_locality'] . ',' . $property[$i]['list_city']; ?></span></p>
                                                    <h4 class=" prop_lists_text"><?php echo ($property[$i]['list_property_type'] == 'commercial') ? $property[$i]['list_unit'] . ' (sq-ft)' : $property[$i]['list_bhk'] . ' BHK appartment' ?></h4>

                                                    <div class="row flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <span class="poster_name">By <?php echo $property[$i]['list_name'] ?></span>
                                                        </div>

                                                        <div class="col text-right">
                                                            <a href="tel:+91<?php echo $property[$i]['list_mobile'] ?>"><button class="btn prop_lists_btn"><i class="fa fa-phone" aria-hidden="true"></i> Contact </button></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#recen" role="button" data-slide="prev">
                        <div class="home_arrow_new hrn_left">
                            <span class="home_arrow_left"><i class="fas fa-angle-left "></i></span>
                        </div>

                    </a>

                    <a class="carousel-control-next w-auto" href="#recen" role="button" data-slide="next">
                        <div class="home_arrow_new hrn_right">
                            <span class="home_arrow_right"><i class="fas fa-angle-right "></i></span>
                        </div>

                    </a>
                </div>
            </div>
        </div>

        </div>
    </section>

</main>




<script>
    $('.carousel').carousel({
        interval: false,
    });
</script>


<script type="text/javascript">
    $("#click").keypress(function() {
        var city = $("#city").val();
        var type = $("#type").val();
        var loc = $("#click").val();
        $.ajax({
            url: "<?php echo base_url() . 'home/search'; ?>",
            type: "post",
            dataType: "json",
            data: {
                city: city,
                type: type,
                loc: loc
            },
        }).done(function(response) {
            console.log(response)
            for (var key in response.msg) {
                $('#searches').html("<option value='" + response.msg[key].list_locality + "'>");
            }

        });
    });
</script>