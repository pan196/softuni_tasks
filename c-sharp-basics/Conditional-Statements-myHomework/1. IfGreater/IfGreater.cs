using System;

class IfGreater
{
    static void Main()
    {
        Console.Write("Enter value of A: ");
        int a = int.Parse(Console.ReadLine());
        Console.Write("Enter value of B: ");
        int b = int.Parse(Console.ReadLine());
        
        int c = a;
        if (a > b)
        {
            b = a;
            c = b;
            Console.WriteLine("A is greater then B - We will exchange their values: A = {0} B = {1}", a, b);
        }
        else
        {
            Console.WriteLine("A isn't greater then B - We will not exchange their values: A = {0} B = {1}", a, b);

        }
    }
}

