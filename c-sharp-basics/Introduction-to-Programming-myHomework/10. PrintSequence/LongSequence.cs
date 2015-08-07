using System;

class LongSequence
{
    static void Main()
    {
        for (int i = 2; i <= 1000; i++)
        {
            int a;
            if (i % 2 == 0) 
            {
                a = i;
            } 
            else 
            {
                a = -i;
            }
            if (i % 10 == 1)
            {
                Console.WriteLine(a + ", ");
            }
            else
            {
                Console.Write(a + ", ");
            }
        }
        Console.WriteLine(-1001);
    }
}
