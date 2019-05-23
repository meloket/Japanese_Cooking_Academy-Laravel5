@extends('layouts.app')

@section('content')

    <div class="entry_banner">
        <div class="req_banner_span">
            <div class="req_banner_text"><i>ENTRY</i></div>
        </div>
    </div>
    <div class="container">
        <div class="mid_sec">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="arrow-block la_entry_step1">
                            Enter your details
                        </div>
                        <div class="arrow-right la_entry_step1"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="arrow-block la_entry_step2">
                            Review and confirm your details
                        </div>
                        <div class="arrow-right la_entry_step2"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="arrow-block-end la_entry_step3">
                            Complete your registration
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="data_form">
    <div class="container entry_step1">
        <div class="mid_sec">
            <div class="mid_para glabel">
                <h4><b>ENTER YOUR DETAILS</b> ({{$entryid}})</h4>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>BASIC INFORMATION</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="esp_red">*Required</div>
                    <div class="row req_space">
                        <div class="col-sm-3">First Name<span class="esp_red">*</span></div>
                        <div class="col-sm-9"><input type="text" class="b_firstname" name="b_firstname" required></div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Middle Name</div>
                        <div class="col-sm-9"><input type="text" class="b_midname" name="b_midname"></div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Last Name<span class="esp_red">*</span></div>
                        <div class="col-sm-9"><input type="text" class="b_lastname" name="b_lastname" required></div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Date of birth<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4 form-inline">
                                    <label>Year</label>
                                    <select class="form-control b_birth_year" name="b_birth_year">
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                        <option value="1929">1929</option>
                                        <option value="1928">1928</option>
                                        <option value="1927">1927</option>
                                        <option value="1926">1926</option>
                                        <option value="1925">1925</option>
                                        <option value="1924">1924</option>
                                        <option value="1923">1923</option>
                                        <option value="1922">1922</option>
                                        <option value="1921">1921</option>
                                        <option value="1920">1920</option>
                                        <option value="1919">1919</option>
                                        <option value="1918">1918</option>
                                        <option value="1917">1917</option>
                                        <option value="1916">1916</option>
                                        <option value="1915">1915</option>
                                        <option value="1914">1914</option>
                                        <option value="1913">1913</option>
                                        <option value="1912">1912</option>
                                        <option value="1911">1911</option>
                                        <option value="1910">1910</option>
                                        <option value="1909">1909</option>
                                        <option value="1908">1908</option>
                                        <option value="1907">1907</option>
                                        <option value="1906">1906</option>
                                        <option value="1905">1905</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-inline">
                                    <label>Month</label>
                                    <select class="form-control b_birth_month" name="b_birth_month">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-inline">
                                    <label>Date</label>
                                    <select class="form-control b_birth_day" name="b_birth_day">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Gender<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="form-check col-sm-4 form-inline">
                                    <input class="form-check-input b_gender" type="radio" name="b_gender" id="b_gender1" value="Male" checked>
                                    <label class="form-check-label" for="b_gender">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check col-sm-4 form-inline">
                                    <input class="form-check-input b_gender" type="radio" name="b_gender" id="b_gender2" value="Female">
                                    <label class="form-check-label" for="b_gender">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Nationality<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <select class="form-control b_nation" class="b_nation" name="b_nation">
                                <option value="afghan">Afghan</option>
                                <option value="albanian">Albanian</option>
                                <option value="algerian">Algerian</option>
                                <option value="american">American</option>
                                <option value="andorran">Andorran</option>
                                <option value="angolan">Angolan</option>
                                <option value="antiguans">Antiguans</option>
                                <option value="argentinean">Argentinean</option>
                                <option value="armenian">Armenian</option>
                                <option value="australian">Australian</option>
                                <option value="austrian">Austrian</option>
                                <option value="azerbaijani">Azerbaijani</option>
                                <option value="bahamian">Bahamian</option>
                                <option value="bahraini">Bahraini</option>
                                <option value="bangladeshi">Bangladeshi</option>
                                <option value="barbadian">Barbadian</option>
                                <option value="barbudans">Barbudans</option>
                                <option value="batswana">Batswana</option>
                                <option value="belarusian">Belarusian</option>
                                <option value="belgian">Belgian</option>
                                <option value="belizean">Belizean</option>
                                <option value="beninese">Beninese</option>
                                <option value="bhutanese">Bhutanese</option>
                                <option value="bolivian">Bolivian</option>
                                <option value="bosnian">Bosnian</option>
                                <option value="brazilian">Brazilian</option>
                                <option value="british">British</option>
                                <option value="bruneian">Bruneian</option>
                                <option value="bulgarian">Bulgarian</option>
                                <option value="burkinabe">Burkinabe</option>
                                <option value="burmese">Burmese</option>
                                <option value="burundian">Burundian</option>
                                <option value="cambodian">Cambodian</option>
                                <option value="cameroonian">Cameroonian</option>
                                <option value="canadian">Canadian</option>
                                <option value="cape verdean">Cape Verdean</option>
                                <option value="central african">Central African</option>
                                <option value="chadian">Chadian</option>
                                <option value="chilean">Chilean</option>
                                <option value="chinese">Chinese</option>
                                <option value="colombian">Colombian</option>
                                <option value="comoran">Comoran</option>
                                <option value="congolese">Congolese</option>
                                <option value="costa rican">Costa Rican</option>
                                <option value="croatian">Croatian</option>
                                <option value="cuban">Cuban</option>
                                <option value="cypriot">Cypriot</option>
                                <option value="czech">Czech</option>
                                <option value="danish">Danish</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="dominican">Dominican</option>
                                <option value="dutch">Dutch</option>
                                <option value="east timorese">East Timorese</option>
                                <option value="ecuadorean">Ecuadorean</option>
                                <option value="egyptian">Egyptian</option>
                                <option value="emirian">Emirian</option>
                                <option value="equatorial guinean">Equatorial Guinean</option>
                                <option value="eritrean">Eritrean</option>
                                <option value="estonian">Estonian</option>
                                <option value="ethiopian">Ethiopian</option>
                                <option value="fijian">Fijian</option>
                                <option value="filipino">Filipino</option>
                                <option value="finnish">Finnish</option>
                                <option value="french">French</option>
                                <option value="gabonese">Gabonese</option>
                                <option value="gambian">Gambian</option>
                                <option value="georgian">Georgian</option>
                                <option value="german">German</option>
                                <option value="ghanaian">Ghanaian</option>
                                <option value="greek">Greek</option>
                                <option value="grenadian">Grenadian</option>
                                <option value="guatemalan">Guatemalan</option>
                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                <option value="guinean">Guinean</option>
                                <option value="guyanese">Guyanese</option>
                                <option value="haitian">Haitian</option>
                                <option value="herzegovinian">Herzegovinian</option>
                                <option value="honduran">Honduran</option>
                                <option value="hungarian">Hungarian</option>
                                <option value="icelander">Icelander</option>
                                <option value="indian">Indian</option>
                                <option value="indonesian">Indonesian</option>
                                <option value="iranian">Iranian</option>
                                <option value="iraqi">Iraqi</option>
                                <option value="irish">Irish</option>
                                <option value="israeli">Israeli</option>
                                <option value="italian">Italian</option>
                                <option value="ivorian">Ivorian</option>
                                <option value="jamaican">Jamaican</option>
                                <option value="japanese">Japanese</option>
                                <option value="jordanian">Jordanian</option>
                                <option value="kazakhstani">Kazakhstani</option>
                                <option value="kenyan">Kenyan</option>
                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                <option value="kuwaiti">Kuwaiti</option>
                                <option value="kyrgyz">Kyrgyz</option>
                                <option value="laotian">Laotian</option>
                                <option value="latvian">Latvian</option>
                                <option value="lebanese">Lebanese</option>
                                <option value="liberian">Liberian</option>
                                <option value="libyan">Libyan</option>
                                <option value="liechtensteiner">Liechtensteiner</option>
                                <option value="lithuanian">Lithuanian</option>
                                <option value="luxembourger">Luxembourger</option>
                                <option value="macedonian">Macedonian</option>
                                <option value="malagasy">Malagasy</option>
                                <option value="malawian">Malawian</option>
                                <option value="malaysian">Malaysian</option>
                                <option value="maldivan">Maldivan</option>
                                <option value="malian">Malian</option>
                                <option value="maltese">Maltese</option>
                                <option value="marshallese">Marshallese</option>
                                <option value="mauritanian">Mauritanian</option>
                                <option value="mauritian">Mauritian</option>
                                <option value="mexican">Mexican</option>
                                <option value="micronesian">Micronesian</option>
                                <option value="moldovan">Moldovan</option>
                                <option value="monacan">Monacan</option>
                                <option value="mongolian">Mongolian</option>
                                <option value="moroccan">Moroccan</option>
                                <option value="mosotho">Mosotho</option>
                                <option value="motswana">Motswana</option>
                                <option value="mozambican">Mozambican</option>
                                <option value="namibian">Namibian</option>
                                <option value="nauruan">Nauruan</option>
                                <option value="nepalese">Nepalese</option>
                                <option value="new zealander">New Zealander</option>
                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                <option value="nicaraguan">Nicaraguan</option>
                                <option value="nigerien">Nigerien</option>
                                <option value="north korean">North Korean</option>
                                <option value="northern irish">Northern Irish</option>
                                <option value="norwegian">Norwegian</option>
                                <option value="omani">Omani</option>
                                <option value="pakistani">Pakistani</option>
                                <option value="palauan">Palauan</option>
                                <option value="panamanian">Panamanian</option>
                                <option value="papua new guinean">Papua New Guinean</option>
                                <option value="paraguayan">Paraguayan</option>
                                <option value="peruvian">Peruvian</option>
                                <option value="polish">Polish</option>
                                <option value="portuguese">Portuguese</option>
                                <option value="qatari">Qatari</option>
                                <option value="romanian">Romanian</option>
                                <option value="russian">Russian</option>
                                <option value="rwandan">Rwandan</option>
                                <option value="saint lucian">Saint Lucian</option>
                                <option value="salvadoran">Salvadoran</option>
                                <option value="samoan">Samoan</option>
                                <option value="san marinese">San Marinese</option>
                                <option value="sao tomean">Sao Tomean</option>
                                <option value="saudi">Saudi</option>
                                <option value="scottish">Scottish</option>
                                <option value="senegalese">Senegalese</option>
                                <option value="serbian">Serbian</option>
                                <option value="seychellois">Seychellois</option>
                                <option value="sierra leonean">Sierra Leonean</option>
                                <option value="singaporean">Singaporean</option>
                                <option value="slovakian">Slovakian</option>
                                <option value="slovenian">Slovenian</option>
                                <option value="solomon islander">Solomon Islander</option>
                                <option value="somali">Somali</option>
                                <option value="south african">South African</option>
                                <option value="south korean">South Korean</option>
                                <option value="spanish">Spanish</option>
                                <option value="sri lankan">Sri Lankan</option>
                                <option value="sudanese">Sudanese</option>
                                <option value="surinamer">Surinamer</option>
                                <option value="swazi">Swazi</option>
                                <option value="swedish">Swedish</option>
                                <option value="swiss">Swiss</option>
                                <option value="syrian">Syrian</option>
                                <option value="taiwanese">Taiwanese</option>
                                <option value="tajik">Tajik</option>
                                <option value="tanzanian">Tanzanian</option>
                                <option value="thai">Thai</option>
                                <option value="togolese">Togolese</option>
                                <option value="tongan">Tongan</option>
                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                <option value="tunisian">Tunisian</option>
                                <option value="turkish">Turkish</option>
                                <option value="tuvaluan">Tuvaluan</option>
                                <option value="ugandan">Ugandan</option>
                                <option value="ukrainian">Ukrainian</option>
                                <option value="uruguayan">Uruguayan</option>
                                <option value="uzbekistani">Uzbekistani</option>
                                <option value="venezuelan">Venezuelan</option>
                                <option value="vietnamese">Vietnamese</option>
                                <option value="welsh">Welsh</option>
                                <option value="yemenite">Yemenite</option>
                                <option value="zambian">Zambian</option>
                                <option value="zimbabwean">Zimbabwean</option>
                            </select>
                        </div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Country of residence<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <select class="form-control b_country" class="b_country" name="b_country">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>CONTACT INFORMATION (Private)</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="row req_space">
                        <div class="col-sm-3">Home address<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4">
                                    Street address
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cp_street" name="cp_street" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Street address Line 2
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cp_street2" name="cp_street2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    City
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cp_city" name="cp_city" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Country / State
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cp_state" name="cp_state">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Country
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-control cp_country" name="cp_country">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Postal / ZIP code
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cp_postal" name="cp_postal" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Email address<span class="esp_red">*</span></div>
                        <div class="col-sm-9"><input type="email" class="cp_email" name="cp_email" required></div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Confirm email<span class="esp_red">*</span></div>
                        <div class="col-sm-9"><input type="email" class="cp_email2" required></div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Contact number<br><span class="esp_red_sp">*Either a mobile or landline   number is required.</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3">Mobile</div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div>
                                            <label>+</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="cp_mobile_region">
                                        </div>
                                        <div>
                                            <label>-</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="cp_mobile_body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">Landline</div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div>
                                            <label>+</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="cp_landline_region">
                                        </div>
                                        <div>
                                            <label>-</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="cp_landline_body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>CONTACT INFORMATION (Work)</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Company name<span class="esp_red">*</span></div>
                        <div class="col-sm-9"><input type="text" class="cw_company" name="cw_company" required></div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Company address<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4">
                                    Street address
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cw_street" name="cw_street" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Street address Line 2
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cw_street2" name="cw_street2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    City
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cw_city" name="cw_city" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Country / State
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cw_state" name="cw_state">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Country
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-control cw_country" name="cw_country">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    Postal / ZIP code
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="cw_postal" name="cw_postal" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Office email address<span class="esp_red">*</span></div>
                        <div class="col-sm-9"><input type="email" class="cw_email" name="cw_email" required></div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Confirm email<span class="esp_red">*</span></div>
                        <div class="col-sm-9"><input type="email" class="cw_email2" required></div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Office number<span class="esp_red_sp">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="">
                                            <label>+</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="cw_phone_region" required>
                                        </div>
                                        <div class="">
                                            <label>-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="cw_phone_body" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Cooking experience<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-2">
                                    <select class="form-control cw_experience" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    Years
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>CONTACT METHOD</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="entry_space">All information including the results of the competitions will be provided via email.</div>
                    <div class="entry_space_sp">Please specify which email address would you like us to use.<span class="esp_red">*</span></div>
                    <div class="container">
                        <div class="row entry_space">
                            <div class="form-check col-sm-12col-md-5 form-inline">
                                <input class="form-check-input cm_email" type="radio" name="cm_email" id="cm_email1" value="Private email address" checked>
                                <label class="form-check-label" for="cm_email">
                                    Private email address
                                </label>
                            </div>
                            <div class="form-check col-sm-12 col-md-5 form-inline">
                                <input class="form-check-input cm_email" type="radio" name="cm_email" id="cm_email2" value="Office email address">
                                <label class="form-check-label" for="cm_email">
                                    Office email address
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="entry_space_sp">Please specify which address any documents should be sent to.<span class="esp_red">*</span></div>
                    <div class="container">
                        <div class="row entry_space">
                            <div class="form-check col-sm-12col-md-5 form-inline">
                                <input class="form-check-input cm_address" type="radio" name="cm_address" id="cm_address1" value="Home address" checked>
                                <label class="form-check-label" for="cm_address">
                                    Home address
                                </label>
                            </div>
                            <div class="form-check col-sm-12 col-md-5 form-inline">
                                <input class="form-check-input cm_address" type="radio" name="cm_address" id="cm_address2" value="Office address">
                                <label class="form-check-label" for="cm_address">
                                    Office address
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>OTHERS</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="row req_space">
                        <div class="col-sm-3">Venue<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                Please select which regional qualifying competition that you would like to enter
                            </div>
                            <div class="row">
                                <select class="form-control col-sm-12 col-md-6 oth_venue" name="oth_venue">
                                    <option>Korea (Semptember 23, 2019)</option>
                                    <option>Hong Kong (October 3, 2019)</option>
                                    <option>North America (January 13, 2020)</option>
                                    <option>Europe (January 17, 2020)</option>
                                    <option>Hokkaido, Japan (August 2, 2019)</option>
                                    <option>Niigata, Japan (August 21, 2019)</option>
                                    <option>Tokyo, Japan (October 6, 2019)</option>
                                    <option>Shizuoka, Japan (September 21, 2019)</option>
                                    <option>Osaka, Japan (August 1, 2019)</option>
                                    <option>Fukuoka, Japan (August 27, 2019)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Questionnaire<span class="esp_red">*</span></div>
                        <div class="col-sm-9">
                            <div class="row">
                                How did you hear about ‘Japanese Culinary Arts Competition’?<span class="esp_red_sp">Multiple answers allowed.*</span>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="The Japanese Culinary Arts Competition website" class="oth_website" name="oth_website"> The Japanese Culinary Arts Competition website</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="DM / Leaflet" class="oth_dm" name="oth_dm"> DM / Leaflet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="Poster" class="oth_poster" name="oth_poster"> Poster</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="Email newsletter" class="oth_newsletter" name="oth_newsletter"> Email newsletter</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="Facebook" class="oth_facebook" name="oth_facebook"> Facebook</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="By a friend" class="oth_friend" name="oth_friend"> By a friend</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="I have entered this competition before" class="oth_competition" name="oth_competition"> I have entered this competition before</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-inline">
                                        <label><input type="checkbox" value="Other" class="oth_other" name="oth_other"> Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry_space_sp">Chosen the method of sending a recipe and pictures<span class="esp_red">*</span></div>
                    <div class="container">
                        <div class="row entry_space">
                            <div class="form-check col-sm-12col-md-5 form-inline">
                                <input class="form-check-input oth_recipe" type="radio" name="oth_recipe" id="oth_recipe1" value="Via online form" checked>
                                <label class="form-check-label" for="oth_recipe">
                                    Via online form
                                </label>
                            </div>
                            <div class="form-check col-sm-12 col-md-5 form-inline">
                                <input class="form-check-input oth_recipe" type="radio" name="oth_recipe" id="oth_recipe2" value="By post">
                                <label class="form-check-label" for="oth_recipe">
                                    By post
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info endbutton">
                <div class="container">
                    <button type="submit" class="button btn col-sm-5 review_bt"><b>Next</b></button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <div class="container entry_step2">
        <div class="mid_sec">
            <div class="mid_para glabel">
                <h4><b>REVIEW AND CONFIRM YOUR DETAILS</b></h4>
                <span class="esp_red">* Application submission will be completed by clicking ’conﬁrm’ below.</span>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>BASIC INFORMATION</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="row req_space">
                        <div class="col-sm-3">First Name</div>
                        <div class="col-sm-9 la_b_firstname">Yumi</div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Middle Name</div>
                        <div class="col-sm-9 la_b_midname"></div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Last Name</div>
                        <div class="col-sm-9 la_b_lastname">Amanuma</div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Birthday</div>
                        <div class="col-sm-9 la_b_birthday">24th April 1987</div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Gender</div>
                        <div class="col-sm-9 la_b_gender">Female</div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Nationality</div>
                        <div class="col-sm-9 la_b_nation">Japanese</div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Country of residence</div>
                        <div class="col-sm-9 la_b_country">Japan</div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>CONTACT INFORMATION (Private)</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="row req_space">
                        <div class="col-sm-3">Home address</div>
                        <div class="col-sm-9">
                            <div class="row la_cp_street">
                                XX Parkhurst Road
                            </div>
                            <div class="row la_cp_street2">
                                Holloway
                            </div>
                            <div class="row la_cp_city">
                                London
                            </div>
                            <div class="row la_cp_state">
                                Greater Londo
                            </div>
                            <div class="row la_cp_country">
                                United Kindom
                            </div>
                            <div class="row la_cp_postal">
                                N7 XXX
                            </div>
                        </div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Email address</div>
                        <div class="col-sm-9 la_cp_email">XXXXX@gmail.com</div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Contact number</div>
                        <div class="col-sm-9 la_cp_mobile">+44 - xxxx-xxxxx</div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>CONTACT INFORMATION (Work)</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Company name</div>
                        <div class="col-sm-9 la_cw_company">Claritas Marketing Ltd</div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Company address</div>
                        <div class="col-sm-9">
                            <div class="row la_cw_street">
                                6 Aztec Row 1
                            </div>
                            <div class="row la_cw_street2">
                                Berners Road
                            </div>
                            <div class="row la_cw_city">
                                London
                            </div>
                            <div class="row la_cw_state">
                                Greater London
                            </div>
                            <div class="row la_cw_country">
                                United Kindom
                            </div>
                            <div class="row la_cw_postal">
                                N1 0PW
                            </div>
                        </div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Office email address</div>
                        <div class="col-sm-9 la_cw_email">XXXXX@gmail.com</div>
                    </div>
                    <div class="row entry_space_sp">
                        <div class="col-sm-3">Office number</div>
                        <div class="col-sm-9 la_cw_phone">+44 - xxxx-xxxxx</div>
                    </div>
                    <div class="row entry_space">
                        <div class="col-sm-3">Cooking experience</div>
                        <div class="col-sm-9 la_cw_experience">5</div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>CONTACT METHOD</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="entry_space_sp">Please specify which email address would you like us to use.</div>
                    <div class="container">
                        <div class="entry_space la_cm_email">Private email address</div>
                    </div>
                    <div class="entry_space_sp">Please specify which address any documents should be sent to.</div>
                    <div class="container">
                        <div class="entry_space la_cm_address">Office address</div>
                    </div>
                </div>
            </div>
            <div class="mid_para entry_basic_info">
                <h4><b>OTHERS</b></h4>
                <div class="pixdiv_entry"></div>
                <div class="intro_text entry_space">
                    <div class="row req_space">
                        <div class="col-sm-3">Venue</div>
                        <div class="col-sm-9 la_oth_venue">Europe</div>
                    </div>
                    <div class="row req_space">
                        <div class="col-sm-3">Questionnaire</div>
                        <div class="col-sm-9">
                            <div class="row">
                                How did you hear about ‘Japanese Culinary Arts Competition’?
                            </div>
                            <div class="row la_oth_website" style="display:none">
                                The Japanese Culinary Arts Competition website
                            </div>
                            <input class="hla_website" type="hidden" value="The Japanese Culinary Arts Competition website">
                            <div class="row la_oth_dm" style="display:none">
                                DM / Leaflet
                            </div>
                            <input class="hla_dm" type="hidden" value="DM / Leaflet">
                            <div class="row la_oth_poster" style="display:none">
                                Poster
                            </div>
                            <input class="hla_poster" type="hidden" value="Poster">
                            <div class="row la_oth_newsletter" style="display:none">
                                Email newsletter
                            </div>
                            <input class="hla_newsletter" type="hidden" value="Email newsletter">
                            <div class="row la_oth_facebook" style="display:none">
                                Facebook
                            </div>
                            <input class="hla_facebook" type="hidden" value="Facebook">
                            <div class="row la_oth_friend" style="display:none">
                                By a friend
                            </div>
                            <input class="hla_friend" type="hidden" value="Friend">
                            <div class="row la_oth_competition" style="display:none">
                                I have entered this competition before
                            </div>
                            <input class="hla_competition" type="hidden" value="I have entered this competition before">
                            <div class="row la_oth_other" style="display:none">
                                Other
                            </div>
                            <input class="hla_other" type="hidden" value="Other">
                        </div>
                    </div>

                    <div class="entry_space_sp">Chosen the method of sending a recipe and pictures</div>
                    <div class="container">
                        <div class="entry_space la_oth_recipe">
                            Via online form
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mid_para entry_basic_info endbutton">
                <span class="esp_red">*Application submission will be completed by clicking ’confirm’ below.</span>
                <div class="container entry_space_sp">
                    <button type="button" class="button btn col-sm-7 confirm_bt"><b>CONFIRM</b></button>
                </div>
                <div class="container">
                    <button class="button btn col-sm-5 save_bt"><b>Save and complete later</b></button>
                </div>
                <div class="container mid_span">
                    <button class="button btn col-sm-5 back_bt"><b>Go back and edit</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container entry_step3">
        <div class="mid_sec">
            <div class="mid_para endpage">
                <h4><b>Thank you for registering for Japanese Culinary Arts Competition!</b></h4><hr>
                <h5><b>Please send a recipe and pictures to following address.</b></h5><br>
                <div>
                    <h5>#305 Eiwa Oike Bldg.</h5>
                    <h5>436 Sasayacho, Nakagyo-ku,</h5>
                    <h5>Kyoto-shi, Kyoto 604-8187,</h5>
                    <h5>Japan</h5>
                </div>
            </div>
        </div>
    </div>

