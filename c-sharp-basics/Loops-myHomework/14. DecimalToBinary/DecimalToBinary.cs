using System;

class DecimalToBinary
{
    static void Main()
    {
        Console.Write("Enter a decimal number: ");
        long de = long.Parse(Console.ReadLine());
        string bi = string.Empty;
        long biDigit;

        while (de > 0)
        {
            biDigit = de % 2;
            de = de / 2;
            bi = biDigit.ToString() + bi;
        }

        Console.WriteLine(bi);
    }
}
