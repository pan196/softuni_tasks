using System;

class NullValuesArithmetic
{
    static void Main()
    {
        int? a = null;
        double? b = null;
        Console.WriteLine(a);
        Console.WriteLine(b);
        a = 5;
        b = 10;
        Console.WriteLine(a);
        Console.WriteLine(b);
    }
}

