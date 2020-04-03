<body>
    <?php
        $array_new_year=get('year','year');//get the year from the table year from the database
        if (in_array(date('Y'),$array_new_year)){//if it exists in the array: nothing
            
        }
        else {//else add to the database
            addYear(date('Y'),'test');
        }
    ?>
</body>
