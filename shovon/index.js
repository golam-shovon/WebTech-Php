function dealcard()
	{
        var card1 = 0, card2 = 0;
        
        card1 = Math.floor( 1 + Math.random() * 6 );
        switch (card1)
        {
	        case 1:
	            document.getElementById("card1").src = "cards/2_of_clubs.png";
	            break;
	        case 2:
                document.getElementById("card1").src = "cards/2_of_diamonds.png";
                break;
            case 3:
                document.getElementById("card1").src = "cards/2_of_spades.png";
                break;
            case 4:
                document.getElementById("card1").src = "cards/3_of_diamonds.png";
                break;
            case 5:
                document.getElementById("card1").src = "cards/7_of_clubs.png";
                break;
            case 6:
                document.getElementById("card1").src = "cards/7_of_diamonds.png";
                break;
        }
        
        card2 = Math.floor( 1 + Math.random() * 6 );
        switch (card2)
        {
            case 1:
                document.getElementById("card2").src = "cards/2_of_clubs.png";
                break;
            case 2:
                document.getElementById("card2").src = "cards/queen_of_clubs2.png";
                break;
            case 3:
                document.getElementById("card2").src = "cards/queen_of_diamonds.png";
                break;
            case 4:
                document.getElementById("card2").src = "cards/king_of_spades2.png";
                break;
            case 5:
                document.getElementById("card2").src = "cards/jack_of_clubs.png";
                break;
            case 6:
                document.getElementById("card2").src = "cards/9_of_clubs.png";
                break;
        }
      }