<script>

    function SendingData(){
        
        $.post( "/send", 
        {
            _token: "{{ csrf_token() }}",
            b_firstname: $(".la_b_firstname").text(),
            b_midname: $(".la_b_midname").text(),
            b_lastname: $(".la_b_lastname").text(),
            b_birthday: $(".la_b_birthday").text(),
            b_gender: $(".la_b_gender").text(),
            b_nation: $(".la_b_nation").text(),
            b_country: $(".la_b_country").text(),
            cp_street: $(".la_cp_street").text(),
            cp_street2: $(".la_cp_street2").text(),
            cp_city: $(".la_cp_city").text(),
            cp_state: $(".la_cp_state").text(),
            cp_country: $(".la_cp_country").text(),
            cp_postal: $(".la_cp_postal").text(),
            cp_email: $(".la_cp_email").text(),
            cp_mobile: $(".la_cp_mobile").text(),
            cw_company: $(".la_cw_company").text(),
            cw_street: $(".la_cw_street").text(),
            cw_street2: $(".la_cw_street2").text(),
            cw_city: $(".la_cw_city").text(),
            cw_state: $(".la_cw_state").text(),
            cw_country: $(".la_cw_country").text(),
            cw_postal: $(".la_cw_postal").text(),
            cw_email: $(".la_cw_email").text(),
            cw_phone: $(".la_cw_phone").text(),
            cw_experience: $(".la_cw_experience").text(),
            cm_email: $(".la_cm_email").text(),
            cm_address: $(".la_cm_address").text(),
            oth_venue: $(".la_oth_venue").text(),
            oth_recipe: $(".la_oth_recipe").text(),
            oth_website: $(".hla_website").val(),
            oth_dm: $(".hla_dm").val(),
            oth_poster: $(".hla_poster").val(),
            oth_newsletter: $(".hla_newsletter").val(),
            oth_facebook: $(".hla_facebook").val(),
            oth_friend: $(".hla_friend").val(),
            oth_competition: $(".hla_competition").val(),
            oth_other: $(".hla_other").val(),
            entry: "{{ $entryid }}"
        },
        function(data,status){
            $(this).html('<b>Confirm</b>');
            // console.log(data);
            if(status=="success"){
                if(data == "email_success"){

                    if($(".la_oth_recipe").text()=="Via online form"){
                        window.location.href = "/upload?entryid="+"{{$entryid}}&fullname=" + $(".la_b_firstname").text()+ " " + $(".la_b_midname").text() + " " + $(".la_b_lastname").text() + "&email=" + $(".la_cp_email").text();
                    }else{
                        HeadDisplay('0.6', '0.6', '1.0');
                        MainDisplay('none', 'none', 'block');
                    }
                    
                }
            }else{
                alert("Error Occured!: " + status);
            }
        });
    }
</script>

@endsection
