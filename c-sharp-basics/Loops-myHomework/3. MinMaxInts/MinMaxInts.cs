using System;

class MinMaxInts
{
    static void Main()
    {
        double number = double.Parse(Console.ReadLine());
        int sum = 0;
        double zero = 0;
        double max = -1 / zero;
        double min = 1 / zero;
        double avg = 0.00;

        for (int i = 0; i < number; i++)
        {            
            int yourNumber = int.Parse(Console.ReadLine());

            min = Math.Min(min, yourNumber);
            max = Math.Max(max, yourNumber);
            sum += yourNumber;
        }
        avg = sum / number;
        Console.WriteLine("Minimum value is: " + min);
        Console.WriteLine("Maximum value is: " + max);
        Console.WriteLine("Sum of the numbers is: " + sum);
        Console.WriteLine("Average of the numbers is: {0:F2}", avg);
    }
}

