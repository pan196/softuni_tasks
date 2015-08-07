using System;
using System.Numerics;

class Tribonacci
{
    static void Main()
    {
        while (true)
        {
            BigInteger t1 = 0;
            BigInteger t2 = BigInteger.Parse(Console.ReadLine());
            BigInteger n = BigInteger.Parse(Console.ReadLine());
            BigInteger result = 0;
            if (n == 1)
            {
                result = t1;
            }
            else if (n == 2)
            {
                result = t2;
            }
            else
            {
                for (BigInteger i = 2; i < n; i++)
                {
                    BigInteger next = t1 + t2;
                    t1 = t2;
                    t2 = next;
                    result = t2;
                    Console.Write(result + " ");
                }
            }
        }
    }
}
