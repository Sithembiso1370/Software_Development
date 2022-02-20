<?php





class Request extends DB_Master {





    public function getRequestData(){
        if (isset($_GET) or isset($_POS)) {
            # code...
            return $_REQUEST;
        }
        else{
            return 0;
        }
    }

    public function QueryDB4Data(){

    }
}



?>


<div class="myform">
    <form action="" method="POST">
        <input type="text" placeholder="rand text" name="text1">
        <input type="text" placeholder="rand text" name="text2">
        <input type="submit" placeholder="rand text" name="submit">
    </form>
    <div class="output">
        <?php
            $request = new Request();

            $my_array = [];

            foreach ($request->getRequest() as $key => $value) {
                # code...
                $my_array[$key] = $value;
            }

            var_dump($my_array);
            

        ?>  
    </div>
</div>