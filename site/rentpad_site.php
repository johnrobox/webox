<?php
// for rentpad;
include 'lib.php';
class rentpad extends fdci_web_crawler {
    
    function getData(){     
            // Create connection

        $originalUrl = "http://rentpad.com.ph/ws/search.htm?a=31&cityName=Cebu&propertyTypeIDs=[]&furnishTypeIDs=[3]&placeIDs=[]&statusTypeIDs=[]&amenityIDs=[]&longMonthRateLow=0&longMonthRateHigh=999999&numBedroomsLow=0&numBedroomsHigh=999&itemsPerPage=15&lengthOfStay=&ham=ham&pageNumber=";
        $page = 0;
        $allItem = 1;

        

$searchUrl = 'http://rentpad.com.ph/ws/search.htm?a=31&cityName=Cebu&propertyTypeIDs=[]&furnishTypeIDs=[3]&placeIDs=[]&statusTypeIDs=[]&amenityIDs=[]&longMonthRateLow=0&longMonthRateHigh=999999&numBedroomsLow=0&numBedroomsHigh=999&itemsPerPage=15&lengthOfStay=&ham=ham&pageNumber=';

$c = 1;
for($b=1;$b<=16;$b++){
    $base_url = 'http://rentpad.com.ph:80/';
    $json = parent::exeCurl($searchUrl.$b);

    $data = (json_decode($json, true));

    for($a=0;$a<15;$a++){

        $reference_no = '';
        $original_site ='';
        $site_link_id = '2';
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


          
         $id = $data['model']['searchResult']['listings'][$a]['id'];
     $con = parent::connection();

     $result = mysqli_query($con,"SELECT * FROM fdci_web_crawler WHERE reference_no = '$id' AND site_link_id = '$site_link_id'");
     if(mysqli_num_rows($result) == 0) {

         $urlTitle = $data['model']['searchResult']['listings'][$a]['urlTitle'];
         
         $address = $data['model']['searchResult']['listings'][$a]['address'];
         $city = $data['model']['searchResult']['listings'][$a]['city'];

         $longTerm = $data['model']['searchResult']['listings'][$a]['leaseLongTerm'];
         $shortTerm = $data['model']['searchResult']['listings'][$a]['leaseShortTerm'];

         $Communitydescription = $data['model']['searchResult']['listings'][$a]['community']['description'];
       

         $longMonthRate     =   $data['model']['searchResult']['listings'][$a]['longMonthRate'];
         $primaryPhoto  =   $data['model']['searchResult']['listings'][$a]['primaryPhoto']['filename'];
         $sqArea    =   $data['model']['searchResult']['listings'][$a]['sqArea'];
         $title =   $data['model']['searchResult']['listings'][$a]['title'];

         if($longTerm==1){
            $termUrl = 'long-term-rentals';

                        $siteUrl = 'http://rentpad.com.ph/'.$termUrl.'/cebu/'.$urlTitle.'/'.$id;
                        $variable =  parent::exeCurl($siteUrl);
                		$xpath = parent::dom($variable);
                        $descriptions = '';
                        $des = $xpath->query('//span[@style="font-size: 14px; line-height: 20px;"]');
                        foreach($des as $desItem){
                            $descriptions = trim(preg_replace("/[\r\n]+/", "", $desItem->nodeValue));
                        }
                        
                        //get images
                          $images = array();
                          foreach ($xpath->query('//div[@id="content-photo"]//img[starts-with(@data-src,"http")]') as $image) {
                           $images[] = $image->getAttribute('data-src');
                          }
                          $allImages = '';
                          $cImage = count($images);
                          for($i=0;$i<$cImage;$i++){
                          	   $allImages = $allImages.' '.$images[$i];
                          }

                          $image  = preg_split("/[\s,]+/",$allImages);
                          $jsonImage = json_encode($image);


                         
                        

         }if($shortTerm==1){
            $termUrl = 'short-term-rentals';
            $siteUrl = 'http://rentpad.com.ph/'.$termUrl.'/cebu/'.$urlTitle.'/'.$id;
            echo ' url title : http://rentpad.com.ph/'.$termUrl.'/cebu/'.$urlTitle.'/'.$id;
            $siteUrl = 'http://rentpad.com.ph/'.$termUrl.'/cebu/'.$urlTitle.'/'.$id;
                       
         }



                                 
                                        $reference_no = $id;
                                        $original_site = 'http://rentpad.com.ph';
                                        $site_link_id  =  '2';
                                        $original_post_link    =  $siteUrl;
                                        $title =  $title;
                                        $description   = $descriptions;
                                        $price =  $longMonthRate;
                                        $product_image =  $jsonImage;
                                        $furnishing    =  'Fully Furnished';
                                        $location  =  $address.', '.$city;
                                        $posted_date   =  '';
                                        $square_area   =  $sqArea;
                                        $bedrooms  = '1';
                                        $bathrooms =  '1';
                                        $floor =  '';
                                        $name_of_posted_person =  '';
                                        $contact_mobile    = '';
                                        $contact_email = '';
                                        $contact_landline  =  '';
                                        $created   =  '';
                                        $modified  =  '';
                                        $status    =  1;

        parent::insertData($reference_no,$original_site,$site_link_id,$original_post_link,$title,$description,$price,$product_image,$furnishing,$location,$posted_date,$square_area,$bedrooms,$bathrooms,$floor,$name_of_posted_person,$contact_mobile,$contact_email,$contact_landline,$status);
        }
         $c++;
    }
}

                                    $numberOfItem++;
                                    $allItem++;
                
         

    }//end of url function 
}// end of class


$b = new rentpad();

echo $b->getData();
?>