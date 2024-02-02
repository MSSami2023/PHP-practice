<?php
    // if


    // $a = 17;
    // if($a==5)
    // {
    //     echo "Condition is True";
    // }



    // if else


    // if($a==5)
    // {
    //     echo "Condition is True";
    // }else{
    //     echo "Condition is False";
    // }


    // Else If



        // if($a >= 18)
        // {
        //  echo "You Can Apply";
        // }elseif($a >=15)
        // {
        //  echo "You Can Vote After Three Years";
        // }elseif($a >=10)
        // {
        //  echo "You Can Vote After Eight Years";
        // }



        // Switch Case


    //     $lang = "Laravel";
    //     switch ($lang){
    //         case "C#":
    //         echo "Favourite Language is C#";
        
    //         break;
    //         case "Asp.Net":
    //         echo "Favourite Language is Asp.Net";

    //         break;
    //         case "Laravel":
    //         echo "Favourite Language is Laravel";

    //         break;
    //         case "PHP":
    //          echo "Favourite Language is PHP";

    //         break;
    //          default:
    //          echo "Data is Not Found";
    // }
        


    // Nested if



    // $age = 38;
    //     if($age<=30)
    //     {
    //         if($age>=18)
    //         {
    //             echo "You Can Apply";
    //         }else{
    //             echo "You Cannot Apply";
    //         }
    //     }
    //     else{
    //         echo "You Are Aged";
    //     }


                                                // Arrays
        // Index Array
        
        $color = array("Red","Green","Blue");
        print_r($color);



        $color = array("Red","Green","Blue");
        echo "<pre>";
        print_r($color);
        echo "</pre>";



        $color = array("Red","Green","Blue");
        $color [3] ="Yellow";
        $color [4] ="Grey";

        echo "<pre>";
        print_r($color);
        echo "</pre>";





        // Associative array




        $age = array(
            'Afzal'=>25,
            'Jawad'=>32,
            'Kaleem'=>28,
        );

        echo "<pre>";
        print_r ($age['Afzal']);
        echo "</pre>";




       
        $age = array(
            'Afzal'=>25,
            'Jawad'=>32,
            'Kaleem'=>28,
        );
        print_r ($age);

echo "<br>";
echo "<br>";

        $person = array(                                  
            'id'=>101,
            'Name' => 'Bilal',
            'Age' => 19,
            'Adress' => array('Karachi','Lahore')
        );
        print_r($person ['Adress'][2]=['Gujrawala']);
        print_r($person);


    ?>