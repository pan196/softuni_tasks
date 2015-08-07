using System;

class OddOrEven
{
    static void Main()
    {
        Console.Write("Enter a number: ");
        int number = int.Parse(Console.ReadLine());

        bool isOdd = number % 2 == 1;
        Console.WriteLine("The number is odd: " + isOdd);
    }
}

