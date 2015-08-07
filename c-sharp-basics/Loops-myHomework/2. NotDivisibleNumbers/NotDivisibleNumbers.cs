using System;

class NotDivisibleNumbers
{
    static void Main()
    {
        Console.Write("Enter a number: ");
        int yourNumber = int.Parse(Console.ReadLine());
        int sum = 0;
        
        for (int i = 1; i <= yourNumber; i++)
		{
            if (i % 7 == 0 || i % 3 == 0)
            {
                continue;
            }
            Console.Write(i + " ");
        }
        Console.WriteLine();
    }
}

