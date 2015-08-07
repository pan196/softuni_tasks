using System;

class BinaryToDecimal
{
    static void Main()
    {
        Console.Write("Enter a binary number: ");
        string bi = Console.ReadLine();
        long de = 0;
       
        
        for (int i = 0; i < bi.Length; i++)
        {
            if (bi[bi.Length - i - 1] == '0')
            {
                continue;
            }

            de += (long)Math.Pow(2, i);
        }

        Console.WriteLine(de);
    }
}
