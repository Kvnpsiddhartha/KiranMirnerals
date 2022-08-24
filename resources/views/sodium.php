
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Kiran Minerals</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <!-- <link rel="stylesheet" href="css/modal.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style>

        .modal-backdrop {
            z-index: -1;
        }

        input[type=submit] {
            background-color: rgb(254, 90, 14);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: rgb(254, 90, 14);
        }

        .container {
            border-radius: 5px;
            /*background-color: #f2f2f2;*/
            padding: 0;

        }

        .content{
            padding: 50px;
        }

        .col-25 {
            float: left;
            width: 90%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 50%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .modal-style {
            background-color: rgb(254, 90, 14);
            border: none;
            width: 205px;
            height: 61px;
        }

        .sub{
            float: left;
            background-color: rgb(254, 90, 14) !important;
            border-radius: 4px;
            margin-left: 0px;
        }

        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>

</head>
<body class="_active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div> <!-- /.preloader -->

<div class="page-wrapper">

    <?php
    include 'inc/topbar.php';
    ?>

    <header class="header header-home-three">
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
                include 'inc/menu.php';
                ?>

                <div class="right-side-box">
                    <button type="button" class=" modal-style modal-style banner-btn hvr-sweep-to-right " data-toggle="modal" data-target="#exampleModal">
                        Request Sample<span><i class="fa fa-arrow-right"></i></span>
                    </button>
                </div>

                <!--<div class="right-side-box">
                    <a href="#" class="rqa-btn"><span class="inner">Request Sample <i class="fa fa-caret-right"></i></span></a>
                </div>--><!-- /.right-side-box -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Request Form</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- FORM WILL BE HERE -->

                                <form class="content container" method="post" action="Admin/requestmodal.php">
                                    <div class="row">

                                        <div class="col-75">
                                            <input type="text" id="fname" name="name" placeholder="Your name..">
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="row">

                                        <div class="col-75">
                                            <input type="text" id="lname" name="email" placeholder="Your Email..">
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="row">

                                        <div class="col-75">
                                            <input type="text" id="lname" name="contact" placeholder="Your contact..">
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="row">

                                        <div class="col-75">
                                            <select id="country" name="country">
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="India">India</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">

                                        <div class="col-75">
                                            <textarea id="subject" name="subject" placeholder="Request info.." style="height:200px"></textarea>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="sub row">
                                        <input type="submit" value="Submit">
                                    </div>
                                </form>



                            </div>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div><!-- /.container -->
        </nav>
    </header><!-- /.header -->

    <div class="inner-banner">
        <div class="container">
            <h3>Sodium Feldspar</h3>
            <ul class="breadcumb">
                <li><a href="index.php">Home</a></li><!--
                --><li><span class="sep"><i class="fa fa-angle-right"></i></span></li><!--
                --><li><span>Products</span></li>
            </ul><!-- /.breadcumb -->
        </div><!-- /.container -->
    </div><!-- /.inner-banner -->

    <section class="service-page service-details-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <?php
                        include 'inc/sidebar.php';
                        ?>
                        <!--<div class="single-sidebar broucher-sidebar">
                            <div class="title">
                                <h3>Brochures</h3>
                            </div>--><!-- /.title -->
                            <!--<p>View our 2018 financial prospectus brochure for an easy to read guide on all of the services offer.</p>
                            <a href="#" class="broucher-btn"><i class="industrio-icon-emails-interface-download-symbol"></i> Download Brochure</a>
                            <a href="#" class="broucher-btn"><i class="industrio-icon-pdf"></i> Characteristics</a>
                        </div>--><!-- /.single-sidebar service-sidebar -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 col-sm-12 col-xs-12 -->
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="service-item-box service-details-content">
                        <!--div class="img-box">
                            <img src="img/service-details-1-1.jpg" alt="Awesome Image"/>
                        </div--><!-- /.img-box -->
                        <!--br /-->
                        <!--br /-->
                        <h3>Sodium Feldspar</h3>
                        <br />
                        <p>
                            Feldspar is by far the most abundant group of minerals in the earth’s crust, forming about 60% of terrestrial rocks. Most deposits offer sodium feldspar as well as potassium feldspar and mixed feldspars.
                            Feldspars are primarily used in industrial applications for their alumina and alkali content. The term feldspar encompasses a whole range of materials.

                        </p>
                        <br />

                        <p>
                            Sodium feldspar is commonly used in Ceramic and Glass industries. Kiran Minerals is a market leader in the mining and processing of feldspar in Rajasthan (India),
                            supplying high-quality products to the market

                        </p>

                        <br />


                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-portfolio-style-two">
                                    <a><img src="img/quartz/snow/sodium.jpg" width="270" height="200" alt="Awesome Image"/></a>
                                </div><!-- /.single-portfolio-style-two -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-portfolio-style-two">
                                    <a><img src="img/quartz/snow/sodium2.jpg" width="270" height="200" alt="Awesome Image"/></a>
                                </div><!-- /.single-portfolio-style-two -->
                            </div>
                        </div>


                        <br />
                        <br />
                        <div class="faq-style-one">
                            <div class="accrodion-grp" data-grp-name="faq-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Applications/Uses</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <div class="row">
                                                <div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <ul class="meta-info">
                                                            <li><i class="fa fa-tag"></i><span>Ceramics</span></li>
                                                            <li><i class="fa fa-tag"></i><span>Glass</span></li>
                                                            <li><i class="fa fa-tag"></i><span>Paint</span></li>
                                                        </ul><!-- /.meta-info -->
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <ul class="meta-info">
                                                            <li><i class="fa fa-tag"></i><span>Plastics</span></li>
                                                            <li><i class="fa fa-tag"></i><span>Cement</span></li>
                                                            <li><i class="fa fa-tag"></i><span>Rubber</span></li>
                                                        </ul><!-- /.meta-info -->
                                                    </div>
                                                </div>

                                                <!--<div>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <ul class="meta-info">
                                                            <li><i class="fa fa-tag"></i><span>Float Glass</span></li>
                                                            <li><i class="fa fa-tag"></i><span>Silicon Carbide, Abrasives</span></li>
                                                            <li><i class="fa fa-tag"></i><span>Television Picture Tube</span></li>
                                                        </ul><!-- /.meta-info
                                            </div>-->
                                        <!--</div>-->

                                    </div>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.faq-style-one -->
            </div><!-- /.service-item-box -->
        </div><!-- /.col-md-9 col-sm-12 col-xs-12 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.service-page -->

<section class="contact-info-style-one">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="title">
                    <h3>Get in <span>touch</span></h3>
                    <p>You will find yourself working in a true partnership that results in an incredible experience, and  product that is the best.</p>
                </div><!-- /.title -->
            </div><!-- /.col-md-7 -->
            <div class="col-md-7">
                <div class="contact-infos">
                    <div class="single-contact-infos">
                        <div class="icon-box">
                            <i class="industrio-icon-phone-call"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Call us on</h3>
                            <p>+91-9461948418</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-contact-infos -->
                    <div class="single-contact-infos">
                        <div class="icon-box">
                            <i class="industrio-icon-envelope"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <h3>Email us</h3>
                            <p>abhineet@kiranminerals.com</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-contact-infos -->
                </div><!-- /.contact-infos -->
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.contianer -->
</section><!-- /.contact-info-style-one -->

</div><!-- /.page-wrapper -->

<footer class="site-footer fixed-footer">
    <?php
    include 'inc/footer.php';
    ?>
</footer><!-- /.site-footer -->

<section class="hidden-sidebar side-navigation">
    <?php
    include 'inc/mobmenu.php';
    ?>
</section><!-- /.hidden-sidebar -->

<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
            </span>
        </div>
    </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/custom.js"></script>

</body>


</html>