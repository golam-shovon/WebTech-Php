<html >
<head>
    <title>Craps</title>
    <style>
        div.center
        {
			width: 100%;
			padding: 5px;
			text-align: center;
        }
        .img-container
		{
			float: left;
			width: 20%;
        }	
        .playarea
		{
			text-align: center;
		}
        .clearfix
		{
			position: relative;
			width: 100%;
			left: 30%;
		}
    </style>
</head>
<body>
    <form name="index" method="post" action="index.php">
        <div class="center">
        <br>        
        <p id="point"> point </p>
        <br>    
        <div class="center">
        <br>        
        <p id="result"> result </p>
        <br>
        <br>
        <div class="playarea">
				<br/>
				<br/>
				<div>
					<button type="button" onclick="play()" style="width: 20%; padding: 30px; font-size: 28px;">
					    Roll
				    </button>
				</div>
				<div class="clearfix">
					<br/>
					<br/>
					<div class="img-container">
						<img src="pic/1.png" id="dice1" style="width:100%">
					</div>
					<div class="img-container">
						<img src="pic/2.png" id="dice2" style="width:100%">
					</div>
				</div>
			</div>
    </from>
</body>
</html>
<script type="text/javascript">
	function rollDice()
	{
        var dice1 = 0, dice2 = 0;
        
        dice1 = Math.floor( 1 + Math.random() * 6 );
        switch (dice1)
        {
	        case 1:
	            document.getElementById("dice1").src = "pic/1.png";
	            break;
	        case 2:
                document.getElementById("dice1").src = "pic/2.png";
                break;
            case 3:
                document.getElementById("dice1").src = "pic/3.png";
                break;
            case 4:
                document.getElementById("dice1").src = "pic/4.png";
                break;
            case 5:
                document.getElementById("dice1").src = "pic/5.png";
                break;
            case 6:
                document.getElementById("dice1").src = "pic/6.png";
                break;
        }
        
		dice2 = Math.floor( 1 + Math.random() * 6 );
        switch (dice2)
        {
            case 1:
                document.getElementById("dice2").src = "pic/1.png";
                break;
            case 2:
                document.getElementById("dice2").src = "pic/2.png";
                break;
            case 3:
                document.getElementById("dice2").src = "pic/3.png";
                break;
            case 4:
                document.getElementById("dice2").src = "pic/4.png";
                break;
            case 5:
                document.getElementById("dice2").src = "pic/5.png";
                break;
            case 6:
                document.getElementById("dice2").src = "pic/6.png";
                break;
        }
		
		return dice1 + dice2;
    }

    // variables used to test the state of the game
    var WON = 0, LOST = 1, CONTINUE_ROLLING = 2;
    // other variables used in program
    var firstRoll = true,    // true if first roll
        sumOfDice = 0,        // sum of the dice
        myPoint = 0,           // point if no win/loss on first roll
        gameStatus = CONTINUE_ROLLING;  // game not over yet
	

    // process one roll of the dice
    function play()
    {
        if ( firstRoll ) {
            // first roll of the dice
            sumOfDice = rollDice();
            switch ( sumOfDice )
            {
                case 7: case 11:
	                // win on first roll
	                gameStatus = WON;
	                document.getElementById("point").value = ""; // clear point field
                    location.reload(true);
	                break;
                
                case 2: case 3: case 12:
	                // lose on first roll
	                gameStatus = LOST;
	                document.getElementById("point").value = ""; // clear point field
                    location.reload(true);
	                break;
                
	            default:
                    // remember point
                    gameStatus = CONTINUE_ROLLING;
                    myPoint = sumOfDice;
                    document.getElementById("point").innerHTML = "Point: "+myPoint;
                    firstRoll = false;
            }
        }
        else
        {
            sumOfDice = rollDice();
            
            if ( sumOfDice == myPoint )
            {
                gameStatus = WON;
            }
            else if ( sumOfDice == 7 || sumOfDice == 11 )
            {
                gameStatus = LOST;
            }
            else
            {
                myPoint = sumOfDice;
                document.getElementById("point").innerHTML = "Point: "+myPoint;
            }
        }
        
        if ( gameStatus == CONTINUE_ROLLING )
        {
            //window.alert ("Roll again");
            document.getElementById("result").innerHTML = "Roll Again";
        }
        else
        {
            if ( gameStatus == WON )
            {
                setTimeout(function ()
                {
                    window.alert ("Player wins. " + "Click Roll Dice to play again.");
                }, 100)
                document.getElementById("result").innerHTML = "Player wins.";
                document.getElementById("point").value = "";
                location.reload(true);
            }
            else
            {
                setTimeout(function ()
                {
                    window.alert ("Player loses. " + "Click Roll Dice to play again.");
                }, 100)
                document.getElementById("result").innerHTML = "Player loses.";
                document.getElementById("point").value = "";
                location.reload(true);
            }
            firstRoll = true;
        }
    }
</script>