<!Doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div class="bg-sky-400 items-center h-screen w-screen  flex justify-center">
        <div class="grid grid-row-2">
            <h1 id="win" class="text-center text-4xl font-bold"></h1>
            <button id="restart" class="self-center flex items-center p-2 justify-center rounded-full bg-lime-200  shadow-inner hover:bg-lime-400 transition-all duration-300 ease-in-out" onclick="window.location.reload()">Restart Game</button>
        </div>
        <div class="grid gap-1 grid-cols-3 grid-rows-3 text-center text-amber-300">
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="1"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="2"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="3"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="4"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="5"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="6"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="7"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="8"></div>
            <div class="boxs h-24 w-24 cursor-pointer bg-gray-700 flex items-center justify-center text-4xl font-bold" id="9"></div>
        </div>
    </div>
</body>
<script>
    let current = 'X';
    $('#restart').hide()
    $('.boxs').on('click',function(event) { 
        let id = '#' + event.target.id;
        // console.log(id);
        if(current == 'X')
        {
            $(id).html('X');
            $(id).css('pointer-events','none');
            current = 'O';
        }
        else
        {
            $(id).html('O');
            $(id).css('pointer-events','none');
            current = 'X';
        }
        var one = $('#1').html();
        var two = $('#2').html();
        var three = $('#3').html();
        var four = $('#4').html();
        var five = $('#5').html();
        var six = $('#6').html();
        var seven = $('#7').html();
        var eight = $('#8').html();
        var nine = $('#9').html();
        var data = false;
        if((one == 'X' || one == 'O') && (two == 'X' || two == 'O') && (three == 'X' || three == 'O') && one == two && two == three & three == one){
            data = true;
            $('#restart').show();
            $('.boxs').hide();
            return $('#win').html('Congratulations on your incredible win!');
        }
        else if((four == 'X' || four == 'O') && (five == 'X' || five == 'O') && (six == 'X' || six == 'O') && four == five && five == six & six == four){
            data = true;
            $('.boxs').hide();
            $('#restart').show();
            return $('#win').html('Congratulations on your incredible win!');
        }
        else if((seven == 'X' || seven == 'O') && (eight == 'X' || eight == 'O') && (nine == 'X' || nine == 'O') && seven == eight && eight == nine & nine == seven){
            data = true;
            $('#restart').show();
            $('.boxs').hide();
            return $('#win').html('Congratulations on your incredible win!');
        }
        else if((one == 'X' || one == 'O') && (five == 'X' || five == 'O') && (nine == 'X' || nine == 'O') && one == five && five == nine & nine == one){
            data = true;
            $('#restart').show();
            $('.boxs').hide();
            return $('#win').html('Congratulations on your incredible win!');
        }
        else if((three == 'X' || three == 'O') && (five == 'X' || five == 'O') && (seven == 'X' || seven == 'O') && three == five && five == seven & seven == three){
            data = true;
            $('#restart').show();
            $('.boxs').hide();
            return $('#win').html('Congratulations on your incredible win!');
        }
        else if((one == 'X' || one == 'O') && (four == 'X' || four == 'O') && (seven == 'X' || seven == 'O') && one == four && four == seven & seven == one){
            data = true;
            $('.boxs').hide();
            $('#restart').show();
            return $('#win').html('Congratulations on your incredible win!');
        }
        else if((two == 'X' || two == 'O') && (five == 'X' || five == 'O') && (eight == 'X' || eight == 'O') && two == five && five == eight & eight == two){
            data = true;
            $('#restart').show();
            $('.boxs').hide();
            return $('#win').html('Congratulations on your incredible win!');
        }
        else if((three == 'X' || three == 'O') && (six == 'X' || six == 'O') && (nine == 'X' || nine == 'O') && three == six && six == nine & nine == three){
            data = true;
            $('.boxs').hide();
            return $('#win').html('Congratulations on your incredible win!');
        }

        if(one != '' && two != '' && three != '' && four != '' && five != '' && six != '' && seven != '' && eight != '' && nine != '' && !data){
            $('.boxs').hide();
            $('#restart').show();
            $('#win').html("Looks like it's a draw!");
        }
    });   
</script>
</html>