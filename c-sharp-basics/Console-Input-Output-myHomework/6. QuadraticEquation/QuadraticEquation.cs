using System;

class Program
{
    static void Main()
    {
        Console.WriteLine("ax^ + bx + c = 0");
        Console.Write("Enter coefficient for \'a\': ");
        double a = double.Parse(Console.ReadLine());
        Console.Write("Enter coefficient for \'b\': ");
        double b = double.Parse(Console.ReadLine());
        Console.Write("Enter coefficient for \'c\': ");
        double c = double.Parse(Console.ReadLine());

        double d = (b * b) - 4 * a * c;
        if (d < 0)
        {
            Console.WriteLine("No real roots");
        }
        else if (d == 0)
        {
            double x = (-1 * b) / (2 * a);
            Console.WriteLine("x = " + x);
        }
        else if (d > 0)
        {
            double xOne = ((-1 * b) + (Math.Sqrt(d))) / (2 * a);
            double xTwo = ((-1 * b) - (Math.Sqrt(d))) / (2 * a);
            if (xOne == xTwo)
            {
                Console.WriteLine("x1 = x2 =" + xOne);
            }
            else
            {
                Console.WriteLine("x1 = {0} x2 = {1}", xOne, xTwo);
            }
        }
    }
}