using System;

class ThreeNumBiggest
{
    static void Main()
    {
        Console.WriteLine("Enter three numbers: ");
        double first = double.Parse(Console.ReadLine());
        double second = double.Parse(Console.ReadLine());
        double third = double.Parse(Console.ReadLine());

        
        if (first > third && third > second)
        {
            Console.WriteLine("Biggest number is: " + first);
        }
        else if (first > second && second > third)
        {
            Console.WriteLine("Biggest number is: " + first);
        }
        else if (second > first && first > third)
        {
            Console.WriteLine("Biggest number is: " + second);
        }
        else if (second > third && third > first)
        {
            Console.WriteLine("Biggest number is: " + second);
        }
        else if (third > first && first > second)
        {
            Console.WriteLine("Biggest number is: " + third);
        }
        else if (third > second && second > first)
        {
            Console.WriteLine("Biggest number is: " + third);
        }
    }
}

