using System;

class SortThreeNums
{
    static void Main()
    {
        while (true)
        {
            Console.WriteLine("Enter three numbers: ");
            double first = double.Parse(Console.ReadLine());
            double second = double.Parse(Console.ReadLine());
            double third = double.Parse(Console.ReadLine());

            if (first > second && first > third)
            {
                if (second > third)
                {
                    Console.Write("The sorted numbers are in this order: {0} {1} {2}", first, second, third);
                }
                else
                {
                    Console.Write("The sorted numbers are in this order: {0} {1} {2}", first, third, second);
                }
            }
            else if (second > first && second > third)
            {
                if (first > third)
                {
                    Console.Write("The sorted numbers are in this order: {0} {1} {2}", second, first, third);
                }
                else
                {
                    Console.Write("The sorted numbers are in this order: {0} {1} {2}", second, third, first);
                }
            }
            else if (third > first && third > second)
            {
                if (second > first)
                {
                    Console.Write("The sorted numbers are in this order: {0} {1} {2}", third, second, first);
                }
                else
                {
                    Console.Write("The sorted numbers are in this order: {0} {1} {2}", third, first, second);
                }
            }
            Console.WriteLine();
        }
    }
}

