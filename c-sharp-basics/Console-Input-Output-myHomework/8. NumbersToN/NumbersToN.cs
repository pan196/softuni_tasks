using System;

class NumbersToN
{
    static void Main()
    {
        Console.WriteLine("Enter an integer number \'n\': ");
        int n = int.Parse(Console.ReadLine());
        Console.WriteLine("The numbers from 1 to \'n\' are: ");
        for (int i = 1; i <= n; i++)
        {
            Console.WriteLine(i);
        }
    }
}

