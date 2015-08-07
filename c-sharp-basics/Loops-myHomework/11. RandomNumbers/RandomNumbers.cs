using System;

class RandomNumbers
{
    static void Main()
    {
        
        Console.Write("Number of integers: ");
        int number = int.Parse(Console.ReadLine());
        Console.Write("Enter the diapason: ");
        int minValue = int.Parse(Console.ReadLine());
        int maxValue = int.Parse(Console.ReadLine());
        Random random = new Random();

        if (minValue < maxValue)
        {
            for (int i = 0; i < number; i++)
            {
                Console.WriteLine("The random numbers: {0} ", random.Next(minValue, maxValue + 1));
            }
        }
        else
        {
            Console.WriteLine("Incorrect input");
        }

    }
}
