<?php
   require('database.php');
   $type = $_GET['type'];
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible"
         content="IE=edge">
      <meta name="viewport"
         content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link href="./customerInfoStyle.css"rel="stylesheet" type="text/css">
      <title>Customer & Payment Information</title>
   </head>
   <body>
      <header>
         <section>
            <div class="container-fluid">
               <nav class="navbar navbar-expand-lg navbar-light bg-none justify-content-between">
                  <a href="index.html">
                  <img src="logo.jpg" alt="Camelback" />
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div>
                     <ul class="navbar-nav">
                        <li class="nav-item active mr-4">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-4">
                           <a class="nav-link" href="aboutUs.html">About Us</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="Reservationpage.php">Booking</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </section>
      </header>
      <div class="title">
         <h1 class="text-center">Guest Information</h1>
      </div>
      <br>
      <h2 style="text-align:center;">Type of Room:
         <?php echo $type; ?>
      </h2>
      <br/>
      <hr>
      <br>
      <!-- Need to Display Date selected, Room
         selected & Total USD charge -->
      <!-- Need to add PHP file name where the form
         needs to be submitted -->
      <form action="confirmation.php" method="POST">
         <input type="hidden" value="<?php echo $type;
            ?>" name="type" />
         <section class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div>
                     <section class="box">
                        <!-- Title select -->
                        <div></div>
                        <div></div>
                        <div>
                           <label
                              for="title">Title:</label> <br>
                           <select required
                              name="title" id="title" class="form-control">
                              <option value="mr"
                                 selected>Mr</option>
                              <option
                                 value="mrs">Mrs</option>
                              <option
                                 value="ms">Ms</option>
                              <option
                                 value="miss">Miss</option>
                              <option
                                 value="doctor">Doctor</option>
                           </select>
                        </div>
                        <br>
                        <!-- First name -->
                        <div>
                           <label
                              for="firstname">First Name</label> <br>
                           <input required type="text"
                              name="firstname" id="firstname" class="form-control">
                        </div>
                        <br>
                        <!-- Last name -->
                        <div>
                           <label for="lastname">Last
                           Name</label> <br>
                           <input required type="text"
                              name="lastname" id="lastname"class="form-control">
                        </div>
                        <br>
                        <!-- Email Address Entry -->
                        <div>
                           <label for="email">Email
                           Address</label> <br>
                           <input required
                              type="email" name="email" id="email"
                              placeholder="example@something.com"class="form-control">
                        </div>
                        <br>
                        <!-- Country / Region Select
                           -->
                        <div>
                           <label
                              for="country/region">Country/Region</label> <br>
                           <select required
                              name="country" id="country"class="form-control">
                              <option
                                 value="Afganistan">Afghanistan</option>
                              <option
                                 value="Albania">Albania</option>
                              <option
                                 value="Algeria">Algeria</option>
                              <option value="American
                                 Samoa">American Samoa</option>
                              <option
                                 value="Andorra">Andorra</option>
                              <option
                                 value="Angola">Angola</option>
                              <option
                                 value="Anguilla">Anguilla</option>
                              <option value="Antigua &
                                 Barbuda">Antigua & Barbuda</option>
                              <option
                                 value="Argentina">Argentina</option>
                              <option
                                 value="Armenia">Armenia</option>
                              <option
                                 value="Aruba">Aruba</option>
                              <option
                                 value="Australia">Australia</option>
                              <option
                                 value="Austria">Austria</option>
                              <option
                                 value="Azerbaijan">Azerbaijan</option>
                              <option
                                 value="Bahamas">Bahamas</option>
                              <option
                                 value="Bahrain">Bahrain</option>
                              <option
                                 value="Bangladesh">Bangladesh</option>
                              <option
                                 value="Barbados">Barbados</option>
                              <option
                                 value="Belarus">Belarus</option>
                              <option
                                 value="Belgium">Belgium</option>
                              <option
                                 value="Belize">Belize</option>
                              <option
                                 value="Benin">Benin</option>
                              <option
                                 value="Bermuda">Bermuda</option>
                              <option
                                 value="Bhutan">Bhutan</option>
                              <option
                                 value="Bolivia">Bolivia</option>
                              <option
                                 value="Bonaire">Bonaire</option>
                              <option value="Bosnia &
                                 Herzegovina">Bosnia & Herzegovina</option>
                              <option
                                 value="Botswana">Botswana</option>
                              <option
                                 value="Brazil">Brazil</option>
                              <option value="British
                                 Indian Ocean Ter">British Indian Ocean Ter</option>
                              <option
                                 value="Brunei">Brunei</option>
                              <option
                                 value="Bulgaria">Bulgaria</option>
                              <option value="Burkina
                                 Faso">Burkina Faso</option>
                              <option
                                 value="Burundi">Burundi</option>
                              <option
                                 value="Cambodia">Cambodia</option>
                              <option
                                 value="Cameroon">Cameroon</option>
                              <option
                                 value="Canada">Canada</option>
                              <option value="Canary
                                 Islands">Canary Islands</option>
                              <option value="Cape
                                 Verde">Cape Verde</option>
                              <option value="Cayman
                                 Islands">Cayman Islands</option>
                              <option value="Central
                                 African Republic">Central African Republic</option>
                              <option
                                 value="Chad">Chad</option>
                              <option value="Channel
                                 Islands">Channel Islands</option>
                              <option
                                 value="Chile">Chile</option>
                              <option
                                 value="China">China</option>
                              <option value="Christmas
                                 Island">Christmas Island</option>
                              <option value="Cocos
                                 Island">Cocos Island</option>
                              <option
                                 value="Colombia">Colombia</option>
                              <option
                                 value="Comoros">Comoros</option>
                              <option
                                 value="Congo">Congo</option>
                              <option value="Cook
                                 Islands">Cook Islands</option>
                              <option value="Costa
                                 Rica">Costa Rica</option>
                              <option value="Cote
                                 DIvoire">Cote DIvoire</option>
                              <option
                                 value="Croatia">Croatia</option>
                              <option
                                 value="Cuba">Cuba</option>
                              <option
                                 value="Curaco">Curacao</option>
                              <option
                                 value="Cyprus">Cyprus</option>
                              <option value="Czech
                                 Republic">Czech Republic</option>
                              <option
                                 value="Denmark">Denmark</option>
                              <option
                                 value="Djibouti">Djibouti</option>
                              <option
                                 value="Dominica">Dominica</option>
                              <option value="Dominican
                                 Republic">Dominican Republic</option>
                              <option value="East
                                 Timor">East Timor</option>
                              <option
                                 value="Ecuador">Ecuador</option>
                              <option
                                 value="Egypt">Egypt</option>
                              <option value="El
                                 Salvador">El Salvador</option>
                              <option
                                 value="Equatorial Guinea">Equatorial
                                 Guinea
                              </option>
                              <option
                                 value="Eritrea">Eritrea</option>
                              <option
                                 value="Estonia">Estonia</option>
                              <option
                                 value="Ethiopia">Ethiopia</option>
                              <option value="Falkland
                                 Islands">Falkland Islands</option>
                              <option value="Faroe
                                 Islands">Faroe Islands</option>
                              <option
                                 value="Fiji">Fiji</option>
                              <option
                                 value="Finland">Finland</option>
                              <option
                                 value="France">France</option>
                              <option value="French
                                 Guiana">French Guiana</option>
                              <option value="French
                                 Polynesia">French Polynesia</option>
                              <option value="French
                                 Southern Ter">French Southern Ter</option>
                              <option
                                 value="Gabon">Gabon</option>
                              <option
                                 value="Gambia">Gambia</option>
                              <option
                                 value="Georgia">Georgia</option>
                              <option
                                 value="Germany">Germany</option>
                              <option
                                 value="Ghana">Ghana</option>
                              <option
                                 value="Gibraltar">Gibraltar</option>
                              <option value="Great
                                 Britain">Great Britain</option>
                              <option
                                 value="Greece">Greece</option>
                              <option
                                 value="Greenland">Greenland</option>
                              <option
                                 value="Grenada">Grenada</option>
                              <option
                                 value="Guadeloupe">Guadeloupe</option>
                              <option
                                 value="Guam">Guam</option>
                              <option
                                 value="Guatemala">Guatemala</option>
                              <option
                                 value="Guinea">Guinea</option>
                              <option
                                 value="Guyana">Guyana</option>
                              <option
                                 value="Haiti">Haiti</option>
                              <option
                                 value="Hawaii">Hawaii</option>
                              <option
                                 value="Honduras">Honduras</option>
                              <option value="Hong
                                 Kong">Hong Kong</option>
                              <option
                                 value="Hungary">Hungary</option>
                              <option
                                 value="Iceland">Iceland</option>
                              <option
                                 value="Indonesia">Indonesia</option>
                              <option
                                 value="India">India</option>
                              <option
                                 value="Iran">Iran</option>
                              <option
                                 value="Iraq">Iraq</option>
                              <option
                                 value="Ireland">Ireland</option>
                              <option value="Isle of
                                 Man">Isle of Man</option>
                              <option
                                 value="Israel">Israel</option>
                              <option
                                 value="Italy">Italy</option>
                              <option
                                 value="Jamaica">Jamaica</option>
                              <option
                                 value="Japan">Japan</option>
                              <option
                                 value="Jordan">Jordan</option>
                              <option
                                 value="Kazakhstan">Kazakhstan</option>
                              <option
                                 value="Kenya">Kenya</option>
                              <option
                                 value="Kiribati">Kiribati</option>
                              <option value="Korea
                                 North">Korea North</option>
                              <option value="Korea
                                 Sout">Korea South</option>
                              <option
                                 value="Kuwait">Kuwait</option>
                              <option
                                 value="Kyrgyzstan">Kyrgyzstan</option>
                              <option
                                 value="Laos">Laos</option>
                              <option
                                 value="Latvia">Latvia</option>
                              <option
                                 value="Lebanon">Lebanon</option>
                              <option
                                 value="Lesotho">Lesotho</option>
                              <option
                                 value="Liberia">Liberia</option>
                              <option
                                 value="Libya">Libya</option>
                              <option
                                 value="Liechtenstein">Liechtenstein</option>
                              <option
                                 value="Lithuania">Lithuania</option>
                              <option
                                 value="Luxembourg">Luxembourg</option>
                              <option
                                 value="Macau">Macau</option>
                              <option
                                 value="Macedonia">Macedonia</option>
                              <option
                                 value="Madagascar">Madagascar</option>
                              <option
                                 value="Malaysia">Malaysia</option>
                              <option
                                 value="Malawi">Malawi</option>
                              <option
                                 value="Maldives">Maldives</option>
                              <option
                                 value="Mali">Mali</option>
                              <option
                                 value="Malta">Malta</option>
                              <option value="Marshall
                                 Islands">Marshall Islands</option>
                              <option
                                 value="Martinique">Martinique</option>
                              <option
                                 value="Mauritania">Mauritania</option>
                              <option
                                 value="Mauritius">Mauritius</option>
                              <option
                                 value="Mayotte">Mayotte</option>
                              <option
                                 value="Mexico">Mexico</option>
                              <option value="Midway
                                 Islands">Midway Islands</option>
                              <option
                                 value="Moldova">Moldova</option>
                              <option
                                 value="Monaco">Monaco</option>
                              <option
                                 value="Mongolia">Mongolia</option>
                              <option
                                 value="Montserrat">Montserrat</option>
                              <option
                                 value="Morocco">Morocco</option>
                              <option
                                 value="Mozambique">Mozambique</option>
                              <option
                                 value="Myanmar">Myanmar</option>
                              <option
                                 value="Nambia">Nambia</option>
                              <option
                                 value="Nauru">Nauru</option>
                              <option
                                 value="Nepal">Nepal</option>
                              <option
                                 value="Netherland Antilles">Netherland
                                 Antilles
                              </option>
                              <option
                                 value="Netherlands">Netherlands (Holland,
                                 Europe)
                              </option>
                              <option
                                 value="Nevis">Nevis</option>
                              <option value="New
                                 Caledonia">New Caledonia</option>
                              <option value="New
                                 Zealand">New Zealand</option>
                              <option
                                 value="Nicaragua">Nicaragua</option>
                              <option
                                 value="Niger">Niger</option>
                              <option
                                 value="Nigeria">Nigeria</option>
                              <option
                                 value="Niue">Niue</option>
                              <option value="Norfolk
                                 Island">Norfolk Island</option>
                              <option
                                 value="Norway">Norway</option>
                              <option
                                 value="Oman">Oman</option>
                              <option
                                 value="Pakistan">Pakistan</option>
                              <option value="Palau
                                 Island">Palau Island</option>
                              <option
                                 value="Palestine">Palestine</option>
                              <option
                                 value="Panama">Panama</option>
                              <option value="Papua New
                                 Guinea">Papua New Guinea</option>
                              <option
                                 value="Paraguay">Paraguay</option>
                              <option
                                 value="Peru">Peru</option>
                              <option
                                 value="Phillipines">Philippines</option>
                              <option value="Pitcairn
                                 Island">Pitcairn Island</option>
                              <option
                                 value="Poland">Poland</option>
                              <option
                                 value="Portugal">Portugal</option>
                              <option value="Puerto
                                 Rico">Puerto Rico</option>
                              <option
                                 value="Qatar">Qatar</option>
                              <option value="Republic
                                 of Montenegro">Republic of Montenegro</option>
                              <option value="Republic
                                 of Serbia">Republic of Serbia</option>
                              <option
                                 value="Reunion">Reunion</option>
                              <option
                                 value="Romania">Romania</option>
                              <option
                                 value="Russia">Russia</option>
                              <option
                                 value="Rwanda">Rwanda</option>
                              <option value="St
                                 Barthelemy">St Barthelemy</option>
                              <option value="St
                                 Eustatius">St Eustatius</option>
                              <option value="St
                                 Helena">St Helena</option>
                              <option value="St
                                 Kitts-Nevis">St Kitts-Nevis</option>
                              <option value="St
                                 Lucia">St Lucia</option>
                              <option value="St
                                 Maarten">St Maarten</option>
                              <option value="St Pierre
                                 & Miquelon">St Pierre & Miquelon</option>
                              <option value="St
                                 Vincent & Grenadines">St Vincent &
                                 Grenadines
                              </option>
                              <option
                                 value="Saipan">Saipan</option>
                              <option
                                 value="Samoa">Samoa</option>
                              <option value="Samoa
                                 American">Samoa American</option>
                              <option value="San
                                 Marino">San Marino</option>
                              <option value="Sao Tome
                                 & Principe">Sao Tome & Principe</option>
                              <option value="Saudi
                                 Arabia">Saudi Arabia</option>
                              <option
                                 value="Senegal">Senegal</option>
                              <option
                                 value="Seychelles">Seychelles</option>
                              <option value="Sierra
                                 Leone">Sierra Leone</option>
                              <option
                                 value="Singapore">Singapore</option>
                              <option
                                 value="Slovakia">Slovakia</option>
                              <option
                                 value="Slovenia">Slovenia</option>
                              <option value="Solomon
                                 Islands">Solomon Islands</option>
                              <option
                                 value="Somalia">Somalia</option>
                              <option value="South
                                 Africa">South Africa</option>
                              <option
                                 value="Spain">Spain</option>
                              <option value="Sri
                                 Lanka">Sri Lanka</option>
                              <option
                                 value="Sudan">Sudan</option>
                              <option
                                 value="Suriname">Suriname</option>
                              <option
                                 value="Swaziland">Swaziland</option>
                              <option
                                 value="Sweden">Sweden</option>
                              <option
                                 value="Switzerland">Switzerland</option>
                              <option
                                 value="Syria">Syria</option>
                              <option
                                 value="Tahiti">Tahiti</option>
                              <option
                                 value="Taiwan">Taiwan</option>
                              <option
                                 value="Tajikistan">Tajikistan</option>
                              <option
                                 value="Tanzania">Tanzania</option>
                              <option
                                 value="Thailand">Thailand</option>
                              <option
                                 value="Togo">Togo</option>
                              <option
                                 value="Tokelau">Tokelau</option>
                              <option
                                 value="Tonga">Tonga</option>
                              <option value="Trinidad
                                 & Tobago">Trinidad & Tobago</option>
                              <option
                                 value="Tunisia">Tunisia</option>
                              <option
                                 value="Turkey">Turkey</option>
                              <option
                                 value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks &
                                 Caicos Is">Turks & Caicos Is</option>
                              <option
                                 value="Tuvalu">Tuvalu</option>
                              <option
                                 value="Uganda">Uganda</option>
                              <option value="United
                                 Kingdom">United Kingdom</option>
                              <option
                                 value="Ukraine">Ukraine</option>
                              <option value="United
                                 Arab Erimates">United Arab Emirates</option>
                              <option value="United
                                 States of America">United States of
                                 America
                              </option>
                              <option
                                 value="Uraguay">Uruguay</option>
                              <option
                                 value="Uzbekistan">Uzbekistan</option>
                              <option
                                 value="Vanuatu">Vanuatu</option>
                              <option value="Vatican
                                 City State">Vatican City State</option>
                              <option
                                 value="Venezuela">Venezuela</option>
                              <option
                                 value="Vietnam">Vietnam</option>
                              <option value="Virgin
                                 Islands (Brit)">Virgin Islands (Brit)</option>
                              <option value="Virgin
                                 Islands (USA)">Virgin Islands (USA)</option>
                              <option value="Wake
                                 Island">Wake Island</option>
                              <option value="Wallis &
                                 Futana Is">Wallis & Futana Is</option>
                              <option
                                 value="Yemen">Yemen</option>
                              <option
                                 value="Zaire">Zaire</option>
                              <option
                                 value="Zambia">Zambia</option>
                              <option
                                 value="Zimbabwe">Zimbabwe</option>
                           </select>
                        </div>
                        <br>
                        <!-- Address -->
                        <div style="flex-direction:
                           row;">
                           <label
                              for="address">Address</label> <br>
                           <input required type="text"
                              name="address" id="adress" placeholder="Line 1" class="form-control">
                           <br><br>
                           <input type="text"
                              placeholder="Line 2"class="form-control"> <br><br>
                           <input type="text"
                              placeholder="Apt#/Unit#/Floor"class="form-control">
                        </div>
                        <br>
                        <!-- City Text -->
                        <div>
                           <label
                              for="city">City</label> <br>
                           <input required type="text"
                              name="city" id="city"class="form-control">
                        </div>
                        <br>
                        <!-- State / Province Text -->
                        <div>
                           <label
                              for="state">State</label> <br>
                           <input required type="text"
                              name="state" id="state"class="form-control">
                        </div>
                        <br>
                        <!-- ZipCode -->
                        <div>
                           <label for="zipcode">Zip
                           Code</label> <br>
                           <input required
                              type="numeric" name="zipcode" id="zipcode"class="form-control">
                        </div>
                        <br>
                  </div>
               </div>
               <div class="col-md-6">
               <div class="box">
               <div>
               <h2>Type of Room: <?php echo
                  $type; ?></h2><br/>
               </div>
               <span>Check-In: </span><br>
               <input required type="date"
                  id="checkInDate" name="checkin"class="form-control" value="<?php echo
                     date('Y-m-d') ?>" onchange="dateChanged()">
               <div>
               <br>
               <span>Check-Out:</span><br>
               <input required type="date"
                  id="checkOutDate" name="checkout"class="form-control" value="<?php echo
                     date('Y-m-d', strtotime("+10 days")); ?>"
                  onchange="dateChanged()">
               </div>
               <div class="error" style="color:
                  red; display: none;">Check-out date must be later
               than check-in date!</div>
               <br/>
               <div class="chooseRoomContainer">
               <b>Please choose your check-in
               and check-out dates to see the number of available
               rooms.</b></br></br>
               <div class="roomsContainer">
               </div>
               </div><br>
               <div>
               <span>Number of
               Rooms:</span><br>
               <input type="number" min="1"
                  id="numberofrooms" name="rooms"class="form-control">
               </div><br>
               <div>
               <span>Adults</span><br>
               <input required type="number"
                  name="adults" min="1"class="form-control">
               </div><br>
               <div>
               <span>Children</span><br>
               <input required type="number"
                  name="children" min="0"class="form-control">
               </div>
               </div>
               </div>
            </div>
            </div>
            </section>
         </section>
         <section class="centered-content mt-4">
            <!-- Submit Button -->
            <button  type="submit"class="btn btn-outline-dark">Submit</button>
         </section>
      </form>
      <br>
      <!-- Footer -->
      <footer class="bg-dark text-center text-white">
         <!-- Grid container -->
         <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
               <!-- Facebook -->
               <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-facebook-f"></i
                  ></a>
               <!-- Twitter -->
               <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-twitter"></i
                  ></a>
               <!-- Google -->
               <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-google"></i
                  ></a>
               <!-- Instagram -->
               <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-instagram"></i
                  ></a>
               <!-- Linkedin -->
               <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-linkedin-in"></i
                  ></a>
               <!-- Github -->
               <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-github"></i
                  ></a>
            </section>
            <!-- Section: Social media -->
            <!-- Section: Form -->
            <section class="">
               <form action="">
                  <!--Grid row-->
                  <div class="row d-flex justify-content-center">
                     <!--Grid column-->
                     <div class="col-auto">
                        <p class="pt-2">
                           <strong>Sign up for our newsletter</strong>
                        </p>
                     </div>
                     <!--Grid column-->
                     <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                           <input type="email" id="form5Example21" />
                           <label class="form-label" for="form5Example21"class="form-control">Email address</label>
                        </div>
                     </div>
                     <!--Grid column-->
                     <!--Grid column-->
                     <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                        Subscribe
                        </button>
                     </div>
                  </div>
               </form>
            </section>
            <!-- Section: Text -->
            <section class="mb-4">
               <p>
                  Experience Winter in the Poconos with a Getaway to Camelback Resort. Only 90 Min from NYC. Splash at Aquatopia, USA's #1 Indoor Waterpark + Endless Outdoor Adventure. On-site dining options. Plan your getaway. Featured hotels: Specials & Packages, Plan Your Stay.
               </p>
            </section>
         </div>
         <!-- Copyright -->
         <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white">camelbackresort</a>
         </div>
         <!-- Copyright -->
      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script>
         const type = "<?php echo $_GET['type'] ?>";
         function dateChanged() {
             let roomSelection =
                 document.getElementById('room-selection');
             let checkInDate =
                 document.getElementById('checkInDate').value;
             let checkOutDate =
                 document.getElementById('checkOutDate').value;
             if (checkInDate > checkOutDate) {
                 document.querySelector('.error').style.display =
                     'block';
                 document.querySelector('.chooseRoomContainer').styl
                 e.display = 'none';
                 return;
             } else {
                 document.querySelector('.error').style.display =
                     'none';
                 document.querySelector('.chooseRoomContainer').styl
                 e.display = 'block';
             }
             let data = {
                 checkInDate,
                 checkOutDate,
                 type
             };
             let fullHtml = '';
             fetch("./availablerooms.php", {
                 method: "POST",
                 headers: {
                     "Content-Type":
                         "application/json"
                 },
                 body: JSON.stringify(data)
             })
                 .then(res => res.json())
                 .then(rooms => {
                     console.log(rooms);
                     if (rooms > 0) {
                         const html = `<p>Number of
         available rooms: <b>${rooms}</b></p>`
                         document.querySelector('.roomsContainer').innerHTML
                             = html;
                         document.querySelector('#numberofrooms').setAttribu
                         te('max', rooms);
                     } else {
                         const html = `<p>No rooms
         available. <b>Please select another date</b></p>`;
                         document.querySelector('.roomsContainer').innerHTML
                             = html;
                     }
                 });
         }
      </script>
   </body>
</html>