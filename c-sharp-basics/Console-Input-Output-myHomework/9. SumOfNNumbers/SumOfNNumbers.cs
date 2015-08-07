using System;

class SumOfNNumbers
{
    static void Main()
    {
        Console.Write("Enter how many numbers you want to sum: ");
        double n = double.Parse(Console.ReadLine());
        double some;
        double sum = 0;
        Console.WriteLine("Enter your numbers: ");
        for (int i = 0; i < n; i++)
        {
            some = double.Parse(Console.ReadLine());
            sum += some;
        }
        Console.WriteLine("The sum of your numbers is " + sum);
    }
}
