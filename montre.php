
    <?php 
    date_default_timezone_set('Indian/Antananarivo');
       $seconde =  date('s');
       $minute =  date('i');
       $heure =  date('H');

    ?>
     <script>
          
          bcle=0;

          function clock()
          {
            if (bcle == 0)
            {
              heure = <?php echo $heure ?>;
              min = <?php echo $minute ?>;
              sec = <?php echo $seconde ?>; 
            }
            else
            {
              sec ++;
              if (sec == 60)
              {
                sec=0;
                min++;
                if (min == 60)
                {
                  min=0;
                  heure++;
                };
              };
            };
            txt="";
            if(heure < 10)
            {
              txt += "0";
            }
            txt += heure+ ":";
            if(min < 10)
            {
              txt += "0"
            }
            txt += min + ":";
            if(sec < 10)
            {
              txt += "0"
            }
            txt += sec ;
            timer = setTimeout("clock()",1000);
            bcle ++;
            document.clock.date.value = txt ;
          }
    </script>
        <style>
    form{
        display:inline;
    }
    .style {border-width: 0;background-color: #0f0f0f;color: #F2f2f2;font-size: 27px;font-family: Monitha;border-radius: 10px;}
    </style>

    </head>
    <body onLoad="clock()">

    <form name="clock" onSubmit="0">
    <input type="text" name="date" size="5" readonly="true" class="style">
    </form>
