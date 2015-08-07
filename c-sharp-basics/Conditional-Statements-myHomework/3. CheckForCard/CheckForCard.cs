using System;

class CheckForCard
{
    static void Main()
    {
        Console.WriteLine("Enter valid card sign: ");
        string cardSign = (Console.ReadLine());

        if (cardSign == "A" || cardSign == "K" || cardSign == "Q" || cardSign == "J")
        {
            Console.WriteLine("yes");
        }
        else if (cardSign == "2" || cardSign == "3" || cardSign == "4" || cardSign == "5" || cardSign == "6")
        {
            Console.WriteLine("yes");
        }
        else if (cardSign == "7" || cardSign == "8" || cardSign == "9" || cardSign == "10")
        {
            Console.WriteLine("yes");
        }
        else
        {
            Console.WriteLine("no");
        }
    }
}

