using System;

class CardDeck
{
    static void Main()
    {
        string card = "2";
        for (int i = 2; i <= 14; i++)
        {
            card = Convert.ToString(i);
            if (i <= 10)
            {                
                Console.Write(i);
            }
            else if (i == 11)
            {
                card = "J";
                Console.Write(card);
            }
            else if (i == 12)
            {
                card = "Q";
                Console.Write(card);
            }
            else if (i == 13)
            {
                card = "K";
                Console.Write(card);
            }
            else if (i == 14)
            {
                card = "A";
                Console.Write(card);
            }
            for (int color = 1; color <= 4; color++)
            {
                switch (color)
                {
                    case 1: Console.Write('\u2663'); break;                        
                    case 2: Console.Write('\u2666'); break;
                    case 3: Console.Write('\u2665'); break;
                    case 4: Console.Write('\u2660'); break;
                }
                if (color < 4)
                {
                    Console.Write(" " + card);
                }
                else if (color ==4)
                {
                    Console.WriteLine();
                }
            }
        }
        Console.WriteLine();

    }
}

