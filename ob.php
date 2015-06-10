<?php

class fdci_web_crawler { 
       public function exeCurl($source_url){
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $source_url);
          curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT x.y; Win64; x64; rv:10.0.1) Gecko/20100101 Firefox/10.0.1');
          curl_setopt($ch, CURLOPT_REFERER, '');
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $curlResults= curl_exec($ch);
          curl_close($ch);
          return $curlResults;
        }

        function dom($inputUrl){
            $dom = new DOMDocument();
            @$dom->loadHTML($inputUrl);
            $xpath = new DOMXPath($dom);
            return $xpath;
        }
        function insertData($reference_no,$original_site,$site_link_id,$original_post_link,$title,$description,$price,$product_image,$furnishing,$location,$posted_date,$square_area,$bedrooms,$bathrooms,$floor,$name_of_posted_person,$contact_mobile,$contact_email,$contact_landline,$created,$modified,$status){

            

        }
}


// rent pad;
class locanto extends fdci_web_crawler {
    
    function getData(){
        $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "2thinkers_cebu";
            
            // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        $originalUrl = "http://www.locanto.ph/geo/539918/Houses-for-Rent/307/Cebu-City/?sort=dist&dist=&post_type=1&page=";
        $page = 0;
        $allItem = 1;
        $reference_no = '';
        $original_site ='';
        $site_link_id = '';
        $original_post_link = '';
        $title = '';
        $description = '';
        $price = '';
        $product_image = '';
        $furnishing = '';
        $location = '';
        $posted_date = '';
        $square_area    = '';
        $bedrooms   =   '';
        $bathrooms  =   '';
        $floor  =   '';
        $name_of_posted_person  =   '';
        $contact_mobile =   '';
        $contact_email = '';
        $contact_landline = '';
        $created = '';
        $modified = '';
        $status = '';


            ## Get the data from page 1 to bottom
            do{
                $urls = $originalUrl.$page;
                $variable =  parent::exeCurl($urls);
                $xpath = parent::dom($variable);
                #get text header
                $properties = $xpath->query('//div[@class="resultRow"]'); 

                #loop through each of the row items
                $numberOfItem = 0;

                foreach($properties as $container) {

                              $arr = $container->getElementsByTagName("a"); // get the anchor tag
                              $img = $container->getElementsByTagName("img");

                              $url = "";
                              $x = 0;
                                foreach ($arr as $index => $item) {
                                    $href = $item->getAttribute("href");
                                    if($x === 1) {
                                        $url = $href;   
                                    }
                                    $x++;
                                }

                                ## Open single html

                                $variable =  parent::exeCurl($url);
                                $xpathRow = parent::dom($variable);


                                ## Get the title 
                                $rowTitle = $xpathRow->query('//span[@class="h2"]');
                                $propTitle = "";
                                foreach ($rowTitle as $rowItem) {
                                    $text = trim(preg_replace("/[\r\n]+/", " ", $rowItem->nodeValue));
                                    $propTitle = $text;
                                }
                              
                                ## Get the price
                                $rowPrice = $xpathRow->query('//div[@class="h1gray"]');
                                $propPrice = "";
                                foreach ($rowPrice as $rowItem) {
                                    $text = trim(preg_replace("/[\r\n₱,m²BR]+/", "", $rowItem->nodeValue));
                                    $propPrice = $text;
                                    $explodedPrice = explode(" ", $propPrice);
                                }

                                ## Get the ID Number
                                $rowID = $xpathRow->query('//div[@id="ad-info-header"]');
                                $propID = "";
                                foreach ($rowID as $rowItem) {
                                    $text = trim(preg_replace("/[\r\nAdID: ]+/", "", $rowItem->nodeValue));
                                    $propID = $text;
                                }

                                ## Get the Street Address
                                $rowStreet = $xpathRow->query('//span[@itemprop="streetAddress"]');
                                $propStreet = "";
                                foreach ($rowStreet as $rowItem) {
                                    $text = trim(preg_replace("/[\r\n]+/", "", $rowItem->nodeValue));
                                    $propStreet = $text;
                                }

                                ## Get the Local Address
                                $rowLocation = $xpathRow->query('//span[@itemprop="addressLocality"]');
                                $propCity = "";
                                foreach ($rowLocation as $rowItem) {
                                    $text = trim(preg_replace("/[\r\n]+/", "", $rowItem->nodeValue));
                                    $propCity = $text;
                                }

                                ## Get the Country
                                $rowCountry = $xpathRow->query('//span[@itemprop="addressCountry"]');
                                $propCountry = "";
                                foreach ($rowCountry as $rowItem) {
                                    $text = trim(preg_replace("/[\r\n]+/", "", $rowItem->nodeValue));
                                    $propCountry = $text;
                                }

                                ## Get the Description
                                $rowDesc = $xpathRow->query('//div[@id="js-user_content"]');
                                $propDesc = "";
                                foreach ($rowDesc as $rowItem) {
                                    $text = trim(preg_replace("/[\r\n]+/", "", $rowItem->nodeValue));
                                    $propDesc = $text;
                                }

                                ## Get the front image
                                $rowImg = $xpathRow->query('//a[@title="Click to view larger image!"]/@href');
                                $img = "";
                                foreach ($rowImg as $data) {
                                    $prop_front_img = $data->nodeValue;
                                }

                                ## Get the date
                                $rowDate = $xpathRow->query('//div[@class="indent24"]//span/@title');
                                $date = "";
                                foreach ($rowDate as $rowItem) {
                                    $date = $rowItem->nodeValue;
                                }

                                ## Get all images
                                $rowImg = $xpathRow->query('//a[@class="tn_img js-tn_img"]//@href');
                                $prop_imgs = array();
                                foreach ($rowImg as $row_item_img) {
                                    $prop_imgs[] = $row_item_img->nodeValue;
                                    // $imgs = array();
                                    $imgs = '';
                                    foreach ($prop_imgs as $rowItem) {
                                        $imgs = $imgs.' '.$rowItem;
                                    }
                                }

                                ## Location condition
                                if ($propStreet != '') {
                                    $location = $propStreet.', '.$propCity.', '.$propCountry;
                                } else {
                                    $location = $propCity.', '.$propCountry;
                                }

                                /* working */
                                echo "<hr>";
                                echo "<br>";
                                $image  = preg_split("/[\s,]+/",$imgs);
                                $jsonImage = json_encode($image);
                                echo "<pre>";
                                echo $jsonImage;        // prints images
                                echo "</pre>";
                                echo "<br>";
                                echo "<br>";
                                echo "<b>Date: </b>" . $date . "<br>";
                                echo "<b>Image: </b> " . $prop_front_img . "<br>";      // gets the front image
                                echo "<b>Original Link: </b> " . $url . "<br>";
                                echo "<b>Title: </b> " . $propTitle . "<br>";
                                echo "<b>ID: </b> " . $propID . "<br>";
                                echo "<b>Location: </b> " . $location . "<br>";
                                echo "<b>Exploded Price: </b> " . $explodedPrice[0] . "<br>";
                                echo "<b>Description: </b> " . $propDesc . "<br>";
                                echo "<br>";
                                echo "<hr>";
                                        $reference_no = $propID;
                                        $original_site = '';
                                        $site_link_id  =  '1';
                                        $original_post_link    =  $url;
                                        $title =  $propTitle;
                                        $description   = $propDesc;
                                        $price =  $explodedPrice[0];
                                        $product_image =  $jsonImage;
                                        $furnishing    =  '';
                                        $location  =  $location;
                                        $posted_date   =  $date;
                                        $square_area   =  '';
                                        $bedrooms  = '';
                                        $bathrooms =  '';
                                        $floor =  '';
                                        $name_of_posted_person =  '';
                                        $contact_mobile    = '';
                                        $contact_email = '';
                                        $contact_landline  =  '';
                                        $created   =  '';
                                        $modified  =  '';
                                        $status    =  1;
                               


            // Check connection

            $sql = "INSERT INTO fdci_web_crawler (
                reference_no,
                original_site,
                site_link_id,
                original_post_link,
                title,
                description,
                price,
                product_image,
                furnishing,
                location,
                posted_date,
                square_area,
                bedrooms,
                bathrooms,
                floor,
                name_of_posted_person,
                contact_mobile,
                contact_email,
                contact_landline,
                created,
                modified,
                status
            )
            VALUES (
                '$reference_no',
                '$original_site',
                '$site_link_id',
                '$original_post_link',
                '$title',
                '$description',
                '$price',
                '$product_image',
                '$furnishing',
                '$location',
                '$posted_date',
                '$square_area',
                '$bedrooms',
                '$bathrooms',
                '$floor',
                '$name_of_posted_person',
                '$contact_mobile',
                '$contact_email',
                '$contact_landline',
                '$created',
                '$modified',
                '$status',
                )";

            mysqli_query($conn, $sql);
            mysqli_close($conn);











                                //parent::insertData($reference_no,$original_site,$site_link_id,$original_post_link,$title,$description,$price,$product_image,$furnishing,$location,$posted_date,$square_area,$bedrooms,$bathrooms,$floor,$name_of_posted_person,$contact_mobile,$contact_email,$contact_landline,$created,$modified,$status);
                                die();
                                    $numberOfItem++;
                                    $allItem++;
                
                }
                $page++;
                die();
            }while($numberOfItem==25);{
                die();
            }// end of while loop

    }//end of url function 
}// end of class


$b = new locanto();

echo $b->getData();

?>