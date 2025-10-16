<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    PHP 
    <hr>

    <?php 
        // $name = 'code lab' ; 

        // // echo "this is " . "code lab";

        // #echo "hello";

        // // echo print || print_r var_dump 

        // $status = true ; 


        // // if($status){
        // //     echo "this is true $name <br>";
        // // }else{
        // //     echo "<h1 style='color:red'>this is false</h1> <br>";
        // // }

        // $gender = 'male' ;

        // // echo $gender == 'male' ? 'this is male' : 'this is female';

        // $data = null ; 

        // // echo $data ?? 'default';

        // // local vs global

        $global_data = "this is global data";

        function calling(){
            // global $global_data;
            
            $GLOBALS['global_data'];

            echo $global_data;
        }

        // // calling();

        // // echo $userName;


        // function greeting($para = 'default data',$phone = 0){
        //     return "helo $para and $phone";
        // }

        // // echo greeting("sithu",'0924234234234');

        // $math_number = ['one','two','three']; // index arr 

        // $asso_array = [
        //     'name' => 'sithu' , 
        //     'job' => 'programmer'
        // ]; // asso 

        // $multi = ['one' , 'two' , [ 'color' => 'red' ]];


        // echo "<pre>";
        // var_dump($multi);

        // echo $asso_array['name'] .' <br>';

        // for($i = 0 ; $i < count($math_number) ; $i++){
        //     echo $math_number[$i] . "<br>";
        // }

        // // build in function , method 
        // // string fun || math function || arr function || obj function

        // // count($array)  
        // // echo strlen("sithu");  
        // // min max rand(1,100) 
        // // sort($array)

        // playing with date time

        // date_default_timezone_set("Asia/Yangon");

        // $current_date = date("d-m-Y"); // +7 days

        // $warningDate = strtotime( "+7 days" , strtotime($current_date) );

        // echo $current_date . "<br>";
        
        // echo date("d-m-Y",$warningDate);

        // playing with file

        session_start() ; 

        echo "<pre>" ; 

        print_r($_SESSION);

        print_r($_COOKIE);


    ?>
</body>
</html>
