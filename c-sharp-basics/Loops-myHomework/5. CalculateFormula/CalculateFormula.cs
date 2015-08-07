using System;

class CalculateFormula
{
    static void Main()
    {
        //input
        Console.WriteLine("Enter two integer numbers: ");
        int n = int.Parse(Console.ReadLine());
        int x = int.Parse(Console.ReadLine());
        int y = x;
        double factorial = 1;
        double sum = 1;
        //logic
        for (int i = 1; i <= n; i++)
        {
            factorial *= i;
            if (i == 1)
            {
                x = x;
            }
            else if (i > 1)
            {
                x = x * y;
            }
            sum += (factorial / x);
        }
        Console.WriteLine("{0:0.00000}", sum);
        //output
    }
}

