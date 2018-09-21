@extends('layouts.app_admin')

@section('content')

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('/home') }}">Accueil</a>
    </li>
    <li class="breadcrumb-item active">Ajouter un point</li>
    </ol>

<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
<div class="row">
        <div class="col-md-12 text-center ">
                <nav class="nav-justified ">
                  <div class="nav nav-tabs " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Identification</a>
                    <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Fréquence</a>
                    <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab" aria-controls="pop3" aria-selected="false">Paramètres</a>

                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <div class="pt-4">
                            <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <label>Nom de échantillonneur 1</label>
                                            <input type="text" class="form-control" placeholder="Échantillonneur 1">
                                        </div>
                                        <div class="col">
                                            <label>Nom de échantillonneur 2</label>
                                            <input type="text" class="form-control" placeholder="Échantillonneur 2">
                                        </div>
                                        <div class="col">
                                            <label>Nom de échantillonneur 3</label>
                                            <input type="text" class="form-control" placeholder="Échantillonneur 3">
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col">
                                            <label>Date de prélèvement</label>
                                            <input type="date" class="form-control" >
                                        </div>
                                        <div class="col">
                                                <label>Code d'échantillonnage</label>
                                            <input type="text" class="form-control" placeholder="Code d'échantillonnage">
                                        </div>

                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col">
                                            <label>Type de milieu</label>
                                            <select  class="form-control" name="milieu" id="milieu">
                                                <option selected>Choisir...</option>
                                                <option value="01">Les Oueds</option>
                                                <option value="02">Les Grands Ensembles Portuaires</option>
                                                <option value="03">Baies du Littoral</option>
                                                <option value="04">Lacs et Chotts</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label>Zone de surveillance</label>
                                            <select  class="form-control" name="zone" id="zone">
                                                    <option value="01_Macta">Macta</option>
                                                    <option value="01_Tafna">Tafna</option>
                                                    <option value="01_Chellif">Chellif</option>
                                                    <option value="01_Mazafran">Mazafran</option>
                                                    <option value="01_El Harrach">El Harrach</option>
                                                    <option value="01_EL Hamiz">EL Hamiz</option>
                                                    <option value="01_Les Issers">Les Issers</option>
                                                    <option value="01_Sebaou">Sebaou</option>
                                                    <option value="01_Soumam">Soumam</option>
                                                    <option value="01_Djendjen">Djendjen</option>
                                                    <option value="01_Saf-Saf">Saf-Saf</option>
                                                    <option value="01_Seybouse">Seybouse</option>

                                                    <option value="02_Ghazaouet">Ghazaouet</option>
                                                    <option value="02_Oran">Oran</option>
                                                    <option value="02_Arzew">Arzew</option>
                                                    <option value="02_Alger">Alger</option>
                                                    <option value="02_Béjaia">Béjaia</option>
                                                    <option value="02_Skikda">Skikda</option>
                                                    <option value="02_Djendjen">Djendjen</option>
                                                    <option value="02_Annaba">Annaba</option>

                                                    <option value="03_Les Andalouses">Les Andalouses</option>
                                                    <option value="03_Golf d'Arzew">Golf d'Arzew</option>
                                                    <option value="03_Bou Ismail">Bou Ismail</option>
                                                    <option value="03_Alger">Alger</option>
                                                    <option value="03_Béjaia">Béjaia</option>
                                                    <option value="03_Golf de stora">Golf de stora</option>
                                                    <option value="03_Chétaibi">Chétaibi</option>
                                                    <option value="03_Baies des corailleurs">Baies des corailleurs</option>

                                                    <option value="04_Sebkha d'Oran">Sebkha d'Oran</option>
                                                    <option value="04_Zehrez Gharbi">Zehrez Gharbi</option>
                                                    <option value="04_Chott El Hodna">Chott El Hodna</option>
                                                    <option value="04_Lac Réghaia">Lac Réghaia</option>
                                                    <option value="04_Lac Tonga">Lac Tonga</option>
                                                    <option value="04_Lac Oubira">Lac Oubira</option>
                                                    <option value="04_Lac Fetzara">Lac Fetzara</option>
                                                    <option value="04_Lac des Oiseaux">Lac des Oiseaux</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col">
                                            <label>Wilaya</label>
                                            <select class="form-control" name="wilaya" id="wilaya">
                                                    <option value="01">01- Adrar</option>
                                                    <option value="02">02- Chlef</option>
                                                    <option value="03">03- Laghouat</option>
                                                    <option value="04">04- Oum El Bouaghi</option>
                                                    <option value="05">05- Batna</option>
                                                    <option value="06">06- Béjaïa</option>
                                                    <option value="07">07- Biskra</option>
                                                    <option value="08">08- Béchar</option>
                                                    <option value="09">09- Blida</option>
                                                    <option value="10">10- Bouira</option>
                                                    <option value="11">11- Tamanrasset</option>
                                                    <option value="12">12- Tébessa</option>
                                                    <option value="13">13- Tlemcen</option>
                                                    <option value="14">14- Tiaret</option>
                                                    <option value="15">15- Tizi Ouzou</option>
                                                    <option value="16">16- Alger</option>
                                                    <option value="17">17- Djelfa</option>
                                                    <option value="18">18- Jijel</option>
                                                    <option value="19">19- Sétif</option>
                                                    <option value="20">20- Saïda</option>
                                                    <option value="21">21- Skikda</option>
                                                    <option value="22">22- Sidi Bel Abbès</option>
                                                    <option value="23">23- Annaba</option>
                                                    <option value="24">24- Guelma</option>
                                                    <option value="25">25- Constantine</option>
                                                    <option value="26">26- Médéa</option>
                                                    <option value="27">27- Mostaganem</option>
                                                    <option value="28">28- M'Sila</option>
                                                    <option value="29">29- Mascara</option>
                                                    <option value="30">30- Ouargla</option>
                                                    <option value="31">31- Oran</option>
                                                    <option value="32">32- El Bayadh</option>
                                                    <option value="33">33- Illizi</option>
                                                    <option value="34">34- Bordj Bou Arreridj</option>
                                                    <option value="35">35- Boumerdès</option>
                                                    <option value="36">36- El Tarf</option>
                                                    <option value="37">37- Tindouf</option>
                                                    <option value="38">38- Tissemsilt</option>
                                                    <option value="39">39- El Oued</option>
                                                    <option value="40">40- Khenchela</option>
                                                    <option value="41">41- Souk Ahras</option>
                                                    <option value="42">42- Tipaza</option>
                                                    <option value="43">43- Mila</option>
                                                    <option value="44">44- Aïn Defla</option>
                                                    <option value="45">45- Naâma</option>
                                                    <option value="46">46- Aïn Témouchent</option>
                                                    <option value="47">47- Ghardaïa</option>
                                                    <option value="48">48- Relizane</option>
                                              </select>
                                        </div>
                                        <div class="col">
                                            <label>Commune</label>
                                            <select  class="form-control" name="commune" id="commune">
                                                <!--Adrar-->
                                                <option value="01_Adrar">Adrar</option>
                                                <option value="01_Tamest">Tamest</option>
                                                <option value="01_Charouine">Charouine</option>
                                                <option value="01_Reggane">Reggane</option>
                                                <option value="01_In Zghmir">In Zghmir</option>
                                                <option value="01_Tit">Tit</option>
                                                <option value="01_Ksar Kaddour">Ksar Kaddour</option>
                                                <option value="01_Tsabit">Tsabit</option>
                                                <option value="01_Timimoun">Timimoun</option>
                                                <option value="01_Ouled Saïd">Ouled Saïd</option>
                                                <option value="01_Zaouiet Kounta">Zaouiet Kounta</option>
                                                <option value="01_Aoulef">Aoulef</option>
                                                <option value="01_Tamekten">Tamekten</option>
                                                <option value="01_Tamantit">Tamantit</option>
                                                <option value="01_Fenoughil">Fenoughil</option>
                                                <option value="01_Tinerkouk">Tinerkouk</option>
                                                <option value="01_Deldoul">Deldoul</option>
                                                <option value="01_Sali">Sali</option>
                                                <option value="01_Akabli">Akabli</option>
                                                <option value="01_Metarfa">Metarfa</option>
                                                <option value="01_Ouled Ahmed Tammi">Ouled Ahmed Tammi</option>
                                                <option value="01_Bouda">Bouda</option>
                                                <option value="01_Aougrout">Aougrout</option>
                                                <option value="01_Talmine">Talmine</option>
                                                <option value="01_Bordj Badji Mokhtar">Bordj Badji Mokhtar</option>
                                                <option value="01_Sebaa">Sebaa</option>
                                                <option value="01_Ouled Aïssa">Ouled Aïssa</option>
                                                <option value="01_Timiaouine">Timiaouine</option>


                                                <!--Chlef-->
                                                <option value="02_Abou El Hassan">Abou El Hassan</option>
                                                <option value="02_Aïn Merane">Aïn Merane</option>
                                                <option value="02_Bénairia">Bénairia</option>
                                                <option value="02_Beni Bouateb">Beni Bouateb</option>
                                                <option value="02_Beni Haoua">Beni Haoua</option>
                                                <option value="02_Beni Rached">Beni Rached</option>
                                                <option value="02_Boukadir">Boukadir</option>
                                                <option value="02_Bouzeghaia">Bouzeghaia</option>
                                                <option value="02_Breira">Breira</option>
                                                <option value="02_Chettia">Chettia</option>
                                                <option value="02_Chlef">Chlef</option>
                                                <option value="02_Dahra">Dahra</option>
                                                <option value="02_El Hadjadj">El Hadjadj</option>
                                                <option value="02_El Karimia">El Karimia</option>
                                                <option value="02_El Marsa">El Marsa</option>
                                                <option value="02_Harchoun">Harchoun</option>
                                                <option value="02_Harenfa">Harenfa</option>
                                                <option value="02_Labiod Medjadja">Labiod Medjadja</option>
                                                <option value="02_Moussadek">Moussadek</option>
                                                <option value="02_Oued Fodda">Oued Fodda</option>
                                                <option value="02_Oued Goussine">Oued Goussine</option>
                                                <option value="02_Oued Sly">Oued Sly</option>
                                                <option value="02_Ouled Abbes">Ouled Abbes</option>
                                                <option value="02_Ouled Ben Abdelkader">Ouled Ben Abdelkader</option>
                                                <option value="02_Ouled Fares">Ouled Fares</option>
                                                <option value="02_Oum Drou">Oum Drou</option>
                                                <option value="02_Sendjas">Sendjas</option>
                                                <option value="02_Sidi Abderrahmane">Sidi Abderrahmane</option>
                                                <option value="02_Sidi Akkacha">Sidi Akkacha</option>
                                                <option value="02_Sobha">Sobha</option>
                                                <option value="02_Tadjena">Tadjena</option>
                                                <option value="02_Talassa">Talassa</option>
                                                <option value="02_Taougrite">Taougrite</option>
                                                <option value="02_Ténès">Ténès</option>
                                                <option value="02_Zeboudja">Zeboudja</option>

                                                <!--Laghouat-->
                                                <option value="03_Laghouat">Laghouat</option>
                                                <option value="03_Ksar El Hirane">Ksar El Hirane</option>
                                                <option value="03_BenNaceur Ben chohra">BenNaceur Ben chohra</option>
                                                <option value="03_Sidi Makhlouf">Sidi Makhlouf</option>
                                                <option value="03_Hassi Delaa">Hassi Delaa</option>
                                                <option value="03_Hassi R'Mel">Hassi R'Mel</option>
                                                <option value="03_Aïn Madhi">Aïn Madhi</option>
                                                <option value="03_Tadjemout">Tadjemout</option>
                                                <option value="03_Kheneg">Kheneg</option>
                                                <option value="03_Gueltat Sidi Saad">Gueltat Sidi Saad</option>
                                                <option value="03_Aïn Sidi Ali">Aïn Sidi Ali</option>
                                                <option value="03_Beidha">Beidha</option>
                                                <option value="03_Brida">Brida</option>
                                                <option value="03_El Ghicha">El Ghicha</option>
                                                <option value="03_Hadj Mechri">Hadj Mechri</option>
                                                <option value="03_Sebgag">Sebgag</option>
                                                <option value="03_Taouila">Taouila</option>
                                                <option value="03_Tadjrouna">Tadjrouna</option>
                                                <option value="03_Aflou">Aflou</option>
                                                <option value="03_El Assafia">El Assafia</option>
                                                <option value="03_Oued Morra">Oued Morra</option>
                                                <option value="03_Oued M'Zi">Oued M'Zi</option>
                                                <option value="03_El Houaita">El Houaita</option>
                                                <option value="03_Sidi Bouzid">Sidi Bouzid</option>

                                                <!--Oum El Bouaghi-->
                                                <option value="04_Oum el Bouaghi">Oum el Bouaghi</option>
                                                <option value="04_Aïn Beida">Aïn Beida</option>
                                                <option value="04_Aïn M'lila">Aïn M'lila</option>
                                                <option value="04_Behir Chergui">Behir Chergui</option>
                                                <option value="04_El Amiria">El Amiria</option>
                                                <option value="04_Sigus">Sigus</option>
                                                <option value="04_El Belala">El Belala</option>
                                                <option value="04_Aïn Babouche">Aïn Babouche</option>
                                                <option value="04_Berriche">Berriche</option>
                                                <option value="04_Ouled Hamla">Ouled Hamla</option>
                                                <option value="04_D'hala ">D'hala </option>
                                                <option value="04_Aïn Kercha">Aïn Kercha</option>
                                                <option value="04_Hanchir Toumghani">Hanchir Toumghani</option>
                                                <option value="04_El Djazia">El Djazia</option>
                                                <option value="04_Aïn Diss">Aïn Diss</option>
                                                <option value="04_Fkirina">Fkirina</option>
                                                <option value="04_Souk Naamane">Souk Naamane</option>
                                                <option value="04_Zorg">Zorg</option>
                                                <option value="04_El Fedjouz Boughrara Saoudi">El Fedjouz Boughrara Saoudi</option>
                                                <option value="04_Ouled Zaoui">Ouled Zaoui</option>
                                                <option value="04_Bir Chouhada">Bir Chouhada</option>
                                                <option value="04_Ksar Sbahi">Ksar Sbahi</option>
                                                <option value="04_Oued Nini">Oued Nini</option>
                                                <option value="04_Meskiana">Meskiana</option>
                                                <option value="04_Aïn Fakroun">Aïn Fakroun</option>
                                                <option value="04_Rahia">Rahia</option>
                                                <option value="04_Aïn Zitoun">Aïn Zitoun</option>
                                                <option value="04_Ouled Gacem">Ouled Gacem</option>
                                                <option value="04_El Harmilia">El Harmilia</option>

                                                <!--Batna-->
                                                <option value="05_Batna">Batna</option>
                                                <option value="05_Ghassira">Ghassira</option>
                                                <option value="05_Maafa">Maafa</option>
                                                <option value="05_Merouana">Merouana</option>
                                                <option value="05_Seriana">Seriana</option>
                                                <option value="05_Menaa">Menaa</option>
                                                <option value="05_El Madher">El Madher</option>
                                                <option value="05_Tazoult">Tazoult</option>
                                                <option value="05_N'Gaous">N'Gaous</option>
                                                <option value="05_Guigba">Guigba</option>
                                                <option value="05_Inoughissen">Inoughissen</option>
                                                <option value="05_Ouyoun El Assafir">Ouyoun El Assafir</option>
                                                <option value="05_Djerma">Djerma</option>
                                                <option value="05_Bitam">Bitam</option>
                                                <option value="05_Abdelkader Azil">Abdelkader Azil</option>
                                                <option value="05_Arris">Arris</option>
                                                <option value="05_Kimmel">Kimmel</option>
                                                <option value="05_Tilatou">Tilatou</option>
                                                <option value="05_Aïn Djasser">Aïn Djasser</option>
                                                <option value="05_Ouled Sellam">Ouled Sellam</option>
                                                <option value="05_Tigherghar">Tigherghar</option>
                                                <option value="05_Aïn Yagout">Aïn Yagout</option>
                                                <option value="05_Sefiane">Sefiane</option>
                                                <option value="05_Fesdis">Fesdis</option>
                                                <option value="05_Rahbat">Rahbat</option>
                                                <option value="05_Tighanimine">Tighanimine</option>
                                                <option value="05_Lemsane">Lemsane</option>
                                                <option value="05_Ksar Bellezma">Ksar Bellezma</option>
                                                <option value="05_Seggana">Seggana</option>
                                                <option value="05_Ichmoul">Ichmoul</option>
                                                <option value="05_Foum Toub">Foum Toub</option>
                                                <option value="05_Ben Foudhala El Hakania">Ben Foudhala El Hakania</option>
                                                <option value="05_Oued El Ma">Oued El Ma</option>
                                                <option value="05_Talkhamt">Talkhamt</option>
                                                <option value="05_Bouzina">Bouzina</option>
                                                <option value="05_Chemora">Chemora</option>
                                                <option value="05_Oued Chaaba">Oued Chaaba</option>
                                                <option value="05_Taxlent">Taxlent</option>
                                                <option value="05_Gosbat">Gosbat</option>
                                                <option value="05_Ouled Aouf">Ouled Aouf</option>
                                                <option value="05_Boumagueur">Boumagueur</option>
                                                <option value="05_Barika">Barika</option>
                                                <option value="05_Djezar">Djezar</option>
                                                <option value="05_T'Kout">T'Kout</option>
                                                <option value="05_Aïn Touta">Aïn Touta</option>
                                                <option value="05_Hidoussa">Hidoussa</option>
                                                <option value="05_Teniet El Abed">Teniet El Abed</option>
                                                <option value="05_Oued Taga">Oued Taga</option>
                                                <option value="05_Ouled Fadel">Ouled Fadel</option>
                                                <option value="05_Timgad">Timgad</option>
                                                <option value="05_Ras El Aioun">Ras El Aioun</option>
                                                <option value="05_Chir">Chir</option>
                                                <option value="05_Ouled Si Slimane">Ouled Si Slimane</option>
                                                <option value="05_Zanat El Beida">Zanat El Beida</option>
                                                <option value="05_M'doukel">M'doukel</option>
                                                <option value="05_Ouled Ammar">Ouled Ammar</option>
                                                <option value="05_El Hassi">El Hassi</option>
                                                <option value="05_Lazrou">Lazrou</option>
                                                <option value="05_Boumia">Boumia</option>
                                                <option value="05_Boulhilat">Boulhilat</option>
                                                <option value="05_Larbaâ">Larbaâ</option>

                                                <!--Béjaïa-->
                                                <option value="06_Béjaïa">Béjaïa</option>
                                                <option value="06_Amizour">Amizour</option>
                                                <option value="06_Ferraoun">Ferraoun</option>
                                                <option value="06_Taourirt Ighil">Taourirt Ighil</option>
                                                <option value="06_Chellata">Chellata</option>
                                                <option value="06_Tamokra">Tamokra</option>
                                                <option value="06_Timezrit">Timezrit</option>
                                                <option value="06_Souk El Ténine">Souk El Ténine</option>
                                                <option value="06_M'cisna">M'cisna</option>
                                                <option value="06_Tinabdher">Tinabdher</option>
                                                <option value="06_Tichy">Tichy</option>
                                                <option value="06_Semaoun">Semaoun</option>
                                                <option value="06_Kendira">Kendira</option>
                                                <option value="06_Tifra">Tifra</option>
                                                <option value="06_Ighram">Ighram</option>
                                                <option value="06_Amalou">Amalou</option>
                                                <option value="06_Ighil Ali">Ighil Ali</option>
                                                <option value="06_Fenaïa Ilmaten">Fenaïa Ilmaten</option>
                                                <option value="06_Toudja">Toudja</option>
                                                <option value="06_Darguina">Darguina</option>
                                                <option value="06_Sidi-Ayad">Sidi-Ayad</option>
                                                <option value="06_Aokas">Aokas</option>
                                                <option value="06_Beni Djellil">Beni Djellil</option>
                                                <option value="06_Adekar">Adekar</option>
                                                <option value="06_Akbou">Akbou</option>
                                                <option value="06_Seddouk">Seddouk</option>
                                                <option value="06_Tazmalt">Tazmalt</option>
                                                <option value="06_Aït-R'zine">Aït-R'zine</option>
                                                <option value="06_Chemini">Chemini</option>
                                                <option value="06_Souk-Oufella">Souk-Oufella</option>
                                                <option value="06_Taskriout">Taskriout</option>
                                                <option value="06_Tibane">Tibane</option>
                                                <option value="06_Tala Hamza">Tala Hamza</option>
                                                <option value="06_Barbacha">Barbacha</option>
                                                <option value="06_Beni Ksila">Beni Ksila</option>
                                                <option value="06_Ouzellaguen">Ouzellaguen</option>
                                                <option value="06_Bouhamza">Bouhamza</option>
                                                <option value="06_Beni Mellikeche">Beni Mellikeche</option>
                                                <option value="06_Sidi-Aïch">Sidi-Aïch</option>
                                                <option value="06_El Kseur">El Kseur</option>
                                                <option value="06_Melbou">Melbou</option>
                                                <option value="06_Akfadou">Akfadou</option>
                                                <option value="06_Leflaye">Leflaye</option>
                                                <option value="06_Kherrata">Kherrata</option>
                                                <option value="06_Draâ El-Kaïd">Draâ El-Kaïd</option>
                                                <option value="06_Tamridjet">Tamridjet</option>
                                                <option value="06_Aït-Smail">Aït-Smail</option>
                                                <option value="06_Boukhelifa">Boukhelifa</option>
                                                <option value="06_Tizi N'Berber">Tizi N'Berber</option>
                                                <option value="06_Beni Maouche">Beni Maouche</option>
                                                <option value="06_Oued Ghir">Oued Ghir</option>
                                                <option value="06_Boudjellil">Boudjellil</option>

                                                <!--Biskra-->
                                                <option value="07_Aïn Naga">Aïn Naga</option>
                                                <option value="07_Aïn Zaatout">Aïn Zaatout</option>
                                                <option value="07_Besbes">Besbes</option>
                                                <option value="07_Biskra">Biskra</option>
                                                <option value="07_Bordj Ben Azzouz">Bordj Ben Azzouz</option>
                                                <option value="07_Bouchagroune">Bouchagroune</option>
                                                <option value="07_Branis">Branis</option>
                                                <option value="07_Chetma">Chetma</option>
                                                <option value="07_Djemorah">Djemorah</option>
                                                <option value="07_Doucen">Doucen</option>
                                                <option value="07_Ech Chaïba">Ech Chaïba</option>
                                                <option value="07_El Feidh">El Feidh</option>
                                                <option value="07_El Ghrous">El Ghrous</option>
                                                <option value="07_El Hadjeb">El Hadjeb</option>
                                                <option value="07_El Haouch">El Haouch</option>
                                                <option value="07_El Kantara">El Kantara</option>
                                                <option value="07_El Mizaraa">El Mizaraa</option>
                                                <option value="07_El Outaya">El Outaya</option>
                                                <option value="07_Foughala">Foughala</option>
                                                <option value="07_Khenguet Sidi Nadji">Khenguet Sidi Nadji</option>
                                                <option value="07_Lichana">Lichana</option>
                                                <option value="07_Lioua">Lioua</option>
                                                <option value="07_M'Chouneche">M'Chouneche</option>
                                                <option value="07_Mekhadma">Mekhadma</option>
                                                <option value="07_M'Lili">M'Lili</option>
                                                <option value="07_Ouled Djellal">Ouled Djellal</option>
                                                <option value="07_Oumache">Oumache</option>
                                                <option value="07_Ourlal">Ourlal</option>
                                                <option value="07_Ras El Miaad">Ras El Miaad</option>
                                                <option value="07_Sidi Khaled">Sidi Khaled</option>
                                                <option value="07_Sidi Okba">Sidi Okba</option>
                                                <option value="07_Tolga">Tolga</option>
                                                <option value="07_Zeribet El Oued">Zeribet El Oued</option>

                                                <!--Béchar-->
                                                <option value="08_Béchar">Béchar</option>
                                                <option value="08_Erg Ferradj">Erg Ferradj</option>
                                                <option value="08_Ouled Khoudir">Ouled Khoudir</option>
                                                <option value="08_Meridja">Meridja</option>
                                                <option value="08_Timoudi">Timoudi</option>
                                                <option value="08_Lahmar">Lahmar</option>
                                                <option value="08_Béni Abbès">Béni Abbès</option>
                                                <option value="08_Beni Ikhlef">Beni Ikhlef</option>
                                                <option value="08_Mechraa Houari Boumedienne >">Mechraa Houari Boumedienne</option>
                                                <option value="08_Kenadsa">Kenadsa</option>
                                                <option value="08_Igli">Igli</option>
                                                <option value="08_Tabelbala">Tabelbala </option>
                                                <option value="08_Taghit">Taghit</option>
                                                <option value="08_El Ouata">El Ouata</option>
                                                <option value="08_Boukais">Boukais</option>
                                                <option value="08_Mougheul">Mougheul </option>
                                                <option value="08_Abadla">Abadla </option>
                                                <option value="08_Kerzaz">Kerzaz </option>
                                                <option value="08_Ksabi">Ksabi </option>
                                                <option value="08_Tamtert">Tamtert </option>
                                                <option value="08_Beni Ounif">Beni Ounif</option>

                                                <!--Blida-->
                                                <option value="09_Blida">Blida</option>
                                                <option value="09_Chebli">Chebli</option>
                                                <option value="09_Bouinan">Bouinan</option>
                                                <option value="09_Oued Alleug">Oued Alleug</option>
                                                <option value="09_Ouled Yaïch">Ouled Yaïch</option>
                                                <option value="09_Chréa">Chréa</option>
                                                <option value="09_El Affroun">El Affroun</option>
                                                <option value="09_Chiffa">Chiffa</option>
                                                <option value="09_Hammam Melouane">Hammam Melouane</option>
                                                <option value="09_Benkhelil">Benkhelil</option>
                                                <option value="09_Soumaa">Soumaa</option>
                                                <option value="09_Mouzaia">Mouzaia</option>
                                                <option value="09_Souhane">Souhane</option>
                                                <option value="09_Meftah">Meftah</option>
                                                <option value="09_Ouled Slama">Ouled Slama</option>
                                                <option value="09_Boufarik">Boufarik</option>
                                                <option value="09_Larbaa">Larbaa</option>
                                                <option value="09_Oued Djer">Oued Djer</option>
                                                <option value="09_Beni Tamou">Beni Tamou</option>
                                                <option value="09_Bouarfa">Bouarfa</option>
                                                <option value="09_Beni Mered">Beni Mered</option>
                                                <option value="09_Bougara">Bougara</option>
                                                <option value="09_Guerouaou">Guerouaou</option>
                                                <option value="09_Aïn Romana">Aïn Romana</option>
                                                <option value="09_Djebabra">Djebabra</option>

                                                <!--Bouira-->
                                                <option value="10_Aïn Bessem">Aïn Bessem</option>
                                                <option value="10_Hanif">Hanif</option>
                                                <option value="10_Aghbalou">Aghbalou</option>
                                                <option value="10_Aïn El Hadjar">Aïn El Hadjar</option>
                                                <option value="10_Ahl El Ksar">Ahl El Ksar</option>
                                                <option value="10_Aïn Laloui">Aïn Laloui</option>
                                                <option value="10_Ath Mansour">Ath Mansour</option>
                                                <option value="10_Aomar">Aomar</option>
                                                <option value="10_Aïn El Turc">Aïn El Turc</option>
                                                <option value="10_Aït Laziz">Aït Laziz</option>
                                                <option value="10_Bouderbala">Bouderbala</option>
                                                <option value="10_Bechloul">Bechloul</option>
                                                <option value="10_Bir Ghbalou">Bir Ghbalou</option>
                                                <option value="10_Boukram">Boukram</option>
                                                <option value="10_Bordj Okhriss">Bordj Okhriss</option>
                                                <option value="10_Bouira">Bouira</option>
                                                <option value="10_Chorfa">Chorfa</option>
                                                <option value="10_Dechmia">Dechmia</option>
                                                <option value="10_Dirrah">Dirrah</option>
                                                <option value="10_Djebahia">Djebahia</option>
                                                <option value="10_El Hakimia">El Hakimia</option>
                                                <option value="10_El Hachimia">El Hachimia</option>
                                                <option value="10_El Adjiba">El Adjiba</option>
                                                <option value="10_El Khabouzia">El Khabouzia</option>
                                                <option value="10_El Mokrani">El Mokrani</option>
                                                <option value="10_El Asnam">El Asnam</option>
                                                <option value="10_Guerrouma">Guerrouma</option>
                                                <option value="10_Haizer">Haizer</option>
                                                <option value="10_Hadjera Zerga">Hadjera Zerga</option>
                                                <option value="10_Kadiria">Kadiria</option>
                                                <option value="10_Lakhdaria">Lakhdaria</option>
                                                <option value="10_M'Chedallah">M'Chedallah</option>
                                                <option value="10_Mezdour">Mezdour</option>
                                                <option value="10_Maala">Maala</option>
                                                <option value="10_Maamora">Maamora</option>
                                                <option value="10_Oued El Berdi">Oued El Berdi</option>
                                                <option value="10_Ouled Rached">Ouled Rached</option>
                                                <option value="10_Raouraoua">Raouraoua</option>
                                                <option value="10_Ridane">Ridane</option>
                                                <option value="10_Saharidj">Saharidj</option>
                                                <option value="10_Sour El Ghouzlane">Sour El Ghouzlane</option>
                                                <option value="10_Souk El Khemis">Souk El Khemis</option>
                                                <option value="10_Taguedit">Taguedit</option>
                                                <option value="10_Taghzout">Taghzout</option>
                                                <option value="10_Zbarbar">Zbarbar</option>

                                                <!--Tamanrasset-->
                                                <option value="11_Tamanrasset">Tamanrasset</option>
                                                <option value="11_Abalessa">Abalessa</option>
                                                <option value="11_In Ghar">In Ghar</option>
                                                <option value="11_In Guezzam">In Guezzam</option>
                                                <option value="11_Idles">Idles</option>
                                                <option value="11_Tazrouk">Tazrouk</option>
                                                <option value="11_Tin Zaouatine">Tin Zaouatine</option>
                                                <option value="11_In Salah">In Salah</option>
                                                <option value="11_In Amguel">In Amguel</option>
                                                <option value="11_Foggaret Ezzaouia">Foggaret Ezzaouia</option>

                                                <!--Tébessa-->
                                                <option value="12_Tébessa">Tébessa</option>
                                                <option value="12_Bir el-Ater">Bir el-Ater</option>
                                                <option value="12_Cheria">Cheria</option>
                                                <option value="12_Stah Guentis">Stah Guentis</option>
                                                <option value="12_El Aouinet">El Aouinet</option>
                                                <option value="12_El Houidjbet">El Houidjbet</option>
                                                <option value="12_Safsaf El Ouesra">Safsaf El Ouesra</option>
                                                <option value="12_Hammamet">Hammamet</option>
                                                <option value="12_Negrine">Negrine</option>
                                                <option value="12_Bir Mokkadem">Bir Mokkadem</option>
                                                <option value="12_El Kouif">El Kouif</option>
                                                <option value="12_Morsott">Morsott</option>
                                                <option value="12_El Ogla">El Ogla</option>
                                                <option value="12_Bir Dheb">Bir Dheb</option>
                                                <option value="12_Ogla Melha">Ogla Melha</option>
                                                <option value="12_Guorriguer">Guorriguer</option>
                                                <option value="12_Bekkaria">Bekkaria</option>
                                                <option value="12_Boukhadra">Boukhadra</option>
                                                <option value="12_Ouenza">Ouenza</option>
                                                <option value="12_El Ma Labiodh">El Ma Labiodh</option>
                                                <option value="12_Oum Ali">Oum Ali</option>
                                                <option value="12_Tlidjene">Tlidjene</option>
                                                <option value="12_Aïn Zerga">Aïn Zerga</option>
                                                <option value="12_El Meridj">El Meridj</option>
                                                <option value="12_Boulhaf Dir">Boulhaf Dir</option>
                                                <option value="12_Bedjene">Bedjene</option>
                                                <option value="12_El Mezeraa">El Mezeraa</option>
                                                <option value="12_Ferkane">Ferkane</option>

                                                <!--Tlemcen-->
                                                <option value="13_Tlemcen">Tlemcen</option>
                                                <option value="13_Beni Mester">Beni Mester</option>
                                                <option value="13_Aïn Tallout">Aïn Tallout</option>
                                                <option value="13_Remchi">Remchi</option>
                                                <option value="13_El Fehoul">El Fehoul</option>
                                                <option value="13_Sabra">Sabra</option>
                                                <option value="13_Ghazaouet">Ghazaouet</option>
                                                <option value="13_Souani">Souani</option>
                                                <option value="13_Djebala">Djebala</option>
                                                <option value="13_El Gor">El Gor</option>
                                                <option value="13_Oued Lakhdar">Oued Lakhdar</option>
                                                <option value="13_Aïn Fezza">Aïn Fezza</option>
                                                <option value="13_Ouled Mimoun">Ouled Mimoun</option>
                                                <option value="13_Amieur">Amieur</option>
                                                <option value="13_Aïn Youcef">Aïn Youcef</option>
                                                <option value="13_Zenata">Zenata</option>
                                                <option value="13_Beni Snous">Beni Snous</option>
                                                <option value="13_Bab El Assa">Bab El Assa</option>
                                                <option value="13_Dar Yaghmouracene">Dar Yaghmouracene</option>
                                                <option value="13_Fellaoucene">Fellaoucene</option>
                                                <option value="13_Azails">Azails</option>
                                                <option value="13_Sebaa Chioukh">Sebaa Chioukh</option>
                                                <option value="13_Terny (Beni-Warnide)">Terny (Beni-Warnide)</option>
                                                <option value="13_Bensekrane">Bensekrane</option>
                                                <option value="13_Aïn Nehala">Aïn Nehala</option>
                                                <option value="13_Hennaya">Hennaya</option>
                                                <option value="13_Maghnia">Maghnia</option>
                                                <option value="13_Hammam Boughrara">Hammam Boughrara</option>
                                                <option value="13_Souahlia">Souahlia</option>
                                                <option value="13_MSirda Fouaga">MSirda Fouaga</option>
                                                <option value="13_Aïn Fetah">Aïn Fetah</option>
                                                <option value="13_El Aricha">El Aricha</option>
                                                <option value="13_Souk Tlata">Souk Tlata</option>
                                                <option value="13_Sidi Abdelli">Sidi Abdelli</option>
                                                <option value="13_Sebdou">Sebdou</option>
                                                <option value="13_Beni Ouarsous">Beni Ouarsous</option>
                                                <option value="13_Sidi Medjahed">Sidi Medjahed</option>
                                                <option value="13_Beni Boussaid">Beni Boussaid</option>
                                                <option value="13_Marsa Ben M'Hidi">Marsa Ben M'Hidi</option>
                                                <option value="13_Nedroma">Nedroma</option>
                                                <option value="13_Sidi Djillali">Sidi Djillali</option>
                                                <option value="13_Beni Bahdel">Beni Bahdel</option>
                                                <option value="13_El Bouihi">El Bouihi</option>
                                                <option value="13_Honaïne">Honaïne</option>
                                                <option value="13_Tienet">Tienet</option>
                                                <option value="13_Ouled Riyah">Ouled Riyah</option>
                                                <option value="13_Bouhlou">Bouhlou</option>
                                                <option value="13_Beni Khellad">Beni Khellad</option>
                                                <option value="13_Aïn Ghoraba">Aïn Ghoraba</option>
                                                <option value="13_Chetouane">Chetouane</option>
                                                <option value="13_Mansourah">Mansourah</option>
                                                <option value="13_Beni Semiel">Beni Semiel</option>
                                                <option value="13_Aïn Kebira">Aïn Kebira</option>

                                                <!--Tiaret-->
                                                <option value="14_Aïn Bouchekif">Aïn Bouchekif</option>
                                                <option value="14_Aïn Deheb">Aïn Deheb</option>
                                                <option value="14_Aïn El Hadid">Aïn El Hadid</option>
                                                <option value="14_Aïn Kermes">Aïn Kermes</option>
                                                <option value="14_Aïn Zarit">Aïn Zarit</option>
                                                <option value="14_Bougara">Bougara</option>
                                                <option value="14_Chehaima">Chehaima</option>
                                                <option value="14_Dahmouni">Dahmouni</option>
                                                <option value="14_Djebilet Rosfa">Djebilet Rosfa</option>
                                                <option value="14_Djillali Ben Amar">Djillali Ben Amar</option>
                                                <option value="14_Faidja">Faidja</option>
                                                <option value="14_Frenda">Frenda</option>
                                                <option value="14_Guertoufa">Guertoufa</option>
                                                <option value="14_Hamadia">Hamadia</option>
                                                <option value="14_Ksar Chellala">Ksar Chellala</option>
                                                <option value="14_Madna">Madna</option>
                                                <option value="14_Mahdia">Mahdia</option>
                                                <option value="14_Mechraa Safa">Mechraa Safa</option>
                                                <option value="14_Medrissa">Medrissa</option>
                                                <option value="14_Medroussa">Medroussa</option>
                                                <option value="14_TMeghila">Meghila</option>
                                                <option value="14_Mellakou">Mellakou</option>
                                                <option value="14_Nadorah">Nadorah</option>
                                                <option value="14_Naima">Naima</option>
                                                <option value="14_Oued Lilli">Oued Lilli</option>
                                                <option value="14_Rahouia">Rahouia</option>
                                                <option value="14_Rechaiga">Rechaiga</option>
                                                <option value="14_Sebaine">Sebaine</option>
                                                <option value="14_Sebt">Sebt</option>
                                                <option value="14_Serghine">Serghine</option>
                                                <option value="14_Si Abdelghani">Si Abdelghani</option>
                                                <option value="14_Sidi Abderahmane">Sidi Abderahmane</option>
                                                <option value="14_Sidi Ali Mellal">Sidi Ali Mellal</option>
                                                <option value="14_Sidi Bakhti">Sidi Bakhti</option>
                                                <option value="14_Sidi Hosni">Sidi Hosni</option>
                                                <option value="14_Sougueur">Sougueur</option>
                                                <option value="14_Tagdem">Tagdemt</option>
                                                <option value="14_Takhemaret">Takhemaret</option>
                                                <option value="14_Tiaret">Tiaret</option>
                                                <option value="14_Tidda>">Tidda</option>
                                                <option value="14_Tousnina">Tousnina</option>
                                                <option value="14_Zmalet El Emir Abdelkader">Zmalet El Emir Abdelkader</option>

                                                <!--Tizi Ouzou-->
                                                <option value="15_Tizi Ouzou">Tizi Ouzou</option>
                                                <option value="15_Ain El Hammam">Ain El Hammam</option>
                                                <option value="15_Akbil">Akbil</option>
                                                <option value="15_Freha">Freha</option>
                                                <option value="15_Souamaâ">Souamaâ</option>
                                                <option value="15_Mechtras">Mechtras</option>
                                                <option value="15_Irdjen">Irdjen</option>
                                                <option value="15_Timizart">Timizart</option>
                                                <option value="15_Makouda">Makouda</option>
                                                <option value="15_Draâ El Mizan">Draâ El Mizan</option>
                                                <option value="15_Tizi Gheniff">Tizi Gheniff</option>
                                                <option value="15_Bounouh">Bounouh</option>
                                                <option value="15_Aït Chafâa">Aït Chafâa</option>
                                                <option value="15_Frikat">Frikat</option>
                                                <option value="15_Beni Aïssi">Beni Aïssi</option>
                                                <option value="15_Beni Zmenzer">Beni Zmenzer</option>
                                                <option value="15_Iferhounène">Iferhounène</option>
                                                <option value="15_Azazga">Azazga</option>
                                                <option value="15_Illoula Oumalou">Illoula Oumalou</option>
                                                <option value="15_Yakouren">Yakouren</option>
                                                <option value="15_Larbaâ Nath Irathen>">Larbaâ Nath Irathen</option>
                                                <option value="15_Tizi Rached>">Tizi Rached</option>
                                                <option value="15_Zekri>">Zekri</option>
                                                <option value="15_Ouaguenoun>">Ouaguenoun</option>
                                                <option value="15_Aïn Zaouia>">Aïn Zaouia</option>
                                                <option value="15_M'Kira>">M'Kira</option>
                                                <option value="15_Aït Yahia>">Aït Yahia</option>
                                                <option value="15_Aït Mahmoud>">Aït Mahmoud</option>
                                                <option value="15_Mâatkas>">Mâatkas</option>
                                                <option value="15_Aït Boumahdi>">Aït Boumahdi</option>
                                                <option value="15_Abi Youcef>">Abi Youcef</option>
                                                <option value="15_Beni Douala>">Beni Douala</option>
                                                <option value="15_Illilten>">Illilten</option>
                                                <option value="15_Bouzguen>">Bouzguen</option>
                                                <option value="15_Aït Aggouacha>">Aït Aggouacha</option>
                                                <option value="15_Ouadhia>">Ouadhia</option>
                                                <option value="15_Azeffoun>">Azeffoun</option>
                                                <option value="15_Tigzirt>">Tigzirt</option>
                                                <option value="15_Djebel Aissa Mimoun>">Djebel Aissa Mimoun</option>
                                                <option value="15_Boghni>">Boghni</option>
                                                <option value="15_Ifigha>">Ifigha</option>
                                                <option value="15_Aït Oumalou>">Aït Oumalou</option>
                                                <option value="15_Tirmitine>">Tirmitine</option>
                                                <option value="15_Akerrou>">Akerrou</option>
                                                <option value="15_Yatafen>">Yatafen</option>
                                                <option value="15_Beni Ziki>">Beni Ziki</option>
                                                <option value="15_Draâ Ben Khedda>">Draâ Ben Khedda</option>
                                                <option value="15_Ouacif>">Ouacif</option>
                                                <option value="15_Idjeur>">1549	Idjeur</option>
                                                <option value="15_Mekla>">Mekla</option>
                                                <option value="15_Tizi N'Tleta>">Tizi N'Tleta</option>
                                                <option value="15_Beni Yenni>">Beni Yenni</option>
                                                <option value="15_Aghribs>">Aghribs</option>
                                                <option value="15_Iflissen>">Iflissen</option>
                                                <option value="15_Boudjima>">Boudjima</option>
                                                <option value="15_Aït Yahia Moussa>">Aït Yahia Moussa</option>
                                                <option value="15_Souk El Thenine>">Souk El Thenine</option>
                                                <option value="15_Aït Khellili>">Aït Khellili</option>
                                                <option value="15_Sidi Namane>">Sidi Namane</option>
                                                <option value="15_Iboudraren>">Iboudraren</option>
                                                <option value="15_Agouni Gueghrane>">Agouni Gueghrane</option>
                                                <option value="15_Mizrana>">Mizrana</option>
                                                <option value="15_Imsouhel>">Imsouhel</option>
                                                <option value="15_Tadmaït>">Tadmaït</option>
                                                <option value="15_Aït Bouadou>">Aït Bouadou</option>
                                                <option value="15_Assi Youcef>">Assi Youcef</option>
                                                <option value="15_Aït Toudert>">Aït Toudert</option>

                                                <!--Alger-->
                                                <option value="16_Alger-Centre>">Alger-Centre</option>
                                                <option value="16_Sidi M'Hamed>">Sidi M'Hamed</option>
                                                <option value="16_El Madania>">El Madania</option>
                                                <option value="16_Belouizdad>">Belouizdad</option>
                                                <option value="16_Bab El Oued>">Bab El Oued</option>
                                                <option value="16_Bologhine>">Bologhine</option>
                                                <option value="16_Casbah>">Casbah</option>
                                                <option value="16_Oued Koriche>">Oued Koriche</option>
                                                <option value="16_Bir Mourad Raïs>">Bir Mourad Raïs</option>
                                                <option value="16_El Biar>">El Biar</option>
                                                <option value="16_Bouzareah>">Bouzareah</option>
                                                <option value="16_Birkhadem>">Birkhadem</option>
                                                <option value="16_El Harrach>">El Harrach</option>
                                                <option value="16_Baraki>">Baraki</option>
                                                <option value="16_Oued Smar>">Oued Smar</option>
                                                <option value="16_Bourouba>">Bourouba</option>
                                                <option value="16_Hussein Dey>">Hussein Dey</option>
                                                <option value="16_Kouba>">Kouba</option>
                                                <option value="16_Bachdjerrah>">Bachdjerrah</option>
                                                <option value="16_Dar El Beïda>">Dar El Beïda</option>
                                                <option value="16_Bab Ezzouar>">Bab Ezzouar</option>
                                                <option value="16_Ben Aknoun>">Ben Aknoun</option>
                                                <option value="16_Dely Ibrahim>">Dely Ibrahim</option>
                                                <option value="16_El Hammamet>">El Hammamet</option>
                                                <option value="16_Raïs Hamidou>">Raïs Hamidou</option>
                                                <option value="16_Djasr KasentinaNote>">Djasr KasentinaNote</option>
                                                <option value="16_El Mouradia>">El Mouradia</option>
                                                <option value="16_Hydra>">Hydra</option>
                                                <option value="16_Mohammadia>">Mohammadia</option>
                                                <option value="16_Bordj El Kiffan>">Bordj El Kiffan</option>
                                                <option value="16_El Magharia>">El Magharia</option>
                                                <option value="16_Beni Messous>">Beni Messous</option>
                                                <option value="16_Les Eucalyptus>">Les Eucalyptus</option>
                                                <option value="16_Birtouta>">Birtouta</option>
                                                <option value="16_Tessala El Merdja>">Tessala El Merdja</option>
                                                <option value="16_Ouled Chebel>">Ouled Chebel</option>
                                                <option value="16_Sidi Moussa>">Sidi Moussa</option>
                                                <option value="16_Aïn Taya>">Aïn Taya</option>
                                                <option value="16_Bordj El Bahri>">Bordj El Bahri</option>
                                                <option value="16_El Marsa>">El Marsa</option>
                                                <option value="16_H'raoua>">H'raoua</option>
                                                <option value="16_Rouïba>">Rouïba</option>
                                                <option value="16_Reghaïa>">Reghaïa</option>
                                                <option value="16_Aïn Benian>">Aïn Benian</option>
                                                <option value="16_Staoueli>">Staoueli</option>
                                                <option value="16_Zeralda>">Zeralda</option>
                                                <option value="16_Mahelma>">Mahelma</option>
                                                <option value="16_Rahmania>">Rahmania</option>
                                                <option value="16_Souidania>">Souidania</option>
                                                <option value="16_Cheraga>">Cheraga</option>
                                                <option value="16_Ouled Fayet>">Ouled Fayet</option>
                                                <option value="16_El Achour>">El Achour</option>
                                                <option value="16_Draria>">Draria</option>
                                                <option value="16_Douera>">Douera</option>
                                                <option value="16_Baba Hassen>">Baba Hassen</option>
                                                <option value="16_Khraicia>">Khraicia</option>
                                                <option value="16_Saoula>">Saoula</option>

                                                <!--Djelfa-->
                                                <option value="17_Aïn Chouhada>">Aïn Chouhada</option>
                                                <option value="17_Aïn El Ibel>">Aïn El Ibel</option>
                                                <option value="17_Aïn Feka>">Aïn Feka</option>
                                                <option value="17_Aïn Maabed>">Aïn Maabed</option>
                                                <option value="17_Aïn Oussara>">Aïn Oussara</option>
                                                <option value="17_Amourah>">Amourah</option>
                                                <option value="17_Benhar>">Benhar</option>
                                                <option value="17_Beni Yagoub>">Beni Yagoub</option>
                                                <option value="17_Birine>">Birine</option>
                                                <option value="17_Bouira Lahdab>">Bouira Lahdab</option>
                                                <option value="17_Charef>">Charef</option>
                                                <option value="17_Dar Chioukh>">Dar Chioukh</option>
                                                <option value="17_Deldoul>">Deldoul</option>
                                                <option value="17_Djelfa>">Djelfa</option>
                                                <option value="17_Douis>">Douis</option>
                                                <option value="17_El Guedid>">El Guedid</option>
                                                <option value="17_El Idrissia>">El Idrissia</option>
                                                <option value="17_El Khemis>">El Khemis</option>
                                                <option value="17_Faidh El Botma>">Faidh El Botma</option>
                                                <option value="17_Guernini>">Guernini</option>
                                                <option value="17_Guettara>">Guettara</option>
                                                <option value="17_Had-Sahary>">Had-Sahary</option>
                                                <option value="17_Hassi Bahbah>">Hassi Bahbah</option>
                                                <option value="17_Hassi El Euch>">Hassi El Euch</option>
                                                <option value="17_Hassi Fedoul>">Hassi Fedoul</option>
                                                <option value="17_Messaad>">Messaad</option>
                                                <option value="17_M'Liliha>">M'Liliha</option>
                                                <option value="17_Moudjebara>">Moudjebara</option>
                                                <option value="17_Oum Laadham>">Oum Laadham</option>
                                                <option value="17_Sed Rahal>">Sed Rahal</option>
                                                <option value="17_Selmana>">Selmana</option>
                                                <option value="17_Sidi Baizid>">Sidi Baizid</option>
                                                <option value="17_Sidi Ladjel>">Sidi Ladjel</option>
                                                <option value="17_Tadmit>">Tadmit</option>
                                                <option value="17_Zaafrane>">Zaafrane</option>
                                                <option value="17_Zaccar>">Zaccar</option>

                                                <!--Jijel-->
                                                <option value="18_Jijel>">Jijel</option>
                                                <option value="18_Eraguene>">Eraguene</option>
                                                <option value="18_El Aouana>">El Aouana</option>
                                                <option value="18_Ziama Mansouriah>">Ziama Mansouriah</option>
                                                <option value="18_Taher>">Taher</option>
                                                <option value="18_Emir Abdelkader>">Emir Abdelkader</option>
                                                <option value="18_Chekfa>">Chekfa</option>
                                                <option value="18_Chahna>">Chahna</option>
                                                <option value="18_El Milia>">El Milia</option>
                                                <option value="18_Sidi Maarouf>">Sidi Maarouf</option>
                                                <option value="18_Settara>">Settara</option>
                                                <option value="18_El Ancer>">El Ancer</option>
                                                <option value="18_Sidi Abdelaziz>">Sidi Abdelaziz</option>
                                                <option value="18_Kaous>">Kaous</option>
                                                <option value="18_Ghebala>">Ghebala</option>
                                                <option value="18_Bouraoui Belhadef>">Bouraoui Belhadef</option>
                                                <option value="18_Djimla>">Djimla</option>
                                                <option value="18_Selma Benziada>">Selma Benziada</option>
                                                <option value="18_Boucif Ouled Askeur>">Boucif Ouled Askeur</option>
                                                <option value="18_El Kennar Nouchfi>">El Kennar Nouchfi</option>
                                                <option value="18_Ouled Yahia Khedrouche>">Ouled Yahia Khedrouche</option>
                                                <option value="18_Boudriaa Ben Yadjis>">Boudriaa Ben Yadjis</option>
                                                <option value="18_Kheïri Oued Adjoul>">Kheïri Oued Adjoul</option>
                                                <option value="18_Texenna>">Texenna</option>
                                                <option value="18_Djemaa Beni Habibi>">Djemaa Beni Habibi</option>
                                                <option value="18_Bordj Tahar>">Bordj Tahar</option>
                                                <option value="18_Ouled Rabah>">Ouled Rabah</option>
                                                <option value="18_Ouadjana>">Ouadjana</option>

                                                <!--Sétif-->
                                                <option value="19_Aïn Abessa>">Aïn Abessa</option>
                                                <option value="19_Aïn Arnat>">Aïn Arnat</option>
                                                <option value="19_Aïn Azel>">Aïn Azel</option>
                                                <option value="19_Aïn El Kebira>">Aïn El Kebira</option>
                                                <option value="19_Aïn Lahdjar>">Aïn Lahdjar</option>
                                                <option value="19_Aïn Legraj>">Aïn Legraj</option>
                                                <option value="19_Aïn Oulmene>">Aïn Oulmene</option>
                                                <option value="19_Aïn Roua>">Aïn Roua</option>
                                                <option value="19_Aïn Sebt>">Aïn Sebt</option>
                                                <option value="19_Aït Naoual Mezada>">Aït Naoual Mezada</option>
                                                <option value="19_Aït Tizi>">Aït Tizi</option>
                                                <option value="19_Amoucha>">Amoucha</option>
                                                <option value="19_Babor>">Babor</option>
                                                <option value="19_Bazer Sakhra>">Bazer Sakhra</option>
                                                <option value="19_Beidha Bordj>">Beidha Bordj</option>
                                                <option value="19_Belaa>">Belaa</option>
                                                <option value="19_Beni Aziz>">Beni Aziz</option>
                                                <option value="19_Beni Chebana>">Beni Chebana</option>
                                                <option value="19_Beni Fouda>">Beni Fouda</option>
                                                <option value="19_Beni Hocine>">Beni Hocine</option>
                                                <option value="19_Beni Mouhli>">Beni Mouhli</option>
                                                <option value="19_Beni Ouartilene>">Beni Ouartilene</option>
                                                <option value="19_Bir El Arch>">Bir El Arch</option>
                                                <option value="19_Bir Haddada>">Bir Haddada</option>
                                                <option value="19_Bouandas>">Bouandas</option>
                                                <option value="19_Bougaa>">Bougaa</option>
                                                <option value="19_Bousselam>">Bousselam</option>
                                                <option value="19_Boutaleb>">Boutaleb</option>
                                                <option value="19_Dehamcha>">Dehamcha</option>
                                                <option value="19_Djemila>">Djemila</option>
                                                <option value="19_Draa Kebila>">Draa Kebila</option>
                                                <option value="19_El Eulma>">El Eulma</option>
                                                <option value="19_El Ouldja>">El Ouldja</option>
                                                <option value="19_El Ouricia>">El Ouricia</option>
                                                <option value="19_Guellal>">Guellal</option>
                                                <option value="19_Guelta Zerka>">Guelta Zerka</option>
                                                <option value="19_Guenzet>">Guenzet</option>
                                                <option value="19_Guidjel>">Guidjel</option>
                                                <option value="19_Hamma>">Hamma</option>
                                                <option value="19_Hammam Guergour>">Hammam Guergour</option>
                                                <option value="19_Hammam Soukhna>">Hammam Soukhna</option>
                                                <option value="19_Harbil>">Harbil</option>
                                                <option value="19_Ksar El Abtal>">Ksar El Abtal</option>
                                                <option value="19_Maaouia>">Maaouia</option>
                                                <option value="19_Maoklane>">Maoklane</option>
                                                <option value="19_Mezloug>">Mezloug</option>
                                                <option value="19_Oued El Barad>">Oued El Barad</option>
                                                <option value="19_Ouled Addouane>">Ouled Addouane</option>
                                                <option value="19_Ouled Sabor>">Ouled Sabor</option>
                                                <option value="19_Ouled Si Ahmed>">Ouled Si Ahmed</option>
                                                <option value="19_Ouled Tebben>">Ouled Tebben</option>
                                                <option value="19_Rasfa>">Rasfa</option>
                                                <option value="19_Salah Bey>">Salah Bey</option>
                                                <option value="19_Serdj El Ghoul>">Serdj El Ghoul</option>
                                                <option value="19_Sétif>">Sétif</option>
                                                <option value="19_Tachouda>">Tachouda</option>
                                                <option value="19_Talaifacene>">Talaifacene</option>
                                                <option value="19_Taya>">Taya</option>
                                                <option value="19_Tella>">Tella</option>
                                                <option value="19_Tizi N'Bechar>">Tizi N'Bechar</option>

                                                <!--Saïda-->
                                                <option value="20_Aïn El Hadjar>">Aïn El Hadjar</option>
                                                <option value="20_Aïn Sekhouna>">Aïn Sekhouna</option>
                                                <option value="20_Aïn Soltane>">Aïn Soltane</option>
                                                <option value="20_Doui Thabet>">Doui Thabet</option>
                                                <option value="20_El Hassasna>">El Hassasna</option>
                                                <option value="20_Hounet>">Hounet</option>
                                                <option value="20_Maamora>">Maamora</option>
                                                <option value="20_Moulay Larbi>">Moulay Larbi</option>
                                                <option value="20_Ouled Brahim>">Ouled Brahim</option>
                                                <option value="20_Ouled Khaled>">Ouled Khaled</option>
                                                <option value="20_Saïda>">Saïda</option>
                                                <option value="20_Sidi Ahmed>">Sidi Ahmed</option>
                                                <option value="20_Sidi Amar>">Sidi Amar</option>
                                                <option value="20_Sidi Boubekeur>">Sidi Boubekeur</option>
                                                <option value="20_Tircine>">Tircine</option>
                                                <option value="20_Youb>">Youb</option>

                                                <!--Skikda-->
                                                <option value="21_Aïn Bouziane>">Aïn Bouziane</option>
                                                <option value="21_Aïn Charchar>">Aïn Charchar</option>
                                                <option value="21_Aïn Kechra>">Aïn Kechra</option>
                                                <option value="21_Aïn Zouit>">Aïn Zouit</option>
                                                <option value="21_Azzaba>">Azzaba</option>
                                                <option value="21_Bekkouche Lakhdar>">Bekkouche Lakhdar</option>
                                                <option value="21_Bin El Ouiden>">Bin El Ouiden</option>
                                                <option value="21_Ben Azzouz>">Ben Azzouz</option>
                                                <option value="21_Beni Bechir>">Beni Bechir</option>
                                                <option value="21_Beni Oulbane>">Beni Oulbane</option>
                                                <option value="21_Beni Zid>">Beni Zid</option>
                                                <option value="21_Bouchtata>">Bouchtata</option>
                                                <option value="21_Cheraia>">Cheraia</option>
                                                <option value="21_Collo>">Collo</option>
                                                <option value="21_Djendel Saadi Mohamed>">Djendel Saadi Mohamed</option>
                                                <option value="21_El Ghedir>">El Ghedir</option>
                                                <option value="21_El Hadaiek>">El Hadaiek</option>
                                                <option value="21_El Harrouch>">El Harrouch</option>
                                                <option value="21_El Marsa>">El Marsa</option>
                                                <option value="21_Emdjez Edchich>">Emdjez Edchich</option>
                                                <option value="21_Es Sebt>">Es Sebt</option>
                                                <option value="21_Filfila>">Filfila</option>
                                                <option value="21_Hamadi Krouma>">Hamadi Krouma</option>
                                                <option value="21_Kanoua>">Kanoua</option>
                                                <option value="21_Kerkera>">Kerkera</option>
                                                <option value="21_Kheneg Mayoum>">Kheneg Mayoum</option>
                                                <option value="21_Oued Zehour>">Oued Zehour</option>
                                                <option value="21_Ouldja Boulballout>">Ouldja Boulballout</option>
                                                <option value="21_Ouled Attia>">Ouled Attia</option>
                                                <option value="21_Ouled Hbaba>">Ouled Hbaba</option>
                                                <option value="21_Oum Toub>">Oum Toub</option>
                                                <option value="21_Ramdane Djamel>">Ramdane Djamel</option>
                                                <option value="21_Salah Bouchaour>">Salah Bouchaour</option>
                                                <option value="21_Sidi Mezghiche>">Sidi Mezghiche</option>
                                                <option value="21_Skikda>">Skikda</option>
                                                <option value="21_Tamalous>">Tamalous</option>
                                                <option value="21_Zerdaza>">Zerdaza</option>
                                                <option value="21_Zitouna>">Zitouna</option>


                                                <!--Sidi Bel Abbès-->
                                                <option value="22_Aïn Adden>">Aïn Adden</option>
                                                <option value="22_Aïn El Berd>">Aïn El Berd</option>
                                                <option value="22_Aïn Kada>">Aïn Kada</option>
                                                <option value="22_Aïn Thrid>">Aïn Thrid</option>
                                                <option value="22_Aïn Tindamine>">Aïn Tindamine</option>
                                                <option value="22_Amarnas>">Amarnas</option>
                                                <option value="22_Badredine El Mokrani>">Badredine El Mokrani</option>
                                                <option value="22_Belarbi	>">Belarbi	</option>
                                                <option value="22_Ben Badis>">Ben Badis</option>
                                                <option value="22_Benachiba Chelia>">Benachiba Chelia</option>
                                                <option value="22_Bir El Hammam>">Bir El Hammam</option>
                                                <option value="22_Boudjebaa El Bordj>">Boudjebaa El Bordj</option>
                                                <option value="22_Boukhanafis>">Boukhanafis</option>
                                                <option value="22_Chettouane Belaila>">Chettouane Belaila</option>
                                                <option value="22_Dhaya>">Dhaya</option>
                                                <option value="22_El Haçaiba>">El Haçaiba</option>
                                                <option value="22_Hassi Dahou>">Hassi Dahou</option>
                                                <option value="22_Hassi Zehana>">Hassi Zehana</option>
                                                <option value="22_Lamtar>">Lamtar</option>
                                                <option value="22_Makedra>">Makedra</option>
                                                <option value="22_Marhoum>">Marhoum</option>
                                                <option value="22_M'Cid>">M'Cid</option>
                                                <option value="22_Merine>">Merine</option>
                                                <option value="22_Mezaourou>">Mezaourou</option>
                                                <option value="22_Mostefa Ben Brahim>">Mostefa Ben Brahim</option>
                                                <option value="22_Moulay Slissen>">Moulay Slissen</option>
                                                <option value="22_Oued Sebaa>">Oued Sebaa</option>
                                                <option value="22_Oued Sefioun>">Oued Sefioun</option>
                                                <option value="22_Oued Taourira>">Oued Taourira</option>
                                                <option value="22_Ras El Ma>">Ras El Ma</option>
                                                <option value="22_Redjem Demouche>">Redjem Demouche</option>
                                                <option value="22_Sehala Thaoura>">Sehala Thaoura</option>
                                                <option value="22_Sfisef>">Sfisef</option>
                                                <option value="22_Sidi Ali Benyoub>">Sidi Ali Benyoub</option>
                                                <option value="22_Sidi Ali Boussidi>">Sidi Ali Boussidi</option>
                                                <option value="22_Sidi Bel Abbes>">Sidi Bel Abbes</option>
                                                <option value="22_Sidi Brahim>">Sidi Brahim</option>
                                                <option value="22_Sidi Chaib>">Sidi Chaib</option>
                                                <option value="22_Sidi Dahou de Zairs>">Sidi Dahou de Zairs</option>
                                                <option value="22_Sidi Hamadouche>">Sidi Hamadouche</option>
                                                <option value="22_Sidi Khaled>">Sidi Khaled</option>
                                                <option value="22_Sidi Lahcene>">Sidi Lahcene</option>
                                                <option value="22_Sidi Yacoub>">Sidi Yacoub</option>
                                                <option value="22_Tabia>">Tabia</option>
                                                <option value="22_Tafissour>">Tafissour</option>
                                                <option value="22_Taoudmout>">Taoudmout</option>
                                                <option value="22_Teghalimet>">Teghalimet</option>
                                                <option value="22_Telagh>">Telagh</option>
                                                <option value="22_Tenira>">Tenira</option>
                                                <option value="22_Tessala>">Tessala</option>
                                                <option value="22_Tilmouni>">Tilmouni</option>
                                                <option value="22_Zerouala>">Zerouala</option>

                                                <!--Annaba-->
                                                <option value="23_Annaba>">Annaba</option>
                                                <option value="23_Barrahel>">Barrahel</option>
                                                <option value="23_El Hadjar>">El Hadjar</option>
                                                <option value="23_Eulma>">Eulma</option>
                                                <option value="23_El Bouni>">El Bouni</option>
                                                <option value="23_Oued El Aneb>">Oued El Aneb</option>
                                                <option value="23_Cheurfa>">Cheurfa</option>
                                                <option value="23_Seraïdi>">Seraïdi</option>
                                                <option value="23_Aïn Berda>">Aïn Berda</option>
                                                <option value="23_Chetaïbi>">Chetaïbi</option>
                                                <option value="23_Sidi Amar>">Sidi Amar</option>
                                                <option value="23_Treat>">Treat</option>

                                                <!--Guelma-->
                                                <option value="24_Aïn Ben Beida>">Aïn Ben Beida</option>
                                                <option value="24_Aïn Larbi>">Aïn Larbi</option>
                                                <option value="24_Aïn Makhlouf>">Aïn Makhlouf</option>
                                                <option value="24_Aïn Reggada>">Aïn Reggada</option>
                                                <option value="24_Aïn Sandel>">Aïn Sandel</option>
                                                <option value="24_Belkheir>">Belkheir</option>
                                                <option value="24_Ben Djerrah>">Ben Djerrah</option>
                                                <option value="24_Beni Mezline>">Beni Mezline</option>
                                                <option value="24_Bordj Sabath>">Bordj Sabath</option>
                                                <option value="24_Bouhachana>">Bouhachana</option>
                                                <option value="24_Bouhamdane>">Bouhamdane</option>
                                                <option value="24_Bouati Mahmoud>">Bouati Mahmoud</option>
                                                <option value="24_Bouchegouf>">Bouchegouf</option>
                                                <option value="24_Boumahra Ahmed>">Boumahra Ahmed</option>
                                                <option value="24_Dahouara>">Dahouara</option>
                                                <option value="24_Djeballah Khemissi>">Djeballah Khemissi</option>
                                                <option value="24_El Fedjoudj>">El Fedjoudj</option>
                                                <option value="24_Guellat Bou Sbaa>">Guellat Bou Sbaa</option>
                                                <option value="24_Guelma>">Guelma</option>
                                                <option value="24_Hammam Debagh>">Hammam Debagh</option>
                                                <option value="24_Hammam N'Bail>">Hammam N'Bail</option>
                                                <option value="24_Héliopolis>">Héliopolis</option>
                                                <option value="24_Houari Boumédiène>">Houari Boumédiène</option>
                                                <option value="24_Khezarra>">Khezarra</option>
                                                <option value="24_Medjez Amar>">Medjez Amar</option>
                                                <option value="24_Medjez Sfa>">Medjez Sfa</option>
                                                <option value="24_Nechmaya>">Nechmaya</option>
                                                <option value="24_Oued Cheham>">Oued Cheham</option>
                                                <option value="24_Oued Fragha>">Oued Fragha</option>
                                                <option value="24_Oued Zenati>">Oued Zenati</option>
                                                <option value="24_Ras El Agba>">Ras El Agba</option>
                                                <option value="24_Roknia>">Roknia</option>
                                                <option value="24_Sellaoua Announa>">Sellaoua Announa</option>
                                                <option value="24_Tamlouka>">Tamlouka</option>

                                                <!--Constantine-->
                                                <option value="25_Aïn Abid>">Aïn Abid</option>
                                                <option value="25_Aïn Smara>">Aïn Smara</option>
                                                <option value="25_Beni Hamiden>">Beni Hamiden</option>
                                                <option value="25_Constantine>">Constantine</option>
                                                <option value="25_Didouche Mourad>">Didouche Mourad</option>
                                                <option value="25_El Khroub>">El Khroub</option>
                                                <option value="25_Hamma Bouziane>">Hamma Bouziane</option>
                                                <option value="25_Ibn Badis>">Ibn Badis</option>
                                                <option value="25_Ibn Ziad>">Ibn Ziad</option>
                                                <option value="25_Messaoud Boudjriou>">Messaoud Boudjriou</option>
                                                <option value="25_Ouled Rahmoune>">Ouled Rahmoune</option>
                                                <option value="25_Zighoud Youcef>">Zighoud Youcef</option>

                                                <!--Médéa-->
                                                <option value="26_Aïn Boucif>">Aïn Boucif</option>
                                                <option value="26_Aïn Ouksir>">Aïn Ouksir</option>
                                                <option value="26_Aissaouia>">Aissaouia</option>
                                                <option value="26_Aziz>">Aziz</option>
                                                <option value="26_Baata>">Baata</option>
                                                <option value="26_Benchicao>">Benchicao</option>
                                                <option value="26_Beni Slimane>">Beni Slimane</option>
                                                <option value="26_Berrouaghia>">Berrouaghia</option>
                                                <option value="26_Bir Ben Laabed>">Bir Ben Laabed</option>
                                                <option value="26_Boghar>">Boghar</option>
                                                <option value="26_Bou Aiche>">Bou Aiche</option>
                                                <option value="26_Bouaichoune>">Bouaichoune</option>
                                                <option value="26_Bouchrahil>">Bouchrahil</option>
                                                <option value="26_Boughezoul>">Boughezoul</option>
                                                <option value="26_Bouskene>">Bouskene</option>
                                                <option value="26_Chahbounia>">Chahbounia</option>
                                                <option value="26_Chellalet El Adhaoura>">Chellalet El Adhaoura</option>
                                                <option value="26_Cheniguel>">Cheniguel</option>
                                                <option value="26_Derrag>">Derrag</option>
                                                <option value="26_Deux Bassins>">Deux Bassins</option>
                                                <option value="26_Djouab>">Djouab</option>
                                                <option value="26_Draa Essamar>">Draa Essamar</option>
                                                <option value="26_El Azizia>">El Azizia</option>
                                                <option value="26_El Guelb El Kebir>">El Guelb El Kebir</option>
                                                <option value="26_El Hamdania>">El Hamdania</option>
                                                <option value="26_El Omaria>">El Omaria</option>
                                                <option value="26_El Ouinet>">El Ouinet</option>
                                                <option value="26_Hannacha>">Hannacha</option>
                                                <option value="26_Kef Lakhdar>">Kef Lakhdar</option>
                                                <option value="26_Khams Djouamaa>">Khams Djouamaa</option>
                                                <option value="26_Ksar Boukhari>">Ksar Boukhari</option>
                                                <option value="26_Meghraoua>">Meghraoua</option>
                                                <option value="26_Médéa>">Médéa</option>
                                                <option value="26_Moudjbar>">Moudjbar</option>
                                                <option value="26_Meftaha>">Meftaha</option>
                                                <option value="26_Mezerana>">Mezerana</option>
                                                <option value="26_Mihoub>">Mihoub</option>
                                                <option value="26_Ouamri>">Ouamri</option>
                                                <option value="26_Oued Harbil>">Oued Harbil</option>
                                                <option value="26_Ouled Antar>">Ouled Antar</option>
                                                <option value="26_Ouled Bouachra>">Ouled Bouachra</option>
                                                <option value="26_Ouled Brahim>">Ouled Brahim</option>
                                                <option value="26_Ouled Deide>">Ouled Deide</option>
                                                <option value="26_Ouled Hellal>">Ouled Hellal</option>
                                                <option value="26_Ouled Maaref>">Ouled Maaref</option>
                                                <option value="26_Oum El Djalil>">Oum El Djalil</option>
                                                <option value="26_Ouzera>">Ouzera</option>
                                                <option value="26_Rebaia>">Rebaia</option>
                                                <option value="26_Saneg>">Saneg</option>
                                                <option value="26_Sedraia>">Sedraia</option>
                                                <option value="26_Seghouane>">Seghouane</option>
                                                <option value="26_Si Mahdjoub>">Si Mahdjoub</option>
                                                <option value="26_Sidi Damed>">Sidi Damed</option>
                                                <option value="26_Sidi Errabia>">Sidi Errabia</option>
                                                <option value="26_Sidi Naamane>">Sidi Naamane</option>
                                                <option value="26_Sidi Zahar>">Sidi Zahar</option>
                                                <option value="26_Sidi Ziane>">Sidi Ziane</option>
                                                <option value="26_Souagui>">Souagui</option>
                                                <option value="26_Tablat>">Tablat</option>
                                                <option value="26_Tafraout>">Tafraout</option>
                                                <option value="26_Tamesguida>">Tamesguida</option>
                                                <option value="26_Tizi Mahdi>">Tizi Mahdi</option>
                                                <option value="26_Tlatet Eddouar>">Tlatet Eddouar</option>
                                                <option value="26_Zoubiria>">Zoubiria</option>

                                                <!--Mostaganem-->
                                                <option value="27_Abdelmalek Ramdane>">Abdelmalek Ramdane</option>
                                                <option value="27_Achaacha>">Achaacha</option>
                                                <option value="27_Aïn Boudinar>">Aïn Boudinar</option>
                                                <option value="27_Aïn Nouissy>">Aïn Nouissy</option>
                                                <option value="27_Aïn Sidi Cherif>">Aïn Sidi Cherif</option>
                                                <option value="27_Aïn Tedles>">Aïn Tedles</option>
                                                <option value="27_Blad Touahria>">Blad Touahria</option>
                                                <option value="27_Bouguirat>">Bouguirat</option>
                                                <option value="27_El Hassaine>">El Hassaine</option>
                                                <option value="27_Fornaka>">Fornaka</option>
                                                <option value="27_Hadjadj>">Hadjadj</option>
                                                <option value="27_Hassi Mameche>">Hassi Mameche</option>
                                                <option value="27_Khadra>">Khadra</option>
                                                <option value="27_Kheireddine>">Kheireddine</option>
                                                <option value="27_Mansourah>">Mansourah</option>
                                                <option value="27_Mesra>">Mesra</option>
                                                <option value="27_Mazagran>">Mazagran</option>
                                                <option value="27_Mostaganem>">Mostaganem</option>
                                                <option value="27_Nekmaria>">Nekmaria</option>
                                                <option value="27_Oued El Kheir>">Oued El Kheir</option>
                                                <option value="27_Ouled Boughalem>">Ouled Boughalem</option>
                                                <option value="27_Ouled Maallah>">Ouled Maallah</option>
                                                <option value="27_Safsaf>">Safsaf</option>
                                                <option value="27_Sayada>">Sayada</option>
                                                <option value="27_Sidi Ali>">Sidi Ali</option>
                                                <option value="27_Sidi Belattar>">Sidi Belattar</option>
                                                <option value="27_Sidi Lakhdar>">Sidi Lakhdar</option>
                                                <option value="27_Sirat>">Sirat</option>
                                                <option value="27_Souaflia>">Souaflia</option>
                                                <option value="27_Sour>">Sour</option>
                                                <option value="27_Stidia>">Stidia</option>
                                                <option value="27_Tazgait>">Tazgait</option>

                                                <!--M'Sila-->
                                                <option value="28_Aïn El Hadjel>">Aïn El Hadjel</option>
                                                <option value="28_Aïn El Melh>">Aïn El Melh</option>
                                                <option value="28_Aïn Errich>">Aïn Errich</option>
                                                <option value="28_Aïn Fares>">Aïn Fares</option>
                                                <option value="28_Aïn Khadra>">Aïn Khadra</option>
                                                <option value="28_Belaiba>">Belaiba</option>
                                                <option value="28_Ben Srour>">Ben Srour</option>
                                                <option value="28_Beni Ilmane>">Beni Ilmane</option>
                                                <option value="28_Benzouh>">Benzouh</option>
                                                <option value="28_Berhoum>">Berhoum</option>
                                                <option value="28_Bir Foda>">Bir Foda</option>
                                                <option value="28_Bou-Saâda>">Bou-Saâda</option>
                                                <option value="28_Bouti Sayah>">Bouti Sayah</option>
                                                <option value="28_Chellal>">Chellal</option>
                                                <option value="28_Dehahna>">Dehahna</option>
                                                <option value="28_Djebel Messaad>">Djebel Messaad</option>
                                                <option value="28_El Hamel>">El Hamel</option>
                                                <option value="28_El Houamed>">El Houamed</option>
                                                <option value="28_Hammam Dhalaa>">Hammam Dhalaa</option>
                                                <option value="28_Khettouti Sed El Djir>">Khettouti Sed El Djir</option>
                                                <option value="28_Khoubana>">Khoubana</option>
                                                <option value="28_Maadid>">Maadid</option>
                                                <option value="28_Maarif>">Maarif</option>
                                                <option value="28_Magra>">Magra</option>
                                                <option value="28_M'Cif>">M'Cif</option>
                                                <option value="28_Medjedel>">Medjedel</option>
                                                <option value="28_Mohammed Boudiaf>">Mohammed Boudiaf</option>
                                                <option value="28_M'Sila>">M'Sila</option>
                                                <option value="28_M'Tarfa>">M'Tarfa</option>
                                                <option value="28_Ouanougha>">Ouanougha</option>
                                                <option value="28_Ouled Addi Guebala>">Ouled Addi Guebala</option>
                                                <option value="28_Ouled Atia>">Ouled Atia</option>
                                                <option value="28_Ouled Derradj>">Ouled Derradj</option>
                                                <option value="28_Ouled Madhi>">Ouled Madhi</option>
                                                <option value="28_Ouled Mansour>">Ouled Mansour</option>
                                                <option value="28_Ouled Sidi Brahim>">Ouled Sidi Brahim</option>
                                                <option value="28_Ouled Slimane>">Ouled Slimane</option>
                                                <option value="28_Oultem>">Oultem</option>
                                                <option value="28_Sidi Aïssa>">Sidi Aïssa</option>
                                                <option value="28_Sidi Ameur>">Sidi Ameur</option>
                                                <option value="28_Sidi Hadjeres>">Sidi Hadjeres</option>
                                                <option value="28_Sidi M'Hamed>">Sidi M'Hamed</option>
                                                <option value="28_Slim>">Slim</option>
                                                <option value="28_Souamaa>">Souamaa</option>
                                                <option value="28_Tamsa>">Tamsa</option>
                                                <option value="28_Tarmount>">Tarmount</option>
                                                <option value="28_Zarzour>">Zarzour</option>


                                                <!--Mascara-->
                                                <option value="29_Aïn Fares>">Aïn Fares</option>
                                                <option value="29_Aïn Fekan>">Aïn Fekan</option>
                                                <option value="29_Aïn Ferah>">Aïn Ferah</option>
                                                <option value="29_Aïn Fras>">Aïn Fras</option>
                                                <option value="29_Alaimia>">Alaimia</option>
                                                <option value="29_Aouf>">Aouf</option>
                                                <option value="29_Beniane>">Beniane</option>
                                                <option value="29_Bou Hanifia>">Bou Hanifia</option>
                                                <option value="29_Bou Henni>">Bou Henni</option>
                                                <option value="29_Chorfa>">Chorfa</option>
                                                <option value="29_El Bordj>">El Bordj</option>
                                                <option value="29_El Gaada>">El Gaada</option>
                                                <option value="29_El Ghomri>">El Ghomri</option>
                                                <option value="29_El Guettana>">El Guettana</option>
                                                <option value="29_El Keurt>">El Keurt</option>
                                                <option value="29_El Menaouer>">El Menaouer</option>
                                                <option value="29_Ferraguig>">Ferraguig</option>
                                                <option value="29_Froha>">Froha</option>
                                                <option value="29_Gharrous>">Gharrous</option>
                                                <option value="29_Guerdjoum>">Guerdjoum</option>
                                                <option value="29_Ghriss>">Ghriss</option>
                                                <option value="29_Hachem>">Hachem</option>
                                                <option value="29_Hacine>">Hacine</option>
                                                <option value="29_Khalouia>">Khalouia</option>
                                                <option value="29_Makdha>">Makdha</option>
                                                <option value="29_Mamounia>">Mamounia</option>
                                                <option value="29_Maoussa>">Maoussa</option>
                                                <option value="29_Mascara>">Mascara</option>
                                                <option value="29_Matemore>">Matemore</option>
                                                <option value="29_Mocta Douz>">Mocta Douz</option>
                                                <option value="29_Mohammadia>">Mohammadia</option>
                                                <option value="29_Nesmoth>">Nesmoth</option>
                                                <option value="29_Oggaz>">Oggaz</option>
                                                <option value="29_Oued El Abtal>">Oued El Abtal</option>
                                                <option value="29_Oued Taria>">Oued Taria</option>
                                                <option value="29_Ras Ain Amirouche>">Ras Ain Amirouche</option>
                                                <option value="29_Sedjerara>">Sedjerara</option>
                                                <option value="29_Sehailia>">Sehailia</option>
                                                <option value="29_Sidi Abdeldjebar>">Sidi Abdeldjebar</option>
                                                <option value="29_Sidi Abdelmoumen>">Sidi Abdelmoumen</option>
                                                <option value="29_Sidi Kada>">Sidi Kada</option>
                                                <option value="29_Sidi Boussaid>">Sidi Boussaid</option>
                                                <option value="29_Sig>">Sig</option>
                                                <option value="29_Tighennif>">Tighennif</option>
                                                <option value="29_Tizi>">Tizi</option>
                                                <option value="29_Zahana>">Zahana</option>
                                                <option value="29_Zelmata>">Zelmata</option>


                                                <!--Ouargla-->
                                                <option value="30_Aïn Beida>">Aïn Beida</option>
                                                <option value="30_Benaceur>">Benaceur</option>
                                                <option value="30_Blidet Amor>">Blidet Amor</option>
                                                <option value="30_El Allia>">El Allia</option>
                                                <option value="30_El Borma>">El Borma</option>
                                                <option value="30_El Hadjira>">El Hadjira</option>
                                                <option value="30_Hassi Ben Abdellah>">Hassi Ben Abdellah</option>
                                                <option value="30_Hassi Messaoud>">Hassi Messaoud</option>
                                                <option value="30_Megarine>">Megarine</option>
                                                <option value="30_M'Naguer>">M'Naguer</option>
                                                <option value="30_Nezla>">Nezla</option>
                                                <option value="30_N'Goussa>">N'Goussa</option>
                                                <option value="30_Ouargla>">Ouargla</option>
                                                <option value="30_Rouissat>">Rouissat</option>
                                                <option value="30_Sidi Khouiled>">Sidi Khouiled</option>
                                                <option value="30_Sidi Slimane>">Sidi Slimane</option>
                                                <option value="30_Taibet>">Taibet</option>
                                                <option value="30_Tamacine>">Tamacine</option>
                                                <option value="30_Tebesbest>">Tebesbest</option>
                                                <option value="30_Touggourt>">Touggourt</option>
                                                <option value="30_Zaouia El Abidia>">Zaouia El Abidia</option>

                                                <!--Oran-->
                                                <option value="31_Oran>">Oran</option>
                                                <option value="31_Gdyel>">Gdyel</option>
                                                <option value="31_Bir El Djir>">Bir El Djir</option>
                                                <option value="31_Hassi Bounif>">Hassi Bounif</option>
                                                <option value="31_Es Senia>">Es Senia</option>
                                                <option value="31_Arzew>">Arzew</option>
                                                <option value="31_Bethioua>">Bethioua</option>
                                                <option value="31_Marsat El Hadjadj>">Marsat El Hadjadj</option>
                                                <option value="31_Aïn El Turk>">Aïn El Turk</option>
                                                <option value="31_El Ançor>">El Ançor</option>
                                                <option value="31_Oued Tlelat>">Oued Tlelat</option>
                                                <option value="31_Tafraoui>">Tafraoui</option>
                                                <option value="31_Sidi Chami>">Sidi Chami</option>
                                                <option value="31_Boufatis>">Boufatis</option>
                                                <option value="31_Mers El Kébir>">Mers El Kébir</option>
                                                <option value="31_Bou-Sfer>">Bou-Sfer</option>
                                                <option value="31_El Kerma>">El Kerma</option>
                                                <option value="31_El Braya>">El Braya</option>
                                                <option value="31_Hassi Ben Okba>">Hassi Ben Okba</option>
                                                <option value="31_Ben Freha>">Ben Freha</option>
                                                <option value="31_Hassi Mefsoukh>">Hassi Mefsoukh</option>
                                                <option value="31_Sidi Benyebka>">Sidi Benyebka</option>
                                                <option value="31_Misserghin>">Misserghin</option>
                                                <option value="31_Boutlelis>">Boutlelis</option>
                                                <option value="31_Aïn El Kerma>">Aïn El Kerma</option>
                                                <option value="31_Aïn El Bia>">Aïn El Bia</option>


                                                <!--El Bayadh-->
                                                <option value="32_El Bayadh>">El Bayadh</option>
                                                <option value="32_Rogassa>">Rogassa</option>
                                                <option value="32_Stitten>">Stitten</option>
                                                <option value="32_Brezina>">Brezina</option>
                                                <option value="32_Ghassoul>">Ghassoul</option>
                                                <option value="32_Boualem>">Boualem</option>
                                                <option value="32_El Abiodh Sidi Cheikh>">El Abiodh Sidi Cheikh</option>
                                                <option value="32_Aïn El Orak>">Aïn El Orak</option>
                                                <option value="32_Arbaouat>">Arbaouat</option>
                                                <option value="32_Bougtoub>">Bougtoub</option>
                                                <option value="32_El Kheiter>">El Kheiter</option>
                                                <option value="32_Kef El Ahmar>">Kef El Ahmar</option>
                                                <option value="32_Boussemghoun>">Boussemghoun</option>
                                                <option value="32_Chellala>">Chellala</option>
                                                <option value="32_Kraakda>">Kraakda</option>
                                                <option value="32_El Bnoud>">El Bnoud</option>
                                                <option value="32_Cheguig>">Cheguig</option>
                                                <option value="32_Sidi Ameur>">Sidi Ameur</option>
                                                <option value="32_El Mehara>">El Mehara</option>
                                                <option value="32_Tousmouline>">Tousmouline</option>
                                                <option value="32_Sidi Slimane>">Sidi Slimane</option>
                                                <option value="32_Sidi Tifour>">Sidi Tifour</option>

                                                <!--Illizi-->
                                                <option value="33_Illizi>">Illizi</option>
                                                <option value="33_Djanet>">Djanet</option>
                                                <option value="33_Debdeb>">Debdeb</option>
                                                <option value="33_Bordj Omar Driss>">Bordj Omar Driss</option>
                                                <option value="33_Bordj El Haouas>">Bordj El Haouas</option>
                                                <option value="33_In Amenas>">In Amenas</option>


                                                <!--Bordj Bou Arreridj-->
                                                <option value="34_Aïn Taghrout>">Aïn Taghrout</option>
                                                <option value="34_Aïn Tesra>">Aïn Tesra</option>
                                                <option value="34_Belimour>">Belimour</option>
                                                <option value="34_Ben Daoud>">Ben Daoud</option>
                                                <option value="34_Bir Kasdali>">Bir Kasdali</option>
                                                <option value="34_Bordj Bou Arreridj>">Bordj Bou Arreridj</option>
                                                <option value="34_Bordj Ghédir>">Bordj Ghédir</option>
                                                <option value="34_Bordj Zemoura>">Bordj Zemoura</option>
                                                <option value="34_Colla>">Colla</option>
                                                <option value="34_Djaafra>">Djaafra</option>
                                                <option value="34_El Ach>">El Ach</option>
                                                <option value="34_El Achir>">El Achir</option>
                                                <option value="34_El Anseur>">El Anseur</option>
                                                <option value="34_El Hamadia>">El Hamadia</option>
                                                <option value="34_El Main>">El Main</option>
                                                <option value="34_El M'hir>">El M'hir</option>
                                                <option value="34_Ghilassa>">Ghilassa</option>
                                                <option value="34_Haraza>">Haraza</option>
                                                <option value="34_Hasnaoua>">Hasnaoua</option>
                                                <option value="34_Khelil>">Khelil</option>
                                                <option value="34_Ksour>">Ksour</option>
                                                <option value="34_Mansoura>">Mansoura</option>
                                                <option value="34_Medjana>">Medjana</option>
                                                <option value="34_Ouled Brahem>">Ouled Brahem</option>
                                                <option value="34_Ouled Dahmane>">Ouled Dahmane</option>
                                                <option value="34_Ouled Sidi Brahim>">Ouled Sidi Brahim</option>
                                                <option value="34_Rabta>">Rabta</option>
                                                <option value="34_Ras El Oued>">Ras El Oued</option>
                                                <option value="34_Sidi Embarek>">Sidi Embarek</option>
                                                <option value="34_Tefreg>">Tefreg</option>
                                                <option value="34_Taglait>">Taglait</option>
                                                <option value="34_Teniet En Nasr>">Teniet En Nasr</option>
                                                <option value="34_Tassameurt>">Tassameurt</option>
                                                <option value="34_Tixter>">Tixter</option>

                                                <!--Boumerdès-->
                                                <option value="35_Afir>">Afir</option>
                                                <option value="35_Ammal>">Ammal</option>
                                                <option value="35_Baghlia>">Baghlia</option>
                                                <option value="35_Ben Choud>">Ben Choud</option>
                                                <option value="35_Beni Amrane>">Beni Amrane</option>
                                                <option value="35_Bordj Menaiel>">Bordj Menaiel</option>
                                                <option value="35_Boudouaou>">Boudouaou</option>
                                                <option value="35_Boudouaou-El-Bahri>">Boudouaou-El-Bahri</option>
                                                <option value="35_Boumerdes>">Boumerdes</option>
                                                <option value="35_Bouzegza Keddara>">Bouzegza Keddara</option>
                                                <option value="35_Chabet el Ameur>">Chabet el Ameur</option>
                                                <option value="35_Corso>">Corso</option>
                                                <option value="35_Dellys>">Dellys</option>
                                                <option value="35_Djinet>">Djinet</option>
                                                <option value="35_El Kharrouba>">El Kharrouba</option>
                                                <option value="35_Hammedi>">Hammedi</option>
                                                <option value="35_Issers>">Issers</option>
                                                <option value="35_Khemis El-Khechna>">Khemis El-Khechna</option>
                                                <option value="35_Larbatache>">Larbatache</option>
                                                <option value="35_Leghata>">Leghata</option>
                                                <option value="35_Naciria>">Naciria</option>
                                                <option value="35_Ouled Aissa>">Ouled Aissa</option>
                                                <option value="35_Ouled Hedadj>">Ouled Hedadj</option>
                                                <option value="35_Ouled Moussa>">Ouled Moussa</option>
                                                <option value="35_Si Mustapha>">Si Mustapha</option>
                                                <option value="35_Sidi Daoud>">Sidi Daoud</option>
                                                <option value="35_Souk El Had>">Souk El Had</option>
                                                <option value="35_Taourga>">Taourga</option>
                                                <option value="35_Thenia>">Thenia</option>
                                                <option value="35_Tidjelabine>">Tidjelabine</option>
                                                <option value="35_Timezrit>">Timezrit</option>
                                                <option value="35_Zemmouri>">Zemmouri</option>

                                                <!--El Tarf-->
                                                <option value="36_Aïn El Assel>">Aïn El Assel</option>
                                                <option value="36_Aïn Kerma>">Aïn Kerma</option>
                                                <option value="36_Asfour>">Asfour</option>
                                                <option value="36_Ben Mehidi>">Ben Mehidi</option>
                                                <option value="36_Berrihane>">Berrihane</option>
                                                <option value="36_Besbes>">Besbes</option>
                                                <option value="36_Bougous>">Bougous</option>
                                                <option value="36_Bouhadjar>">Bouhadjar</option>
                                                <option value="36_Bouteldja>">Bouteldja</option>
                                                <option value="36_Chebaita Mokhtar>">Chebaita Mokhtar</option>
                                                <option value="36_Chefia>">Chefia</option>
                                                <option value="36_Chihani>">Chihani</option>
                                                <option value="36_Dréan>">Dréan</option>
                                                <option value="36_Echatt>">Echatt</option>
                                                <option value="36_El Aioun>">El Aioun</option>
                                                <option value="36_El Kala>">El Kala</option>
                                                <option value="36_El Tarf>">El Tarf</option>
                                                <option value="36_Hammam Beni Salah>">Hammam Beni Salah</option>
                                                <option value="36_Lac des Oiseaux>">Lac des Oiseaux</option>
                                                <option value="36_Oued Zitoun>">Oued Zitoun</option>
                                                <option value="36_Raml Souk>">Raml Souk</option>
                                                <option value="36_Souarekh>">Souarekh</option>
                                                <option value="36_Zerizer>">Zerizer</option>
                                                <option value="36_Zitouna>">Zitouna</option>

                                                <!--Tindouf-->
                                                <option value="37_Oum el Assel>">Oum el Assel</option>
                                                <option value="37_Tindouf>">Tindouf</option>


                                                <!--Tissemsilt-->
                                                <option value="38_Ammari>">Ammari</option>
                                                <option value="38_Beni Chaib>">Beni Chaib</option>
                                                <option value="38_Beni Lahcene>">Beni Lahcene</option>
                                                <option value="38_Boucaid>">Boucaid</option>
                                                <option value="38_Bordj Bou Naama>">Bordj Bou Naama</option>
                                                <option value="38_Bordj El Emir Abdelkader>">Bordj El Emir Abdelkader</option>
                                                <option value="38_Khemisti>">Khemisti</option>
                                                <option value="38_Larbaa>">Larbaa</option>
                                                <option value="38_Lardjem>">Lardjem</option>
                                                <option value="38_Layoune>">Layoune</option>
                                                <option value="38_Lazharia>">Lazharia</option>
                                                <option value="38_Maacem>">Maacem</option>
                                                <option value="38_Melaab>">Melaab</option>
                                                <option value="38_Ouled Bessem>">Ouled Bessem</option>
                                                <option value="38_Sidi Abed>">Sidi Abed</option>
                                                <option value="38_Sidi Boutouchent>">Sidi Boutouchent</option>
                                                <option value="38_Sidi Lantri>">Sidi Lantri</option>
                                                <option value="38_Sidi Slimane>">Sidi Slimane</option>
                                                <option value="38_Tamalaht>">Tamalaht</option>
                                                <option value="38_Theniet El Had>">Theniet El Had</option>
                                                <option value="38_Tissemsilt>">Tissemsilt</option>
                                                <option value="38_Youssoufia>">Youssoufia</option>

                                                <!--El Oued-->
                                                <option value="39_El Oued>">El Oued</option>
                                                <option value="39_Robbah>">Robbah</option>
                                                <option value="39_Oued El Alenda>">Oued El Alenda</option>
                                                <option value="39_Bayadha>">Bayadha</option>
                                                <option value="39_Nakhla>">Nakhla</option>
                                                <option value="39_Guemar>">Guemar</option>
                                                <option value="39_Kouinine>">Kouinine</option>
                                                <option value="39_Reguiba>">Reguiba</option>
                                                <option value="39_Hamraia>">Hamraia</option>
                                                <option value="39_Taghzout>">Taghzout</option>
                                                <option value="39_Debila>">Debila</option>
                                                <option value="39_Hassani Abdelkrim>">Hassani Abdelkrim</option>
                                                <option value="39_Hassi Khalifa>">Hassi Khalifa</option>
                                                <option value="39_Taleb Larbi>">Taleb Larbi</option>
                                                <option value="39_Douar El Ma>">Douar El Ma</option>
                                                <option value="39_Sidi Aoun>">Sidi Aoun</option>
                                                <option value="39_Trifaoui>">Trifaoui</option>
                                                <option value="39_Magrane>">Magrane</option>
                                                <option value="39_Beni Guecha>">Beni Guecha</option>
                                                <option value="39_Ourmas>">Ourmas</option>
                                                <option value="39_Still>">Still</option>
                                                <option value="39_M'Rara>">M'Rara</option>
                                                <option value="39_Sidi Khellil>">Sidi Khellil</option>
                                                <option value="39_Tendla>">Tendla</option>
                                                <option value="39_El Ogla>">El Ogla</option>
                                                <option value="39_Mih Ouansa>">Mih Ouansa</option>
                                                <option value="39_El M'Ghair>">El M'Ghair</option>
                                                <option value="39_Djamaa>">Djamaa</option>
                                                <option value="39_Oum Touyour>">Oum Touyour</option>
                                                <option value="39_Sidi Amrane>">Sidi Amrane</option>

                                                <!--Khenchela-->
                                                <option value="40_Aïn Touila>">Aïn Touila</option>
                                                <option value="40_Babar>">Babar</option>
                                                <option value="40_Baghai>">Baghai</option>
                                                <option value="40_Bouhmama>">Bouhmama</option>
                                                <option value="40_Chechar>">Chechar</option>
                                                <option value="40_Chelia>">Chelia</option>
                                                <option value="40_Djellal>">Djellal</option>
                                                <option value="40_El Hamma>">El Hamma</option>
                                                <option value="40_El Mahmal>">El Mahmal</option>
                                                <option value="40_El Oueldja>">El Oueldja</option>
                                                <option value="40_Ensigha>">Ensigha</option>
                                                <option value="40_Kais>">Kais</option>
                                                <option value="40_Khenchela>">Khenchela</option>
                                                <option value="40_Khirane>">Khirane</option>
                                                <option value="40_M'Sara>">M'Sara</option>
                                                <option value="40_M'Toussa>">M'Toussa</option>
                                                <option value="40_Ouled Rechache>">Ouled Rechache</option>
                                                <option value="40_Remila>">Remila</option>
                                                <option value="40_Tamza>">Tamza</option>
                                                <option value="40_Taouzient>">Taouzient</option>
                                                <option value="40_Yabous>">Yabous</option>

                                                <!--Souk Ahras-->
                                                <option value="41_Souk Ahras>">Souk Ahras</option>
                                                <option value="41_Sedrata>">Sedrata</option>
                                                <option value="41_Hanancha>">Hanancha</option>
                                                <option value="41_Mechroha>">Mechroha</option>
                                                <option value="41_Ouled Driss>">Ouled Driss</option>
                                                <option value="41_Tiffech>">Tiffech</option>
                                                <option value="41_Zaarouria>">Zaarouria</option>
                                                <option value="41_Taoura>">Taoura</option>
                                                <option value="41_Drea>">Drea</option>
                                                <option value="41_Heddada>">Heddada</option>
                                                <option value="41_Khedara>">Khedara</option>
                                                <option value="41_Merahna>">Merahna</option>
                                                <option value="41_Ouled Moumene>">Ouled Moumene</option>
                                                <option value="41_Bir Bou Haouch>">Bir Bou Haouch</option>
                                                <option value="41_M'daourouch>">M'daourouch</option>
                                                <option value="41_Oum El Adhaim>">Oum El Adhaim</option>
                                                <option value="41_Aïn Zana>">Aïn Zana</option>
                                                <option value="41_Aïn Soltane>">Aïn Soltane</option>
                                                <option value="41_Ouillen>">Ouillen</option>
                                                <option value="41_Sidi Fredj>">Sidi Fredj</option>
                                                <option value="41_Safel El Ouiden>">Safel El Ouiden</option>
                                                <option value="41_Ragouba>">Ragouba</option>
                                                <option value="41_Khemissa>">Khemissa</option>
                                                <option value="41_Oued Keberit>">Oued Keberit</option>
                                                <option value="41_Terraguelt>">Terraguelt</option>
                                                <option value="41_Zouabi>">Zouabi</option>


                                                <!--Tipaza-->
                                                <option value="42_Tipaza>">Tipaza</option>
                                                <option value="42_Menaceur>">Menaceur</option>
                                                <option value="42_Larhat>">Larhat</option>
                                                <option value="42_Douaouda>">Douaouda</option>
                                                <option value="42_Bourkika>">Bourkika</option>
                                                <option value="42_Khemisti>">Khemisti</option>
                                                <option value="42_Aghbal>">Aghbal</option>
                                                <option value="42_Hadjout>">Hadjout</option>
                                                <option value="42_Sidi Amar>">Sidi Amar</option>
                                                <option value="42_Gouraya>">Gouraya</option>
                                                <option value="42_Nador>">Nador</option>
                                                <option value="42_Chaiba>">Chaiba</option>
                                                <option value="42_Aïn Tagourait>">Aïn Tagourait</option>
                                                <option value="42_Cherchell>">Cherchell</option>
                                                <option value="42_Damous>">Damous</option>
                                                <option value="42_Merad>">Merad</option>
                                                <option value="42_Fouka>">Fouka</option>
                                                <option value="42_Bou Ismaïl>">Bou Ismaïl</option>
                                                <option value="42_Ahmar El Aïn>">Ahmar El Aïn</option>
                                                <option value="42_Bouharoun>">Bouharoun</option>
                                                <option value="42_Sidi Ghiles>">Sidi Ghiles</option>
                                                <option value="42_Messelmoun>">Messelmoun</option>
                                                <option value="42_Sidi Rached>">Sidi Rached</option>
                                                <option value="42_Koléa>">Koléa</option>
                                                <option value="42_Attatba>">Attatba</option>
                                                <option value="42_Sidi Semiane>">Sidi Semiane</option>
                                                <option value="42_Beni Milleuk>">Beni Milleuk</option>
                                                <option value="42_Hadjeret Ennous>">Hadjeret Ennous</option>


                                                <!--Mila-->
                                                <option value="43_Ahmed Rachedi>">Ahmed Rachedi</option>
                                                <option value="43_Aïn Beida Harriche>">Aïn Beida Harriche</option>
                                                <option value="43_Aïn Mellouk>">Aïn Mellouk</option>
                                                <option value="43_Aïn Tine>">Aïn Tine</option>
                                                <option value="43_Amira Arrès>">Amira Arrès</option>
                                                <option value="43_Benyahia Abderrahmane>">Benyahia Abderrahmane</option>
                                                <option value="43_Bouhatem>">Bouhatem</option>
                                                <option value="43_Chelghoum Laid>">Chelghoum Laid</option>
                                                <option value="43_Chigara>">Chigara</option>
                                                <option value="43_Derradji Bousselah>">Derradji Bousselah</option>
                                                <option value="43_El Mechira>">El Mechira</option>
                                                <option value="43_Elayadi Barbes>">Elayadi Barbes</option>
                                                <option value="43_Ferdjioua>">Ferdjioua</option>
                                                <option value="43_Grarem Gouga>">Grarem Gouga</option>
                                                <option value="43_Hamala>">Hamala</option>
                                                <option value="43_Mila>">Mila</option>
                                                <option value="43_Minar Zarza>">Minar Zarza</option>
                                                <option value="43_Oued Athmania>">Oued Athmania</option>
                                                <option value="43_Oued Endja>">Oued Endja</option>
                                                <option value="43_Oued Seguen>">Oued Seguen</option>
                                                <option value="43_Ouled Khalouf>">Ouled Khalouf</option>
                                                <option value="43_Rouached>">Rouached</option>
                                                <option value="43_Sidi Khelifa>">Sidi Khelifa</option>
                                                <option value="43_Sidi Merouane>">Sidi Merouane</option>
                                                <option value="43_Tadjenanet>">Tadjenanet</option>
                                                <option value="43_Tassadane Haddada>">Tassadane Haddada</option>
                                                <option value="43_Teleghma>">Teleghma</option>
                                                <option value="43_Terrai Bainen>">Terrai Bainen</option>
                                                <option value="43_Tessala Lemtaï>">Tessala Lemtaï</option>
                                                <option value="43_Tiberguent>">Tiberguent</option>
                                                <option value="43_Yahia Beni Guecha>">Yahia Beni Guecha</option>
                                                <option value="43_Zeghaia>">Zeghaia</option>

                                                <!--Aïn Defla-->
                                                <option value="44_Aïn Benian>">Aïn Benian</option>
                                                <option value="44_Aïn Bouyahia>">Aïn Bouyahia</option>
                                                <option value="44_Aïn Defla>">Aïn Defla</option>
                                                <option value="44_Aïn Lechiekh>">Aïn Lechiekh</option>
                                                <option value="44_Aïn Soltane>">Aïn Soltane</option>
                                                <option value="44_Aïn Torki>">Aïn Torki</option>
                                                <option value="44_Arib>">Arib</option>
                                                <option value="44_Bathia>">Bathia</option>
                                                <option value="44_Belaas>">Belaas</option>
                                                <option value="44_Ben Allal>">Ben Allal</option>
                                                <option value="44_Birbouche>">Birbouche</option>
                                                <option value="44_Bir Ould Khelifa>">Bir Ould Khelifa</option>
                                                <option value="44_Bordj Emir Khaled>">Bordj Emir Khaled</option>
                                                <option value="44_Boumedfaa>">Boumedfaa</option>
                                                <option value="44_Bourached>">Bourached</option>
                                                <option value="44_Djelida>">Djelida</option>
                                                <option value="44_Djemaa Ouled Cheikh>">Djemaa Ouled Cheikh</option>
                                                <option value="44_Djendel>">Djendel</option>
                                                <option value="44_El Abadia>">El Abadia</option>
                                                <option value="44_El Amra>">El Amra</option>
                                                <option value="44_El Attaf>">El Attaf</option>
                                                <option value="44_El Hassania>">El Hassania</option>
                                                <option value="44_El Maine>">El Maine</option>
                                                <option value="44_Hammam Righa>">Hammam Righa</option>
                                                <option value="44_Hoceinia>">Hoceinia</option>
                                                <option value="44_Khemis Miliana>">Khemis Miliana</option>
                                                <option value="44_Mekhatria>">Mekhatria</option>
                                                <option value="44_Miliana>">Miliana</option>
                                                <option value="44_Oued Chorfa>">Oued Chorfa</option>
                                                <option value="44_Oued Djemaa>">Oued Djemaa</option>
                                                <option value="44_Rouina>">Rouina</option>
                                                <option value="44_Sidi Lakhdar>">Sidi Lakhdar</option>
                                                <option value="44_Tacheta Zougagha>">Tacheta Zougagha</option>
                                                <option value="44_Tarik Ibn Ziad>">Tarik Ibn Ziad</option>
                                                <option value="44_Tiberkanine>">Tiberkanine</option>
                                                <option value="44_Zeddine>">Zeddine</option>


                                                <!--Naâma-->
                                                <option value="45_Naâma>">Naâma</option>
                                                <option value="45_Mecheria>">Mecheria</option>
                                                <option value="45_Aïn Sefra>">Aïn Sefra</option>
                                                <option value="45_Tiout>">Tiout</option>
                                                <option value="45_Sfissifa>">Sfissifa</option>
                                                <option value="45_Moghrar>">Moghrar</option>
                                                <option value="45_Assela>">Assela</option>
                                                <option value="45_Djeniene Bourezg>">Djeniene Bourezg</option>
                                                <option value="45_Aïn Ben Khelil>">Aïn Ben Khelil</option>
                                                <option value="45_Makman Ben Amer>">Makman Ben Amer</option>
                                                <option value="45_Kasdir>">Kasdir</option>
                                                <option value="45_El Biod>">El Biod</option>

                                                <!--Aïn Témouchent-->
                                                <option value="46_Aghlal>">Aghlal</option>
                                                <option value="46_Aïn El Arbaa>">Aïn El Arbaa</option>
                                                <option value="46_Aïn Kihal>">Aïn Kihal</option>
                                                <option value="46_Aïn Témouchent>">Aïn Témouchent</option>
                                                <option value="46_Aïn Tolba>">Aïn Tolba</option>
                                                <option value="46_Aoubellil>">Aoubellil</option>
                                                <option value="46_Beni Saf>">Beni Saf</option>
                                                <option value="46_Bouzedjar>">Bouzedjar</option>
                                                <option value="46_Chaabat El Leham>">Chaabat El Leham</option>
                                                <option value="46_Chentouf>">Chentouf</option>
                                                <option value="46_El Amria>">El Amria</option>
                                                <option value="46_El Emir Abdelkader>">El Emir Abdelkader</option>
                                                <option value="46_El Malah>">El Malah</option>
                                                <option value="46_El Messaid>">El Messaid</option>
                                                <option value="46_Hammam Bouhadjar>">Hammam Bouhadjar</option>
                                                <option value="46_Hassasna>">Hassasna</option>
                                                <option value="46_Hassi El Ghella>">Hassi El Ghella</option>
                                                <option value="46_Oued Berkeche>">Oued Berkeche</option>
                                                <option value="46_Oued Sabah>">Oued Sabah</option>
                                                <option value="46_Ouled Boudjemaa>">Ouled Boudjemaa</option>
                                                <option value="46_Ouled Kihal>">Ouled Kihal</option>
                                                <option value="46_Oulhaça El Gheraba>">Oulhaça El Gheraba</option>
                                                <option value="46_Sidi Ben Adda>">Sidi Ben Adda</option>
                                                <option value="46_Sidi Boumedienne>">Sidi Boumedienne</option>
                                                <option value="46_Sidi Ouriache>">Sidi Ouriache</option>
                                                <option value="46_Sidi Safi>">Sidi Safi</option>
                                                <option value="46_Tamzoura>">Tamzoura</option>
                                                <option value="46_Terga>">Terga</option>


                                                <!--Ghardaïa-->
                                                <option value="47_Berriane>">Berriane</option>
                                                <option value="47_Bounoura>">Bounoura</option>
                                                <option value="47_Dhayet Bendhahoua>">Dhayet Bendhahoua</option>
                                                <option value="47_El Atteuf>">El Atteuf</option>
                                                <option value="47_El Guerrara>">El Guerrara</option>
                                                <option value="47_El Golea>">El Golea</option>
                                                <option value="47_Ghardaïa>">Ghardaïa</option>
                                                <option value="47_Hassi Fehal>">Hassi Fehal</option>
                                                <option value="47_Hassi Gara>">Hassi Gara</option>
                                                <option value="47_Mansoura>">Mansoura</option>
                                                <option value="47_Metlili>">Metlili</option>
                                                <option value="47_Sebseb>">Sebseb</option>
                                                <option value="47_Zelfana>">Zelfana</option>


                                                <!--Relizane-->
                                                <option value="48_Aïn Rahma>">Aïn Rahma</option>
                                                <option value="48_Aïn Tarek>">Aïn Tarek</option>
                                                <option value="48_Ammi Moussa>">Ammi Moussa</option>
                                                <option value="48_Belassel Bouzegza>">Belassel Bouzegza</option>
                                                <option value="48_Bendaoud>">Bendaoud</option>
                                                <option value="48_Beni Dergoun>">Beni Dergoun</option>
                                                <option value="48_Beni Zentis>">Beni Zentis</option>
                                                <option value="48_Dar Ben Abdellah>">Dar Ben Abdellah</option>
                                                <option value="48_Djidioua>">Djidioua</option>
                                                <option value="48_El Guettar>">El Guettar</option>
                                                <option value="48_El Hamadna>">El Hamadna</option>
                                                <option value="48_El Hassi>">El Hassi</option>
                                                <option value="48_El Matmar>">El Matmar</option>
                                                <option value="48_El Ouldja>">El Ouldja</option>
                                                <option value="48_Had Echkalla>">Had Echkalla</option>
                                                <option value="48_Hamri>">Hamri</option>
                                                <option value="48_Kalaa>">Kalaa</option>
                                                <option value="48_Lahlef>">Lahlef</option>
                                                <option value="48_Mazouna>">Mazouna</option>
                                                <option value="48_Mediouna>">Mediouna</option>
                                                <option value="48_Mendes>">Mendes</option>
                                                <option value="48_Merdja Sidi Abed>">Merdja Sidi Abed</option>
                                                <option value="48_Ouarizane>">Ouarizane</option>
                                                <option value="48_Oued Essalem>">Oued Essalem</option>
                                                <option value="48_Oued Rhiou>">Oued Rhiou</option>
                                                <option value="48_Ouled Aiche>">Ouled Aiche</option>
                                                <option value="48_Oued El Djemaa>">Oued El Djemaa</option>
                                                <option value="48_Ouled Sidi Mihoub>">Ouled Sidi Mihoub</option>
                                                <option value="48_Ramka>">Ramka</option>
                                                <option value="48_Relizane>">Relizane</option>
                                                <option value="48_Sidi Khettab>">Sidi Khettab</option>
                                                <option value="48_Sidi Lazreg>">Sidi Lazreg</option>
                                                <option value="48_Sidi M'Hamed Ben Ali>">Sidi M'Hamed Ben Ali</option>
                                                <option value="48_Sidi M'Hamed Benaouda>">Sidi M'Hamed Benaouda</option>
                                                <option value="48_Sidi Saada>">Sidi Saada</option>
                                                <option value="48_Souk El Had>">Souk El Had</option>
                                                <option value="48_Yellel>">Yellel</option>
                                                <option value="48_Zemmora>">Zemmora</option>
                                            </select>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                       <div class="pt-3"></div>
                        <p>2. There's another way to do this for layouts that doesn't have to put the navbar inside the container, and which doesn't require any CSS or Bootstrap overrides.

                            Simply place a div with the Bootstrap container class around the navbar. This will center the links inside the navbar:

                  </div>
                  <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                       <div class="pt-3"></div>
                        <p>3. There's another way to do this for layouts that doesn't have to put the navbar inside the container, and which doesn't require any CSS or Bootstrap overrides.

                            Simply place a div with the Bootstrap container class around the navbar. This will center the links inside the navbar:

                  </div>

                </div>
            </div>
</div>

</div>
@endsection
