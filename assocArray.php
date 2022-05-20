<html>
    <body>
        <?php
        $month = array ('January','February','March','April','May','June','July','August','September','October','November','December');
        $monthDays = array ('January'=>31,'February'=>30,'March'=>31,'Apri'=>30,'May'=>31,'June'=>30,'July'=>31,
        'August'=>31,'September'=>30,'October'=>31,'November'=>30,'December'=>31);
        foreach ($monthDays as $item)
        {
            echo "month [i] - $item <br>";
            $i++;
        } echo "<br>";
        $month = array ('January','February','March','April','May','June','July','August','September','October','November','December');
        $monthDays = array ('January'=>31,'February'=>30,'March'=>31,'Apri'=>30,'May'=>31,'June'=>30,'July'=>31,
        'August'=>31,'September'=>30,'October'=>31,'November'=>30,'December'=>31);
        foreach ($monthDays as $item)
        {
            if ($item == 30)
            {
                echo "month[i] - $item <br>";
            }
            $i++;
        }
        ?>
        </body>
        </html>