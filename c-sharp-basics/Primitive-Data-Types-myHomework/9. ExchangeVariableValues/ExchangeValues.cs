using System;

class ExchangeValues
{
    static void Main()
    {
        int a = 5;
        int b = 10;
        Console.WriteLine("The value of \'a\' is {0}. \nThe value of \'b\' is {1}.", a, b);
        int c = a;
        a = b;
        b = c;
        Console.WriteLine("But we will exchange the values of this two variables. \nAnd now the value of \'a\' is {0}. \nThe value of \'b\' is {1}.", a, b);
    }
}

